<?php

	class Company_model extends CI_Model {

		public function __construct()
		{
			parent::__construct();
		}

		public function getCompanyProfile($company_profileID)
		{
			$query = $this->db->query("SELECT * FROM company_profile WHERE company_profileID = ".$company_profileID);
			return $query->result_array();
		}

		public function getBusinessNature()
		{
			$query = $this->db->query("SELECT * FROM business_nature WHERE business_natureStatus = 1");
			return $query->result_array();
		}

		public function getCompanyBusiness($company_profileID)
		{
			$query = $this->db->query("SELECT business_natureID FROM company_business WHERE company_businessStatus = 1 AND company_profileID = ".$company_profileID);
			return $query->result_array();
		}

		// public function insert_logo($logo)
		// {
		// 	return $logo;
		// }

		public function saveCompanyProfile($company_profileID, $company_profile)
		{
			$this->db->where("company_profileID", $company_profileID);
			$this->db->update("company_profile", $company_profile);
			return true;
		}

		public function saveCompanyBusiness($company_profileID, $company_business)
		{
			$this->db->where("company_profileID", $company_profileID);
			$this->db->delete("company_business");

			$this->db->insert_batch("company_business", $company_business);
			return true;
		}

		public function updateCompanyLogo($company_profileID, $data)
		{
			$this->db->where("company_profileID", $company_profileID);  
	        $this->db->update("company_profile", $data); 
	        return true;
		}

	}