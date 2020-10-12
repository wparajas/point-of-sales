<?php 
   class CashTray extends CI_Controller {  
		public function index() 
		{ 
			$data['title'] = "Cash Tray";

	  		$this->load->view('template/header', $data);
			$this->load->view('cashTray/index');
			$this->load->view('template/footer');
		}

	}		