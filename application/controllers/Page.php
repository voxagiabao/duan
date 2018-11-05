<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('My_model');
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('login');
		
	}
	public function process()
	{
		$user=$this->input->post('username');
		$pass=md5($this->input->post('password'));

		$checklogin=$this->My_model->login($user,$pass);

		if($checklogin)
		{
			foreach($checklogin as $row); 
			$this->session->set_userdata('username',$row->username);
			$this->session->set_userdata('level',$row->level);
			if($this->session->userdata('level')=="Admin")
			{
				redirect('admin/index');
			}
			elseif($this->session->userdata('level')=="Member") {
				redirect('member/index');
			}
		}
		else 
		{
			$data['loi']="Username or Password loi!";
			$this->load->view('login',$data);
		}


	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Page/index');

	}


}

/* End of file Page.php */
/* Location: ./application/controllers/Page.php */