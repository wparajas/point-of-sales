<?php 
   class UserDesignation extends CI_Controller {  
		public function __construct() {
			//load database in autoload libraries 
			parent::__construct(); 
			$this->load->model('UserDesignation_model');  
	  		$this->userdesignation = new UserDesignation_model;     
		}

		public function index() 
		{ 
			$data = array('title' => 'Designation');
			$data['userdepartment'] = $this->userdesignation->getAllUserDepartment();
			$data['userdesignation'] = $this->userdesignation->getAllUserDesignation();
			
	  		$this->load->view('Template/Header');
			$this->load->view('UserDesignation/Index', $data);
			$this->load->view('Template/Footer');
		}

		public function save()
		{
			$user_designationDepartment = $this->input->post("user_designationDepartment");
			$user_designationName = $this->input->post("user_designationName");
			$user_designationLimit = $this->input->post("user_designationLimit");
			$user_designationStatus = $this->input->post("user_designationStatus");

			$saveUserDesignation = $this->userdesignation->saveUserDesignation($user_designationDepartment, $user_designationName, $user_designationLimit, $user_designationStatus);
			$result = explode("|", $saveUserDesignation);
			if ($result[0] == "true") {
				$this->session->set_flashdata('success', $result[1]);
			}
			echo json_encode($saveUserDesignation);
		}

		public function update()
		{
			$user_designationID = $this->input->post("user_designationID");
			$user_designationDepartment = $this->input->post("user_designationDepartment");
			$user_designationName = $this->input->post("user_designationName");
			$user_designationLimit = $this->input->post("user_designationLimit");
			$user_designationStatus = $this->input->post("user_designationStatus");

			$updateUserDesignation = $this->userdesignation->updateUserDesignation($user_designationID, $user_designationDepartment, $user_designationName, $user_designationLimit, $user_designationStatus);
			$result = explode("|", $updateUserDesignation);
			if ($result[0] == "true") {
				$this->session->set_flashdata('success', $result[1]);
			}
			echo json_encode($updateUserDesignation);
		}

	}	