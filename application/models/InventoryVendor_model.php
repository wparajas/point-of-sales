<?php
    if (!defined('BASEPATH')) exit('No direct script access allowed');

    class InventoryVendor_model extends CI_Model {

        public function __construct()
        {
            parent::__construct();
        }

        public function getAllInventoryVendor()
        {
            $query = $this->db->get("invr_vendor");
            return $query->result_array();
        }

        public function getCurrentUserAccountID()
        {
            $userdata = $this->session->userdata("userdata");
            return $userdata['user_accountID'];
        }

        public function getInventoryVendorLastID()
        {
            $query = $this->db->query("SELECT invr_vendorID FROM invr_vendor ORDER BY invr_vendorID DESC LIMIT 1");
            $result = $query->result_array();
            if ($result) {
                return $result[0]['invr_vendorID'];
            } else {
                return 0;
            }
        }

        public function isInventoryVendorExisting($invr_vendorName, $invr_vendorID = "")
        {
            if ($invr_vendorID !== "") {
                $query = $this->db->query("SELECT * FROM invr_vendor WHERE invr_vendorName = '".$invr_vendorName."' AND invr_vendorID != ".$invr_vendorID);
                $result = $query->result_array();
                return count($result) > 0 ? true : false;
            } else {
                $query = $this->db->query("SELECT * FROM invr_vendor WHERE invr_vendorName = '".$invr_vendorName."'");
                $result = $query->result_array();
                return count($result) > 0 ? true : false;
            }
        }

        public function saveInventoryVendor($inventory_vendorSupplier, $inventory_vendorAddress, $inventory_vendorContactperson, $inventory_vendorContactnumber, $inventory_vendorTin, $inventory_vendorVat, $inventory_vendorStatus) 
        {
            $isInventoryVendorExisting = $this->isInventoryVendorExisting($inventory_vendorSupplier, $inventory_vendorID = "");
            if (!$isInventoryVendorExisting) {
                $lastID = $this->getInventoryVendorLastID();
                $invr_vendorCode = generateCode("SUP", $lastID);
                $data = [
                    "invr_vendorCode" => $invr_vendorCode,
                    "invr_vendorName" => $inventory_vendorSupplier,
                    "invr_vendorAddress" => $inventory_vendorAddress,
                    "invr_vendorContactperson" => $inventory_vendorContactperson,
                    "invr_vendorContactnumber" => $inventory_vendorContactnumber,
                    "invr_vendorTin" => $inventory_vendorTin,
                    "invr_vendorVat" => $inventory_vendorVat,
                    "invr_vendorStatus" => $inventory_vendorStatus,
                    "created_by" => $this->getCurrentUserAccountID()
                ];
                $query = $this->db->insert("invr_vendor", $data);
                if ($query) {
                    return "true|".$inventory_vendorSupplier.' added successfully';
                } else {
                    return "false|System error: Please contact the system administrator for assistance";
                }
            } else {
                return "false|".$inventory_vendorSupplier." already exists";
            }
        }

        public function updateInventoryVendor($inventory_vendorID, $inventory_vendorSupplier, $inventory_vendorAddress, $inventory_vendorContactperson, $inventory_vendorContactnumber, $inventory_vendorTin, $inventory_vendorVat, $inventory_vendorStatus) 
        {
            $isInventoryVendorExisting = $this->isInventoryVendorExisting($inventory_vendorSupplier, $inventory_vendorID);
            if (!$isInventoryVendorExisting) {
                $data = [
                    "invr_vendorName" => $inventory_vendorSupplier,
                    "invr_vendorAddress" => $inventory_vendorAddress,
                    "invr_vendorContactperson" => $inventory_vendorContactperson,
                    "invr_vendorContactnumber" => $inventory_vendorContactnumber,
                    "invr_vendorTin" => $inventory_vendorTin,
                    "invr_vendorVat" => $inventory_vendorVat,
                    "invr_vendorStatus" => $inventory_vendorStatus,
                    "created_by" => $this->getCurrentUserAccountID()
                ];
                $this->db->where("invr_vendorID", $inventory_vendorID);
                $query = $this->db->update("invr_vendor", $data);
                if ($query) {
                    return "true|".$inventory_vendorSupplier.' updated successfully';
                } else {
                    return "false|System error: Please contact the system administrator for assistance";
                }
            } else {
                return "false|".$inventory_vendorSupplier." already exists";
            }
        }

    }