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
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>Company Name <code>*</code></label>
									<input class="form-control alphanumericdashspace" type="text" name="company_profileName" id="company_profileName" description="Company Name" value="<?= $company_profileName ?>" disabled>
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>Contact Person <code>*</code></label>
									<input class="form-control alphanumericdashspace" id="company_profileContactperson"name="company_profileContactperson" type="text" value="<?= $company_profileContactperson ?>" disabled>
								</div>
							</div>
						</div>
						<div class="row">
								<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Unit Number</label>
									<input class="form-control numbersonly" id="company_profileUnit" name="company_profileUnit" type="text" value="<?= $company_profileUnit ?>" maxlength="4" disabled>
								</div>
								</div>
								<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Bldg. Name/House Number  <code>*</code></label>
									<input class="form-control alphanumericdashspace" id="company_profileBuilding" name="company_profileBuilding" type="text" value="<?= $company_profileBuilding ?>"  disabled>
								</div>
								</div>
								<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Street Name <code>*</code></label>
									<input class="form-control alphanumericdashspacecomma" id="company_profileStreet" name="company_profileStreet" type="text" description="Street name" value="<?= $company_profileStreet ?>" disabled>
								</div>
								</div>
								<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Subdivision Name </label>
									<input class="form-control alphanumericdashspacecomma" id="company_profileSubdivision"name="company_profileSubdivision" type="text" value="<?= $company_profileSubdivision ?>" disabled>
								</div>
								</div>
						</div>
						<div class="row">
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Barangay <code>*</code></label>
									<input class="form-control alphanumericdashspacecomma" id="company_profileBarangay"name="company_profileBarangay" value="San Antonio" type="text" description="company_profileBarangay" value="<?= $company_profileBarangay ?>" disabled>
								</div>	

							</div>	
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Municipality/City <code>*</code></label>
									<input class="form-control alphanumericdashspacecomma"id="company_profileMunicipality"name="company_profileMunicipality" type="text" description="company_profileMunicipality" value="<?= $company_profileMunicipality ?>" disabled>
								</div>
							</div>
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Province</label>
									<input type="text" class="form-control alphanumericdashspacecomma" id="company_profileProvince" name="company_profileProvince" description="State/Province" value="<?= $company_profileProvince ?>" disabled>
								</div>
							</div>
								<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Zip Code <code>*</code></label>
									<input class="form-control numbersonly"id="company_profileZipcode"name="company_profileZipcode" minlength=4 autocomplete="off" type="text" value="<?= $company_profileZipcode ?>" maxlength="4" disabled>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Email Address<code>*</code></label>
									<input class="form-control alphanumericdotatunderscore" id="company_profileEmail"name="company_profileEmail" type="email" value="<?= $company_profileEmail ?>" disabled>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Contact Number <code>*</code></label>
									<input class="form-control contactnumber"id="company_profileContactnumber"name="company_profileContactnumber" maxlength="11" autocomplete="off" type="text"description="Phone number" value="<?= $company_profileContactnumber ?>" disabled>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Nature of Business <code>*</code></label>
									<select class="form-control select2" id="company_profileBusiness" name="company_profileBusiness[]"  multiple="multiple" disabled style="width: 100%">
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
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Website URL <code>*</code></label>
									<input class="form-control alphanumericdotslashcolonunderscore" id="company_profileWebsite"name="company_profileWebsite" type="text" value="<?= $company_profileWebsite ?>" disabled>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
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
			<div class="ms-panel" id="update-company" style="display: none">
				<div class="ms-panel-header bg-primary d-flex justify-content-between align-items-center">
                	<h6 class="text-light">COMPANY SETUP</h6>
	            </div>
	            <div class="ms-panel-body">
	                <div class="ms-card-body">
	                	<form id="company_form" method="POST" enctype="multipart/form-data" action="<?= base_url().'Company/saveCompanyDetails' ?>">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>Company Name <code>*</code></label>
									<input class="form-control" type="hidden" id="edit-company_profileID" name="company_profileID" value="<?= $company_profileID ?>">
									<input class="form-control alphanumericdashspace" type="text" name="company_profileName" id="edit-company_profileName" description="Company Name" autocomplete="off">
									<div class="invalid-feedback" id="edit-invalid-company_profileName"></div>
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>Contact Person <code>*</code></label>
									<input class="form-control alphanumericdashspace" id="edit-company_profileContactperson"name="company_profileContactperson" type="text" autocomplete="off">
									<div class="invalid-feedback" id="edit-invalid-company_profileContactperson"></div>
								</div>
							</div>
						</div>
						<div class="row">
								<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Unit Number</label>
									<input class="form-control numbersonly" id="edit-company_profileUnit" name="company_profileUnit" type="text" maxlength="4" autocomplete="off">
									<div class="invalid-feedback" id="edit-invalid-company_profileUnit"></div>
								</div>
								</div>
								<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Bldg. Name/House Number  <code>*</code></label>
									<input class="form-control alphanumericdashspace" id="edit-company_profileBuilding" name="company_profileBuilding" type="text" autocomplete="off">
									<div class="invalid-feedback" id="edit-invalid-company_profileBuilding"></div>
								</div>
								</div>
								<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Street Name <code>*</code></label>
									<input class="form-control alphanumericdashspacecomma" id="edit-company_profileStreet" name="company_profileStreet" type="text" description="Street name" autocomplete="off">
									<div class="invalid-feedback" id="edit-invalid-company_profileStreet"></div>
								</div>
								</div>
								<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Subdivision Name </label>
									<input class="form-control alphanumericdashspacecomma" id="edit-company_profileSubdivision"name="company_profileSubdivision" type="text" autocomplete="off">
									<div class="invalid-feedback" id="edit-invalid-company_profileSubdivision"></div>
								</div>
								</div>
						</div>
						<div class="row">
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Barangay <code>*</code></label>
									<input class="form-control alphanumericdashspacecomma" id="edit-company_profileBarangay"name="company_profileBarangay" type="text" description="company_profileBarangay" autocomplete="off">
									<div class="invalid-feedback" id="edit-invalid-company_profileBarangay"></div>
								</div>	

							</div>	
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Municipality/City <code>*</code></label>
									<input class="form-control alphanumericdashspacecomma"id="edit-company_profileMunicipality"name="company_profileMunicipality" type="text" description="company_profileMunicipality" autocomplete="off">
									<div class="invalid-feedback" id="edit-invalid-company_profileMunicipality"></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Province</label>
									<input type="text" class="form-control alphanumericdashspacecomma" id="edit-company_profileProvince" name="company_profileProvince" description="State/Province" autocomplete="off">
									<div class="invalid-feedback" id="edit-invalid-company_profileProvince"></div>
								</div>
							</div>
								<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Zip Code <code>*</code></label>
									<input class="form-control numbersonly"id="edit-company_profileZipcode"name="company_profileZipcode" minlength=4 autocomplete="off" type="text" maxlength="4" autocomplete="off">
									<div class="invalid-feedback" id="edit-invalid-company_profileZipcode"></div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Email Address<code>*</code></label>
									<input class="form-control alphanumericdotatunderscore" id="edit-company_profileEmail"name="company_profileEmail" type="email" autocomplete="off" required>
									<div class="invalid-feedback" id="edit-invalid-company_profileEmail"></div>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Contact Number <code>*</code></label>
									<input class="form-control contactnumber"id="edit-company_profileContactnumber"name="company_profileContactnumber" maxlength="13" autocomplete="off" type="text"description="Phone number">
									<div class="invalid-feedback" id="edit-invalid-company_profileContactnumber"></div>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Nature of Business <code>*</code></label>
									<select class="form-control select2 company_profileBusiness" id="edit-company_profileBusiness" name="edit-company_profileBusiness"  multiple="multiple" style="width: 100%">
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
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Website URL <code>*</code></label>
									<input class="form-control alphanumericdotslashcolonunderscore" id="edit-company_profileWebsite"name="company_profileWebsite" type="url" required autocomplete="off">
									<div class="invalid-feedback" id="edit-invalid-company_profileWebsite"></div>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
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

<div class="modal fade" id="confirmation_cancel" tabindex="-1" role="dialog" aria-labelledby="confirmation_cancel" data-backdrop="static" data-keyboard="false">
 	<div class="modal-dialog modal-dialog-centered modal-min" role="document">
	  	<div class="modal-content">
	    		<div class="modal-body pb-3 text-center">
		      		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  			<img class="isometric confirmationisometric" width="230px" height="100px" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/modal/confirmation.png">
		  			<h1 class="text-red text-center">CANCEL UPDATE</h1>
		            <p class="text-center my-2">Do you want to cancel update company setup?</p>
		            <div class="invalid-feedback" id="confirmation-edit-invalid"></div>
	    		</div>
	    		<div class="modal-footer">
	    			<div class="text-center w-100">
						<button type="button" class="btn btn-primary shadow-none" id="btn-cancel-company_profile">YES</button>
						<button type="button" data-dismiss="modal" class="btn btn-outline-primary shadow-none">NO</button>
					</div>
	    		</div>
	    </div>
	</div>
</div>

<?php 
  if($this->session->flashdata('success')!=""){
    echo '<script type="text/javascript"> showSuccessToast("'.$this->session->flashdata("success").'")</script>';
  }
?>

<script type="text/javascript">
	$(document).ready(function() {

		$('.select2').select2({
			theme: "bootstrap",
			width: 'resolve'
		});

		const saveCompanyDetails = (company_profile) => {
			$.ajax({
				url : "<?= site_url('Company/saveCompanyDetails');?>",
				method : "POST",
				data: company_profile,
				async : true,
				dataType : 'json',
				success: function(data){
					var result = data.split('|');
					if(result[0] == "false") {
						$("#confirmation-edit-invalid").html(result[1]);
						showErrorToast(result[1]);
					} else {
						window.location.replace('<?= base_url().'company' ?>');
					}
				}
			})
		}

		$(document).on("click", "#btn-save-company_profile", function(e) {
			e.preventDefault();

			const company_profileID = $("#edit-company_profileID").val();
			const company_profileName = $("#edit-company_profileName").val().trim();
			const company_profileContactperson = $("#edit-company_profileContactperson").val().trim();
			const company_profileUnitnumber = $("#edit-company_profileUnit").val();
			const company_profileBuilding = $("#edit-company_profileBuilding").val().trim();
			const company_profileStreet = $("#edit-company_profileStreet").val().trim();
			const company_profileSubdivision = $("#edit-company_profileSubdivision").val().trim();
			const company_profileBarangay = $("#edit-company_profileBarangay").val().trim();
			const company_profileMunicipality = $("#edit-company_profileMunicipality").val().trim();
			const company_profileProvince = $("#edit-company_profileProvince").val().trim();
			const company_profileContactnumber = $("#edit-company_profileContactnumber").val().trim();
			const company_profileWebsite = $("#edit-company_profileWebsite").val().trim();
			const company_profileTin = $("#edit-company_profileTin").val().trim();
			const company_profileBusiness = $("#edit-company_profileBusiness").val();

			const company_profile = {
				company_profileID,
				company_profileName,
				company_profileContactperson,
				company_profileUnitnumber,
				company_profileBuilding,
				company_profileStreet,
				company_profileSubdivision,
				company_profileBarangay,
				company_profileMunicipality,
				company_profileProvince,
				company_profileContactnumber,
				company_profileWebsite,
				company_profileTin,
				company_profileBusiness
			}
			saveCompanyDetails(company_profile);
		})

		// VALIDATION
		const elemArr = ["company_profileName", "company_profileContactperson", "company_profileBuilding", "company_profileStreet", "company_profileBarangay", "company_profileMunicipality", "company_profileZipcode", "company_profileEmail", "company_profileContactnumber", "company_profileBusiness", "company_profileWebsite", "company_profileTin"];
		const elemArrText = ["Company Name", "Contact Person", "Building", "Street", "Barangay", "Municipality", "Zip Code", "Email", "Contact Number", "Business", "Website", "TIN"];
		const neutralInputs = ["edit-company_profileUnit", "edit-company_profileSubdivision", "edit-company_profileProvince"];
		const elemArrLength = elemArr.length;

		const checkWebsite = (website) => {
			let count = 0;
			const expression = /[-a-zA-Z0-9@:%_\+.~#?&//=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~#?&//=]*)?/gi; 
			const regex = new RegExp(expression); 
			if (!website.match(regex)) {
				$("#edit-company_profileWebsite").removeClass("is-valid");
				$("#edit-company_profileWebsite").addClass("is-invalid");
				$("#edit-invalid-company_profileWebsite").html("Invalid Website URL");
				count++;
			} else {
				$("#edit-company_profileWebsite").removeClass("is-invalid");
				$("#edit-company_profileWebsite").addClass("is-valid");
				$("#edit-invalid-company_profileWebsite").html("");
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
				count++;
			} else {
				$("#edit-company_profileEmail").removeClass("is-invalid");
				$("#edit-company_profileEmail").addClass("is-valid");
				$("#edit-invalid-company_profileEmail").html("");
			}
			return count > 0 ? false : true;
		}

		const checkNumber = (number) => {
			let count = 0;
			if (number.length < 13) {
				$("#edit-company_profileContactnumber").removeClass("is-valid");
				$("#edit-company_profileContactnumber").addClass("is-invalid");
				$("#edit-invalid-company_profileContactnumber").html("Invalid Contact Number");
				count++;
			} else {
				$("#edit-company_profileContactnumber").removeClass("is-invalid");
				$("#edit-company_profileContactnumber").addClass("is-valid");
				$("#edit-invalid-company_profileContactnumber").html("");
			}
			return count > 0 ? false : true;
		}

		const checkTin = (tin) => {
			let count = 0;
			if (tin.length < 15) {
				$("#edit-company_profileTin").removeClass("is-valid");
				$("#edit-company_profileTin").addClass("is-invalid");
				$("#edit-invalid-company_profileTin").html("Invalid TIN Number");
				count++;
			} else {
				$("#edit-company_profileTin").removeClass("is-invalid");
				$("#edit-company_profileTin").addClass("is-valid");
				$("#edit-invalid-company_profileTin").html("");
			}
			return count > 0 ? false : true;
		}

		const checkBusiness = (business) => {
			let count = 0;
			if(business == ""){
				document.getElementById("edit-invalid-company_profileBusiness").innerHTML = "Please enter valid data";
				$(".select2-selection--multiple").removeClass('no-error');
				$(".select2-selection--multiple").addClass('has-error');
				$('#edit-company_profileBusiness').addClass('is-invalid');
				$("#edit-company_profileBusiness").focus(); 
				count++;
			} else {
				document.getElementById("edit-invalid-company_profileBusiness").innerHTML = "";
				$('#edit-company_profileBusiness').removeClass('is-invalid');
				$('#edit-company_profileBusiness').addClass('is-valid');
				$(".select2-selection--multiple").removeClass('has-error');
				$(".select2-selection--multiple").addClass('no-error');
			}
			return count > 0 ? false : true;
		}

		$(document).on("click", "#btn-save-update", function(event){
			event.preventDefault(); 
			let count = 0;

			const focusElem = [];

			const website = $("#edit-company_profileWebsite").val();
			const myWebsite = checkWebsite(website);
			const email = $("#edit-company_profileEmail").val();
			const myEmail = checkEmail(email);
			const number = $("#edit-company_profileContactnumber").val();
			const myNumber = checkNumber(number);
			const tin = $("#edit-company_profileTin").val();
			const myTin = checkTin(tin); 
			const business = $("#edit-company_profileBusiness").val();
			const myBusiness = checkBusiness(business);

			if (!myWebsite || !myEmail || !myNumber || !myTin || !myBusiness) {
				count++;
			}

			for (var i=0; i<elemArrLength; i++) {
				const elem = $("#edit-"+elemArr[i]).val();
				
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
			$(".select2-selection--multiple").removeClass('has-error');
			$(".select2-selection--multiple").removeClass('no-error');
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

		$(document).on("click", "#btn-cancel-company_profile", function() {
			removeStyles("cancel");
			$("#confirmation_cancel").modal("hide");
			$("#view-company").show();
			$("#update-company").hide();
		})

		$(document).on("click", "#btn-update-cancel", function(e) {
			e.preventDefault();

			$("#confirmation_cancel").modal("show");
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
			$("#edit-company_profileTin").val("<?= $company_profileTin ?>");
			$("#edit-company_profileBusiness").val(company_business).trigger("change");

		})

	});	
</script>