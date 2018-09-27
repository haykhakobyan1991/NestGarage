<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Main extends MX_Controller {


	/**
	 * Main constructor.
	 */
	public function __construct()
	{

		parent::__construct();

		// load the library
		$this->load->helper('language');
		$this->load->library('layout');
		$this->load->library('session');

//		echo '<pre>';
//		print_r($_SESSION);
//		echo '</pre>';

	}

	/**
	 * @return string
	 */
	private function default_lng() {
		return 'hy';

	}

	/**
	 * @param $value
	 * @return bool
	 */
	private function language($value) {
		if ($value != '') {
			return $this->lang->line($value);
		}
		return true;

	}


	public function index() {

		$this->load->helper('url');
		$this->load->helper('form');
		$language_id = $this->session->language_id;

//        $this->layout->set_title($this->language('Home'));
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
				/*AND `web`.`language_id` = '".$language_id."'*/
        ";

		$query_web = $this->db->query($sql_web);
		$result_web = $query_web->result_array();

//		echo '<pre>';
//		print_r($result_web);
//		echo '</pre>';

		$sql_chat = "
			SELECT 
			  `chat`.`language_id`,
			  `chat`.`title`,
			  `chat`.`photo`,
			  `chat`.`mail_to`,
			  `chat`.`form_title`,
			  `chat`.`form_name`,
			  `chat`.`form_email`,
			  `chat`.`form_country_code`,
			  `chat`.`form_phone_number`,
			  `chat`.`form_button`,
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
			  `font`,
			  `background_img`,
			  `status`
			FROM `main`
			WHERE `main`.`status` = 1
			LIMIT 2
        ";


		$query_main = $this->db->query($sql_main);
		$result_main = $query_main->result_array();

		$data['result_web'] = $result_web;
		$data['result_chat'] = $result_chat;
		$data['result_main'] = $result_main;

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
	}



}
//end of class
