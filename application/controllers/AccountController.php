<?php

namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller
{
    public function before(){
        $this->view->layout = 'auth_admin';
    }
    public function loginAction(){
        $title = 'Страница входа';
        $_SESSION = array();
        session_destroy();
        session_start();
        if (isset($_POST['login']) && isset($_POST['password'])){
            if(!$this->model->prov($_POST['login'], $_POST['password'])){
                $title ='Неправильный логин или пароль';
            }else{
                $_SESSION['admin'] = $_POST['login'];
                $this->view->redirect('/admin/panel');
            }
        }
        $this->view->render($title);
    }

}
