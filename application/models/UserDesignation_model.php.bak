<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserDesignation_model extends CI_Model
{
	public function __construct() 
	{ 
		parent::__construct(); 
	}

	public function getAllUserDepartment()
	{
		$query = $this->db->query("SELECT * FROM user_department WHERE user_departmentStatus = 1");
		return $query->result_array();
	}

	public function getUserDesignationLastID()
	{
		$query = $this->db->query("SELECT user_designationID FROM user_designation ORDER BY user_designationID DESC LIMIT 1");
		$result = $query->result_array();
		if ($result) {
			return $result[0]['user_designationID'];
		} else {
			return 0;
		}
	}

	public function getAllUserDesignation()
	{
		$this->db->select("
				user_designation.user_designationID 	AS user_designationID,
				user_designation.user_departmentID 		AS user_departmentID,
				user_designation.user_designationCode 	AS user_designationCode,
				user_designation.user_designationName 	AS user_designationName,
				user_designation.user_designationLimit 	AS user_designationLimit,
				user_designation.user_designationStatus AS user_designationStatus,
				user_department.user_departmentName 	AS user_departmentName
			");
		$this->db->from("user_designation");
		$this->db->join("user_department", "user_designation.user_departmentID = user_department.user_departmentID");
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getUserDesignation($user_designationID)
	{
		$query = $this->db->query("SELECT * FROM user_designation WHERE user_designationID = ".$user_designationID);
		return $query->result_array();
	}

	public function getUserDepartmentID($user_designationDepartment)
	{
		$query = $this->db->query("SELECT * FROM user_department WHERE user_departmentName = '".$user_designationDepartment."' AND user_departmentStatus = 1");
		$result = $query->result_array();
		return $result ? $result[0]["user_departmentID"] : 0;
	}

	public function isDesignationExists($user_designationID, $user_departmentID, $user_designationName)
	{
		if ($user_designationID !== "") {
			$query = $this->db->query("SELECT * FROM user_designation WHERE user_designationID != ".$user_designationID." AND user_departmentID = ".$user_departmentID." AND user_designationName = '".$user_designationName."'");
			$result = $query->result_array();
			return count($result) > 0 ? true : false;
		} else {
			$query = $this->db->query("SELECT * FROM user_designation WHERE user_departmentID = ".$user_departmentID." AND user_designationName = '".$user_designationName."'");
			$result = $query->result_array();
			return count($result) > 0 ? true : false;
		}
	}

	public function canChangeStatus($user_departmentID, $user_designationID)
	{
		$query1 = $this->db->query("SELECT * FROM user_account WHERE user_departmentID = ".$user_departmentID." AND user_designationID = ".$user_designationID." AND user_accountStatus = 1");
		$result1 = $query1->result_array();
		$count1 = count($result1);
		// $query2 = $this->db->query("SELECT * FROM user_account WHERE user_departmentID = ".$user_departmentID." AND user_accountStatus = 1");
		// $result2 = $query2->result_array();
		// $count2 = count($result2);
		return $count1 > 0 ? false : true; 
	}

	public function saveUserDesignation($user_designationDepartment, $user_designationName, $user_designationLimit, $user_designationStatus)
	{
		$user_departmentID = $user_designationDepartment;
		$isDesignationExists = $this->isDesignationExists($user_designationID = "", $user_departmentID, $user_designationName);
		if (!$isDesignationExists) {

			$lastID = $this->getUserDesignationLastID();
			$user_designationCode = generateCode("DES", $lastID);
			$data = array(
				"user_designationCode" => $user_designationCode,
				"user_departmentID" => $user_departmentID,
				"user_designationName" => $user_designationName,
				"user_designationLimit" => $user_designationLimit,
				"user_designationStatus" => $user_designationStatus
			);
			$query = $this->db->insert("user_designation", $data);
			if ($query) {
				return "true|".$user_designationName." added successfully";
			} else {
				return "false|System error: Please contact the system administrator for assistance";
			}

		} else {
			return "false|".$user_designationName." already exists";
		}
	}

	public function updateUserDesignation($user_designationID, $user_designationDepartment, $user_designationName, $user_designationLimit, $user_designationStatus)
	{
		$user_departmentID = $user_designationDepartment;
		$isDesignationExists = $this->isDesignationExists($user_designationID, $user_departmentID, $user_designationName);
		if (!$isDesignationExists) {

			$getUserDesignation = $this->getUserDesignation($user_designationID);
			$user_designationOldStatus = $getUserDesignation[0]['user_designationStatus'];

			if ($user_designationOldStatus != $user_designationStatus && !$this->canChangeStatus($user_departmentID, $user_designationID)) {
				return "false|".$user_designationName." is currently in used";
			} else {
				$data = array(
					"user_departmentID" => $user_departmentID,
					"user_designationName" => $user_designationName,
					"user_designationLimit" => $user_designationLimit,
					"user_designationStatus" => $user_designationStatus
				);
				$this->db->where("user_designationID", $user_designationID);
				$query = $this->db->update("user_designation", $data);
				if ($query) {
					return "true|".$user_designationName." updated successfully";
				} else {
					return "false|System error: Please contact the system administrator for assistance";
				}
			}
			
		} else {
			return "false|".$user_designationName." already exists";
		}
	}
	
}