<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{	
		if (!$this->session->userdata('logged_in')) {
			$this->session->set_flashdata('login', 'Harap sign-in terlebih dahulu!');
			redirect('main/masuk','refresh');
		}else{
		$this->load->view('user/dashboard');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('main/masuk','refresh');
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */