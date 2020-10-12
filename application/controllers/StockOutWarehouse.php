<?php 
   
   	class StockOutWarehouse extends CI_Controller {  

   		public function __construct()
    	{
    		parent::__construct();
    	}

    	public function index()
    	{
    		$data = array("title" => "Stock Out Warehouse");
    		// if (isAllowed(1))$this->load->view('StockOutWarehouse/Index');
  			// else $this->load->view('StockOutWarehouse/Index');

  			$this->load->view('template/header', $data);
  			$this->load->view('stockOutWarehouse/index');
  			$this->load->view('template/footer');
    	}

   	}
