<?php 
   class TransferRequest extends CI_Controller {  
		public function index() 
		{ 
			$data['title'] = "Transfer Request";

	  		$this->load->view('template/header', $data);
			$this->load->view('tansferRequest/index');
			$this->load->view('template/footer');
		}

	}		