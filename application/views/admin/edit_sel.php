<header>
        <!-- Шапка сайта -->
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
                            <a href="/admin/panel" class="exit">Назад</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="main__edit">
                        <!-- Боковая панель с выором действий -->
                    <div class="product">
                        <h2 class="product__add">Редактирование</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="items">
                        <!-- Формы для выполнения разлчиных дейсвий -->
                    <div class="product__form">
                            <!-- Форма добавление карточки товара -->
                        <form action="/admin/panel/edit" id="form__edit" method="POST" enctype=multipart/form-data onsubmit="return editForm( );">
                            <?php
                              foreach($product as $prod){
                                echo
                                '
                                <select name="edits" id="select__edit" required>
                                    <option value="'.$prod['id_product'].'" selected >'.$prod['id_product'].'</option>
                                </select>
                                <br />
                                <input type="text" name="tag" class="tag animated" placeholder="Наименование товара" value="'.$prod['tag'].'" required>
                                <br />
                                <input type="text" name="title" class="title animated" placeholder="Описание товара" value="'.$prod['title'].'" required>
                                <br />
                                <ul class="sees__img">';
                                foreach($img as $i){
                                    echo '<li><img src="/public/img/'.$i['way'].'" class="img__add" ></li>';
                                }
                                echo 
                                '</ul>
                                <label for="">Удалить картинки: </label>
                                <br />
                                <select name="similar__select__del[]" id="del__img" multiple="multiple">';
                                    foreach($img as $i){
                                        echo "<option value=".$i['id_img'].">".$i['way']."</option>";
                                    };
                                echo'
                                </select>
                                <label for="">Добавить картинки: </label>
                                <input type="file" name="img[]" placeholder="Изоображение товара"  value="'.$prod['tag'].'" multiple="true">
                                <br />
                                <input type="text" class="cost animated" name="cost" placeholder="Стоимость товара" value="'.$prod['cost'].'" required>
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
                                <select name="similar__select[]" id="similar" multiple="multiple">';
                                    foreach($sim as $s){
                                        echo "<option value=".$s['id_product']." selected>".$s['id_sp']." - ".$s['title']."</option>";
                                    };
                                echo'
                                </select>
                                <br />
                                <label for="similar__select">Добавить еще товары: </label>
                                <br />
                                <select name="similar__select__add[]" id="similar" multiple="multiple">';
                                    foreach($all as $a){
                                        echo "<option value=".$a['id_product'].">".$a['id_product']." - ".$a['title']."</option>";
                                    };
                                echo'
                                </select>
                                <br />
                                <br />
                                ';
                              }
                            ?>
                            <button>Изменить товар</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>