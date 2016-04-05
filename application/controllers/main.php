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

	public function daftar()
	{
		$data['data'] = "daftar";
		$this->load->view('masuk', $data);
	}

	public function forgot()
	{
		$this->load->view('forgot');
	}

	public function login_auth()
	{
		$this->Model1->auth();
	}

}

/* End of file main.php */
/* Location: ./application/controllers/main.php */