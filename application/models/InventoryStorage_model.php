<?php
    if (!defined('BASEPATH')) exit('No direct script access allowed');

    class InventoryStorage_model extends CI_Model {

        public function __construct()
        {
            parent::__construct();
        }

        public function getAllInventoryStorage()
        {
            $query = $this->db->query("SELECT * FROM invr_storage");
            return $query->result_array();
        }

        public function getAllUserDepartment()
        {
            $query = $this->db->query("SELECT * FROM user_department WHERE user_departmentStatus = 1");
            return $query->result_array();
        }

        public function getCurrentUserAccountID()
        {
            $userdata = $this->session->userdata("userdata");
            return $userdata['user_accountID'];
        }

        public function getInventoryStorageLastID()
        {
            $query = $this->db->query("SELECT invr_storageID FROM invr_storage ORDER BY invr_storageID DESC LIMIT 1");
            $result = $query->result_array();
            if ($result) {
                return $result[0]['invr_storageID'];
            } else {
                return 0;
            }
        }

        public function isDepartmentExists($inventory_storageDepartment = "")
        {
            $query = $this->db->query("SELECT * FROM user_department WHERE user_departmentID = ".$inventory_storageDepartment." AND user_departmentStatus = 1");
            $result = $query->result_array();
            return count($result) > 0 ? true : false;
        }

        public function getUserDepartmentID($inventory_storageDepartment)
        {
            $query = $this->db->query("SELECT * FROM user_department WHERE user_departmentName = '".$inventory_storageDepartment."' AND user_departmentStatus = 1");
            $result = $query->result_array();
            return $result ? $result[0]["user_departmentID"] : NULL;
        }

        public function isInventoryStorageExists($inventory_storageName, $inventory_storageID = "")
        {
            if ($inventory_storageID !== "") {  
                $query = $this->db->query("SELECT * FROM invr_storage WHERE invr_storageName = '".$inventory_storageName."' AND invr_storageID != ".$inventory_storageID);
                $result = $query->result_array();
                return count($result) > 0 ? true : false;
            } else {
                $query = $this->db->query("SELECT * FROM invr_storage WHERE invr_storageName = '".$inventory_storageName."'");
                $result = $query->result_array();
                return count($result) > 0 ? true : false;
            }
        }

        public function saveInventoryStorageData($invr_storageName, $invr_storageDepartment, $invr_storageAddress, $invr_storageFloor, $invr_storageBay, $invr_storageLevel, $invr_storageStatus)
        {
            $user_departmentID = $invr_storageDepartment;
            $isInventoryStorageExists = $this->isInventoryStorageExists($invr_storageName, $inventory_storageID = "");
            if (!$isInventoryStorageExists) {
                $lastID = $this->getInventoryStorageLastID();
                $invr_storageCode = generateCode("WAR", $lastID);
                $data = [
                    "user_departmentID" => $user_departmentID,
                    "invr_storageCode" => $invr_storageCode,
                    "invr_storageName" => $invr_storageName,
                    "invr_storageAddress" => $invr_storageAddress,
                    "invr_storageFloor" => $invr_storageFloor,
                    "invr_storageBay" => $invr_storageBay,
                    "invr_storageLevel" => $invr_storageLevel,
                    "invr_storageStatus" => $invr_storageStatus,
                    "created_by" => $this->getCurrentUserAccountID()
                ];
                $query = $this->db->insert("invr_storage", $data);
                if ($query) {
                    return "true|".$invr_storageName.' added successfully';
                } else {
                    return "false|System error: Please contact the system administrator for assistance";
                }
            } else {
                return "false|".$invr_storageName." already exists";
            }
        }

        public function saveInventoryStorage($invr_storageName, $invr_storageDepartment, $invr_storageAddress, $invr_storageFloor, $invr_storageBay, $invr_storageLevel, $invr_storageStatus)
        {
            $hasUserDepartment = $invr_storageDepartment != "" ? true : false;
            if ($hasUserDepartment) {
                $isDepartmentExists = $this->isDepartmentExists($invr_storageDepartment);
                if ($isDepartmentExists) {
                    return $this->saveInventoryStorageData($invr_storageName, $invr_storageDepartment, $invr_storageAddress, $invr_storageFloor, $invr_storageBay, $invr_storageLevel, $invr_storageStatus);
                } else {
                    return "false|".$invr_storageDepartment." department doesn't exists";
                }
            } else {
                $invr_storageDepartmentNull = NULL;
                return $this->saveInventoryStorageData($invr_storageName, $invr_storageDepartmentNull, $invr_storageAddress, $invr_storageFloor, $invr_storageBay, $invr_storageLevel, $invr_storageStatus);
            }
        }

        public function updateInventoryStorageData($invr_storageID, $invr_storageName, $invr_storageDepartment, $invr_storageAddress, $invr_storageFloor, $invr_storageBay, $invr_storageLevel, $invr_storageStatus)
        {
            $user_departmentID = $invr_storageDepartment;
            $isInventoryStorageExists = $this->isInventoryStorageExists($invr_storageName, $invr_storageID);
            if (!$isInventoryStorageExists) {
                $data = [
                    "user_departmentID" => $user_departmentID,
                    "invr_storageName" => $invr_storageName,
                    "invr_storageAddress" => $invr_storageAddress,
                    "invr_storageFloor" => $invr_storageFloor,
                    "invr_storageBay" => $invr_storageBay,
                    "invr_storageLevel" => $invr_storageLevel,
                    "invr_storageStatus" => $invr_storageStatus,
                    "created_by" => $this->getCurrentUserAccountID()
                ];
                $this->db->where("invr_storageID", $invr_storageID);
                $query = $this->db->update("invr_storage", $data);
                if ($query) {
                    return "true|".$invr_storageName.' updated successfully';
                } else {
                    return "false|System error: Please contact the system administrator for assistance";
                }
            } else {
                return "false|".$invr_storageName." already exists";
            }
        }

        public function updateInventoryStorage($invr_storageID, $invr_storageName, $invr_storageDepartment, $invr_storageAddress, $invr_storageFloor, $invr_storageBay, $invr_storageLevel, $invr_storageStatus)
        {
            $hasUserDepartment = $invr_storageDepartment != "" ? true : false;
            if ($hasUserDepartment) {
                $isDepartmentExists = $this->isDepartmentExists($invr_storageDepartment);
                if ($isDepartmentExists) {
                    return $this->updateInventoryStorageData($invr_storageID, $invr_storageName, $invr_storageDepartment, $invr_storageAddress, $invr_storageFloor, $invr_storageBay, $invr_storageLevel, $invr_storageStatus);
                } else {
                    return "false|".$invr_storageDepartment." department doesn't exists";
                }
            } else {
                $invr_storageDepartmentNull = NULL;
                return $this->updateInventoryStorageData($invr_storageID, $invr_storageName, $invr_storageDepartmentNull, $invr_storageAddress, $invr_storageFloor, $invr_storageBay, $invr_storageLevel, $invr_storageStatus);
            }
        }

    }