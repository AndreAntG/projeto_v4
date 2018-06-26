<?php
defined('BASEPATH') or exit('No direct script access allowed');
class account extends MY_Controller

{
    public function __construct() {
        parent::__construct();

        $this->load->model('clients_model');
        $this->load->model('Operations_model');
    }


    public function index() {       
        $this->data['account'] = $this->clients_model->get_profile_by_id($this->session->userdata('userID'));
        $this->page = 'home';
        $this->layoutClient();
    }

    public function transference() {
        $this->page = 'transference';
        $this->layoutClient();

    }
    
}