<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="google-site-verification" content="Mkn03uHs8mUwOONukPy8p_CkkddQG5hgj9HTsHf2mKs"/>
	<meta name="description" content="<?= $result_web[$lng]['meta_desc'] ?>"/>
	<meta name="keywords" content="<?= $result_web[$lng]['key_word'] ?>"/>
	<title><?= $result_web[$lng]['website_name'] ?></title>

	<!--// Stylesheets //-->
	<link rel="shortcut icon" href="<?= base_url() ?>assets/img/<?= $result_web[$lng]['favicon'] ?>" type="image/png">
	<link href="<?= base_url() ?>assets/css/reset.css" rel="stylesheet" type="text/css"/>
	<link
		href="<?= ($result_main[$lng]['font_url'] == '' ? 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' : $result_main[$lng]['font_url']) ?>"
		rel="stylesheet"/>
	<link href="<?= base_url() ?>assets/css/animate.css" rel="stylesheet" type="text/css"/>
	<link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet" type="text/css"/>

	<style>
		.join_center::after {
			content: "";
			position: absolute;
			width: 100%;
			height: 100%;
			left: 0;
			top: 0;
			opacity: .7;
			background: <?=($result_functional2[$lng]['background_color'] != '' ? $result_functional2[$lng]['background_color'].';' : 'linear-gradient(to right, rgb(58, 97, 134), rgb(137, 37, 62));')?>
			z-index: -1;
		}

		button.m_btn.btn_begin {
			background: <?=($result_functional2[$lng]['background_color'] != '' ? $result_functional2[$lng]['background_color'].';' : 'linear-gradient(to right, rgb(58, 97, 134), rgb(137, 37, 62));')?>
		}


	</style>


</head>
<body
	style="<?= ($result_main[$lng]['font_css'] == '' ? 'font-family: \'Open Sans\', sans-serif;' : $result_main[$lng]['font_css']) ?>">
<header style="background-image: url(<?= base_url() . 'assets/img/' . $result_main[$lng]['background_img'] ?>);">

	<div class="center">

		<div class="language_div">
			<span data-value="lang_1" class="lng lng_arm"><?= $result_web[0]['language'] ?></span>
			<? if ($result_web[1]['language_status'] == 1) { ?>
				<span data-value="lang_2" class="lng lng_rus"><?= $result_web[1]['language'] ?></span>
			<? } ?>
		</div>

		<main>
			<h1 class="title wow bounceIn"><?= $result_main[$lng]['title'] ?></h1>
			<p class="main_text">
				<?= $result_main[$lng]['main_text'] ?>
			</p>

			<div class="main_buttons">
				<button class="m_btn learn_more_btn"><?= $result_main[$lng]['button_1'] ?></button>
				<a class="buttons_href" href="<?= $result_main[$lng]['button_2_url'] ?>">
					<button class="m_btn begin_btn"><?= $result_main[$lng]['button_2'] ?></button>
				</a>
			</div>
		</main>

	</div>

</header>

<div class="center" id="elementtoScrollToID">

	<div class="challenge">
		<div class="img_left_div wow bounceIn">
			<img src="<?= base_url() ?>assets/img/<?= $result_solution_challenge[$lng]['photo_challenge'] ?>"
				 alt="challenge">
		</div>
		<div class="text_right_div">
			<h2><?= $result_solution_challenge[$lng]['title_challenge'] ?></h2>
			<hr>
			<p><?= $result_solution_challenge[$lng]['text_challenge'] ?></p>
		</div>
	</div>

	<div class="solution">
		<div class="text_left_div">
			<h2><?= $result_solution_challenge[$lng]['title_solution'] ?></h2>
			<hr>
			<p><?= $result_solution_challenge[$lng]['text_solution'] ?></p>
		</div>

		<div class="img_right_div wow bounceIn">
			<img src="<?= base_url() ?>assets/img/<?= $result_solution_challenge[$lng]['photo_solution'] ?>"
				 alt="challenge">
		</div>
	</div>

</div>


<div class="center">

	<h2 class="functional">Functional</h2>

	<div class="cards">
		<?
		foreach ($result_functional as $value) :
			if (($lng + 1) == $value['language_id']) :
				if ($value['title'] != '') :

					?>

					<div class="card wow zoomIn"
						 style="background-image: url(<?= base_url() ?>assets/img/<?= $value['background_img'] ?>);">
						<img class="card_image" width="100" src="<?= base_url() ?>assets/img/<?= $value['icon'] ?>"
							 alt="alt"/>
						<div class="card_text">
							<h3><?= $value['title'] ?></h3>
						</div>
					</div>


				<? endif;
			endif;
		endforeach; ?>



	</div>

</div>


<div class="center text_center join_center" style="background-image: url(<?= base_url() ?>assets/img/<?=($result_functional2[$lng]['show_img'] == 'yes' ? $result_functional2[$lng]['background_img'] : '')?>);">
	<p class="join_text" style="position:relative;">
		<?=$result_functional2[$lng]['text']?>
	</p>

	<div class="main_buttons begin_buttons">
		<a target="_blank" class="buttons_href" href="<?=$result_functional2[$lng]['button_link']?>">
			<button class="m_btn btn_begin"><?=$result_functional2[$lng]['button_name']?></button>
		</a>
	</div>
</div>

<div class="center">
	<h2 class="faq">faq</h2>
</div>



<div class="center faq_center" style="background-image: url(<?= base_url() ?>assets/img/faq.jpg);">
	<div class="faq_content">
		<?
		foreach ($result_faq as $value_faq) :
			if (($lng + 1) == $value_faq['language_id']) :
				?>

				<h3 class="faq_title"><?= $value_faq['title'] ?></h3>
				<p class="faq_answer"><?= $value_faq['text'] ?></p>

			<?
			endif;
		endforeach;
		?>

	</div>
</div>


<div class="center">
	<h2 class="subscribe"><?=$result_footer[$lng]['title']?></h2>
	<p class="subscribe_text"><?=$result_footer[$lng]['text']?></p>
	<div class="subscribe_form">
		<input type="text" placeholder="<?=$result_footer[$lng]['input_1']?>"/>
		<input type="mail" placeholder="<?=$result_footer[$lng]['input_2']?>"/>
		<button><?=$result_footer[$lng]['button_name']?></button>
	</div>
</div>

<footer>
	<span class="copy"><?=$result_footer[$lng]['footer_text']?></span>
</footer>


<!-- Chat -->
<?
if ($result_chat[$lng]['status'] == '1') {
	?>
	<div class="chat">
		<?
		if ($result_chat[$lng]['title'] != '') {
			?>
			<p class="chat_text"><?= $result_chat[$lng]['title'] ?></p>
			<?
		}
		?>
		<img class="chat_img" src="<?= base_url() ?>assets/img/<?= $result_chat[$lng]['photo'] ?>"/>
	</div>
	<?
}
?>

<div class="modal">
	<p class="modal_description"><?= $result_chat[$lng]['form_title'] ?></p>
	<input class="modal_input modal_name" type="text" placeholder="<?= $result_chat[$lng]['form_name'] ?>">
	<input class="modal_input modal_email" type="email" placeholder="<?= $result_chat[$lng]['form_email'] ?>">
	<input class="modal_input_2 modal_country" type="text" placeholder="<?= $result_chat[$lng]['form_country_code'] ?>">
	<input class="modal_input_2 modal_phone" type="text" placeholder="<?= $result_chat[$lng]['form_phone_number'] ?>">
	<button class="modal_button"><?= $result_chat[$lng]['form_button'] ?></button>
	<div class="success_order">
		<h2 class="modal_message">Thanks for your order</h2>
	</div>
</div>

<!--// Javascript //-->
<script src="<?= base_url() ?>assets/js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url() ?>assets/js/main.js"></script>
<script src="<?= base_url() ?>assets/js/wow.js"></script>

<script>
	/* Change Language */
	$('.language_div>span').click(function () {
		window.location.href = '<?php echo base_url(); ?>LangSwitch/switchLanguage/' + $(this).data('value');
	});


	/* Change Language */
	$('.language_div>span').click(function () {
		window.location.href = '<?php echo base_url(); ?>LangSwitch/switchLanguage/' + $(this).data('value');
	});

	$('.modal_button').click(function () {
		$('.modal_button').prop('disabled', true);

		setTimeout(function () {
			$('.modal_button').prop('disabled', false);
		}, 1500);
		var name = $('.modal_name').val();
		var email = $('.modal_email').val();
		var country = $('.modal_country').val();
		var phone = $('.modal_phone').val();
		var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		var phone_num_valid = /\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/;

		if (name == '') {
			$('.modal_name').css('border', '1px solid red');
		}
		if (email == '') {
			$('.modal_email').css('border', '1px solid red');
		}

		if (!email.match(re)) {
			$('.modal_email').css('border', '1px solid red');
		}

		if (!phone.match(phone_num_valid)) {
			$('.modal_phone').css('border', '1px solid red');
		}

		if (country == '') {
			$('.modal_country').css('border', '1px solid red');
		}
		if (phone == '') {
			$('.modal_phone').css('border', '1px solid red');
		}


		if (name != '' && email != '' && country != '' && phone != '' && email.match(re) && phone.match(phone_num_valid)) {

			var url = "<?=base_url() . 'Main/index_ax'?>";
			$.ajax({
				url: url,
				type: 'POST',
				data: {
					'name': name,
					'email': email,
					'country': country,
					'phone': phone
				},

				success: function (res) {
					var result = JSON.parse(res);

					if (result.success == '1') {
						$('.modal_name').val('');
						$('.modal_email').val('');
						$('.modal_country').val('');
						$('.modal_phone').val('');

						$('.modal_button').prop('disabled', true);
						$('.success_order').fadeIn('slow');

						setTimeout(function () {
							$('.success_order').fadeOut('slow');
							$('.modal_button').prop('disabled', false);
						}, 2000);

						setTimeout(function () {
							$('.modal').fadeOut('slow');
							$('.chat').removeClass('open');
						}, 2150);

					}
				}

			});

		}
	});

	$('.modal_name').focus(function () {
		$('.modal_name').css('border', '1px solid #28a745');
	});
	$('.modal_email').focus(function () {
		$('.modal_email').css('border', '1px solid #28a745');
	});
	$('.modal_country').focus(function () {
		$('.modal_country').css('border', '1px solid #28a745');
	});
	$('.modal_phone').focus(function () {
		$('.modal_phone').css('border', '1px solid #28a745');
	});

</script>
</body>
</html>


