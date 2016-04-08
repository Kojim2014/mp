<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('uid'))
	    { 
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

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */