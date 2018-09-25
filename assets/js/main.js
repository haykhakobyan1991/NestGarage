$(document).ready(function(){
    // WOW
    new WOW().init();

    //SCROLL 100VH
    $('.learn_more_btn').click(function(){
        $('html, body').animate({
            scrollTop: $("#elementtoScrollToID").offset().top - 100
        }, 1000);
    })
	
	var h = window.innerHeight+'px';
	$('header').css('height',h);
  
})