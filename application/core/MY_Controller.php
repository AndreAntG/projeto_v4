<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    protected $data = array();

    public function __construct()
    {
        parent::__construct();
        if (!isset($_SESSION['user_logged'])) {
            $this->session->set_flashdata('error', "<div class='alert alert-danger'> Please login first to view the page you want to access! </div>");
            redirect("user/login", "refresh");
        }
    }

    public function layout()
    {

        $this->template['header'] = $this->load->view('templates/header', $this->data, true);
        $this->template['footer'] = $this->load->view('templates/footer', $this->data, true);
        $this->template['sidebar'] = $this->load->view('templates/sidebar', $this->data, true);
        $this->template['page'] = $this->load->view($this->page, $this->data, true);
        $this->load->view('templates/main', $this->template);


    }
}

/* End of file Controllername.php */
