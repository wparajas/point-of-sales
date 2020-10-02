<?php 
   class TransferRequest extends CI_Controller {  
		public function index() 
		{ 
	  		$this->load->view('Template/Header');
			$this->load->view('TransferRequest/Index');
			$this->load->view('Template/Footer');
		}

	}		