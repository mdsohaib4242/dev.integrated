culture();


// triggering js on window resize
$(window).resize(function () {
    
    // setting size of images
    culture();

})

function culture() {
    // var height = $('.culture .culture-img').height();
    // $('.culture-content').css({ 'height': height / 2 });
}

// MEGA MENU
$('.menu-link-1.has-menu a').mouseenter(function() {
    $('.menu-link-1.expanded').removeClass('expanded');
    $(this).closest('.menu-link-1').addClass('expanded');
    $('.overlay').show();
    $('body').css({'overflow': 'hidden'});
});
$('.menu-link-1.has-menu .menu-level-2').mouseleave(function() {
    $(this).closest('.menu-link-1').removeClass('expanded');
    $('.overlay').hide();
    $('body').css({'overflow': 'auto'});
});

$('.menu-summary .close').click(function() {
    $('.navbar-bottom-menus .expanded').removeClass('expanded');
    $('.overlay').hide();
    $('body').css({'overflow': 'auto'});
});

$('.menu-link-2 a').mouseenter(function() {
    $('.menu-link-2.expanded').removeClass('expanded');
    $(this).closest('.menu-link-2').addClass('expanded');
    // $('.overlay').show();
});
$('.menu-link-2 .menu-level-3').mouseleave(function() {
    // $(this).closest('.menu-link-2').removeClass('expanded');
    $('.menu-link-2').removeClass('expanded');
    // $('.overlay').show();
});


// Mega menu for small device
$('.menu-small.has-menu a').click(function() {
    if($(this).parent().hasClass('expanded')) {
        $('.menu-small.expanded').removeClass('expanded');
        return;
    }
    $('.menu-small.expanded').removeClass('expanded');
    $(this).closest('.menu-small').addClass('expanded');
});
$('.link-small-2.has-menu a').click(function() {
    if($(this).parent().hasClass('expanded')) {
        $('.link-small-2.expanded').removeClass('expanded');
        return;
    }
    $('.link-small-2.expanded').removeClass('expanded');
    $(this).closest('.link-small-2').addClass('expanded');
});


// home

$('.link-content').mouseenter(function(){
    $(this).find('.link-content-overlay').show('slide', { direction: "down" }, 500);;
});
$('.link-content').mouseleave(function(){
    $(this).find('.link-content-overlay').hide('slide', { direction: "down" }, 500);
});


// our firm

$('.culture-img').mouseenter(function(){
    $(this).find('.culture-img-overlay').show('slide', { direction: "down" }, 500);;
});
$('.culture-img').mouseleave(function(){
    $(this).find('.culture-img-overlay').hide('slide', { direction: "down" }, 500);
});


//owl carousel
$(document).ready( function(){
    $('.owl-one').owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
        autoplay:true,
        autoplayTimeout:2000,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            480:{
                items:2,
                nav:true
            },
            992:{
                items:3,
                nav:true
            },
            1200:{
                items:4,
                nav:true
            }
        }
    });


    $('.owl-two').owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
        autoplay:true,
        autoplayTimeout:2000,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            480:{
                items:2,
                nav:true
            },
            992:{
                items:3,
                nav:true
            },
            // 1200:{
            //     items:3,
            //     nav:true
            // }
        }
    });
});


// accordion

$('.service-accordion-title ul li').click(function() {
    $('.service-accordion-title ul li.active').removeClass('active');
    $(this).addClass('active');
    var title_id = $(this).attr('id');
    var x = title_id.charAt(5);
    $(".localization-services-accordion .service-accordion-content").hide();
    $(".localization-services-accordion #content"+x+"").show();
});

$('.service-accordion-title ul li#title1').click();

// services

$('.offering-title tr').click(function(){
    $('.offering-title tr.active').removeClass('active');
    $(this).addClass('active');
    var offering_title_id = $(this).attr('id');
    var a = offering_title_id.charAt(14);
    $(".offering-content .offering-content-left").hide();
    $(".offering-content #offering-content"+a+"").show();
    $(".offering-img-wrap img").hide();
    $(".offering-img-wrap #offering-img"+a+"").show();
});

$('.offering-title tr#offering-title1').click();

//contact us

$('.contact-us-title').click(function(){
    $('.contact-us-title').removeClass('active');
    $(this).addClass('active');
    var contact_us_title_id = $(this).attr('id');
    var n = contact_us_title_id.charAt(contact_us_title_id.length - 1);
    $(".contact-us-mid-bottom-left").hide();
    $("#contact-us-content"+n+"").show();
    $(".contact-us-mid-bottom-right img").hide();
    $(".contact-us-mid-bottom-right #contact-us-img"+n+"").show();

});

$('#contact-us-title1').click();


// voices

$('a.playaudio i').click( function(e){
    e.preventDefault();
    var audio_link = $(this).parent().parent().parent().find('a.down_aud').attr('href');
    var audio = new Audio(audio_link);
    audio.play();
});
// Voice play and pause
$('.playaudio-wrap .show-audio').click(function () {
    $(this).closest('.playaudio-wrap').find('.audio-container').show();
});
$('.playaudio-wrap .close-audio').click(function() {
    $(this).closest('.playaudio-wrap').find('.audio-container').hide();
});

$('.play-audio').click(function() {
    $(this).closest('.playaudio-wrap').find('.playaudio audio')[0].play();
    $(this).closest('.audio-container').find('.pause-audio').show();
    $(this).hide();
});
$('.pause-audio').click(function() {
    $(this).closest('.playaudio-wrap').find('.playaudio audio')[0].pause();
    $(this).closest('.audio-container').find('.play-audio').show();
    $(this).hide();
});

$('a.social').click(function(e){
    e.preventDefault();
    var $link   = $(this);
    var href    = $link.attr('href');
    var network = $link.attr('data-network');
    
    var networks = {
        facebook : { width : 600, height : 300 },
        twitter  : { width : 600, height : 254 },
        google   : { width : 515, height : 490 },
        linkedin : { width : 600, height : 473 }
    };
    
    var popup = function(network){
        var options = 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,';
        window.open(href, '', options+'height='+networks[network].height+',width='+networks[network].width);
    }
    
    popup(network);
    });