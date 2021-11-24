$(document).ready(function () {
    $('.navigation-icon').click(function (e) { 
        e.preventDefault();
        $('.nav-bar').addClass('active');
        $('.cover').addClass('active');
    });
});
$(document).ready(function () {
    $('.cover').click(function (e) { 
        e.preventDefault();
        $('.nav-bar').removeClass('active');
        $('.cover').removeClass('active');
    });
});
// =========================== Tab Product ======================
$(document).ready(function () {
    $('.product-bar-name').click(function (e) { 
        e.preventDefault();
        var _id = $(this).attr('href');
        $('.product-bar-name').removeClass('active');
        $('.product-row').removeClass('active');
        $(_id).addClass('active');
        $(this).addClass('active');
    });
});

// ==================slick===================
$(document).ready(function () {
    $('.slider').slick({
        arrows: false,
        // fade: true,
        // autoplay: true, 
        // dots:true,
        autoplaySpeed: 3000,
        accessibility: true
        // cssEase: 'linear'
    });
});
$(document).ready(function () {
    $('.slider-2').slick({
        arrows: false,
        // fade: true,
        // autoplay: true, 
        dots: true,
        // infinite: true,
        speed: 500,
        // dots:true,
        autoplaySpeed: 2000,
        accessibility: true
        // cssEase: 'linear'
    });
});


// $('.nav-icon').click(function (e) { 
//     e.preventDefault();
//     $('.navbar').removeClass('active');
//     $('.cover').addClass('active');
// });