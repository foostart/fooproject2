
$(document).ready(function () {
	$(".single-item").slick({
		dots: true
	});
	   $('.row.full').slick({
                dots:true,
                autoplaySpeed: 1000,
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: false,
                prevArrow:'<button type="button" class="slick-prev"></button>',
                nextArrow:'<button type="button" class="slick-next"></button>',
                responsive: [
                {
                  breakpoint: 1200,
                  settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                  }
                },
                {
                  breakpoint: 767,
                  settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                  }
                },
                {
                  breakpoint: 469,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                }
            ]

});
});