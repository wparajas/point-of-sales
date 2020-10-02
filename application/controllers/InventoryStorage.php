<?php 
   
   	class InventoryStorage extends CI_Controller {  

   		public function __construct()
    	{
    		parent::__construct();
    	}

    	public function index()
    	{
  			$this->load->view('Template/Header');
  			$this->load->view('InventoryStorage/Index');
  			$this->load->view('Template/Footer');
    	}

   	}
