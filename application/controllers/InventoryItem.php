<?php 
   class InventoryItem extends CI_Controller {  
		public function index() 
		{ 
	  		$this->load->view('Template/Header');
			$this->load->view('InventoryItem/Index');
			$this->load->view('Template/Footer');
		}

	}		