<?php

namespace application\lib;

use PDO;

class Db 
{
    protected $db;

    public function __construct(){
       $config = require 'application/config/db.php';
       $this->db = new PDO('mysql:host='.$config['host'].';dbname='.$config['db'].'', $config['user'],$config['password']);
       $this->db->exec("SET CHARSET UTF8");
    }
    public function query($sql, $params = []){
        $stmt = $this->db->prepare($sql);
        if (!empty($params)){
            foreach($params as $key => $val){
                $stmt->bindValue(':'.$key,$val);
            }
        }
        $stmt->execute();
        return $stmt;
    }   
    public function row($sql, $params = []){
        $result = $this->query($sql, $params);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}
