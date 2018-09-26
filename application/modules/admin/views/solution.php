<div class="container" style="padding-top: 50px;">

	<div class="jumbotron mt-md-5 mt-5">
		<h1 class="display-4">Solution</h1>
		<p class="lead">Edit Website Solution section</p>
		<hr class="my-4">

		<form>
			<div class="row mt-md-3">

				<div class="col-sm-6 ">
					<div class="form-group">
						<label for="exampleFormControlFile1">Choose favicon</label>
						<input name="favicon" type="file" class="form-control-file" id="exampleFormControlFile1">
					</div>
				</div>
				<div class="col-sm-6 pt-md-3 mb-md-3 mb-3">
					<img width="100" src="<?= base_url() ?>assets/img/h_p_bg.jpg ?>" alt="..."
						 class="img-thumbnail">
				</div>

			</div>
			<div class="row">
				<div class="col-sm-6 pt-md-3">
					<h5 class="title">Language 1</h5>
					<div class="card mt-3 pt-md-3">
						<div class="card-body">
							<div class="form-group">
								<label>Title</label>
								<input value="" type="text" class="form-control"
									   name="title_l1" placeholder="Enter Title">

								<label class="mt-md-3">Title font</label>
								<textarea value="" type="text" class="form-control"
										  name="title_font_l1"
										  placeholder="font"></textarea>

							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 pt-md-3" style="padding-bottom: 10px;background: #46404059;border-radius: 5px;">
					<h5 class="title">Language 1</h5>
					<div class="card mt-3 pt-md-3">
						<div class="card-body">
							<div class="form-group">
								<label>Title</label>
								<input value="" type="text" class="form-control"
									   name="title_l2" placeholder="Enter Title">

								<label class="mt-md-3">Title font</label>
								<textarea value="" type="text" class="form-control"
										  name="title_font_l2"
										  placeholder="font"></textarea>

							</div>
						</div>
					</div>
				</div>

			</div>

		</form>

		<input id="submit" class="btn btn-primary  mt-3 mt-md-3 float-right" type="submit" value="Submit">
	</div>


</div>
