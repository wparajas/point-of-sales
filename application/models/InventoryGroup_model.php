<?php
    if (!defined('BASEPATH')) exit('No direct script access allowed');

    class InventoryGroup_model extends CI_Model {

        public function __construct()
        {
            parent::__construct();
        }

        public function getAllInventoryGroup()
        {
            $query = $this->db->query("SELECT * FROM invr_group");
            return $query->result_array();
        }

        public function getCurrentUserAccountID()
        {
            $userdata = $this->session->userdata("userdata");
            return $userdata['user_accountID'];
        }

        public function getInventoryGroupLastID()
        {
            $query = $this->db->query("SELECT invr_groupID FROM invr_group ORDER BY invr_groupID DESC LIMIT 1");
            $result = $query->result_array();
            if ($result) {
                return $result[0]['invr_groupID'];
            } else {
                return 0;
            }
        }

        public function isInventoryGroupExisting($inventory_groupName, $inventory_groupID = "")
        {
            if ($inventory_groupID !== "") {
                $query = $this->db->query("SELECT * FROM invr_group WHERE invr_groupName = '".$inventory_groupName."' AND invr_groupID != ".$inventory_groupID);
                $result = $query->result_array();
                return count($result) > 0 ? true : false;
            } else {
                $query = $this->db->query("SELECT * FROM invr_group WHERE invr_groupName = '".$inventory_groupName."'");
                $result = $query->result_array();
                return count($result) > 0 ? true : false;
            }
        }

        public function saveInventoryGroup($inventory_groupName, $inventory_groupDescription, $inventory_groupStatus)
        {
            $isInventoryGroupExisting = $this->isInventoryGroupExisting($inventory_groupName, $inventory_groupID = "");
            if (!$isInventoryGroupExisting) {
                $lastID = $this->getInventoryGroupLastID();
                $invr_groupCode = generateCode("IGC", $lastID);
                $data = [
                    "invr_groupCode" => $invr_groupCode,
                    "invr_groupName" => $inventory_groupName,
                    "invr_groupDescription" => $inventory_groupDescription,
                    "invr_groupStatus" => $inventory_groupStatus,
                    "created_by" => $this->getCurrentUserAccountID()
                ];
                $query = $this->db->insert("invr_group", $data);
                if ($query) {
                    return "true|".$inventory_groupName.' added successfully';
                } else {
                    return "false|System error: Please contact the system administrator for assistance";
                }
            } else {
                return "false|".$inventory_groupName." already exists";
            }
        }

        public function updateInventoryGroup($inventory_groupID, $inventory_groupName, $inventory_groupDescription, $inventory_groupStatus)
        {
            $isInventoryGroupExisting = $this->isInventoryGroupExisting($inventory_groupName, $inventory_groupID);
            if (!$isInventoryGroupExisting) {
                $data = [
                    "invr_groupName" => $inventory_groupName,
                    "invr_groupDescription" => $inventory_groupDescription,
                    "invr_groupStatus" => $inventory_groupStatus,
                    "created_by" => $this->getCurrentUserAccountID()
                ];
                $this->db->where("invr_groupID", $inventory_groupID);
                $query = $this->db->update("invr_group", $data);
                if ($query) {
                    return "true|".$inventory_groupName.' updated successfully';
                } else {
                    return "false|System error: Please contact the system administrator for assistance";
                }
            } else {
                return "false|".$inventory_groupName." already exists";
            }
        }

    }