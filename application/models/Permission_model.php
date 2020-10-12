<?php

	if (!defined('BASEPATH')) exit('No direct script access allowed');

	class Permission_model extends CI_Model {

		public function __construct()
	{
		parent::__construct();
	}

		function get_all_roles()
	{
		$this->db->select('*');
    	$this->db->from('pos_rolemstr');
    	$query = $this->db->get();

	    return $query->result();
  	}
  	function get_modules($id)


	{

    	$query = $this->db->query("SELECT rol.ID, rol.roleID,rol.moduleID,rlm.roledescription,md.moduledescription,md.moduleShortDesc,rol.modulestatus 
									FROM pos_rolemodule  AS rol
									INNER JOIN pos_modulemstr as md ON md.moduleID=rol.moduleID
									INNER JOIN pos_rolemstr AS rlm ON rol.roleID = rlm.roleID WHERE rol.roleid =$id");
	    return $query->result();


  	}
  	function change_status_role($id,$description,$status)
	{
		$data = array('modulestatus' => $status);

        $this->db->where("ID", $id);  
      	$this->db->update("pos_rolemodule", $data);  

  		if($status=="1") return 'true|'.$description.' has been enabled!|enabled';
  		else return 'true|'.$description.' has been disabled!|disabled';
  	}

  	function save_role($description)
	{
		$query = $this->db->query('SELECT roleDescription FROM pos_rolemstr WHERE roleDescription = "'.$description.'"');

		if($query->num_rows() == 0){

			$data = array('roleDescription' => $description);
			$this->db->insert('pos_rolemstr', $data);

			$last_id = $this->db->insert_id();

			// remind itatanong ko ito kung paano ang process
			$record =array();
			for($i=1; $i<=38; $i++) {

				$record[$i] = array('roleID' 		=> $last_id,
						  			'moduleID' 		=> $i);
			}

			$this->db->insert_batch('pos_rolemodule', $record);

			return 'true|Added successfully';
		}
		else 
		{
			return 'false|Role name already exist!';
		}   
  	}

  	function update_role($id,$description)
	{
		$query = $this->db->query('SELECT roleDescription FROM pos_rolemstr WHERE roleID!='.$id.' AND roleDescription = "'.$description.'"');

		if($query->num_rows() == 0){

			$data = array(
				'roleDescription' => $description
			 );

			$this->db->where("roleID", $id);  
            $this->db->update("pos_rolemstr", $data);  

			return 'true|Updated successfully';
		}
		else 
		{
			return 'false|Role name already exist!';
		}   
  	}

	}	