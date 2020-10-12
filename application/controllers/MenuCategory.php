<?php 
   
   	class MenuCategory extends CI_Controller {  

   		public function __construct()
    	{
    		parent::__construct();
        $this->load->model('MenuCategory_model');  
        $this->menucategory = new MenuCategory_model;  
    	}

    	public function index()
    	{
         $data = array("title" => "Menu Category");
			$data['data']=$this->menucategory->get_all_menucategory();
  			$this->load->view('template/header',$data);
  			$this->load->view('menuCategory/index',$data);
  			$this->load->view('template/footer');
    	}

      public function save()
      {
        $addmenugroup = $this->input->post('addmenugroup');
        $addmenucategory = $this->input->post('addmenucategory');
        $addstatus = $this->input->post('addstatus');

         $data = $this->menucategory->menucategory_save($addmenugroup, $addmenucategory, $addstatus);
         $retval = explode("|",$data);

            if($retval[0] == "false" && $retval[1] == "Menu Category already exist!"){
             $this->session->set_flashdata('error', $retval[1]); 
            }else{
                $this->session->set_flashdata('success', $retval[1]); 
            }   
        echo json_encode($data);  

      }
      public function update()
      {
        $id = $this->input->post('id');
        $editgroupname = $this->input->post('editgroupname');
        $editgroupategory = $this->input->post('editgroupategory');
        $editstatus = $this->input->post('editstatus');
        $data=$this->menucategory->menucategory_update($id, $editgroupname, $editgroupategory, $editstatus);
          $retval = explode("|",$data);

            if($retval[0] == "false" && $retval[1] == "Menu group already exist!"){
          $this->session->set_flashdata('error', $retval[1]); 
            }else{
                $this->session->set_flashdata('success', $retval[1]); 
            }   
        echo json_encode($data);  

      }

   	}
