<?php
namespace application\controllers;

use application\core\Controller;

class AdminController extends Controller
{
    /* Вставка макета */
    public function before(){
        $this->view->layout = 'admin';
    }
    /* Главная страница */
    public function panelAction(){   
        if (isset($_POST['page'])){
            $page = $_POST['page'];
		}
		else{
			$page = 0;
        }
        $this->view->render('Административная панель', $this->model->getlist($page));
    }
    /* Добавление товора */
    public function addAction(){
       
        if(isset($_POST['tag']) && isset($_POST['title']) && isset($_POST['cost']) && isset($_POST['status']) ){
            $this->model->add($_POST['tag'], $_POST['title'], $_POST['cost'], $_POST['status'], $_FILES['img']);
        }
        if (isset($_POST['similar__select'])){
            $this->model->add_simul($_POST['similar__select']);
        }
        $this->view->redirect('/admin/panel');
    }
    /* Удаление товара */
    public function delAction(){
        if (isset($_POST['prod'])){
            $this->model->del($_POST['prod']);
            $this->view->redirect('/admin/panel');
        }
    } 
    /* Страница редактирования товара */
    public function edit_selAction(){
        if (isset($_POST['prods'])){
            $this->view->render('Административная панель',  $this->model->edit_sel($_POST['prods']));
        }
    }
    public function editAction(){
        /* Основные изменения */
        if(isset($_POST['tag']) && isset($_POST['title']) && isset($_POST['cost']) && isset($_POST['status'])){
            $this->model->edit($_POST['edits'],$_POST['tag'], $_POST['title'], $_POST['cost'], $_POST['status']);
        }
        /* Фото */
        if (isset($_FILES['img'])){
            $this->model->edit_img($_POST['edits'],$_FILES['img']);
        }
        /* Похожие */
        if (isset($_POST['similar__select'])){
            $this->model->edit_sim($_POST['edits'],$_POST['similar__select']);
        }
        /* Добавление похожих */
        if (isset($_POST['similar__select__add'])){
            $this->model->add_sim($_POST['edits'],$_POST['similar__select__add']);
        }
        /* Удаление фото */
        if (isset($_POST['similar__select__del'])){
            $this->model->del_img($_POST['similar__select__del']);
        }
        /* Возврат */
        $this->view->redirect('/admin/panel');
    }
    /* Смена пароля */
    public function changePassAction(){
        if (isset($_POST['password'])){
            $this->model->changePass($_SESSION['admin'],$_POST['password']);
            $this->view->redirect('/admin/panel');
        }
    }
    /* Добавление админа */
    public function addAdminAction(){
        if (isset($_POST['login']) && isset($_POST['password'])){
            $this->model->addAdmin($_POST['login'],$_POST['password']);
            $this->view->redirect('/admin/panel');
        }
    }
    /* Удаление админа */
    public function delAdminAction(){
        if (isset($_POST['select__admin'])){
            $this->model->delAdmin($_POST['select__admin']);
            $this->view->redirect('/admin/panel');
        }
    }
}
