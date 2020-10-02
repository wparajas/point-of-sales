<?php 
	function isAllowed($module)
	{
		$CI=&get_instance();
		  $userdata = $this->session->userdata('userdata');
  		$user_roleID = $userdata['roleID'];
		$CI->db->select('*');
		$CI->db->from('pos_rolemodule');
		$CI->db->where("roleID", $user_roleID);  
		$CI->db->where("moduleID", $module);  
		$result = $CI->db->get()->result();

	    foreach($result as $single)
		{
		   if($single->modulestatus==1) return true;
		   						   else return false;
		}
	}
?>