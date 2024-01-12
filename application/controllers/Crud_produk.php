<?php
ob_start();
class Crud_produk extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('M_produk');
    }

    public function index(){
        $data['produk'] = $this->M_produk->get_produk()->result_array();
        $this->load->view('admin/produk/katalog', $data);
    }

    public function tambah_produk(){
        $this->load->view('admin/produk/form_tambah');
    }

    public function aksi_simpan(){
        $destinasi = $this->input->post('destinasi');
        $keterangan = $this->input->post('keterangan');
        $harga = $this->input->post('harga');
        $foto = $this->input->post('foto');
        $data = array(
            'destinasi' => $destinasi,
            'keterangan' => $keterangan,
            'harga' => $harga,
            'foto' => $foto
        );
        $this->M_produk->insert_produk($data);
        if($this->db->affected_rows()){
            redirect('Crud_produk');
        } else {
            redirect('Crud_produk/tambah_produk');
        }
    }

    public function edit($katalog_id){
        $data['produk'] = $this->M_produk->get_data_by_id($katalog_id)->row_array();
        $this->load->view('admin/produk/form_edit', $data);
    }    

    public function aksi_edit(){
        $katalog_id = $this->input->post('katalog_id');
        $destinasi = $this->input->post('destinasi');
        $keterangan = $this->input->post('keterangan');
        $harga = $this->input->post('harga');
        $foto = $this->input->post('foto');
        $data = array(
            'destinasi' => $destinasi,
            'keterangan' => $keterangan,
            'harga' => $harga,
            'foto' => $foto
        );
        $this->M_produk->update_produk($data, $katalog_id);
        if($this->db->affected_rows()){
            redirect('Crud_produk'); 
        } else {
            redirect('Crud_produk/edit/'.$katalog_id);
        }
    }

    public function hapus($katalog_id){
        $this->M_produk->hapus_produk($katalog_id);
        if($this->db->affected_rows()){
            redirect('crud_produk');
        } else {
            echo "Data gagal dihapus";
        }
    }
}
