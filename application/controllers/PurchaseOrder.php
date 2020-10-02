<?php 
   
    class PurchaseOrder extends CI_Controller {  

      public function __construct()
      {
        parent::__construct();
      }

      public function index()
      {
        $data = array("title" => "Purhcase Order");
   //     if (isAllowed(1))$this->load->view('Dashboard/Index');
      // else $this->load->view('Dashboard/Index');

        $this->load->view('Template/Header');
        $this->load->view('PurchaseOrder/Index');
        $this->load->view('Template/Footer');
      }

    }
