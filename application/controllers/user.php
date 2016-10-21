<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
		$this->load->view('user/other');
	}

}

/* End of file user.php */
/* Location: ./application/controllers/user.php */