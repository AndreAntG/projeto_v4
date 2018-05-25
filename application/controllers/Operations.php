<?php
defined('BASEPATH') or exit('No direct script access allowed');
class operations extends MY_Controller

{
    public function __construct() {
        parent::__construct();
        $this->load->model('Operations_model');
		
	}
    
    public function transfers() {
        if ($this->input->server("REQUEST_METHOD") == "POST") {
            $jsonOutput = array(
                "status" => "ok"
			
            );
			
			$this->form_validation->set_rules('acc_id1', 'Account Origin', 'required');
            $this->form_validation->set_rules('value', 'Value', 'required');
    	
			 if ($this->form_validation->run() == FALSE) {
                if (validation_errors() != "") {
                    $jsonOutput["status"] = "error";
                    $jsonOutput["message"] = validation_errors();
                }
           	} else {
				 
				$id1 = $_SESSION['userID'];
				$value = $_POST['value'];
				
				$balanceATM = $this->Operations_model->getBalanceATM($id1); 
				 
				if( $balanceATM >= $value) {
				
					 $data = array(
                    'acc_id1' => $id1,
					'acc_id2' => $_POST['acc_id1'],
					'value' => $_POST['value'],
					'desc' => $_POST['desc']
                );
                            
                $this->Operations_model->transfers($data);   
					
				$balance = array(
				'balance' => $balanceATM - $value
				);
					
				$this->Operations_model->transfersUpdate($balance, $id1);
				 
				echo json_encode($jsonOutput);
					
				} else {
					return false;
				}
               

            }
				} else {
		
			$this->page = 'transfer_view';
			$this->layoutClient();
    		}
		}
}