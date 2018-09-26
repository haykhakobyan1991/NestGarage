<div class="container">

	<div class="row mt-md-3">
		<div class="col-sm-6 ">
			<form>
				<div class="form-group">
					<label for="exampleFormControlFile1">Choose favicon</label>
					<input type="file" class="form-control-file" id="exampleFormControlFile1">
				</div>
			</form>
		</div>
		<div class="col-sm-6 pt-md-3">
			<img width="50" src="<?= base_url() ?>assets/img/favico.png" alt="..." class="img-thumbnail">
		</div>

	</div>

	<div class="row">


		<div class="col-sm-6">
			<div class="card mt-3">
				<div class="card-body">

					<div class="form-group">
						<label>Language 1</label>
						<input type="text" class="form-control" name="language_1" placeholder="Enter language">

						<label class="mt-md-3">Website Name</label>
						<input type="text" class="form-control" name="website_name_1" placeholder="Enter Website Name">

						<label class="mt-md-3">Meta description</label>
						<textarea type="text" class="form-control" name="meta_1"
								  placeholder="Enter Meta Description"></textarea>

						<label class="mt-md-3">Key Words</label>
						<textarea type="text" class="form-control" name="key_words_1"
								  placeholder="Enter Key Words"></textarea>


					</div>

				</div>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="card mt-3">
				<div class="card-body">
					<div class="form-group ">
						<label>Language 2</label>
						<input type="text" class="form-control" name="language_2" placeholder="Enter language">

						<label class="mt-md-3">Website Name</label>
						<input type="text" class="form-control" name="website_name_2" placeholder="Enter Website Name">

						<label class="mt-md-3">Meta description</label>
						<textarea type="text" class="form-control" name="meta_2"
								  placeholder="Enter Meta Description"></textarea>

						<label class="mt-md-3">Key Words</label>
						<textarea type="text" class="form-control" name="key_words_2"
								  placeholder="Enter Key Words"></textarea>
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
		</div>

	</div>
	<input class="btn btn-primary  mt-3 mt-md-3 float-right" type="submit" value="Submit">
</div>
