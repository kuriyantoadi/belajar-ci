<?php

class M_buku extends CI_Model{

  //tampil buku
  function tampil_data(){
    $tampil = $this->db->get('tb_buku')->result();
    return $tampil;
  }

  //tambah $buku
  function tambah_buku($input_buku){
    $this->db->insert('tb_buku',$input_buku);
  }

  //edit
  function cari_data($data_kode){
    $this->db->where($data_kode);
    $hasil=$this->db->get('tb_buku')->result();
    return $hasil;
  }

  function edit_data($data_kode,$data_buku){
    $this->db->where($data_kode);
    $this->db->update('tb_buku',$data_buku);
  }

  //hapus buku
  function hapus_data($data_kode){
    $this->db->where($data_kode);
    $this->db->delete('tb_buku');
  }
}


 ?>
