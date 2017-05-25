var maNav = $('#navbar');
var monHeader = $('#welcome');
var maPage = $('body');
var headerHeight = $(window).height() - maNav.height();
var imgCarousel = $('.carousel-inner > .item > img, .carousel-inner > .item > a > img');
var logoNav = $('#logoNav');


monHeader.css('height', headerHeight+'px');
imgCarousel.css('height', headerHeight+'px');

function resize(){
    headerHeight = $(window).height() - maNav.height();
    monHeader.css('height', headerHeight+'px');
    imgCarousel.css('height', headerHeight+'px');
}

$(window).resize(resize);

$(window).scroll(function(){
    //window.onresize = resize();
    if(maPage.scrollTop() >= headerHeight){
        maNav.addClass('navbar-fixed-top');
        logoNav.removeClass('logo_nav_couleurs');
        logoNav.addClass('logo_nav_blanc');
    }
    else{
        maNav.removeClass('navbar-fixed-top');
        logoNav.addClass('logo_nav_couleurs');
        logoNav.removeClass('logo_nav_blanc');
    }
});

////////////// LIEN ACTIVITES
var dropdown = $('.dropdown');

dropdown.click(function(){
    headerHeight = $(window).height() - maNav.height();
    if($(window).scrollTop() < headerHeight){
        if(dropdown.hasClass('open') == false){
            $('html, body').animate({scrollTop : $(window).height()},800);
        }
    }
});