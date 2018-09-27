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
		<form>
			<div class="row">
				<div class="col-sm-6 pt-md-3 lang1_col">
					<h5 class="title">Language 1</h5>
					<div class="card mt-3 pt-md-3">
						<div class="card-body">
							<div class="form-group mt-3 pt-md-3">
								<label>FAQ title</label>
								<input value="" type="text" class="form-control"
									   name="title_1_l1" placeholder="Enter title">

								<label>FAQ text</label>
								<input value="" type="text" class="form-control"
									   name="text_1_l1" placeholder="Enter  Text">

								<label class="mt-3 pt-md-3">Font</label>
								<input value="" type="text" class="form-control"
									   name="font_1_l1" placeholder="Font">
							</div>
						</div>
					</div>

					<hr class="my-4">


					<button style="position: absolute;bottom: -63px;width: 94%;" type="button"
							class="add_l1  mt-3 mt-md-3 btn btn-outline-success btn-lg btn-block">add new block
					</button>
				</div>

				<div class="col-sm-6 pt-md-3 lang2_col"
					 style="padding-bottom: 10px;background: #46404059;border-radius: 5px;">
					<h5 class="title">Language 1</h5>
					<div class="card mt-3 pt-md-3">
						<div class="card-body">
							<div class="form-group mt-3 pt-md-3">
								<label>FAQ title</label>
								<input value="" type="text" class="form-control"
									   name="title_1_l2" placeholder="Enter title">

								<label>FAQ text</label>
								<input value="" type="text" class="form-control"
									   name="text_1_l2" placeholder="Enter  Text">

								<label class="mt-3 pt-md-3">Font</label>
								<input value="" type="text" class="form-control"
									   name="font_1_l2" placeholder="Font">
							</div>
						</div>
					</div>

					<button style="position: absolute;bottom: -63px;width: 94%;" type="button"
							class="add_l2  mt-3 mt-md-3 btn btn-outline-success btn-lg btn-block">add new block
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
		var i = 2;
		var j = 2;
		$('.add_l1').click(function () {
			$('.lang1_col').append('<div class="card mt-3 pt-md-3">\n' +
				'<div class="card-body">\n' +
				'<div style="text-align: right;" class="mb-3 mb-md-3 "><button type="button" class="delete btn btn-warning btn-sm">-</button></div>\n' +
				'<div class="form-group mt-3 pt-md-3">\n' +
				'<label>FAQ title</label>\n' +
				'<input value="" type="text" class="form-control"\n' +
				' name="title_' + i + '_l1" placeholder="Enter title">\n' +
				'\n' +
				'<label>FAQ text</label>\n' +
				'<input value="" type="text" class="form-control"\n' +
				' name="text_' + i + '_l1" placeholder="Enter  Text">\n' +
				'\n' +
				'<label class="mt-3 pt-md-3">Font</label>\n' +
				'<input value="" type="text" class="form-control"\n' +
				' name="font_' + i + '_l1" placeholder="Font">\n' +
				'</div>\n' +
				'</div>\n' +
				'</div>');

			i++;
		});


		$('.add_l2').click(function () {
			$('.lang2_col').append('<div class="card mt-3 pt-md-3">\n' +
				'<div class="card-body">\n' +
				'<div style="text-align: right;" class="mb-3 mb-md-3 "><button type="button" class="delete btn btn-warning btn-sm">-</button></div>\n' +
				'<div class="form-group mt-3 pt-md-3">\n' +
				'<label>FAQ title</label>\n' +
				'<input value="" type="text" class="form-control"\n' +
				' name="title_' + j + '_l2" placeholder="Enter title">\n' +
				'\n' +
				'<label>FAQ text</label>\n' +
				'<input value="" type="text" class="form-control"\n' +
				' name="text_' + j + '_l2" placeholder="Enter  Text">\n' +
				'\n' +
				'<label class="mt-3 pt-md-3">Font</label>\n' +
				'<input value="" type="text" class="form-control"\n' +
				' name="font_' + j + '_l2" placeholder="Font">\n' +
				'</div>\n' +
				'</div>\n' +
				'</div>');

			j++;
		});


	});

	$(document).on('click', '.delete', function () {
		console.log($(this).parent('div').parent('div').parent('.card'));
		$(this).parent('div').parent('div').parent('.card').fadeOut();
	})
</script>
