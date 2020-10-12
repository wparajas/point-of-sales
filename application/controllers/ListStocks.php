<?php 
   
   	class ListStocks extends CI_Controller {  

   		public function __construct()
    	{
    		parent::__construct();
    	}

    	public function index()
    	{
    		$data = array("title" => "List of Stocks");
    		// if (isAllowed(1))$this->load->view('ListStocks/Index');
  			// else $this->load->view('ListStocks/Index');

  			$this->load->view('template/header');
  			$this->load->view('listStocks/index');
  			$this->load->view('template/footer');
    	}

   	}
