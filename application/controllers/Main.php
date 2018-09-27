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


	/**
	 * @return bool
	 */
	public function video_list() {



		$this->load->helper('url');
		$this->load->helper('form');
		$lng = $this->default_lng();
		$alias = $this->uri->segment(2);
		$data = array();
		$add_sql = '';

		if($alias) {



			$sql = "SELECT 
    					`video`.`id`,
    					`video`.`title_".$lng."` AS `title`,
    					`video`.`alias_".$lng."` AS `alias`,
                        `video`.`text_".$lng."` AS `text`,
    					`video`.`video_id`,
    					`video`.`photo`,
    					`video`.`video_list_id`,
    				    `video_list`.`title_".$lng."` AS `video_list`,
    					`video`.`status` 
    				FROM
    				  `video` 
    				LEFT JOIN `video_list` 
    					ON `video`.`video_list_id` = `video_list`.`id` 
    				WHERE 1 
                    AND `video`.`status` = '1'
                    AND `video`.`an` = '0'
                    AND `video_list`.`alias_".$lng."` = '".$alias."'
    				ORDER BY `video`.`id` DESC";
		} else {

			$sql = "
                        SELECT 
                            `video_list`.`id`,
                            `video_list`.`title_".$lng."` AS `title`,
                            `video_list`.`alias_".$lng."` AS `alias`,
                            `video_list`.`text_".$lng."` AS `text`,
                            `menu`.`image`,
                            `video_list`.`status` 
                        FROM
                          `video_list`
                        LEFT JOIN `menu` ON `menu`.`id` = `video_list`.`menu_id`
                        WHERE `video_list`.`status` = '1' 
                        AND `video_list`.`alias_".$lng."` <> 'ayl'
                    ";
		}
		$query = $this->db->query($sql);
		$num_rows = $query->num_rows();

		if($num_rows == 0) {
			$message = 'Էջը չի գտնվել';
			show_error($message, '404', $heading = '404');
			return false;
		}
		$result = $query->result_array();
		$data['result'] = $result;

		if ($alias) {
			$this->layout->set_title($result[0]['video_list']);
		} else {
			$this->layout->set_title($this->language('Series'));
		}

		$this->layout->view('video_list', $data);


	}






}
//end of class
