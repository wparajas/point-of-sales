<?php 
   class StockInDepartment extends CI_Controller {  
		public function index() 
		{ 
			$data['title'] = "Stock In Department";

	  		$this->load->view('template/header', $data);
			$this->load->view('stockInDepartment/index');
			$this->load->view('template/footer');
		}

	}		