<?php 
   
   	class Payment extends CI_Controller {  

   		public function __construct()
    	{
    		parent::__construct();
    	}

    	public function index()
    	{
  			$this->load->view('Template/Header');
  			$this->load->view('Payment/Index');
  			$this->load->view('Template/Footer');
    	}

   	}
