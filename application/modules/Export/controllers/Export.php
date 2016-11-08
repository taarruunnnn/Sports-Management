<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Export extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load the Library
        $this->load->library("excel");
        // Load the Model
        $this->load->model("Action");
    }

    public function index() {
        $this->excel->setActiveSheetIndex(0);
        // Gets all the data using MY_Model.php
        $data = $this->Action->getdata();

        $this->excel->stream('data.xls', $data);
    }

}
