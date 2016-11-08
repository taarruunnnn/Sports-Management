<?php

class Lessions extends CI_Model
{	
   public function __construct()
    {
        parent::__construct();
       $this->load->helper('string');
        $this->load->helper(array('form', 'url')); 
        $this->load->library('session');
        $this->load->library('form_validation');
    }
    public function insert($data) {
	    $this->db->insert('lessions', $data);
		if ($this->db->affected_rows() > 0) 
		{
			return true;
		}
		else 
		{
			return false;
		}
//	print_r($data);exit;
	
    /*id=$data['lession_id'];
    $condition="lession_id ="."'$id'"; 
  	$this->db->select('*');
	$this->db->from('lessions');
	$this->db->where($condition);
	$this->db->limit(1);
	$query = $this->db->get();
	$res=$query->result_array();
	//print_r($query->result_array());exit;	
	if ($query->num_rows() == 1) 
	{
		$this->db->update('lessions', $data);
		if ($this->db->affected_rows() > 0) 
		{	
			
			return true;
		}
		else 
		{
			return false;
		}
		
	} 
	else 
	{
	$this->db->insert('lessions', $data);
	if ($this->db->affected_rows() > 0) 
	{
		return true;
	}
	else 
	{
		return false;
	}
	}*/
	// Query to insert data in database

	
	}
	
	public function getAllData()
	{
		
	$this->db->select('*');
	$this->db->from('lessions');
	$query = $this->db->get();
	
	if ($query->num_rows() >0) {
	    return $query->result();
	} else {
	return false;
	}
	}
	
	function uploadData()
    { 	
        $count=0;
        $fp = fopen($_FILES['userfile']['tmp_name'],'r') or die("can't open file");
        while($csv_line = fgetcsv($fp,1024))
        {	
        	//print_r($csv_line);exit;
            $count++;
            if($count == 1)
            {
                continue;
            }//keep this if condition if you want to remove the first row
            
            	for($i = 0, $j = count($csv_line); $i < $j; $i++)
	            {	
	
	                $insert_csv = array();
	//                $insert_csv['id'] = $csv_line[0];//remove if you want to have primary key,
	              // echo $csv_line[1];exit;
	                $insert_csv['section'] = $csv_line[1];
	                $insert_csv['semester'] = $csv_line[2];
	                $insert_csv['title'] = $csv_line[3];
	                $insert_csv['description'] = $csv_line[4];
	                $insert_csv['video'] = $csv_line[5];
	                $insert_csv['video_title'] = $csv_line[6];
	            	$insert_csv['video_description'] = $csv_line[7];
	
	            }
	           // $i++;
            
        if($insert_csv['section']!==NULL || $insert_csv['semester']!==NULL|| $insert_csv['title']!==NULL|| $insert_csv['description']!==NULL|| $insert_csv['video']!==NULL|| $insert_csv['video_title']!==NULL|| $insert_csv['video_description']!==NULL||$data['data']!==NULL)
		{		$data['data']=random_string('alnum', 10);
			    $data = array(
			       
				'section' => $insert_csv['section'],
				'semester' => $insert_csv['semester'],
				'title' => $insert_csv['title'],
				'description' => $insert_csv['description'],
				'video' => $insert_csv['video'],
				'video_title' => $insert_csv['video_title'],
				'lession_id'=>$data['data'],
				'video_description' => $insert_csv['video_description']);
//print_r($data);exit;
			    $this->db->insert('lessions', $data);
			     
		}
		
        }
        if ($this->db->affected_rows() > 0) 
		{
			return true;
		}
		else 
		{
			return false;
		}
       // return redirect('Lessions');
       // fclose($fp) or die("can't close file");
        //$data['success']="success";
        //return $data;
    }
}