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
			<div class="ms-panel">
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
									<input class="form-control" type="hidden" id="company_profileID" name="company_profileID" value="<?= $company_profileID ?>">
									<input class="form-control alphanumericdashspace" type="text" name="company_profileName" id="company_profileName" description="Company Name" value="<?= $company_profileName ?>" disabled>
									<div class="invalid-feedback" id="edit-company_profileName"></div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>Contact Person</label>
									<input class="form-control alphanumericdashspace" id="company_profileContactperson"name="company_profileContactperson" type="text" value="<?= $company_profileContactperson ?>" disabled>
									<div class="invalid-feedback" id="edit-company_profileContactperson"></div>
								</div>
							</div>
						</div>
						<div class="row">
								<div class="col-sm-3">
								<div class="form-group">
									<label>Unit Number</label>
									<input class="form-control numbersonly" id="company_profileUnit" name="company_profileUnit" type="text" value="<?= $company_profileUnit ?>" maxlength="4" disabled>
									<div class="invalid-feedback" id="edit-company_profileUnit"></div>
								</div>
								</div>
								<div class="col-sm-3">
								<div class="form-group">
									<label>Bldg. Name/House Number  <code>*</code></label>
									<input class="form-control alphanumericdashspace" id="company_profileBuilding" name="company_profileBuilding" type="text" value="<?= $company_profileBuilding ?>"  disabled>
									<div class="invalid-feedback" id="edit-company_profileBuilding"></div>
								</div>
								</div>
								<div class="col-sm-3">
								<div class="form-group">
									<label>Street Name <code>*</code></label>
									<input class="form-control alphanumericdashspacecomma" id="company_profileStreet" name="company_profileStreet" type="text" description="Street name" value="<?= $company_profileStreet ?>" disabled>
									<div class="invalid-feedback" id="edit-company_profileStreet"></div>
								</div>
								</div>
								<div class="col-sm-3">
								<div class="form-group">
									<label>Subdivision Name </label>
									<input class="form-control alphanumericdashspacecomma" id="company_profileSubdivision"name="company_profileSubdivision" type="text" value="<?= $company_profileSubdivision ?>" disabled>
									<div class="invalid-feedback" id="edit-company_profileSubdivision"></div>
								</div>
								</div>
						</div>
						<div class="row">
							<div class="col-sm-3">
								<div class="form-group">
									<label>Barangay <code>*</code></label>
									<input class="form-control alphanumericdashspacecomma" id="company_profileBarangay"name="company_profileBarangay" value="San Antonio" type="text" description="company_profileBarangay" value="<?= $company_profileBarangay ?>" disabled>
									<div class="invalid-feedback" id="edit-company_profileBarangay"></div>
								</div>	

							</div>	
							<div class="col-sm-3">
								<div class="form-group">
									<label>Municipality/City <code>*</code></label>
									<input class="form-control alphanumericdashspacecomma"id="company_profileMunicipality"name="company_profileMunicipality" type="text" description="company_profileMunicipality" value="<?= $company_profileMunicipality ?>" disabled>
									<div class="invalid-feedback" id="edit-company_profileMunicipality"></div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Province</label>
									<input type="text" class="form-control alphanumericdashspacecomma" id="company_profileProvince" name="company_profileProvince" description="State/Province" value="<?= $company_profileProvince ?>" disabled>
									<div class="invalid-feedback" id="edit-company_profileProvince"></div>
								</div>
							</div>
								<div class="col-sm-3">
								<div class="form-group">
									<label>Zip Code <code>*</code></label>
									<input class="form-control numbersonly"id="company_profileZipcode"name="company_profileZipcode" minlength=4 autocomplete="off" type="text" value="<?= $company_profileZipcode ?>" maxlength="4" disabled>
									<div class="invalid-feedback" id="edit-company_profileZipcode"></div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4">
								<div class="form-group">
									<label>Email Address<code>*</code></label>
									<input class="form-control alphanumericdotatunderscore" id="company_profileEmail"name="company_profileEmail" type="email" value="<?= $company_profileEmail ?>" disabled>
									<div class="invalid-feedback" id="edit-company_profileEmail"></div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label>Contact Number <code>*</code></label>
									<input class="form-control contactnumber"id="company_profileContactnumber"name="company_profileContactnumber" maxlength="11" autocomplete="off" type="text"description="Phone number" value="<?= $company_profileContactnumber ?>" disabled>
									<div class="invalid-feedback" id="edit-company_profileContactnumber"></div>
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
									<div class="invalid-feedback" id="edit-company_profileBusiness"></div>	
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4">
								<div class="form-group">
									<label>Website URL <code>*</code></label>
									<input class="form-control alphanumericdotslashcolonunderscore" id="company_profileWebsite"name="company_profileWebsite" type="text" value="<?= $company_profileWebsite ?>" disabled>
									<div class="invalid-feedback" id="edit-company_profileWebsite"></div>
								</div>
							</div>
							<div class="col-sm-4">
								<label>Company logo <code>*</code></label>
							  	<div class="custom-file">
				                  	<input type="file" class="custom-file-input" id="company_profileLogo" name="company_profileLogo" accept="image/png,image/jpeg" required disabled value="<?= 'c:/xampp/htdocs/pointofsale/uploads/company/'.$company_profileLogo ?>">
				                  	<label class="custom-file-label" for="validatedCustomFile" id="filename"><?= $company_profileLogo != "" ? $company_profileLogo : "Choose file..." ?></label>
				                  	<div class="invalid-feedback" id="edit-company_profileLogo"></div>
				               	</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label>TIN <code>*</code></label>
									<input class="form-control tinnumber" id="company_profileTin"name="company_profileTin" 
									placeholder="000-000-000-000" maxlength="15" autocomplete="off" type="text" value="<?= $company_profileTin ?>" disabled>
									<div class="invalid-feedback" id="edit-company_profileTin"></div>
								</div>
							</div>
						</div>	
						<div class="row mt-3" id="save-button" style="display: none">
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

  // if ($this->session->flashdata('upload_error') != ""){
  //   echo '<script type="text/javascript"> showErrorToast("'.$this->session->flashdata("upload_error").'")</script>';
  // }

  // if ($this->session->flashdata('upload_success') != ""){
  //   echo '<script type="text/javascript"> showSuccessToast("'.$this->session->flashdata("upload_success").'")</script>';
  // }

  if ($this->session->flashdata('img')=="error") echo '<script type="text/javascript"> showUploadPhotoError() </script>';

  if($this->session->flashdata('photoupload')=="upload") echo '<script type="text/javascript"> showPhotoToast() </script>';

  if($this->session->flashdata('success')!=""){
    echo '<script type="text/javascript"> showSuccessToast("'.$this->session->flashdata("success").'")</script>';
  }

?>

<script type="text/javascript">
	$(document).ready(function() {

		$('#company_profileLogo').change(function(){
          var name = document.getElementById('company_profileLogo'); 
          $("#filename").text(name.files.item(0).name);
        });

		$(document).on("click", "#btn-save-company_profile", function(e) {
			e.preventDefault();
			$("#company_form").submit();
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
		const elemArr = ["company_profileName", "company_profileContactperson", "company_profileUnit", "company_profileBuilding", "company_profileStreet", "company_profileSubdivision", "company_profileBarangay", "company_profileMunicipality", "company_profileZipcode", "company_profileEmail", "company_profileContactnumber", "company_profileBusiness", "company_profileWebsite", "company_profileLogo", "company_profileTin"];
		const elemArrText = ["Name", "Contact Person", "Unit Number", "Building", "Street", "Subdivision", "Barangay", "Municipality", "Zip Code", "Email", "Contact Number", "Business", "Website", "Logo", "TIN"];
		const elemArrLength = elemArr.length;

		$(document).on("click", "#btn-update-cancel", function() {
			// for (var i=0; i<elemArrLength; i++) {
			// 	$("#"+elemArr[i]).attr("disabled", "true");
			// 	$("#"+elemArr[i]).removeClass("is-valid");
			// 	$("#"+elemArr[i]).removeClass("is-invalid");
			// 	$("#edit-"+elemArr[i]).html("");
			// }
			// $("#company_profileProvince").attr("disabled", "true");
			// $("#save-button").hide();
			// $("#btn-update").show();
			window.location.reload();
		})

		$(document).on("click", "#btn-update", function() {
			$("#btn-update").hide();
			$("#save-button").show();
			for (var i=0; i<elemArrLength; i++) {
				$("#"+elemArr[i]).removeAttr("disabled");
				// console.log(elemArr[i]);
			}
			$("#company_profileProvince").removeAttr("disabled");
		})

		$(document).on("click", "#btn-save-update", function(event){
			event.preventDefault(); 
			const focusElem = [];
			let count = 0;
			for (var i=0; i<elemArrLength; i++) {
				const elem = $("#"+elemArr[i]).val();
				if (elem == "" || elem == null) {
					focusElem.push(elemArr[i]);
					$("#"+elemArr[i]).addClass("is-invalid");
					$("#edit-"+elemArr[i]).html(elemArrText[i]+" is required");
					count++;
				} else {
					$("#"+elemArr[i]).addClass("is-valid");
					$("#"+elemArr[i]).removeClass("is-invalid");
					$("#edit-"+elemArr[i]).html("");
				}
			}
			if (count > 0) {
				$("#"+focusElem[0]).focus();
			} else {
				$('#confirmation_edit').modal({backdrop: 'static', keyboard: false},'show');
			}
	   });	

		$('.select2').select2();

		$("#cncl-edit").unbind('click').bind('click', function(){
			$('#confirmation_edit').modal('hide');
			$('#edit_company').show();
		});	
	});	
</script>