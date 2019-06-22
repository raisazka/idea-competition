var position = $(window).scrollTop(); 
var temp;
var section2;
var ctr=0;
var myVar;
function loadingScene() {
myVar = setTimeout(showPage, 3000);
}
function showPage() {
    $('#loader').css('filter','opacity(0)');
    $('.body-content').css('display','block');
    setTimeout(done,600);
}
function done(){
    $('#loader').css('display','none');
}

var map,marker;
function initMap() {
var uluru = {lat: -6.201473, lng: 106.781548};
map = new google.maps.Map(document.getElementById('map'),{zoom: 15, center: uluru});
marker = new google.maps.Marker({position: uluru, map: map});
}
$(document).ready(function(){
    $('#close-notice').click(function(){
        $('#register-message').css('filter','opacity(0)');
        setTimeout(function(){
            $('#register-message').css('display','none');
        },600);
        $('.body-content').css('display','block');
    });
    $('.faq-desc').slideToggle();
   var hT = $('#home-div').offset().top,
    hH = $('#home-div').outerHeight(),
    wH = $(window).height();
    section2 = hT+hH-wH;
    $('.faq-caption').click(function(){
        console.log('masuk');
        $(this).parent().find('.faq-desc').slideToggle("slow");
        $(this).find('i').toggleClass('active-des');
    });
    $('.upreveal-1').css('animation','upreveal 1s ease-in-out');
    $('.rightreveal-1').css('animation','rightreveal 1s ease-in-out')
    let opentoggle = () =>{
        $(".btn-burger").toggleClass("btn-burger-toggle");   
        $('.navbar').toggleClass('navbar-mobile');
        ctr++;
        // $(".my-nav").toggleClass("nav-container");
        $(".section-navbar").toggleClass("section-navbar-left");
    };
    
    $(".btn-burger").click(function(){
        opentoggle();
    });
    $(".section-navbar-list").click(function(){
        opentoggle();
    });
    $('.carousel').carousel({
        interval: 6000
      });
    console.log($('#abc'));
});

$(document).scroll(function(){
    if($(window).scrollTop() > $('#section-2').offset().top){
        $('.navbar').addClass('nav-have');
        $('.no-burger').addClass('nav-color');
        $('.btn-burger>span').removeClass('color-super-dark');
    }
    else{
        $('.navbar').removeClass('nav-have');
        $('.no-burger').removeClass('nav-color');
        $('.btn-burger>span').addClass('color-super-dark');
    }
    temp = (position-1)+1.2;
    var scroll = $(window).scrollTop();
    if(scroll > temp) {
        if(ctr%2==0){
            $('.navbar').css('transform','translateY(-80px)');
        }
    } else {
        $('.navbar').css('transform','translateY(0)');
    }

    position = scroll;
    temp = (position-1) + 0.001;
    // if($(window).scrollTop() + $(window).height() > $('.upreveal').offset().top){
    //     $('.upreveal').css('animation','upreveal 1s ease-in-out');
    // }
    // if($(window).scrollTop() + $(window).height() > $('.rightreveal').offset().top){
    //     $('.rightreveal').addClass('rightmotion');
    // }
});