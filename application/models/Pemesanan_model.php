<?php

class Pemesanan_model extends CI_model {
    public function getAllPemesanan()
    {
        return $this->db->get('pemesanan')->result_array();
    }

    public function tambahDataPemesanan()
    {
        $data = [
            "nama" => $this->input->post('nama',true),
            "email" => $this->input->post('email',true),
            "paket" => $this->input->post('paket',true),
            "NoHP" => $this->input->post('NoHp',true),
        ];

        $this->db->insert('pemesanan', $data);
    }

    public function hapusDataPemesanan($id)
    {
        $this->db->delete('pemesanan',['id' => $id]);
    }

    public function getPemesananById($id)
    {
        return $this->db->get_where('pemesanan', ['id' => $id])->row_array();

    }

    public function ubahDataPemesanan()
    {
        $data = [
            "nama" => $this->input->post('nama',true),
            "email" => $this->input->post('email',true),
            "paket" => $this->input->post('paket',true),
            "NoHP" => $this->input->post('NoHp',true),
        ];

        $this->db->where('id',$this->input->post('id'));
        $this->db->update('pemesanan', $data);
    }
}