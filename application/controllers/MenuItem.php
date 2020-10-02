<?php 
   class MenuItem extends CI_Controller {  
		public function index() 
		{ 
	  		$this->load->view('Template/Header');
			$this->load->view('MenuItem/Index');
			$this->load->view('Template/Footer');
		}

	}		