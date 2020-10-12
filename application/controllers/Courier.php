<?php 
   
 	class Courier extends CI_Controller {  

 		public function __construct()
  	{
		  parent::__construct();
		  $this->load->model('Courier_model');  
		  $this->Courier = new Courier_model;   
  	}

  	public function index()
  	{
		  $data = array("title" => "Courier");
		  $data['data']=$this->Courier->get_all_Courier();
  		// if (isAllowed(1))$this->load->view('Dashboard/Index');
		// else $this->load->view('Dashboard/Index');

			$this->load->view('template/header',$data);
			$this->load->view('courier/index',$data);
			$this->load->view('template/footer',$data);
	  }
	  
	  public function save()
	  {
		
		$addcourierName = $this->input->post('addcourierName');
		$dataheader = array(
						'courier_name ' => $this->input->post('addcourierName'),
						'courier_contactnumber ' => $this->input->post('addcourierContactnumber'),
						'courier_tinnumber ' => $this->input->post('addcourierTin'),
						'courier_vat ' => $this->input->post('courierVat'),
						'courier_status ' => $this->input->post('courierstatus'));

		// $totaladdcouriercode 	 =$this->input->post('totaladdcouriercode');	
		$totalitename  			 =$this->input->post('totalitename');	
		$totaldescription 	 	 =$this->input->post('totaldescription');	
		$totalrate  			 =$this->input->post('totalrate');
		$courierstatus 			 = $this->input->post('courierstatus');
		
		$data = $this->Courier->Courier_save($dataheader, $addcourierName,  $totalitename, $totaldescription, $totalrate, $courierstatus);
		$retval = explode("|",$data);

            if($retval[0] == "false" && $retval[1] == "Courier already exist!"){
          $this->session->set_flashdata('error', $retval[1]); 
            }else{
                $this->session->set_flashdata('success', $retval[1]); 
            }   
        echo json_encode($data);  

	  }

 	}
