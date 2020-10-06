<?php
	if ($this->session->userdata('userdata')) {
		redirect(base_url().'Login/logout');
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
	  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	  	<meta name="viewport" content="width=device-width,initial-scale=1">
	  	<title>POS and Inventory</title>
	  	<!-- Iconic Fonts -->
	  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	  	<link rel="stylesheet" href="<?php echo base_url();?>pages\vendors\iconic-fonts\flat-icons\flaticon.css">
	  	<link rel="stylesheet" href="<?php echo base_url();?>pages\vendors\iconic-fonts\font-awesome\css\all.min.css">
	  	<link rel="stylesheet" href="<?php echo base_url();?>pages\assets\css\bootstrap.min.css">
	  	<link rel="stylesheet" href="<?php echo base_url();?>pages\assets\css\jquery-ui.min.css">
	  	<link rel="stylesheet" href="<?php echo base_url();?>pages\assets\css\style.css">
	  	<style>
	    	#login-container {
	      		background: url("<?= base_url().'pages/assets/img/bg/login-opacity.png' ?>");
	      		background-repeat: no-repeat;
	      		background-position: center;
	      		background-size: cover;
	      		background-color: rgba(0,0,0,.5);
	    	}
	    	#login-logo {
	      		max-height: 10rem;
	      		max-width: auto;
	      		width: auto;
	    	}
	    	.inputs {
	      		border: 2px solid black;
	    	}
	    	#login-form {
	      		background: #fff6f6a3;
	      		padding: 3rem;
	      		border-radius: 1.2rem;
	      		box-shadow: 0rem 0rem 1rem 1rem #00000012;
	    	}
	  	</style>
	</head>
	<body>
		<div class="ms-content-wrapper ms-auth" id="login-container">
	      	<div class="row" style="padding-top: 10rem; margin-right: 0">
		        <div class="offset-lg-4 offset-md-3 offset-sm-2 col-lg-4 col-md-6 col-sm-8 px-5">
		          	<form class="needs-validation" novalidate="" method="post" action="<?php echo base_url(); ?>Login/login_validation" id="login-form">
			            <div class="text-center">
			              	<img src="<?= base_url().'pages/assets/img/bg/login-logo.png' ?>" alt="" id="login-logo">
			            </div>
		            	<h3 class="text-center mb-5 font-weight-bolder" style="letter-spacing: .5px">LOG IN</h3>
		                <?php if ($this->session->flashdata("error") != "") { ?>
		                    <div class="alert alert-danger alert-dismissible fade show text-center w-100 pt-3 pr-2 pb-3 pl-3" role="alert">
		                    	<?php echo $this->session->flashdata("error"); ?>
		                    </div>
		                <?php } ?>
			            <div class="mb-3">
			              	<label for="validationCustom08" class="font-weight-bold">Username</label>
			              	<div class="input-group">
			                	<input type="text" 
			                       class='form-control  alphanumeric inputs <?php if($this->session->flashdata("error")!="") echo "is-invalid" ?>'
			                       id="username"
			                       name="username"
			                       placeholder="Enter Username"
			                       value='<?php if($this->session->flashdata("error")!="") echo $this->session->flashdata("username"); ?>'
			                       required
			                       minlength="5"
			                       autocomplete="off"
			                       autofocus>
			                	<div class="invalid-feedback" id="invalid-username"></div>
			              	</div>
			            </div>
			            <div class="mb-2">
			              	<label for="validationCustom09" class="font-weight-bold">Password</label>
			              	<div class="input-group">
			                	<!-- <input type="password" 
			                      class='form-control alphanumeric inputs <?php if($this->session->flashdata("error")!="") echo "is-invalid" ?>'
			                      id="password"
			                      name="password"
			                      autocomplete="off"
			                      placeholder="Password" required="">
			                	<div class="invalid-feedback">Please provide a password</div> 
			              	</div> -->
			              	<div class="input-group">
			                  <input type="password" 
			                  		 class='form-control inputs <?php if($this->session->flashdata("error")!="") echo "is-invalid" ?>' 
			                  		 placeholder="Enter Password"
			                  		 id="password"
			                  		 name="password"
			                  		 autocomplete="off"
			                  		 required
			                  		 minlength="5">
			                  <div class="input-group-append">
			                  	<span class="input-group-text" style="cursor: pointer;" onclick="togglePassword(event)"><i class="fas fa-eye" id="eye"></i></span>
			                  </div>
			                  <div class="invalid-feedback" id="invalid-password"></div> 
			                </div>
			            </div>
			            <button class="btn btn-primary mt-4 d-block w-100 font-weight-bold" style="letter-spacing: 1px" type="submit" id="login">Log In</button> 
		          	</form>
		        </div>
	      	</div>
	    </div>

	    <script src="<?php echo base_url(); ?>pages\assets\js\jquery-3.3.1.min.js"></script>
	    <script src="<?php echo base_url(); ?>pages\assets\js\popper.min.js"></script>
	    <script src="<?php echo base_url(); ?>pages\assets\js\bootstrap.min.js"></script>
	    <script src="<?php echo base_url(); ?>pages\assets\js\perfect-scrollbar.js"></script>
	    <script src="<?php echo base_url(); ?>pages\assets\js\jquery-ui.min.js"></script>
	    <script src="<?php echo base_url(); ?>pages\assets\js\framework.js"></script>
	    <script src="<?php echo base_url(); ?>pages\assets\js\settings.js"></script>
	    <script type="text/javascript">

	    	function togglePassword(e) {
	    		e.preventDefault();
	    		const type = $("#password").attr("type");
	    		const changeType = type == "password" ? "text" : "password";
	    		const changeIcon = type == "password" ? "fas fa-eye-slash" : "fas fa-eye";
	    		$("#password").attr("type", changeType);
	    		$("#eye").attr("class", changeIcon);
	    	}

	    </script>
	    <script>
	    	$(document).ready(function() {
	        	$("#username").focus();

	        	$(document).on("click", "#login", function(e) {
	        		e.preventDefault();
	        		const username = $("#username").val().trim();
	        		const password = $("#password").val().trim();
	        		password === "" && (username !== "" || username === "") && $("#password").focus();
	        		username === "" && (password !== "" || password === "") && $("#username").focus();

	        		let countErrors = 0;

	        		if (username == "" || username == null || username == undefined) {
	        			$("#username").addClass("is-invalid");
	        			$("#invalid-username").html("Please input required field");
	        			countErrors++;
	        		} else {
	        			$("#username").removeClass("is-invalid");
	        			$("#username").addClass("is-valid");
	        			$("#invalid-username").html("");
	        		}

	        		if (password == "" || password == null || password == undefined) {
	        			$("#password").addClass("is-invalid");
	        			$("#invalid-password").html("Please input required field");
	        			countErrors++;
	        		} else {
	        			$("#password").removeClass("is-invalid");
	        			$("#password").addClass("is-valid");
	        			$("#invalid-password").html("");
	        		}

	        		if (!countErrors > 0) {
	        			$("#login-form").submit();
	        		}
	        	})

	        	$(document).on("keypress", ".alphanumeric", function(e) {
	        		var regex = new RegExp("^[a-zA-Z0-9_]+$");
				    var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
				    if (regex.test(str)) {
				        return true;
				    }
				    e.preventDefault();
				    return false;
	        	})

	      	}); 
	    </script>
	</body>
</html>