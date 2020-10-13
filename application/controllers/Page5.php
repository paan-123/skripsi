<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page5 extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model("M_rumah");
    }
    public function index(){
        $data = $this->M_rumah->get_all();
        $result["data"] = json_encode($data);
        $this->load->view("page5", $result);
    }
}