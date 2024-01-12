<?php

class Kontak extends CI_Controller{
    public function index($nama='') 
    {
        $data['judul'] = 'Kontak';
        $data['nama'] = $nama;
        $this->load->view('templates/header',$data);
        $this->load->view('Kontak/index', $data);
        $this->load->view('templates/footer');
    }
    

}