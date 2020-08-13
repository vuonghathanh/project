window.onscroll = function () {
    if (document.body.scrollTop > 10 || document.documentElement.scrollTop >10){
        document.getElementById('menu-logo').style.backgroundColor = "black";
        document.getElementById('menu-logo').style.opacity = ".8";
    }else {
        document.getElementById('menu-logo').style.backgroundColor = "transparent";
        document.getElementById('menu-logo').style.opacity = "1";
    }
}

var images = ['https://res.cloudinary.com/thanhdeptrai/image/upload/v1595400282/background-image-1_xnbqgc.jpg',
    'https://res.cloudinary.com/thanhdeptrai/image/upload/v1595400594/4845347_image_hjx0e9.jpg',
    'https://res.cloudinary.com/thanhdeptrai/image/upload/v1595400335/4845362_image_ajrde3.jpg'
    ];
var nextImage = 0;
doSlideShow();

function doSlideShow() {
    if (nextImage >= images.length) {
        nextImage = 0;
    }
    $('.thumbnail').css('background-image', 'url("' + images[nextImage++] + '")').fadeIn(500,function () {
        setTimeout(doSlideShow,5000);
    })

}

var images = ['https://cf.bstatic.com/images/hotel/max1280x900/231/231136762.jpg',
    'https://cf.bstatic.com/images/hotel/max1280x900/149/149346962.jpg',
    'https://cf.bstatic.com/images/hotel/max1280x900/247/247809359.jpg'
];
var nextImage = 0;
doSlideShow();

function doSlideShow() {
    if (nextImage >= images.length) {
        nextImage = 0;
    }
    $('.nav-header').css('background-image', 'url("' + images[nextImage++] + '")').fadeIn(500,function () {
        setTimeout(doSlideShow,5000);
    })

}

$('.responsive').slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 5,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: false
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});
