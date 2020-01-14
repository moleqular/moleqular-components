if($('.js-category-slider').length) {
    $('.js-category-slider').slick({
        autoplay: true,
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        appendDots: $('.js-category-slider-dots'),
        mobileFirst: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true
                }
            },
            {
                breakpoint: 1280,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4
                }
            },
            {
                breakpoint: 1550,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                    arrows: true,
                    appendArrows: $('.js-category-slider-arrows'),
                    prevArrow: '<div class="prev"><i class="material-icons">keyboard_arrow_left</i></div>',
                    nextArrow: '<div class="next"><i class="material-icons">keyboard_arrow_right</i></div>',
                    arrows: true,
                }
            },
        ]
    });
}