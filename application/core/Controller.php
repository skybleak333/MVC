<?php

namespace application\core;
use  application\core\View;
abstract class Controller 
{
    public $route;
    public $view;
    public $acl;
    public function __construct($route)
    {
        $this->route = $route;
        $this->view = new View($route);
        /*f (!$this->checkAcl()){
            View::errorCode(403);
        }
        debug($this->checkAcl());*/
        $this->before();
        $this->model = $this->loadModel($route['controller']);
    }
    public function loadModel($name){
        $path = 'application\models\\'.ucfirst($name);
        if (class_exists($path)){
            return new $path;
        }
    }
}
