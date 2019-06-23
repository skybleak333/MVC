<?php

namespace application\models;
use application\core\Model;

class Account extends Model 
{   
    public function prov($login, $password){
        $sql = "SELECT * FROM `admin` WHERE `name` = :login AND `password` = :password";
        $result = $this->db->row($sql, ["login" => $login, "password" => md5($password)]);
        return (!empty($result));
    }
}
