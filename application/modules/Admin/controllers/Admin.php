<?php 
class Admin extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
       $this->load->helper('string');
        $this->load->helper(array('form', 'url')); 
        $this->load->library('session');
        $this->load->library('form_validation');
    }
    public function PTteachers()
    {   
        $this->load->model('Ptteacher');
		$data['datas'] = $this->Ptteacher->getAllData();
        $this->load->view('Admin/pt_teacher',$data);
    }
   /* public function add_PTteacher()
    {   
        //echo random_string('alnum', 10);exit;
        $this->load->view('Admin/add_PTteacher');
    }
    public function insertPTteacher()
    {
        $data;
		
		$data = array(
		'name' => $this->input->post('name'),
		'gender' => $this->input->post('gender'),
		'dob' => $this->input->post('dob'),
		'qualification' => $this->input->post('qualification'),
		'school_name' => $this->input->post('school_name'),
		'sports_house1' => $this->input->post('sports_house1'),
		'sports_house2' => $this->input->post('sports_house2'),
		'sports_house3' => $this->input->post('sports_house3'),
		'sports_house4' => $this->input->post('sports_house4'),
		'account_no' => $this->input->post('account_no'),
		'ifsc' => $this->input->post('ifsc')
		);
		//print_r($data);exit;
		$this->load->model('Ptteacher');
		$result = $this->Ptteacher->insert($data);
		if ($result == true) 
		{   
		     return redirect('Lessions');
		 }
		        
			
		else 
		{
			$data = array(
			'error_message' => 'Invalid Username or Password'
			);
			$this->load->view('login_form', $data);
		}
		
    }
    */
    public function PTCurriculum()
    {
    	$this->load->model('Lessions');
    	$result['datas']=$this->Lessions->getAllData();
    	$this->load->view('pt_teacher_curruculum',$result);
    }
//Lessins Part
    public function Lessions()
    {   
        $this->load->model('Lessions');
        $data['datas']=$this->Lessions->getAllData();
        $this->load->view('Admin/lessions',$data);
    }
   
    public function add_Lessions()
    {	$data['data']=random_string('alnum', 10);
        $this->load->view('add_lessions',$data);
    }
    public function insertLession()
    {
        $lession_type=$this->input->post('lession_type');
        
		//print_r($_FILES['video_name']['name']);exit;
        if($lession_type=='Text')
        {
        	$data = array(
			'semester' => $this->input->post('semester'),
			'section' => $this->input->post('section'),
			'title' => $this->input->post('title'),
			'description' => $this->input->post('description'),
			'lession_id' => $this->input->post('lession_id')
			);
        }
		elseif($lession_type=='Video')
		{
			$configVideo['upload_path'] = 'assets/uploads/lession/'; # check path is correct
			$configVideo['max_size'] = '102400';
			$configVideo['allowed_types'] = 'mp4'; # add video extenstion on here
			$configVideo['overwrite'] = FALSE;
			$configVideo['remove_spaces'] = TRUE;
			$video_name = $_FILES['video_name']['name'];
			$configVideo['file_name'] = $video_name;
			$this->load->library('upload', $configVideo);
			$this->upload->initialize($configVideo);
			$this->upload->do_upload('video_name');
			$data = array(
				'semester' => $this->input->post('semester'),
				'section' => $this->input->post('section'),
				'title' => $this->input->post('title'),
				'description' => $this->input->post('description'),
				'lession_id' => $this->input->post('lession_id'),
				'video_title' => $this->input->post('video_title'),
				'video_description' => $this->input->post('video_description'),
				'video'=>$_FILES['video_name']['name']
			);
		}
		else{
			$data = array(
			'semester' => $this->input->post('semester'),
			'section' => $this->input->post('section'),
			'title' => $this->input->post('title'),
			'description' => $this->input->post('description'),
			'lession_id' => $this->input->post('lession_id'),
			'video_title' => $this->input->post('video_title'),
			'video_description' => $this->input->post('video_description'),
			'video'=>$_FILES['video_name']['name']
			);
		}
		$this->load->model('Lessions');
		$result = $this->Lessions->insert($data);
		if ($result == true) 
		{   
		     $this->session->set_flashdata('item', $messge);
			 $this->session->keep_flashdata('item',$messge);   
		     return redirect('Lessions');
		 }
		        
			
		else 
		{
			$data = array(
			'error_message' => 'Error'
			);
			return redirect('PTTeacher',$data);
		}
		
		
		
    
    }
    function uploadData()
    {	
    	$this->load->model('Lessions');
        $result=$this->Lessions->uploadData();
        
		     return redirect('Lessions');
		 
    }
}