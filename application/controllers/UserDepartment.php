<?php 
   class UserDepartment extends CI_Controller {  

		public function __construct() {
			//load database in autoload libraries 
			parent::__construct(); 
			$this->load->model('UserDepartment_model');  
	  		$this->userdepartment = new UserDepartment_model;     
		}

		public function index() 
		{
			$data = array('title' => 'Department');

			$data["departments"] = $this->userdepartment->getAllUserDepartment();
			$data["department_lastID"] = $this->userdepartment->getUserDepartmentLastID();

			$this->load->view('Template/Header');
			$this->load->view('UserDepartment/Index', $data);
			$this->load->view('Template/Footer');
		}

		public function save()
		{
			$user_departmentName = $this->input->post("user_departmentName");
			$user_departmentStatus = $this->input->post("user_departmentStatus");

			$saveUserDepartment = $this->userdepartment->saveUserDepartment($user_departmentName, $user_departmentStatus);
			$result = explode("|", $saveUserDepartment);
			if ($result[0] == "true") {
				$this->session->set_flashdata('success', $result[1]);
			} else {
				$this->session->set_flashdata('error', $result[1]);
			}
			echo json_encode($saveUserDepartment);
		}

		public function update()
		{
			$user_departmentID = $this->input->post("user_departmentID");
			$user_departmentName = $this->input->post("user_departmentName");
			$user_departmentStatus = $this->input->post("user_departmentStatus");

			$updateUserDepartment = $this->userdepartment->updateUserDepartment($user_departmentID, $user_departmentName, $user_departmentStatus);
			$result = explode("|", $updateUserDepartment);
			if ($result[0] == "true") {
				$this->session->set_flashdata('success', $result[1]);
			}
			echo json_encode($updateUserDepartment);
		}
	}	