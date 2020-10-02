<?php 
   
   	class ListStocks extends CI_Controller {  

   		public function __construct()
    	{
    		parent::__construct();
    	}

    	public function index()
    	{
    		$data = array("title" => "ListStocks");
    		// if (isAllowed(1))$this->load->view('ListStocks/Index');
  			// else $this->load->view('ListStocks/Index');

  			$this->load->view('Template/Header');
  			$this->load->view('ListStocks/Index');
  			$this->load->view('Template/Footer');
    	}

   	}
