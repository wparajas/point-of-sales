<?php 
   
   	class MenuGroup extends CI_Controller {  

   		public function __construct()
    	{
    		parent::__construct();
        $this->load->model('MenuGroup_model');  
        $this->menugroup = new MenuGroup_model;   

    	}

    	public function index()
    	{
        $data = array("title" => "Menu Group");
        $data['data']=$this->menugroup->get_all_menugroup();
  			$this->load->view('template/header',$data);
  			$this->load->view('menuGroup/index',$data);
  			$this->load->view('template/footer');
    	}

      public function save()
      {
        $menuname = $this->input->post('menuname');
        $menudescription = $this->input->post('menudescription');
        $addstatus = $this->input->post('addstatus');
        $data = $this->menugroup->menugroup_save($menuname, $menudescription, $addstatus);
        $retval = explode("|",$data);

          if($retval[0] == "false" && $retval[1] == "Menu Group already exist!"){
        $this->session->set_flashdata('error', $retval[1]); 
          }else{
              $this->session->set_flashdata('success', $retval[1]); 
          }   
        echo json_encode($data);  

      }
      public function update()
      {
        $id = $this->input->post('id');
        $menuname = $this->input->post('menuname');
        $menudescription = $this->input->post('menudescription');
        $editstatus = $this->input->post('editstatus');

        $data=$this->menugroup->update_menugroup($id, $menuname, $menudescription, $editstatus);
        $retval = explode("|",$data);

          if($retval[0] == "false" && $retval[1] == "Menu group already exist!"){
        $this->session->set_flashdata('error', $retval[1]); 
          }else{
              $this->session->set_flashdata('success', $retval[1]); 
          }   
        echo json_encode($data);  

      }


   	}
