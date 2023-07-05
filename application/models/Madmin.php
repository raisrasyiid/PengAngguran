<?php 

class Madmin extends CI_Model{

    // cek login admin
    public function cek_login($u, $p){
        $q = $this->db->get_where('tbl_admin', array('userName'=>$u, 'password'=>$p));
        return $q;
    }

    public function get_all_data($table) {
        $q = $this->db->get($table);
        return $q;
    }

    public function insert($table, $data) {
        $this->db->insert($table, $data);
    }

    public function get_by_id($table, $id) {
        return $this->db->get_where($table, $id);
    }

    public function update($table, $data, $pk, $id){
        $this->db->where($pk, $id);
        $this->db->update($table, $data);
    }

    public function delete($table, $id, $val){
        $this->db->delete($table, array($id => $val));
    }

    public function cek_login_member($u, $p){
        $q = $this->db->get_where('tbl_member', array('username'=>$u, 'password'=>$p, 'statusAktif'=>'Y'));
        return $q;
    }

    // public function join2table(){
    //     $this->db->select('*');
    //     $this->db->from('tbl_produk');
    //     $this->db->join('tbl_toko','tbl_toko.idToko = tbl_produk.idToko');      
    //     $query = $this->db->get();
    //     return $query;
    //  }

    public function join($table, $tbljoin, $join){
        $this->db->join($tbljoin, $join);
        return $this->db->get($table);
    }
}
?>