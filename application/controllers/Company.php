<?php 
   
 	class Company extends CI_Controller {  

 		public function __construct()
  	{
  		parent::__construct();
      $this->load->helper('url', 'form');
      $this->load->model("Company_model", "company");
  	}

  	public function index()
  	{
  		$data = array("title" => "Company");

      $userdata = $this->session->userdata("userdata");
      $company_profileID = $userdata['company_profileID'];

  		// if (isAllowed(1))$this->load->view('Dashboard/Index');
		// else $this->load->view('Dashboard/Index');
      $data['business_nature'] = $this->company->getBusinessNature();
      $data['company_profile'] = $this->company->getCompanyProfile($company_profileID);
      $data['company_business'] = $this->company->getCompanyBusiness($company_profileID);

			$this->load->view('Template/Header');
			$this->load->view('Company/Index', $data);
			$this->load->view('Template/Footer');
  	}

    public function saveCompanyDetails()
    {
      $company_profileID = $this->input->post("company_profileID");
      $company_profileName = $this->input->post("company_profileName");
      $company_profileContactperson = $this->input->post("company_profileContactperson");
      $company_profileUnitnumber = $this->input->post("company_profileUnit");
      $company_profileBuilding = $this->input->post("company_profileBuilding");
      $company_profileStreet = $this->input->post("company_profileStreet");
      $company_profileSubdivision = $this->input->post("company_profileSubdivision");
      $company_profileBarangay = $this->input->post("company_profileBarangay");
      $company_profileMunicipality = $this->input->post("company_profileMunicipality");
      $company_profileProvince = $this->input->post("company_profileProvince");
      $company_profileContactnumber = $this->input->post("company_profileContactnumber");
      $company_profileWebsite = $this->input->post("company_profileWebsite");
      $company_profileLogo = $this->input->post("company_profileLogo");
      $company_profileTin = $this->input->post("company_profileTin");
      $company_profileBusiness = $this->input->post("company_profileBusiness");

      $config['upload_path']   = "./uploads/company";
      $config['allowed_types'] = 'jpg|png|jpeg';
      $config['overwrite']     = True;
      $config['max_size']      = 2048000;
      $config['max_width']     = 100000;
      $config['max_height']    = 100000;
      $config['file_name']   = $company_profileID;

      $this->load->library('upload', $config);
      $this->upload->initialize($config);
      $this->input->post('company_profileLogo');

      if (!$this->upload->do_upload('company_profileLogo')) {   
          $this->session->set_flashdata('img', 'error');
          redirect("Company"); 
      } 
      else {
        $data = array(
            'company_profileLogo' => $company_profileID.'.'.pathinfo($_FILES['company_profileLogo']['name'], PATHINFO_EXTENSION)
        );  

        $this->company->updateCompanyLogo($company_profileID, $data); 
        $this->session->set_flashdata('photoupload', 'upload');
      }

      $company_profile = array(
        "company_profileName" => $company_profileName,
        "company_profileContactperson" => $company_profileContactperson,
        "company_profileUnitnumber" => $company_profileUnitnumber,
        "company_profileBuilding" => $company_profileBuilding,
        "company_profileStreet" => $company_profileStreet,
        "company_profileSubdivision" => $company_profileSubdivision,
        "company_profileBarangay" => $company_profileBarangay,
        "company_profileMunicipality" => $company_profileMunicipality,
        "company_profileProvince" => $company_profileProvince,
        "company_profileContactnumber" => $company_profileContactnumber,
        "company_profileWebsite" => $company_profileWebsite,
        // "company_profileLogo" => $company_profileID,
        "company_profileTin" => $company_profileTin
      );

      $company_business = [];
      $countCompanyBusiness = count($company_profileBusiness);
      for ($i=0; $i<$countCompanyBusiness; $i++) {
        $business_natureID = $company_profileBusiness[$i];
        $business = [
          "company_profileID" => $company_profileID,
          "business_natureID" => $business_natureID,
          "company_businessStatus" => 1
        ];
        array_push($company_business, $business);
      }
      // var_dump($company_business);

      $saveCompanyProfile = $this->company->saveCompanyProfile($company_profileID, $company_profile);
      if ($saveCompanyProfile) {
        $saveCompanyBusiness = $this->company->saveCompanyBusiness($company_profileID, $company_business);
        // echo json_encode($saveCompanyBusiness);
        redirect("Company"); 
      }
    }

 	}
