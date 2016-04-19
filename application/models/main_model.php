<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model {


	public function login()
	{
		redirect('home','refresh');
	} 
	
 function savekls()
	{
		$save_data = array('nama_kelas' => $this->input->post('nama'),
							'foto' => $this->input->post('foto'),
							'deskripsi' => $this->input->post('deskripsi') );
		$this->db->set('create_date', 'NOW()', FALSE);
		$save = $this->db->insert('kelas', $save_data);
		return $save;
	}
function uploadkelas($nama_kelas,$foto, $deskripsi){
	// $simpan=$this->db->query("INSERT INTO `dbmp`.`kelas` (`id_kelas`, `id_lembaga`, `nama_kelas`, `foto`, `deskripsi`) VALUES (NULL, NULL, '$nama_kelas', '$foto', '$deskripsi')");
	$val = array(
			'id_kelas' => NULL,
			'id_lembaga' => NULL,
			'nama_kelas' => $nama_kelas,
			'foto' => $foto,
			'deskripsi' => $deskripsi
			);
	$this->db->insert('kelas', $val);
    return site_url('home/kelas'); 
}
}

/* End of file main_model.php */
/* Location: ./application/models/main_model.php */