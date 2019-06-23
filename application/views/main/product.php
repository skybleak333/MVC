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
                <div class="col-lg-6">
                    <div class="img__product"> 
                        <i class="fas fa-chevron-left"></i>
                        <?php
                            foreach($product['img'] as $img){
                                echo '<img src="./public/img/'.$img['img'].'" alt="" class="img_pros">';
                            }
                        ?>
                        <i class="fas fa-chevron-right"></i>
                    </div>  
                </div>
                <div class="col-lg-6">
                    <div class="desk">
                        <?php
                            echo 
                            '
                            <h2>Название: '.$product['product']['tag'].'</h2>
                            <p>Описание: '.$product['product']['title'].'</p>
                            <span>Цена: '.$product['product']['cost'].'$</span>
                            '
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="btn_prod">
                    <a href="/" class="back">Назад</a>
                        <?php
                            echo '<a href="javascript://" class="buy" id='.$product['product']['id_product'].'>Купить</a>';
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Похожие товары</h2>
                    <div class="production d-flex justify-content-between">   
                    <?php
                        /* Вывод похожих товаров */
                        foreach($sim['sim'] as $s){
                        echo 
                        '
                        <div class="production__item">
                        ';

                            foreach($sim['img'] as $i){
                                if (isset($i['id_product']) && ($s['id_sp'] === $i['id_product'])){
                                    echo '<img src="./public/img/'.$i['img'].'" alt="" class="'.$i['id_product'].'">';
                                    break;
                                }
                            }
                        echo
                        '
                            <h2>'.$s['tag'].' - '. $s['title'].'</h2>
                            <span>'. $s['cost'].'</span>
                            <div class="modals '.$i['id_product'].'">
                                <div class="btn">
                                <form action="product" method="POST">
                                    <button name="prod" value='.$s['id_sp'].'>Товар</button>
                                    <a href="javascript://" class="buy" id='.$s['id_product'].'>Купить</a>
                                </form>
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