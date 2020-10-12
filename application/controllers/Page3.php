<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page3 extends CI_Controller{
    public function index(){
        $data_ori = $this->db->get("data_induk")->result();
        foreach ($data_ori as $l => $d) {
            $id = $data_ori[$l]->kd_induk;
            $data[$id] = $d;
            $data[$id]->kd_induk = '<a data-target=\"#exampleModalCenter\" data-toggle=\"modal\" href=\"#exampleModalCenter\" data-id=\"'.$d->kd_induk.'\">'.$d->kd_induk.'</a>';
        }

        // $data = $this->db->get("data_induk")->result();
        // foreach ($data as $l => $d) {
        //     $data[$l]->kd_induk = '<a data-target=\"#exampleModalCenter\" data-toggle=\"modal\" href=\"#exampleModalCenter\" data-id=\"'.$d->kd_induk.'\">'.$d->kd_induk.'</a>';
        // }
        // $result["data"] =json_encode($data); 
        // echo "<pre>";
        // print_r(json_encode($data));
        // echo "</pre>";
        // die();
        $result["data"] =json_encode($data);
        $this->load->view("page3", $result);
    }
}