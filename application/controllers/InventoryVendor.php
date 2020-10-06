<?php 
   
    class InventoryVendor extends CI_Controller {  

      public function __construct()
      {
        parent::__construct();
        $this->load->model("InventoryVendor_model", "inventoryvendor");
      }

      public function index()
      {
        $data = array("title" => "Inventory Vendor");
        // if (isAllowed(1))$this->load->view('Dashboard/Index');
        // else $this->load->view('Dashboard/Index');
        $data['inventory_vendors'] = $this->inventoryvendor->getAllInventoryVendor();

        $this->load->view('Template/Header');
        $this->load->view('InventoryVendor/Index', $data);
        $this->load->view('Template/Footer');
      }

      public function save()
      {
        $inventory_vendorSupplier = $this->input->post("inventory_vendorSupplier");
        $inventory_vendorAddress = $this->input->post("inventory_vendorAddress");
        $inventory_vendorContactperson = $this->input->post("inventory_vendorContactperson");
        $inventory_vendorContactnumber = $this->input->post("inventory_vendorContactnumber");
        $inventory_vendorTin = $this->input->post("inventory_vendorTin");
        $inventory_vendorVat = $this->input->post("inventory_vendorVat");
        $inventory_vendorStatus = $this->input->post("inventory_vendorStatus");

        $saveInventoryVendor = $this->inventoryvendor->saveInventoryVendor($inventory_vendorSupplier, $inventory_vendorAddress, $inventory_vendorContactperson, $inventory_vendorContactnumber, $inventory_vendorTin, $inventory_vendorVat, $inventory_vendorStatus);
        $result = explode("|", $saveInventoryVendor);
        if ($result[0] == "true") {
          $this->session->set_flashdata('success', $result[1]);
        }
        echo json_encode($saveInventoryVendor);
      }

      public function update()
      {
        $inventory_vendorID = $this->input->post("inventory_vendorID");
        $inventory_vendorSupplier = $this->input->post("inventory_vendorSupplier");
        $inventory_vendorAddress = $this->input->post("inventory_vendorAddress");
        $inventory_vendorContactperson = $this->input->post("inventory_vendorContactperson");
        $inventory_vendorContactnumber = $this->input->post("inventory_vendorContactnumber");
        $inventory_vendorTin = $this->input->post("inventory_vendorTin");
        $inventory_vendorVat = $this->input->post("inventory_vendorVat");
        $inventory_vendorStatus = $this->input->post("inventory_vendorStatus");

        $updateInventoryVendor = $this->inventoryvendor->updateInventoryVendor($inventory_vendorID, $inventory_vendorSupplier, $inventory_vendorAddress, $inventory_vendorContactperson, $inventory_vendorContactnumber, $inventory_vendorTin, $inventory_vendorVat, $inventory_vendorStatus);
        $result = explode("|", $updateInventoryVendor);
        if ($result[0] == "true") {
          $this->session->set_flashdata('success', $result[1]);
        }
        echo json_encode($updateInventoryVendor);
      }

    }
