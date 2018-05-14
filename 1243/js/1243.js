$(document).ready(function () {     
    //Initiate equalize on load     
    equalize(); 
    equalize1(); 
    });     
    //Equalize on resizing of window        
    $(window).resize(function () {      
        removeHeights();        
        equalize();
        removeHeights1();  
        equalize1(); 
    });     
    function equalize() {       
        $(".m10-description .row").each(function () {      
            var heights = $(this).find(".item-main").map(function () {        
                return $(this).height();        
            }).get(),       
            maxHeight = Math.max.apply(null, heights);      
            $(this).find(".item-main").height(maxHeight);     
        });     
    }       
    function removeHeights() {      
        $(".m10-description .row").each(function () {      
            $(this).find(".item-main").height("auto");        
        });     
    }    
   