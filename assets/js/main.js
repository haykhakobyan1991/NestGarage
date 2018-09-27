$(document).ready(function () {
	// WOW
	new WOW().init();

	//SCROLL 100VH
	$('.learn_more_btn').click(function () {
		$('html, body').animate({
			scrollTop: $("#elementtoScrollToID").offset().top - 100
		}, 1000);
	})

	var h = window.innerHeight + 'px';
	$('header').css('height', h);


	setTimeout(function () {
		$('.chat').fadeIn('slow');
	}, 10);

	var $menu = $('.modal');
	var $chat = $('.chat');
	var $chat_img = $('.chat_img');
	var $chat_text = $('.chat_text');

	$(document).click(function (e) {
		//var div = e.target;
		if (!$menu.is(e.target) && !$chat.is(e.target) && !$chat_img.is(e.target) && !$chat_text.is(e.target) && $menu.has(e.target).length === 0) {

			$('.modal').fadeOut('slow');
			$('.chat').removeClass('open');

		}
	});


	$('.chat').on('click', function () {

		if ($(this).hasClass('open')) {

			$('.modal').fadeOut('slow');
			$(this).removeClass('open');

		} else {

			$('.modal').fadeIn('slow');
			$(this).addClass('open');
		}

	})


})
