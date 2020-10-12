<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page4 extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model("M_article");
    }
    public function index(){
        $data = $this->M_article->get_all();
        $result["data"] = $data;
        $this->load->view("page4", $result);
    }
}