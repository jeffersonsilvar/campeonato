<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Participantes extends CI_Controller {

    public function index() {
        $this->load->view('template/html-datatable-header');
        $this->load->view('template/html-navigation-header');
        $this->load->view('participantes/home');
        $this->load->view('template/footer');
        $this->load->view('template/html-footer');
    }   

}
