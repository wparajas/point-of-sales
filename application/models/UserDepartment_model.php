<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserDepartment_model extends CI_Model
{
	public function __construct() 
	{ 
		parent::__construct(); 
	}

	public function getAllUserDepartment()
	{
		$query = $this->db->query("SELECT * FROM user_department");
		return $query->result_array();
	}

	public function getUserDepartment($user_departmentID)
	{
		$query = $this->db->query("SELECT * FROM user_department WHERE user_departmentID = ".$user_departmentID);
		return $query->result_array();
	}

	public function getUserDepartmentLastID()
	{
		$query = $this->db->query("SELECT user_departmentID FROM user_department ORDER BY user_departmentID DESC LIMIT 1");
		$result = $query->result_array();
		if ($result) {
			return $result[0]['user_departmentID'];
		} else {
			return 0;
		}
	}

	public function isUserDepartmentExisting($user_departmentID, $user_departmentName)
	{
		if ($user_departmentID !== "") {
			$query = $this->db->query("SELECT * FROM user_department WHERE user_departmentID != ".$user_departmentID." AND user_departmentName = '".$user_departmentName."'");
			return $query->result_array();
		} else {
			$query = $this->db->query("SELECT * FROM user_department WHERE user_departmentName = '".$user_departmentName."'");
			return $query->result_array();
		}
	}

	public function canChangeStatus($user_departmentID)
	{
		$query1 = $this->db->query("SELECT * FROM user_designation WHERE user_departmentID = ".$user_departmentID." AND user_designationStatus = 1");
		$result1 = $query1->result_array();
		$query2 = $this->db->query("SELECT * FROM user_account WHERE user_departmentID = ".$user_departmentID." AND user_accountStatus = 1");
		$result2 = $query2->result_array();
		$count = count($result1) + count($result2);
		// $query2 = $this->db->query("SELECT * FROM user_account WHERE user_departmentID = ".$user_departmentID." AND user_accountStatus = 1");
		// $result2 = $query2->result_array();
		// $count2 = count($result2);
		return $count > 0 ? false : true;
	}

	public function saveUserDepartment($user_departmentName, $user_departmentStatus)
	{
		$isExisting = $this->isUserDepartmentExisting($user_departmentID = "", $user_departmentName);
		if (count($isExisting) > 0) {
			return "false|".$user_departmentName." already exists";
		} else {
			$lastID = $this->getUserDepartmentLastID();
			$user_departmentCode = generateCode("DEP", $lastID);
			$data = array(
				"user_departmentCode" => $user_departmentCode,
				"user_departmentName" => $user_departmentName,
				"user_departmentStatus" => $user_departmentStatus
			);
			$query = $this->db->insert("user_department", $data);
			if ($query) {
				return "true|".$user_departmentName." added successfully";
			} else {
				return "false|System error: Please contact the system administrator for assistance";
			}
		}
	}

	public function updateUserDepartment($user_departmentID, $user_departmentName, $user_departmentStatus)
	{
		$isExisting = $this->isUserDepartmentExisting($user_departmentID, $user_departmentName);
		// IF THE DEPARTMENT IS EXISTING
		if (count($isExisting) > 0) {
			return "false|".$user_departmentName." already exists";
		} 
		// IF THE DEPARTMENT IS IN USED
		else {

			$getUserDepartment = $this->getUserDepartment($user_departmentID);
			$user_departmentOldStatus = $getUserDepartment[0]['user_departmentStatus'];

			if ($user_departmentOldStatus != $user_departmentStatus && !$this->canChangeStatus($user_departmentID)) {
				return "false|".$user_departmentName." is currently in used";
			} else {
				$data = array(
					"user_departmentName" => $user_departmentName,
					"user_departmentStatus" => $user_departmentStatus
				);
				$this->db->where("user_departmentID", $user_departmentID);
				$query = $this->db->update("user_department", $data);
				if ($query) {
					return "true|".$user_departmentName." updated successfully";
				} else {
					return "false|System error: Please contact the system administrator for assistance";
				}
			}
		}
	}
}	