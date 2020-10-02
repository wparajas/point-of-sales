<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Approval_model extends CI_Model
{
	function __construct() 
	{ 
	 parent::__construct(); 
	}

		function get_all_modules()
	{
	/*	$this->db->select('*');
    	$this->db->from('dm_approvalmodule');
    	$query = $this->db->get();*/

    	$queryapprovalmodule = $this->db->query('SELECT * FROM pos_approvalmodule INNER JOIN pos_modulemstr ON pos_modulemstr.moduleID=pos_approvalmodule.moduleID');
    	$queryuser = $this->db->query("SELECT user_accountID, CONCAT(LPAD(user_accountID, 5, 0), ' - ',user_accountFirstname,', ',user_accountLastname, ' ', user_accountMiddlename) AS fullname FROM  user_account WHERE user_accountStatus = 'Active'");

		$datapprovalmodule = $queryapprovalmodule->result();
	 	$datauser = $queryuser->result();
	     return array('approval' => $datapprovalmodule, 'user' => $datauser);
	   
  	}

	function get_all_approval()
	{ 
		$query = $this->db->query("SELECT * FROM user_account");
	    return $query->result();

	    $queryemployee = $query->result();
    	return array('employee' => $queryemployee);

	}

   function search_approval($approvalID)

   {

      $query = $this->db->query("SELECT appr.user_accountID,appl.approvalDescription FROM pos_approvaldet as appr
                                LEFT JOIN pos_approval AS appl ON appr.approvalID = appl.approvalID WHERE moduleID =$approvalID limit 1");
      return $query->result();

   }

	 function get_approver($id)
    {
      $queryApproval = $this->db->query('SELECT * FROM pos_approval WHERE moduleID='.$id);

      $queryApprovalDet = $this->db->query('SELECT * FROM pos_approvaldet 
          						   INNER JOIN user_account 
          						   ON user_account.user_accountID=pos_approvaldet.user_accountID
          						   INNER JOIN user_designation
          						   ON user_designation.user_designationID=user_account.user_accountID
          						   INNER JOIN user_department
          						   ON user_department.user_departmentID=user_account.user_departmentID
          						   WHERE pos_approvaldet.approvalID='.$queryApproval->row()->approvalID.' order by approvalLevel');

      return $queryApprovalDet->result();
    }

    function save_approval($moduleID, $employeeID)
    {	

      $record=array();
      $level=1;

      $queryApproval = $this->db->query("SELECT * FROM pos_approval WHERE moduleID=$moduleID");

      $this->db->where("approvalID", $queryApproval->row()->approvalID);  
      $this->db->delete("pos_approvaldet"); 

      for($i=0; $i<count($employeeID); $i++) {
        $lastapprover = ($i==count($employeeID)-1) ? 1 : 0 ;

      	$record[$i] = array('approvalID'    => $queryApproval->row()->approvalID,
      			  			'user_accountID' 	  => $employeeID[$i],
      			  			'approvalLevel' => $level++,
                            'lastapprover'  => $lastapprover);
      }

      $this->db->insert_batch('pos_approvaldet', $record);

      return $moduleID;
    }	

     function check_isValid($moduleID)
    {
      if($moduleID=="16"){
          $query = $this->db->query('SELECT * FROM inv_purchaserequest WHERE purchaserequeststatus=1');
           }else if($moduleID=="17"){
          $query = $this->db->query('SELECT * FROM inv_purchaseorder  WHERE purchaseorderstatus=1');
      }
       if($query->num_rows() != 0){
        return 'false'; 
      }else{
        return 'true';
      }
	}
}	