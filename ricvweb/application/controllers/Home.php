<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
        $this->load->view('template/header');

        $this->load->view('pages/home');
        $this->load->view('pages/curriculum');
        $this->load->view('pages/services');
        $this->load->view('pages/habilidades');
        $this->load->view('pages/trabajos');
        //$this->load->view('pages/post');
        $this->load->view('pages/contact');
        $this->load->view('template/foot');
    }

}
