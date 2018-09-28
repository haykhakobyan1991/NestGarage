<div class="container" style="padding-top: 50px;">
	<div class="jumbotron mt-md-5 mt-5">
		<h1 class="display-4">Functional 2</h1>
		<p class="lead">Edit Website Functional 2 section</p>
		<hr class="my-4">
		<div class="d-none alert alert-danger mt-md-3 mt-3" role="alert"></div>
		<div class="d-none alert alert-success mt-md-3 mt-3" role="alert"></div>
		<form>

			<div class="row mt-md-3">

				<div class="col-sm-6 ">
					<div class="form-group">
						<label for="exampleFormControlFile1">Background image</label>
						<input name="background_img" type="file" class="form-control-file" id="exampleFormControlFile1">


						<label class="mt-3 pt-md-3">Background color</label>
						<input value="<?=$result[0]['background_color']?>" type="text" class="form-control"
							   name="background_color" placeholder="Enter Background color example #345985">

						<label class="mt-3 pt-md-3">Button Link</label>
						<input value="<?=$result[0]['button_link']?>" type="text" class="form-control"
							   name="button_link" placeholder="Enter Button Link">
					</div>
				</div>
				<div class="col-sm-6 pt-md-3">
					<img width="50" src="<?= base_url() ?>assets/img/<?= $result[0]['background_img'] ?>" alt="..."
						 class="img-thumbnail">
					<div class="custom-control custom-checkbox float-right">
						<input <?= ($result[0]['show_img'] == 'yes' ? 'checked' : '') ?>
							name="show_img"
							value="yes"
							type="checkbox"
							class="custom-control-input"
							id="customCheck2">
						<label class="custom-control-label" for="customCheck2">Show background image</label>
					</div>
				</div>

			</div>

			<div class="row">
				<div class="col-sm-6 pt-md-3 lang1_col">
					<h5 class="title">Language 1</h5>
					<div class="card mt-3 pt-md-3">
						<div class="card-body">
							<div class="form-group mt-3 pt-md-3">
								<label>Button Name</label>
								<input value="<?=$result[0]['button_name']?>" type="text" class="form-control"
									   name="button_name_1" placeholder="Enter Button name">



								<label class="mt-3 pt-md-3">Text</label>
								<textarea type="text" class="form-control" rows="7"
										  name="text_1" placeholder="Enter Text"><?=$result[0]['text']?></textarea>


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
								<input value="<?=$result[1]['button_name']?>" type="text" class="form-control"
									   name="button_name_2" placeholder="Enter Button Name">

								<label class="mt-3 pt-md-3">Text</label>
								<textarea ype="text" class="form-control" rows="7"
										  name="text_2" placeholder="Enter Text"><?=$result[1]['text']?></textarea>

							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
		<input id="submit" class="btn btn-primary   float-right" type="submit" value="Submit">
	</div>
</div>


