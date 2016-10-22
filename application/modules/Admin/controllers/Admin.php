<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MX_Controller {

	
	public function index()
	{
		//echo "Hai this is Dhanapal Moving From Laravel to Codeigniter";
		$this->load->view('login');
	}
	public function dhana()
	{
		echo "Hai this is Dhanapal Moving From Laravel to Codeigniter";
	}
	public function checklogin()
	{
		$input=$this->input->post();
		
		$this->load->helper('url');
		$this->load->model('Login');
		$var=$this->Login->checklogin($input);
		//echo $var;exit;
		if($var!=0)
		{
			$this->session->set_userdata('login',$input['email']);
			//$this->session->userdata('login');
			redirect('Dashboard');
		}
		else {
			redirect('/');
		}
	}
	public function dashboard()
	{
		$this->load->view('dashboard');
	}
}
