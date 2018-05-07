<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Operations_model extends CI_Model
{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function transfers($id1 , $id2, $value) {
    
        $this->db->select('balance');
        $this->db->from('operations as o');
        $this->db->join('accounts as a', ' o.accounts_id = a.id');
        $this->db->where('a.id', $id2);
        $balance2 = $this->db->get();
        
        
        $this->db->select('balance');
        $this->db->from('operations as o');
        $this->db->join('accounts as a', ' o.accounts_id = a.id');
        $this->db->where('a.id', $id1);
        $balance1 = $this->db->get(); 
        
        if ($balance >= $value) {
            $balance2 += $value;
            $balance1 -= value;
        }
        
        
        
        
    }
    public function getAllOperations($id) {
        
        $this->db->select('*');
        $this->db->from('operations as o');
        $this->db->join('accounts as a', ' o.accounts_id = a.id');
        $this->db->where('a.id', $id);
        $query = $this->db->get();
       
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {

            return $query->result();
        }
    }


}