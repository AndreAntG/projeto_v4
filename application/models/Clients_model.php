<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Clients_model extends CI_Model
{
    var $table_accounts = 'accounts';
    var $table_users = 'users';

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getAllClients() {
        $query = $this->db->get("accounts");

        return $query->result();
    }

    public function statusClient($status = null, $id = null) {
      
        if ($status != null && $id != null) : 
        $this->db->update('accounts', $status, array('id' => $id));
        endif;
    }

    public function get_client_by_id($id) {
        $this->db->select('a.*, u.email');
        $this->db->from('accounts as a');
        $this->db->join('users as u', 'u.id = a.users_id');

        $this->db->where('a.id', $id);
        $query = $this->db->get();

        return $query->row();
    }
    public function get_email_by_id($id) {
       
        $this->db->select('email');
        $this->db->from($this->table_users);
        $this->db->where('id', $id);

        $query = $this->db->get();
        foreach ($query->result() as $row) { 
            return $row->email;
        }   
    }

    public function get_type_by_id($id) {
        
        $this->db->select('type');
        $this->db->from($this->table_accounts);
        $this->db->where('id', $id);

        $query = $this->db->get();
        foreach ($query->result() as $row) { 
            return $row->user_email;
        }    
    }

    public function account_add($data) {
        $this->db->insert($this->table_accounts, $data);
        return $this->db->insert_id();
    }

    public function user_add($data) {
        
        $this->db->insert($this->table_users, $data);
        return $this->db->insert_id();
    }


    public function account_update($where, $data) {
        
        $this->db->where('id', $where);
        $this->db->update($this->table_accounts, $data);
        return $this->db->affected_rows();
    }

    public function user_update($where, $data) {
        
        $this->db->where('id', $where);
        $this->db->update($this->table_users, $data);
        return $this->db->affected_rows();
    }


    public function delete_by_id($id) {
        $this->db->where('id', $id);
        $this->db->delete($this->table_accounts);
    }
}