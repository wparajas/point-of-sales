<?php
    if (!defined('BASEPATH')) exit('No direct script access allowed');

    class InventoryItem_model extends CI_Model {

        public function __construct()
        {
            parent::__construct();
        }

        public function getAllInventoryItems()
        {
            $query = "SELECT 
                        item.invr_itemID AS invr_itemID,
                        item.invr_storageID AS invr_storageID,
                        item.invr_groupID AS invr_groupID,
                        item.invr_itemCode AS invr_itemCode,
                        item.invr_itemName AS invr_itemName,
                        item.invr_itemBaseprice AS invr_itemBaseprice,
                        item.measurementID AS measurementID,
                        item.invr_itemReorder AS invr_itemReorder,
                        item.invr_itemVat AS invr_itemVat,
                        item.invr_itemStatus AS invr_itemStatus,
                        grp.invr_groupName AS invr_groupName,
                        uom.measurement_name AS measurement_name,
                        storage.invr_storageCode AS invr_storageCode
                      FROM
                        invr_item AS item
                            INNER JOIN
                        invr_group AS grp ON grp.invr_groupID = item.invr_groupID
                            INNER JOIN
                        measurements AS uom ON uom.measurementID = item.measurementID
                            INNER JOIN
                        invr_storage AS storage ON storage.invr_storageID = item.invr_storageID";
            return $this->db->query($query)->result_array();
        }

        public function getAllInventoryStorages()
        {
            return $this->db->query("SELECT * FROM invr_storage WHERE invr_storageStatus = 1")->result_array();
        }

        public function getWarehouseDetails($warehouseID = "")
        {
            if ($warehouseID !== "") {
                return $this->db->query("SELECT * FROM invr_storage WHERE invr_storageID = ".$warehouseID)->result_array();
            } else {
                return [];
            }
        }

        public function getAllInventoryGroups()
        {
            return $this->db->query("SELECT * FROM invr_group WHERE invr_groupStatus = 1")->result_array();
        }

        public function getAllMeasurements()
        {
            return $this->db->query("SELECT * FROM measurements WHERE measurement_status = 1")->result_array();
        }

        public function getInventoryItemLastID()
        {
            $query = $this->db->query("SELECT invr_itemID FROM invr_item ORDER BY invr_itemID DESC LIMIT 1");
            $result = $query->result_array();
            if ($result) {
                return $result[0]['invr_groupID'];
            } else {
                return 0;
            }
        }

        public function getCurrentUserAccountID()
        {
            $userdata = $this->session->userdata("userdata");
            return $userdata['user_accountID'];
        }

        public function isInventoryItemExists($invr_itemName, $measurementID, $invr_storageID, $invr_groupID, $invr_itemID)
        {
            if ($invr_itemID !== "") {
                $query = $this->db->query("SELECT * FROM invr_item WHERE invr_itemName = '".$invr_itemName."' AND measurementID = ".$measurementID." AND invr_groupID = ".$invr_groupID." AND invr_storageID = ".$invr_storageID." AND invr_itemID != ".$invr_itemID);
                $result = $query->result_array();
                return count($result) > 0 ? true : false;
            } else {
                $query = $this->db->query("SELECT * FROM invr_item WHERE invr_itemName = '".$invr_itemName."' AND measurementID = ".$measurementID." AND invr_groupID = ".$invr_groupID." AND invr_storageID = ".$invr_storageID."");
                $result = $query->result_array();
                return count($result) > 0 ? true : false;
            }
        }

        public function saveInventoryItem($inventory_itemWarehouseCode, $inventory_itemGroupName, $inventory_itemName, $inventory_itemBasePrice, $inventory_itemUom, $inventory_itemReorderPoint, $inventory_itemStatus, $inventory_itemVat)
        {
            // $isInventoryItemExists = $this->isInventoryItemExists($inventory_itemName, $inventory_itemUom, $invr_itemID = "");
            $isInventoryItemExists = $this->isInventoryItemExists($inventory_itemName, $inventory_itemUom, $inventory_itemWarehouseCode, $inventory_itemGroupName, $invr_itemID = "");
            if (!$isInventoryItemExists) {
                $lastID = $this->getInventoryItemLastID();
                $invr_itemCode = generateCode("IC", $lastID);
                $data = [
                    "invr_storageID" => $inventory_itemWarehouseCode,
                    "invr_groupID" => $inventory_itemGroupName,
                    "invr_itemCode" => $invr_itemCode,
                    "invr_itemName" => $inventory_itemName,
                    "invr_itemBaseprice" => $inventory_itemBasePrice,
                    "measurementID" => $inventory_itemUom,
                    "invr_itemReorder" => $inventory_itemReorderPoint,
                    "invr_itemVat" => $inventory_itemVat,
                    "invr_itemStatus" => $inventory_itemStatus,
                    "created_by" => $this->getCurrentUserAccountID()
                ];
                $query = $this->db->insert("invr_item", $data);
                if ($query) {
                    return "true|".$inventory_itemName.' added successfully';
                } else {
                    return "false|System error: Please contact the system administrator for assistance";
                }
            } else {
                return "false|".$inventory_itemName." already exists";
            }
        }

        public function updateInventoryItem($inventory_itemID, $inventory_itemWarehouseCode, $inventory_itemGroupName, $inventory_itemName, $inventory_itemBasePrice, $inventory_itemUom, $inventory_itemReorderPoint, $inventory_itemStatus, $inventory_itemVat)
        {
            // $isInventoryItemExists = $this->isInventoryItemExists($inventory_itemName, $inventory_itemUom, $inventory_itemID);
            $isInventoryItemExists = $this->isInventoryItemExists($inventory_itemName, $inventory_itemUom, $inventory_itemWarehouseCode, $inventory_itemGroupName, $inventory_itemID);
            if (!$isInventoryItemExists) {
                $data = [
                    "invr_storageID" => $inventory_itemWarehouseCode,
                    "invr_groupID" => $inventory_itemGroupName,
                    "invr_itemName" => $inventory_itemName,
                    "invr_itemBaseprice" => $inventory_itemBasePrice,
                    "measurementID" => $inventory_itemUom,
                    "invr_itemReorder" => $inventory_itemReorderPoint,
                    "invr_itemVat" => $inventory_itemVat,
                    "invr_itemStatus" => $inventory_itemStatus,
                    "created_by" => $this->getCurrentUserAccountID()
                ];
                $this->db->where("invr_itemID", $inventory_itemID);
                $query = $this->db->update("invr_item", $data);
                if ($query) {
                    return "true|".$inventory_itemName.' updated successfully';
                } else {
                    return "false|System error: Please contact the system administrator for assistance";
                }
            } else {
                return "false|".$inventory_itemName." already exists";
            }
        }

    }