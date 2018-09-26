<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap/bootstrap.min.css"
		  integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<?
$page = $this->router->fetch_method();
//todo
$sql = "SELECT 
					`user`.`id`,
					CONCAT_WS(' ', `user`.`first_name`, `user`.`last_name`) AS `name`
				FROM 
					`user`				
				WHERE (`username` = '" . $this->session->username . "' 
					OR `email` = '" . $this->session->username . "')
				LIMIT 1
				";

$query = $this->db->query($sql);
$account = $query->row_array();


?>
<header>

	<nav class="navbar navbar-fixed-top navbar-expand-lg navbar-light bg-light " style="position: fixed;top: 0;z-index:999;width: 100%;box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
		<a class="navbar-brand" href="#">Admin Panel</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<div class="navbar-nav">
				<a class="nav-item nav-link <?= ($page == 'web' ? 'active' : '') ?>" href="<?= base_url() ?>admin/web">Web</a>
				<a class="nav-item nav-link <?= ($page == 'main' ? 'active' : '') ?>" href="<?= base_url() ?>admin/main">Main</a>
				<a class="nav-item nav-link " href="<?= base_url() ?>content"></a>

			</div>
			<a class="navbar-nav ml-auto" href="./logout"><img width="30" height="30"
															   src="<?= base_url() ?>/assets/img/logout.png"></a>
		</div>
	</nav>


</header>
