//wow
new WOW().init();


//responsive nav
$(".nav-icon").click(function () {
    $(".nav-grid").toggleClass("open-nav");
    $(this).toggleClass("active-bar")
});





$(function () {
    var $win = $(window); // or $box parent container
    var $box = $(".nav-icon,.nav-grid");
    $win.on("click.Bst", function (event) {
        if (
            $box.has(event.target).length === 0 && //checks if descendants of $box was clicked
            !$box.is(event.target) //checks if the $box itself was clicked
        ) {

            $(".nav-grid").removeClass("open-nav");
            $(".nav-icon").removeClass("active-bar")
        }
    });
});


//shop pop
$(".shop-page .product-img").click(function () {
    $("body").addClass("pop-body").removeClass("close-pop");


});

$(".pop-close").click(function () {
    $("body").removeClass("pop-body").addClass("close-pop");
});


//nav scroll
$(window).scroll(function () {
    var scroll = $(window).scrollTop();
    var headheight = 100;
    //>=, not <=
    if (scroll >= headheight) {
        //clearHeader, not clearheader - caps H
        $("header").addClass("header-fixed");


    } else {
        $("header").removeClass("header-fixed");
    }
});

//whatsapp scroll
$(window).scroll(function () {
    var scroll = $(window).scrollTop();
    var headheight2 = 20;
    //>=, not <=
    if (scroll >= headheight2) {
        //clearHeader, not clearheader - caps H
        $(".whatsapp-div").addClass("bounce  whatsapp-div-fixed");


    } else {
        $(".whatsapp-div").removeClass("bounce whatsapp-div-fixed");
    }
});




//panels

$(".pan-div:first-of-type").addClass("open-panel").find(".panel-prg").slideDown();
$(".pan-title").click(function () {
    $(this).parent().toggleClass("open-panel").find(".panel-prg").slideToggle();
    $(this).parent().siblings().removeClass("open-panel");
    $(this).parent().siblings().find(".panel-prg").slideUp();

});


//pagination

$(function () {

    /* initiate the plugin */
    $("div.holder1").jPages({
        containerID: "itemcontainer",
        perPage: 9
    });
    $("div.holder2").jPages({
        containerID: "itemcontainer2",
        perPage: 12
    });

    $("div.holder3").jPages({
        containerID: "itemcontainer3",
        perPage: 6
    });


});




//file-upload

$('#chooseFile').bind('change', function () {
    var filename = $("#chooseFile").val();
    if (/^\s*$/.test(filename)) {
        $(".file-upload2").removeClass('active');
        $("#noFile").text("");
    } else {
        $(".file-upload2").addClass('active');
        $("#noFile").text(filename.replace("C:\\fakepath\\", ""));
    }
});



//owl-carousel



$(".main-owl .owl-carousel").owlCarousel({
    loop: true,
    items: 1,
    rtl:true,
    autoplay: true,
    nav: true,
    dots: false,
    touchDrag: true,
    mouseDrag: true,
    autoplayTimeout: 8000,
    smartSpeed: 300,
    animateOut: "fadeOut",
    animateIn: "fadeInDown"


});


$(".secondary-owl .owl-carousel").owlCarousel({
    loop: true,
    margin: 30,
    items: 3,
    rtl:true,
    autoplay: true,
    nav: true,
    dots: false,
    touchDrag: true,
    mouseDrag: true,
    responsive: {
        0: {
            items: 1
        },
        576: {
            items: 1
        },
        768: {
            items: 2,
        },
        993: {
            items: 3
        }

    }
});




$(".third-owl .owl-carousel").owlCarousel({
    loop: true,
    margin: 0,
    rtl: true,
    items: 1,
    dots: true,
    autoplay: true,
    smartSpeed: 3500,
    autoplayTimeout: 10000,
    mouseDrag: true,
    animateOut: "fadeOut",
    animateIn: "fadeInDown"


});

$(".news-owl .owl-carousel").owlCarousel({
    loop: true,
    margin: 10,
    items: 2,
    rtl:true,
    nav: false,
    dots: true,
    autoplay: true,
    touchDrag: true,
    mouseDrag: true,
    responsive: {
        0: {
            items: 1
        },
        380: {
            items: 1,
        },
        600: {
            items: 1
        },
        1000: {
            items: 2
        }
    }

});



$(".brands-owl .owl-carousel").owlCarousel({
    loop: true,
    margin: 30,
    items: 5,
    rtl:true,
    autoplay: true,
    nav: true,
    dots: false,
    touchDrag: true,
    mouseDrag: true,
    responsive: {
        0: {
            items: 1
        },

        380: {
            items: 2
        },
        576: {
            items: 3
        },
        768: {
            items: 3,
        },
        993: {
            items: 4
        },
        1200: {
            items: 5
        }


    }
});

$(".pop-owl .owl-carousel").owlCarousel({
    loop: true,
    items: 1,
    autoplay: true,
    nav: true,
    rtl:true,
    dots: false,
    touchDrag: true,
    mouseDrag: true,
    autoplayTimeout: 8000,
    smartSpeed: 300,
    animateOut: "fadeOut",
    animateIn: "fadeInUp"
});

$(document).ready(function () {

    var sync1 = $("#sync1");
    var sync2 = $("#sync2");
    var slidesPerPage = 4; //globaly define number of elements per page
    var syncedSecondary = true;

    sync1.owlCarousel({
        items: 1,
        slideSpeed: 2000,
        nav: false,
        rtl: true,
        autoplay: true,
        dots: false,
        loop: true,
        responsiveRefreshRate: 200,
    }).on('changed.owl.carousel', syncPosition);

    sync2
        .on('initialized.owl.carousel', function () {
            sync2.find(".owl-item").eq(0).addClass("current");
        })
        .owlCarousel({
            items: slidesPerPage,
            dots: false,
            margin: 10,
            nav: false,
            smartSpeed: 200,
            rtl: true,
            slideSpeed: 500,
            slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
            responsiveRefreshRate: 100
        }).on('changed.owl.carousel', syncPosition2);

    function syncPosition(el) {
        //if you set loop to false, you have to restore this next line
        //var current = el.item.index;

        //if you disable loop you have to comment this block
        var count = el.item.count - 1;
        var current = Math.round(el.item.index - (el.item.count / 2) - .5);

        if (current < 0) {
            current = count;
        }
        if (current > count) {
            current = 0;
        }

        //end block

        sync2
            .find(".owl-item")
            .removeClass("current")
            .eq(current)
            .addClass("current");
        var onscreen = sync2.find('.owl-item.active').length - 1;
        var start = sync2.find('.owl-item.active').first().index();
        var end = sync2.find('.owl-item.active').last().index();

        if (current > end) {
            sync2.data('owl.carousel').to(current, 100, true);
        }
        if (current < start) {
            sync2.data('owl.carousel').to(current - onscreen, 100, true);
        }
    }

    function syncPosition2(el) {
        if (syncedSecondary) {
            var number = el.item.index;
            sync1.data('owl.carousel').to(number, 100, true);
        }
    }

    sync2.on("click", ".owl-item", function (e) {
        e.preventDefault();
        var number = $(this).index();
        sync1.data('owl.carousel').to(number, 300, true);
    });
});




/*================================
    ******** Main Slider ********
    ================================*/
$(document).ready(function () {

    if ($('#rev_slider_3_1').revolution == undefined)
        revslider_showDoubleJqueryError('#rev_slider_3_1');
    else
        revapi3 = $('#rev_slider_3_1').show().revolution({
            dottedOverlay: "none",
            delay: 9000,
            startwidth: 1400,
            startheight: 540,
            hideThumbs: 10,
            thumbWidth: 100,
            thumbHeight: 50,
            thumbAmount: 4,
            navigationType: "bullet", //bullet, thumb, none, both     (No Shadow in Fullwidth Version !)
            navigationArrows: "verticalcentered", //nexttobullets, verticalcentered, none
            navigationStyle: "square",
            touchenabled: "on",
            onHoverStop: "off",
            navigationHAlign: "center",
            navigationVAlign: "center",
            navigationHOffset: 0,
            navigationVOffset: 0,
            soloArrowLeftHalign: "left",
            soloArrowLeftValign: "center",
            soloArrowLeftHOffset: 20,
            soloArrowLeftVOffset: 0,
            soloArrowRightHalign: "right",
            soloArrowRightValign: "center",
            soloArrowRightHOffset: 20,
            soloArrowRightVOffset: 0,
            shadow: 0,
            fullWidth: "on",
            fullScreen: "off",
            stopLoop: "off",
            stopAfterLoops: -1,
            stopAtSlide: -1,
            shuffle: "off",
            forceFullWidth: "on",
            fullScreenAlignForce: "off",
            minFullScreenHeight: "",
            hideThumbsOnMobile: "off",
            hideBulletsOnMobile: "off",
            hideArrowsOnMobile: "off",
            hideThumbsUnderResolution: 0,
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 768,
            hideAllCaptionAtLilmit: 0,
            startWithSlide: 0,
            videoJsPath: "http://localhost/wordpress306/wp-content/plugins/revslider/rs-plugin/videojs/",
            fullScreenOffsetContainer: "header, .pagetitlewrap"
        });







});










// $(function () {
//     $('.modal').modal('toggle');
//  });






//form validtion
(function () {
    'use strict';
    window.addEventListener('load', function () {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function (form) {
            form.addEventListener('submit', function (event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();




$(".rate-popup").click(function(){
    $(this).closest('.modal-details').modal('hide');
})
