<?php

Class Login extends CI_Model {
			
	// Insert registration data in database
	public function registration_insert($data) {
	
	// Query to check whether username already exist or not
	$condition = "email =" . "'" . $data['user_email'] . "'";
	//$condition1 = "email =" . "'" . $data['user_email'] . "'";
	$data1=array(
	'name'=>$data['user_name'],
	'email'=>$data['user_email'],
	'password'=>$data['user_password']
	);
	$this->db->select('*');
	$this->db->from('login');
	$this->db->where($condition);
	$this->db->limit(1);
	$query = $this->db->get();
	if ($query->num_rows() == 0) {
	
	// Query to insert data in database
	$this->db->insert('login', $data1);
	if ($this->db->affected_rows() > 0) {
	return true;
	}
	} else
	{
	return false;
	}
	}
	// Read data using username and password
	public function Postlogin($data) {
	$condition = "email =" . "'" . $data['username'] . "' AND " . "password =" . "'" . $data['password'] . "'";
	$this->db->select('*');
	$this->db->from('login');
	$this->db->where($condition);
	$this->db->limit(1);
	$query = $this->db->get();
	$res=$query->result_array();
	//print_r($query->result_array());exit;	
	if ($query->num_rows() == 1) {
	return $res;
	} else {
	return false;
	}
	}
	
	// Read data from database to show data in admin page
	public function read_user_information($username) {
	
	$condition = "email =" . "'" . $username . "'";
	$this->db->select('*');
	$this->db->from('login');
	$this->db->where($condition);
	$this->db->limit(1);
	$query = $this->db->get();
	
	if ($query->num_rows() == 1) {
	return $query->result();
	} else {
	return false;
	}
	}
		
	}

?>

