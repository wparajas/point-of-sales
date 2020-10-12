<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courier_model extends CI_Model
{
	function __construct() 
	{ 
	 parent::__construct(); 
    }

    function get_all_Courier()
    {
            $query = $this->db->query("SELECT courierID,courier_name, GROUP_CONCAT(LEFT(courier_name,3),'-',LEFT(datecreated,2),'-',LPAD(courierID,5,'0')) AS couriercode,
            courier_name,courier_contactnumber, courier_tinnumber,courier_vat,courier_status FROM logistic_courier GROUP BY courierID");
            return $query->result();
    }

    function Courier_save($dataheader, $addcourierName, $totalitename, $totaldescription, $totalrate, $courierstatus)
	{
        $query = $this->db->query("SELECT courier_name FROM logistic_courier WHERE courier_name = '$addcourierName'");
        if($query->num_rows() == 0){
            $this->db->insert('logistic_courier', $dataheader);
            $last_id    =	$this->db->insert_id();
            $record  = array();
            for($count = 0; $count<count($totalitename); $count++)
            {
                $record[$count] = array ('courierID'             =>	$last_id,
                                        'couriername'            =>  $totalitename[$count],
                                        'courierdescription'     =>  $totaldescription[$count],
                                        'courierrate'            =>  $totalrate[$count],
                                        'courierdetailstatus'    =>  $courierstatus);

            }
            $this->db->insert_batch('logistic_courierdetail',$record);
			return 'true| Added successfully';

        }else{

            return 'false|Menu Group name already exist!';
        }    
    }   

}    