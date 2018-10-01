<div class="container" style="padding-top: 50px;">
	<form>
		<div class="jumbotron">
			<h1 class="display-4">Solution</h1>
			<p class="lead">Edit Website Solution section</p>
			<hr class="my-4">

			<div class="d-none alert alert-danger mt-md-3 mt-3" role="alert"></div>
			<div class="d-none alert alert-success mt-md-3 mt-3" role="alert"></div>

			<div class="row mt-md-3">

				<div class="col-sm-6 ">
					<div class="form-group">
						<label for="exampleFormControlFile1">Choose Image</label>
						<input name="photo_solution" type="file" class="form-control-file" id="exampleFormControlFile1">
					</div>
				</div>
				<div class="col-sm-6 pt-md-3 mb-md-3 mb-3">
					<img width="100" src="<?= base_url() ?>assets/img/<?=$result[0]['photo_solution']?>" alt="..."
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
								<input value="<?=$result[0]['title_solution']?>" type="text" class="form-control"
									   name="title_solution_1" placeholder="Enter Title">

								<label class="mt-md-3">Text</label>
								<textarea type="text" class="form-control" rows="7"
										  name="text_solution_1"
										  placeholder="Text"><?=$result[0]['text_solution']?></textarea>

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
								<input value="<?=$result[1]['title_solution']?>" type="text" class="form-control"
									   name="title_solution_2" placeholder="Enter Title">

								<label class="mt-md-3">Text</label>
								<textarea type="text" rows="7"
										  class="form-control"
										  name="text_solution_2"
										  placeholder="Text"><?=$result[1]['text_solution']?></textarea>

							</div>
						</div>
					</div>
				</div>

			</div>


		</div>


		<div class="jumbotron mt-md-5 mt-5">
			<h1 class="display-4">Challenge</h1>
			<p class="lead">Edit Website Challenge section</p>
			<hr class="my-4">


			<div class="row mt-md-3">

				<div class="col-sm-6 ">
					<div class="form-group">
						<label for="exampleFormControlFile1">Choose Image</label>
						<input name="photo_challenge" type="file" class="form-control-file" id="exampleFormControlFile1">
					</div>
				</div>
				<div class="col-sm-6 pt-md-3 mb-md-3 mb-3">
					<img width="100" src="<?= base_url() ?>assets/img/<?=$result[0]['photo_challenge']?>" alt="..."
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
								<input value="<?=$result[0]['title_challenge']?>" type="text" class="form-control"
									   name="title_challenge_1" placeholder="Enter Title">

								<label class="mt-md-3">Text</label>
								<textarea ype="text" class="form-control" rows="7"
										  name="text_challenge_1"
										  placeholder="Text"><?=$result[0]['text_challenge']?></textarea>

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
								<input value="<?=$result[1]['title_challenge']?>" type="text" class="form-control"
									   name="title_challenge_2" placeholder="Enter Title">

								<label class="mt-md-3">Text</label>
								<textarea  type="text" class="form-control" rows="7"
										  name="text_challenge_2"
										  placeholder="Text"><?=$result[1]['text_challenge']?></textarea>

							</div>
						</div>
					</div>
				</div>

			</div>


		</div>

	</form>

	<input id="submit" class="btn btn-primary  mb-3 mb-md-3 float-right" type="submit" value="Submit">

</div>
