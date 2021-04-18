$(function ($) {
    "use strict"
    $(".scroll").on('click',function (event) {
        event.preventDefault();
        $('html,body').animate({scrollTop: $(this.hash).offset().top}, 900);
    });
    $("span.menu").on('click',function () {
        $(".top-menu ul").slideToggle("slow", function () {
        });
    });


});