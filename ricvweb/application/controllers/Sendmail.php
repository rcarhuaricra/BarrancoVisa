<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sendmail extends CI_Controller {

    public function index() {
        $this->load->library('form_validation');
        if ($this->input->is_ajax_request()) {
            $this->form_validation->set_error_delimiters('<dt>', '</dt>');
            $this->form_validation->set_rules('name', 'Nombres', 'trim|required|strip_tags');
            $this->form_validation->set_rules('telefono', 'Teléfono', 'trim|required|numeric|is_natural_no_zero|min_length[6]|strip_tags');
            $this->form_validation->set_rules('email', 'E-mail', 'trim|required|valid_email');
            $this->form_validation->set_rules('asunto', 'Asunto', 'trim|required');
            $this->form_validation->set_rules('message', 'Mensaje', 'trim|required');
            if ($this->form_validation->run() == TRUE) {
                $datos['mensaje'] = $this->input->post();
                $this->load->library('email');
                $this->email->from('replyto@ricv.pe', 'Contacto de RICV.PE');
                $this->email->to('ricv.sistemas@gmail.com');
                $this->email->subject('Contacto desde la mi Web');
                $this->email->message($this->load->view('pages/mensaje', $datos, TRUE));
                $this->email->set_mailtype('html');
                if ($this->email->send()) {
                    echo "exito";
                } else {
                    echo "error";
                }
            } else {
                $respuestas['name'] = form_error('name');
                $respuestas['telefono'] = form_error('telefono');
                $respuestas['email'] = form_error('email');
                $respuestas['asunto'] = form_error('asunto');
                $respuestas['message'] = form_error('message');
                echo json_encode($respuestas);
            }
        } else {
            show_404();
        }
    }
    public function llamar() {
        $this->load->library('form_validation');
        if ($this->input->is_ajax_request()) {
            $this->form_validation->set_error_delimiters('<dt>', '</dt>');
            $this->form_validation->set_rules('name', 'Nombres', 'trim|required|strip_tags');
            $this->form_validation->set_rules('telefono', 'Teléfono', 'trim|required|numeric|is_natural_no_zero|min_length[6]|strip_tags');
            if ($this->form_validation->run() == TRUE) {
                $datos['mensaje'] = $this->input->post();
                $this->load->library('email');
                $this->email->from('replyto@ricv.pe', 'Contacto de RICV.PE');
                $this->email->to('ricv.sistemas@gmail.com');
                $this->email->subject('Contacto desde la mi Web');
                $this->email->message($this->load->view('pages/llamada', $datos, TRUE));
                $this->email->set_mailtype('html');
                if ($this->email->send()) {
                    echo "exito";
                } else {
                    echo "error";
                }
            } else {
                $respuestas['name'] = form_error('name');
                $respuestas['telefono'] = form_error('telefono');
                echo json_encode($respuestas);
            }
        } else {
            show_404();
        }
    }

}
