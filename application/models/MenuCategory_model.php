<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MenuCategory_model extends CI_Model
{
	function __construct() 
	{ 
	 parent::__construct(); 
	}
	function get_all_menucategory()
	{
		
		$menugroupquery = $this->db->query('SELECT * FROM pos_menugroup WHERE menugroupstatus =1');
		$menucategoryquery = $this->db->query("SELECT mc.menucategoryID,mc.menugroupID,mg.menugroup,mc.menucategoryname, mc.menucategorystatus FROM
											pos_menucategory as mc
											LEFT JOIN pos_menugroup AS mg ON mc.menugroupID = mg.menugroupID");
	
		$menugroup 		= $menugroupquery->result();
		$menucategory 	= $menucategoryquery->result();

		 return array('menugroup' => $menugroup, 'menucategory' => $menucategory);

	}
	function menucategory_save($addmenugroup, $addmenucategory, $addstatus)
	{

		$query = $this->db->query("SELECT menucategoryname FROM pos_menucategory WHERE menucategoryname = '$addmenucategory'");
		if($query->num_rows() == 0){
			$data = array(
					'menugroupID' => $addmenugroup,
					'menucategoryname' => $addmenucategory,
					'menucategorystatus' => $addstatus);

			$this->db->insert('pos_menucategory', $data);
			return "true|".$addmenucategory.' added successfully';
		}
		else 
		{
			return "false|".$addmenucategory." already exists";
		}   

	}
	function menucategory_update($id, $editgroupname, $editgroupategory, $editstatus)
	{

		$query = $this->db->query('SELECT menucategoryname FROM pos_menucategory WHERE  menucategoryid !='.$id.' AND menucategoryname  = "'.$editgroupategory.'"');
		if($query->num_rows() == 0){
			$data = array(
					'menugroupID' => $editgroupname,
					'menucategoryname' => $editgroupategory,
					'menucategorystatus' => $editstatus);

		$this->db->where("menucategoryid", $id);  
        $this->db->update("pos_menucategory", $data);  

	   		return "true|".$editgroupategory.' updated successfully';
		}
		else 
		{
			return "false|".$editgroupategory." already exists";
		}   

		
	}

}	