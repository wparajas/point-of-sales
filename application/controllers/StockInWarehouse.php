<?php 
   
   	class StockInWarehouse extends CI_Controller {  

   		public function __construct()
    	{
    		parent::__construct();
    	}

    	public function index()
    	{
    		$data = array("title" => "Stock in Warehouse");
    		// if (isAllowed(1))$this->load->view('StockInWarehouse/Index');
  			// else $this->load->view('StockInWarehouse/Index');

  			$this->load->view('Template/Header');
  			$this->load->view('StockInWarehouse/Index');
  			$this->load->view('Template/Footer');
    	}

   	}
