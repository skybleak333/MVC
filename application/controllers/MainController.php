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
        $product = "";
        if (isset($_GET['page'])){
            $page = $_GET['page'];
            $product = $this->model->update($page);
            $provs = $product['product'];
            if (empty($provs)){
                $this->view->redirect('/');
            }
		}
		else{
			$page = 1;
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
                    $this->model->send_main($_POST['email'], $_POST['name'], $prodAll, $priceAll, $orderIdAll);
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
        if (isset($_GET['prod'])){
            $pp = $this->model->myProduct($_GET['prod']);
            if ($pp['product'] != null){
                $prod = [
                    'product' => $this->model->myProduct($_GET['prod']),
                    'sim' => $this->model->mySim($_GET['prod'])
                ];
                $this->view->renderMain('Cтраница товара', $backet, $prod);
            }else{
                $this->view->redirect('/');
            }
        }else{
            $this->view->redirect('/');
        }
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
