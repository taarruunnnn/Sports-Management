
<?php
defined('BASEPATH')or exit('Not Allowed');
//session_start(); //we need to start session in order to access it through CI

Class User_Authentication extends MX_Controller {

		public function __construct() {
		parent::__construct();
		 $this->load->helper(array('form', 'url'));       
		// Load form helper library
		//$this->load->helper('form');
		
		// Load form validation library
		$this->load->library('form_validation');
		
		// Load session library
		$this->load->library('session');
		
		// Load database
		//$this->load->model('Login');
		}
		public function dashboard()
		{
			$this->load->view('admin_page');
		}
		// Show login page
		public function index() {
			//echo "dhana";exit;
		$this->load->view('login_form');
		}
		
		// Show registration page
		public function user_registration_show() {
		$this->load->view('registration_form');
		}
		
		// Validate and store registration data in database
		public function new_user_registration() {
		
		// Check validation for user input in SignUp form
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('email_value', 'Email', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
		if ($this->form_validation->run() == FALSE) {
		$this->load->view('registration_form');
		} else {
		$data = array(
		'user_name' => $this->input->post('username'),
		'user_email' => $this->input->post('email_value'),
		'user_password' => $this->input->post('password')
		);
		$this->load->model('Login');
		$result = $this->Login->registration_insert($data);
		if ($result == TRUE) {
		$data['message_display'] = 'Registration Successfully !';
		$this->load->view('login_form', $data);
		} else {
		$data['message_display'] = 'Email already exist!';
		$this->load->view('registration_form', $data);
		}
		}
		}
		
		// Check for user login process
		public function user_login_process() {
		
		$data;
		$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
		
		if ($this->form_validation->run() == FALSE) {
		if(isset($this->session->userdata['logged_in'])){
		return redirect('Dashboard');
		}else{
		$this->load->view('login_form');
		}
		} else 
		{
		$data = array(
		'username' => $this->input->post('email'),
		'password' => $this->input->post('password')
		);
		
		$this->load->model('Login');
		$result=$this->Login->Postlogin($data);
		//print_r($result[0]['role']);exit;
		
		if ($result[0]['role']==1) 
		{
			$username = $this->input->post('email');
			$result = $this->Login->read_user_information($username);
		
			if ($result != false) 
			{
				// Add user data in session
				$session_data = array(
				'username' => $result[0]->name,
				'email' => $result[0]->email,
				);
				$messge = array('message' => 'Welcome to Dashboard','class' => 'alert alert-success fade in');
				$this->session->set_flashdata('item', $messge);
				$this->session->keep_flashdata('item',$messge);
				$this->session->set_userdata('logged_in',$session_data);
				
				$this->load->view('admin_page');
			}
			
		} 
		elseif ($result[0]['role']==2) {
			$username = $this->input->post('email');
			$result = $this->Login->read_user_information($username);
		
			if ($result != false) 
			{
				// Add user data in session
				$session_data = array(
				'username' => $result[0]->name,
				'email' => $result[0]->email,
				);
				$messge = array('message' => 'Welcome to Dashboard','class' => 'alert alert-success fade in');
				$this->session->set_flashdata('item', $messge);
				$this->session->keep_flashdata('item',$messge);
				$this->session->set_userdata('logged_in',$session_data);
				
				$this->load->view('pt_teacher');
			}
		}
		else 
		{
			$data = array(
			'error_message' => 'Invalid Username or Password'
			);
			$this->load->view('login_form', $data);
		}
		}
		}
		
		// Logout from admin page
		public function logout() {
		
		// Removing session data
		$sess_array = array(
		'email' => '',
		'name'=>''
		);
		$this->session->unset_userdata('logged_in', $sess_array);
		$data['message_display'] = 'Successfully Logout';
		$this->load->view('login_form', $data);
		}
		
		public function do_upload() { 
         $config['upload_path']   = 'assets/uploads/'; 
         $config['allowed_types'] = 'gif|jpg|png'; 
         $config['max_size']      = 100; 
         $config['max_width']     = 1024; 
         $config['max_height']    = 768;  
         $this->load->library('upload', $config);
			
         if ( ! $this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors()); 
            $this->load->view('admin_page', $error); 
         }
			
         else { 
            $data =$this->upload->data(); 
			//print_r($data);exit;
			 //$this->load->view('links');
             $this->load->view('admin_page',$data); 
         } 
      } 
}

?>

