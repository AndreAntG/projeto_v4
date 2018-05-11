<?php defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{


    public function __construct() {
        parent::__construct();
        $this->load->model('users_model');
    }

    public function index() {

        $this->load->view('login');

    }

    public function login() {
        if ($this->input->server("REQUEST_METHOD") == "POST") {
            $this->form_validation->set_rules("user_email", "Email", "required");
            $this->form_validation->set_rules("user_password", "Password", "required|min_length[5]");
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

            if ($this->form_validation->run() == true) {
			
                $email = $_POST['user_email'];
                $hash = md5($_POST['user_password']);   
        
        //Confima se existe um utilizador na database
                $this->db->select("*");
                $this->db->from("users");
                $this->db->where(array('email' => $email, 'hash' => $hash , 'previleges'));
                $query = $this->db->get();

                /* $user = $query->(); */

                if (Count($query->result()) == 1) {
					if($query->'previleges' == 1) {
					
                    $_SESSION['user_logged'] = true;
                    $_SESSION['email'] = $email;
                    redirect("clients/index", "refresh");	
						
					} else {
						 $_SESSION['user_logged'] = true;
                    $_SESSION['email'] = $email;
                    redirect("account/index", "refresh");	
						
					}
                } else {
                    $this->session->set_flashdata("error", "<div class='alert alert-danger'> Account dont exist!! </div>");

                }

            }
        }

        $this->load->view('login');
    }

    public function logout() {
        
        unset($_SESSION);
        session_destroy();
        redirect("user/login", "refresh");
    }

    public function update() {
        if ($this->input->server("REQUEST_METHOD") == "POST") {
            $jsonOutput = array(
                "status" => "ok"
            );

            $this->form_validation->set_rules("user_name", "Username", "required");
            $this->form_validation->set_rules("confirm_email", "Email", "required");
            $this->form_validation->set_rules("user_password", "Password", "required|min_length[5]");
            $this->form_validation->set_rules("user_password2", "Repeat Password", "required|min_length[5]|matches[user_password]");
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');


            if ($this->form_validation->run() == FALSE) {
                if (validation_errors() != "") {
                    $jsonOutput["status"] = "error";
                }
            } else {
                $user_id = $this->users_model->get_user_by_email($_POST['confirm_email']);
                if ($user_id != NULL) {
                    $user_data = array(
                        'username' => $_POST['user_name'],
                        'hash' => md5($_POST['user_password']),
                    );

                    $this->users_model->update_user($user_id, $user_data);

                    $account = array(
                        'status' => 1 
                    );
                    $this->users_model->update_status($user_id , $account);


                } else {
                    $jsonOutput["status"] = "error";
                    $jsonOutput["message"] = '<div class="alert alert-danger"> Email dont exist in DataBase. </div>';                   
                }
            } 
              
            echo json_encode($jsonOutput);        
        } else {
            $this->load->view('register');
        }
    }
}

