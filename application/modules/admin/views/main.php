<div class="container">

	<div class="jumbotron mt-md-5 mt-5">
		<h1 class="display-4">Main</h1>
		<p class="lead">Edit Website main section</p>
		<hr class="my-4">
		<div class="row">
			<div class="col-sm-6">
				<h5 class="title">Language 1</h5>
				<div class="card mt-3">
					<div class="card-body">

						<div class="form-group">
							<label>Button 1 name</label>
							<input type="text" class="form-control" name="button_1_name_l1"
								   placeholder="Enter button 1 name">

							<label class="mt-md-3 mt-3">Title 1</label>
							<input type="text" class="form-control" name="title_1_l1" placeholder="Enter Title">

							<label class="mt-md-3">Main Text 1</label>
							<textarea type="text" class="form-control" name="main_text_1"
									  placeholder="Enter Main Text"></textarea>

							<label class="mt-md-3">Font</label>
							<input type="text" class="form-control" name="font_1_l1" placeholder="Enter font">

						</div>

					</div>
				</div>

				<div class="card mt-3">
					<div class="card-body">

						<div class="form-group">
							<label>Button 2 name</label>
							<input type="text" class="form-control" name="button_2_name_l1"
								   placeholder="Enter button 1 name">

							<label class="mt-md-3 mt-3" for="basic-url">Your URL</label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon3">https://example.com</span>
								</div>
								<input type="text" class="form-control" id="basic-url" name="button_link_l1"
									   aria-describedby="basic-addon3">
							</div>

							<label class="mt-md-3 mt-3">Title 2</label>
							<input type="text" class="form-control" name="title_2_l1" placeholder="Enter Title">

							<label class="mt-md-3 mt-3">Main Text 2</label>
							<textarea type="text" class="form-control" name="main_text_2_l1"
									  placeholder="Enter Main Text"></textarea>

							<label class="mt-md-3">Font</label>
							<input type="text" class="form-control" name="font_2_l1" placeholder="Enter font">
						</div>

					</div>
				</div>
			</div>

			<div class="col-sm-6">
				<h5 class="title">Language 2</h5>
				<div class="card mt-3">
					<div class="card-body">

						<div class="form-group">
							<label>Button 1 name</label>
							<input type="text" class="form-control" name="button_1_name_l2"
								   placeholder="Enter button 1 name">

							<label class="mt-md-3 mt-3">Title 1</label>
							<input type="text" class="form-control" name="title_1_l2" placeholder="Enter Title">

							<label class="mt-md-3">Main Text 1</label>
							<textarea type="text" class="form-control" name="main_text_1_l2"
									  placeholder="Enter Main Text"></textarea>

							<label class="mt-md-3">Font</label>
							<input type="text" class="form-control" name="font_1_l2" placeholder="Enter font">

						</div>

					</div>
				</div>

				<div class="card mt-3">
					<div class="card-body">

						<div class="form-group">
							<label>Button 2 name</label>
							<input type="text" class="form-control" name="button_2_name_l2"
								   placeholder="Enter button 1 name">

							<label class="mt-md-3 mt-3" for="basic-url">Your URL</label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon3">https://example.com</span>
								</div>
								<input type="text" class="form-control" id="basic-url" name="button_link_l2"
									   aria-describedby="basic-addon3">
							</div>

							<label class="mt-md-3 mt-3">Title 2</label>
							<input type="text" class="form-control" name="title_2_l2" placeholder="Enter Title">

							<label class="mt-md-3 mt-3">Main Text 2</label>
							<textarea type="text" class="form-control" name="main_text_2_l2"
									  placeholder="Enter Main Text"></textarea>

							<label class="mt-md-3">Font</label>
							<input type="text" class="form-control" name="font_2_l2" placeholder="Enter font">
						</div>

					</div>
				</div>
			</div>


		</div>
		<div class="row">
			<div class="col-sm-6">
				<form>
					<div class="form-group">
						<label for="exampleFormControlFile1">Choose Main Background image (1920/1280)</label>
						<input type="file" name="main background_image" class="form-control-file"
							   id="exampleFormControlFile1">
					</div>
				</form>

				<img width="200" height="100" src="<?= base_url() ?>assets/img/h_p_bg.jpg" alt="..."
					 class="img-thumbnail">
			</div>
		</div>


		<input class="btn btn-primary  mt-3 mt-md-3 float-right" type="submit" value="Submit">

	</div>


</div>
