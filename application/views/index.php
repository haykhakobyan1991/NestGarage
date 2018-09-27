<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="google-site-verification" content="Mkn03uHs8mUwOONukPy8p_CkkddQG5hgj9HTsHf2mKs"/>
	<meta name="description" content="<?= $result_web[$lng]['meta_desc'] ?>"/>
	<meta name="keywords" content="<?= $result_web[$lng]['key_word'] ?>"/>
	<title><?= $result_web[$lng]['website_name'] ?></title>

	<!--// Stylesheets //-->
	<link rel="shortcut icon" href="<?= base_url() ?>assets/img/<?=$result_web[$lng]['favicon']?>" type="image/png">
	<link href="<?= base_url() ?>assets/css/reset.css" rel="stylesheet" type="text/css"/>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" />
	<link href="<?= base_url() ?>assets/css/animate.css" rel="stylesheet" type="text/css"/>
	<link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet" type="text/css"/>



</head>
<body>

<header style="background-image: url(<?= base_url() ?>assets/img/h_p_bg.jpg);">

	<div class="center">

		<div class="language_div">
			<span data-value="lang_1" class="lng lng_arm"><?= $result_web[0]['language'] ?></span>
			<? if ($result_web[1]['language_status'] == 1) { ?>
				<span data-value="lang_2" class="lng lng_rus"><?= $result_web[1]['language'] ?></span>
			<? } ?>
		</div>

		<main>
			<h1 class="title wow bounceIn">What is Lorem Ipsum</h1>
			<p class="main_text">
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
				industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
				scrambled it to make a type specimen book...
			</p>

			<div class="main_buttons">
				<button class="m_btn learn_more_btn">learn more</button>
				<a class="buttons_href" href="#">
					<button class="m_btn begin_btn">begin</button>
				</a>
			</div>
		</main>

	</div>

</header>

<div class="center" id="elementtoScrollToID">

	<div class="challenge">
		<div class="img_left_div wow bounceIn">
			<img src="<?= base_url() ?>assets/img/challenge.jpg" alt="challenge">
		</div>
		<div class="text_right_div">
			<h2>challenge</h2>
			<hr>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
				industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
				scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and
				typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when
				an unknown printer took a galley of type and scrambled it to make a type specimen book ...</p>
		</div>
	</div>

	<div class="solution">
		<div class="text_left_div">
			<h2>Solution</h2>
			<hr>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
				industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
				scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and
				typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when
				an unknown printer took a galley of type and scrambled it to make a type specimen book ...</p>
		</div>

		<div class="img_right_div wow bounceIn">
			<img src="<?= base_url() ?>assets/img/solution.jpg" alt="challenge">
		</div>
	</div>

</div>


<div class="center">

	<h2 class="functional">Functional</h2>

	<div class="cards">

		<div class="card card_1 wow zoomIn" style="background-image: url(<?= base_url() ?>assets/img/1.jpg);">
			<img class="card_image" width="100" src="<?= base_url() ?>assets/img/card.png" alt="alt"/>
			<div class="card_text">
				<h3>Lorem ipsum</h3>
			</div>
		</div>

		<div class="card card_2 wow zoomIn" style="background-image: url(<?= base_url() ?>assets/img/4.jpg);">
			<img class="card_image" width="100" src="<?= base_url() ?>assets/img/card.png" alt="alt"/>
			<div class="card_text">
				<h3>Lorem ipsum dolor</h3>
			</div>
		</div>

		<div class="card card_3 wow zoomIn" style="background-image: url(<?= base_url() ?>assets/img/3.jpg);">
			<img class="card_image" width="100" src="<?= base_url() ?>assets/img/card.png" alt="alt"/>
			<div class="card_text">
				<h3>Lorem ipsum</h3>
			</div>
		</div>

		<div class="card card_4 wow zoomIn" style="background-image: url(<?= base_url() ?>assets/img/2.jpg);">
			<img class="card_image" width="100" src="<?= base_url() ?>assets/img/card.png" alt="alt"/>
			<div class="card_text">
				<h3>Lorem ipsum dolor</h3>
			</div>
		</div>

		<div class="card card_5 wow zoomIn" style="background-image: url(<?= base_url() ?>assets/img/5.jpg);">
			<img class="card_image" width="100" src="<?= base_url() ?>assets/img/card.png" alt="alt"/>
			<div class="card_text">
				<h3>Lorem ipsum dolor</h3>
			</div>
		</div>

		<div class="card card_6 wow zoomIn" style="background-image: url(<?= base_url() ?>assets/img/6.jpg);">
			<img class="card_image" width="100" src="<?= base_url() ?>assets/img/card.png" alt="alt"/>
			<div class="card_text">
				<h3>Lorem ipsum</h3>
			</div>
		</div>

	</div>

</div>


<div class="center text_center join_center" style="background-image: url(<?= base_url() ?>assets/img/faq.jpg);">
	<p class="join_text" style="position:relative;">
		Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, id quis consequatur magnam natus assumenda autem
		magni modi eveniet quam molestias eligendi corporis amet ad laboriosam sapiente odio! Voluptas, at possimus?
		Perspiciatis beatae, ratione eaque enim totam repudiandae aliquam neque quia? Quibusdam doloribus, id laudantium
		labore magni sapiente, asperiores sed expedita dolorum omnis dignissimos corporis. Doloribus pariatur numquam
		ipsum nostrum, quasi deleniti repellat vitae. Provident maxime vel consequatur possimus animi molestias
		distinctio quae quibusdam omnis tempora recusandae expedita laudantium ad vitae, laborum culpa ullam corporis a
		aspernatur minima ex delectus, saepe excepturi? Vero, non aliquam. Eum quisquam adipisci consequuntur debitis.
	</p>

	<div class="main_buttons begin_buttons">
		<a class="buttons_href" href="#">
			<button class="m_btn btn_begin"><?= $this->lang->line('join'); ?></button>
		</a>
	</div>
</div>

<div class="center">
	<h2 class="faq">faq</h2>
</div>

<div class="center faq_center" style="background-image: url(<?= base_url() ?>assets/img/faq.jpg);">
	<div class="faq_content">
		<h3 class="faq_title">Lorem ipsum dolor sit.</h3>
		<p class="faq_answer">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas incidunt alias dolores
			nihil, numquam quasi saepe iste tempora labore veniam ipsa voluptates eum. Magni ullam placeat ducimus sunt
			fuga accusamus!</p>

		<h3 class="faq_title">Lorem ipsum dolor sit amet.</h3>
		<p class="faq_answer">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque qui esse dolorem ipsum quod
			eos odit amet minima tempore quos assumenda similique libero, dicta quibusdam.</p>

		<h3 class="faq_title">Lorem ipsum dolor sit amet consectetur.</h3>
		<p class="faq_answer">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus, nesciunt enim.
			Provident quam voluptatum ea est eligendi enim ipsa error totam impedit sit dolorum at debitis adipisci
			autem, delectus dolor, ex quisquam! Natus, cum.</p>
	</div>
</div>


<div class="center">
	<h2 class="subscribe">Subscribe</h2>
	<p class="subscribe_text">Stay in Touch, Be the first to know the Latest News</p>
	<div class="subscribe_form">
		<input type="text" placeholder="* Name"/>
		<input type="mail" placeholder="* E-mail"/>
		<button>Subscribe</button>
	</div>
</div>

<footer>
	<span class="copy">&copy; <?php echo date('Y'); ?> John Doe All Rights Reserved</span>
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
	<p class="modal_description"><?=$result_chat[$lng]['form_title']?></p>
	<input class="modal_input" type="text" placeholder="<?=$result_chat[$lng]['form_name']?>">
	<input class="modal_input" type="email" placeholder="<?=$result_chat[$lng]['form_email']?>">
	<input class="modal_input_2" type="text" placeholder="<?=$result_chat[$lng]['form_country_code']?>">
	<input class="modal_input_2" type="text" placeholder="<?=$result_chat[$lng]['form_phone_number']?>">
	<button class="modal_button"><?=$result_chat[$lng]['form_button']?></button>
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

</script>
</body>
</html>
