<?php
class M_produk2 extends CI_Model{

    public function get_produk(){
        return $this->db->get('tb_paket');
    }
    
    public function get_data_by_id($katalog_id) {
        $this->db->where('paket_id', $katalog_id);
        return $this->db->get('tb_paket');
    }

    public function get_produk_by_harga($harga){
        return $this->db->get_where('tb_paket', array('harga >' => $harga));
    }

    public function insert_produk($data){
        $this->db->insert('tb_paket',$data);
    }

    public function update_produk($data,$id){
        $this->db->where('paket_id',$id);
        $this->db->update('tb_paket',$data);
    }

    public function hapus_produk($id){
        $this->db->where('paket_id',$id);
        $this->db->delete('tb_paket');
    }
}