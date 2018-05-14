/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            nav: true
        },
        680: {
            items: 2,
            nav: false
        },
        991: {
            items: 3,
            nav: false
        },
        1366: {
            items: 4,
            nav: true,
            loop: false
        }
    }
});
function prevSlide() {
    $('.owl-carousel').trigger('prev.owl.carousel');
}
function nextSlide() {
    $('.owl-carousel').trigger('next.owl.carousel');
}