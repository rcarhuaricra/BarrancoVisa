<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Your own constructor code       
    }

    public function index() {
        $this->load->view('/TemplateAdmin/header');
        $this->load->view('/TemplateAdmin/menuizquierda');
        $this->load->view('/TemplateAdmin/cabecera');
        //$menus = json_encode(MENU);
       // printf(MENU);
       
        $this->load->view('/TemplateAdmin/footer');
    }
     public function menu2() {
        $this->load->view('/TemplateAdmin/header');
        $this->load->view('/TemplateAdmin/menuizquierda');
        $this->load->view('/TemplateAdmin/cabecera');
        //$menus = json_encode(MENU);
       // printf(MENU);
       
        $this->load->view('/TemplateAdmin/footer');
    }
     public function menu3() {
        $this->load->view('/TemplateAdmin/header');
        $this->load->view('/TemplateAdmin/menuizquierda');
        $this->load->view('/TemplateAdmin/cabecera');
        //$menus = json_encode(MENU);
       // printf(MENU);
       
        $this->load->view('/TemplateAdmin/footer');
    }

}
