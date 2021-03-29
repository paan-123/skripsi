<?php
class Login extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('login_model');
  }
 
  function index(){
    $this->load->view('admin/index');
  }
 
  function auth(){
    $username  = $this->input->post('username',TRUE);
    $password = $this->input->post('password',TRUE);
    $validate = $this->login_model->validate($username,$password);
    if($validate->num_rows() > 0){
        $data  = $validate->row_array();
        $name  = $data['username'];
        $level = $data['user_level'];
        $sesdata = array(
            'username'  => $name,
            'level'     => $level,
            'logged_in' => TRUE
        );
        $this->session->set_userdata($sesdata);
        // access login for manager
        if($level === '1'){
            
            redirect('page');
 
        // access login for admin
        }elseif($level === '2'){

            redirect('page/admin');

        }else{
            
        }
    }else{
        echo $this->session->set_flashdata('msg','Username or Password is Wrong');
        redirect('');
    }
  }
 
  function logout(){
      $this->session->sess_destroy();
      redirect('login');
  }
 
}