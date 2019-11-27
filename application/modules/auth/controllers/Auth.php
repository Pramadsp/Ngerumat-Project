<?php
(defined('BASEPATH')) OR exit('No direct script access allowed');

class Auth extends MY_Controller{
    public function __construct(){
        parent::__construct();
            $this->load->model('Admin');
    }

    public function login()
    {
        $this->view_data['error'] ='false';
        $this->theme_view = 'login';

        if($_POST)
        {
            $_POST['username'] = $this->security->xss_clean($_POST['username']);
            $admin = $this->Admin->validate_login($_POST['username'], $_POST['password']);
            if($admin){
                $admin_id = $this->Admin->get_admin_id_from_username($_POST['username']);
                $admin_data = $this->Admin->get_admin($admin_id);
                $arraydata = array(
                    'id_admin' => (int)$admin_data->id_admin,
                    'username' => (string)$admin_data->username,
                    'logged_in' => (bool)true,
                    'id_group_admin' => (string)$admin_data->id_group_admin
                );
                $this->session->set_userdata($arraydata);
                $this->view_data['username'] = $this->session->userdata('username');
                
                if($this->input->cookie('apps_link') != ""){
                    redirect($this->input->cookie('apps_link'));
                } else{
                    redirect('');
                }
            } else{
                $this->view_data['error'] = "true";
                $this->view_data['username'] = $this->security->xss_clean($_POST['username']);
                $this->view_data['message'] = 'error:'.$this->lang->line('message_login_incorrect');
            }
        }
    }

    public function logout()
    {
        if (!empty($this->session->userdata('logged_in')) && $this->session->userdata('logged_in')===true) {
            //remove session data
            foreach ($_SESSION as $key => $value) {
                unset($_SESSION[$key]);
            }
            $CI = &get_instance();
            $CI->session->sess_destroy();
            redirect('login');
        }else {
            redirect('login');
        }
    }

}