window.onscroll = function () {
    if (document.body.scrollTop > 10 || document.documentElement.scrollTop >10){
        document.getElementById('menu-logo').style.backgroundColor = "black";
        document.getElementById('menu-logo').style.opacity = ".8";
    }else {
        document.getElementById('menu-logo').style.backgroundColor = "black";
        document.getElementById('menu-logo').style.opacity = "1";
    }
};

$('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: false,
    centerMode: true,
    focusOnSelect: true,
});
$(window).on('load', function() {
    $("#cover").hide();
});



