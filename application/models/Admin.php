<?php

namespace application\models;
use application\core\Model;

class Admin extends Model 
{   
    /* Добавление записей */
    public function add($tag, $title, $cost ,$status, $img){
        $sql = "INSERT INTO `product`(`id_product`,`tag`,`title`,`cost`,`status`, `similar`) VALUES (NULL, :tag, :title, :cost, :status , '1')";
        $this->db->query($sql, ["tag" => $tag,"title" => $title, "cost" => $cost, "status" => $status ]);
        
        $sql = "SELECT MAX(`id_product`) AS max FROM `product`";
        $max = $this->db->row($sql)[0]['max'];

        
        $dir = './public/img/';
        for ($i = 0; $i < count($img['name']); $i++){
            $dirF = $dir.basename($img['name'][$i]);
            if (move_uploaded_file($img['tmp_name'][$i], $dirF)){
                $sql = "INSERT INTO `img` (`id_img`, `way`, `id_product`) VALUES (NULL, :way, $max);";
                $this->db->query($sql, ["way" => $img['name'][$i]]);
            }
        }
    }
    /* Добавление похожих товаров */
    public function add_simul($similar){
        $sql = "SELECT MAX(`id_product`) AS max FROM `product`";
        $max = $this->db->row($sql)[0]['max'];

        for ($i = 0; $i < count($similar); $i++){
            $id = $similar[$i];
            $sql = "INSERT INTO `sumilar` (`id_similar`,`id_product`, `id_sp`) VALUES (NUll, '$max','$id')";
            $this->db->query($sql);
        }
    }
    /* Получение продуктов || список админов || список заказов */
    public function getlist(){
        $sql = "SELECT * FROM `admin`";
        $admin = $this->db->row($sql);


        $sql = "SELECT * FROM `orders`";
        $order = $this->db->row($sql);

        $sql = "SELECT * FROM `product`";
        $result = [
            'product' => $this->db->row($sql),
            'admin' => $admin,
            'order' => $order,
        ];
        return $result;
    }
    /* Удаление записей */
    public function del($id){
        $sql = "DELETE FROM `product` WHERE `product`.`id_product` = :id";
        $this->db->query($sql, ["id" => $id]);

        $sql = "DELETE FROM `sumilar` WHERE `sumilar`.`id_product` = :id";
        $this->db->query($sql, ["id" => $id]);

        $sql = "DELETE FROM `img` WHERE `img`.`id_product` = :id";
        $this->db->query($sql, ["id" => $id]);
    }
    /* Выбор редактируемого продукта */
    public function edit_sel($id){
        $sql = "SELECT * FROM `img` WHERE `id_product` = :id";
        $img = $this->db->row($sql,["id" => $id]);

        $sql = "SELECT * FROM `product` JOIN `sumilar` ON `product`.`id_product` = `sumilar`.`id_sp` WHERE `sumilar`.`id_product` = :id" ;
        $sim = $this->db->row($sql,["id" => $id]);

        $sql = "SELECT * FROM `product` WHERE `product`.`id_product` NOT IN (select `sumilar`.`id_sp` FROM `sumilar` WHERE `sumilar`.`id_product` = '$id')";
        $all = $this->db->row($sql);

        $sql = "SELECT * FROM `product` WHERE `id_product`= :id";
        $result = [
            'product' => $this->db->row($sql, ["id" => $id]),
            'img' => $img ,
            'sim' => $sim ,
            'all' => $all,
        ];
        return $result;
    }
    /* Редактирование продукта */
    public function edit($id,$tag, $title, $cost ,$status){
        $sql = "UPDATE `product` SET `tag` = :tag, `title` = :title, `cost` = :cost, `status` = :status, `similar` = '2' WHERE `product`.`id_product` = :id";
        $this->db->query($sql, ["id" => $id,"tag" => $tag,"title" => $title, "cost" => $cost, "status" => $status ]);

    }
    /* Редактирование изоображния */
    public function edit_img($id,$img){
        $dir = './public/img/';
        for ($i = 0; $i < count($img['name']); $i++){
            $dirF = $dir.basename($img['name'][$i]);
            if (move_uploaded_file($img['tmp_name'][$i], $dirF)){
                $sql = "INSERT INTO `img` (`id_img`, `way`, `id_product`) VALUES (NULL, :way, :id)";
                $this->db->query($sql, ["way" => $img['name'][$i], "id" => $id]);
            }
        }
    }
    /* Редактирование похожих */
    public function edit_sim($id, $similar){           
        $sql = "DELETE FROM `sumilar` WHERE sumilar.id_product = :id";
        $this->db->query($sql, ["id" => $id]);

        for ($i = 0; $i < count($similar); $i++){
            $id_s = $similar[$i];
            $sql = "INSERT INTO `sumilar` (`id_similar`,`id_product`, `id_sp`) VALUES (NUll, '$id','$id_s')";
            $this->db->query($sql);
        }
    }
    /* Добавление похожих */
    public function add_sim($id,$similar_new){
        for ($i = 0; $i < count($similar_new); $i++){
            $id_s = $similar_new[$i];
            $sql = "INSERT INTO `sumilar` (`id_similar`,`id_product`, `id_sp`) VALUES (NUll, '$id','$id_s')";
            $this->db->query($sql);
        }
    }
    /* Удаление изоображения */
    public function del_img($del_img){
        for ($i = 0; $i < count($del_img); $i++){
            $sql = "DELETE FROM `img` WHERE `id_img` = '$del_img[$i]'";
            $this->db->query($sql);
        }
    }
    /* Смена пароля */
    public function changePass($name, $password){
        $password = md5($password);
        $sql = "UPDATE `admin` SET `password` = '$password' WHERE `name` = '$name'";
        $this->db->query($sql);
    }

    /* Добавление Админа */
    public function addAdmin($login, $password){
        $password = md5($password);
        $sql = "INSERT INTO `admin`(`id`, `name`, `password`) VALUES (NULL, '$login', '$password')";
        $this->db->query($sql);     
    }

    /* Удаление Админа */
    public function delAdmin($id){
        $sql = "DELETE FROM `admin` WHERE `id` = '$id'";
        $this->db->query($sql);
    }

}
