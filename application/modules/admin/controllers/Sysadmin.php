<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Sysadmin extends CI_Controller {


    /**
     * sysadmin constructor.
     */
    public function __construct() {

        parent::__construct();

        // load the library
        $this->load->library('layout');
        // load the helper
        $this->load->helper('url');

    }



    /**
	 * Valid URL
	 *
	 * @param	string	$str
	 * @return	bool
	 */
	public function valid_url($str) {

		if (filter_var($str, FILTER_VALIDATE_URL)) {
		    return true;
		} else {
		    return false;
		}
	}

    /**
     * @param $element
     */
    private function pre($element) {

		echo '<pre>';
			print_r($element);
		echo '</pre>';
	}

	 /**
	 * Return unical name without extension. 
	 * Ex: 45f7fd76
	 *
	 * @access public
	 * @return string
	 */
	private function uname() {
		
	 	return substr(md5(time() . rand()), 3, 8);
	 	
	} // End func uname


    /**
     * @return string
     */
    private function default_lng() {
		return 'hy';
	}

    /**
     * @return array
     */
    // TODO MULTI LANGUAGE MOD
    private function languages() {
		return array('hy', 'ru', 'en');
	}


	/**
	 * @return mixed
	 */
	private function upload_config() {


        $config['allowed_types']        = 'ioc|jpg|png';
        $config['max_size'] 			= '2097152'; //2 MB
        $config['file_name']			= $this->uname();
        $config['max_width']            = '2048';
        $config['max_height']           = '1024';

        $this->load->library('upload', $config);

        $this->upload->initialize($config);

        return $config;

    }



    /**
     * @param $url
     * @return bool
     */
    private function youtube_id_from_url($url) {

        $result = preg_match('%^# Match any youtube URL
			(?:https?://)?  # Optional scheme. Either http or https
			(?:www\.)?      # Optional www subdomain
			(?:             # Group host alternatives
			  youtu\.be/    # Either youtu.be,
			| youtube\.com  # or youtube.com
			  (?:           # Group path alternatives
				/embed/     # Either /embed/
			  | /v/         # or /v/
			  | /watch\?v=  # or /watch\?v=
			  )             # End path alternatives.
			)               # End host alternatives.
			([\w-]{10,12})  # Allow 10-12 for 11 char youtube id.
			$%x', $url, $matches);

        if (!isset($matches[1])) {
            return false;
        }

        if ($result) {
            return $matches[1];
        }

        return false;
    }

    /**
     * @return mixed
     */
    public function pagination_config() {
		//pagination config
		$config['use_page_numbers'] = TRUE;
		$config['per_page'] = 20;
		$config['full_tag_open'] = '<div class="pgn">';
		$config['full_tag_close'] = '</div>';
        $config['next_link'] = '&gt;';
        $config['next_tag_open'] = '<span class="pg_n">';
        $config['next_tag_close'] = '</span>';
        $config['prev_link'] = '&lt;';
        $config['prev_tag_open'] = '<span class="pg_s">';
        $config['prev_tag_close'] = '</span>';
        $config['cur_tag_open'] = '<span class="pg_s">';
		$config['cur_tag_close'] = '</span>';
		$config['num_tag_open'] = '<span class="pg_s">';
		$config['num_tag_close'] = '</span>';

		return $config;
	}



    public function config() {
		$this->authorisation();
		$this->load->helper('form');
		$this->layout->view('config');
		   
		
	}

    /**
     * @return bool
     */
    public function access_denied() {
		$message = 'Մուտքը արգելված է';
		show_error($message, '403', $heading = '403');
		return false;
	}


    /**
     * @param $data
     * @return string
     */
    public function hash($data) {
		return md5($data);
	}


    /**
     * @param null $value
     * @return string
     */
    public function db_value($value = NULL) {

		$this->load->helper('form');

		$value = str_replace("'", "\'", $value);

		if(is_null($value)){
			return "NULL";
		}

		if($value != ''){
			return "'".$value."'";
		} else {
			return "NULL";
		}
	}

	/**
	 * @return bool
	 */
	public function authorisation() {

		$this->load->library('session');
		$this->load->helper('url');


		if(!$this->session->username) {
			redirect('admin/login', 'location');
			$this->session->sess_destroy();
		}

		return true;
	}




	public function web() {

		$this->authorisation();
        $this->load->helper('url');
        $this->load->helper('form');
        $data = array();

        $sql = "
        	SELECT 
			  `web`.`language_id`,
			  `language`.`title` AS `language`,
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

		$query = $this->db->query($sql);


		$result = $query->result_array();
		$data['result'] = $result;

        $this->layout->view('web', $data, 'edit');

    }

	public function web_ax() {

		$messages = array('success' => '0', 'message' => '', 'error' => '', 'fields' => '');
		$n = 0;

		if ($this->input->server('REQUEST_METHOD') != 'POST') {
            // Return error
            $messages['error'] = 'error_message';
            $this->access_denied();
            return false;
        }


		$this->load->library('image_lib');
		$config = $this->upload_config();
		$config['upload_path'] = set_realpath('assets/img');


         $this->load->library('form_validation');
        // $this->config->set_item('language', 'armenian');
         $this->form_validation->set_error_delimiters('<div>', '</div>');
    	 $this->form_validation->set_rules('language_1', 'Language 1', 'required');
    	 $this->form_validation->set_rules('language_2', 'Language 2', 'required');



    
		if($this->form_validation->run() == false){
			//validation errors
			$n = 1;

			$validation_errors = array(
				'language_1' => form_error('language_1'),
				'language_2' => form_error('language_2')
			);

		    $messages['error']['elements'][] = $validation_errors;
		}



		$language_1 = $this->input->post('language_1');
		$language_2 = $this->input->post('language_2');

		$language_arr = array(
			'1' => $language_1,
			'2' => $language_2
		);


		$website_name_1 = $this->input->post('website_name_1');
		$website_name_2 = $this->input->post('website_name_2');

		$meta_1 = $this->input->post('meta_1');
		$meta_2 = $this->input->post('meta_2');


		$key_words_1 = $this->input->post('key_words_1');
		$key_words_2 = $this->input->post('key_words_2');

		foreach ($language_arr as $lang_id => $language) {
			$sql_lang = "
				UPDATE `language` SET `title` = " . $this->db_value($language) . " WHERE `id` = " . $this->db_value($lang_id) . "
			";
			$result_lang = $this->db->query($sql_lang);

			if (!$result_lang) {
				$messages['success'] = 0;
				$messages['error'] = 'Error N '.$lang_id;
				echo json_encode($messages);
				return false;
			}


		}



		$sql_web1 = "UPDATE `web`
					SET 
					 `website_name` = ".$this->db_value($website_name_1).",
					 `meta_desc` = ".$this->db_value($meta_1).",
					 `key_word` = ".$this->db_value($key_words_1)."
				WHERE `status` = '1' AND `language_id` = '1'";


		$result_web1 = $this->db->query($sql_web1);



		if (!$result_web1) {
			$messages['success'] = 0;
			$messages['error'] = 'Error';
			echo json_encode($messages);
			return false;
		}


		$sql_web2 = "UPDATE `web`
					SET 
					 `website_name` = ".$this->db_value($website_name_2).",
					 `meta_desc` = ".$this->db_value($meta_2).",
					 `key_word` = ".$this->db_value($key_words_2)."
				WHERE `status` = '1' AND `language_id` = '2'";


		$result_web2 = $this->db->query($sql_web2);


		if ($result_web2){
            $messages['success'] = 1;
            $messages['message'] = 'Success';
        } else {
            $messages['success'] = 0;
            $messages['error'] = 'Error';
        }

        // Return success or error message
        echo json_encode($messages);
        return true;
	}


	public function faq() {

		$this->authorisation();
		$this->load->helper('url');
		$this->load->helper('form');
		$data = array();



		$this->layout->view('faq', $data, 'edit');

	}

	public function main() {

		$this->authorisation();
		$this->load->helper('url');
		$this->load->helper('form');
		$data = array();



		$this->layout->view('main', $data, 'edit');

	}




    
}
//end of class
