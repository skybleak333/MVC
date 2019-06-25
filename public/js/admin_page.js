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

$(".items").on('click', function(e){
    if (e.target.tagName == 'OPTION'){
        alert((e.target).val());
    }
});