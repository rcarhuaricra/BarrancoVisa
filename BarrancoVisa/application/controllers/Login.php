<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Your own constructor code       
        $this->load->library('form_validation');
    }

    public function index() {
        if ($this->session->userdata('login')) {
            header("Location:" . base_url() . "parqueador");
        }
       // $this->form_validation->set_error_delimiters('<div class="text-right panel-body"><spam class="text-danger ">', '</spam></div>');

        $this->load->view('/TemplateAdmin/header');
        $this->load->view('Login/loging');
        $this->load->view('/TemplateAdmin/footer');
    }

    public function logout() {
        $this->session->sess_destroy();
        header("location:" . base_url());
    }

}
