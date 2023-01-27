$(function () {
    $('.mainVisual .main_slide').slick({
        dots: false,
        autoplay: true,
        arrows: false,
        pauseOnHover: false,
        pauseOnFocus: false,
        autoplaySpeed: 4000,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
    });

    $('.mainSocial .social_slide').slick({
        dots: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: false,
    });
    $('.mainOpen .open_slide').slick({
        dots: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: false,
    });


    $('#header').hover(function () {
        $('#header').addClass('top');
    }, function () {
        $('#header').removeClass('top');

    });

    $(window).scroll(function () {
        var scrollValue = $(document).scrollTop();
        console.log(scrollValue);
    });

    $('.sc_down a').click(function () {

        $('html, body').animate({ scrollTop: 1000 }, 400);
        return false;
    });


    $('#top_btn a').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 400);
        return false;
    });


    $(window).scroll(function () {
        var height = $(document).scrollTop();
        if (height > 500) {
            $('#top_btn a').addClass('on');
        } else if (height < 500) {
            $('#top_btn a').removeClass('on');
        }

    });
});

