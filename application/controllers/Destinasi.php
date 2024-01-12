<?php

class Destinasi extends CI_Controller {
    public function index($nama='') 
    {
        $this->load->model('M_produk'); // Memuat model M_produk

        $data['judul'] = 'Tour';
        $data['nama'] = $nama;

        // Mengambil data produk dari model
        $data['produk'] = $this->M_produk->get_produk()->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('destinasi/index', $data);
        $this->load->view('templates/footer');
    }
}
