<?php 
   	class InventoryItem extends CI_Controller {  

		public function __construct()
		{
			parent::__construct();
			$this->load->model("InventoryItem_model", "inventoryitem");
		}

		public function index() 
		{ 
			$data['title'] = "Inventory Item";
			$data['inventory_items'] = $this->inventoryitem->getAllInventoryItems();
			$data["inventory_storages"] = $this->inventoryitem->getAllInventoryStorages();
			$data["inventory_groups"] = $this->inventoryitem->getAllInventoryGroups();
			$data["measurements"] = $this->inventoryitem->getAllMeasurements();

	  		$this->load->view('template/header', $data);
			$this->load->view('inventoryItem/index', $data);
			$this->load->view('template/footer');
		}

		public function loadWarehouseDetails()
		{
			$warehouseID = $this->input->post("warehouseCode");
			$getWarehouseDetails = $this->inventoryitem->getWarehouseDetails($warehouseID);
			echo json_encode($getWarehouseDetails);
		}

		public function save()
      	{
        	$inventory_itemWarehouseCode = $this->input->post("inventory_itemWarehouseCode");
			$inventory_itemGroupName = $this->input->post("inventory_itemGroupName");
			$inventory_itemName = $this->input->post("inventory_itemName");
			$inventory_itemBasePrice = $this->input->post("inventory_itemBasePrice");
			$inventory_itemUom = $this->input->post("inventory_itemUom");
			$inventory_itemReorderPoint = $this->input->post("inventory_itemReorderPoint");
			$inventory_itemStatus = $this->input->post("inventory_itemStatus");
			$inventory_itemVat = $this->input->post("inventory_itemVat");

			$saveInventoryItem = $this->inventoryitem->saveInventoryItem($inventory_itemWarehouseCode, $inventory_itemGroupName, $inventory_itemName, $inventory_itemBasePrice, $inventory_itemUom, $inventory_itemReorderPoint, $inventory_itemStatus, $inventory_itemVat);
			$result = explode("|", $saveInventoryItem);
			if ($result[0] == "true") {
				$this->session->set_flashdata('success', $result[1]);
			}
			echo json_encode($saveInventoryItem);
		}

		public function update()
		{
			$inventory_itemID = $this->input->post("inventory_itemID");
			$inventory_itemWarehouseCode = $this->input->post("inventory_itemWarehouseCode");
			$inventory_itemGroupName = $this->input->post("inventory_itemGroupName");
			$inventory_itemName = $this->input->post("inventory_itemName");
			$inventory_itemBasePrice = $this->input->post("inventory_itemBasePrice");
			$inventory_itemUom = $this->input->post("inventory_itemUom");
			$inventory_itemReorderPoint = $this->input->post("inventory_itemReorderPoint");
			$inventory_itemStatus = $this->input->post("inventory_itemStatus");
			$inventory_itemVat = $this->input->post("inventory_itemVat");

			$updateInventoryItem = $this->inventoryitem->updateInventoryItem($inventory_itemID, $inventory_itemWarehouseCode, $inventory_itemGroupName, $inventory_itemName, $inventory_itemBasePrice, $inventory_itemUom, $inventory_itemReorderPoint, $inventory_itemStatus, $inventory_itemVat);
			$result = explode("|", $updateInventoryItem);
			if ($result[0] == "true") {
				$this->session->set_flashdata('success', $result[1]);
			}
			echo json_encode($updateInventoryItem);
		}

	}		