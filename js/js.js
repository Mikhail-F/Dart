$(function () {

    let nav__head = $(".nav__head");
    let intro = $(".header");
    let introH = intro.innerHeight();
    let scrollPos = $(window).scrollTop();

    checkScroll(scrollPos, introH);

    $(window).on("scroll resize", function () {

        let introH = intro.innerHeight();

        scrollPos = $(this).scrollTop();

        checkScroll(scrollPos, introH);
    });

    function checkScroll() {
        if (scrollPos > introH) {
            nav__head.addClass("fixed");
        }
        else {
            nav__head.removeClass("fixed");
        }
    };

    // Smooth Scroll
    $("[data-scroll]").on("click", function (event) {
        event.preventDefault(); // Отменяет стандартное поведение ссылки при клике.

        let elementId = $(this).data('scroll');
        let elementOffset = $(elementId).offset().top; // Отступ от элемента до верха.

        $("html, body").animate({
            scrollTop: elementOffset - 65
        }, 700);

        // Закрытие менюшки при выборе пункта
        let nav = $(".nav-h");
        nav.removeClass("show");
    });


    // Nav Toggle

    let nav = $("#nav");
    let navToggle = $("#navToggle");

    navToggle.on('click', function (event) {
        event.preventDefault(); // Отменяет стандартное поведение ссылки при клике.

        nav.toggleClass("show");

    });

    $('.single-item').slick({
        vertical: true,
        verticalSwiping: true,
        slidesToShow: 2,
        autoplay: false,
        responsive: [{

            breakpoint: 1100,
            settings: {
                vertical: false,
                verticalSwiping: false,
                slidesToShow: 1,
                infinite: true
            }

        }]
    });

    $('.tslider').slick({
        centerMode: true,
        centerPadding: '0',
        slidesToShow: 3,
        autoplay: false,
        responsive: [{

            breakpoint: 769,
            settings: {
                slidesToShow: 1,
            }

        }]
    });

})

let nav = document.querySelector('.nav-h')
document.querySelector('.burger').addEventListener('click', show)

function show() {
    nav.classList.toggle('show')

}