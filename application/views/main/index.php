<header>
    <div class="header__nav">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="logo">
                        <h1>Exclusive</h1>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="backet">
                        <a href="cart"><i class="fas fa-shopping-bag"></i> Корзина<span class="backet_cout">(<?php echo $backet  ?>)</span></a>
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <div class="header__nav__pres">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header__nav__pres__item">
                        <h2>Интренет магазин-одежды</h2>
                        <ul>
                            <li>О компаний</li>
                            <li>Доставка и оплата</li>
                            <li>Блог</li>
                            <li>Контакты</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<main>
    <div class="main__nav">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul>
                        <li>Главная</li>
                        <li>Аксессуары</li>
                        <li>Обувь</li>
                        <li>Распродажа</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="productions">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Товары:</h2>
                    <div class="production d-flex justify-content-between">   
                        <?php
                            /* Вывод товаров */
                            foreach($product as $prod){
                            echo 
                            '
                            <div class="production__item">
                            ';

                                foreach($img as $i){
                                    if (isset($i['id_product']) && ($prod['id_product'] == $i['id_product'])){
                                        echo '<img src="../public/img/'.$i['img'].'" alt="" class="'.$i['id_product'].'">';
                                        break;
                                    }
                                }
                            echo
                            '
                              <h2>'.$prod['tag'].' - '. $prod['title'].'</h2>
                              <span>'. $prod['cost'].'$</span>
                              <div class="modals '.$i['id_product'].'">
                                  <div class="btn">
                                      <a class="" href="/product/'.$prod['id_product'].'" name="page">Продукт</a>
                                      <a href="javascript://" class="buy" id='.$prod['id_product'].'>Купить</a>
                                  </div>
                              </div>
                            </div>
                            ';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="navigation">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                        <?php
                            for($i = 1; $i <= $max; $i++){
                                echo '
                                    <a class="page-link" href="/'.($i-1).'" name="page">'.$i.'</a>
                                ';
                            }
                        ?>
                </div>
            </div>
        </div>
    </div>
</main>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                &copy; Все права защищены <?php echo date('Y')?>
            </div>
        </div>
    </div>
</footer>