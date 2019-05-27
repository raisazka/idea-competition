var position = $(window).scrollTop(); 
var temp;
var section2 = $('#section-2').height();
var ctr=0;
var myVar;
function myFunction() {
myVar = setTimeout(showPage, 3000);
}

function showPage() {
    $('#loader').css('filter','opacity(0)');
    $('.body-content').css('display','block');
}
$(document).ready(function(){
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
        interval: 1500
    });
    
    
});

$(document).scroll(function(){
    temp = (position-1)+1.2;
    var scroll = $(window).scrollTop();
    if(scroll > temp) {
        if(ctr%2==0){
            $('.navbar').css('top','-80px');
        }
    } else {
        $('.navbar').css('top','0');
    }
    position = scroll;
    temp = (position-1) + 0.001;
    if($(window).scrollTop() > section2){
        $('.navbar').addClass('nav-have');
        $('.no-burger').addClass('nav-color');
        $('.btn-burger>span').removeClass('color-super-dark');
    }
    else{
        $('.navbar').removeClass('nav-have');
        $('.no-burger').removeClass('nav-color');
        $('.btn-burger>span').addClass('color-super-dark');
    }
});