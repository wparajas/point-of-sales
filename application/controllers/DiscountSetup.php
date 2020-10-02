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
	  		$this->load->view('Template/Header');
			$this->load->view('DiscountSetup/Index');
			$this->load->view('Template/Footer');
		}

	}		