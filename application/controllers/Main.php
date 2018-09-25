<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Main extends MX_Controller {


    public function __construct() {

        parent::__construct();

        // load the library
        $this->load->helper('language');
        $this->load->library('layout');
        $this->load->library('session');

        $lang_slug = $this->uri->segment(1);
 

       // print_r($_SESSION);
       if(isset($_SESSION['site_lang'])){
          $this->lang->load('index',$_SESSION['site_lang']);
       }
       
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
        $lng = $this->default_lng();
        $this->layout->set_title($this->language('Home'));
        $data = array();




        

        $this->layout->view('index', $data);
	       
        
	}


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

	public function video() {

        $this->load->helper('url');
        $this->load->helper('form');
        $lng = $this->default_lng();
        $alias = $this->uri->segment(2);
        $data = array();

        if(!$alias) {
            $message = 'Էջը չի գտնվել';
            show_error($message, '404', $heading = '404');
            return false;
        }


       $sql = "SELECT 
					`video`.`id`,
					`video`.`title_".$lng."` AS `title`,
					`video`.`alias_".$lng."` AS `alias`,
					`video`.`text_".$lng."` AS `text`,
					DATE_FORMAT(`video`.`date`, '%d-%m-%Y') AS `date`,
                    `video`.`video_id`,
                    `video`.`count`,
                    `video`.`photo`,
                    `video`.`like`,
                    `video`.`dislike`,
					`video`.`iframe_link`,
					`video`.`status` 
				FROM
				  `video` 
				WHERE `video`.`alias_".$lng."` = '".$alias."'";

        $query = $this->db->query($sql);
        $num_rows = $query->num_rows();

        if($num_rows != 1) {
            $message = 'Էջը չի գտնվել';
            show_error($message, '404', $heading = '404');
            return false;
        }
        $row = $query->row_array();



        // video page view todo ajax video list click
        $sql_view = "UPDATE `video` SET `count` = `count`+1 WHERE `alias_".$lng."` = '".$alias."'";
        $query_view = $this->db->query($sql_view);

        $data['video_id'] = $row['video_id'];
        $data['iframe_link'] = $row['iframe_link'];
        $data['title'] = $row['title'];
        $data['date'] = $row['date'];
        $data['count'] = $row['count'];
        $data['photo'] = $row['photo'];
        $data['like'] = $row['like'];
        $data['dislike'] = $row['dislike'];
        $this->layout->set_title($row['title']);

        $this->layout->view('video', $data);

    }
    
    
    public function like_ax() {
        
        $data = $this->input->post('data');
        $alias = $this->input->post('alias');
        $check = $this->input->post('check');
        
        
        if($data == 1 and $check == 1) {
            $sql = "UPDATE `video` SET `like` = `like`+1 WHERE `alias_hy` = '".$alias."'";
            $sql_like = "SELECT `like` FROM `video` WHERE `alias_hy` = '".$alias."'";
        } elseif($data == -1 and $check == 1) {
           $sql = "UPDATE `video` SET `dislike` = `dislike`+1 WHERE `alias_hy` = '".$alias."'";
           $sql_like = "SELECT `dislike` FROM `video` WHERE `alias_hy` = '".$alias."'";
        } elseif($data == 1 and $check == -1) {
            $sql = "UPDATE `video` SET `like` = `like`-1 WHERE `alias_hy` = '".$alias."'";
            $sql_like = "SELECT `like` FROM `video` WHERE `alias_hy` = '".$alias."'";
        } elseif($data == -1 and $check == -1) {
            $sql = "UPDATE `video` SET `dislike` = `dislike`-1 WHERE `alias_hy` = '".$alias."'";
           $sql_like = "SELECT `dislike` FROM `video` WHERE `alias_hy` = '".$alias."'";
        }
        
        
        $result = $this->db->query($sql);
        $query = $this->db->query($sql_like);
        $row = $query->row_array();
        
        if($data == 1) {
            echo  $row['like'];
        } elseif($data == -1) {
            echo  $row['dislike'];
        }
        
        
        
    }


}
//end of class