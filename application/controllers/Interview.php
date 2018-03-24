<?php

class Interview extends CI_Controller {

    

    public function index() {
        $this->load->view('interview/home');
        $this->load->view('interview/inc/header');
        $this->load->view('interview/inc/navbar');
        $this->load->view('inc/footer');
        
    }

}
