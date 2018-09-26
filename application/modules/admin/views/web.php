<div class="container ">

	<div class="jumbotron mt-md-5 mt-5">
		<h1 class="display-4">Web</h1>
		<p class="lead">Edit Website web section</p>
		<hr class="my-4">


		<div class="d-none alert alert-danger mt-md-3 mt-3" role="alert"></div>
		<div class="d-none alert alert-success mt-md-3 mt-3" role="alert"></div>

		<form>
			<div class="row mt-md-3">

				<div class="col-sm-6 ">
					<div class="form-group">
						<label for="exampleFormControlFile1">Choose favicon</label>
						<input name="favicon" type="file" class="form-control-file" id="exampleFormControlFile1">
					</div>
				</div>
				<div class="col-sm-6 pt-md-3">
					<img width="50" src="<?= base_url() ?>assets/img/<?= $result[0]['favicon'] ?>" alt="..."
						 class="img-thumbnail">
				</div>

			</div>

			<div class="row">
				<div class="col-sm-6">
					<div class="card mt-3">
						<div class="card-body">
							<div class="form-group">
								<label>Language 1</label>
								<input value="<?= $result[0]['language'] ?>" type="text" class="form-control"
									   name="language_1" placeholder="Enter language">
								<label class="mt-md-3">Website Name</label>
								<input value="<?= $result[0]['website_name'] ?>" type="text" class="form-control"
									   name="website_name_1"
									   placeholder="Enter Website Name">
								<label class="mt-md-3">Meta description</label>
								<textarea type="text" class="form-control" name="meta_1"
										  placeholder="Enter Meta Description"><?= $result[0]['meta_desc'] ?></textarea>
								<label class="mt-md-3">Key Words</label>
								<textarea type="text" class="form-control" name="key_words_1"
										  placeholder="Enter Key Words"><?= $result[0]['key_word'] ?></textarea>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6" style="padding-bottom: 10px;background: #46404059;border-radius: 5px;">
					<div class="card mt-3">
						<div class="card-body">
							<div class="form-group ">

								<label>Language 2</label>
								<div class="custom-control custom-checkbox float-right">
									<input type="checkbox" class="custom-control-input" id="customCheck2">
									<label class="custom-control-label" for="customCheck2">Language 2 on or off</label>
								</div>
								<input value="<?= $result[1]['language'] ?>" type="text" class="form-control"
									   name="language_2" placeholder="Enter language">

								<label class="mt-md-3">Website Name</label>
								<input value="<?= $result[1]['website_name'] ?>" type="text" class="form-control"
									   name="website_name_2"
									   placeholder="Enter Website Name">

								<label class="mt-md-3">Meta description</label>
								<textarea type="text" class="form-control" name="meta_2"
										  placeholder="Enter Meta Description"><?= $result[1]['meta_desc'] ?></textarea>

								<label class="mt-md-3">Key Words</label>
								<textarea type="text" class="form-control" name="key_words_2"
										  placeholder="Enter Key Words"><?= $result[1]['key_word'] ?></textarea>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row mt-md-3 pt-md-3">

				<div class="col-sm-6 ">
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="customCheck1">
						<label class="custom-control-label" for="customCheck1">Mail to send ORDER A CALL</label>
					</div>
				</div>
				<div class="col-sm-6 pt-md-3">
					<input type="text" class="form-control" name="order" placeholder="">
					<label class="mt-md-3">Mail to</label>
					<input value="" type="text" class="form-control"
						   name="mail_to"
						   placeholder="Enter E-mail address">
				</div>

			</div>
		</form>
		<input id="submit" class="btn btn-primary  mt-3 mt-md-3 float-right" type="submit" value="Submit">

	</div>
</div>
