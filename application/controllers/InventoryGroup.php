<?php 
   
   	class InventoryGroup extends CI_Controller {  

   		public function __construct()
    	{
    		parent::__construct();
    	}

    	public function index()
    	{
  			$this->load->view('Template/Header');
  			$this->load->view('InventoryGroup/Index');
  			$this->load->view('Template/Footer');
    	}

   	}
