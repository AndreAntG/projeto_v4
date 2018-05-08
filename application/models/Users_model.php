<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_Model
{	
    public function getClients() {
        
        $query = $this->db->get("users");
        return $query->result();
    }
	
	

    public function getClientsByID($Client_ID = null) {
        
        if ($Client_ID != null) :

        $this->db->where('id', $Client_ID);        
        $this->db->limit(1);
        
        $query = $this->db->get("users");       
        return $query->row();
        endif;
    }
	
	public function get_user_by_previleges() { 
		$this->db->select('previleges');
		$this->db->from('users');
		
	
	}

    public function get_user_by_email($email) {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('email', $email);

        $query = $this->db->get();       

        $row = $query->row();
    
        if (isset($row)) {
            return $row->id;
        }

        return NULL;
    }

    public function update_status($id, $data) { 
        $this->db->where('users_id', $id); 
        $this->db->update('accounts', $data);
        
        if ($this->db->affected_rows() >= 0) {
            return TRUE;
        } 

        return FALSE; 
    } 
        

    public function update_user($id, $data) {
        $this->db->where('id', $id);  
        $this->db->update('users', $data);
        
        
        if ($this->db->affected_rows() >= 0) {
            return TRUE;
        } 

        return FALSE; 
    } 
}

