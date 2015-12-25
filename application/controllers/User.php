<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Muser');
	}

	public function index()
	{
		$this->load->view('form_login');
	}

	public function cek()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('pass', 'Password', 'required');
		
		if ($this->form_validation->run()==false) {
			$this->load->view('form_login');
		}
		else{
			$u=$this->input->post('username');
			$p=$this->input->post('pass');

			$cek=$this->Muser->cek($u,$p);

			if ($cek->num_rows()==1)
			{
				redirect('Home','refresh');
			}
			else
			{
				echo"<script>alert('Username/Password yang anda masukkan kurang tepat..!!');</script>";
				$this->load->view('form_login');
				return false;
			}
		}
	}


}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */