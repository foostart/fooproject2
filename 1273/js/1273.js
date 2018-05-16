$(document).ready(function () {
    $(".menu-icon").click(function () {
        $(".m1-navi-menus").slideToggle("1000");
    });
    $(window).bind("scroll", function () {
        parallax();
        navi();
    });
});
function parallax() {
    var scrollpos = $(window).scrollTop();
    $(".slide > ul > .img-slide").css("top", (0 + (0.7 * scrollpos)) + "px");
}
function navi() {
    var scrollpos = $(window).scrollTop();
    if (scrollpos >= 38) {
        $(".limit-wrapper").css({"position": "fixed", "top": "0", "width": "100%", "padding-bottom": "10px", "transition": "all 1s"});
        $(".navi-logo").css("margin-top", "10px");
        $(".m1-navi-menus").css("margin-top", "20px");
    } else {
        $(".navi-logo").css("margin-top", "30px");
        $(".m1-navi-menus").css("margin-top", "40px");
        $(".limit-wrapper").css({"position": "relative", "padding-bottom": "30px", "paddding-top": "30px"});
    }
}