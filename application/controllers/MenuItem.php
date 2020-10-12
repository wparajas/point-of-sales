<?php 
   class MenuItem extends CI_Controller {  
		public function index() 
		{ 
			$data['title'] = "Menu Item";
			
	  		$this->load->view('template/header', $data);
			$this->load->view('menuItem/index');
			$this->load->view('template/footer');
		}

	}		