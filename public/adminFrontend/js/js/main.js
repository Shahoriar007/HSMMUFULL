$(document).ready(function () {


    /***********slider */
    $('.slider-carousel').owlCarousel({
        loop: true,
        autoplay: true,
        autoplayHoverPause: true,
        smartSpeed: 1000,
        margin: 10,
        lazyLoad: true,
        nav: true,
        dots: false,
        animateOut: 'fadeOut',

        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1,

            }
        }
    })
    /***********slider */

    /***********slider */
    $('.product-carousel').owlCarousel({
        loop: true,
        autoplay: true,
        autoplayHoverPause: true,
        smartSpeed: 1000,
        margin: 10,
        lazyLoad: true,
        nav: false,
        dots: true,

        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4,

            }
        }
    })
    /***********slider */



});