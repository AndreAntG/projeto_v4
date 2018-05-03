<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Operations_model extends CI_Model
{
    public function __construct() {
        parent::__construct();
        $this->load->database();
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