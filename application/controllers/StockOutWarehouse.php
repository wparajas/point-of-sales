<?php 
   
   	class StockOutWarehouse extends CI_Controller {  

   		public function __construct()
    	{
    		parent::__construct();
    	}

    	public function index()
    	{
    		$data = array("title" => "Stock out Warehouse");
    		// if (isAllowed(1))$this->load->view('StockOutWarehouse/Index');
  			// else $this->load->view('StockOutWarehouse/Index');

  			$this->load->view('Template/Header');
  			$this->load->view('StockOutWarehouse/Index');
  			$this->load->view('Template/Footer');
    	}

   	}
