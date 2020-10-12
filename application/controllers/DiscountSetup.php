<?php 
   class DiscountSetup extends CI_Controller {  

   		public function __construct() {
			//load database in autoload libraries 
			parent::__construct(); 
			$this->load->model('Designation_model');  
	  		$this->designation = new Designation_model;     
		}

		public function index() 
		{ 
			$data['title'] = "Discount Setup";

	  		$this->load->view('template/header', $data);
			$this->load->view('discountSetup/index');
			$this->load->view('template/footer');
		}

	}		