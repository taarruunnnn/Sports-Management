<?php
defined('BASEPATH') OR exit('Not Allowed');
class Login extends CI_Model
{
	private $database;
	private $table;
    function __construct() {
		parent::__construct();
		//$this->database = $this->load->database('test', TRUE);
    }
	// Unique to models with multiple tables
	function set_table($table) {
		$this->table = $table;
	}
	
	// Get table from table property
    function get_table() {
		$table = $this->table;
		return $table;
    }

	function checklogin($input=null)
	{
		//$this->db->select('*');
		$this->db->where('email',$input['email']);
		$this->db->where('password',$input['password']);
		$query=$this->db->get('login');				
		return $query->num_rows(); 
	}
}

?>
