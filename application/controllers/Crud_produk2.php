<?php
ob_start();
class Crud_produk extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('M_produk2');
    }

    public function index(){
        $data['produk'] = $this->M_produk2->get_produk()->result_array();
        $this->load->view('admin/produk2/katalog2', $data);
    }

    public function tambah_produk(){
        $this->load->view('admin/produk2/form_tambah2');
    }

    public function aksi_simpan(){
        $paket_destinasi = $this->input->post('paket_destinasi');
        $paket_keterangan = $this->input->post('paket_keterangan');
        $paket_harga = $this->input->post('paket_harga');
        $paket_foto = $this->input->post('paket_foto');
        $data = array(
            'paket_destinasi' => $paket_destinasi,
            'paket_keterangan' => $paket_keterangan,
            'paket_harga' => $paket_harga,
            'paket_foto' => $paket_foto
        );
        $this->M_produk2->insert_produk($data);
        if($this->db->affected_rows()){
            redirect('Crud_produk2');
        } else {
            redirect('Crud_produk2/tambah_produk2');
        }
    }

    public function edit($paket_id){
        $data['produk'] = $this->M_produk2->get_data_by_id($paket_id)->row_array();
        $this->load->view('admin/produk2/form_edit2', $data);
    }    

    public function aksi_edit(){
        $paket_destinasi = $this->input->post('paket_destinasi');
        $paket_keterangan = $this->input->post('paket_keterangan');
        $paket_harga = $this->input->post('paket_harga');
        $paket_foto = $this->input->post('paket_foto');
        $data = array(
            'paket_destinasi' => $paket_destinasi,
            'paket_keterangan' => $paket_keterangan,
            'paket_harga' => $paket_harga,
            'paket_foto' => $paket_foto
        );
        $this->M_produk2->update_produk($data, $paket_id);
        if($this->db->affected_rows()){
            redirect('Crud_produk2'); 
        } else {
            redirect('Crud_produk2/edit/'.$paket_id);
        }
    }

    public function hapus($paket_id){
        $this->M_produk2->hapus_produk($paket_id);
        if($this->db->affected_rows()){
            redirect('crud_produk2');
        } else {
            echo "Data gagal dihapus";
        }
    }
}
