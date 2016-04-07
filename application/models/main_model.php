<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model {


	public function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$this->db->select('id_users, id_lembaga, nama_lengkap, jkl, foto, username, password, email, level, cp, create_date');
		$this->db->from('users');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$this->db->limit(1);
		 
		$query = $this->db->get();
		
		if($query->num_rows() != 0)
		{
		  $result = $query->result();
		  if($result)
		  {
		    $sess_array = array();
		    foreach($result as $row)
		    {
		      if ($row->foto != '' || $row->foto != null) {
	         	$foto = "berisi";
	          }else{
	          	$foto = "default.png";
	          }
		      $sess_array = array(
		        'uid' => $row->id_users,
		        'idlem' => $row->id_lembaga,
		        'nama' => $row->nama_lengkap,
		        'kelamin' => $row->jkl,
		        'foto' => $foto,
		        'username' => $row->username,
		        'password' => $row->password,
		        'email' => $row->email,
		        'level' => $row->level,
		        'contact' => $row->cp,
		        'birthday' => $row->create_date
		      );
		      $this->session->set_userdata('logged_in', $sess_array);
		    }
		    redirect('home','refresh');
		  }
		  else
		  {
		    $this->session->set_flashdata('login', 'Harap cek kembali username dan password anda.');
		    redirect('main/masuk','refresh');
		  }
		}
		else
		{
		  $this->session->set_flashdata('login', 'Harap cek kembali username dan password anda.');
		  redirect('main/masuk','refresh');
		}
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