<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model1 extends CI_Model {

	public function auth()
	{
		redirect('home','refresh');
	}

}

/* End of file Model1.php */
/* Location: ./application/models/Model1.php */