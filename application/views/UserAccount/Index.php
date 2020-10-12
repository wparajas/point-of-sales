
<div class="ms-content-wrapper"> 
      <div class="row">
        <div class="col-md-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0">
              <li class="breadcrumb-item"><a href="<?= base_url(). 'Dashboard' ?>"><i class="material-icons fs-16">dashboard</i> Dashboard</a></li>
              <li class="breadcrumb-item active">User Account</li>
            </ol>
          </nav>
        </div>
         <div class="content container-fluid">
         <div class="ms-card">
         <div class="ms-card-header d-flex justify-content-between align-items-center" style="background-color:#ff0018;">
              <h6 class="page-title text-light font-weight-bold">LIST OF USERS</h6>
              <button class="btn btn-outline-red submit-btn" data-toggle="modal" data-target="#add_account" data-backdrop="static" data-keyboard="false"><i class="fa fa-plus-square"></i> ADD USER</button>
         </div>
    <div class="col-xl-12 col-md-12 mt-5 p-2">
          <div class="table-responsive">
            <table id="tableemployee" class="table table-bordered thead-primary dtBasicExample">
              <thead>
                <tr class="text-center">
                  <th style="width: 100px">USER CODE</th>
                  <th>NAME</th>
                  <th>USERNAME</th>
                  <th>ROLE</th>
                  <th>CONTACT NUMBER</th>
                  <th>HIRED DATE</th>
                  <th style="width: 50px">STATUS</th>
                  <th style="width: 50px">ACTION</th>
                </tr>
              </thead>
                <tbody>
               
                  <?php foreach($useraccount as $account) { ?>

                    <tr>
                      <td><?= $account['user_accountCode'] ?></td>
                      <td><?= $account['user_accountFirstname'].' '.$account['user_accountMiddlename'].' '.$account['user_accountLastname'] ?></td>
                      <td><?= $account['user_accountUsername'] ?></td>
                      <td><?= $account['user_roleName'] ?></td>
                      <td><?= $account['user_accountContactnumber'] ?></td>
                      <td><?= date("F d, Y", strtotime($account['user_accountHireddate'])) ?></td>
                      <td class="text-center">
                        <?php
                          $status = $account['user_accountStatus'] == 1 ? 'Active' : 'Inactive';
                          $badge = $account['user_accountStatus'] == 1 ? 'badge-outline-success' : 'badge-outline-danger';
                        ?>
                        <span class="badge <?= $badge ?> w-100"><?= $status ?></span>
                      </td>
                      <td class="text-center">
                        <!-- <div class="drop-down float-right">
                          <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="material-icons" style="font-size: 1.5rem">more_vert</i></a>
                          <ul class="dropdown-menu dropdown-menu-right">
                            <li class="ms-dropdown-list">
                              <a class="media p-2 btn-edit-modal-account" 
                                 href="javascript:void(0);"
                                 data-user_accountid = "<?= $account['user_accountID'] ?>"
                                 data-user_accountfirstname = "<?= $account['user_accountFirstname'] ?>"
                                 data-user_accountmiddlename = "<?= $account['user_accountMiddlename'] ?>"
                                 data-user_accountlastname = "<?= $account['user_accountLastname'] ?>"
                                 data-user_accounthireddate = "<?= date("yy-m-d", strtotime($account['user_accountHireddate'])) ?>"
                                 data-user_accountcontactnumber = "<?= $account['user_accountContactnumber'] ?>"
                                 data-user_departmentid = "<?= $account['user_departmentID'] ?>"
                                 data-user_designationid = "<?= $account['user_designationID'] ?>"
                                 data-user_accountstatus = "<?= $account['user_accountStatus'] ?>"
                                 data-user_accountusername = "<?= $account['user_accountUsername'] ?>"
                                 data-user_accountpassword = "<?= $account['user_accountPassword'] ?>"
                                 data-user_roleid = "<?= $account['roleID'] ?>"
                                 data-user_departmentname="<?= $account['user_departmentName'] ?>">
                                <div class="media-body "
                                    id="" >
                                  <i class="fas fa-pencil-alt text-secondary" style="font-size: 1rem"></i><span> Edit</span>
                                </div>
                              </a>
                            </li>
                          </ul>
                        </div> -->
                        <a class="btn btn-primary btn-edit-modal-account p-0" 
                          href="javascript:void(0);"
                          style="min-width: 80px"
                          data-user_accountid = "<?= $account['user_accountID'] ?>"
                          data-user_accountfirstname = "<?= $account['user_accountFirstname'] ?>"
                          data-user_accountmiddlename = "<?= $account['user_accountMiddlename'] ?>"
                          data-user_accountlastname = "<?= $account['user_accountLastname'] ?>"
                          data-user_accounthireddate = "<?= date("yy-m-d", strtotime($account['user_accountHireddate'])) ?>"
                          data-user_accountcontactnumber = "<?= $account['user_accountContactnumber'] ?>"
                          data-user_departmentid = "<?= $account['user_departmentID'] ?>"
                          data-user_designationid = "<?= $account['user_designationID'] ?>"
                          data-user_accountstatus = "<?= $account['user_accountStatus'] ?>"
                          data-user_accountusername = "<?= $account['user_accountUsername'] ?>"
                          data-user_accountpassword = "<?= $account['user_accountPassword'] ?>"
                          data-user_roleid = "<?= $account['roleID'] ?>"
                          data-user_departmentname="<?= $account['user_departmentName'] ?>">
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
   <!-- add new employee  --> 
    <div id="add_account" class="modal custom-modal fade" role="dialog" data-backdrop="static" data-keyboard="false">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
               <div class="centertag">
                <div class="modal-header d-flex justify-content-between align-items-start bg-primary">
                  <h5 class="modal-title text-light" id="exampleModalCenterTitle">ADD USER</h5>
                  <button type="button" class="close btn-close-add-account" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="text-light">&times;</span></button>
                </div>
              </div>
            <div class="modal-body">
              <div class="col-lg-12">
                <ul class="nav nav-tabs tabs-bordered" role="tablist">
                    <li class="active"><a href="#addinfo" id="btn-addinfo" role="tab" data-toggle="tab" class="active">Information</a></li>
                    <li><a href="#addroletab" id="btn-addaccount" role="tab" data-toggle="tab">Account</a>
                    </li>
                </ul>
              <form method="post">
                <div class="tab-content">
                  <div class="tab-pane active" id="addinfo">
                      <br />
                      <input type="hidden" name="">
                      <div class="form-group">
                          <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="fname">First Name<code>*</code> </label>
                                <div class="input-group">
                                    <input type="text" class="form-control alphanumericunderscorespace" id="add-user_accountFirstname" name="add-user_accountFirstname" placeholder="Enter First Name" required="" autocomplete="off">
                                    <div class="invalid-feedback" id="add-invalid-user_accountFirstname"></div>
                                </div>
                              </div>
                               <div class="col-md-6 mb-3">
                                  <label for="validationCustom06">Hired Date<code>*</code> </label>
                                  <div class="input-group">
                                      <input type="date"  id="add-user_accountHireddate"name="add-user_accountHireddate" class="form-control date-validate" autocomplete="off" required >
                                      <div class="invalid-feedback" id="add-invalid-user_accountHireddate"></div>
                                  </div>
                              </div> 
                             <div class="col-md-6 mb-3">
                                <label for="mname">Middle Name </label>
                                <div class="input-group">
                                    <input type="text" class="form-control alphanumericdashspace" id="add-user_accountMiddlename"name="add-user_accountMiddlename" placeholder="Enter Middle Name" autocomplete="off" >
                                    <div class="invalid-feedback" id="add-invalid-user_accountMiddlename"></div>
                                </div>
                              </div>
                             
                              <div class="col-md-6 mb-3">
                                <label>Department <code>*</code></label>
                                <div class="input-group">
                                  <!-- <input type="text" list="user_department-list" class="form-control alphanumericunderscore user_accountDepartment" data-todo="add" id="add-user_accountDepartment" name="add-user_accountDepartment" placeholder="Enter Department" autocomplete="off">
                                  <datalist id="user_department-list">
                                    <?php foreach($userdepartment as $department) { ?>
                                      <option><?= $department['user_departmentName'] ?></option>
                                    <?php } ?>
                                  </datalist> -->
                                  <select class="form-control user_accountDepartment select2" name="add-user_accountDepartment" id="add-user_accountDepartment" data-todo="add" style="width: 100%">
                                    <option value="" selected disabled>Select User Department</option>
                                    <?php foreach ($userdepartment as $department) { ?>
                                      <option value="<?= $department['user_departmentID'] ?>"><?= $department['user_departmentName'] ?></option>
                                    <?php } ?>
                                  </select>
                                  <div class="invalid-feedback" id="add-invalid-user_accountDepartment"></div>
                             </div>
                             </div> 
                              <div class="col-md-6 mb-3">
                                <label for="lname">Last Name<code>*</code> </label>
                                <div class="input-group">
                                    <input type="text" class="form-control alphanumericdashspace" id="add-user_accountLastname"name="add-user_accountLastname" placeholder="Enter Last Name" required="" autocomplete="off">
                                    <div class="invalid-feedback" id="add-invalid-user_accountLastname"></div>
                                </div>
                              </div>
                             <div class="col-md-6 mb-3">
                                <label>Designation <code>*</code></label>
                                <div class="input-group">
                                    <select class="form-control select2" id="add-user_accountDesignation"name="designation" required style="width: 100%">
                                        <option value="" selected disabled>Select Designation</option>
                                    </select>
                                    <div class="invalid-feedback" id="add-invalid-user_accountDesignation"></div>
                             </div>
                             </div> 
                              <div class="col-md-6 mb-3">
                                  <label for="cnum">Contact Number<code>*</code></label>
                                  <div class="input-group">
                                      <input type="text" class="form-control contactnumber" name="cnum" id="add-user_accountContactnumber" name="add-user_accountContactnumber"  placeholder="Enter contact number" required="" autocomplete="off" maxlength="13">
                                      <div class="invalid-feedback" id="add-invalid-user_accountContactnumber"></div>
                                  </div>
                              </div>
                            <div class="col-md-6 mb-3">
                              <div class="form-group">
                              <label>Status <span class="text-danger">*</span></label><br>
                              <div class="d-flex align-items-center">
                              <span> Inactive </span> &nbsp;
                              <label class="ms-switch">
                              <input type="checkbox" checked="" name="add-user_accountStatus"id="add-user_accountStatus"> <span class="ms-switch-slider ms-switch-success round"></span>
                              </label> &nbsp;
                              <span> Active </span>
                              </div>
                              </div> 
                            </div>
                          </div>
                      </div>
                  </div>
                  <div class="tab-pane" id="addroletab">
                      <div class="col-md-12 mt-5 mb-3">
                          <label>Username<code>*</code></label>
                          <div class="input-group">
                              <input type="text" class="form-control alphanumericunderscore" id="add-user_accountUsername"name="add-user_accountUsername" placeholder="Enter Username" required="" minlength="5" autocomplete="off">
                              <div class="invalid-feedback" id="add-invalid-user_accountUsername"></div>
                          </div>
                      </div>
                      <div class="col-md-12 mb-3">
                          <label>Password<code>*</code></label>
                          <div class="form-group">
                              <input type="password" class="form-control alphanumericunderscore pass" id="add-user_accountPassword"name="add-user_accountPassword" placeholder="Enter Password" minlength="5" required="">
                              <span toggle="#password-field1" class=""></span> 
                              <div class="invalid-feedback" id="add-invalid-user_accountPassword"></div>
                          </div>
                      </div>
                       <div class="col-md-12 mb-3">
                          <label>Role <code>*</code></label>
                          <div class="input-group">
                              <!-- <select class="form-control" id="add-user_accountRole"name="add-user_accountRole" required>
                                  <option value="" selected disabled>Select Role</option>
                                  <?php foreach($userrole as $role) { ?>
                                    <option value="<?= $role['user_roleID'] ?>"><?= $role['user_roleName'] ?></option>
                                  <?php } ?>
                              </select> -->

                              <select class="form-control user_accountRole select2" name="add-user_accountRole" id="add-user_accountRole" data-todo="add" style="width: 100%">
                                <option value="" selected disabled>Select User Role</option>
                                <?php foreach ($userrole as $role) { ?>
                                  <option value="<?= $role['roleID'] ?>"><?= $role['roleDescription'] ?></option>
                                <?php } ?>
                              </select>
                              <div class="invalid-feedback" id="add-invalid-user_accountRole"></div>
                          </div>
                      </div> 

                  </div>
              </div>

              </div>
              <div class="modal-footer">
                <div class="w-100 text-center">
                 <button type="button" class="btn btn-primary submit-btn"id="btn-add-account"name="save"> ADD</button>
               </div>
              </div>
              </form>
          </div>
      </div>    
      </div>
      </div>
      </div>
    </div> 

 <div class="modal fade" id="confirmation_add" tabindex="-1" role="dialog" aria-labelledby="confirmation_add" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-min" role="document">
    <div class="modal-content">
        <div class="modal-body pb-3 text-center">
          <button type="button" class="close" id="btn-add-account-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <img class="isometric confirmationisometric" width="230px" height="100px" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/modal/confirmation.png">
        <h1 class="text-red text-center font-weight-bold">ADD ACCOUNT</h1>
            <p class="text-center my-2">Are you sure you want to add new account?</p>
            <div class="invalid-feedback d-flex justify-content-center align-items-center" id="confirmation-add-invalid"></div>
        </div>
        <div class="modal-footer">
          <div class="w-100 text-center">
          <button type="button" data-dismiss="modal" class="btn btn-outline-primary shadow-none" id="btn-add-account-close">NO</button>
            <button type="button" class="btn btn-primary shadow-none" id="btn-add-save-account">YES</button>
        </div>
        </div>
    </div>
  </div>
</div>

<!-- add new employee  --> 
    <div id="edit_account" class="modal custom-modal fade" role="dialog" data-backdrop="static" data-keyboard="false">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
               <div class="centertag">
                <div class="modal-header d-flex justify-content-between align-items-start bg-primary">
                  <h5 class="modal-title text-light" id="exampleModalCenterTitle">EDIT USER</h5>
                  <button type="button" class="close btn-close-edit-account" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="text-light">&times;</span></button>
                </div>
              </div>
            <div class="modal-body">
              <div class="col-lg-12">
                <ul class="nav nav-tabs tabs-bordered" role="tablist">
                    <li class="active"><a href="#editinfo" id="btn-editinfo" role="tab" data-toggle="tab" class="active">Information</a></li>
                    <li><a href="#editroletab" id="btn-editaccount" role="tab" data-toggle="tab">Account</a>
                    </li>
                </ul>
              <form method="post">
                <div class="tab-content">
                  <div class="tab-pane active" id="editinfo">
                      <br />
                      <input type="hidden" id="edit-user_accountID" name="edit-user_accountID">
                      <div class="form-group">
                          <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="fname">First Name<code>*</code> </label>
                                <div class="input-group">
                                    <input type="text" class="form-control alphanumericunderscorespace" id="edit-user_accountFirstname" name="edit-user_accountFirstname" placeholder="Enter First Name" required="" autocomplete="off">
                                    <div class="invalid-feedback" id="edit-invalid-user_accountFirstname"></div>
                                </div>
                              </div>
                               <div class="col-md-6 mb-3">
                                  <label for="validationCustom06">Hired Date<code>*</code> </label>
                                  <div class="input-group">
                                      <input type="date"  id="edit-user_accountHireddate"name="edit-user_accountHireddate"  value="" class="form-control date-validate" autocomplete="off" required >
                                      <div class="invalid-feedback" id="edit-invalid-user_accountHireddate"></div>
                                  </div>
                              </div> 
                             <div class="col-md-6 mb-3">
                                <label for="mname">Middle Name </label>
                                <div class="input-group">
                                    <input type="text" class="form-control alphanumericdashspace" id="edit-user_accountMiddlename"name="edit-user_accountMiddlename" placeholder="Enter Middle Name" autocomplete="off" >
                                    <div class="invalid-feedback" id="edit-invalid-user_accountMiddlename"></div>
                                </div>
                              </div>
                             
                              <div class="col-md-6 mb-3">
                                <label>Department <code>*</code></label>
                                <div class="input-group">
                                  <!-- <input type="text" list="user_department-list" class="form-control alphanumericunderscore user_accountDepartment" data-todo="edit" id="edit-user_accountDepartment" name="edit-user_accountDepartment" placeholder="Enter Department" autocomplete="off">
                                  <datalist id="user_department-list">
                                    <?php foreach($userdepartment as $department) { ?>
                                      <option><?= $department['user_departmentName'] ?></option>
                                    <?php } ?>
                                  </datalist> -->
                                  <select class="form-control user_accountDepartment select2" name="edit-user_accountDepartment" id="edit-user_accountDepartment" data-todo="edit" style="width: 100%">
                                    <option value="" selected disabled>Select User Department</option>
                                    <?php foreach ($userdepartment as $department) { ?>
                                      <option value="<?= $department['user_departmentID'] ?>"><?= $department['user_departmentName'] ?></option>
                                    <?php } ?>
                                  </select>
                                  <div class="invalid-feedback" id="edit-invalid-user_accountDepartment"></div>
                             </div>
                             </div> 
                              <div class="col-md-6 mb-3">
                                <label for="lname">Last Name<code>*</code> </label>
                                <div class="input-group">
                                    <input type="text" class="form-control alphanumericdashspace" id="edit-user_accountLastname"name="edit-user_accountLastname" placeholder="Enter Last Name" required="" autocomplete="off">
                                    <div class="invalid-feedback" id="edit-invalid-user_accountLastname"></div>
                                </div>
                              </div>
                             <div class="col-md-6 mb-3">
                                <label>Designation <code>*</code></label>
                                <div class="input-group">
                                    <select class="form-control select2" id="edit-user_accountDesignation"name="designation" required style="width: 100%">
                                        <option value="" selected disabled>Select Designation</option>
                                    </select>
                                    <div class="invalid-feedback" id="edit-invalid-user_accountDesignation"></div>
                             </div>
                             </div> 
                              <div class="col-md-6 mb-3">
                                  <label for="cnum">Contact Number<code>*</code></label>
                                  <div class="input-group">
                                      <input type="text" class="form-control contactnumber" name="cnum" id="edit-user_accountContactnumber" name="edit-user_accountContactnumber"  placeholder="Enter contact number" required="" autocomplete="off" maxlength="13">
                                      <div class="invalid-feedback" id="edit-invalid-user_accountContactnumber"></div>
                                  </div>
                              </div>
                            <div class="col-md-6 mb-3">
                              <div class="form-group">
                              <label>Status <span class="text-danger">*</span></label><br>
                              <div class="d-flex align-items-center">
                              <span> Inactive </span> &nbsp;
                              <label class="ms-switch">
                              <input type="checkbox" checked="" name="edit-user_accountStatus"id="edit-user_accountStatus"> <span class="ms-switch-slider ms-switch-success round"></span>
                              </label> &nbsp;
                              <span> Active </span>
                              </div>
                              </div> 
                            </div>
                          </div>
                      </div>
                  </div>
                  <div class="tab-pane" id="editroletab">
                      <div class="col-md-12 mt-5 mb-3">
                          <label>Username<code>*</code></label>
                          <div class="input-group">
                              <input type="text" class="form-control alphanumericunderscore" id="edit-user_accountUsername"name="edit-user_accountUsername" placeholder="Enter Username" required="" minlength="5" autocomplete="off">
                              <div class="invalid-feedback" id="edit-invalid-user_accountUsername"></div>
                          </div>
                      </div>
                      <div class="col-md-12 mb-3">
                          <label>Password<code>*</code></label>
                          <div class="form-group">
                              <input type="password" class="form-control alphanumericunderscore pass" id="edit-user_accountPassword"name="edit-user_accountPassword" placeholder="Enter Password" minlength="5" required="">
                              <span toggle="#password-field1" class=""></span> 
                              <div class="invalid-feedback" id="edit-invalid-user_accountPassword"></div>
                          </div>
                      </div>
                       <div class="col-md-12 mb-3">
                        <label>Role <code>*</code></label>
                        <div class="input-group">
                          <!-- <select class="form-control" id="edit-user_accountRole"name="edit-user_accountRole" required>
                              <option value="" selected disabled>Select Role</option>
                              <?php foreach($userrole as $role) { ?>
                                <option value="<?= $role['user_roleID'] ?>"><?= $role['user_roleName'] ?></option>
                              <?php } ?>
                          </select> -->
                          <select class="form-control user_accountRole select2" name="edit-user_accountRole" id="edit-user_accountRole" data-todo="edit" style="width: 100%">
                            <option value="" selected disabled>Select User Role</option>
                            <?php foreach ($userrole as $role) { ?>
                              <option value="<?= $role['roleID'] ?>"><?= $role['roleDescription'] ?></option>
                            <?php } ?>
                          </select>
                          <div class="invalid-feedback" id="edit-invalid-user_accountRole"></div>
                        </div>
                      </div> 

                  </div>
              </div>

              </div>
              <div class="modal-footer">
                <div class="w-100 text-center">
                 <button type="button" class="btn btn-primary submit-btn"id="btn-edit-account"name="save"> UPDATE</button>
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
              <button type="button" class="close" id="btn-edit-account-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <img class="isometric confirmationisometric" width="230px" height="100px" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/modal/confirmation.png">
            <h1 class="text-red text-center font-weight-bold">EDIT ACCOUNT</h1>
                <p class="text-center my-2">Are you sure you want to update this account?</p>
                <div class="invalid-feedback d-flex justify-content-center align-items-center" id="confirmation-edit-invalid"></div>
            </div>
            <div class="modal-footer">
              <div class="w-100 text-center">
              <button type="button" data-dismiss="modal" class="btn btn-outline-primary shadow-none" id="btn-edit-account-close">NO</button>
                <button type="button" class="btn btn-primary shadow-none" id="btn-edit-save-account">YES</button>
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

    $(".select2").select2({
      theme: "bootstrap"
    });

     $('#tableemployee').DataTable({
        "paging": true
      // false to disable pagination (or any other option)
      });

    const elemArr = ["user_accountFirstname", "user_accountHireddate", "user_accountDepartment", "user_accountLastname", "user_accountDesignation", "user_accountContactnumber", "user_accountUsername", "user_accountPassword", "user_accountRole"];
    const elemArrText = ["First Name", "Hired Date", "Department", "Last Name", "Designation", "Contact Number", "Username", "Password", "Role"];
    const elemArrLength = elemArr.length;

    function validateInputs(todo = "add") {
      const focusElem = [];
      let count = 0;
      for (var i=0; i<elemArrLength; i++) {
        const elem = $("#"+todo+"-"+elemArr[i]).val();
        // console.log(elem);
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
        const infoTab = [todo+"-user_accountFirstname", todo+"-user_accountHireddate", todo+"-user_accountDepartment", todo+"-user_accountLastname", todo+"-user_accountDesignation", todo+"-user_accountContactnumber"];
        // const accountTab = [todo+"-user_accountUsername", todo+"-user_accountPassword", todo+"-user_accountRole"];
        if (infoTab.includes(todo+"-"+focusElem[0])) {
          $("#"+todo+"roletab").removeClass("active show");
          $("#"+todo+"info").addClass("active show");
          $("#btn-"+todo+"account").removeAttr("class");
          $("#btn-"+todo+"info").addClass("active show");
        } else {
          $("#"+todo+"info").removeClass("active show");
          $("#"+todo+"roletab").addClass("active show");
          // $("#btn-"+todo+"info").removeClass("active show");
          $("#btn-"+todo+"info").removeAttr("class");
          $("#btn-"+todo+"account").addClass("active show");
        }
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

    const saveUserAccount = (data, todo) => {
      const controllerTodo = todo == "add" ? "<?= site_url('UserAccount/save');?>" : "<?= site_url('UserAccount/update');?>";
      $.ajax({
        url : controllerTodo,
        method : "POST",
        data,
        async : true,
        dataType : 'json',
        success: function(data){
          var result = data.split('|');
          if(result[0] == "false") {
            $("#confirmation-"+todo+"-invalid").html(result[1]);
            showErrorToast(result[1]);
          } else {
            window.location.replace('<?= base_url().'useraccount' ?>');
          }
        }
      })
    }

    const loadDesignation = (data, todo, designationID = "") => {
      $.ajax({
        url : "<?= site_url('UserAccount/loadDesignation');?>",
        method : "POST",
        data,
        async : false,
        dataType : 'json',
        success: function(data){
          let html = '<option value="" selected disabled>Select Designation</option>';
          if (data.length > 0) {
            data.map(item => {
              const attr = designationID == item.user_designationID ? "selected" : "";
              html += '<option value="'+item.user_designationID+'" '+attr+'>'+item.user_designationName+'</option>';
              // html += '<option value="'+item.user_designationID+'>'+item.user_designationName+'</option>';
            });
          }
          $("#"+todo+"-user_accountDesignation").html(html);
        }
      })
    }

    $(document).on("click", "#btn-edit-save-account", function() {
      const user_accountID = $("#edit-user_accountID").val();
      const user_accountFirstname = $("#edit-user_accountFirstname").val().trim();
      const user_accountMiddlename = $("#edit-user_accountMiddlename").val().trim();
      const user_accountLastname = $("#edit-user_accountLastname").val().trim();
      const user_accountContactnumber = $("#edit-user_accountContactnumber").val().trim();
      const user_accountHireddate = $("#edit-user_accountHireddate").val();
      const user_accountDepartment = $("#edit-user_accountDepartment").val().trim();
      const user_accountDesignation = $("#edit-user_accountDesignation").val().trim();
      const user_accountStatus = $("input[id='edit-user_accountStatus']:checked").val() ? 1 : 0;
      const user_accountUsername = $("#edit-user_accountUsername").val().trim();
      const user_accountPassword = $("#edit-user_accountPassword").val().trim();
      const user_accountRole = $("#edit-user_accountRole").val();

      const data = {
        user_accountID,
        user_accountFirstname,
        user_accountMiddlename,
        user_accountLastname,
        user_accountContactnumber,
        user_accountHireddate,
        user_accountDepartment,
        user_accountDesignation,
        user_accountStatus,
        user_accountUsername,
        user_accountPassword,
        user_accountRole
      };
      // console.log(user_accountID);
      saveUserAccount(data, "edit");
    });

    $(document).on("click", ".btn-edit-modal-account", function() {
      const user_accountID = $(this).data("user_accountid");

      const user_accountFirstname = $(this).data("user_accountfirstname");
      const user_accountMiddlename = $(this).data("user_accountmiddlename");
      const user_accountLastname = $(this).data("user_accountlastname");
      const user_accountHireddate = $(this).data("user_accounthireddate");
      const user_departmentName = $(this).data("user_departmentname");
      const user_departmentID = $(this).data("user_departmentid");
      const user_designationID = $(this).data("user_designationid");
      const user_accountContactnumber = $(this).data("user_accountcontactnumber");
      const user_accountStatus = $(this).data("user_accountstatus") == 1 ? true : false;
      const user_accountUsername = $(this).data("user_accountusername");
      const user_accountPassword = $(this).data("user_accountpassword");
      const user_roleID = $(this).data("user_roleid");

      const user_department = {user_departmentName:user_departmentID};
      loadDesignation(user_department, "edit", user_designationID);

      $("#edit-user_accountID").val(user_accountID);
      $("#edit-user_accountFirstname").val(user_accountFirstname);
      $("#edit-user_accountMiddlename").val(user_accountMiddlename);
      $("#edit-user_accountLastname").val(user_accountLastname);
      $("#edit-user_accountHireddate").val(user_accountHireddate);
      $('#edit-user_accountDepartment').val(user_departmentID).trigger('change');

      $('#edit-user_accountDesignation').val(user_designationID);
      $('#edit-user_accountDesignation').trigger('change');

      $("#edit-user_accountContactnumber").val(user_accountContactnumber);
      $("input[id='edit-user_accountStatus']").prop("checked", user_accountStatus);
      $("#edit-user_accountUsername").val(user_accountUsername);
      $("#edit-user_accountPassword").val(user_accountPassword);
      // $("#edit-user_accountRole").val(user_roleID);
      $('#edit-user_accountRole').val(user_roleID).trigger('change');

      $("#edit_account").modal("show");
    })


    $(document).on("click", "#btn-add-save-account", function() {
      const user_accountFirstname = $("#add-user_accountFirstname").val().trim();
      const user_accountMiddlename = $("#add-user_accountMiddlename").val().trim();
      const user_accountLastname = $("#add-user_accountLastname").val().trim();
      const user_accountContactnumber = $("#add-user_accountContactnumber").val().trim();
      const user_accountHireddate = $("#add-user_accountHireddate").val();
      const user_accountDepartment = $("#add-user_accountDepartment").val().trim();
      const user_accountDesignation = $("#add-user_accountDesignation").val().trim();
      const user_accountStatus = $("input[id='add-user_accountStatus']:checked").val() ? 1 : 0;
      const user_accountUsername = $("#add-user_accountUsername").val().trim();
      const user_accountPassword = $("#add-user_accountPassword").val().trim();
      const user_accountRole = $("#add-user_accountRole").val();

      const data = {
        user_accountFirstname,
        user_accountMiddlename,
        user_accountLastname,
        user_accountContactnumber,
        user_accountHireddate,
        user_accountDepartment,
        user_accountDesignation,
        user_accountStatus,
        user_accountUsername,
        user_accountPassword,
        user_accountRole
      };
      saveUserAccount(data, "add");
    });

    $(document).on("change", ".user_accountDepartment", function() {
      const todo = $(this).data("todo");
      const user_departmentName = $(this).val();
      const data = {user_departmentName};
      loadDesignation(data, todo, "");
    })

    $(document).on("click", ".btn-close-add-account, .btn-close-edit-account", function() {
      clearInputs();
    })

    $(document).on("click", "#btn-edit-account-close", function() {
      $("#confirmation-edit-invalid").html("");
      $("#edit_account").modal("show");
      $("#confirmation_edit").modal("hide");
    })

    $(document).on("click", "#btn-add-account-close", function() {
      $("#confirmation-add-invalid").html("");
      $("#add_account").modal("show");
      $("#confirmation_add").modal("hide");
    })

    $(document).on("click", "#btn-edit-account", function() {
      const validate = validateInputs("edit");
      if (validate) {
        $("#edit_account").modal("hide");
        $("#confirmation_edit").modal("show");
      }
    })

    $(document).on("click", "#btn-add-account", function() {
      const validate = validateInputs("add");
      if (validate) {
        $("#add_account").modal("hide");
        $("#confirmation_add").modal("show");
      }
    }) 
 });
</script>