$(document).ready(function ($) {

    $('#hamburger-toggler').on('click', function () {
        $('.ideal-remit-mobile-nav').addClass('open');
        $('body').css({
            'overflow': 'hidden',
        });
    });


    $('.close-mobile-navbar').on('click', function () {
        $('.ideal-remit-mobile-nav').removeClass('open');
        $('body').css({
            'overflow': 'auto',
        });
    });


    $('#search-history-toggle').on('click', function () {
        $('.search-payment-history').show();
    });


    $('#close-search-form').on('click', function () {
        $('.search-payment-history').hide();
    });


    var clickState = 0;

    function open() {
        $('.acount-info-drip').fadeIn(100);
        $('.acount-info-drip').animate({
            top: "44px",
        }, 600)

        clickState = 1;
    }

    function close() {
        $('.acount-info-drip').fadeOut(100);
        $('.acount-info-drip').animate({
            top: "30px",
        }, 600);
        clickState = 0;


    }

    var btn = $('.user-profile-reloaded');

    btn.on('click', function() {

        if (clickState == 0) {
            open();
        } else {
            close();
        }


    })

    })

