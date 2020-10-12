<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MenuGroup_model extends CI_Model
{
	function __construct() 
	{ 
	 parent::__construct(); 
	}
function get_all_menugroup()
{
		$query = $this->db->query("SELECT * FROM pos_menugroup");
	    return $query->result();

}
function menugroup_save($menuname, $menudescription, $addstatus)
	{
		$query = $this->db->query("SELECT menugroup FROM pos_menugroup WHERE menugroup = '$menuname'");
		if($query->num_rows() == 0){
			$data = array(
					'menugroup' => $menuname,
					'menudescription' => $menudescription,
					'menugroupstatus' => $addstatus);

			$this->db->insert('pos_menugroup', $data);
				return "true|".$menuname.' added successfully';
			}
			else 
			{
				return "false|".$menuname." already exists";
		}     

	}
function update_menugroup($id, $menuname, $menudescription, $editstatus)
	{
		$query = $this->db->query('SELECT menugroup FROM pos_menugroup WHERE menugroupID!='.$id.' AND menugroup = "'.$menuname.'"');

		if($query->num_rows() == 0){

			$data = array(
					'menugroup' => $menuname,
					'menudescription' => $menudescription,
					'menugroupstatus' => $editstatus);

			$this->db->where("menugroupID", $id);  
			$this->db->update("pos_menugroup", $data);  
			
			return "true|".$menuname.' updated successfully';
		}
		else 
		{
			return "false|".$menuname." already exists";
			
		}   
  	}		
}	