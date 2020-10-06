<?php 
   
   	class InventoryStorage extends CI_Controller {  

   		public function __construct()
    	{
    		parent::__construct();
        	$this->load->model("InventoryStorage_model");
        	$this->inventorystorage = new InventoryStorage_model;
    	}

    	public function index()
    	{
        	$data['inventory_storage'] = $this->inventorystorage->getAllInventoryStorage();
        	$data['user_department'] = $this->inventorystorage->getAllUserDepartment();

  			$this->load->view('Template/Header');
  			$this->load->view('InventoryStorage/Index', $data);
  			$this->load->view('Template/Footer');
    	}

      	public function save()
      	{
        	$inventory_storageName = $this->input->post("inventory_storageName");
			$inventory_storageDepartment = $this->input->post("inventory_storageDepartment");
			$inventory_storageAddress = $this->input->post("inventory_storageAddress");
			$inventory_storageFloor = $this->input->post("inventory_storageFloor");
			$inventory_storageBay = $this->input->post("inventory_storageBay");
			$inventory_storageLevel = $this->input->post("inventory_storageLevel");
			$inventory_storageStatus = $this->input->post("inventory_storageStatus");

			$saveInventoryStorage = $this->inventorystorage->saveInventoryStorage($inventory_storageName, $inventory_storageDepartment, $inventory_storageAddress, $inventory_storageFloor, $inventory_storageBay, $inventory_storageLevel, $inventory_storageStatus);
			$result = explode("|", $saveInventoryStorage);
			if ($result[0] == "true") {
				$this->session->set_flashdata('success', $result[1]);
			}
			echo json_encode($saveInventoryStorage);
		}

		public function update()
		{
			$inventory_storageID = $this->input->post("inventory_storageID");
			$inventory_storageName = $this->input->post("inventory_storageName");
			$inventory_storageDepartment = $this->input->post("inventory_storageDepartment");
			$inventory_storageAddress = $this->input->post("inventory_storageAddress");
			$inventory_storageFloor = $this->input->post("inventory_storageFloor");
			$inventory_storageBay = $this->input->post("inventory_storageBay");
			$inventory_storageLevel = $this->input->post("inventory_storageLevel");
			$inventory_storageStatus = $this->input->post("inventory_storageStatus");

			$updateInventoryStorage = $this->inventorystorage->updateInventoryStorage($inventory_storageID, $inventory_storageName, $inventory_storageDepartment, $inventory_storageAddress, $inventory_storageFloor, $inventory_storageBay, $inventory_storageLevel, $inventory_storageStatus);
			$result = explode("|", $updateInventoryStorage);
			if ($result[0] == "true") {
				$this->session->set_flashdata('success', $result[1]);
			}
			echo json_encode($updateInventoryStorage);
		}

   	}
