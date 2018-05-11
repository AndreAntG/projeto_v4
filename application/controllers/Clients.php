<?php
defined('BASEPATH') or exit('No direct script access allowed');
class clients extends MY_Controller

{
    public function __construct() {
        parent::__construct();

        $this->load->model('clients_model');
        $this->load->model('Operations_model');
    }


    public function index() {       
        $this->data['accounts'] = $this->clients_model->getAllClients();
        $this->page = 'table';
        $this->layoutClient();
    }
    
    public function client_table() {
        $this->data['accounts'] = $this->clients_model->getAllClients();
        $this->page = 'table';
        $this->layout();
    }
    
    public function ask_client(){
        
        $this->data['accounts'] = $this->clients_model->getAllClients();
        $this->page = 'ask_view';
        $this->layout();
    }

    public function edit_client($id) { 
        $this->data['operations'] = $this->Operations_model->getAllOperations($id);
        $this->data['account'] = $this->clients_model->get_client_by_id($id);
        $this->page = 'edit_view';
        $this->layout();
    }

    public function new_client() {
        $this->page = 'new_view';
        $this->layout();
    }

    public function clients_add() {
        if ($this->input->server("REQUEST_METHOD") == "POST") {
            $jsonOutput = array(
                "status" => "ok"
            );

            $this->form_validation->set_rules('client_first_name', 'First Name', 'required');
            $this->form_validation->set_rules('client_last_name', 'Last Name', 'required');
            $this->form_validation->set_rules('client_address', 'Address', 'required');
            $this->form_validation->set_rules('client_phone', 'Phone', 'required|numeric');
            $this->form_validation->set_rules('client_gender', 'Sexo', 'required');
            $this->form_validation->set_rules('client_date', 'Date', 'required');
            $this->form_validation->set_rules('client_country', 'Country', 'required');
            $this->form_validation->set_rules('client_type', 'Type', 'required');
            $this->form_validation->set_rules('client_email', 'Email', 'required');
            $this->form_validation->set_rules('client_city', 'City', 'required');
            $this->form_validation->set_rules('client_type', 'Type', 'required');
            $this->form_validation->set_rules('client_zipcode', 'ZipCode', 'required');
            $this->form_validation->set_rules('client_district', 'District', 'required');
            $this->form_validation->set_rules('account_balance', 'Balance', 'required');
            $this->form_validation->set_rules('account_type', 'Type', 'required');


            if ($this->form_validation->run() == FALSE) {
                if (validation_errors() != "") {
                    $jsonOutput["status"] = "error";
                    $jsonOutput["message"] = validation_errors();
                }
            } else {

                $config = array(
                    'protocol' => 'sendmail',
                    'mailtype' => 'html',
                    'smtp_host' => 'ssl://smtp.gmail.com',
                    'smtp_port' => '587',
                    'smtp_user' => 'bank.info.org@gmail.com',
                    'smtp_pass' => 'bank12345',
                );
                
                $mesg = $this->load->view('templates/email','',true);

                $this->load->library('email' , $config);  
                $this->email->set_mailtype("html");
                $this->email->from('bank.info.org@gmail.com', 'Bank Security');
                $this->email->to($_POST['client_email']);
                $this->email->subject('Open a Account');
                $this->email->message($mesg);
                
                if ($this->email->send()) {
                } else {
                    $jsonOutput["message"] = print_debugger();   
                }

                $data2 = array(
                    'email' => $_POST['client_email'],
                );
                            
                $inserted_id = $this->clients_model->user_add($data2);
            
                $data = array(
                    'first_name'    => $_POST['client_first_name'],
                    'last_Name'     => $_POST['client_last_name'],
                    'address'       => $_POST['client_address'],
                    'phone'         => $_POST['client_phone'],
                    'birthday'      => $_POST['client_date'],
                    'country'       => $_POST['client_country'],
                    'gender'        => $_POST['client_gender'],
                    'city'          => $_POST['client_city'],
                    'client_type'   => $_POST['client_type'],
                    'zipcode'       => $_POST['client_zipcode'],
                    'district'      => $_POST['client_district'],
                    'balance'       => $_POST['account_balance'],
                    'type'          => $_POST['account_type'],
                    'users_id'       => $inserted_id                
                );
                $this->clients_model->account_add($data);                           
            }
            echo json_encode($jsonOutput);        
        }
    }

    public function ajax_edit($id) {
        $data = $this->clients_model->get_client_by_id($id);
        
        echo json_encode($data);
    }

    public function clients_update($id) {
        if ($this->input->server("REQUEST_METHOD") == "POST") {
            $jsonOutput = array(
                "status" => "ok"
            );

            $this->form_validation->set_rules('client_first_name', 'First Name', 'required');
            $this->form_validation->set_rules('client_last_name', 'Last Name', 'required');
            $this->form_validation->set_rules('client_address', 'Address', 'required');
            $this->form_validation->set_rules('client_phone', 'Phone', 'required|numeric');
            $this->form_validation->set_rules('client_gender', 'Sexo', 'required');
            $this->form_validation->set_rules('client_date', 'Date', 'required');
            $this->form_validation->set_rules('client_country', 'Country', 'required');
            $this->form_validation->set_rules('client_type', 'Type', 'required');
            $this->form_validation->set_rules('client_email', 'Email', 'required');
            $this->form_validation->set_rules('client_city', 'City', 'required');
            $this->form_validation->set_rules('client_type', 'Type', 'required');
            $this->form_validation->set_rules('client_zipcode', 'ZipCode', 'required');
            $this->form_validation->set_rules('client_district', 'District', 'required');
            $this->form_validation->set_rules('account_balance', 'Balance', 'required');
            $this->form_validation->set_rules('account_type', 'Type', 'required');

            if ($this->form_validation->run() == FALSE) {
                if (validation_errors() != "") {
                    $jsonOutput["status"] = "error";
                    $jsonOutput["message"] = validation_errors();
                }
            }

            $data = array(
                'first_name' => $_POST['client_first_name'],
                'last_Name' => $_POST['client_last_name'],
                'address' => $_POST['client_address'],
                'phone' => $_POST['client_phone'],
                'date' => $_POST['client_date'],
                'country' => $_POST['client_country'],
                'gender' => $_POST['client_gender'],
                'city' => $_POST['client_city'],    
                'client_type' => $_POST['client_type'],
                'zipcode' => $_POST['client_zipcode'],
                'district' => $_POST['client_district'],
                'balance' => $_POST['account_balance'],
                'type' => $_POST['account_type'], 
            );

            $this->clients_model->account_update($id , $data);
                                  
            echo json_encode($jsonOutput);
        }
    }

    public function clients_delete($id) {
        $this->clients_model->delete_by_id($id);

        echo json_encode(array("status" => true));
    }
}

