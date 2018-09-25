<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LangSwitch extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    function switchLanguage($language = "") {

        $this->session->set_userdata('set_language', $language);

        if($language == 'ru') {
            $language = 'russian';
        } else {
            $language = 'armenian';
        }

        $this->session->set_userdata('site_lang', $language);
        redirect($_SERVER['HTTP_REFERER']);
    }
}