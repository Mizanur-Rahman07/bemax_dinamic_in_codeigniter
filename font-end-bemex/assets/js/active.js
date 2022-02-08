$(document).ready(function() {

    jQuery('#mobile-menu').meanmenu({
        meanScreenWidth: "767",
        meanMenuContainer: '.mobile-menu'
    });



    $('.slider-active').owlCarousel({
        loop: true,
        nav: true,
        navText: ['<i class="fas fa-angle-left"></i>', '<i class = "fas fa-angle-right" > </i> '],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })


    $('.latest-slider-actives').owlCarousel({
        loop: true,
        dots: false,
        nav: true,
        navText: ['<i class="fas fa-angle-left"></i>', '<i class = "fas fa-angle-right" > </i> '],
        responsive: {
            0: {
                items: 4
            },
            300: {
                items: 1
            },
            600: {
                items: 2
            },
            750: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    })
    $('.testimonial-slider-active').owlCarousel({
        loop: true,
        dots: false,
        nav: true,
        navText: ['<i class="fas fa-angle-left"></i>', '<i class = "fas fa-angle-right" > </i> '],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            768: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })
    $('.latest-blog-slider-actives').owlCarousel({
        loop: true,
        dots: false,
        nav: true,
        navText: ['<i class="fas fa-angle-left"></i>', '<i class = "fas fa-angle-right" > </i> '],
        responsive: {
            0: {
                items: 1
            },
            300: {
                items: 1
            },
            600: {
                items: 1
            },
            750: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })
    $('.box-slider-actives').owlCarousel({
        loop: true,
        dots: false,
        nav: true,
        navText: ['<i class="fas fa-angle-left"></i>', '<i class = "fas fa-angle-right" > </i> '],
        responsive: {
            0: {
                items: 6
            },
            300: {
                items: 2
            },
            600: {
                items: 3
            },
            750: {
                items: 4
            },
            1000: {
                items: 6
            }
        }
    })

})