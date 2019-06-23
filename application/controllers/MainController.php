<?php

namespace application\controllers;

use application\core\Controller;


class MainController extends Controller
{
    public function before(){
        $this->view->layout = 'main';      
    } 
    /* Главная страница */
    public function indexAction(){
        $this->view->layout = 'main';      
        $backet = $this->upd_backet();
        if (isset($_POST['page'])){
            $page = $_POST['page'];
		}
		else{
			$page = 0;
        }
        $this->view->renderMain('Главная страница', $backet, $this->model->update($page));
    }
    /* Страница с заказами */
    public function cartAction(){
        if (!isset($_SESSION['cart'])){
            $this->view->redirect('/');
        }
        else{
            $backet = $this->upd_backet();
            if (isset($_POST['clean']) && isset($_SESSION['cart'])){
                foreach($_SESSION['cart'] as $i=>$id){
                    if ($id == $_POST['clean']){
                        unset($_SESSION['cart'][$i]);
                    }
                }
            }
            if (!isset($_POST['email'])){
                $this->view->renderMain('Корзина', $backet, $this->model->update_cart($_SESSION['cart']));
            }
            /* Отправка письма */
            else{
                if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && isset($_SESSION['cart'])){
                    $products = $this->model->update_cart($_SESSION['cart']);
                    $prodAll = '';
                    $priceAll = 0;
                    $orderIdAll = "";
                    foreach ($products['product'] as $prod){
                        $prodAll .= $prod['name'].": ". $prod['price'] ."руб., ";
                        $orderIdAll = $orderIdAll. $this->model->update_Order($prod['id'], $prod['price'], $prod['count'], $_POST['name'], $_POST['phone'], $_POST['email']).", ";
                        $priceAll += $prod['price'];
                    }
                    $this->model->send_main($_POST['email'], $_POST['name'], $priceAll, $priceAll, $orderIdAll);
                    /* Очистка корзины */
                    unset($_SESSION['cart']);
                    session_destroy();
                    session_start();
                    $backet = $this->upd_backet();
                    $this->view->redirect('/');
                }
            }
        }
    }
    /* Страница продукта */
    public function productAction(){
        $backet = $this->upd_backet();
        $prod = [
            'product' => $this->model->myProduct($_POST['prod']),
            'sim' => $this->model->mySim($_POST['prod'])
        ];
        $this->view->renderMain('Cтраница товара', $backet, $prod);
    }
    /* Функция проверки корзины */
    private function upd_backet(){
        if (isset($_POST['cart_id'])){
            if (!isset($_SESSION['cart'])){
                $_SESSION['cart'] = [$_POST['cart_id']];
            }else{
                array_push($_SESSION['cart'], $_POST['cart_id']);
            }
        }
        $backet = 0;
        if (isset($_SESSION['cart'])){
            foreach($_SESSION['cart'] as $id){
                $backet++;
            }
        }
        return $backet;
    }

}
