<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model {


	public function login()
	{
		redirect('home','refresh');
	}
	
	public function daftar()
	{
		$data = array(
			'nama_lengkap' => $this->input->post('fname')." ".$this->input->post('lname'),
			'jkl' => $this->input->post('jekel'),
			'username' => $this->input->post('uname'),
			'password' => $this->input->post('pword'),
			'email' => $this->input->post('email'),
			'level' => 'siswa',
			'cp' => $this->input->post('conpers'),
			'status' => '1'
			);
		$register = $this->db->insert('users', $data);
		if ($register == true) {
			$this->session->set_flashdata('reg_ret', "Pendaftaran Berhasil!");
		}else {
			$this->session->set_flashdata('reg_ret', "Pendaftaran Gagal!");
		}
		redirect('main/masuk','refresh');
	}

}

/* End of file main_model.php */
/* Location: ./application/models/main_model.php */