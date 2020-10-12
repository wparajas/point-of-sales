

  <?php if($this->session->has_userdata('userdata')){ 
    $userdata = $this->session->userdata("userdata");
    $fullname = $userdata["user_accountFirstname"]." ".$userdata["user_accountLastname"];
    // echo $fullname;
  }else{ redirect(base_url()); } ?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Point of Sale - <?= $title; ?></title>
   <!--  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url();?>pages\vendors\iconic-fonts\font-awesome\css\all.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>pages\vendors\iconic-fonts\flat-icons\flaticon.css">
	<link rel="stylesheet" href="<?php echo base_url();?>pages\vendors\iconic-fonts\cryptocoins\cryptocoins.css">
	<link rel="stylesheet" href="<?php echo base_url();?>pages\vendors\iconic-fonts\cryptocoins\cryptocoins-colors.css">
	<link rel="stylesheet" href="<?php echo base_url();?>pages\assets\css\bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>pages\assets\css\jquery-ui.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>pages\assets\css\slick.css"> 
	<link rel="stylesheet" href="<?php echo base_url();?>pages\assets\css\datatables.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>pages\assets\css\jquery.toast.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>pages\assets\css\style.css">  
<link rel="stylesheet" href="<?= base_url().'pages/assets/css/select2.min.css' ?>">
<link rel="stylesheet" href="<?php echo base_url();?>pages\assets\css\select2-bootstrap.css"> 
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url();?>pages\favicon.ico">
  <script src="<?php echo base_url(); ?>pages\assets\js\jquery-3.3.1.min.js"></script>
  <script src="<?php echo base_url();?>pages\assets\js\jquery.toast.min.js"></script>
  <script src="<?php echo base_url();?>pages\assets\js\toast.js"></script>
  





  <!-- Custom CSS for checkbox -->

  <link rel="stylesheet" href="<?= base_url().'pages/assets/css/custom/checkbox.css' ?>">
</head>
<body class="ms-body ms-aside-left-open ms-primary-theme ms-has-quickbar">
  <!-- Preloader -->
  <div id="preloader-wrap">
    <div class="spinner spinner-8">
      <div class="ms-circle1 ms-child"></div>
      <div class="ms-circle2 ms-child"></div>
      <div class="ms-circle3 ms-child"></div>	
      <div class="ms-circle4 ms-child"></div>
      <div class="ms-circle5 ms-child"></div>
      <div class="ms-circle6 ms-child"></div>
      <div class="ms-circle7 ms-child"></div>
      <div class="ms-circle8 ms-child"></div>
      <div class="ms-circle9 ms-child"></div>
      <div class="ms-circle10 ms-child"></div>
      <div class="ms-circle11 ms-child"></div>
      <div class="ms-circle12 ms-child"></div>
    </div>
  </div>
  <!-- Overlays -->
  <div class="ms-aside-overlay ms-overlay-left ms-toggler" data-target="#ms-side-nav" data-toggle="slideLeft"></div>
  <div class="ms-aside-overlay ms-overlay-right ms-toggler" data-target="#ms-recent-activity" data-toggle="slideRight"></div>
  <!-- Sidebar Navigation Left -->
  
   <?php $this->view('Template/Sidebarleft'); ?>
  <!-- Main Content -->
  <main class="body-content">
    <!-- Navigation Bar -->
    <nav class="navbar ms-navbar">
      <div class="ms-aside-toggler ms-toggler pl-0" data-target="#ms-side-nav" data-toggle="slideLeft"> <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
      </div>
      <div class="logo-sn ms-d-block-sm">
      <!-- <div class="logo-sn logo-sm ms-d-block-sm"> -->
        <a class="pl-0 ml-0 text-center navbar-brand mr-0" href="#"><img src="<?php echo base_url();?>pages\assets\img\costic\costic-logo-84x41.png" walt="logo"></a>
      </div>
      <ul class="ms-nav-list ms-inline mb-0" id="ms-nav-options">
         <li class="ms-nav-item ms-nav-user dropdown">
          <a href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class="ms-user-img ms-img-round float-right" src="<?php echo base_url();?>pages\assets\img\costic\customer-6.jpg" alt="people">
          </a>
          <ul class="dropdown-menu dropdown-menu-right user-dropdown" aria-labelledby="userDropdown">
            <li class="dropdown-menu-header">
              <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Welcome, <?= $fullname ?></span></h6>
            </li>
            <li class="dropdown-divider"></li>
            <li class="dropdown-menu-footer"> 
              <span class="green-text"><a class="media fs-14 p-2" href="<?= base_url().'Login/logout' ?>"> <span><i class="flaticon-shut-down mr-2"></i> Logout</span></a></span>
           
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>