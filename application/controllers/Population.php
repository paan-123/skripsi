<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Population extends CI_Controller {
    public function index($page = 1)
    {
        //load model
        $this->load->model('M_population');
        //hitung total data
        $total = $this->M_population->get_total();
        //ambil data
        $limit  = 10; //menentukan limit/jumlah data yang akan ditampilkan per page
        $result = $this->M_population->get_all($limit, $page);

        //menentukan url pagination
        $url = site_url('population/index');

        //load library pagination
        $this->load->library('pagination');
        //config library pagination dengan style bootstrap css
        $config['base_url']         = $url;
        $config['total_rows']       = $total;
        $config['per_page']         = $limit;
        $config['use_page_numbers'] = true;
        $config['num_links']        = 5;
        $config['full_tag_open']    = '<ul class="pagination">';
        $config['full_tag_close']   = '</ul>';
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['first_tag_open']   = '<li class="page-item">';
        $config['first_tag_close']  = '</li>';
        $config['prev_link']        = '&laquo';
        $config['prev_tag_open']    = '<li class="page-item prev">';
        $config['prev_tag_close']   = '</li>';
        $config['next_link']        = '&raquo';
        $config['next_tag_open']    = '<li class="page-item">';
        $config['next_tag_close']   = '</li>';
        $config['last_tag_open']    = '<li class="page-item">';
        $config['last_tag_close']   = '</li>';
        $config['cur_tag_open']     = '<li class="page-item active"><a class="page-link" href="">';
        $config['cur_tag_close']    = '</a></li>';
        $config['num_tag_open']     = '<li class="page-item">';
        $config['num_tag_close']    = '</li>';
        $config['attributes']       = ['class' => 'page-link'];

        $this->pagination->initialize($config);

        $pagination = $this->pagination->create_links();

        //menyiapkan data untuk dikirim ke view
        $data['result']     = $result;
        $data['pagination'] = $pagination;

        //load view
        $this->load->view('population', $data);
    }

    public function b(){
        $result["data"] = json_encode($this->db->get("data_induk")->result());
        $this->load->view("b",$result);
    }
    public function c(){
        $data = $this->db->get("data_induk")->result();
        foreach ($data as $l => $d) {
            $data[$l]->kd_induk = '<a href=\"'.$d->kd_induk.'\">'.$d->kd_induk.'</a>';
        }
        $result["data"] =json_encode($data); 
        // print_r($result);
        // die();
        // $result["data"] = json_encode($this->db->get("data_induk")->result());
        $this->load->view("c",$result);
    }
}