<?php 
    class Login extends CI_Controller {  
     
    	public function __construct()
    	{
    		parent::__construct();

    		// LOAD USER ACCOUNT MODEL
    		$this->load->model('Login_model');
    		$this->login = new Login_model; 
    	}

     	// DEFAULT LANDING PAGE
		public function index() 
		{ 
			// if ($this->session->has_userdata('userdata')){
			// 	redirect(base_url() .'Dashboard');
			// }
			$this->load->view("login/index");
		}

		public function login_validation()
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			
			$data = $this->login->login_validation($username, $password);
			// INCORRECT
			if ($data->num_rows() == 0) 
			{
				$this->session->set_flashdata('username', $username);
				$this->session->set_flashdata('error', 'Incorrect username or password');
				redirect(base_url());
			} 
			else
			{
				$userdata = $data->row_array();

				if ($userdata['user_accountStatus'] == 1)
				{
					$this->session->set_userdata('userdata', $userdata);
					$this->session->set_flashdata('success', 'Log in successfully!');
					redirect(base_url() .'dashboard');
				} 
				else
				{
					// WHEN THE USERNAME WAS INACTIVE
					$this->session->set_flashdata('username', $username);
					$this->session->set_flashdata('error', 'The Account that you are trying to access is inactive.<br><br> Please contact the system administrator for more information');
					redirect(base_url());
				}
			}
		}

		public function logout()
		{
		    $this->session->unset_userdata('userdata');
		    redirect(base_url());
		}   

	}


























































