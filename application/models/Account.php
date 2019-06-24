<?php

namespace application\models;
use application\core\Model;

class Account extends Model 
{   
    public function prov($login, $password){
        $sql = "SELECT * FROM `admin` WHERE `name` =:login";
        $res = $this->db->row($sql, ["login" => $login]);
        $password .= $res[0]['passKey'];
        $password = md5($password);
        $sql = "SELECT * FROM `admin` WHERE `name` = :login AND `password` = :password";
        $result = $this->db->row($sql, ["login" => $login, "password" => $password]);
        return (!empty($result));
    }
}
