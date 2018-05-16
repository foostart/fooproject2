$(document).ready(function () {         
    equalize(); 
});           
$(window).resize(function () {      
    $(".about").css("margin-bottom","unset");    
    equalize();
});     
function equalize() {       
    $(".about").css("margin-bottom",$(".type-1244").height() + "px");    
} 