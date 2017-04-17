<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Participar extends CI_Controller {
    
    public function index() {
        $this->load->view('template/html-datatable-header');
        $this->load->view('template/html-navigation-header');
        $this->load->view('participar/home');
        $this->load->view('template/footer');
        $this->load->view('template/html-footer');
    }
    
}
