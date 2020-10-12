<?php 
   
   	class Payment extends CI_Controller {  

   		public function __construct()
    	{
    		parent::__construct();
    	}

    	public function index()
    	{
			$data['title'] = "Payment";

  			$this->load->view('template/header', $data);
  			$this->load->view('payment/index');
  			$this->load->view('template/footer');
    	}

   	}
