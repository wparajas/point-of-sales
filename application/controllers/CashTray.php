<?php 
   class CashTray extends CI_Controller {  
		public function index() 
		{ 
	  		$this->load->view('Template/Header');
			$this->load->view('CashTray/Index');
			$this->load->view('Template/Footer');
		}

	}		