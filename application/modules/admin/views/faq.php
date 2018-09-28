<style>
	.card-body {
		padding-top: 0 !important;
		position: relative !important;
	}
</style>
<div class="container" style="padding-top: 50px;">
	<div class="jumbotron mt-md-5 mt-5">
		<h1 class="display-4">FAQ</h1>
		<p class="lead">Edit Website FAQ section</p>
		<hr class="my-4">
		<div class="d-none alert alert-danger mt-md-3 mt-3" role="alert"></div>
		<div class="d-none alert alert-success mt-md-3 mt-3" role="alert"></div>
		<form>
			<div class="row">
				<div class="col-sm-6 pt-md-3 lang1_col">
					<h5 class="title">Language 1</h5>
					<?
					$i = 1;
					foreach ($result as $value) :
						if ($value['language_id'] == 1) {
							?>
							<div class="card mt-3 pt-md-3 first_card">
								<div class="card-body">
									<div style="text-align: right;" class="mbk-3 mb-md-3 delete_button lang1">
										<button data-id="<?= $i ?>" type="button" class="delete btn btn-warning btn-sm">
											-
										</button>
									</div>
									<div class="form-group mt-3 pt-md-3">
										<label>FAQ title</label>
										<input value="<?= $value['title'] ?>" type="text" class="form-control"
											   name="title_1[<?= $i ?>]" placeholder="Enter title">

										<label>FAQ text</label>
										<textarea type="text" class="form-control" rows="6"
												  name="text_1[<?= $i ?>]"
												  placeholder="Enter  Text"><?= $value['text'] ?></textarea>
									</div>
								</div>
							</div>
							<?
							$i++;
						}
					endforeach; ?>
					<button style="position: absolute;bottom: -63px;width: 94%;" type="button"
							class="add_l  mt-3 mt-md-3 btn btn-outline-success btn-lg btn-block">add new block
					</button>
				</div>
				<div class="col-sm-6 pt-md-3 lang2_col"
					 style="padding-bottom: 10px;background: #46404059;border-radius: 5px;">
					<h5 class="title">Language 2</h5>
					<?
					$j = 1;
					foreach ($result as $value) :
						if ($value['language_id'] == 2) {
							?>
							<div class="card mt-3 pt-md-3 second_card">
								<div class="card-body">
									<div style="text-align: right;" class="mb-3 mb-md-3 delete_button lang2">
										<button data-id="<?= $j ?>" type="button" class="delete btn btn-warning btn-sm">
											-
										</button>
									</div>
									<div class="form-group mt-3 pt-md-3">
										<label>FAQ title</label>
										<input value="<?= $value['title'] ?>" type="text" class="form-control"
											   name="title_2[<?= $j ?>]" placeholder="Enter title">
										<label>FAQ text</label>
										<textarea type="text" class="form-control" rows="6"
												  name="text_2[<?= $j ?>]"
												  placeholder="Enter Text"><?= $value['text'] ?></textarea>
									</div>
								</div>
							</div>
							<?
							$j++;
						}
					endforeach; ?>
					<button style="position: absolute;bottom: -63px;width: 94%;" type="button"
							class="add_2  mt-3 mt-md-3 btn btn-outline-success btn-lg btn-block">add new block
					</button>
				</div>
			</div>
		</form>
	</div>
	<input id="submit" class="btn btn-primary   float-right" type="submit" value="Submit"
		   style="margin-top: -20px;margin-bottom: 10px;">
</div>
<script>
	$(document).ready(function () {
		var i = '<?=($i == '' ? 2 : $i)?>';
		var j = 2;
		$('.add_l').click(function () {
			$('.lang1_col').append('<div class="card mt-3 pt-md-3 second_div">\n' +
				'<div class="card-body">\n' +
				'<div style="text-align: right;" class="mb-3 mb-md-3 delete_button"><button type="button" class="delete btn btn-warning btn-sm">-</button></div>\n' +
				'<div class="form-group mt-3 pt-md-3">\n' +
				'<label>FAQ title</label>\n' +
				'<input value="" type="text" class="form-control"\n' +
				' name="title_1[' + i + ']" placeholder="Enter title">\n' +
				'\n' +
				'<label>FAQ text</label>\n' +
				'<textarea  type="text" class="form-control"\n' +
				' name="text_1[' + i + ']" placeholder="Enter  Text"></textarea>\n' +
				'</div>\n' +
				'</div>\n' +
				'</div>');
			$('html, body').animate({
				scrollTop: '+=500px'
			}, 800);
			i++;
		});
		$('.add_2').click(function () {
			$('.lang2_col').append('<div class="card mt-3 pt-md-3 second_div">\n' +
				'<div class="card-body">\n' +
				'<div style="text-align: right;" class="mb-3 mb-md-3 delete_button"><button type="button" class="delete btn btn-warning btn-sm">-</button></div>\n' +
				'<div class="form-group mt-3 pt-md-3">\n' +
				'<label>FAQ title</label>\n' +
				'<input value="" type="text" class="form-control"\n' +
				' name="title_2[' + j + ']" placeholder="Enter title">\n' +
				'\n' +
				'<label>FAQ text</label>\n' +
				'<textarea type="text" class="form-control"\n' +
				' name="text_2[' + j + ']" placeholder="Enter  Text"></textarea>\n' +
				'</div>\n' +
				'</div>\n' +
				'</div>');
			$('html, body').animate({
				scrollTop: '+=500px'
			}, 800);
			j++;
		});
	});
	$(document).on('click', '.delete', function () {
		$(this).parent('div').parent('div').parent('.card').remove();
	})
</script>
<script>
	$(document).ready(function () {
		$('.delete').each(function () {
			if ($(this).data('id') == 1) {
				$(this).remove();
			}
		});
	});
</script>
