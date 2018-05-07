<?php
defined('BASEPATH') or exit('No direct script access allowed');
class operations extends MY_Controller

{
     public function __construct() {
        parent::__construct();

        $this->load->model('Operations_model');
    }
    
    public function transfer() {
        $this->data['transfer'] = $this->operations_model->tranfers();
        $this->page = 'table';
        $this->layout();
        
    }



}