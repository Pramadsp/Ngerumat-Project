<?php
(defined('BASEPATH')) OR exit('No direct script access allowed');

class Post extends MY_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('auth/Admin');
    $this->admin = $this->session->userdata('id_admin') ? $this->Admin->get_admin_id_from_username($this->session->userdata('username')) : false;
    $access = false;

    if ($this->admin) {
        if (in_array('post', $this->view_data['module_permissions'])) {
          $access = true;
        }
        if (!$access && !empty($this->view_data['menu'][0])) {
          redirect($this->view_data['menu'][0]->link);
        }elseif (empty($this->view_data['menu'][0])) {
          $this->view_data['error'] = 'true';
          $this->session->set_flashdata('message', 'error : You have no access to any module!');
          redirect('login');
        }
      
    }else {
      redirect('login');
    }
  }

  public function index()
  {
    $this->content_view = 'post';
  }

}
