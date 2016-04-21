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
	
	public function user()
	{
		$this->load->view('user/dashboard');
	}

	public function tambahkls()
	{
		$this->load->view('user/dashboard');
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

	public function tanya()
	{
		$this->load->view('user/dashboard');
	}

	public function tanyaforum()
	{
		$this->main_model->tanya();
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */