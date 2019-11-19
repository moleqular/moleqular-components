$('.js-accordion-trigger').on('click', function(){
    $(this).toggleClass('active').next().slideToggle();
});