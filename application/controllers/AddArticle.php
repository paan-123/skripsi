<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class AddArticle extends CI_Controller{
    function __construct(){
        parent::__construct();

        $this->load->model('M_article');
        $this->load->helper(array('form', 'url'));
    }
    public function index(){
        $this->load->view('addArticle');
    }

    public function upload(){
        $config['file_name']            = 'article';
        $config['upload_path']          = 'assets/uploads';
        $config['allowed_types']        = 'jpeg|jpg|png';

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile')){
                // $error = array('error' => $this->upload->display_errors());
                header('Location: '.base_url());
        }else{
            $judul = $config['upload_path']."/".$this->upload->data('file_name');
            $this->M_article->addArticle($judul);
            header('Location: '.base_url().'page4');
        }
    }
}