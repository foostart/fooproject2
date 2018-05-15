$(document).ready(function () {     
    //Initiate equalize on load     
    equalize(); 
  
    });     
    //Equalize on resizing of window        
    $(window).resize(function () {      
        removeHeights();        
        equalize();
       
    });     
    function equalize() {       
        $(".m10-description .row").each(function () {      
            var heights = $(this).find(".shei").map(function () {        
                return $(this).height();        
            }).get(),       
            maxHeight = Math.max.apply(null, heights);      
            $(this).find(".shei").height(maxHeight);     
        });     
    }       
    function removeHeights() {      
        $(".m10-description .row").each(function () {      
            $(this).find(".shei").height("auto");        
        });     
    }    
    