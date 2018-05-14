$(document).ready(function () {
    $(".nav-tabs li a").click(function () {
        $(".nav-tabs li a").removeClass("active-tab");
        $(this).addClass("active-tab");
    });
});