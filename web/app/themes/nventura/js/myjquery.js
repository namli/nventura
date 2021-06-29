(function ($) {

    "use strict";



    $(document).ready(function () {
        // Opinions
        $('.bxslider').bxSlider({
            mode: 'fade',
            captions: true,
            slideWidth: 6000,
            auto: true,

            controls: false,
            pager: false,
        });


        // confianza
        $('.imagen-confianza').bxSlider({

            captions: false,
            auto: true,
            responsive: true,

            slideWidth: 200,
            slideMargin: 50,
            minSlides: 1,
            maxSlides: 4,

            controls: false,
            pager: false,



        });

        //solar
        $('.solar .bton').click(function (event) {
            event.preventDefault();

            $('.solar .form-oculto').fadeIn();
        });
        $('.solar .bton-cerrar').click(function () {
            $('.solar .form-oculto').fadeOut();
        });


        //ven
        $('.ven .bton').click(function (event) {
            event.preventDefault();

            $('.ven .form-oculto').fadeIn();
        });
        $('.ven .bton-cerrar').click(function () {
            $('.ven .form-oculto').fadeOut();
        });

        //gestionem
        $('.gestionem .bton').click(function (event) {
            event.preventDefault();

            $('.gestionem .form-oculto').fadeIn();
        });
        $('.gestionem .bton-cerrar').click(function () {
            $('.gestionem .form-oculto').fadeOut();
        });

        // cambiar valor search_placeholder buscador

        $(function () {
            if ($('html').is(':lang(es)')) {
                $("input[placeholder='Search …']").attr("placeholder", "Buscar ...");
            };
            if ($('html').is(':lang(ca)')) {
                $("input[placeholder='Search …']").attr("placeholder", "Cercar ...");
            };
        });


    });

})(jQuery);
