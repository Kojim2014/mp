<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('uid')) { 
	    	$this->session->set_flashdata('login', 'Harap sign-in terlebih dahulu!');
	    	redirect('main/masuk','refresh');
	    }
	    $this->load->model('Main_model');
	}

	public function index()
	{	
		$this->load->view('user/dashboard');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('main/masuk','refresh');
	}

	public function kelas()
	{
		$this->load->view('user/dashboard');
	}
	
	public function forum()
	{
		$this->load->view('user/dashboard');
	}
	
	public function mkelas()
	{
		$data['kelas'] = $this->Main_model->get_kelas($this->uri->segment(3))->row_array();
		$this->load->view('user/dashboard', $data);
	}
	// public function mmateri()
	// {
	// 	$data['content'] = $this->Main_model->get_materi($this->uri->segment(4))->row_array();
	// 	$this->load->view('user/dashboard', $data);
	// }
	public function user() 
	{
		$this->load->view('user/dashboard');
	}

	public function tambahkls()
	{
		$this->load->view('user/dashboard');
	}
	public function addmateri()
	{
		$this->load->view('user/dashboard');
	}public function vmateri()
	{
		$data['title'] = $this->Main_model->get_materi($this->uri->segment(3))->row_array();
		$this->load->view('user/dashboard',$data);
	}
	public function edit_profile()
	{
		$this->load->view('user/dashboard');
	}
	public function save_editp()
	{
		$config['upload_path'] = './assets/photo/fotoprofile/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']     = '100';
		
		$this->load->library('upload', $config);

		$this->main_model->editpro();
	}

	function savekls()
	{
         $config['upload_path']          = './assets/photo/fotokelas';
         $config['allowed_types']        = 'gif|jpg|png|jpeg|bmp';
         $config['max_size']     = '100';
               

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload())
        {
                $error = array('error' => $this->upload->display_errors());
                redirect('home/tambahkls');
        }else{
                $data = array('upload_data' => $this->upload->data());
                $nama_kelas       = $this->input->post('nama');
                $foto    =$_FILES['userfile'] ['name'];
                $deskripsi 	= $this->input->post('deskripsi');
                $this->main_model->uploadkelas($nama_kelas, $foto, $deskripsi); 
                redirect('home/kelas');
        }
	}

	public function savemateri()
	{
		$this->main_model->save_materi();
	}
	
	public function tanya()
	{
		$this->load->view('user/dashboard');
	}

	public function tanyaforum()
	{
		date_default_timezone_set("Asia/Jakarta");
		$value = array(
				'title' => $this->input->post('title'),
				'content' => $this->input->post('content'),
				'creator' => $this->session->userdata('uid'),
				'created' => date("Y-m-d H:i:s"),
				'tags' => implode(',', $this->input->post('tag'))
			);
		$this->main_model->tanya($value);
	}

	public function follow()
	{
		$this->Main_model->save_follow();
		
	}
	public function unfollow()
	{
		$this->Main_model->un_follow();
		
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */