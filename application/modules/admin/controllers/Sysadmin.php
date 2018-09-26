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

        
        $config['allowed_types']        = 'gif|jpg|png';
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


         $this->load->library('form_validation');
        // $this->config->set_item('language', 'armenian');
         $this->form_validation->set_error_delimiters('<div>', '</div>');
    	 $this->form_validation->set_rules('username', 'Username', 'required');
    	 $this->form_validation->set_rules('first_name', 'First name', 'required');
    	 $this->form_validation->set_rules('role', 'Role', 'required');
    	 $this->form_validation->set_rules('password','Password','required|min_length[6]');
    	 $this->form_validation->set_rules('email','Email','valid_email');


    
		if($this->form_validation->run() == false){
			//validation errors
			$n = 1;

			$validation_errors = array(
			                            'username' => form_error('username'),
                                        'first_name' => form_error('first_name'),
                                        'role' => form_error('role'),
                                        'password' => form_error('password'),
                                        'email' => form_error('email')
            );
		    $messages['error']['elements'][] = $validation_errors;
		}



        $password = $this->hash($this->input->post('password'));
        $role = $this->input->post('role');
        $email = $this->input->post('email');
        $first_name = $this->input->post('first_name');
        $last_name = $this->input->post('last_name');
        $username = $this->input->post('username');
        $status = $this->input->post('status');

        $sql_unique = "SELECT `username` FROM `user` WHERE `username` = '".$username."'";

		$query = $this->db->query($sql_unique);
		$num_rows = $query->num_rows();
		

		if($num_rows > '0') {
			$n = 1;
			$validation_errors = array('username' => "Username is not unique");
		    $messages['error']['elements'][] = $validation_errors;
		}

		if($n == 1) {
			echo json_encode($messages);
		    return false;
		}


		$sql = "INSERT INTO `user`
					SET 
					 `role_id` = ".$this->db_value($role).",
					 `username` = ".$this->db_value($username).",
					 `first_name` = ".$this->db_value($first_name).",
					 `last_name` = ".$this->db_value($last_name).",
					 `email` = ".$this->db_value($email).",
					 `password` = ".$this->db_value($password).",
					 `status` = ".$this->db_value($status)."";


		$result = $this->db->query($sql);

		if ($result){
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
