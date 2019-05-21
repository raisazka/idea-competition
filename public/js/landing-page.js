$(document).ready(function(){

    let opentoggle = () =>{
        $(".btn-burger").toggleClass("btn-burger-toggle");
        $(".my-nav").toggleClass("nav-container");
        $(".section-navbar").toggleClass("section-navbar-left");
    };
    
    $(".btn-burger").click(function(){
        opentoggle();
    });
    $('.carousel').carousel({
        interval: 1500
    });

});