<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('uid')) {
			redirect('home','refresh');
		} 
	}

	public function index()
	{
		$this->load->view('homepage');
	}
	public function tentang()
	{
		$this->load->view('about');
	}
	public function masuk()
	{
		$data['data'] = "masuk";
		$this->load->view('masuk', $data);
	}

	public function login()
	{
		$this->main_model->login();
	}

	public function daftar()
	{
		$data['data'] = "daftar";
		$this->load->view('masuk', $data);
	}

	public function register()
	{
		$this->main_model->daftar();
	}

	public function forgot()
	{
		$this->load->view('forgot');
	}
	
	
	 

}

/* End of file main.php */
/* Location: ./application/controllers/main.php */