<div class="container" style="padding-top: 50px;">

	<div class="jumbotron ">
		<h1 class="display-4">Web</h1>
		<p class="lead">Edit Website web section</p>
		<hr class="my-4">


		<div class="d-none alert alert-danger mt-md-3 mt-3" role="alert"></div>
		<div class="d-none alert alert-success mt-md-3 mt-3" role="alert"></div>

		<form>
			<div class="row mt-md-3">

				<div class="col-sm-6 ">
					<div class="form-group">
						<label for="exampleFormControlFile1">Choose favicon</label>
						<input name="favicon" type="file" class="form-control-file" id="exampleFormControlFile1">
					</div>
				</div>
				<div class="col-sm-6 pt-md-3">
					<img width="50" src="<?= base_url() ?>assets/img/<?= $result[0]['favicon'] ?>" alt="..."
						 class="img-thumbnail">
				</div>

			</div>

			<div class="row">
				<div class="col-sm-6 pt-md-3">
					<h5 class="title">Language 1</h5>
					<div class="card mt-3 pt-md-3">
						<div class="card-body">
							<div class="form-group">
								<label>Language 1</label>
								<input value="<?= $result[0]['language'] ?>" type="text" class="form-control"
									   name="language_1" placeholder="Enter language">
								<label class="mt-md-3">Website Name</label>
								<input value="<?= $result[0]['website_name'] ?>" type="text" class="form-control"
									   name="website_name_1"
									   placeholder="Enter Website Name">
								<label class="mt-md-3">Meta description</label>
								<textarea type="text" class="form-control" name="meta_1" rows="7"
										  placeholder="Enter Meta Description"><?= $result[0]['meta_desc'] ?></textarea>
								<label class="mt-md-3">Key Words</label>
								<textarea type="text" class="form-control" name="key_words_1" rows="7"
										  placeholder="Enter Key Words"><?= $result[0]['key_word'] ?></textarea>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6" style="padding-bottom: 10px;background: #46404059;border-radius: 5px;">
					<h5 class="title">Language 1</h5>
					<div class="card mt-3">
						<div class="card-body">
							<div class="form-group ">

								<label>Language 2</label>
								<div class="custom-control custom-checkbox float-right">
									<input <?= ($result[1]['language_status'] == 1 ? 'checked' : '') ?> name="allow"
																										value="on"
																										type="checkbox"
																										class="custom-control-input"
																										id="customCheck2">
									<label class="custom-control-label" for="customCheck2">Language 2 on or off</label>
								</div>
								<input value="<?= $result[1]['language'] ?>" type="text" class="form-control"
									   name="language_2" placeholder="Enter language">

								<label class="mt-md-3">Website Name</label>
								<input value="<?= $result[1]['website_name'] ?>" type="text" class="form-control"
									   name="website_name_2"
									   placeholder="Enter Website Name">

								<label class="mt-md-3">Meta description</label>
								<textarea type="text" class="form-control" name="meta_2" rows="7"
										  placeholder="Enter Meta Description"><?= $result[1]['meta_desc'] ?></textarea>

								<label class="mt-md-3">Key Words</label>
								<textarea type="text" class="form-control" name="key_words_2" rows="7"
										  placeholder="Enter Key Words"><?= $result[1]['key_word'] ?></textarea>
							</div>
						</div>
					</div>
				</div>
			</div>
			<hr class="my-4">
			<div class="row mt-md-3">

				<div class="col-sm-6 ">
					<div class="custom-control custom-checkbox">
						<input <?= ($result_chat[1]['status'] == '1' ? 'checked' : '') ?> name="mail_allow"
																						  type="checkbox"
																						  class="custom-control-input"
																						  value="on" id="customCheck1">
						<label class="custom-control-label" for="customCheck1">Mail to send order a call</label>
					</div>
				</div>

				<div class="col-sm-6">
					<label class="">Mail subject</label>
					<input value="<?= $result_chat[0]['mail_subject'] ?>"
						   type="text"
						   class="form-control"
						   name="subject"
						   placeholder="Mail subject">
				</div>

				<div class="col-sm-6"></div>

				<div class="col-sm-6">
					<label class="">Mail to</label>
					<input value="<?= $result_chat[0]['mail_to'] ?>"
						   type="email"
						   class="form-control"
						   name="mail_to"
						   placeholder="Enter E-mail address">
				</div>

			</div>
			<hr class="my-4">
			<div class="row mt-md-3">

				<div class="col-sm-6 ">
					<div class="form-group">
						<label for="exampleFormControlFile1">Choose icon</label>
						<input name="chat_icon"
							   type="file"
							   class="form-control-file"
							   id="exampleFormControlFile1">
					</div>
				</div>
				<div class="col-sm-6 pt-md-3">
					<img width="50" src="<?= base_url() ?>assets/img/<?= $result_chat[0]['photo'] ?>" alt="..."
						 class="img-thumbnail">
				</div>

			</div>

			<div class="row mt-md-3">
				<div class="col-sm-6 ">
					<div class="form-group">
						<label>Text Lang 1</label>
						<input type="text"
							   class="form-control"
							   name="order_1"
							   placeholder="Text Lang 1"
							   value="<?= $result_chat[0]['title'] ?>"
						>
					</div>
				</div>
				<div class="col-sm-6 " style="padding-bottom: 10px;background: #46404059;border-radius: 5px;">
					<div class="form-group">
						<label>Text Lang 2</label>
						<input type="text"
							   class="form-control"
							   name="order_2"
							   placeholder="Text Lang 2"
							   value="<?= $result_chat[1]['title'] ?>"
						>
					</div>
				</div>
			</div>
			<hr class="my-4">

			<div class="row mt-md-3">
				<div class="col-sm-6 ">
					<div class="form-group">
						<label>Title Lang 1</label>
						<input type="text"
							   class="form-control"
							   name="title_chat_1"
							   placeholder="Title"
							   value="<?= $result_chat[0]['form_title'] ?>"
						>

						<label>Name Lang 1</label>
						<input type="text"
							   class="form-control"
							   name="name_1"
							   placeholder="Name"
							   value="<?= $result_chat[0]['form_name'] ?>"
						>

						<label>E-mail Lang 1</label>
						<input type="text"
							   class="form-control"
							   name="email_1"
							   placeholder="E-mail"
							   value="<?= $result_chat[0]['form_email'] ?>"
						>

						<label>Country Code Lang 1</label>
						<input type="text"
							   class="form-control"
							   name="country_code_1"
							   placeholder="Country code"
							   value="<?= $result_chat[0]['form_country_code'] ?>"
						>

						<label>Phone Number Lang 1</label>
						<input type="text"
							   class="form-control"
							   name="phone_number_1"
							   placeholder="Phone number"
							   value="<?= $result_chat[0]['form_phone_number'] ?>"
						>

						<label>Button Lang 1</label>
						<input type="text"
							   class="form-control"
							   name="button_1"
							   placeholder="Button"
							   value="<?= $result_chat[0]['form_button'] ?>"
						>

						<label>Success message Lang 1</label>
						<input type="text"
							   class="form-control"
							   name="success_message_1"
							   placeholder="Success message"
							   value="<?= $result_chat[0]['success_message'] ?>"
						>
					</div>
				</div>

				<div class="col-sm-6 " style="padding-bottom: 10px;background: #46404059;border-radius: 5px;">
					<div class="form-group">
						<label>Title Lang 2</label>
						<input type="text"
							   class="form-control"
							   name="title_chat_2"
							   placeholder="Title"
							   value="<?= $result_chat[1]['form_title'] ?>"
						>

						<label>Name Lang 2</label>
						<input type="text"
							   class="form-control"
							   name="name_2"
							   placeholder="Name"
							   value="<?= $result_chat[1]['form_name'] ?>"
						>

						<label>E-mail Lang 2</label>
						<input type="text"
							   class="form-control"
							   name="email_2"
							   placeholder="E-mail"
							   value="<?= $result_chat[1]['form_email'] ?>"
						>

						<label>Country Code Lang 2</label>
						<input type="text"
							   class="form-control"
							   name="country_code_2"
							   placeholder="Country code"
							   value="<?= $result_chat[1]['form_country_code'] ?>"
						>

						<label>Phone Number Lang 2</label>
						<input type="text"
							   class="form-control"
							   name="phone_number_2"
							   placeholder="Phone number"
							   value="<?= $result_chat[1]['form_phone_number'] ?>"
						>

						<label>Button Lang 2</label>
						<input type="text"
							   class="form-control"
							   name="button_2"
							   placeholder="Button"
							   value="<?= $result_chat[1]['form_button'] ?>"
						>

						<label>Success message Lang 2</label>
						<input type="text"
							   class="form-control"
							   name="success_message_2"
							   placeholder="Success message"
							   value="<?= $result_chat[1]['success_message'] ?>"
						>
					</div>
				</div>
			</div>


		</form>


		<input id="submit" class="btn btn-primary  mt-3 mt-md-3 float-right" type="submit" value="Submit">

	</div>
</div>
