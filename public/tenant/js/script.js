// navbar link active
$(document).ready(function () {
    activeLink("about");
    activeLink("home");

    modalToggle("header-phone", "navbar", "-phone");

    toggleElement("fasilitas");
    toggleElement("location");
    toggleElement("prestasi");
});

function activeLink(name) {
    if (window.location.href.indexOf(name) > -1) {
        $(`.${name}-link`).addClass("active-link");
    }
}

// navbar scroll
// $(window).scroll(function () {
//     if (window.location.href.indexOf("/") > -1) {
//         navScroll("897");
//     } else if (window.location.href.indexOf("about") > -1) {
//         navScroll("50");
//     }
// });

$(".btn-show-header-popup").on("click", function () {
    $(".header-popup").addClass("show");
});
$(".btn-close-header-popup").on("click", function () {
    $(".header-popup").removeClass("show");
});
if ($(".header-popup").hasClass("show")) {
    $(".header").addClass("header-bg");
}
function navScroll(num) {
    if ($(window).scrollTop() >= num) {
        $(".header-top").addClass("hide trans-y-100");
        $(".header").addClass("header-bg ");
        $(".header").addClass("show");
        // $(".header").css("padding", "1.6rem 5rem");
    } else {
        $(".header-top").removeClass("hide trans-y-100");
        $(".header").removeClass("header-bg ");
        $(".header").removeClass("show");
        // $(".header").css("padding", "4rem 5rem");
    }
}
$(document).ready(function () {
    navScroll(100);
    $(window).scroll(function () {
        navScroll(100);
    });
});
$(window).on("click", function (e) {
    if (
        !$(".header-popup-container-wrapper").get(0).contains(e.target) &&
        !$(".btn-show-header-popup").get(0).contains(e.target) &&
        !$(".header-top .btn-show-header-popup").get(0).contains(e.target)
    ) {
        $(".header-popup").removeClass("show");
    }
});

// modal

function modalToggle(modal, name, ec) {
    $(`.btn-show-${name}${ec}`).on("click", function () {
        $(`.${modal}`).toggleClass("show");
        $(`.${modal}`).toggleClass("trans-0");
    });
    $(`.btn-close-${name}${ec}`).on("click", function () {
        $(`.${modal}`).toggleClass("show");
        $(`.${modal}`).toggleClass("trans-0");
    });
}

// home - sambutan text overflow elipsis
// $(".card__desc--show").on("click", function () {
//     let desc = ".card__desc--text";
//     $(this).siblings(desc).toggleClass("undesc");
//     if ($(this).siblings(desc).hasClass("undesc")) {
//         $(this).addClass("card-down");
//         $(this).text("Lebih Sedikit");
//     } else if ($(this).siblings(`${desc}:not(.undesc)`)) {
//         $(this).removeClass(`card-down`);
//         $(this).text("...Selengkapnya");
//     }
// });

// popup profile sectionar
function toggleElement(name) {
    $(`.btn-show-${name}`).on("click", function () {
        $(`.${name}`).addClass("show");
        $(`.${name}__wrapper`).addClass("trans-0");
        $(document).on("keyup", function (evt) {
            if ($(`.${name}`).hasClass("show")) {
                if (evt.keyCode == 27) {
                    $(`.${name}`).removeClass("show");
                    $(`.${name}__wrapper`).removeClass("trans-0");
                }
            }
        });
    });

    $(`.btn-close-${name}`).on("click", function () {
        $(`.${name}`).removeClass("show");
        $(`.${name}__wrapper`).removeClass("trans-0");
    });
}

$(".btn-swipe").on("click", function () {
    $(this).toggleClass("btn-top-swipe");
    $(this).parents(".fasilitas-box__info--swipe").toggleClass("trans-0");
    $(this).parents(".fasilitas-box").toggleClass("bg-primary");

    if ($(this).hasClass("btn-top-swipe")) {
        $(this).children("p").text("Hide Detail");
        $(this).children("ion-icon").attr("name", "chevron-down-outline");
    } else {
        $(this).children("p").text("Show Detail");
        $(this).children("ion-icon").attr("name", "chevron-up-outline");
    }
});
