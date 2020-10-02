<?php 
   
   	class Permission extends CI_Controller {  

   		public function __construct()
    	{
        //load database in autoload libraries 
         parent::__construct(); 
         $this->load->model('Permission_model');  
         $this->permission = new Permission_model;   

    		
    	}

    	public function index()
    	{
    	
    	
        $data = array('title' => 'Roles & Permissions');

        $data['role']=$this->permission->get_all_roles();
        $data['module']=$this->permission->get_modules(1);

      $this->load->view("Template/Header",$data);
      $this->load->view("Permission/Index",$data);
      $this->load->view("Template/Footer",$data);
    	}

     public function changestatus() 
    { 
      $id = $this->input->post('id');
      $description = $this->input->post('description');
      $status = $this->input->post('status');

          $data=$this->permission->change_status_role($id,$description,$status);
          $retval = explode("|",$data);

            $this->session->set_flashdata('success', $retval[1]); 

        echo json_encode($data);  
    }
    public function loadmodules() 
    { 
          $id = $this->input->post('moduleid');
          
          $data['module']=$this->permission->get_modules($id);
          echo json_encode($data['module']);  
    }
    public function save()
    {
      $description = $this->input->post('description');

          $data=$this->permission->save_role($description);
          $retval = explode("|",$data);

            if($retval[0] == "false" && $retval[1] == "Role name already exist!"){
          $this->session->set_flashdata('errorroles', $retval[1]); 
            }else{
                $this->session->set_flashdata('successroles', $retval[1]); 
            }   
        echo json_encode($data);  

    } 

    public function update() 
    { 
      $id = $this->input->post('id');
      $description = $this->input->post('description');

          $data=$this->permission->update_role($id, $description);
          $retval = explode("|",$data);

            if($retval[0] == "false" && $retval[1] == "Role name already exist!"){
          $this->session->set_flashdata('errorroles', $retval[1]); 
            }else{
                $this->session->set_flashdata('successroles', $retval[1]); 
            }   
        echo json_encode($data);  
    }    

   	}
