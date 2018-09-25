$(document).ready(function(){
    // WOW
    new WOW().init();

    //SCROLL 100VH
    $('.learn_more_btn').click(function(){
        $('html, body').animate({
            scrollTop: $("#elementtoScrollToID").offset().top
        }, 1000);
    })
    
})