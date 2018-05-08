<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Operations_model extends CI_Model
{   
	var $table_operations = 'operations';
	var $table_accounts = 'accounts';
    
	public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function transfers($data) {
    
    	$this->db->insert($this->table_operations, $data);
    	return $this->db->insert_id();
        
        
    }
	
	public function getBalanceATM($id){
		$this->db->select("balance");
        $this->db->from("accounts");
        $this->db->where('id' , $id);
    
		return $this->db->get()->row()->balance;
				 
	}
	
	public function transfersUpdate($data, $id) {
		$this->db->insert($this->table_accounts, $data);
		$this->db->where('id', $id);
    	return $this->db->insert_id();
		
	}
	
    public function getAllOperations($id) {
        
        $this->db->select('*');
        $this->db->from('operations');
        $this->db->where('id', $id);
        $query = $this->db->get();
       
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return $query->result();
        }
    }


}