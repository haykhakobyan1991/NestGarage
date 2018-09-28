<div class="container" style="padding-top: 50px;">
	<div class="jumbotron mt-md-5 mt-5">
		<h1 class="display-4">Functional 2</h1>
		<p class="lead">Edit Website Functional 2 section</p>
		<hr class="my-4">
		<form>

			<div class="row mt-md-3">

				<div class="col-sm-6 ">
					<div class="form-group">
						<label for="exampleFormControlFile1">Background image</label>
						<input name="background_img" type="file" class="form-control-file" id="exampleFormControlFile1">


						<label class="mt-3 pt-md-3">Background color</label>
						<input value="" type="text" class="form-control"
							   name="background_color" placeholder="Enter Background color example #345985">

						<label class="mt-3 pt-md-3">Button Link</label>
						<input value="" type="text" class="form-control"
							   name="button_link" placeholder="Enter Button Link">
					</div>
				</div>
				<div class="col-sm-6 pt-md-3">
					<img width="50" src="<?= base_url() ?>assets/img/" alt="..."
						 class="img-thumbnail">
				</div>

			</div>

			<div class="row">
				<div class="col-sm-6 pt-md-3 lang1_col">
					<h5 class="title">Language 1</h5>
					<div class="card mt-3 pt-md-3">
						<div class="card-body">
							<div class="form-group mt-3 pt-md-3">
								<label>Button Name</label>
								<input value="" type="text" class="form-control"
									   name="button_name_l1" placeholder="Enter Button name">



								<label class="mt-3 pt-md-3">Text</label>
								<textarea value="" type="text" class="form-control" rows="7"
										  name="text_l1" placeholder="Enter Text"></textarea>


							</div>
						</div>
					</div>
				</div>


				<!--  language 2 -->
				<div class="lang2_col col-sm-6 pt-md-3"
					 style="padding-bottom: 10px;background: #46404059;border-radius: 5px;">
					<h5 class="title">Language 2</h5>
					<div class="card mt-3 pt-md-3">
						<div class="card-body">
							<div class="form-group mt-3 pt-md-3">
								<label class="mt-3 pt-md-3">Button Name</label>
								<input value="" type="text" class="form-control"
									   name="button_name_l2" placeholder="Enter Button Name">

								<label class="mt-3 pt-md-3">Text</label>
								<textarea value="" type="text" class="form-control" rows="7"
										  name="text_l2" placeholder="Enter Text"></textarea>

							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
		<input id="submit" class="btn btn-primary   float-right" type="submit" value="Submit">
	</div>
</div>


