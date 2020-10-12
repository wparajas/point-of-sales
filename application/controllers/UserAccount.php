<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserAccount extends CI_Controller {

	public function __construct() 
	{
		//load database in autoload libraries 
		parent::__construct(); 
		$this->load->model('UserAccount_model');  
  		$this->useraccount = new UserAccount_model;     
	}

	public function index()
	{
		$data = array('title' => 'User Account');
		
		$data['useraccount'] = $this->useraccount->getAllUserAccount();
		$data['userdepartment'] = $this->useraccount->getAllUserDepartment();
		$data['userrole'] = $this->useraccount->getAllUserRole();

		$this->load->view('template/header',$data);
		$this->load->view('userAccount/index', $data);
		$this->load->view('template/footer');
	}

	public function loadDesignation()
	{
		$user_departmentName = $this->input->post("user_departmentName");
		$loadDesignation = $this->useraccount->loadDesignation($user_departmentName);
		echo json_encode($loadDesignation);
	}

	public function save()
	{
		$user_accountFirstname = $this->input->post("user_accountFirstname");
		$user_accountMiddlename = $this->input->post("user_accountMiddlename");
		$user_accountLastname = $this->input->post("user_accountLastname");
		$user_accountContactnumber = $this->input->post("user_accountContactnumber");
		$user_accountHireddate = $this->input->post("user_accountHireddate");
		$user_accountDepartment = $this->input->post("user_accountDepartment");
		$user_accountDesignation = $this->input->post("user_accountDesignation");
		$user_accountStatus = $this->input->post("user_accountStatus");
		$user_accountUsername = $this->input->post("user_accountUsername");
		$user_accountPassword = $this->input->post("user_accountPassword");
		$user_accountRole = $this->input->post("user_accountRole");

		$saveUserAccount = $this->useraccount->saveUserAccount($user_accountFirstname, $user_accountMiddlename, $user_accountLastname, $user_accountContactnumber, $user_accountHireddate, $user_accountDepartment, $user_accountDesignation, $user_accountStatus, $user_accountUsername, $user_accountPassword, $user_accountRole);
		$result = explode("|", $saveUserAccount);
		if ($result[0] == "true") {
			$this->session->set_flashdata('success', $result[1]);
		}
		echo json_encode($saveUserAccount);
	}

	public function update()
	{
		$user_accountID = $this->input->post("user_accountID");
		$user_accountFirstname = $this->input->post("user_accountFirstname");
		$user_accountMiddlename = $this->input->post("user_accountMiddlename");
		$user_accountLastname = $this->input->post("user_accountLastname");
		$user_accountContactnumber = $this->input->post("user_accountContactnumber");
		$user_accountHireddate = $this->input->post("user_accountHireddate");
		$user_accountDepartment = $this->input->post("user_accountDepartment");
		$user_accountDesignation = $this->input->post("user_accountDesignation");
		$user_accountStatus = $this->input->post("user_accountStatus");
		$user_accountUsername = $this->input->post("user_accountUsername");
		$user_accountPassword = $this->input->post("user_accountPassword");
		$user_accountRole = $this->input->post("user_accountRole");

		$saveUserAccount = $this->useraccount->updateUserAccount($user_accountID, $user_accountFirstname, $user_accountMiddlename, $user_accountLastname, $user_accountContactnumber, $user_accountHireddate, $user_accountDepartment, $user_accountDesignation, $user_accountStatus, $user_accountUsername, $user_accountPassword, $user_accountRole);
		$result = explode("|", $saveUserAccount);
		if ($result[0] == "true") {
			$this->session->set_flashdata('success', $result[1]);
		}
		echo json_encode($saveUserAccount);
	}
}
