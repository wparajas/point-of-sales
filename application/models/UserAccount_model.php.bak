<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Useraccount_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function getCompanyProfileID()
	{
		$userdata = $this->session->userdata("userdata");
		$user_accountID = $userdata['user_accountID'];
		$query = $this->db->query("SELECT company_profileID FROM user_account WHERE user_accountID = ".$user_accountID);
		$result = $query->result_array();
		return $result[0]['company_profileID'];
	}

	public function getCurrentUserAccountID()
	{
		$userdata = $this->session->userdata("userdata");
		return $userdata['user_accountID'];
	}

	public function getAllUserAccount()
	{
		$this->db->select("
			user_account.user_accountID 			AS user_accountID,
			user_account.company_profileID 			AS company_profileID,
			user_account.roleID 				 	AS roleID,
			user_account.user_departmentID 			AS user_departmentID,
			user_account.user_designationID 		AS user_designationID,
			user_account.user_accountCode 			AS user_accountCode,
			user_account.user_accountUsername 		AS user_accountUsername,
			user_account.user_accountPassword 		AS user_accountPassword,
			user_account.user_accountFirstname 		AS user_accountFirstname,
			user_account.user_accountMiddlename 	AS user_accountMiddlename,
			user_account.user_accountLastname 		AS user_accountLastname,
			user_account.user_accountContactnumber  AS user_accountContactnumber,
			user_account.user_accountHireddate 		AS user_accountHireddate,
			user_account.user_accountStatus 		AS user_accountStatus,
			pos_rolemstr.roleDescription			AS user_roleName,
			user_department.user_departmentName		AS user_departmentName,
			user_designation.user_designationName	AS user_designationName
		");
		$this->db->from("user_account");
		$this->db->join("pos_rolemstr", "user_account.roleID = pos_rolemstr.roleID");
		$this->db->join("user_department", "user_account.user_departmentID = user_department.user_departmentID");
		$this->db->join("user_designation", "user_account.user_designationID = user_designation.user_designationID");
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getUserAccount($user_accountID)
	{
		$userdata = $this->session->userdata('userdata');
		$currentUserAccountID = $userdata['user_accountID'];
		if ($currentUserAccountID == $user_accountID) {
			return false;
		} else {
			$query = $this->db->query("SELECT * FROM user_account WHERE user_accountID = ".$user_accountID);
			return $query->result_array();
		}
	}

	public function getAllUserDepartment()
	{
		$this->db->select("*");
		$this->db->from("user_department");
		$this->db->where("user_departmentStatus", 1);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getAllUserRole()
	{
		$query = $this->db->query("select * FROM pos_rolemstr");
	/*	$this->db->select("*");
		$this->db->from("pos_rolemstr");*/
		/*$this->db->where("user_roleStatus", 1);*/
	/*	$query = $this->db->get();*/
		return $query->result_array();
	}

	public function getUserAccountLastID()
	{
		$query = $this->db->query("SELECT user_accountID FROM user_account ORDER BY user_accountID DESC LIMIT 1");
		$result = $query->result_array();
		if ($result) {
			return $result[0]['user_accountID'];
		} else {
			return 0;
		}
	}

	public function isDepartmentExists($user_departmentName)
	{
		$query = $this->db->query("SELECT * FROM user_department WHERE user_departmentName = '".$user_departmentName."' AND user_departmentStatus = 1");
		$result = $query->result_array();
		return count($result) > 0 ? true : false;
	}

	public function getUserDepartmentID($user_departmentName)
	{
		$query = $this->db->query("SELECT * FROM user_department WHERE user_departmentName = '".$user_departmentName."' AND user_departmentStatus = 1");
		$result = $query->result_array();
		return $result ? $result[0]["user_departmentID"] : 0;
	}

	public function loadDesignation($user_departmentID)
	{
		// if ($this->isDepartmentExists($user_departmentName)) {
		// 	$getUserDepartmentID = $this->getUserDepartmentID($user_departmentName);
		// 	$query = $this->db->query("SELECT * FROM user_designation WHERE user_departmentID = ".$getUserDepartmentID." AND user_designationStatus = 1");
		// 	return $query->result_array();
		// } else {
		// 	return [];
		// }
		$query = $this->db->query("SELECT * FROM user_designation WHERE user_departmentID = ".$user_departmentID." AND user_designationStatus = 1");
		return $query->result_array();
	}

	public function isUsernameExists($user_accountID = "", $user_accountUsername)
	{
		if ($user_accountID != "") {
			$query = $this->db->query("SELECT * FROM user_account WHERE user_accountID != ".$user_accountID." AND user_accountUsername = '".$user_accountUsername."'");
		} else {
			$query = $this->db->query("SELECT * FROM user_account WHERE user_accountUsername = '".$user_accountUsername."'");
		}
		$result = $query->result_array();
		return count($result) > 0 ? true : false;
	}

	public function canChangeStatus($user_accountID)
	{
		// IS THE USER APPROVER? IF YES, IT CAN'T BE CHANGE THE STATUS
		return true;
	}

	public function saveUserAccount($user_accountFirstname, $user_accountMiddlename, $user_accountLastname, $user_accountContactnumber, $user_accountHireddate, $user_accountDepartment, $user_accountDesignation, $user_accountStatus, $user_accountUsername, $user_accountPassword, $user_accountRole) {
		$user_departmentID = $user_accountDepartment;

		$isUsernameExists = $this->isUsernameExists("", $user_accountUsername);
		if (!$isUsernameExists) {
			$lastID = $this->getUserAccountLastID();
			$user_accountCode = generateCode("UC", $lastID);
			$data = [
				"company_profileID" => $this->getCompanyProfileID(),
				"user_accountFirstname" => $user_accountFirstname,
				"user_accountMiddlename" => $user_accountMiddlename,
				"user_accountLastname" => $user_accountLastname,
				"user_accountContactnumber" => $user_accountContactnumber,
				"user_accountHireddate" => $user_accountHireddate,
				"user_departmentID" => $user_departmentID,
				"user_designationID" => $user_accountDesignation,
				"user_accountStatus" => $user_accountStatus,
				"user_accountUsername" => $user_accountUsername,
				"user_accountPassword" => $user_accountPassword,
				"roleID" => $user_accountRole,
				"user_accountCode" => $user_accountCode,
				"created_by" => $this->getCurrentUserAccountID(),
				"updated_by" => $this->getCurrentUserAccountID()
			];
			$query = $this->db->insert("user_account", $data);
			if ($query) {
				$name = $user_accountFirstname.' '.$user_accountMiddlename.' '.$user_accountLastname;
				return "true|".$name.' added successfully';
			} else {
				return "false|System error: Please contact the system administrator for assistance";
			}
		} else {
			return "false|".$user_accountUsername." already exists";
		}
	}

	public function updateUserAccount($user_accountID, $user_accountFirstname, $user_accountMiddlename, $user_accountLastname, $user_accountContactnumber, $user_accountHireddate, $user_accountDepartment, $user_accountDesignation, $user_accountStatus, $user_accountUsername, $user_accountPassword, $user_accountRole)
	{
		$user_departmentID = $user_accountDepartment;

		$isUsernameExists = $this->isUsernameExists($user_accountID, $user_accountUsername);
		if (!$isUsernameExists) {
			$getUserAccount = $this->getUserAccount($user_accountID);
			$name = $user_accountFirstname.' '.$user_accountMiddlename.' '.$user_accountLastname;

			// if ($user_accountOldStatus != $user_accountStatus && !$this->canChangeStatus($user_accountID)) {
			if (!$getUserAccount && $getUserAccount[0]['user_accountStatus'] != $user_accountStatus) {
				return "false|".$name.' is currently in used';
			} else {
				$data = [
					"user_accountFirstname" => $user_accountFirstname,
					"user_accountMiddlename" => $user_accountMiddlename,
					"user_accountLastname" => $user_accountLastname,
					"user_accountContactnumber" => $user_accountContactnumber,
					"user_accountHireddate" => $user_accountHireddate,
					"user_departmentID" => $user_departmentID,
					"user_designationID" => $user_accountDesignation,
					"user_accountStatus" => $user_accountStatus,
					"user_accountUsername" => $user_accountUsername,
					"user_accountPassword" => $user_accountPassword,
					"roleID" => $user_accountRole,
					"updated_by" => $this->getCurrentUserAccountID()
				];
				$this->db->where("user_accountID", $user_accountID);
				$query = $this->db->update("user_account", $data);
				if ($query) {
					return "true|".$name.' updated successfully';
				} else {
					return "false|System error: Please contact the system administrator for assistance";
				}
			}
		} else {
			return "false|".$user_accountUsername." already exists";
		}
	}

}