<?php

Class Ptteacher extends CI_Model 
{
			
	// Insert registration data in database
	public function insert($data) {
	//print_r($data);exit;
	// Query to insert data in database
	$this->db->insert('pt_teacher', $data);
	if ($this->db->affected_rows() > 0) 
	{
		return true;
	}
	else 
	{
		return false;
	}
	
	}
	
	public function getAllData()
	{
		
	$this->db->select('*');
	$this->db->from('pt_teacher');
	$query = $this->db->get();
	
	if ($query->num_rows() >0) {
	    return $query->result();
	} else {
	return false;
	}
	}
	
	
}

?>

