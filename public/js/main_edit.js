$('.production').on('click', function(e){
    if (e.target.className == 'buy') {
        var id = e.target.id;
       $.ajax({
        type: 'POST', 
        url: '', 
        data: {'cart_id': id}, 
        success: function(){
           var cart = $('.backet_cout')[0].innerHTML.split("(");
           var count = Number(cart[1].split(")")[0]) + 1;
           document.querySelector('.backet_cout').innerHTML = cart[0] + "(" + count + ")";
        }
       });
    }
});
$('.btn_prod').on('click', function(e){
    if (e.target.className == 'buy') {
        var id = e.target.id;
       $.ajax({
        type: 'POST', 
        url: '', 
        data: {'cart_id': id}, 
        success: function(){
           var cart = $('.backet_cout')[0].innerHTML.split("(");
           var count = Number(cart[1].split(")")[0]) + 1;
           document.querySelector('.backet_cout').innerHTML = cart[0] + "(" + count + ")";
        }
       });
    }
});
$('.cart').on('click', function(e){
    if (e.target.className == 'del_item fas fa-trash-alt'){
        var ids= e.target.id;
        $.ajax({
            type: 'POST', 
            url: '', 
            data: {'clean': ids}, 
            success: function(){
                $('.'+ids).fadeOut(1000);
                location.reload();
            }
        });
    }
});
$('.production').on('mousemove', function(e){
    if (e.target.tagName == "IMG"){
        var id = e.target.className;
        modal(id);
    }
});
$('.production').on('mouseleave', function(e){
    modal_hide();
});
function modal(id){
    $('.'+id).css("left", "0%");
}
function modal_hide(){
    for(var i = 0; i < $('.modals').length; i++){
        $('.modals:eq(' + i + ')').css("left", "-100%");
    }
}
