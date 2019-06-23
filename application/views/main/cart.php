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
                        <a href="/">Назад</a>
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
                    <h2>Корзина:</h2>
                    <table class="cart table table-inverse">
                        <tr>
                            <th>№</th>
                            <th>Назвние</th>
                            <th>Цена</th>
                            <th>Количество</th>
                            <th>Изображение</th>
                            <th>Удалить</th>
                        </tr>
                        <?php
                        /* Вывод заказов */
                        if (!empty($product)){
                            foreach ($product as $prod){
                                $prod['price'] = number_format($prod['price'],  2, '.',' ');
                               echo
                               '
                               <tr class="'.$prod['id'].'">
                                <td>'.$prod['id'].'</td> 
                                <td>'.$prod['name'].'</td> 
                                <td>'.$prod['price'].'</td> 
                                <td>'.$prod['count'].'</td> 
                                <td><img src="./public/img/'.$prod['img'].'" alt=""></td>
                                <td><a href="javascript://" class="del_item"><i class="del_item fas fa-trash-alt" id="'.$prod['id'].'"></i></a></td> 
                               </tr>
                               ';
                            }
                        }
                        ?>
                    </table>
                    <!-- Форма отпраки заказ -->
                    <div class="orders">
                        <div class="order__form">
                            <form action="" method="POST" onsubmit="return order_send()">
                                <input type="name" name="name" class="name animated" placeholder="Enter your name" required autofocus>
                                <br />
                                <input type="email" name="email"  class="email animated" placeholder="Enter your email" required>
                                <br />
                                <input type="phone" name="phone" class="phone animated" placeholder="Enter your phone" required>
                                <br />
                                <button>Оформить заказ</button>
                            </form>                                                      
                        </div>
                    </div>
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