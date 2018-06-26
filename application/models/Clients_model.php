<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Clients_model extends CI_Model
{
    var $table_accounts = 'accounts';
    var $table_users = 'users';
    var $table_profile = 'profile';

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getAllClients() {
        $query = $this->db->get("profile");

        return $query->result();
    }

    public function statusClient($status = null, $id = null) {
      
        if ($status != null && $id != null) : 
        $this->db->update('accounts', $status, array('id' => $id));
        endif;
    }

    public function get_profile_by_id($id) {
        $this->db->select('p.*, u.email');
        $this->db->from('profile as p');
        $this->db->join('users as u', 'u.id = p.users_id');

        $this->db->where('p.id', $id);
        $query = $this->db->get();

        return $query->row();
    }

    public function get_accounts_by_id($id) {
        $this->db->select('*');
        $this->db->from('accounts');
        $this->db->where('users_id', $id);

        $query = $this->db->get();
        return $query->result_array();
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

    public function profile_add($data) {
        $this->db->insert($this->table_profile, $data);
        return $this->db->insert_id();
    }

    public function user_add($data) {
        
        $this->db->insert($this->table_users, $data);
        return $this->db->insert_id();
    }

    public function acc_add($data) {
        $this->db->insert($this->table_accounts, $data);
        return $this->db->insert_id();
    }


    public function profile_update($id, $data) {
        
        $this->db->where('id', $id);
        $this->db->update($this->table_profile, $data);
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