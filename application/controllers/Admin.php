<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function index(){
		$this->load->view('admin/index');
	}

	function __construct(){
		parent::__construct();		
		$this->load->model('M_admin');
 
	}
 
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->M_admin->cek_login("admin",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("admin/dashboard"));
 
		}else{
			echo "Username dan password salah !";
		}
	}

	function dashboard(){
		$this->load->view('admin/dashboard');
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('admin'));
	}

}
