/* Прверка отправки сообщения */
var order_form = document.querySelector('.order__form');
function order_send(){
    var prov = true;
    var provs = /[a-zA-Zа-яА-Я]+/g;
    var num_prov = /^(\d){9,13}$/g;
    var em = /^[0-9a-z_-]+@[0-9a-z_-]+\.[a-z]{2,5}$/i;
    var order_form = document.querySelector('.order__form');
    var name = order_form.querySelector('.name');
    var email = order_form.querySelector('.email');
    var phone = order_form.querySelector('.phone');
    if (!provs.test(name.value)){
        name.classList.add('wobble');
        alert('Неправильно заполнена форма');
        name.classList.remove('wobble');
        prov = false;
    }
    if (!em.test(email.value)){
        email.classList.add('wobble');
        alert('Неправильно заполнена форма');
        email.classList.remove('wobble');
        prov = false;
    }
    if (!num_prov.test(phone.value)){
        phone.classList.add('wobble');
        alert('Неправильно заполнена форма');
        phone.classList.remove('wobble');
        prov = false;
    }
    return prov;
}