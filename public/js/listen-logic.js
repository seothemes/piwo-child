(function($){

    function setFixedNav(){
        var navbarHeight = $('.header__primary-menu').outerHeight();

        $('body').css('padding-top', navbarHeight);
    }

    $('.card-slider').flickity({
      cellAlign: 'left',
      contain: true,
      freeScroll: true,
      pageDots: false,
      wrapAround: false,
    });
    $('.card-slider').css('visibility', 'visible');

    AOS.init({
        duration: 1000,
    });

    $('.header__listen-logic a').on('click', function (e) {
        e.preventDefault();

        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top - 200
        }, 1000, 'linear');
    });

    //$(window).on('resize', setFixedNav);
    //setFixedNav();
})(jQuery);