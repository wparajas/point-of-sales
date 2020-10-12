<?php 
   
   	class StockInWarehouse extends CI_Controller {  

   		public function __construct()
    	{
    		parent::__construct();
    	}

    	public function index()
    	{
    		$data = array("title" => "Stock In Warehouse");
    		// if (isAllowed(1))$this->load->view('StockInWarehouse/Index');
  			// else $this->load->view('StockInWarehouse/Index');

  			$this->load->view('template/header', $data);
  			$this->load->view('stockInWarehouse/index');
  			$this->load->view('template/footer');
    	}

   	}
