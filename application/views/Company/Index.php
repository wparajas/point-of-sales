<?php 
	// var_dump($this->session->userdata("userdata"));
	$userdata = $this->session->userdata("userdata");
	$company_profileID = $userdata['company_profileID'];
	// echo $company_profileID;

	foreach ($company_profile as $profile) {
		$company_profileName = $profile['company_profileName'];
		$company_profileContactperson = $profile['company_profileContactperson'];
		$company_profileContactnumber = $profile['company_profileContactnumber'];
		$company_profileUnit = $profile['company_profileUnitnumber'];
		$company_profileBuilding = $profile['company_profileBuilding'];
		$company_profileStreet = $profile['company_profileStreet'];
		$company_profileSubdivision = $profile['company_profileSubdivision'];
		$company_profileBarangay = $profile['company_profileBarangay'];
		$company_profileMunicipality = $profile['company_profileMunicipality'];
		$company_profileProvince = $profile['company_profileProvince'];
		$company_profileZipcode = $profile['company_profileZipcode'];
		$company_profileEmail = $profile['company_profileEmail'];
		$company_profileWebsite = $profile['company_profileWebsite'];
		$company_profileLogo = $profile['company_profileLogo'];
		$company_profileTin = $profile['company_profileTin'];
	}
?>

<div class="ms-content-wrapper"> 
	<div class="row">
		<div class="col-md-12">
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb pl-0">
                  <li class="breadcrumb-item"><a href="<?= base_url().'Dashboard' ?>"><i class="material-icons fs-16">dashboard</i> Dashboard</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">Company Setup</li>
              </ol>
          </nav>
        </div>
		<div class="col-md-12">
			<div class="ms-panel" id="view-company">
				<div class="ms-panel-header bg-primary d-flex justify-content-between align-items-center">
                	<h6 class="text-light">COMPANY SETUP</h6>
					<button class="btn btn-outline-red submit-btn" id="btn-update"><i class="fa fa-edit"></i> UPDATE</button>
	            </div>
	            <div class="ms-panel-body">
	                <div class="ms-card-body">
	                	<form id="company_form" method="POST" enctype="multipart/form-data" action="<?= base_url().'Company/saveCompanyDetails' ?>">
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label>Company Name <code>*</code></label>
									<input class="form-control alphanumericdashspace" type="text" name="company_profileName" id="company_profileName" description="Company Name" value="<?= $company_profileName ?>" disabled>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>Contact Person <code>*</code></label>
									<input class="form-control alphanumericdashspace" id="company_profileContactperson"name="company_profileContactperson" type="text" value="<?= $company_profileContactperson ?>" disabled>
								</div>
							</div>
						</div>
						<div class="row">
								<div class="col-sm-3">
								<div class="form-group">
									<label>Unit Number</label>
									<input class="form-control numbersonly" id="company_profileUnit" name="company_profileUnit" type="text" value="<?= $company_profileUnit ?>" maxlength="4" disabled>
								</div>
								</div>
								<div class="col-sm-3">
								<div class="form-group">
									<label>Bldg. Name/House Number  <code>*</code></label>
									<input class="form-control alphanumericdashspace" id="company_profileBuilding" name="company_profileBuilding" type="text" value="<?= $company_profileBuilding ?>"  disabled>
								</div>
								</div>
								<div class="col-sm-3">
								<div class="form-group">
									<label>Street Name <code>*</code></label>
									<input class="form-control alphanumericdashspacecomma" id="company_profileStreet" name="company_profileStreet" type="text" description="Street name" value="<?= $company_profileStreet ?>" disabled>
								</div>
								</div>
								<div class="col-sm-3">
								<div class="form-group">
									<label>Subdivision Name </label>
									<input class="form-control alphanumericdashspacecomma" id="company_profileSubdivision"name="company_profileSubdivision" type="text" value="<?= $company_profileSubdivision ?>" disabled>
								</div>
								</div>
						</div>
						<div class="row">
							<div class="col-sm-3">
								<div class="form-group">
									<label>Barangay <code>*</code></label>
									<input class="form-control alphanumericdashspacecomma" id="company_profileBarangay"name="company_profileBarangay" value="San Antonio" type="text" description="company_profileBarangay" value="<?= $company_profileBarangay ?>" disabled>
								</div>	

							</div>	
							<div class="col-sm-3">
								<div class="form-group">
									<label>Municipality/City <code>*</code></label>
									<input class="form-control alphanumericdashspacecomma"id="company_profileMunicipality"name="company_profileMunicipality" type="text" description="company_profileMunicipality" value="<?= $company_profileMunicipality ?>" disabled>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Province</label>
									<input type="text" class="form-control alphanumericdashspacecomma" id="company_profileProvince" name="company_profileProvince" description="State/Province" value="<?= $company_profileProvince ?>" disabled>
								</div>
							</div>
								<div class="col-sm-3">
								<div class="form-group">
									<label>Zip Code <code>*</code></label>
									<input class="form-control numbersonly"id="company_profileZipcode"name="company_profileZipcode" minlength=4 autocomplete="off" type="text" value="<?= $company_profileZipcode ?>" maxlength="4" disabled>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4">
								<div class="form-group">
									<label>Email Address<code>*</code></label>
									<input class="form-control alphanumericdotatunderscore" id="company_profileEmail"name="company_profileEmail" type="email" value="<?= $company_profileEmail ?>" disabled>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label>Contact Number <code>*</code></label>
									<input class="form-control contactnumber"id="company_profileContactnumber"name="company_profileContactnumber" maxlength="11" autocomplete="off" type="text"description="Phone number" value="<?= $company_profileContactnumber ?>" disabled>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label>Nature of Business <code>*</code></label>
									<select class="form-control select2" id="company_profileBusiness" name="company_profileBusiness[]"  multiple="multiple" disabled >
										<?php
										foreach ($business_nature as $nature) {
											$nature_arr = array("business_natureID" => $nature['business_natureID']);
											$isInArray = in_array($nature_arr, $company_business) ? 'selected' : '';
										?>
											<option value="<?= $nature['business_natureID'] ?>" <?= $isInArray ?>><?= $nature['business_natureName'] ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4">
								<div class="form-group">
									<label>Website URL <code>*</code></label>
									<input class="form-control alphanumericdotslashcolonunderscore" id="company_profileWebsite"name="company_profileWebsite" type="text" value="<?= $company_profileWebsite ?>" disabled>
								</div>
							</div>
							<div class="col-sm-4">
								<label>Company logo <code>*</code></label>
							  	<div class="custom-file">
				                  	<input type="file" class="custom-file-input" id="company_profileLogo" name="company_profileLogo" accept="image/png,image/jpeg" required disabled value="<?= 'c:/xampp/htdocs/pointofsale/uploads/company/'.$company_profileLogo ?>">
				                  	<label class="custom-file-label" for="validatedCustomFile" id="filename"><?= $company_profileLogo != "" ? $company_profileLogo : "Choose file..." ?></label>
				               	</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label>TIN <code>*</code></label>
									<input class="form-control tinnumber" id="company_profileTin"name="company_profileTin" 
									placeholder="000-000-000-000" maxlength="15" autocomplete="off" type="text" value="<?= $company_profileTin ?>" disabled>
								</div>
							</div>
						</div>	
						</form>
					</div>
	            </div>
			</div>
			<div class="ms-panel" id="update-company">
				<div class="ms-panel-header bg-primary d-flex justify-content-between align-items-center">
                	<h6 class="text-light">COMPANY SETUP</h6>
	            </div>
	            <div class="ms-panel-body">
	                <div class="ms-card-body">
	                	<form id="company_form" method="POST" enctype="multipart/form-data" action="<?= base_url().'Company/saveCompanyDetails' ?>">
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label>Company Name <code>*</code></label>
									<input class="form-control" type="hidden" id="edit-company_profileID" name="company_profileID" value="<?= $company_profileID ?>">
									<input class="form-control alphanumericdashspace" type="text" name="company_profileName" id="edit-company_profileName" description="Company Name" autocomplete="off">
									<div class="invalid-feedback" id="edit-invalid-company_profileName"></div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>Contact Person <code>*</code></label>
									<input class="form-control alphanumericdashspace" id="edit-company_profileContactperson"name="company_profileContactperson" type="text" autocomplete="off">
									<div class="invalid-feedback" id="edit-invalid-company_profileContactperson"></div>
								</div>
							</div>
						</div>
						<div class="row">
								<div class="col-sm-3">
								<div class="form-group">
									<label>Unit Number</label>
									<input class="form-control numbersonly" id="edit-company_profileUnit" name="company_profileUnit" type="text" maxlength="4" autocomplete="off">
									<div class="invalid-feedback" id="edit-invalid-company_profileUnit"></div>
								</div>
								</div>
								<div class="col-sm-3">
								<div class="form-group">
									<label>Bldg. Name/House Number  <code>*</code></label>
									<input class="form-control alphanumericdashspace" id="edit-company_profileBuilding" name="company_profileBuilding" type="text" autocomplete="off">
									<div class="invalid-feedback" id="edit-invalid-company_profileBuilding"></div>
								</div>
								</div>
								<div class="col-sm-3">
								<div class="form-group">
									<label>Street Name <code>*</code></label>
									<input class="form-control alphanumericdashspacecomma" id="edit-company_profileStreet" name="company_profileStreet" type="text" description="Street name" autocomplete="off">
									<div class="invalid-feedback" id="edit-invalid-company_profileStreet"></div>
								</div>
								</div>
								<div class="col-sm-3">
								<div class="form-group">
									<label>Subdivision Name </label>
									<input class="form-control alphanumericdashspacecomma" id="edit-company_profileSubdivision"name="company_profileSubdivision" type="text" autocomplete="off">
									<div class="invalid-feedback" id="edit-invalid-company_profileSubdivision"></div>
								</div>
								</div>
						</div>
						<div class="row">
							<div class="col-sm-3">
								<div class="form-group">
									<label>Barangay <code>*</code></label>
									<input class="form-control alphanumericdashspacecomma" id="edit-company_profileBarangay"name="company_profileBarangay" type="text" description="company_profileBarangay" autocomplete="off">
									<div class="invalid-feedback" id="edit-invalid-company_profileBarangay"></div>
								</div>	

							</div>	
							<div class="col-sm-3">
								<div class="form-group">
									<label>Municipality/City <code>*</code></label>
									<input class="form-control alphanumericdashspacecomma"id="edit-company_profileMunicipality"name="company_profileMunicipality" type="text" description="company_profileMunicipality" autocomplete="off">
									<div class="invalid-feedback" id="edit-invalid-company_profileMunicipality"></div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Province</label>
									<input type="text" class="form-control alphanumericdashspacecomma" id="edit-company_profileProvince" name="company_profileProvince" description="State/Province" autocomplete="off">
									<div class="invalid-feedback" id="edit-invalid-company_profileProvince"></div>
								</div>
							</div>
								<div class="col-sm-3">
								<div class="form-group">
									<label>Zip Code <code>*</code></label>
									<input class="form-control numbersonly"id="edit-company_profileZipcode"name="company_profileZipcode" minlength=4 autocomplete="off" type="text" maxlength="4" autocomplete="off">
									<div class="invalid-feedback" id="edit-invalid-company_profileZipcode"></div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4">
								<div class="form-group">
									<label>Email Address<code>*</code></label>
									<input class="form-control alphanumericdotatunderscore" id="edit-company_profileEmail"name="company_profileEmail" type="email" autocomplete="off" required>
									<div class="invalid-feedback" id="edit-invalid-company_profileEmail"></div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label>Contact Number <code>*</code></label>
									<input class="form-control contactnumber"id="edit-company_profileContactnumber"name="company_profileContactnumber" maxlength="11" autocomplete="off" type="text"description="Phone number">
									<div class="invalid-feedback" id="edit-invalid-company_profileContactnumber"></div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label>Nature of Business <code>*</code></label>
									<select class="form-control select2" id="edit-company_profileBusiness" name="company_profileBusiness[]"  multiple="multiple" >
										<?php
										foreach ($business_nature as $nature) {	?>
											<option value="<?= $nature['business_natureID'] ?>"><?= $nature['business_natureName'] ?></option>
										<?php } ?>
									</select>
									<div class="invalid-feedback" id="edit-invalid-company_profileBusiness"></div>	
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4">
								<div class="form-group">
									<label>Website URL <code>*</code></label>
									<input class="form-control alphanumericdotslashcolonunderscore" id="edit-company_profileWebsite"name="company_profileWebsite" type="url" required autocomplete="off">
									<div class="invalid-feedback" id="edit-invalid-company_profileWebsite"></div>
								</div>
							</div>
							<div class="col-sm-4">
								<label>Company logo <code>*</code></label>
								<input type="hidden" id="edit-company_logo">
							  	<div class="custom-file">
				                  	<input type="file" class="custom-file-input" id="edit-company_profileLogo" name="company_profileLogo" accept="image/png,image/jpeg">
				                  	<label class="custom-file-label" for="validatedCustomFile" id="edit-filename">Choose file...</label>
				                  	<div class="invalid-feedback d-flex" id="edit-invalid-company_profileLogo"></div>
				               	</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label>TIN <code>*</code></label>
									<input class="form-control tinnumber" id="edit-company_profileTin"name="company_profileTin" 
									placeholder="xxx-xxx-xxx-xxx" maxlength="15" autocomplete="off" type="text">
									<div class="invalid-feedback" id="edit-invalid-company_profileTin"></div>
								</div>
							</div>
						</div>	
						<div class="row mt-3" id="save-button">
							<div class="col-12 text-right">
								<button class="btn btn-primary" id="btn-update-cancel">CANCEL</button>
								<button class="btn btn-outline-red btn-md update" id="btn-save-update">SAVE</button>
							</div>
						</div>
						</form>
					</div>
	            </div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="confirmation_edit" tabindex="-1" role="dialog" aria-labelledby="confirmation_edit" data-backdrop="static" data-keyboard="false">
 	<div class="modal-dialog modal-dialog-centered modal-min" role="document">
	  	<div class="modal-content">
	    		<div class="modal-body pb-3 text-center">
		      		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  			<img class="isometric confirmationisometric" width="230px" height="100px" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/modal/confirmation.png">
		  			<h1 class="text-red text-center">UPDATE COMPANY PROFILE</h1>
		            <p class="text-center my-2">Are you sure you want to update company profile?</p>
		            <div class="invalid-feedback" id="confirmation-add-invalid"></div>
	    		</div>
	    		<div class="modal-footer">
	    			<div class="text-center w-100">
						<button type="button" data-dismiss="modal" class="btn btn-outline-primary shadow-none">NO</button>
	    				<button type="button" class="btn btn-primary shadow-none" id="btn-save-company_profile">YES</button>
					</div>
	    		</div>
	    </div>
	</div>
</div>

<?php 

  if ($this->session->flashdata('img')=="error") echo '<script type="text/javascript"> showUploadPhotoError() </script>';

  if($this->session->flashdata('photoupload')=="upload") echo '<script type="text/javascript"> showPhotoToast() </script>';

  if($this->session->flashdata('success')!=""){
    echo '<script type="text/javascript"> showSuccessToast("'.$this->session->flashdata("success").'")</script>';
  }

?>

<script type="text/javascript">
	$(document).ready(function() {

		$('.select2').select2();

		// $('#edit-company_profileLogo').change(function(){
        //   var name = document.getElementById('edit-company_profileLogo'); 
        //   $("#edit-filename").text(name.files.item(0).name);
        // });

		$(document).on("click", "#btn-save-company_profile", function(e) {
			e.preventDefault();

			let formData = new FormData();
			formData.append("file", property);
			formData.append("title", title+"."+extension);

			$.ajax({
				method: "POST",
				url: "employee/ajax_upload",
				data: formData,
				processData: false,
				contentType: false,
				cache: false,
				async: false,
				dataType: 'json',
				success: function(data) {
					let images = "";
					data.map(item => {
						images += "<img src='<?= base_url() ?>upload/"+item.filename+"' width='250' height='250'>";
					})
					$('#uploaded_image').html(images);  
					console.log(data);
				}
			});

			// $("#company_form").trigger("submit");
			// const company_profileTempLogo = document.getElementById('company_profileLogo'); 

			// const company_profileID = $("#company_profileID").val();
			// const company_profileName = $("#company_profileName").val().trim();
			// const company_profileContactperson = $("#company_profileContactperson").val().trim();
			// const company_profileUnitnumber = $("#company_profileUnit").val();
			// const company_profileBuilding = $("#company_profileBuilding").val().trim();
			// const company_profileStreet = $("#company_profileStreet").val().trim();
			// const company_profileSubdivision = $("#company_profileSubdivision").val().trim();
			// const company_profileBarangay = $("#company_profileBarangay").val().trim();
			// const company_profileMunicipality = $("#company_profileMunicipality").val().trim();
			// const company_profileProvince = $("#company_profileProvince").val().trim();
			// const company_profileContactnumber = $("#company_profileContactnumber").val().trim();
			// const company_profileWebsite = $("#company_profileWebsite").val().trim();
			// // const company_profileLogo = company_profileTempLogo.files;
			// const company_profileLogo = company_profileTempLogo[0];
			// const company_profileTin = $("#company_profileTin").val().trim();
			// const company_profileBusiness = $("#company_profileBusiness").val();
			// console.log(company_profileBusiness);

			// const company_profile = {
			// 	company_profileID,
			// 	company_profileName,
			// 	company_profileContactperson,
			// 	company_profileUnitnumber,
			// 	company_profileBuilding,
			// 	company_profileStreet,
			// 	company_profileSubdivision,
			// 	company_profileBarangay,
			// 	company_profileMunicipality,
			// 	company_profileProvince,
			// 	company_profileContactnumber,
			// 	company_profileWebsite,
			// 	company_profileLogo,
			// 	company_profileTin
			// }
			// const company_business = {
			// 	company_profileID,
			// 	company_profileBusiness
			// }
			// saveCompanyDetails(company_profile, company_business);
			// console.log(company_profileLogo.files[0].name);
		})




		// VALIDATION
		const elemArr = ["company_profileName", "company_profileContactperson", "company_profileBuilding", "company_profileStreet", "company_profileBarangay", "company_profileMunicipality", "company_profileZipcode", "company_profileEmail", "company_profileContactnumber", "company_profileBusiness", "company_profileWebsite", "company_profileLogo", "company_profileTin"];
		const elemArrText = ["Company Name", "Contact Person", "Building", "Street", "Barangay", "Municipality", "Zip Code", "Email", "Contact Number", "Business", "Website", "Logo", "TIN"];
		const neutralInputs = ["edit-company_profileUnit", "edit-company_profileSubdivision", "edit-company_profileProvince"];
		const elemArrLength = elemArr.length;

		const checkCompanyLogo = () => {
			let countErrors = 0;
			const property = document.getElementById("edit-company_profileLogo").files[0];
			if (property) {
				const name = property.name;
				const size = property.size;
				const extension = name.split(".").pop().toLowerCase();
				const allowedTypes = ["jpg", "png", "jpeg", "gif"];
				if (allowedTypes.includes(extension)) {
					if (size < 100000) {
						$("#edit-company_profileLogo").removeClass("is-invalid");
						$("#edit-company_profileLogo").addClass("is-valid");
						$("#edit-invalid-company_profileLogo").html("");
						// let formData = new FormData();
						// formData.append("file", property);
						// formData.append("title", title+"."+extension);

						// $.ajax({
						// 	method: "POST",
						// 	url: "employee/ajax_upload",
						// 	data: formData,
						// 	processData: false,
						// 	contentType: false,
						// 	cache: false,
						// 	async: false,
						// 	dataType: 'json',
						// 	success: function(data) {
						// 		let images = "";
						// 		data.map(item => {
						// 			images += "<img src='<?= base_url() ?>upload/"+item.filename+"' width='250' height='250'>";
						// 		})
						// 		$('#uploaded_image').html(images);  
						// 		console.log(data);
						// 	}
						// });

					} else {
						countErrors++;
						$("#edit-company_profileLogo").addClass("is-invalid");
						$("#edit-invalid-company_profileLogo").html("File size is too large");
					}
				} else {
					countErrors++;
					$("#edit-company_profileLogo").addClass("is-invalid");
					$("#edit-invalid-company_profileLogo").html("File type is not allowed");
				}
			}
			return countErrors > 0 ? false : true;
		}

		const checkWebsite = (website) => {
			let count = 0;
			const expression = /[-a-zA-Z0-9@:%_\+.~#?&//=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~#?&//=]*)?/gi; 
			const regex = new RegExp(expression); 
			if (!website.match(regex)) {
				$("#edit-company_profileWebsite").removeClass("is-valid");
				$("#edit-company_profileWebsite").addClass("is-invalid");
				$("#edit-invalid-company_profileWebsite").html("Invalid Website URL");
			} else {
				$("#edit-company_profileWebsite").removeClass("is-invalid");
				$("#edit-company_profileWebsite").addClass("is-valid");
				$("#edit-invalid-company_profileWebsite").html("");
				count++;
			}
			return count > 0 ? false : true;
		}

		const checkEmail = (email) => {
			let count = 0;
			const expression = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/; 
			const regex = new RegExp(expression); 
			if (!regex.test(email)) {
				$("#edit-company_profileEmail").removeClass("is-valid");
				$("#edit-company_profileEmail").addClass("is-invalid");
				$("#edit-invalid-company_profileEmail").html("Invalid Email Address");
			} else {
				$("#edit-company_profileEmail").removeClass("is-invalid");
				$("#edit-company_profileEmail").addClass("is-valid");
				$("#edit-invalid-company_profileEmail").html("");
				count++;
			}
			return count > 0 ? false : true;
		}

		const checkNumber = (number) => {
			let count = 0;
			if (number.length < 11) {
				$("#edit-company_profileContactnumber").removeClass("is-valid");
				$("#edit-company_profileContactnumber").addClass("is-invalid");
				$("#edit-invalid-company_profileContactnumber").html("Invalid Contact Number");
			} else {
				$("#edit-company_profileContactnumber").removeClass("is-invalid");
				$("#edit-company_profileContactnumber").addClass("is-valid");
				$("#edit-invalid-company_profileContactnumber").html("");
				count++;
			}
			return count > 0 ? false : true;
		}

		const checkTin = (tin) => {
			let count = 0;
			if (tin.length < 15) {
				$("#edit-company_profileTin").removeClass("is-valid");
				$("#edit-company_profileTin").addClass("is-invalid");
				$("#edit-invalid-company_profileTin").html("Invalid TIN Number");
			} else {
				$("#edit-company_profileTin").removeClass("is-invalid");
				$("#edit-company_profileTin").addClass("is-valid");
				$("#edit-invalid-company_profileTin").html("");
				count++;
			}
			return count > 0 ? false : true;
		}

		$(document).on("click", "#btn-save-update", function(event){
			event.preventDefault(); 
			let count = 0;

			const focusElem = [];
			const logo = $("#edit-company_logo").val();
			for (var i=0; i<elemArrLength; i++) {
				const elem = $("#edit-"+elemArr[i]).val();
				const file = $("#edit-company_profileLogo").val();
				const website = $("#edit-company_profileWebsite").val();
				const myWebsite = checkWebsite(website);
				const email = $("#edit-company_profileEmail").val();
				const myEmail = checkEmail(email);
				const number = $("#edit-company_profileContactnumber").val();
				const myNumber = checkNumber(number);
				const tin = $("#edit-company_profileTin").val();
				const myTin = checkTin(tin);
				if (file || logo) {
					const checkCompany = checkCompanyLogo();
					if (checkCompany) {
						$("#edit-company_profileLogo").addClass("is-valid");
						$("#edit-company_profileLogo").removeClass("is-invalid");
						$("#edit-invalid-company_profileLogo").html("");
					} else {
						count++;
					}
				} 

				if (!myWebsite || !myEmail || !myNumber || !myTin) {
					count++;
				}
				
				if (elem == "" || elem == null || elem == undefined) {
					focusElem.push(elemArr[i]);
					$("#edit-"+elemArr[i]).addClass("is-invalid");
					$("#edit-invalid-"+elemArr[i]).html(elemArrText[i]+" is required");
					count++;
				} else {
					$("#edit-"+elemArr[i]).addClass("is-valid");
					$("#edit-"+elemArr[i]).removeClass("is-invalid");
					$("#edit-invalid-"+elemArr[i]).html("");
				}
			}

			neutralInputStyles("save");

			if (count > 0) {
				$("#edit-"+focusElem[0]).focus();
			} else {
				$('#confirmation_edit').modal('show');
			}
	   });	

		const neutralInputStyles = (todo) => {
			if (todo == "save") {
				neutralInputs.map(item => {
					$("#"+item).addClass("is-valid");
				});
			} else {
				neutralInputs.map(item => {
					$("#"+item).removeClass("is-valid");
				});
			}
		}

		const removeStyles = todo => {
			neutralInputStyles(todo);
			elemArr.map(item => {
				$("#edit-"+item).removeClass("is-valid");
				$("#edit-"+item).removeClass("is-invalid");
				$("#edit-invalid-"+item).html("");
			})
		}

		// TIN Number
		$(document).on("keyup", "#edit-company_profileTin", function() {
			const tin = $(this).val();
			checkTin(tin);
		})

		// Contact Number
		$(document).on("keyup", "#edit-company_profileContactnumber", function() {
			const number = $(this).val();
			checkNumber(number);
		})

		// Email
		$(document).on("keyup", "#edit-company_profileEmail", function() {
			const email = $(this).val();
			checkEmail(email);
		})

		// Website
		$(document).on("keyup", "#edit-company_profileWebsite", function() {
			const website = $(this).val();
			checkWebsite(website);
		})

		// Logo
		$(document).on("change", "#edit-company_profileLogo", function() {
			var name = document.getElementById('edit-company_profileLogo'); 
			$("#edit-filename").text(name.files.item(0).name);
			checkCompanyLogo();
		})

		$(document).on("click", "#btn-update-cancel", function(e) {
			e.preventDefault();

			neutralInputStyles("cancel");
			removeStyles("cancel");
			$("#edit-company_logo").val("");
			$("#edit-company_profileLogo").val("");
			$("#view-company").show();
			$("#update-company").hide();
		})

		$(document).on("click", "#btn-update", function(e) {
			e.preventDefault();
			let company_business = <?php echo json_encode($company_business) ?>;
			company_business = company_business.map(item => item.business_natureID);

			$("#view-company").hide();
			$("#update-company").show();

			$("#edit-company_profileName").val("<?= $company_profileName ?>");
			$("#edit-company_profileContactperson").val("<?= $company_profileContactperson ?>");
			$("#edit-company_profileContactnumber").val("<?= $company_profileContactnumber ?>");
			$("#edit-company_profileUnit").val("<?= $company_profileUnit ?>");
			$("#edit-company_profileBuilding").val("<?= $company_profileBuilding ?>");
			$("#edit-company_profileStreet").val("<?= $company_profileStreet ?>");
			$("#edit-company_profileSubdivision").val("<?= $company_profileSubdivision ?>");
			$("#edit-company_profileBarangay").val("<?= $company_profileBarangay ?>");
			$("#edit-company_profileMunicipality").val("<?= $company_profileMunicipality ?>");
			$("#edit-company_profileProvince").val("<?= $company_profileProvince ?>");
			$("#edit-company_profileZipcode").val("<?= $company_profileZipcode ?>");
			$("#edit-company_profileEmail").val("<?= $company_profileEmail ?>");
			$("#edit-company_profileWebsite").val("<?= $company_profileWebsite ?>");
			$("#edit-filename").html("<?= $company_profileLogo ?>");
			$("#edit-company_profileTin").val("<?= $company_profileTin ?>");
			$("#edit-company_profileBusiness").val(company_business).trigger("change");
			$("#edit-company_logo").val("<?= $company_profileLogo ?>");

		})

	});	
</script>