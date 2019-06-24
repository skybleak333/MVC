<?php
namespace application\models;
use application\core\Model;
class Main extends Model
{
    /* Обновление записей */
    public function update($id){
        /* Нахождение минмального элемента */
        $this->checkID($id);
        $id *=6;
        $sql = "SELECT MIN(`id_product`) min FROM `product` WHERE `id_product` > $id";
        $min =  $this->db->row($sql)[0]['min'];
        $min = floor($min);

        /* Выборка */
        $sql = "SELECT prod.`id_product`,im.`way` AS img FROM `product` prod JOIN `img` AS im ON prod.`id_product`=im.`id_product` WHERE prod.status = 'on' AND prod.id_product >= :id ";
        $img = $this->db->row($sql, ["id" => $id]);

        $sql = "SELECT COUNT(*) count FROM `product` WHERE status = 'on'";
        $max = $this->db->row($sql)[0]['count'] / 6;
        if ($max > 1){
            $max =floor($max);
            $max = $max + 1;
        }else{
            $max = floor($max);
        }

        $sql = "SELECT * FROM product WHERE status = 'on' AND `id_product` > :id LIMIT 6";
        $product = $this->db->row($sql, ["id" => $id]);
        /* Создание массива с данными для старницы */
        $mainC =[
            'product' => $product,
            'max' => $max,
            'img' => $img,
        ];
        return $mainC;
    }
    public function checkID(&$id){
		settype($id, 'integer');
	}
    public function update_cart($id_cart){
        $sql = "SELECT * FROM `product` WHERE `id_product` = :id";
        $sql_i = "SELECT * FROM `img` WHERE `id_product` = :id LIMIT 1";
        $count = array_count_values($id_cart);
        $id_cart = array_unique($id_cart);
        $arrs = [];
        foreach ($id_cart as $id){
            $product = $this->db->row($sql, ["id" => $id]);
            $img = $this->db->row($sql_i, ["id" => $id]);
            array_push($arrs, ['id' => $product[0]['id_product'], 'name' => $product[0]['tag'],'price' => $product[0]['cost'], 'count' => $count[$id], 'img' => $img[0]['way']]);
        }
        if (!empty($arrs)){
            $arrs = [
                'product' => $arrs,
            ];
        }
        return $arrs;
    }
    public function update_Order($id, $price, $count, $name, $phone, $email){
        $sql = "SELECT MAX(`id_order`) AS max FROM `orders`";
		$max = (int)$this->db->row($sql)[0]['max'] + 1;

		$sql = "INSERT INTO `orders`(`id_order`, `product_id`, `price`, `count`, `name`, `phone`, `email`) VALUES ($max, $id, $price, $count, :name, :phone, :email)";
		$this->db->row($sql, ['name' => $name, 'phone' => $phone, 'email' => $email]);
		return $max;
    }
    public function send_main($email, $name, $prodAll, $priceAll, $id){
        $to = $name." ".$email;
        $subject = "Orders";
        $message =
        '
            <p>Ваш заказ успешно получен, в скором времени, с вами свяжутся '.$name.'</p>
            <p>Ваш заказ:'.$prodAll.', сумма вашего заказа составляет: '.$priceAll.' $</p>
            <p>Номер заказа(ов): '.$id.'</p>
        ';
        $header = "from: ".$email;
        $header .= "\r\nContent-type: text/html; charset=utf-8\r\n";
        mail($to, $subject, $message, $header);
    }
    public function myProduct($id){
        $sql = "SELECT prod.`id_product`,im.`way` AS img FROM `product` prod JOIN `img` AS im ON prod.`id_product`=im.`id_product` WHERE prod.status = 'on' AND prod.id_product = :id";
        $img = $this->db->row($sql, ["id" => $id]);


        $sql = "SELECT * FROM `product` WHERE `id_product` = '$id'";
        $prod = $this->db->row($sql);

        $product = [
            'product' => $prod[0],
            'img' => $img,
        ];
        return $product;
    }   
    public function mySim($id){
        $sql = "SELECT * FROM `product` JOIN `sumilar` ON `product`.`id_product`= sumilar.id_sp WHERE `sumilar`.`id_product` = :id";
        $sim = $this->db->row($sql,["id"=>$id]);

        $img = "";
        if (isset($sim[0])){
            $sql = "SELECT prod.`id_product`,img.`way` AS img FROM `product` prod JOIN `sumilar` sim ON prod.`id_product`=sim.`id_sp` JOIN img AS img ON prod.`id_product`=img.id_product WHERE sim.`id_product`=:id";
            $img = $this->db->row($sql, ["id" => $id]);
        }

        $simm = [
            'sim' => $sim,
            'img' => $img
        ];

        return $simm;
        
    }
}
