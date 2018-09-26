<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	<link href="<?=base_url()?>assets/css/login.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>


<div class="container">
	<div class="row">
		<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
			<div class="card card-signin my-5">
				<div class="card-body">
					<h5 class="card-title text-center">Log In</h5>
					<?php
					$attributes = array('class' => 'form-signin');
					echo form_open('admin/login', $attributes);
					?>
						<div class="form-label-group">
							<input type="text" id="inputUsername" class="form-control" placeholder="Username" name="username" value="<?php echo $username?>" required autofocus>
							<label for="inputEmail">Username</label>
						</div>

						<div class="form-label-group">
							<input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" value="<?php echo $password?>" required>
							<label for="inputPassword">Password</label>
						</div>

						<div class="custom-control custom-checkbox mb-3">
							<input type="checkbox" class="custom-control-input" id="customCheck1">
							<label class="custom-control-label" for="customCheck1">Remember password</label>
						</div>
						<button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Log in</button>
					<?php
						if($error != '') {
							echo '<hr class="my-4">';
							echo '<div class="alert alert-danger center" role="alert">'.$error.'</div>';
						}

					echo form_close();
					?>
				</div>
			</div>
		</div>
	</div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
		integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
		crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
		integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
		crossorigin="anonymous"></script>
</body>
</html>
