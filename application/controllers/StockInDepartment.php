<?php 
   class StockInDepartment extends CI_Controller {  
		public function index() 
		{ 
	  		$this->load->view('Template/Header');
			$this->load->view('StockInDepartment/Index');
			$this->load->view('Template/Footer');
		}

	}		