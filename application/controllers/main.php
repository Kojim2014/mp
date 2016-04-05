<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->view('homepage');
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

	public function user()
	{
		$this->load->view('user/member');
	}
	public function diskusi()
	{
		$this->load->view('user/forum');
	}
	public function kelaspel()
	{
		$this->load->view('user/kelas');
	}

}

/* End of file main.php */
/* Location: ./application/controllers/main.php */