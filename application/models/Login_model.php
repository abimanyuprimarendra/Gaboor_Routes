<?php
class Login_model extends CI_Model{
    public function cek_admin($u, $p){
        return $this->db->get_where('tbl_admin', array('admin_username'=>$u, 'admin_password'=>$p));
    }
}
?>