<?php

class Destinasi2 extends CI_Controller{
    public function index($nama='') 
    {
        $data['judul'] = 'Paket';
        $data['nama'] = $nama;
        $this->load->view('templates/header',$data);
        $this->load->view('destinasi2/index', $data);
        $this->load->view('templates/footer');
    }

}