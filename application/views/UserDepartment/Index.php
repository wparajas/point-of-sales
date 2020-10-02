
<div class="ms-content-wrapper"> 
      <div class="row">
        <div class="col-md-12">
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb pl-0">
                  <li class="breadcrumb-item"><a href="<?= base_url(). 'Dashboard' ?>"><i class="material-icons fs-16">dashboard</i> Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">User Department</li>
              </ol>
          </nav>
        </div>
         <div class="content container-fluid">
         <div class="ms-card">
         <div class="ms-panel-header d-flex justify-content-between align-items-center bg-primary">
              <h6 class="page-title font-weight-bold text-light" >LIST OF DEPARTMENT</h6>
              <button class="btn btn-outline-red submit-btn" data-toggle="modal" data-target="#add_department" data-backdrop="static" data-keyboard="false"><i class="fa fa-plus-square"></i> ADD DEPARTMENT</button>
          </div>
  
      <div class="col-xl-12 col-md-12">
            <div class="table-responsive mt-5 p-2">
              <table id="tabledepartment" class="table table-bordered thead-primary dtBasicExample">
                <thead>
                  <tr class="text-center">
                    <th>DEPARTMENT CODE</th>
                    <th>DEPARTMENT NAME</th>
                    <th>STATUS</th>
                    <th>ACTION</th>
                  </tr>
                </thead>
                  <tbody>

                    <?php foreach($departments as $department) { ?>
                      <tr>
                        <td><?= $department['user_departmentCode'] ?></td>
                        <td><?= $department['user_departmentName'] ?></td>
                        <td class="text-center">
                          <?php
                            $status = $department['user_departmentStatus'] == 1 ? 'Active' : 'Inactive';
                            $badge = $department['user_departmentStatus'] == 1 ? 'badge-outline-success' : 'badge-outline-danger';
                          ?>
                          <span class="badge <?= $badge ?>"><?= $status ?></span>
                        </td>
                        <td>
                          <div class="drop-down float-right">
                            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="material-icons" style="font-size: 1.5rem">more_vert</i></a>
                            <ul class="dropdown-menu dropdown-menu-right">
                              <li class="ms-dropdown-list">
                                <a class="media p-2 btn-edit-modal-department" 
                                   href="javascript:void(0);"
                                   data-user_departmentid = "<?= $department['user_departmentID'] ?>"
                                   data-user_departmentname = "<?= $department['user_departmentName'] ?>"
                                   data-user_departmentstatus = "<?= $department['user_departmentStatus'] ?>">
                                  <div class="media-body " 
                                       id="" >
                                    <i class="fas fa-pencil-alt text-secondary" style="font-size: 1rem"></i><span> Edit</span>
                                  </div>
                                </a>
                              </li>
                            </ul>
                          </div>
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
<div id="add_department" class="modal custom-modal fade" role="dialog" data-backdrop="static" data-keyboard="false">
      <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="centertag">
             <div class="modal-header bg-primary d-flex justify-content-between align-items-start">
                <h5 class="text-light font-weight-bold">ADD DEPARTMENT</h5>
                <button type="button" class="close btn-close-add-department" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="text-light">&times;</span></button>
              </div>
             </div> 
            <div class="modal-body">
              <div class="form-group">
                <label>Department Name <span class="text-danger">*</span></label>
                <input type="text" placeholder="Enter Department Name" class="form-control alphanumericdashunderscorespace" id="add-user_departmentName" name="adddescription" required="" autocomplete="off">
                <div class="invalid-feedback" id="add-invalid-user_departmentName"></div>
              </div> 
              <div class="form-group " >
                <label>Status<span class="text-danger">*</span></label><br>
                <div class="d-flex align-items-center">
                  <span> Inactive </span>&nbsp;
                  <label class="ms-switch">
                    <input type="checkbox" checked name="addstatus"id="add-user_departmentStatus"> <span class="ms-switch-slider ms-switch-success round"></span>
                  </label> &nbsp;
                  <span> Active </span>
                </div>
            </div> 
          </div>
          <div class="modal-footer">
            <div class="w-100 text-center">
              <button type="button" class="btn btn-primary submit-btn"id="btn-add-department"name="save"> ADD</button>
            </div>
          </div>
        </div>    
    </div>
  </div>

   <!-- <div id="confirmation_add" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body text-center">
              <img class="isometric confirmationisometric" width="230px" height="100px" sytle="" src="<?=base_url(); ?>pages/assets/img/isometric/addpicture.png">
              <h3 style="text-align: center">ADD DEPARTMENT</h3>
              <p style="text-align: center">Are you sure you want to add new Department?</p>
              <div class="invalid-feedback" id="status-invalid"></div>
        </div>
        <div class="modal-footer">
          <div class="w-100 text-center">
            <button class="btn cancel-btn btn-outline-danger" id="cncl-add">NO</button>
            <button type="button" class="btn btn-primary submit-btn add"> YES</button>
          </div>
        </div>
      </div>
    </div>
  </div> -->

<div class="modal fade" id="confirmation_add" tabindex="-1" role="dialog" aria-labelledby="confirmation_add" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-min" role="document">
    <div class="modal-content">
        <div class="modal-body pb-3 text-center">
          <button type="button" class="close" id="btn-add-department-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <img class="isometric confirmationisometric" width="230px" height="100px" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/modal/confirmation.png">
        <h1 class="text-red text-center font-weight-bold">ADD DEPARTMENT</h1>
        <p class="text-center my-2">Are you sure you want to add department?</p>
        <div class="invalid-feedback d-flex justify-content-center align-items-center" id="confirmation-add-invalid"></div>
        </div>
        <div class="modal-footer">
          <div class="w-100 text-center">
          <button type="button" data-dismiss="modal" class="btn btn-outline-primary shadow-none" id="btn-add-department-close">NO</button>
            <button type="button" class="btn btn-primary shadow-none" id="btn-add-save-department">YES</button>
        </div>
        </div>
    </div>
  </div>
</div>

    <!-- <div id="edit_employeedepartment" class="modal custom-modal fade" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="centertag">
             <div class="modal-header">
              <div class="w-100 text-center">
                  <h5 class="modal-title text-red p-2" id="exampleModalCenterTitle">EDIT DEPARTMENT</h5>
              </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
             </div> 
            <div class="modal-body">
            <form method="post">
              <div class="form-group">
              <label>Department<span class="text-danger">*</span></label>
              <input type="text" placeholder="Description" class="form-control restrictspecchar"id="editdescription" name="editdescription"required="">
              <div class="invalid-feedback" id="add-invalid"></div>
              </div> 
                <div class="form-group">
                    <label>Status<span class="text-danger">*</span></label><br>
                        <div class="d-flex align-items-center">
                          <span> Inactive </span>&nbsp;
                          <label class="ms-switch">
                            <input type="checkbox" checked="" name="editstatus"id="editstatus"> <span class="ms-switch-slider ms-switch-success round"></span>
                          </label>&nbsp;
                          <span> Active </span>
                        </div>
                </div> 

            <div class="modal-footer">
              <button class="btn cancel-btn btn-outline-danger" data-dismiss="modal">CANCEL</button>
                 <button type="button" class="btn btn-primary submit-btn float-right update"> UPDATE</button>
            </div>
           
            </form>
          </div>
        </div>    
    </div>
  </div> -->

  <div id="edit_employeedepartment" class="modal custom-modal fade" role="dialog" data-backdrop="static" data-keyboard="false">
      <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="centertag">
             <div class="modal-header bg-primary d-flex justify-content-between align-items-start">
                <h5 class="text-light font-weight-bold">EDIT DEPARTMENT</h5>
                <button type="button" class="close btn-close-edit-department" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="text-light">&times;</span></button>
              </div>
             </div> 
            <div class="modal-body">
              <input type="hidden" name="edit-user_departmentID" id="edit-user_departmentID">
              <div class="form-group">
                <label>Department Name <span class="text-danger">*</span></label>
                <input type="text" placeholder="Enter Department Name" class="form-control alphanumericdashunderscorespace" id="edit-user_departmentName" name="adddescription" required autocomplete="off">
                <div class="invalid-feedback" id="edit-invalid-user_departmentName"></div>
              </div> 
              <div class="form-group " >
                <label>Status<span class="text-danger">*</span></label><br>
                <div class="d-flex align-items-center">
                  <span> Inactive </span>&nbsp;
                  <label class="ms-switch">
                    <input type="checkbox" checked="" name="addstatus"id="edit-user_departmentStatus"> <span class="ms-switch-slider ms-switch-success round"></span>
                  </label> &nbsp;
                  <span> Active </span>
                </div>
            </div> 
          </div>
          <div class="modal-footer">
            <div class="w-100 text-center">
              <button type="button" class="btn btn-primary submit-btn"id="btn-edit-department"name="save"> UPDATE</button>
            </div>
          </div>
        </div>    
    </div>
  </div>

   <!-- <div id="confirmation_edit" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="form-header">
                <center><img class="isometric confirmationisometric" width="230px" height="100px" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/isometric/updatepicture.jpg">
               <h3 style="text-align: center">UPDATE DEPARTMENT</h3>
              <p style="text-align: center">Are you sure you want to update the Department?</p></center>
              <div class="invalid-feedback" id="status-invalid"></div>
              <br> 
          </div>
            <div class="modal-footer">
              <a href="#" data-dismiss="modal" class="btn cancel-btn btn-outline-danger" id="cncl-edit"> NO</a>
                  <a href="#" class="btn btn-primary submit-btn continue-btn edit"></i> YES</a>
            </div>
        </div>
      </div>
    </div>
  </div> -->

<div class="modal fade" id="confirmation_edit" tabindex="-1" role="dialog" aria-labelledby="confirmation_edit" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-min" role="document">
    <div class="modal-content">
        <div class="modal-body pb-3 text-center">
          <button type="button" class="close" id="btn-edit-department-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <img class="isometric confirmationisometric" width="230px" height="100px" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/modal/confirmation.png">
        <h1 class="text-red text-center font-weight-bold">UPDATE DEPARTMENT</h1>
            <p class="text-center my-2">Are you sure you want to update this Department?</p>
            <div class="invalid-feedback d-flex justify-content-center align-items-center" id="confirmation-edit-invalid"></div>
        </div>
        <div class="modal-footer">
          <div class="w-100 text-center">
          <button type="button" data-dismiss="modal" class="btn btn-outline-primary shadow-none" id="btn-edit-department-close">NO</button>
            <button type="button" class="btn btn-primary shadow-none" id="btn-edit-save-department">YES</button>
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

    const elemArr = ["user_departmentName"];
    const elemArrText = ["Department Name"];
    const elemArrLength = elemArr.length;

    $('#tabledepartment').DataTable({
      "paging": true
    // false to disable pagination (or any other option)
    });

    function validateInputs(todo = "add") {
      const focusElem = [];
      let count = 0;
      for (var i=0; i<elemArrLength; i++) {
        const elem = $("#"+todo+"-"+elemArr[i]).val();
        if (elem == "" || elem == null) {
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

    const saveEditUserDepartment = (data) => {
      $.ajax({
        url : "<?= site_url('UserDepartment/update');?>",
        method : "POST",
        data,
        async : true,
        dataType : 'json',
        success: function(data) {
          var result = data.split('|'); 
          if(result[0] == "false") {
            $("#confirmation-edit-invalid").html(result[1]);
            showErrorToast(result[1]);
          } else {
            window.location.replace('<?= base_url().'UserDepartment' ?>');
          }
        }
      })
    }

    const saveAddUserDepartment = (data) => {
      $.ajax({
        url : "<?= site_url('UserDepartment/save');?>",
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
            window.location.replace('<?= base_url().'UserDepartment' ?>');
          }
        }
      })
    }

    $(document).on("click", "#btn-edit-save-department", function() {
      const user_departmentID = $("#edit-user_departmentID").val();
      const user_departmentName = $("#edit-user_departmentName").val().trim();
      const user_departmentStatus = $("input[id='edit-user_departmentStatus']:checked").val() ? 1 : 0;
      const data = {user_departmentID, user_departmentName, user_departmentStatus};
      saveEditUserDepartment(data);
    })

    $(document).on("click", "#btn-add-save-department", function() {
      const user_departmentName = $("#add-user_departmentName").val().trim();
      const user_departmentStatus = $("input[id='add-user_departmentStatus']:checked").val() ? 1 : 0;
      const data = {user_departmentName, user_departmentStatus};
      saveAddUserDepartment(data);
    })

    $(document).on("click", ".btn-edit-modal-department", function() {
      const user_departmentID = $(this).data("user_departmentid");
      const user_departmentName = $(this).data("user_departmentname");
      const user_departmentStatus = $(this).data("user_departmentstatus") == 1 ? true : false;

      $("#edit-user_departmentID").val(user_departmentID);
      $("#edit-user_departmentName").val(user_departmentName);
      // $('input[id="edit-user_departmentStatus"]').prop("checked", true);
      $("input[id='edit-user_departmentStatus']").prop("checked", user_departmentStatus);

      $("#edit_employeedepartment").modal("show");
    })

    $(document).on("click", ".btn-close-add-department, .btn-close-edit-department", function() {
      clearInputs();
    })

    $(document).on("click", "#btn-edit-department-close", function() {
      $("#edit_employeedepartment").modal("show");
      $("#confirmation_edit").modal("hide");
      $("#confirmation-edit-invalid").html("");
    })

    $(document).on("click", "#btn-add-department-close", function() {
      $("#add_department").modal("show");
      $("#confirmation_add").modal("hide");
      $("#confirmation-add-invalid").html("");
    })

    $(document).on("click", "#btn-edit-department", function() {
      const validate = validateInputs("edit");
      if (validate) {
        $("#edit_employeedepartment").modal("hide");
        $("#confirmation_edit").modal("show");
      }
    })

    $(document).on("click", "#btn-add-department", function() {
      const validate = validateInputs("add");
      if (validate) {
        $("#add_department").modal("hide");
        $("#confirmation_add").modal("show");
      }
    })

  });
</script>    
































































































































































































































































































































































































































