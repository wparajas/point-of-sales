<?php 
   
 	class PostSchedule extends CI_Controller {  

 		public function __construct()
  	{
  		parent::__construct();
  	}

  	public function index()
  	{
  		$data = array("title" => "Employee Scheduling");
  		// if (isAllowed(1))$this->load->view('Dashboard/Index');
		// else $this->load->view('Dashboard/Index');

			$this->load->view('template/header', $data);
			$this->load->view('postSchedule/index');
			$this->load->view('template/footer');
  	}

 	}