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
        $this->data['accounts'] = $this->clients_model->getAllClients();
        $this->page = 'transference';
        $this->layoutClient();
    }
    
}