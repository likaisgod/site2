(function($) {
  "use strict";

<!-- Menu and tiles actions -->  
$('.home-link').click(function() {
    $('nav a').removeClass('active');
    $(this).addClass('active');
    $('.on').addClass('off');
    $('.off').removeClass('on').delay(500).queue(function(next){
        $(this).addClass('display-none');
        next();
    });
    $('.home').removeClass('off').delay(0).queue(function(next){
        $(this).addClass('on').removeClass('display-none');
        next();
    });
});
    
$('.profile-link-box').click(function() {
    $('nav a').removeClass('active');
    $('.profile-link').addClass('active');
    $('.on').addClass('off');
    $('.off').removeClass('on').delay(500).queue(function(next){
        $(this).addClass('display-none');
        next();
    });
    $('.profile').removeClass('off').delay(0).queue(function(next){
        $(this).addClass('on').removeClass('display-none');
        next();
    });
});

$('.profile-link').click(function() {
    $('nav a').removeClass('active');
    $(this).addClass('active');
    $('.on').addClass('off');
    $('.off').removeClass('on').delay(500).queue(function(next){
        $(this).addClass('display-none');
        next();
    });
    $('.profile').removeClass('off').delay(0).queue(function(next){
        $(this).addClass('on').removeClass('display-none');
        next();
    });
});

    
$('.portfolio-link-box').click(function() {
    $('nav a').removeClass('active');
    $('.portfolio-link').addClass('active');
    $('.on').addClass('off');
    $('.off').removeClass('on').delay(500).queue(function(next){
        $(this).addClass('display-none');
        next();
    });
    $('.portfolio').removeClass('off').delay(0).queue(function(next){
        $(this).addClass('on').removeClass('display-none');
        next();
    });
});
    
$('.portfolio-link').click(function() {
    $('nav a').removeClass('active');
    $(this).addClass('active');
    $('.on').addClass('off');
    $('.off').removeClass('on').delay(500).queue(function(next){
        $(this).addClass('display-none');
        next();
    });
    $('.portfolio').removeClass('off').delay(0).queue(function(next){
        $(this).addClass('on').removeClass('display-none');
        next();
    });
});
    
$('.education-link-box').click(function() {
    $('nav a').removeClass('active');
    $('.education-link').addClass('active');
    $('.on').addClass('off');
    $('.off').removeClass('on').delay(500).queue(function(next){
        $(this).addClass('display-none');
        next();
    });
    $('.education').removeClass('off').delay(0).queue(function(next){
        $(this).addClass('on').removeClass('display-none');
        next();
    });
});
    
$('.education-link').click(function() {
    $('nav a').removeClass('active');
    $(this).addClass('active');
    $('.on').addClass('off');
    $('.off').removeClass('on').delay(500).queue(function(next){
        $(this).addClass('display-none');
        next();
    });
    $('.education').removeClass('off').delay(0).queue(function(next){
        $(this).addClass('on').removeClass('display-none');
        next();
    });
});

$('.experience-link-box').click(function() {
    $('nav a').removeClass('active');
    $('.experience-link').addClass('active');
    $('.on').addClass('off');
    $('.off').removeClass('on').delay(500).queue(function(next){
        $(this).addClass('display-none');
        next();
    });
    $('.experience').removeClass('off').delay(0).queue(function(next){
        $(this).addClass('on').removeClass('display-none');
        next();
    });
});
    
$('.experience-link').click(function() {
    $('nav a').removeClass('active');
    $(this).addClass('active');
    $('.on').addClass('off');
    $('.off').removeClass('on').delay(500).queue(function(next){
        $(this).addClass('display-none');
        next();
    });
    $('.experience').removeClass('off').delay(0).queue(function(next){
        $(this).addClass('on').removeClass('display-none');
        next();
    });
});

$('.contact-link-box').click(function() {
    $('nav a').removeClass('active');
    $('.contact-link').addClass('active');
    $('.on').addClass('off');
    $('.off').removeClass('on').delay(500).queue(function(next){
        $(this).addClass('display-none');
        next();
    });
    $('.contact').removeClass('off').delay(0).queue(function(next){
        $(this).addClass('on').removeClass('display-none');
        next();
    });
});
    
$('.contact-link').click(function() {
    $('nav a').removeClass('active');
    $(this).addClass('active');
    $('.on').addClass('off');
    $('.off').removeClass('on').delay(500).queue(function(next){
        $(this).addClass('display-none');
        next();
    });
    $('.contact').removeClass('off').delay(0).queue(function(next){
        $(this).addClass('on').removeClass('display-none');
        next();
    });
});

<!-- Tooltip -->  
$('[data-toggle="tooltip"]').tooltip('hide');


<!-- Scroll -->  
$(window).load(function(){
    $('.scroll').mCustomScrollbar();
});

$('.scroll').mCustomScrollbar({
    advanced:{
        updateOnContentResize:true
    }
});

<!-- Scroll -->  
$(window).load(function(){
    $('.box-twitter').mCustomScrollbar();
});

$('.box-twitter').mCustomScrollbar({
    advanced:{
        updateOnContentResize:false
    }
});

  // Author code here
})(jQuery);