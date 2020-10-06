<?php 
   
   	class InventoryGroup extends CI_Controller {  

   		public function __construct()
    	{
			parent::__construct();
			$this->load->model("InventoryGroup_model", "inventorygroup");
    	}

    	public function index()
    	{
			$data['inventory_groups'] = $this->inventorygroup->getAllInventoryGroup();

  			$this->load->view('Template/Header');
  			$this->load->view('InventoryGroup/Index', $data);
  			$this->load->view('Template/Footer');
		}
		
		public function save()
      	{
        	$inventory_groupName = $this->input->post("inventory_groupName");
			$inventory_groupDescription = $this->input->post("inventory_groupDescription");
			$inventory_groupStatus = $this->input->post("inventory_groupStatus");

			$saveInventoryGroup = $this->inventorygroup->saveInventoryGroup($inventory_groupName, $inventory_groupDescription, $inventory_groupStatus);
			$result = explode("|", $saveInventoryGroup);
			if ($result[0] == "true") {
				$this->session->set_flashdata('success', $result[1]);
			}
			echo json_encode($saveInventoryGroup);
		}

		public function update()
		{
			$inventory_groupID = $this->input->post("inventory_groupID");
			$inventory_groupName = $this->input->post("inventory_groupName");
			$inventory_groupDescription = $this->input->post("inventory_groupDescription");
			$inventory_groupStatus = $this->input->post("inventory_groupStatus");

			$updateInventoryGroup = $this->inventorygroup->updateInventoryGroup($inventory_groupID, $inventory_groupName, $inventory_groupDescription, $inventory_groupStatus);
			$result = explode("|", $updateInventoryGroup);
			if ($result[0] == "true") {
				$this->session->set_flashdata('success', $result[1]);
			}
			echo json_encode($updateInventoryGroup);
		}

   	}
