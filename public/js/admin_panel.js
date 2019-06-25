/* Глобальные переменные */
var product = document.getElementsByClassName('product__add')[0];
var product__list = false;
var menu__list = false;
var menu__basic = false;
document.getElementsByClassName('main__nav')[0].addEventListener('click', function(e){
    /* При нажатий на кнопку открывается выпадающее меню с выбором действий для карточки товара */
    if (e.target.className == "product__add" ){
        if (!product__list){
            document.getElementsByClassName('product__list')[0].style.height = '115px';
            product__list = !product__list;
        }else if(product__list){
            off_form();
            document.getElementsByClassName('product__list')[0].style.height = '0';
            product__list = !product__list;
        }
    }
    /* Действия для карточек товара */
    if (e.target.className == "add__product__form"){
        off_form();
        document.getElementById('form__add__product').style.display = 'block';
    }
    if (e.target.className == "rem__product__form"){
        off_form();
        for(var i = 0; i <document.getElementsByClassName('production__item').length; i++){
            document.getElementsByClassName('production__item')[i].style.display = 'block';
            document.getElementsByClassName('delete__form')[i].style.display = 'block';
        }
        document.getElementById('pag').style.display = 'block';
    }
    if (e.target.className == "edit__product__form"){
        off_form();
        for(var i = 0; i <document.getElementsByClassName('edit__item').length; i++){
            document.getElementsByClassName('edit__item')[i].style.display = 'block';
            document.getElementsByClassName('edits')[i].style.display = 'block';
        }
        document.getElementById('pags').style.display = 'block';
    }

    /* Меню для основных настроек */
    if (e.target.className == "admin__panel__add"){
        if (!menu__list){
            document.getElementsByClassName('admin__panel__list')[0].style.height = '250px';
            menu__list = !menu__list;
        }else if (menu__list){
            off_form();
            document.getElementsByClassName('admin__panel__list')[0].style.height = '0';
            menu__list = !menu__list;
        }
    }
    /* Основные настроки */
    if (e.target.className == "change__pass"){
        off_form();
        document.getElementById('admin__panel__form').style.display = 'block';
    }
    /* Вложенное меню настроек */
    if (e.target.className == "basic__admin"){
        if (!menu__basic){
            document.getElementsByClassName('setting')[0].style.height = '115px';
            menu__basic = !menu__basic;
        }else if (menu__basic){
            off_form();
            document.getElementsByClassName('setting')[0].style.height = '0';
            menu__basic = !menu__basic;
        }
    }
    /* Методы открытия различных форм */
    if(e.target.className == 'admin__list'){
        off_form();
        document.getElementsByClassName('admin')[0].style.display = 'block';
    }
    if(e.target.className == 'admin__add'){
        off_form();
        document.getElementById('admin__add').style.display = 'block';
    }
    if(e.target.className == 'admin__rem'){
        off_form();
        document.getElementById('admin__rem').style.display = 'block';
    }
    if (e.target.className == 'list__order'){
        off_form();
        document.getElementsByClassName('order')[0].style.display = 'block';
    }

});
/* Функция закрытия форм */
function off_form(){
    for(var i = 0; i < document.getElementsByTagName("form").length; i++){
        document.getElementsByTagName("form")[i].style.display = 'none';
    }
    for(var i = 0; i <document.getElementsByClassName('production__item').length; i++){
        document.getElementsByClassName('production__item')[i].style.display = 'none';
        document.getElementsByClassName('edit__item')[i].style.display = 'none';
        document.getElementsByClassName('delete__form')[i].style.display = 'none';
        document.getElementsByClassName('edits')[i].style.display = 'none';
    }      
    document.getElementById('pag').style.display = 'none';
    document.getElementById('pags').style.display = 'none';
    document.getElementsByClassName('admin')[0].style.display = 'none';
    document.getElementsByClassName('order')[0].style.display = 'none';
}

/* Проверка форм */

function addForm(){
    var prov = true;
    var formAdd = document.querySelector("#form__add__product");
    var tag = formAdd.querySelector('.tag');
    var title = formAdd.querySelector('.title');
    var cost = formAdd.querySelector('.cost');
    var provs = /[a-zA-Zа-яА-Я]+/g;
    var num_prov = /^(\d){1,13}$/g;
    if (!provs.test(tag.value)){
        tag.classList.add('wobble');
        alert('Неправильно заполнена форма');
        tag.classList.remove('wobble');
        prov = false;
    }
    if (!provs.test(title.value)){
        title.classList.add('wobble');
        alert('Неправильно заполнена форма');
        title.classList.remove('wobble');
        prov = false;
    }
    if (!num_prov.test(cost.value)){
        cost.classList.add('wobble');
        alert('Неправильно заполнена форма');
        cost.classList.remove('wobble');
        prov = false;
    }
    return prov;
};
function editForm(){
    var prov = true;
    var formAdd = document.querySelector("#form__edit");
    var tag = formAdd.querySelector('.tag');
    var title = formAdd.querySelector('.title');
    var cost = formAdd.querySelector('.cost');
    var provs = /[a-zA-Zа-яА-Я]+/g;
    var num_prov = /^(\d){1,13}$/g;
    if (!provs.exec(tag.value)){
        tag.classList.add('wobble');
        alert('Неправильно заполнена форма');
        tag.classList.remove('wobble');
        prov = false;
    }
    if (!provs.test(title.value)){
        title.classList.add('wobble');
        alert('Неправильно заполнена форма');
        title.classList.remove('wobble');
        prov = false;
    }
    if (!num_prov.test(cost.value)){
        cost.classList.add('wobble');
        alert('Неправильно заполнена форма');
        cost.classList.remove('wobble');
        prov = false;
    }
    return prov;
};
