<?php 
   
 	class Approval extends CI_Controller {  

 		public function __construct()
  	{
  		parent::__construct();
      $this->load->model('Approval_model');  
      $this->approval = new Approval_model;   
  	}

  	public function index()
  	{
  		$data = array("title" => "Approval");
      $data['module']=$this->approval->get_all_modules();
       $data['data']=$this->approval->get_approver(16);

			$this->load->view("Template/Header",$data);
			$this->load->view('Approval/Index',$data);
			$this->load->view("Template/Footer",$data);
  	}

    public function save() 
    { 
      $moduleID = $this->input->post('moduleID');
      $employeeID = $this->input->post('employeeID');

          $data = $this->approval->save_approval($moduleID,$employeeID);
         
            
        echo json_encode($data);  
    }

    public function approvalrecord()
    {
       $approvalID = $this->input->post('approvalID');
       
       $data = $this->approval->search_approval($approvalID);

       echo json_encode($data);


    }

 	}
