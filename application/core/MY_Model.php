<?php
(defined('BASEPATH')) OR exit('No direct script access allowed');

class MY_Model extends CI_Model{
    public function find_admin_by_id($admin_id){
        $this->db->select('id_admin');
        $this->db->select('admin');
        $this->db->select('id', $admin_id);
        return $this->db->get()->row('id_admin');
        
    }
}