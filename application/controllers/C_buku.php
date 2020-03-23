<?php

class C_buku extends CI_Controller {

	function __construct(){
      parent::__construct();
      $this->load->model('M_buku');
    }

	//tampil buku
 	function index(){
		$data['buku'] = $this->M_buku->tampil_data();
		$this->load->view('v_tampil', $data);
	}

//tambah $buku
	function input(){
		$this->load->view('v_tambah');
	}

	function main(){
		$this->load->view('main');
	}

	public function tambah(){
		$judul = $this->input->post('judul');
		$pengarang = $this->input->post('pengarang');
		$tahun_terbit = $this->input->post('tahun_terbit');

		$input_buku = array(
			'judul'=>$judul,
			'pengarang'=>$pengarang,
			'tahun_terbit'=>$tahun_terbit
		);

		$this->M_buku->tambah_buku($input_buku);
		redirect('C_buku');
	}

	//edit buku
	function e($kode){
		$data_kode = array('id_buku'=>$kode);
		$data['data_buku']=$this->M_buku->cari_data($data_kode);
		$this->load->view('v_edit',$data);
	}

	function edit(){
		$judul = $this->input->post('judul');
		$pengarang = $this->input->post('pengarang');
		$tahun_terbit = $this->input->post('tahun_terbit');
		$id_buku = $this->input->post('id_buku');
		$data_kode = array('id_buku'=>$id_buku);

		$data_buku = array(
			'judul'=>$judul,
			'pengarang'=>$pengarang,
			'tahun_terbit'=>$tahun_terbit
		);

		$this->M_buku->edit_data($data_kode,$data_buku);
		redirect('C_buku');
	}

	//hapus buku
	function hapus($id_buku){
		$data_kode = array('id_buku'=>$id_buku);
		$this->M_buku->hapus_data($data_kode);
		redirect('C_buku');
	}
}
?>
