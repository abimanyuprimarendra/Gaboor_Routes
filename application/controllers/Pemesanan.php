<?php

class Pemesanan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pemesanan_model');
        $this->load->library('form_validation');
    }

  
    public function index()
    {
        $data['judul'] = 'Paket Pemasanan';
        $data['pemesanan'] = $this->Pemesanan_model->getAllPemesanan();
        $this->load->view('templates/header',$data );
        $this->load->view('pemesanan/index',$data);
        $this->load->view('templates/footer');

    }

    public function tambah(){
        $data['judul'] = 'Form Tambah Pemesanan';
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('NoHp','NOHP','required|numeric');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        
        if($this->form_validation->run() == FALSE ){
            $this->load->view('templates/header',$data);
            $this->load->view('pemesanan/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Pemesanan_model->TambahDataPemesanan();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('pemesanan');

        }
    }

    public function hapus($id)
    {
        $this->Pemesanan_model->hapusDataPemesanan($id);
        $this->session->set_flashdata('flash','Dihapus');
        redirect('pemesanan');
    }
    
    public function detail($id)
    {
        $data['judul'] = 'Detail Data Pemesanan';
        $data['pemesanan'] = $this->Pemesanan_model->getPemesananById($id);
        $this->load->view('templates/header',$data);
        $this->load->view('pemesanan/detail');
        $this->load->view('templates/footer');
    }

    public function ubah($id){
        $data['judul'] = 'Form Ubah Pemesanan';
        $data['pemesanan'] = $this->Pemesanan_model->getPemesananById($id);
        $data['paket'] = ['Explore Nusantara : Rp.4.500.000,-','Ekspedisi Jawa : Rp.7.499.000,-','Metropolitan Harmoni : Rp.6.799.000,-','Urban Adventure : Rp.2.200.000,-'];
       

        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('NoHp','NOHP','required|numeric');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        
        if($this->form_validation->run() == FALSE ){
            $this->load->view('templates/header',$data);
            $this->load->view('pemesanan/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Pemesanan_model->ubahDataPemesanan();
            $this->session->set_flashdata('flash','Diubah');
            redirect('pemesanan');

        }
    }
}