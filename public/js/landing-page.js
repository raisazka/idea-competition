var position = $(window).scrollTop(); 
var temp;
var section2 = $('#section-2').height();
$(document).ready(function(){

    let opentoggle = () =>{
        $(".btn-burger").toggleClass("btn-burger-toggle");   
        $('.navbar').toggleClass('navbar-mobile');
        // $(".my-nav").toggleClass("nav-container");
        $(".section-navbar").toggleClass("section-navbar-left");
    };
    
    $(".btn-burger").click(function(){
        opentoggle();
    });
    $('.carousel').carousel({
        interval: 1500
    });
    
    
});

$(document).scroll(function(){
    temp = (position-1)+1.2;
    var scroll = $(window).scrollTop();
    if(scroll > temp) {
        $('.navbar').css('top','-80px');
    } else {
        $('.navbar').css('top','0');
    }
    position = scroll;
    temp = (position-1) + 0.001;
    if($(window).scrollTop() > section2){
        $('.navbar').addClass('nav-have');
        $('.no-burger').addClass('nav-color');
    }
    else{
        $('.navbar').removeClass('nav-have');
        $('.no-burger').removeClass('nav-color');
    }
});