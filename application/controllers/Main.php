<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Main extends MX_Controller {


	/**
	 * Main constructor.
	 */
	public function __construct() {

		parent::__construct();

		// load the library
		$this->load->helper('language');
		$this->load->library('layout');
		$this->load->library('session');

	}
	
	
	 public function switchLanguage($language = "lang_1") {

    	$language_id = explode('_', $language);

		$this->session->set_userdata(
			array(
				'site_lang' => $language,
				'language_id' => ($language_id[1]-1)
			)
		);
        redirect($_SERVER['HTTP_REFERER']);
    }




	public function index() {

		$this->load->helper('url');
		$this->load->helper('form');
		$language_id = $this->session->language_id;
		
		$data = array();

		if($language_id == '') {
			$language_id = 0;
		}

		$sql_web = "
        	SELECT 
			  `web`.`language_id`,
			  `language`.`title` AS `language`,
			  `language`.`status` AS `language_status`,
			  `web`.`favicon`,
			  `web`.`website_name`,
			  `web`.`meta_desc`,
			  `web`.`key_word` 
			FROM
			  `web` 
			  LEFT JOIN `language` 
				ON `language`.`id` = `web`.`language_id` 
			WHERE `web`.`status` = 1 
        ";

		$query_web = $this->db->query($sql_web);
		$result_web = $query_web->result_array();


		$sql_chat = "
			SELECT 
			  `chat`.`language_id`,
			  `chat`.`title`,
			  `chat`.`photo`,
			  `chat`.`mail_to`,
			  `chat`.`mail_subject`,
			  `chat`.`form_title`,
			  `chat`.`form_name`,
			  `chat`.`form_email`,
			  `chat`.`form_country_code`,
			  `chat`.`form_phone_number`,
			  `chat`.`form_button`,
			  `chat`.`success_message`,
			  `chat`.`status`
			FROM
			  `chat` 
			  LEFT JOIN `language` 
				ON `language`.`id` = `chat`.`language_id` 
			WHERE 1 
		";

		$query_chat = $this->db->query($sql_chat);
		$result_chat = $query_chat->result_array();


		$sql_main = "
        	SELECT
			  `language_id`,
			  `button_1`,
			  `button_2`,
			  `button_2_url`,
			  `title`,
			  `main_text`,
			  `font_url`,
			  `font_css`,
			  `show_img`,
			  `background_img`,
			  `background_color`,
			  `status`
			FROM `main`
			WHERE `main`.`status` = 1
			LIMIT 2
        ";



		$query_main = $this->db->query($sql_main);
		$result_main = $query_main->result_array();


		$sql_sch = "
        	SELECT 
			  `id`,
			  `language_id`,
			  `title_solution`,
			  `text_solution`,
			  `title_challenge`,
			  `text_challenge`,
			  `photo_solution`,
			  `photo_challenge`,
			  `status` 
			FROM
			  `solution_challenge` 
			 WHERE `status` = 1 
			 LIMIT 2 
        ";


		$query_sch = $this->db->query($sql_sch);
		$result_solution_challenge = $query_sch->result_array();


		$sql_func = "
        	SELECT
			  `id`,
			  `language_id`,
			  `title`,
			  `icon`,
			  `background_img`,
			  `default`,
			  `statsu`
			FROM `functional`
			 WHERE statsu = 1
        ";


		$query_func = $this->db->query($sql_func);
		$result_func = $query_func->result_array();

		$sql_func2 = "
        	SELECT
			  `id`,
			  `language_id`,
			  `button_name`,
			  `button_link`,
			  `background_img`,
			  `background_color`,
			  `show_img`,
			  `text`,
			  `status`
			FROM `functional_2`
			 WHERE `status` = 1
			 LIMIT 2
        ";


		$query_func2 = $this->db->query($sql_func2);
		$result_func2 = $query_func2->result_array();

		$sql_faq = "
        	SELECT 
			  `id`,
			  `title`,
			  `language_id`,
			  `text` 
			FROM
			  `faq` 
			WHERE `status` = '1' 
        ";


		$query_faq = $this->db->query($sql_faq);
		$result_faq = $query_faq->result_array();


		$sql_foot = "
        	SELECT
			  `id`,
			  `language_id`,
			  `title`,
			  `text`,
			  `input_1`,
			  `input_2`,
			  `button_name`,
			  `footer_text`,
			  `status`
			FROM `footer`
			WHERE `status` = 1
			LIMIT 2 
        ";


		$query_foot = $this->db->query($sql_foot);
		$result_foot = $query_foot->result_array();

		$data['result_web'] = $result_web;
		$data['result_chat'] = $result_chat;
		$data['result_main'] = $result_main;
		$data['result_solution_challenge'] = $result_solution_challenge;
		$data['result_functional'] = $result_func;
		$data['result_functional2'] = $result_func2;
		$data['result_faq'] = $result_faq;
		$data['result_footer'] = $result_foot;

		$data['lng'] = $language_id;


		$this->load->view('index', $data);


	}


	public function index_ax() {
		$messages = array('success' => '0', 'message' => '', 'error' => '', 'fields' => '');
		if ($this->input->server('REQUEST_METHOD') != 'POST') {
			// Return error
			$messages['error'] = 'error_message';
			$this->access_denied();
			return false;
		}

		$sql_ = "
			SELECT 
			  `mail_to`,
			  `mail_subject`
			FROM
			  `chat` 
			WHERE id = '1' 
		";

		$query_ = $this->db->query($sql_);
		$row = $query_->row_array();

		$mail_to = $row['mail_to'];
		$mail_subject = $row['mail_subject'];

		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$country = $this->input->post('country');
		$phone = $this->input->post('phone');

        // smtp start
		$config['protocol']    = 'smtp';
		$config['smtp_host']    = 'ssl://smtp.gmail.com';
		$config['smtp_port']    = '465';
		$config['smtp_timeout'] = '7';
		$config['smtp_user']    = 'tigran.mkrtch@gmail.com';
		$config['smtp_pass']    = 'Tig97Vah68';
		$config['charset']    = 'utf-8';
		$config['newline']    = "\r\n";
		$config['mailtype'] = 'html'; // or text
		$config['validation'] = TRUE; // bool whether to validate email or not

		$this->load->library('email');

		$this->email->initialize($config);


		$this->email->from($email, $name);
		$this->email->reply_to($email, $name);
		$this->email->to($mail_to);

		$this->email->subject('Subscription: '.$mail_subject);
		$this->email->message('<div>
			<p><strong>Name -</strong>'.$name.'</p>
			<p><strong>Country -</strong>'.$country.'</p>
 			<p><strong>E-mail -</strong>'.$email.'</p>
 			<p><strong>Phone -</strong>'.$phone.'</p>
 		</div>');


		if(!$this->email->send()) {
			$messages['success'] = 0;
			$messages['error'] = $this->email->print_debugger();
			echo json_encode($messages);
			return false;
		}


		//end of smtp

		$sql = "INSERT INTO
				  `form_email`
				SET 
				  `name` = '" . $name . "',
				  `email` = '" . $email . "',
				  `country_code` = '" . $country . "',
				  `phone_number` = '" . $phone . "'		
		";

		$result = $this->db->query($sql);

		if (!$result) {
			$messages['success'] = 0;
			$messages['error'] = 'Error chat form ';
			echo json_encode($messages);
			return false;
		}


		if ($result) {
			$messages['success'] = 1;
			$messages['message'] = 'Thanks for your order';
		} else {
			$messages['success'] = 0;
			$messages['error'] = 'Error';
		}

		// Return success or error message
		echo json_encode($messages);
		return true;
	}



	public function subscribe_ax() {
		$messages = array('success' => '0', 'message' => '', 'error' => '', 'fields' => '');
		if ($this->input->server('REQUEST_METHOD') != 'POST') {
			// Return error
			$messages['error'] = 'error_message';
			$this->access_denied();
			return false;
		}
		$name = $this->input->post('name');
		$email = $this->input->post('email');


		$sql_ = "
			SELECT 
			  `mail_to`,
			  `mail_subject`
			FROM
			  `chat` 
			WHERE id = '1' 
		";

		$query_ = $this->db->query($sql_);
		$row = $query_->row_array();


		$mail_to = $row['mail_to'];
		$mail_subject = $row['mail_subject'];


		// smtp start
		$config['protocol']    = 'smtp';
		$config['smtp_host']    = 'ssl://smtp.gmail.com';
		$config['smtp_port']    = '465';
		$config['smtp_timeout'] = '7';
		$config['smtp_user']    = 'tigran.mkrtch@gmail.com';
		$config['smtp_pass']    = 'Tig97Vah68';
		$config['charset']    = 'utf-8';
		$config['newline']    = "\r\n";
		$config['mailtype'] = 'html'; // or text
		$config['validation'] = TRUE; // bool whether to validate email or not

		$this->load->library('email');

		$this->email->initialize($config);


		$this->email->from($email, $name);
		$this->email->reply_to($email, $name);
		$this->email->to($mail_to);

		$this->email->subject('Subscription: '.$mail_subject);
		$this->email->message('<div>
			<p><strong>Name -</strong>'.$name.'</p>
 			<p><strong>E-mail -</strong>'.$email.'</p>
 		</div>');


		if(!$this->email->send()) {
			$messages['success'] = 0;
			$messages['error'] = $this->email->print_debugger();
			echo json_encode($messages);
			return false;
		}


		//end of smtp


		$sql = "INSERT INTO
						`subscribe`
						SET 
					`name` = '" . $name . "',
					`email` = '" . $email . "',
					`log_date` = NOW()
				";

		$result = $this->db->query($sql);

		if (!$result) {
			$messages['success'] = 0;
			$messages['error'] = 'Error chat form ';
			echo json_encode($messages);
			return false;
		}


		if ($result) {
			$messages['success'] = 1;
			$messages['message'] = 'Thanks for subscribe';
		} else {
			$messages['success'] = 0;
			$messages['error'] = 'Error';
		}

		// Return success or error message
		echo json_encode($messages);
		return true;
	}

	private function access_denied() {
		return false;
	}


}
//end of class
