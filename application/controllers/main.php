<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

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
	public function ftanya()
	{
		$this->load->view('user/tanya');
	}
	public function edit_profile()
	{
		$this->load->view('user/edit');
	}
	public function tambahkls()
	{

		$this->load->view('user/addkelas');
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
                        redirect('main/tambahkls');
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        $nama_kelas       = $this->input->post('nama');
                        $foto    =$_FILES['userfile'] ['name'];
                        $deskripsi 	= $this->input->post('deskripsi');
                        $this->main_model->uploadkelas($nama_kelas, $foto, $deskripsi); 
                        redirect('main/kelaspel');


                }
	}
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */