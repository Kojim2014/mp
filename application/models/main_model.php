<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model {

	public function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$this->db->select('id_users, nama_lengkap, jkl, foto, username, password, email, level, cp, create_date');
		$this->db->from('users');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		// $this->db->where('status', '1');
		$this->db->limit(1);
		 
		$query = $this->db->get();
		
		if($query->num_rows() != 0)
		{
		  $result = $query->result();
		  if($result)
		  {
		    foreach($result as $row)
		    {
		      if ($row->foto != '' || $row->foto != null) {
	         	$foto = $row->foto;
	          }else{
	          	$foto = "default.png";
	          }

	          $ultah = explode(" ", $row->create_date);
	          $date = explode("-", $ultah[0]);
	          $tgl = new DateTime();
	          $tgl->setDate($date[0], $date[1], $date[2]);
	          $birthday = $tgl->format('M').", ".$date[0];

		      $sess_array = array(
		        'uid' => $row->id_users,
		        'nama' => $row->nama_lengkap,
		        'kelamin' => $row->jkl,
		        'foto' => $foto,
		        'username' => $row->username,
		        'password' => $row->password,
		        'email' => $row->email,
		        'level' => $row->level,
		        'contact' => $row->cp,
		        'birthday' => $birthday
		      );
		      $this->session->set_userdata($sess_array);
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
		$insert = array(
			'nama_lengkap' => $this->input->post('fname')." ".$this->input->post('lname'),
			'jkl' => $this->input->post('jekel'),
			'foto'=> 'guru.png',
			'username' => $this->input->post('uname'),
			'password' => $this->input->post('pword'),
			'email' => $this->input->post('email'),
			'level' => 'siswa',
			'cp' => $this->input->post('conpers'),
			'status' => '1'
			);
		$create = $this->db->insert('users', $insert);
		if ($create == false) {
			$this->session->set_flashdata('regret', "Something went wrong.");
			redirect('main/daftar','refresh');
		}else{
			$this->session->set_flashdata('login', "Pendaftaran berhasil! Silahkan login.");
			redirect('main/masuk','refresh');
		}
	}

	function uploadkelas($nama_kelas,$foto, $deskripsi){
		// $simpan=$this->db->query("INSERT INTO `dbmp`.`kelas` (`id_kelas`, `id_lembaga`, `nama_kelas`, `foto`, `deskripsi`) VALUES (NULL, NULL, '$nama_kelas', '$foto', '$deskripsi')");
		$val = array(
				'id_kelas' => NULL,
				'nama_kelas' => $nama_kelas,
				'foto' => $foto,
				'deskripsi' => $deskripsi
				);
		$this->db->insert('kelas', $val);
	    return site_url('home/vmateri'); 
	}
public function uploadmateri($id_kelas,$title, $content,$ukuranfile,$creator,$created,$updated){
		// $simpan=$this->db->query("INSERT INTO `dbmp`.`kelas` (`id_kelas`, `id_lembaga`, `nama_kelas`, `foto`, `deskripsi`) VALUES (NULL, NULL, '$nama_kelas', '$foto', '$deskripsi')");
		$val = array(
				
				'id_kelas' => $id_kelas,
				'title' => $title,
				'content' => $content,
				'ukuranfile' => $ukuranfile,
				'creator' => $creator,
				'created' => $created,
				'updated' => $updated
				);
		$this->db->insert('materi', $val);
	    return redirect('home/mkelas/'.$this->input->post('id_kelas'),'refresh');
	}

	public function tanya($value)
	{
		$this->db->insert('forum', $value);
		redirect('home/forum','refresh');
		// foreach ($value as $data) {
		// 	echo $data."<br>";
		// }
	}
	public function save_materi() 
	{
		$save_data = array(
				'id_kelas'	=> $this->input->post('id_kelas'),
				'title'	=> $this->input->post('title'),
				'content'			=> $this->input->post('content'),
				'creator'			=> $this->input->post('creator'),
				'created'			=> $this->input->post('created'),
				'updated'			=> $this->input->post('updated')
				
			);

		$save = $this->db->insert('materi', $save_data);
		redirect('home/mkelas/'.$this->input->post('id_kelas'),'refresh');
	}

	public function editpro()
	{
		try {
			if ( !$this->upload->do_upload()){
			$error = array('error' => $this->upload->display_errors());
			print_r($error);
			}else{
				$data = $this->upload->data();
				$e = array(
				        'nama' => $this->input->post('nama_lengkap'),
				        'foto' => $_FILES['userfile']['name'],
				        'username' => $this->input->post('username'),
				        'password' => $this->input->post('password'),
				        'email' => $this->input->post('email'),
				        'contact' => $this->input->post('cp')
					);
				$update = array(
						'nama_lengkap' => $e['nama'],
						'foto' => $data['file_name'],
						'username' => $e['username'],
						'password' => $e['password'],
						'email' => $e['email'],
						'cp' => $e['contact']
					);

				$this->db->where('id_users', $this->session->userdata('uid'));
				$cek = $this->db->update('users', $update);
			
				if($cek) {
					$this->session->set_userdata($e);
					redirect('home','refresh');
				}
				else {
					echo "Gagal";
				}
			}
		}catch (Exception $e) {
			echo "<script type='text/javasript'>alert('Batal Upload')</script>";
			redirect('home','refresh');
		}
	}

	public function get_kelas($id = NULL)
	{ 
		$this->db->where('id_kelas', $id);
		return $this->db->get('kelas');
	}
	public function get_materi($id = NULL)
	{ 
		$this->db->where('id_materi', $id);
		return $this->db->get('materi');
	}
	public function save_follow()
	{
			$save_data = array(
				// 'id_kelas'	=> $this->input->post($this->uri->segment(3)),
				'id_kelas'	=> $this->input->post('id'),
				'id_user'	=> $this->session->userdata('uid')
			);

		 $save =  $this->db->insert('gabung', $save_data);
		// redirect('home/mkelas/'.$this->input->post('id_kelas'),'refresh');
		print_r($save_data);
	}
		public function un_follow()
	{
			$save_data = array(
				// 'id_kelas'	=> $this->input->post($this->uri->segment(3)),
				'id_kelas'	=> $this->input->post('id'),
				'id_user'	=> $this->session->userdata('uid')
			);

		 $save =  $this->db->delete('gabung', $save_data);
		// redirect('home/mkelas/'.$this->input->post('id_kelas'),'refresh');
		print_r($save_data);
	}
}

/* End of file main_model.php */
/* Location: ./application/models/main_model.php */