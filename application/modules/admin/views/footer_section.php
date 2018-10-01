<div class="container" style="padding-top: 50px;">

	<div class="jumbotron mt-md-5 mt-5">
		<h1 class="display-4">Footer</h1>
		<p class="lead">Edit Footer main section</p>
		<hr class="my-4">
		<div class="d-none alert alert-danger mt-md-3 mt-3" role="alert"></div>
		<div class="d-none alert alert-success mt-md-3 mt-3" role="alert"></div>
		<form>
		<div class="row">
			<div class="col-sm-6">
				<h5 class="title">Language 1</h5>
				<div class="card mt-3">
					<div class="card-body">

						<div class="form-group">

							<label class="mt-md-3">Title</label>
							<input type="text" class="form-control" name="title_1"
									  placeholder="Enter Title" value="<?=$result[0]['title']?>">

							<label class="mt-md-3">Text</label>
							<input type="text" class="form-control" name="text_1"
								   placeholder="Enter Text" value="<?=$result[0]['text']?>">

							<label class="mt-md-3">Input 1</label>
							<input type="text" class="form-control" name="input_1_1"
								   placeholder="Enter Field 1" value="<?=$result[0]['input_1']?>">

							<label class="mt-md-3">Input 2</label>
							<input type="text" class="form-control" name="input_2_1"
								   placeholder="Enter Field 2" value="<?=$result[0]['input_2']?>" >

							<label class="mt-md-3">Button name</label>
							<input type="text" class="form-control" name="button_name_1"
								   placeholder="Enter button name " value="<?=$result[0]['button_name']?>">


							<label class="mt-md-3">Footer Text 1</label>
							<textarea type="text" class="form-control" name="footer_text_1" rows="7"
									  placeholder="Enter footer Text"><?=$result[0]['footer_text']?></textarea>

						</div>

					</div>
				</div>
			</div>

			<div class="col-sm-6"  style="padding-bottom: 10px;background: #46404059;border-radius: 5px;">
				<h5 class="title">Language 2</h5>
				<div class="card mt-3">
					<div class="card-body">

						<div class="form-group">

							<label class="mt-md-3">Title</label>
							<input type="text" class="form-control" name="title_2"
								   placeholder="Enter Title" value="<?=$result[1]['title']?>" >

							<label class="mt-md-3">Text</label>
							<input type="text" class="form-control" name="text_2"
								   placeholder="Enter Text" value="<?=$result[1]['text']?>" >

							<label class="mt-md-3">Input 1</label>
							<input type="text" class="form-control" name="input_1_2"
								   placeholder="Enter Field 1" value="<?=$result[1]['input_1']?>" >

							<label class="mt-md-3">Input 2</label>
							<input type="text" class="form-control" name="input_2_2"
								   placeholder="Enter Field 2" value="<?=$result[1]['input_2']?>" >

							<label class="mt-md-3">Button name</label>
							<input type="text" class="form-control" name="button_name_2"
								   placeholder="Enter button name" value="<?=$result[1]['button_name']?>">


							<label class="mt-md-3">Footer Text 1</label>
							<textarea type="text" class="form-control" name="footer_text_2" rows="7"
									  placeholder="Enter footer Text"><?=$result[1]['footer_text']?></textarea>

						</div>

					</div>
				</div>
			</div>
		</div>
		</form>

		<input id="submit" class="btn btn-primary  mt-3 mt-md-3 float-right" type="submit" value="Submit">
	</div>
</div>




