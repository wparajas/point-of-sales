<div class="ms-content-wrapper"> 
      <div class="row">
        <div class="col-md-12">
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb pl-0">
                  <li class="breadcrumb-item"><a href="<?= base_url(). 'Dashboard' ?>"><i class="material-icons fs-16">dashboard</i> Dashboard</a></li>
                  <li class="breadcrumb-item">User Designation</li>
              </ol>
          </nav>
        </div>
         <div class="content container-fluid">
           <div class="ms-card">
            <div class="ms-panel-header bg-primary d-flex justify-content-between align-items-center">
                    <h6 class="page-title font-weight-bold text-light">LIST OF USER DESIGNATION</h6>
                <button class="btn submit-btn btn-outline-red"  data-toggle="modal" data-target="#add_designation" data-backdrop="static" data-keyboard="false">
                  <i class="fa fa-plus-square"></i> ADD DESIGNATION
                </button>
            </div>
    
      <div class="col-xl-12 col-md-12">
     
         
            <div class="table-responsive mt-5 p-2">
              <table id="tabledepartment" class="table table-bordered thead-primary dtBasicExample">
                <thead>
                  <tr class="text-center">
                    <th style="width: 150px">DESIGNATION CODE</th>
                    <th>DEPARTMENT</th>
                    <th>DESIGNATION</th>
                    <th>LIMIT</th>
                    <th style="width: 50px">STATUS</th>
                    <th style="width: 50px">ACTION</th>
                  </tr>
                </thead>
                  <tbody>
                 
                    <?php foreach($userdesignation as $designation) { ?>
                      <tr>
                        <td><?= $designation['user_designationCode'] ?></td>
                        <td><?= $designation['user_departmentName'] ?></td>
                        <td><?= $designation['user_designationName'] ?></td>
                        <td class="text-right"><span class="text-left">₱</span> <?= formatcurrency($designation['user_designationLimit'], 'PHP') ?></td>
                        <td class="text-center">
                          <?php
                            $status = $designation['user_designationStatus'] == 1 ? 'Active' : 'Inactive';
                            $badge = $designation['user_designationStatus'] == 1 ? 'badge-outline-success' : 'badge-outline-danger';
                          ?>
                          <span class="badge <?= $badge ?> w-100"><?= $status ?></span>
                        </td>
                        <td class="text-center">
                          <!-- <div class="drop-down float-right">
                            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="material-icons" style="font-size: 1.5rem">more_vert</i></a>
                            <ul class="dropdown-menu dropdown-menu-right">
                              <li class="ms-dropdown-list">
                                <a class="media p-2 btn-edit-modal-designation" 
                                   href="javascript:void(0);"
                                   data-user_designationid = "<?= $designation['user_designationID'] ?>"
                                   data-user_designationcode = "<?= $designation['user_designationCode'] ?>"
                                   data-user_designationname = "<?= $designation['user_designationName'] ?>"
                                   data-user_designationlimit = "<?= $designation['user_designationLimit'] ?>"
                                   data-user_departmentid = "<?= $designation['user_departmentID'] ?>"
                                   data-user_designationstatus = "<?= $designation['user_designationStatus'] ?>"
                                   data-user_departmentName = "<?= $designation['user_departmentName'] ?>">
                                  <div class="media-body "
                                      id="" >
                                    <i class="fas fa-pencil-alt text-secondary" style="font-size: 1rem"></i><span> Edit</span>
                                  </div>
                                </a>
                              </li>
                            </ul>
                          </div> -->
                          <a class="btn btn-primary btn-edit-modal-designation p-0" 
                            href="javascript:void(0);"
                            data-user_designationid = "<?= $designation['user_designationID'] ?>"
                            data-user_designationcode = "<?= $designation['user_designationCode'] ?>"
                            data-user_designationname = "<?= $designation['user_designationName'] ?>"
                            data-user_designationlimit = "<?= $designation['user_designationLimit'] ?>"
                            data-user_departmentid = "<?= $designation['user_departmentID'] ?>"
                            data-user_designationstatus = "<?= $designation['user_designationStatus'] ?>"
                            data-user_departmentName = "<?= $designation['user_departmentName'] ?>"
                            style="min-width: 80px">
                            <i class="fas fa-pencil-alt" style="font-size: .8rem"></i>Edit
                          </a>
                        </td>
                      </tr>
                    <?php } ?>
           
                  </tbody>
              </table>
            </div>
        
        </div>
      </div>
    </div>
  </div>
</div>


  <div id="add_designation" class="modal custom-modal fade" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
             <div class="modal-header d-flex justify-content-between align-items-start bg-primary">
                <h5 class="modal-title text-light" id="exampleModalCenterTitle">ADD DESIGNATION</h5>
                <button type="button" class="close btn-close-add-designation" data-dismiss="modal" aria-label="close"><span aria-hidden="true" class="text-light">&times;</span></button>
              </div>
            <div class="modal-body">
              <div class="form-group">
              <label>Department <span class="text-danger">*</span></label><br>
                <!-- <select class="form-control" id="add-user_designationDepartment" name="add-user_designationDepartment" style="width: 100%;" > -->
                <!-- <input type="text" list="user_department-list" class="form-control alphanumericunderscore" id="add-user_designationDepartment" name="add-user_designationDepartment" placeholder="Enter Department" autocomplete="off">
                <datalist id="user_department-list">
                  <?php foreach($userdepartment as $department) { ?>
                    <option><?= $department['user_departmentName'] ?></option>
                  <?php } ?>
                </datalist> -->
                <select class="form-control add-user_designationDepartment select2" name="add-user_designationDepartment" id="add-user_designationDepartment" style="width: 100%; min-height: 50%;">
                  <option value="" selected disabled>Select User Department</option>
                  <?php foreach($userdepartment as $department) { ?>
                    <option value="<?= $department['user_departmentID'] ?>"><?= $department['user_departmentName'] ?></option>
                  <?php } ?>
                </select>
                <div class="invalid-feedback" id="add-invalid-user_designationDepartment"></div>  
              </div> 
               <div class="form-group">
                <label>Designation <span class="text-danger">*</span></label>
                <input type="text" placeholder="Enter Designation" class="form-control alphanumericdashspace"id="add-user_designationName" name="add-user_designationName"required="" autocomplete="off">
                <div class="invalid-feedback" id="add-invalid-user_designationName"></div>
              </div>
              <div class="row">
               <div class="col-sm-6">
                 <div class="form-group">
                <label>Limit </label>
                <input type="text" placeholder="000,000.00" class="form-control numbersonly text-right"id="add-user_designationLimit" name="add-user_designationLimit" autocomplete="off">
                <div class="invalid-feedback" id="add-invalid-user_designationLimit"></div>
              </div>
               </div> 
              <div class="col-sm-6">
                <div class="form-group">
                    <label>Status <span class="text-danger">*</span></label><br>
                        <div class="d-flex align-items-center">
                          <span> Inactive </span> &nbsp;
                          <label class="ms-switch">
                            <input type="checkbox" checked="" name="add-user_designationStatus"id="add-user_designationStatus"> <span class="ms-switch-slider ms-switch-success round"></span>
                          </label> &nbsp;
                          <span> Active </span>
                        </div>
                </div> 
              </div>
             </div> 
          </div>
          <div class="modal-footer">
            <div class="w-100 text-center">
              <button type="button" class="btn btn-primary submit-btn" name="save" id="btn-add-designation"> ADD</button>
            </div>
          </div>
        </div>    
    </div>
  </div>

<div class="modal fade" id="confirmation_add" tabindex="-1" role="dialog" aria-labelledby="confirmation_add" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-min" role="document">
    <div class="modal-content">
        <div class="modal-body pb-3 text-center">
          <button type="button" class="close" id="btn-add-designation-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <img class="isometric confirmationisometric" width="230px" height="100px" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/modal/confirmation.png">
        <h1 class="text-red text-center font-weight-bold">ADD DESIGNATION</h1>
            <p class="text-center my-2">Are you sure you want to add new Designation?</p>
            <div class="invalid-feedback d-flex justify-content-center align-items-center" id="confirmation-add-invalid"></div>
        </div>
        <div class="modal-footer">
          <div class="w-100 text-center">
          <button type="button" data-dismiss="modal" class="btn btn-outline-primary shadow-none" id="btn-add-designation-close">NO</button>
            <button type="button" class="btn btn-primary shadow-none" id="btn-add-save-designation">YES</button>
        </div>
        </div>
    </div>
  </div>
</div>

  <div id="edit_designation" class="modal custom-modal fade" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
             <div class="modal-header d-flex justify-content-between align-items-start bg-primary">
                <h5 class="modal-title text-light" id="exampleModalCenterTitle">UPDATE DESIGNATION</h5>
                <button type="button" class="close btn-close-edit-designation" data-dismiss="modal" aria-label="close"><span aria-hidden="true" class="text-light">&times;</span></button>
              </div>
            <div class="modal-body">
              <input type="hidden" name="edit-user_designationID" id="edit-user_designationID">
              <div class="form-group">
              <label>Department <span class="text-danger">*</span></label>
                <select class="form-control edit-user_designationDepartment select2" name="edit-user_designationDepartment" id="edit-user_designationDepartment" style="width: 100%; min-height: 50%;">
                  <option value="" selected disabled>Select User Department</option>
                  <?php foreach($userdepartment as $department) { ?>
                    <option value="<?= $department['user_departmentID'] ?>"><?= $department['user_departmentName'] ?></option>
                  <?php } ?>
                </select>
                <div class="invalid-feedback" id="edit-invalid-user_designationDepartment"></div>  
              </div> 
              <div class="form-group">
                <label>Designation <span class="text-danger">*</span></label>
                <input type="text" placeholder="Enter Designation" class="form-control alphanumericdashspace"id="edit-user_designationName" name="edit-user_designationName"required="" autocomplete="off">
                <div class="invalid-feedback" id="edit-invalid-user_designationName"></div>
              </div>
              <div class="row">
               <div class="col-sm-6">
                 <div class="form-group">
                    <label>Limit </label>
                    <input type="text" placeholder="000,000.00" class="form-control numbersonly text-right"id="edit-user_designationLimit" name="edit-user_designationLimit" autocomplete="off">
                    <div class="invalid-feedback" id="edit-invalid-user_designationLimit"></div>
                  </div>
               </div> 
              <div class="col-sm-6">
                <div class="form-group">
                    <label>Status <span class="text-danger">*</span></label><br>
                        <div class="d-flex align-items-center">
                          <span> Inactive </span> &nbsp;
                          <label class="ms-switch">
                            <input type="checkbox" checked="" name="edit-user_designationStatus" id="edit-user_designationStatus"> <span class="ms-switch-slider ms-switch-success round"></span>
                          </label> &nbsp;
                          <span> Active </span>
                        </div>
                </div> 
              </div>
             </div> 
          </div>
          <div class="modal-footer">
            <div class="w-100 text-center">
              <button type="button" class="btn btn-primary submit-btn" name="save" id="btn-edit-designation"> UPDATE</button>
            </div>
          </div>
        </div>    
    </div>
  </div>

  <div class="modal fade" id="confirmation_edit" tabindex="-1" role="dialog" aria-labelledby="confirmation_edit" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-min" role="document">
    <div class="modal-content">
        <div class="modal-body pb-3 text-center">
          <button type="button" class="close" id="btn-edit-designation-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <img class="isometric confirmationisometric" width="230px" height="100px" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/modal/confirmation.png">
        <h1 class="text-red text-center font-weight-bold">UPDATE DESIGNATION</h1>
            <p class="text-center my-2">Are you sure you want to update Designation?</p>
            <div class="invalid-feedback d-flex justify-content-center align-items-center" id="confirmation-edit-invalid"></div>
        </div>
        <div class="modal-footer">
          <div class="w-100 text-center">
          <button type="button" data-dismiss="modal" class="btn btn-outline-primary shadow-none" id="btn-edit-designation-close">NO</button>
            <button type="button" class="btn btn-primary shadow-none" id="btn-edit-save-designation">YES</button>
        </div>
        </div>
    </div>
  </div>
</div>

  

<!-- NOTIFICATION -->
<?php
  if($this->session->flashdata('success') != ""){
    echo '<script type="text/javascript"> showSuccessToast("'.$this->session->flashdata("success").'")</script>';
  }
?>

<script type="text/javascript">
  $(document).ready(function() {

    $('.select2').select2();

    $('#tabledepartment').DataTable({
      "paging": true
    // false to disable pagination (or any other option)
    });

    const elemArr = ["user_designationDepartment", "user_designationName"];
    const elemArrText = ["Department", "Designation"];
    const elemArrLength = elemArr.length;

    const checkDepartment = (department, todo) => {
      // aria-labelledby="select2-add-user_designationDepartment-container"
      let count = 0;
      console.log(department);
      if (department != "" || department != null) {
        console.log(department+"Not error");
        // $('[aria-labelledby="select2-'+todo+'-user_designationDepartment-container"]').removeClass("has-error");
        $('[aria-labelledby="select2-'+todo+'-user_designationDepartment-container"]').addClass("no-error");
        $("#"+todo+"-invalid-user_designationDepartment").html("");
      } else {
        console.log(department+"Error");
        count++;
        // $('[aria-labelledby="select2-'+todo+'-user_designationDepartment-container"]').removeClass("no-error");
        // $('[aria-labelledby="select2-'+todo+'-user_designationDepartment-container"]').addClass("has-error");
        $("#"+todo+"-invalid-user_designationDepartment").html("Department is required");
      }
      return count > 0 ? false : true;
    }

    function validateInputs(todo = "add") {
      const focusElem = [];
      let count = 0;

      const department = $("#"+todo+"-user_designationDepartment").val();
      console.log(department, todo);
      const myDepartment = checkDepartment(department, todo);
      if (!myDepartment) {
        count++;
      }

      for (var i=0; i<elemArrLength; i++) {
        const elem = $("#"+todo+"-"+elemArr[i]).val();
        if (elem == "" || elem == null || elem == undefined) {
          focusElem.push(elemArr[i]);
          $("#"+todo+"-"+elemArr[i]).addClass("is-invalid");
          $("#"+todo+"-invalid-"+elemArr[i]).html(elemArrText[i]+" is required");
          count++;
        } else {
          $("#"+todo+"-"+elemArr[i]).addClass("is-valid");
          $("#"+todo+"-"+elemArr[i]).removeClass("is-invalid");
          $("#"+todo+"-invalid-"+elemArr[i]).html("");
        }
      }
      if (count > 0) {
        $("#"+todo+"-"+focusElem[0]).focus();
        return false;
      } else {
        return true;
      }
    }

    function clearInputs() {
      const todos = ["add", "edit"];
      for (var i=0; i<todos.length; i++) {
        for (var j=0; j<elemArrLength; j++) {
          $("#"+todos[i]+"-"+elemArr[j]).removeClass("is-invalid");
          $("#"+todos[i]+"-"+elemArr[j]).removeClass("is-valid");
          $("#"+todos[i]+"-"+elemArr[j]).val("");
          $("#"+todos[i]+"-invalid-"+elemArr[j]).html("");
        }
      }
    }

    const saveEditUserDepartment = data => {
      $.ajax({
        url : "<?= site_url('UserDesignation/update');?>",
        method : "POST",
        data,
        async : true,
        dataType : 'json',
        success: function(data){
          var result = data.split('|');
          if(result[0] == "false") {
            $("#confirmation-edit-invalid").html(result[1]);
            showErrorToast(result[1]);
          } else {
            window.location.replace('<?= base_url().'userdesignation' ?>');
          }
        }
      })
    }

    const saveAddUserDepartment = data => {
      $.ajax({
        url : "<?= site_url('UserDesignation/save');?>",
        method : "POST",
        data,
        async : true,
        dataType : 'json',
        success: function(data){
          var result = data.split('|');
          if(result[0] == "false") {
            $("#confirmation-add-invalid").html(result[1]);
            showErrorToast(result[1]);
          } else {
            window.location.replace('<?= base_url().'userdesignation' ?>');
          }
        }
      })
    }

    $(document).on("click", "#btn-edit-save-designation", function() {
      const user_designationID = $("#edit-user_designationID").val();
      const user_designationDepartment = $("#edit-user_designationDepartment").val().trim();
      const user_designationName = $("#edit-user_designationName").val().trim();
      const user_designationLimit = $("#edit-user_designationLimit").val().trim();
      const user_designationStatus = $("input[id='edit-user_designationStatus']:checked").val() ? 1 : 0;
      const data = {user_designationID, user_designationDepartment, user_designationName, user_designationLimit, user_designationStatus};
      saveEditUserDepartment(data);
    })


    $(document).on("click", "#btn-add-save-designation", function() {
      const user_designationDepartment = $("#add-user_designationDepartment").val().trim();
      const user_designationName = $("#add-user_designationName").val().trim();
      const user_designationLimit = $("#add-user_designationLimit").val().trim();
      const user_designationStatus = $("input[id='add-user_designationStatus']:checked").val() ? 1 : 0;
      const data = {user_designationDepartment, user_designationName, user_designationLimit, user_designationStatus};
      saveAddUserDepartment(data);
    })

    $(document).on("click", ".btn-close-add-designation, .btn-close-edit-designation", function() {
      clearInputs();
    })

    $(document).on("click", "#btn-edit-designation-close", function() {
      $("#edit_designation").modal("show");
      $("#confirmation_edit").modal("hide");
      $("#confirmation-edit-invalid").html("");
    })

    $(document).on("click", "#btn-add-designation-close", function() {
      $("#confirmation-add-invalid").html("");
      $("#add_designation").modal("show");
      $("#confirmation_add").modal("hide");
    })

    $(document).on("click", "#btn-edit-designation", function() {
      const validate = validateInputs("edit");
      if (validate) {
        $("#edit_designation").modal("hide");
        $("#confirmation_edit").modal("show");
      }
    })

    $(document).on("click", "#btn-add-designation", function() {
      const validate = validateInputs("add");
      if (validate) {
        $("#add_designation").modal("hide");
        $("#confirmation_add").modal("show");
      }
    }) 

    $(document).on("click", ".btn-edit-modal-designation", function() {

      const user_designationID = $(this).data("user_designationid");
      const user_departmentID = $(this).data("user_departmentid");
      const user_departmentName = $(this).data("user_departmentname");
      const user_designationName = $(this).data("user_designationname");
      const user_designationLimit = $(this).data("user_designationlimit");
      const user_designationStatus = $(this).data("user_designationstatus") == 1 ? true : false;

      // console.log(user_departmentID);

      $("#edit-user_designationID").val(user_designationID);
      // $("#edit-user_designationDepartment").val(user_departmentID);
      // $('#edit-user_designationDepartment').select2('data', {id: user_departmentID, text: user_departmentName});
      $('#edit-user_designationDepartment').val(user_departmentID).trigger('change');
      $("#edit-user_designationName").val(user_designationName);
      $("#edit-user_designationLimit").val(user_designationLimit);
      $("input[id='edit-user_designationStatus']").prop("checked", user_designationStatus);

      $("#edit_designation").modal("show");
    })


  });
</script>    