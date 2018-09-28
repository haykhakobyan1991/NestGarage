<style>
	.card-body {
		padding-top: 0 !important;
		position: relative !important;
	}
</style>


<?
$array_lng = array();
foreach($result as $key => $value) {
	if($value['language_id'] == 1) {
		$array_lng['1'][] = $value['id']-1;
	} else {
		$array_lng['2'][] = $value['id']-1;
	}
}

//echo '<pre>';
//
//print_r($array_lng);
//echo '</pre>';
//
//echo $array_lng['1'][0];die;
?>





<div class="container" style="padding-top: 50px;">

	<div class="jumbotron mt-md-5 mt-5">
		<h1 class="display-4">Functional 1</h1>
		<p class="lead">Edit Website Functional section</p>
		<hr class="my-4">
		<div class="d-none alert alert-danger mt-md-3 mt-3" role="alert"></div>
		<div class="d-none alert alert-success mt-md-3 mt-3" role="alert"></div>
		<form>
			<div class="row">
				<div class="col-sm-6 pt-md-3 lang1_col">


					<div class="card mt-3 pt-md-3">
						<div class="card-body">
							<div class="row">
								<div class="form-group col">
									<div class="form-group">
										<label for="exampleFormControlFile1">Choose icon</label>
										<input name="icon[1]" type="file" class="form-control-file"
											   id="exampleFormControlFile1">
									</div>
								</div>
								<div class="col">
									<img width="50" src="<?= base_url() ?>assets/img/<?=$result[$array_lng['1'][0]]['icon']?>" alt="..." class="img-thumbnail float-right">
								</div>
							</div>
							<div class="row">
								<div class="form-group col">
									<div class="form-group">
										<label for="exampleFormControlFile2">Choose background (1/1)</label>
										<input name="background[1]" type="file" class="form-control-file"
											   id="exampleFormControlFile2">
									</div>
								</div>
								<div class="col">
									<img width="50" src="<?= base_url() ?>assets/img/<?=$result[$array_lng['1'][0]]['background_img']?>" alt="..." class="img-thumbnail float-right">
								</div>
							</div>
							<div class="form-group mt-3 pt-md-3">
								<label>Text language 1</label>
								<input value="<?=$result[$array_lng['1'][0]]['title']?>" type="text" class="form-control"
									   name="text[1][1]" placeholder="Enter Text">

								<label>Text language 2</label>
								<input value="<?=$result[$array_lng['2'][0]]['title']?>" type="text" class="form-control"
									   name="text[1][2]" placeholder="Enter Text">
							</div>
						</div>
					</div>

					<div class="card mt-3 pt-md-3">
						<div class="card-body">
							<div class="row">
								<div class="form-group col">
									<div class="form-group">
										<label for="exampleFormControlFile1">Choose icon</label>
										<input name="icon[2]" type="file" class="form-control-file"
											   id="exampleFormControlFile1">
									</div>
								</div>
								<div class="col">
									<img width="50" alt="..." src="<?= base_url() ?>assets/img/<?=$result[$array_lng[1][1]]['icon']?>" class="img-thumbnail float-right">
								</div>
							</div>
							<div class="row">
								<div class="form-group col">
									<div class="form-group">
										<label for="exampleFormControlFile2">Choose background (1/1)</label>
										<input name="background[2]" type="file" class="form-control-file"
											   id="exampleFormControlFile2">
									</div>
								</div>
								<div class="col">
									<img width="50" alt="..." src="<?= base_url() ?>assets/img/<?=$result[$array_lng[1][1]]['background_img']?>" class="img-thumbnail float-right">
								</div>
							</div>
							<div class="form-group mt-3 pt-md-3">
								<label>Text language 1</label>
								<input value="<?=$result[$array_lng[1][1]]['title']?>" type="text" class="form-control"
									   name="text[2][1]" placeholder="Enter Text">

								<label>Text language 2</label>
								<input value="<?=$result[$array_lng[2][1]]['title']?>" type="text" class="form-control"
									   name="text[2][2]" placeholder="Enter Text">
							</div>
						</div>
					</div>

					<div class="card mt-3 pt-md-3">
						<div class="card-body">
							<div class="row">
								<div class="form-group col">
									<div class="form-group">
										<label for="exampleFormControlFile1">Choose icon</label>
										<input name="icon[3]" type="file" class="form-control-file"
											   id="exampleFormControlFile1">
									</div>
								</div>
								<div class="col">
									<img width="50" src="<?= base_url() ?>assets/img/<?=$result[$array_lng[1][2]]['icon']?>" alt="..." class="img-thumbnail float-right">
								</div>
							</div>
							<div class="row">
								<div class="form-group col">
									<div class="form-group">
										<label for="exampleFormControlFile2">Choose background (1/1)</label>
										<input name="background[3]" type="file" class="form-control-file"
											   id="exampleFormControlFile2">
									</div>
								</div>
								<div class="col">
									<img width="50" src="<?= base_url() ?>assets/img/<?=$result[$array_lng[1][2]]['background_img']?>" alt="..." class="img-thumbnail float-right">
								</div>
							</div>
							<div class="form-group mt-3 pt-md-3">
								<label>Text language 1</label>
								<input value="<?=$result[$array_lng[1][2]]['title']?>" type="text" class="form-control"
									   name="text[3][1]" placeholder="Enter Text">

								<label>Text language 2</label>
								<input value="<?=$result[$array_lng[2][2]]['title']?>" type="text" class="form-control"
									   name="text[3][2]" placeholder="Enter Text">
							</div>
						</div>
					</div>






				</div>
				<!--  language 2 -->
				<div class="lang2_col col-sm-6 pt-md-3" >


					<div class="card mt-3 pt-md-3">
						<div class="card-body">
							<div class="row">
								<div class="form-group col">
									<div class="form-group">
										<label for="exampleFormControlFile1">Choose icon</label>
										<input name="icon[4]" type="file" class="form-control-file"
											   id="exampleFormControlFile1">
									</div>
								</div>
								<div class="col">
									<img width="50" src="<?= base_url() ?>assets/img/<?=$result[$array_lng[1][3]]['icon']?>" alt="..." class="img-thumbnail float-right">
								</div>
							</div>
							<div class="row">
								<div class="form-group col">
									<div class="form-group">
										<label for="exampleFormControlFile2">Choose background (1/1)</label>
										<input name="background[4]" type="file" class="form-control-file"
											   id="exampleFormControlFile2">
									</div>
								</div>
								<div class="col">
									<img width="50" src="<?= base_url() ?>assets/img/<?=$result[$array_lng[1][3]]['background_img']?>" alt="..." class="img-thumbnail float-right">
								</div>
							</div>
							<div class="form-group mt-3 pt-md-3">
								<label>Text language 1</label>
								<input value="<?=$result[$array_lng[1][3]]['title']?>" type="text" class="form-control"
									   name="text[4][1]" placeholder="Enter Text">

								<label>Text language 2</label>
								<input value="<?=$result[$array_lng[2][3]]['title']?>" type="text" class="form-control"
									   name="text[4][2]" placeholder="Enter Text">
							</div>
						</div>
					</div>

					<div class="card mt-3 pt-md-3">
						<div class="card-body">
							<div class="row">
								<div class="form-group col">
									<div class="form-group">
										<label for="exampleFormControlFile1">Choose icon</label>
										<input name="icon[5]" type="file" class="form-control-file"
											   id="exampleFormControlFile1">
									</div>
								</div>
								<div class="col">
									<img width="50" src="<?= base_url() ?>assets/img/<?=$result[$array_lng[1][4]]['icon']?>" alt="..." class="img-thumbnail float-right">
								</div>
							</div>
							<div class="row">
								<div class="form-group col">
									<div class="form-group">
										<label for="exampleFormControlFile2">Choose background (1/1)</label>
										<input name="background[5]" type="file" class="form-control-file"
											   id="exampleFormControlFile2">
									</div>
								</div>
								<div class="col">
									<img width="50" src="<?= base_url() ?>assets/img/<?=$result[$array_lng[1][4]]['background_img']?>" alt="..." class="img-thumbnail float-right">
								</div>
							</div>
							<div class="form-group mt-3 pt-md-3">
								<label>Text language 1</label>
								<input value="<?=$result[$array_lng[1][4]]['title']?>" type="text" class="form-control"
									   name="text[5][1]" placeholder="Enter Text">

								<label>Text language 2</label>
								<input value="<?=$result[$array_lng[2][4]]['title']?>" type="text" class="form-control"
									   name="text[5][2]" placeholder="Enter Text">
							</div>
						</div>
					</div>

					<div class="card mt-3 pt-md-3">
						<div class="card-body">
							<div class="row">
								<div class="form-group col">
									<div class="form-group">
										<label for="exampleFormControlFile1">Choose icon</label>
										<input name="icon[6]" type="file" class="form-control-file"
											   id="exampleFormControlFile1">
									</div>
								</div>
								<div class="col">
									<img width="50" src="<?= base_url() ?>assets/img/<?=$result[$array_lng[1][5]]['icon']?>" alt="..." class="img-thumbnail float-right">
								</div>
							</div>
							<div class="row">
								<div class="form-group col">
									<div class="form-group">
										<label for="exampleFormControlFile2">Choose background (1/1)</label>
										<input name="background[6]" type="file" class="form-control-file"
											   id="exampleFormControlFile2">
									</div>
								</div>
								<div class="col">
									<img width="50" src="<?= base_url() ?>assets/img/<?=$result[$array_lng[1][5]]['background_img']?>" alt="..." class="img-thumbnail float-right">
								</div>
							</div>
							<div class="form-group mt-3 pt-md-3">
								<label>Text language 1</label>
								<input value="<?=$result[$array_lng[1][5]]['title']?>" type="text" class="form-control"
									   name="text[6][1]" placeholder="Enter Text">

								<label>Text language 2</label>
								<input value="<?=$result[$array_lng[2][5]]['title']?>" type="text" class="form-control"
									   name="text[6][2]" placeholder="Enter Text">
							</div>
						</div>
					</div>


				</div>
			</div>
		</form>
	</div>
	<input id="submit" class="btn btn-primary   float-right" type="submit" value="Submit"
		   style="margin-top: -20px;margin-bottom: 10px;">
</div>



