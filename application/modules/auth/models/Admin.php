<?php
(defined('BASEPATH')) OR exit('No direct script access allowed');

class Admin extends MY_Model {

    /*public $password = false;

    public function getSalt()
    {
        $charset = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789/\\][{}\'";:?.>,<!@#$%^&*()-_=+|';
        $randStringLen = 32;

        $randString = '';
        for ($i = 0; $i < $randStringLen; $i++){
            $randString .= $charset[mt_rand(0, strlen($charset)- 1)];
        }
        return $randString;
    }

    public function hash_password($password)
    {
        $salt = bin2hex($this->getSalt());
        $hash = hash('sha256', $salt . $password);

        return $salt . $hash;
    }

    private function validate_password($password, $hash)
    {
        $salt = substr($hash, 0, 64);
        $hash = substr($hash, 64, 64);

        $password_hash = hash('sha256', $salt, $password);
        return $password_hash == $hash;
    }

    public function validate_login($username, $password)
    {
        $this->db->select('password');
        $this->db->from('admin');
        $this->db->where('username', $username);
        $hash = $this->db->get()->row('password');

        return $this->validate_password($password, $hash);
    }*/
    
    public $password = false;
    
    public function getSalt()
    {
        $charset = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789/\\][{}\'";:?.>,<!@#$%^&*()-_=+|';
        $randStringLen = 32;

        $randString = '';
        for ($i = 0; $i < $randStringLen; $i++) {
            $randString .= $charset[mt_rand(0, strlen($charset) - 1)];
        }

        return $randString;
    }
    
    public function hash_password($password)
    {
        $salt = bin2hex($this->getSalt());
        $hash = hash('sha256', $salt . $password);

        return $salt . $hash;
    }
    
  /**
   * validate_password function
   *
   * @access private 
   * @mixed $password
   * @mixed $hash
   * @return $password_hash
   */    
   private function validate_password($password, $hash)
   {
        $salt = substr($hash, 0, 64);
        $hash = substr($hash, 64, 64);

        $password_hash = hash('sha256', $salt . $password);

        return $password_hash == $hash;
   }
    
    
  /**
   * validate_login function
   * 
   * @access public
   * @param mixed $username
   * @param mixed $password
   * @return bool true on success, false on failure
   */ 
   public function validate_login($username, $password) 
   {
   
        $this->db->select('password');
        $this->db->from('admin');
        $this->db->where('username', $username);
        $hash = $this->db->get()->row('password');
        
        return $this->validate_password($password, $hash);
   
   }

    public function get_admin_id_from_username($username){
        $this->db->select('id_admin');
        $this->db->from('admin');
        $this->db->where('username', $username);

        return $this->db->get()->row('id_admin');
    }

    public function get_admin($admin_id)
    {
        $this->db->from('admin');
        $this->db->where('id_admin', $admin_id);
        return $this->db->get()->row();
    }

}