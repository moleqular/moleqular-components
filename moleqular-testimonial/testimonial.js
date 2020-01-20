$('.js-testimonial-slider').slick({
    autoplay: true,
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    appendArrows: $('.js-testimonial-slider-arrows'),
    prevArrow: '<div class="prev"><i class="material-icons">arrow_backwards</i></div>',
    nextArrow: '<div class="next"><i class="material-icons">arrow_forwards</i></div>'
});