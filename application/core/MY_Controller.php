<?php
(defined('BASEPATH')) OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

  public $user = False;
  
  public $core_settings = False;

  // Fungsi Tema
  protected $theme_view = 'application';
  protected $content_view = '';
  protected $view_data = [];

  public function __construct()
    {
        parent::__construct();
        $this->load->model('MY_Model');

        /* XSS Filtering */
        if (!empty($_POST)){
        $fieldList = array("password");
        $ignoreXSS = array("mail_body");
        function remove_bad_tags_from($field)
        {
          $_POST[$field] = preg_replace('/(&lt;|<)\?php(.*)(\?(&gt;|>))/imx', '[php] $2 [php]', $_POST[$field]);
                $_POST[$field] = preg_replace('/((&lt;|<)(\s*|\/)script(.*?)(&gt;|>))/imx', ' [script] ', $_POST[$field]);
                $_POST[$field] = preg_replace('/((&lt;|<)(\s*)link(.*?)\/?(&gt;|>))/imx', '[link $4 ]', $_POST[$field]);
                $_POST[$field] = preg_replace('/((&lt;|<)(\s*)(\/)(\s)style(.*?)(&gt;|>))/imx', ' [style] ', $_POST[$field]);
                $_POST[$field] = preg_replace('/((&lt;|<)(\s*)(\/)(\s)input(.*?)(&gt;|>))/imx', ' [input] ', $_POST[$field]);
                $_POST[$field] = preg_replace('/((\s*)(\/)(\s)javascript:(.*?))/imx', ' [javascript] ', $_POST[$field]);
                $_POST[$field] = preg_replace('/((\s*)(\/)(\s)(alert|confirm|console.log)(\s*?\()(.*?))/imx', ' [blocked] ', $_POST[$field]);
                $_POST[$field] = preg_replace('/((\s )(\/)(\s*)(onclick|onfocus|ondblclick|onmouseover|onmousemove|onmouseenter)(\s*?)(\=))/imx', ' [blocked] ', $_POST[$field]);
        }

        foreach ($_POST as $key => $value) {
          if (in_array($key, $fieldList)){
            remove_bad_tags_from($key);
          }elseif (!in_array($key, $ignoreXSS)){
            $_POST[$key] = $this->security->xss_clean($_POST[$key]);
          }
        }
      }
              
      if(!empty ($this->session->userdata('username'))){
          $this->access = $this->session->userdata('id_group_admin');
          $sql = $this->db->query("SELECT id_modul FROM hak_akses WHERE id_group_admin='".$this->access."'");
          $rows = $sql->result();
          $module_array = array();
          $thisAdminHasPermissions = (array) $rows;
          if (!empty($thisAdminHasPermissions)){
            foreach ($rows as $value){
                array_push($module_array, $value->id_modul);
            }
            $module_array = "'".implode("','", $module_array)."'";
          }else{
            $module_array = 0;
          }

          $sqlmenu = $this->db->query("SELECT id_modul, name, link, type, icon, sort, parent_id FROM modul WHERE id_modul in($module_array) AND TYPE='main' ORDER BY sort ASC");
          $this->view_data['menu'] = $sqlmenu->result();
          $this->view_data['module_permissions'] = array();
          foreach ($this->view_data['menu'] as $key => $value){
            array_push($this->view_data['module_permissions'], $value->link);
          }                                                       
                                        
      }
      
   } 
    

  public function _output($output)
  {
    //set default content view
    if ($this->content_view !== false && empty ($this->content_view)) {
      $this->content_view = $this->router->class . '/' . $this->router->method;
    }

    // render content view
    $yield = $this->load->view($this->content_view, $this->view_data, true);
    
    // render theme
    if ($this->theme_view) {
      echo $this->load->view('theme/'.$this->theme_view, array('yield' => $yield), true);
    }else {
      echo $yield;
    }

    echo $output;
  }

}
