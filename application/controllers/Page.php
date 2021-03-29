<?php
class Page extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('logged_in') !== TRUE) {
      redirect('admin/dashboard');
    }
  }

  function index()
  {
    //Allowing akses to manager only
    if ($this->session->userdata('level') === '1') {
      $this->load->view('manager/dashboard');
    } else {
      echo "Access Denied";
    }
  }
  function admin()
  {
    //Allowing akses to admin only
    if ($this->session->userdata('level') === '2') {
      $this->load->view('admin/dashboard');
    } else {
      echo "Access Denied";
    }
  }

  function barang()
  {
    $this->load->view('manager/barang');
  }
}
