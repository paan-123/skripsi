<?php

class Pembelian_baru extends CI_Controller{
 
	function __construct(){
		parent::__construct();
        $this->load->database();
        $this->load->model('M_pembelianBaru');
	}
 
	function index(){
		$this->load->view('admin/pembelian_baru');
	}

    function insert(){
        $this->load->view('admin/pembelian_baru');

        if($this->input->post('save'))
		{
		    $data['sku']=$this->input->post('sku');
			$data['brand']=$this->input->post('brand');
			$data['nama_brg']=$this->input->post('nama_brg');
            // $data['kriteria']=$this->input->post('kriteria');
			$data['kode']=$this->input->post('kode');
			$data['keterangan']=$this->input->post('keterangan');
			$data['harga']=$this->input->post('harga');
            $data['stock']=$this->input->post('stock');
			$data['leadtime']=$this->input->post('leadtime');
			$data['biaya_pemesanan']=$this->input->post('biaya_pemesanan');
			$data['harga_beli']=$this->input->post('harga_beli');
			$user=$this->Home_model->saverecords($data);

			if($user>0){
			        echo "Records Saved Successfully";
			}
			else{
					echo "Insert error !";
			}
		}
    }
}