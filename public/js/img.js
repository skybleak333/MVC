var z = 0;
var len = document.getElementsByClassName('img_pros').length;
document.getElementsByClassName('img_pros')[0].style.display = "block";
if (len == 1){
    for (var i = 0; i < document.getElementsByClassName('fas').length; i++){
        document.getElementsByClassName('fas')[i].style.display = 'none';
    }
}
else{
    document.getElementsByClassName('productions')[0].addEventListener('click', function(e){
        if (len == 0){}
        if (e.target.className == 'fas fa-chevron-right'){
            if (z < len - 1){
                z++;   
                img(z); 
            } 
        }
        if (e.target.className == 'fas fa-chevron-left'){
            if (z > 0){
                z--;   
                img(z); 
            } 
        }
    });
    function img(id){
        for (var i = 0; i < len; i++ ){
            document.getElementsByClassName('img_pros')[i].style.display = "none";
        }
        document.getElementsByClassName('img_pros')[id].style.display = "block";
    }
}
