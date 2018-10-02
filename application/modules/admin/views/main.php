<div class="container" style="padding-top: 50px;">

	<div class="jumbotron">
		<form>
			<h1 class="display-4">Main</h1>
			<p class="lead">Edit Website main section</p>
			<hr class="my-4">
			<div class="d-none alert alert-danger mt-md-3 mt-3" role="alert"></div>
			<div class="d-none alert alert-success mt-md-3 mt-3" role="alert"></div>
			<div class="row">
				<div class="col-sm-6">
					<h5 class="title">Language 1</h5>
					<div class="card mt-3">
						<div class="card-body">

							<div class="form-group">
								<label>Button 1 name</label>
								<input type="text"
									   class="form-control"
									   name="button_1_1"
									   placeholder="Enter button 1 name"
									   value="<?=$result[0]['button_1']?>"
								>


							</div>

							<label>Button 2 name</label>
							<input type="text"
								   class="form-control"
								   name="button_2_1"
								   placeholder="Enter button 2 name"
								   value="<?=$result[0]['button_2']?>"
							>

							<label class="mt-md-3 mt-3" for="basic-url">Button 2 URL</label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon3">http(s)://(www.)example.com</span>
								</div>
								<input type="text"
									   class="form-control"
									   id="basic-url"
									   name="button_2_link_1"
									   aria-describedby="basic-addon3"
									   value="<?=$result[0]['button_2_url']?>"
								>
							</div>

						</div>
					</div>

					<div class="card mt-3">
						<div class="card-body">

							<div class="form-group">
								<label class="mt-md-3 mt-3">Title </label>
								<input type="text"
									   class="form-control"
									   name="title_1"
									   placeholder="Enter Title"
									   value="<?=$result[0]['title']?>"
								>

								<label class="mt-md-3">Main Text </label>
								<textarea type="text" class="form-control" name="main_text_1" rows="7"
										  placeholder="Enter Main Text"><?=$result[0]['main_text']?></textarea>

								<label class="mt-md-3">Font url</label>
								<input type="text"
									   class="form-control"
									   name="font_url_1"
									   placeholder="Enter font url"
									   value="<?=$result[0]['font_url']?>"
								>
								<label class="mt-md-3">Font css</label>
								<input type="text"
									   class="form-control"
									   name="font_css_1"
									   placeholder="Enter font css"
									   value="<?=$result[0]['font_css']?>"
								>


							</div>

						</div>
					</div>
				</div>

				<div class="col-sm-6" style="padding-bottom: 10px;background: #46404059;border-radius: 5px;">
					<h5 class="title">Language 2</h5>
					<div class="card mt-3">
						<div class="card-body">

							<div class="form-group">
								<label>Button 1 name</label>
								<input type="text"
									   class="form-control"
									   name="button_1_2"
									   placeholder="Enter button 1 name"
									   value="<?=$result[1]['button_1']?>"
								>

								<label>Button 2 name</label>
								<input type="text"
									   class="form-control"
									   name="button_2_2"
									   placeholder="Enter button 2 name"
									   value="<?=$result[1]['button_2']?>"
								>

								<label class="mt-md-3 mt-3" for="basic-url">Your URL</label>
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon3">https://example.com</span>
									</div>
									<input type="text"
										   class="form-control"
										   id="basic-url"
										   name="button_2_link_2"
										   aria-describedby="basic-addon3"
										   value="<?=$result[1]['button_2_url']?>"
									>
								</div>


							</div>

						</div>
					</div>

					<div class="card mt-3">
						<div class="card-body">

							<div class="form-group">


								<label class="mt-md-3 mt-3">Title </label>
								<input type="text"
									   class="form-control"
									   name="title_2"
									   placeholder="Enter Title"
									   value="<?=$result[1]['title']?>"
								>

								<label class="mt-md-3">Main Text </label>
								<textarea type="text" rows="7"
										  class="form-control"
										  name="main_text_2"
										  placeholder="Enter Main Text"><?=$result[1]['main_text']?></textarea>

								<label class="mt-md-3">Font url</label>
								<input type="text"
									   class="form-control"
									   name="font_url_2"
									   placeholder="Enter font url"
									   value="<?=$result[1]['font_url']?>"
								>
								<label class="mt-md-3">Font css</label>
								<input type="text"
									   class="form-control"
									   name="font_css_2"
									   placeholder="Enter font css"
									   value="<?=$result[1]['font_css']?>"
								>
							</div>

						</div>
					</div>
				</div>


			</div>
			<div class="row">
				<div class="col-sm-6">


					<div class="form-group">
						<label for="exampleFormControlFile1">Choose Main Background image (1920x1280)</label>
						<input type="file" name="background_image" class="form-control-file"
							   id="exampleFormControlFile1">
					</div>


					<img width="200" height="100" src="<?= base_url() ?>assets/img/<?= $result[1]['background_img'] ?>"
						 alt="..."
						 class="img-thumbnail">
				</div>
				<div class="col-sm-6">
					<div class="mt-5  custom-control custom-checkbox float-right">
						<input <?= ($result[0]['show_img'] == 'yes' ? 'checked' : '') ?>
							name="show_img"
							value="yes"
							type="checkbox"
							class="custom-control-input"
							id="customCheck2">
						<label class="custom-control-label" for="customCheck2">Show background image</label>
					</div>

					<div class="mt-5 form-group">
						<label class="mt-3 pt-md-3">Background color</label>
						<input value="<?=$result[0]['background_color']?>" type="text" class="form-control"
							   name="background_color" placeholder="Enter Background color example #345985">
					</div>


				</div>
			</div>


		</form>
		<input id="submit" class="btn btn-primary  mt-3 mt-md-3 float-right" type="submit" value="Submit">
	</div>

</div>
