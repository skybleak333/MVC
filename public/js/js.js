$(document).ready(function(){
    $('form').submit(function(e){
        var json;
        e.preventDefault();
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: new FormData(this), 
            contentType: false,
            cache: false,
            processData: false,
            success: function(res){
                json = jQuery.parseJSON(res);
                if (json.url){
                    window.location.href = json.url;
                }else{
                    alert(json.status + ' - ' + json.message);
                }
            },
        }); 
    });
}); 