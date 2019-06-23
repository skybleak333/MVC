<!-- Шапка сайта -->
<header>
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-3">
                <div class="call__bar">
                    <a href="javascript://"><i class="fas fa-bars"></i></a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="login">
                    <ul>
                        <li>
                            <?php 
                                /* Вывод сессий */
                                echo $_SESSION['admin'];
                             ?>
                        </li>
                        <li>
                            <a href="/account/login" class="exit">Выйти</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Осноыное содержимое страницы -->
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="main__nav">
                        <!-- Боковая панель с выором действий (Связанных с редактированием товра)-->
                    <div class="product">
                        <h2 class="product__add">Товар</h2>
                        <ul class="product__list">
                            <li class="add__product__form">Добавление</li>
                            <li class="rem__product__form">Удаление</li>
                            <li class="edit__product__form">Редактирование</li>
                        </ul>
                    </div>
                     <!-- Боковая панель с выором действий (Связанных с редактированием учетных записей)-->
                    <div class="admin__pandel__main">
                        <h2 class="admin__panel__add">Настройка</h2>
                        <ul class="admin__panel__list">
                            <li class="change__pass">Смена пароля</li>
                            <li class="basic__admin">
                                Основные настроики
                                <ul class="setting">
                                    <li class="admin__list">Список админов</li>
                                    <li class="admin__add">Добавить админа</li>
                                    <li class="admin__rem">Удалить админа</li>
                                </ul>
                            </li>
                            <li class="list__order">Список заказов</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="items">
                        <!-- Формы для выполнения разлчиных дейсвий -->
                    <div class="product__form">
                            <!-- Форма добавление карточки товара -->
                        <form action="/admin/add" id="form__add__product" method="POST" enctype=multipart/form-data onsubmit="return addForm( );">
                            <input type="text" name="tag" placeholder="Наименование товара" class="tag animated" required>
                            <br />
                            <input type="text" name="title" placeholder="Описание товара" class="title animated" required>
                            <br />
                            <input type="file" name="img[]" placeholder="Изоображение товара" required multiple="true">
                            <br />
                            <input type="text" name="cost" placeholder="Стоимость товара" class="cost animated" required>
                            <br />
                            <label for="">Статус:</label>
                            <br />
                            <select name="status" id="statuss">
                                <option value="on">on</option>
                                <option value="off">off</option>
                            </select>
                            <br />
                            <br />
                            <label for="similar__select">Похожие товары: </label>
                            <br />
                            <select name="similar__select[]" id="similar" multiple="multiple">
                                <option value=""></option>
                                <?php
                                    foreach($product as $prod){
                                       echo "<option value=".$prod['id_product'].">".$prod['id_product']." - ".$prod['title']."</option>";
                                    };
                                ?>
                            </select>
                            <br />
                            <button>Добавить товар</button>                        
                        </form>
                            <!-- Форма удаления карточки товара -->
                        <form action="/admin/del" id="form__remove__product" method="POST" enctype=multipart/form-data>
                            <select name="remove__selected" id="select__remove" required>
                                <option value="" selected></option>
                                <?php
                                    foreach($product as $prod){
                                       echo "<option value=".$prod['id_product'].">".$prod['id_product']." - ".$prod['title']."</option>";
                                    };
                                ?>
                            </select>
                            <button>Удалить товар</button>
                        </form>
                            <!-- Форма редактирования карточки товара -->
                        <form action="/admin/panel/edit_sel" id="form__edit__product" method="POST" enctype=multipart/form-data>
                            <select name="edit__selected" id="select__edit" required>
                                <option value="" selected ></option>
                                <?php
                                    foreach($product as $prod){
                                       echo "<option value=".$prod['id_product'].">".$prod['id_product']." - ".$prod['title']."</option>";
                                    };
                                ?>
                            </select>
                            <button>Редактировать товар</button>
                        </form>
                    </div>
                    <!-- Форма смены пароля -->
                    <div class="admin__panel">
                        <form action="/admin/changePass" method="POST" id="admin__panel__form">
                            <input type="password" name="password" placeholder="Введите новый пароль" required>
                            <button>Сменить пароль</button>
                        </form>
                    </div>
                    <!-- Список админов -->
                    <div class="admin">
                        <table class="admin__item table table-bordered table-inverse">
                            <tr>
                                <th>№</th>
                                <th>Имя</th>
                            </tr>
                            <?php
                                /* Вывод админов */
                                foreach($admin as $super){
                                    echo 
                                    '
                                        <tr>
                                            <td>'.$super['id'].'</td>
                                            <td>'.$super['name'].'</td>
                                        </tr>
                                    ';
                                };
                            ?>
                        </table>
                    </div>
                    <!-- Форма добавление админа -->
                    <form action="/admin/addAdmin" id="admin__add" method="POST">
                        <input type="text" placeholder="Введите логин" name="login" required>
                        <br />
                        <input type="password" placeholder="Введеите пароль" name="password" required>
                        <br />
                        <button>Добавить</button>
                    </form>  
                    <!-- Форма удаления админа -->
                    <form action="/admin/delAdmin" id="admin__rem" method="POST">
                        <select name="select__admin" id="select__remove__adminn" required>
                            <option value=""></option>
                            <?php
                                foreach($admin as $super){
                                    echo "<option value=".$super['id'].">".$super['id']." - ".$super['name']."</option>";
                                 };
                            ?>
                        </select>
                        <button>Удалить</button>
                    </form> 
                    <!-- Список заказов -->
                    <div class="order">
                        <table class="order__item table table-bordered table-inverse">
                            <tr>
                                <th>№</th>
                                <th>Номер продукта</th>
                                <th>Имя</th>
                                <th>Цена</th>
                                <th>Количество</th>
                                <th>Телеофн</th>
                                <th>Email</th>
                            </tr>
                            <?php
                                /* Вывод заказаов */
                                foreach($order as $orders){
                                    echo 
                                    '
                                        <tr>
                                            <td>'.$orders['id_order'].'</td>
                                            <td>'.$orders['product_id'].'</td>
                                            <td>'.$orders['name'].'</td>
                                            <td>'.$orders['price'].'$</td>
                                            <td>'.$orders['count'].'</td>
                                            <td>'.$orders['phone'].'</td>
                                            <td>'.$orders['email'].'</td>
                                        </tr>
                                    ';
                                };
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>