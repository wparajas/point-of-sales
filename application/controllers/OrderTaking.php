<?php 
   
 	class OrderTaking extends CI_Controller {  

 		public function __construct()
  	{
  		parent::__construct();
  	}

  	public function index()
  	{
  		$data = array("title" => "Order Taking");
  		// if (isAllowed(1))$this->load->view('Dashboard/Index');
		// else $this->load->view('Dashboard/Index');

			$this->load->view('Template/Header');
			$this->load->view('OrderTaking/Index');
			$this->load->view('Template/Footer');
  	}

 	}
