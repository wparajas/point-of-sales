    <style type="text/css">
    .field-icon {
      float: right;
      margin-left: -25px;
        margin-right:10px;
      margin-top: -25px;
      position: relative;
      z-index: 2;
    }
    td { vertical-align: middle }

      a.avatar { cursor: pointer; }
  .custom-file-input{ cursor: pointer; }

    

  @media only screen and (max-width: 756px){
      .content{ zoom:90%; }
  }
  </style>
    <div class="ms-content-wrapper"> 
      <div class="row">
          <nav aria-label="breadcrumb">
            <ul class="breadcrumb pl-0">
              <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Dashboard</a></li>
              <li class="breadcrumb-item"><a href="#"> Employees</a></li>
            </ul>
          </nav>
         <div class="col-auto float-right ml-auto">
               <button class="btn btn-pill btn-primary float-right addmenugroup" data-target="#add_employee" data-toggle="modal" data-target="#modal-3" data-backdrop="static" data-keyboard="false"><i class="material-icons">add</i>Add Empoyee </button> 
          </div>
          <br>
        <div class="col-xl-12 col-md-12">
           <div class="ms-panel">
            <div class="ms-panel-header">
              <h6>List of Employees</h6>
            </div>
            <div class="ms-panel-body">
              <div class="table-responsive">
                <br>
                <table id="tablegroup" class="table custom-table  thead-primary dtBasicExample">
                  <thead>
                    <tr>
                      <th>Employee Number</th>
                      <th>Employee Name</th>
                      <th>Contact Number</th>
                      <th>Hired Date</th>
                      <th>Status</th>
                      <th>Action</th>
                  </tr>
                  </thead>  
                    <tbody>
                       <?php foreach($employees_info as $value){?>
                      <tr>
                        <td><?= str_pad($value['employeeID'], 6, '0', STR_PAD_LEFT)?></td>
                        <td>
                          <div class="dash-card-content">
                            <a id="<?php echo $value['employeeID'] ?>" class="avatar" style="margin: 0 0px 0 0;">
                            <?php 
                            if($value['photo']==""){
                            echo '<img alt="" src="uploads/default_profile.png" ></a> '.' '.$value['lname'].', '.$value['fname'].' '.$value['mname'].' <span style="color:#888;display: block; font-size: 11px;">'.$value['description'].' | ' .$value['designationdescription'].' </span></td>';
                            }else{
                            echo '<img alt="" src="uploads/'.$value['photo'].'" ></a> '.' '.$value['lname'].', '.$value['fname'].' '.$value['mname'].' <span style="color:#888;display: block; font-size: 11px;">'.$value['description'].' | ' .$value['description'].' </span></div></td>';
                            } ?>
                          </div>
                        </td> 
                        <td><?=$value['cnum']?></td>
                        <td><?= date("M d, Y", strtotime($value['hdate'])) ?></td>
                        <td>
                          <div class="action-label">
                           <?php if($value['employeestatus']=="Active"){
                                  echo '<span class="badge badge-pill badge-success custom-status" style="text-align:center"><i class="far fa-dot-circle"></i> Active</span>';
                                }
                                  else{ echo '<span class="badge badge-pill badge-danger custom-status" style="text-align:center"><i class="far fa-dot-circle"></i>Inactive</span>';
                                }
                           ?> 
                           </div>
                   
                        </td>
                        <td>
                           <div class="dropdown float-right">
                            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                              <li class="ms-dropdown-list">
                                <?php 
                                $key = 'confidentialdata'; // ADDING SALT FOR MD5
                                $decrypted_validate_data = $this->encrypt->decode($value['password'], $key); //DECRYPTED PART
                                ?>
                                <a class="media p-2" href="#">
                                  <div class="media-body edit_btn" data-controls-modal="your_div_id" data-backdrop="static" data-keyboard="false" href="#" id="<?php echo $value['employeeID']; ?>" data-toggle="modal" data-target="#edit_employee"  
                                  data-editfname="<?php echo $value['fname']; ?>"
                                  data-editmname="<?php echo $value['mname']; ?>"
                                  data-editlname="<?php echo $value['lname']; ?>"
                                  data-editgender="<?php echo $value['gender']; ?>"
                                  data-editcstatus="<?php echo $value['civilstatus']; ?>"
                                  data-editcnum="<?php echo $value['cnum']; ?>"
                                  data-editdept="<?php echo $value['dept']; ?>"
                                  data-editdsgntion="<?php echo $value['dsgntion']; ?>"
                                  data-editstatus="<?php echo $value['employeestatus']; ?>"
                                  data-edithdate="<?php echo $value['hdate']; ?>"
                                  data-edituname="<?php echo $value['username']; ?>"
                                  data-editpass="<?php echo $decrypted_validate_data; ?>">
                                  <i class="fas fa-pencil-alt text-secondary"><span>Edit</span></i>
                                  </div>
                                </a>
                                <a class="media p-2" href="#">
                                  <div class="media-body changestatus" data-controls-modal="your_div_id" data-backdrop="static" data-keyboard="false" href="#" id="<?php echo $value['employeeID']?>" data-toggle="modal" data-target="#status_department" data-id="<?php echo $value['employeeID']?>" data-status="<?php echo ($value['employeestatus']=='Active')? 'Inactive' : 'Active' ?>"><i class="fas fa-paper-plane text-secondary text-success"><span>Change Status</span></i>
                                  </div>
                                </a>
                              </li>
                            </ul>
                          </div>

                        </td>
                      </tr> 
                    <?php }?>
                       
                    </tbody>
                  
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>  
    </div>
   <!-- add new employee  --> 
    <div id="add_employee" class="modal custom-modal fade" role="dialog">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h3 class="modal-title has-icon ms-icon-round "><i class="flaticon-share bg-primary text-white"></i> Add Employee</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
            <div class="modal-body">
              <div class="col-lg-12">
                <ul class="nav nav-tabs tabs-bordered" role="tablist">
                    <li class="active"><a href="#infor"  role="tab" data-toggle="tab">Information</a>
                    </li>
                    <li><a href="#acc" role="tab" data-toggle="tab">Account</a>
                    </li>
                </ul>
              <form method="post">
                <div class="tab-content">
                  <div class="tab-pane active" id="infor">
                      <br />
                      <div class="form-group">
                          <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="fname">First Name<code>*</code> </label>
                                <div class="input-group">
                               
                                    <input type="text" class="form-control fname alphanumericwithspacedash" id="fname" placeholder="" required="" autocomplete="off">
                                    <div class="invalid-feedback" id="add-fname"></div>
                                </div>
                              </div>
                             <div class="col-md-6 mb-3">
                                <label for="mname">Middle Name<code></code> </label>
                                <div class="input-group">
                                    <input type="text" class="form-control letterswithspace" id="mname" placeholder="" autocomplete="off" >
                                    <div class="invalid-feedback" id="add-mname"></div>
                                </div>
                              </div>
                              <div class="col-md-6 mb-3">
                                <label for="lname">Last Name<code>*</code> </label>
                                <div class="input-group">
                                    <input type="text" class="form-control letterswithspace" id="lname" placeholder="" required="" autocomplete="off">
                                    <div class="invalid-feedback" id="add-lname"></div>
                                </div>
                              </div>
                              <div class="col-md-6 mb-3">
                                <label>Gender<code>*</code></label>
                                <div class="input-group">
                                  <select class="form-control" id="gender" required>
                                      <option value="">No Selected</option>
                                      <option value="1">Male</option>
                                      <option value="2">Female</option>                                               
                                  </select>
                                  <div class="invalid-feedback" id="add-gender"></div>
                             </div>
                             </div> 
                             <div class="col-md-6 mb-3">
                                <label>Civil Status<code>*</code></label>
                                <div class="input-group">
                                    <select class="form-control" id="cstatus" required>
                                        <option value="" >No Selected</option>
                                        <option value="1">Married</option>
                                        <option value="2">Widowed</option>
                                        <option value="3">Separated</option>
                                        <option value="4">Single</option>
                                    </select>
                                    <div class="invalid-feedback" id="add-cstatus"></div>
                             </div>
                             </div> 
                              <div class="col-md-6 mb-3">
                                  <label for="cnum">Contact Number<code>*</code></label>
                                  <div class="input-group">
                                      <input type="text" class="form-control phone" name="cnum" id="cnum"  placeholder="(+63) 000-000-0000" required="" autocomplete="off">
                                      <div class="invalid-feedback" id="add-cnum"></div>
                                  </div>
                              </div>
                              <div class="col-md-6 mb-3">
                                <label>Department<code>*</code></label>
                                <div class="input-group">
                                    <select class="form-control" id="dept" required>
                                        <option value="">No Selected</option>
                                      <?php
                                       foreach($department_info as $value){
                                       
                                        ?>
                                        <?php echo "<option value=".$value['departmentID'].">".$value['description']."</option>"?>
                                      <?php  } ?>
                                    </select>
                                    <div class="invalid-feedback" id="add-dept"></div>
                             </div>
                             </div> 
                             <div class="col-md-6 mb-3">
                                <label>Designation<code>*</code></label>
                                <div class="input-group">
                                  <input type="hidden"  id="dsgntionhidden" class="form-control date-validate" name="dsgntionhidden" autocomplete="off" required >
                                    <select class="form-control" id="dsgntion" required>
                                       <option value="" >No Selected</option>
                                    </select>
                                    <div class="invalid-feedback" id="add-dsgntion"></div>
                             </div>
                             </div> 
                             <div class="col-md-6 mb-3">
                                <label>Status<code>*</code></label>
                                <div class="input-group">
                                    <select class="form-control" id="status" required>
                                        <option value="">No Selected</option>
                                        <option value="Active">Active</option>
                                        <option value="Deactive">Deactive</option>
                                        <option value="Suspended">Suspended</option>
                                        <option value="Terminated">Terminated</option>
                                    </select>
                                    <div class="invalid-feedback" id="add-status"></div>
                             </div>
                             </div> 
                             <div class="col-md-6 mb-3">
                                  <label for="validationCustom06">Hired Date<code>*</code> </label>
                                  <div class="input-group">
                                      <input type="date"  id="hdate" class="form-control date-validate" autocomplete="off" required >
                                      <div class="invalid-feedback" id="add-hdate"></div>
                                  </div>
                              </div> 
                          </div>
                      </div>
                  </div>
                  <div class="tab-pane" id="acc">
                      <div class="col-md-12 mt-5 mb-3">
                          <label>Username<code>*</code></label>
                          <div class="input-group">
                              <input type="text" class="form-control alphanumericwithdashperiodunderscoreatsign" id="uname" placeholder="" required="" autocomplete="off">
                              <div class="invalid-feedback" id="add-uname"></div>
                          </div>
                      </div>
                      <div class="col-md-12 mb-3">
                          <label>Password<code>*</code></label>
                          <div class="form-group">
                              <input type="password" class="form-control alphanumericforpassword pass" id="password-field1" placeholder="" required="">
                              <span toggle="#password-field1" class="fa fa-fw fa-eye field-icon toggle-password1"></span> 
                              <div class="invalid-feedback" id="add-pass"></div>
                          </div>
                      </div>
                  </div>
              </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-pill btn-block btn-primary btn-primary float-right"id="save"name="save"><i class="flaticon-tick-inside-circle"></i> Submit</button>
              </div>
              </form>
          </div>
        </div>    
    </div>
  </div>
  <!-- /add new employee -->
  <!-- Edit Employee Modal -->
   <div id="edit_employee" class="modal custom-modal fade" role="dialog">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h3 class="modal-title has-icon ms-icon-round "><i class="flaticon-share bg-primary text-white"></i> Edit Employee</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
            <div class="modal-body">
              <div class="col-lg-12">
                <ul class="nav nav-tabs tabs-bordered" role="tablist">
                    <li class="active"><a href="#edit_infor"  role="tab" data-toggle="tab">Information</a>
                    </li>
                    <li><a href="#edit_acc" role="tab" data-toggle="tab">Account</a>
                    </li>
                </ul>
              <form method="post">
                <div class="tab-content">
                  <div class="tab-pane active" id="edit_infor">
                      <br />
                      <div class="form-group">
                          <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="fname">First Name<code>*</code> </label>
                                <div class="input-group">
                                    <input type="text" class="form-control fname alphanumericwithspacedash" id="edit_fname" placeholder="" required="" autocomplete="off">
                                    <div class="invalid-feedback" id="edit-fname"></div>
                                </div>
                              </div>
                             <div class="col-md-6 mb-3">
                                <label for="mname">Middle Name<code></code> </label>
                                <div class="input-group">
                                    <input type="text" class="form-control letterswithspace" id="edit_mname" placeholder="" autocomplete="off" >
                                    <div class="invalid-feedback" id="edit-mname"></div>
                                </div>
                              </div>
                              <div class="col-md-6 mb-3">
                                <label for="lname">Last Name<code>*</code> </label>
                                <div class="input-group">
                                    <input type="text" class="form-control letterswithspace" id="edit_lname" placeholder="" required="" autocomplete="off">
                                    <div class="invalid-feedback" id="edit-lname"></div>
                                </div>
                              </div>
                              <div class="col-md-6 mb-3">
                                <label>Gender<code>*</code></label>
                                <div class="input-group">
                                  <select class="form-control" id="edit_gender" required>
                                      <option value="">No Selected</option>
                                      <option value="1">Male</option>
                                      <option value="2">Female</option>                                               
                                  </select>
                                  <div class="invalid-feedback" id="edit-gender"></div>
                             </div>
                             </div> 
                             <div class="col-md-6 mb-3">
                                <label>Civil Status<code>*</code></label>
                                <div class="input-group">
                                    <select class="form-control" id="edit_cstatus" required>
                                        <option value="" >No Selected</option>
                                        <option value="1">Married</option>
                                        <option value="2">Widowed</option>
                                        <option value="3">Separated</option>
                                        <option value="4">Single</option>
                                    </select>
                                    <div class="invalid-feedback" id="edit-cstatus"></div>
                             </div>
                             </div> 
                              <div class="col-md-6 mb-3">
                                  <label for="cnum">Contact Number<code>*</code></label>
                                  <div class="input-group">
                                      <input type="text" class="form-control phone" name="cnum" id="edit_cnum"  placeholder="(+63) 000-000-0000" required="" autocomplete="off">
                                      <div class="invalid-feedback" id="edit-cnum"></div>
                                  </div>
                              </div>
                              <div class="col-md-6 mb-3">
                                <label>Department<code>*</code></label>
                                <div class="input-group">
                                    <select class="form-control" id="edit_dept" required>
                                        <option value="">No Selected</option>
                                      <?php
                                       foreach($department_info as $value){
                                       
                                        ?>
                                        <?php echo "<option value=".$value['departmentID'].">".$value['description']."</option>"?>
                                      <?php  } ?>
                                    </select>
                                    <div class="invalid-feedback" id="edit-dept"></div>
                             </div>
                             </div> 
                             <div class="col-md-6 mb-3">
                                <label>Designation<code>*</code></label>
                                <div class="input-group">
                                  <input type="hidden"  id="dsgntionhidden" class="form-control date-validate" name="dsgntionhidden" autocomplete="off" required >
                                    <select class="form-control" id="edit_dsgntion" required>
                                       <option value="" >No Selected</option>
                                    </select>
                                    <div class="invalid-feedback" id="edit-dsgntion"></div>
                             </div>
                             </div> 
                             <div class="col-md-6 mb-3">
                                <label>Status<code>*</code></label>
                                <div class="input-group">
                                    <select class="form-control" id="edit_status" required>
                                        <option value="">No Selected</option>
                                        <option value="Active">Active</option>
                                        <option value="Deactive">Deactive</option>
                                        <option value="Suspended">Suspended</option>
                                        <option value="Terminated">Terminated</option>
                                    </select>
                                    <div class="invalid-feedback" id="edit-status"></div>
                             </div>
                             </div> 
                             <div class="col-md-6 mb-3">
                                  <label for="validationCustom06">Hired Date<code>*</code> </label>
                                  <div class="input-group">
                                      <input type="date"  id="edit_hdate" class="form-control date-validate" autocomplete="off" required >
                                      <div class="invalid-feedback" id="edit-hdate"></div>
                                  </div>
                              </div> 
                          </div>
                      </div>
                  </div>
                  <div class="tab-pane" id="edit_acc">
                      <div class="col-md-12 mt-5 mb-3">
                          <label>Username<code>*</code></label>
                          <div class="input-group">
                              <input type="text" class="form-control alphanumericwithdashperiodunderscoreatsign" id="edit_uname" placeholder="" required="" autocomplete="off">
                              <div class="invalid-feedback" id="edit-uname"></div>
                          </div>
                      </div>
                      <div class="col-md-12 mb-3">
                          <label>Password<code>*</code></label>
                          <div class="form-group">
                              <input type="password" class="form-control alphanumericforpassword edit_pass" id="password-field2" placeholder="" required="">
                              <span toggle="#password-field2" class="fa fa-fw fa-eye field-icon toggle-password1"></span> 
                              <div class="invalid-feedback" id="edit-pass"></div>
                          </div>
                      </div>
                  </div>
              </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-pill btn-block btn-primary btn-primary float-right"id="edit_update"name="edit_update"><i class="flaticon-tick-inside-circle"></i> Submit</button>
              </div>
              </form>
          </div>
        </div>    
    </div>
  </div>
  <!-- Edit Employee Modal -->
  <!-- Confirmation edit Employee Modal -->
  <div id="confirmation_edit" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="form-header">
              <h3 style="text-align: center">Update</h3>
               <img class="isometric confirmationisometric" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/isometric/undraw_faq_rjoy.svg">
              <p style="text-align: center">Are you sure you want to update this record?</p>
              <div class="invalid-feedback" id="status-invalid"></div>
          </div>
        
            <div class="row">
              <div class="col-6" style="text-align: center">
                <a href="#" id="edit_confirmBtn" class="btn btn-pill btn-block btn-primary continue-btn edit"><i class="flaticon-diamond"></i> Update</a>
              </div>
              <div class="col-6" style="text-align: center">
                <a href="#" data-dismiss="modal" class="btn btn-pill btn-block btn-primary cancel-btn" id="cncl-edit" style="text-align: center"><i class="flaticon-information"></i> Cancel</a>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Confirmation edit Employee Modal -->

  <!-- Status Modal -->
  <div class="modal custom-modal fade" id="status_department" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <div class="form-header">
            <h3 style="text-align: center">Change Status</h3>
             <img class="isometric confirmationisometric" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/isometric/changestatus.svg">
            <p id="statusmessage" style="text-align: center"></p>
            <div class="invalid-feedback" id="status-invalid"></div>
          </div>
          <div class="modal-btn delete-action">
            <div class="row">
              <div class="col-6">
                <a href="#" class="btn btn-pill btn-block btn-primary continue-btn change">Change</a>
              </div>
              <div class="col-6">
                <a href="#" data-dismiss="modal" class="btn btn-pill btn-block btn-primary cancel-btn">Cancel</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Status Modal -->
  <!--  Confirmation add Employee Modal -->
    <div id="confirmation_add" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="form-header">
              <h3 style="text-align: center">Add</h3>
               <img class="isometric confirmationisometric" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/isometric/undraw_faq_rjoy.svg">
              <p style="text-align: center">Are you sure you want to add this record?</p>
              <div class="invalid-feedback" id="status-invalid"></div>
          </div>
        
            <div class="row">
              <div class="col-6" style="text-align: center">
                <a href="#" id="add_confirmBtn" class="btn btn-pill btn-block btn-primary continue-btn add"><i class="flaticon-diamond"></i> Add</a>
              </div>
              <div class="col-6" style="text-align: center">
                <a href="#" data-dismiss="modal" class="btn btn-pill btn-block btn-primary cancel-btn" id="cncl-add" style="text-align: center"><i class="flaticon-information"></i> Cancel</a>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Confirmation add Employee Modal -->

  <!-- upload picture  -->
  <div class="modal custom-modal fade" id="uploadpicture" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-xs" role="document">
      <form id="commentForm" method="post" enctype="multipart/form-data" action="<?php echo site_url('Employee/do_upload'); ?>">
      <div class="modal-content modal-upload">
        <div class="modal-header">
          <h5 class="modal-title" id="uploadpictureModalLabel">Select photo to upload</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">         
          <div class="col form-group">
            <label>Filename:</label>
           <div class="custom-file">
        <input type="file" class="custom-file-input" id="photo" name="photo" accept="image/png,image/jpeg" required="">
         <div class="invalid-feedback" id="add-photo"></div>
        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
        <div class="invalid-feedback">Example invalid custom file feedback</div>
        &nbsp;
         <input type="hidden" name="empID" id="empID">  
               <button type="submit" class="btn btn-primary btn-rounded submitpicture" id="submitpicture" name="submitpicture" style="width:100%">Upload Photo</button>
      </div>
          </div>
        </div>
       </form>
    </div>
  </div>
  <!-- end upload picture  -->
  <span>
    <?php if($this->session->flashdata('photoupload')=="upload") echo '<script type="text/javascript"> showPhotoToast() </script>';?>
  </span>
  <span>
    <?php if($this->session->flashdata('img')=="error") echo '<script type="text/javascript"> showUploadPhotoError() </script>';?>
  </span>

  <script src="<?php echo base_url(); ?>pages\assets\js\jquery-3.3.1.min.js"></script>
  <?php 
  if($this->session->flashdata('success')!=""){
    echo '<script type="text/javascript"> showSuccessToast("'.$this->session->flashdata("success").'")</script>';
  }

?>

  <!-- add new employee script -->
  <script type="text/javascript">
    $(".toggle-password1").click(function() {

      $(this).toggleClass("fa-eye fa-eye-slash");
      var input = $($(this).attr("toggle"));
      if (input.attr("type") == "password") {
        input.attr("type", "text");
      } else {
        input.attr("type", "password");
      }
    });
    $(document).ready(function() {

   // upload picture //
    $(".avatar").on('click',function() {
    $('#empID').val($(this).attr("id"));
    $('#uploadpicture').modal('show');
     });

    $("#commentForm").submit(function( event ) {
          $('.submitpicture').attr("disabled","disabled");
          $('.submitpicture').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Uploading...');
       });

        $('#photo').change(function(){
          var name = document.getElementById('photo'); 
          $(".custom-file-label").text(name.files.item(0).name);
        });

      // start of change status
      $('.changestatus').unbind('click').bind('click', function(){
      $('.change').attr('id', $(this).data('id'));
      $('.change').attr('status', $(this).data('status'));
      var displayText = "";

      if($(this).data('status')=="Active"){
        displayText = "<font color='green'>activate</font>";
      }else if($(this).data('status')=="Inactive"){
        displayText = "<font color='#e04d45'>inactive</font>";
      }

      document.getElementById("statusmessage").innerHTML = "Are you sure you want to " + displayText + " this record?";
    });

        /* CHANGE STATUS */
    $('.change').unbind('click').bind('click', function(){
          var id = $(this).attr('id');
          var status = $(this).attr('status');
                  $.ajax({
                        url : "<?php echo site_url('employee/changestatus');?>",
                        method : "POST",
                        data : {id:id,
                                status:status
                                },
                        async : true,
                        dataType : 'json',
                        success: function(data){
                          var result = data.split('|');
                      if(result[0]=="false"){
                        $("#status-invalid").css("display","block");
                    document.getElementById("status-invalid").innerHTML = result[1];
                      }else{
                      window.location.replace('<?php echo base_url(); ?>Employee');
                      }
                        },
                        error: function(request, textStatus, error) {

                      }
                    });
                    return false;
              });            
  // end of change status

    $('#tablegroup').DataTable({
    "paging": true
     // false to disable pagination (or any other option)
  });

    // masking for contact number
    $('#cnum').mask('(+63) 000-000-0000');
    
    // phone number validate length of digits
    $("#cnum").keypress(function(e){
        var contactno = $('#cnum').val();
        var length = contactno.length;
        var keyCode = e.which;
         if(length <17){
            document.getElementById("add-cnum").innerHTML = "Please enter a 10 digit contact number.";
            $('#cnum').addClass('is-invalid');
            $("#cnum").focus(); 
         }
         else{
            document.getElementById("add-cnum").innerHTML = "";
            $('#cnum').removeClass('is-invalid').addClass('is-valid');        
         }
      });
     // birthday validation
    $('#hdate').on('input', function() {
        var input=$(this);
        var is_bdate=input.val();
        var myDate = new Date(is_bdate);
        var today = new Date();
            if(myDate >today)
                {
                    document.getElementById("add-hdate").innerHTML = "You cannot enter a date in the future!";
                    input.removeClass("is-valid").addClass("is-invalid");
                    return false;
                }
            else{
                document.getElementById("add-hdate").innerHTML = "";
                input.removeClass("is-invalid").addClass("is-valid");
                return true;               
            }
        });

   /**/
    $('#dept').on('change', function() {
        var dept_id = $("#dept").val();  
    $.ajax({
      url : "<?php echo site_url('Employee/get_designation');?>",
      method : "POST",
      data : {dept_id:           dept_id},
      async : true,
      dataType : 'json',
      success: function(data){
       
        var html = '';
        var i;
        html += '<option value="">No Selected</option>';
        for(i=0; i<data.length; i++){
        if($("#dsgntionhidden").val()==data[i].designationID){
        html += '<option value='+data[i].designationID+' selected>'+data[i].designationdescription+'</option>';
        }else{
        html += '<option value='+data[i].designationID+'>'+data[i].designationdescription+'</option>';
        }
        }
        $('#dsgntion').html(html);
        }
      }); 
     
    });  

      /* CLEAR MODAL */
    $('#add_employee').on('shown.bs.modal', function(){
        $('.fname').focus();
        document.getElementById('fname').focus();
       });

    $('#add_employee').on('hidden.bs.modal', function(){

          $(this).find('form')[0].reset();
          document.getElementById("add-fname").innerHTML = "";
          $('#fname').removeClass('is-invalid');
          $('#fname').removeClass('is-valid');
          $(this).find('form')[0].reset();
          document.getElementById("add-mname").innerHTML = "";
          $('#mname').removeClass('is-invalid');
          $('#mname').removeClass('is-valid');
          $(this).find('form')[0].reset();
          document.getElementById("add-lname").innerHTML = "";
          $('#lname').removeClass('is-invalid');
          $('#lname').removeClass('is-valid');
          $(this).find('form')[0].reset();
          document.getElementById("add-hdate").innerHTML = "";
          $('#hdate').removeClass('is-invalid');
          $('#hdate').removeClass('is-valid');
          $(this).find('form')[0].reset();
           document.getElementById("add-gender").innerHTML = "";
          $('#gender').removeClass('is-invalid');
          $('#gender').removeClass('is-valid');
          $(this).find('form')[0].reset();
          document.getElementById("add-cnum").innerHTML = "";
          $('#cnum').removeClass('is-invalid');
          $('#cnum').removeClass('is-valid');
          $(this).find('form')[0].reset();
          document.getElementById("add-cstatus").innerHTML = "";
          $('#cstatus').removeClass('is-invalid');
          $('#cstatus').removeClass('is-valid');
          $(this).find('form')[0].reset();
          document.getElementById("add-dept").innerHTML = "";
          $('#dept').removeClass('is-invalid');
          $('#dept').removeClass('is-valid');
          $(this).find('form')[0].reset();
          document.getElementById("add-dsgntion").innerHTML = "";
          $('#dsgntion').removeClass('is-invalid');
          $('#dsgntion').removeClass('is-valid');
          $(this).find('form')[0].reset();
          document.getElementById("add-status").innerHTML = "";
          $('#status').removeClass('is-invalid');
          $('#status').removeClass('is-valid');
          $(this).find('form')[0].reset();
          document.getElementById("add-uname").innerHTML = "";
          $('#uname').removeClass('is-invalid');
          $('#uname').removeClass('is-valid');
          $(this).find('form')[0].reset();
          document.getElementById("add-pass").innerHTML = "";
          $('.pass').removeClass('is-invalid');
          $('.pass').removeClass('is-valid');
          $(this).find('form')[0].reset();

          $('[href="#infor"]').tab('show');
      });
    }); 
</script>

<!-- Avoid using cut copy and paste for add field -->
<script type="text/javascript">
     $(document).ready(function(){
   $('#fname').on("cut copy paste",function(e) {
      e.preventDefault();
   });
     $('#mname').on("cut copy paste",function(e) {
      e.preventDefault();
   });
       $('#lname').on("cut copy paste",function(e) {
      e.preventDefault();
   });
    $('#uname').on("cut copy paste",function(e) {
      e.preventDefault();
   });
      $('.pass').on("cut copy paste",function(e) {
      e.preventDefault();
   });
});
</script>

<script>
   // script of confirmation add
  $(document).ready(function() {
    $(document).on("click","#save",function(){

      $("#add_employee").hide();
      $("#confirmation_add").modal({backdrop:'static', keyboard: false},'show');
    });
    $(document).on("click","#add_cancelBtn",function(){
      $("#confirmation_add").modal('hide');
      $("#add_employee").show();
    });
  });

  </script>

<!--Start Add Script Field -->
<script>
$(document).ready(function() {
  //save new user in modal
$('#save').unbind('click').bind('click', function(){
    var firstname = $('#fname').val().trim();
    var middlename = $('#mname').val().trim();
    var lastname = $('#lname').val().trim();
    var gender = $('#gender').val();
    var hireddate = $('#hdate').val().trim();
    var contactno = $('#cnum').val().trim();
    var civilstatus = $('#cstatus').val();
    var department = $('#dept').val();
    var designation = $('#dsgntion').val();
    var status = $('#status').val();
    var username = $('#uname').val().trim();
    var password = $('.pass').val().trim();
    var myDate = new Date(hireddate);
    var today = new Date();
   
   
    if(firstname==""){ //firstname
        document.getElementById("add-fname").innerHTML = "Please enter valid data..";
        $('#fname').addClass('is-invalid');
        $('[href="#infor"]').tab('show');
        $("#fname").focus(); 
        event.preventDefault();
    }else{
        document.getElementById("add-fname").innerHTML = ""; 
        $('#fname').removeClass('is-invalid');
        $('#fname').addClass('is-valid');
    }
    if(lastname==""){ //lastname
        document.getElementById("add-lname").innerHTML = "Please enter valid data.";
        $('#lname').addClass('is-invalid');
        $('[href="#infor"]').tab('show');
        $("#lname").focus(); 
        event.preventDefault();
    }else{
        document.getElementById("add-lname").innerHTML = "";
        $('#lname').removeClass('is-invalid');
        $('#lname').addClass('is-valid');
    }
    if(gender==""){ //lastname
        document.getElementById("add-gender").innerHTML = "Please enter valid data.";
        $('#gender').addClass('is-invalid');
        $('[href="#infor"]').tab('show');
        $("#gender").focus(); 
        event.preventDefault();
    }else{
        document.getElementById("add-gender").innerHTML = "";
        $('#gender').removeClass('is-invalid');
        $('#gender').addClass('is-valid');
    }
    if(hireddate==""){ //hireddate
        document.getElementById("add-hdate").innerHTML = "Please enter valid data.";
        $('#hdate').addClass('is-invalid');
        $('[href="#infor"]').tab('show');
        $("#hdate").focus(); 
        event.preventDefault();
    }else{

    if(hireddate !=""){
       $('#hdate').on('input', function() {
      var input=$(this);
      var is_hdate=input.val();
      var myDate = new Date(is_hdate);
       var today = new Date();
      if(myDate >today)
          {
              document.getElementById("add-hdate").innerHTML = "You cannot enter a date in the future!";
              input.removeClass("is-valid").addClass("is-invalid");
              return false;
          }
      else{
          document.getElementById("add-hdate").innerHTML = "";
          input.removeClass("is-invalid").addClass("is-valid");
          return true;
      }
        });
    }
    else{
        document.getElementById("add-hdate").innerHTML = "";
        $('#hdate').removeClass('is-invalid');
        $('#hdate').addClass('is-valid');
        }
    }
    if(contactno==""){ //contact number
        document.getElementById("add-cnum").innerHTML = "Please enter valid data.";
        $('#cnum').addClass('is-invalid');
        $('[href="#infor"]').tab('show');
        $("#cnum").focus(); 
        event.preventDefault();
    }
     else if(contactno.length <17){
            document.getElementById("add-cnum").innerHTML = "Please enter a 10 digit contact number.";
            $('#cnum').addClass('is-invalid');
            $('[href="#infor"]').tab('show');
            $("#cnum").focus(); 
             event.preventDefault();       
         }
    else{
        document.getElementById("add-cnum").innerHTML = "";
        $('#cNum').removeClass('is-invalid');
        $('#cNum').addClass('is-valid');
    }
    if(civilstatus==""){ //unitnumber
        document.getElementById("add-cstatus").innerHTML = "Please enter valid data.";
        $('#cstatus').addClass('is-invalid');
        $('[href="#infor"]').tab('show');
        $("#cstatus").focus(); 
        event.preventDefault();
    }else{
        document.getElementById("add-cstatus").innerHTML = "";
        $('#cstatus').removeClass('is-invalid');
        $('#cstatus').addClass('is-valid');
    }
    if(department==""){ //buildingst
        document.getElementById("add-dept").innerHTML = "Please enter valid data.";
        $('#dept').addClass('is-invalid');
        $('[href="#infor"]').tab('show');
        $("#dept").focus(); 
        event.preventDefault();
    }else{
        document.getElementById("add-dept").innerHTML = "";
        $('#dept').removeClass('is-invalid');
        $('#dept').addClass('is-valid');
    }
    if(designation==""){ //barangay
        document.getElementById("add-dsgntion").innerHTML = "Please enter valid data.";
        $('#dsgntion').addClass('is-invalid');
        $('[href="#infor"]').tab('show');
        $("#dsgntion").focus(); 
        event.preventDefault();
    }else{
        document.getElementById("add-dsgntion").innerHTML = "";
        $('#dsgntion').removeClass('is-invalid');
        $('#dsgntion').addClass('is-valid');
    }
    
    if(status==""){ //city
        document.getElementById("add-status").innerHTML = "Please enter valid data.";
        $('#status').addClass('is-invalid');
        $('[href="#infor"]').tab('show');
        $("#status").focus(); 
        event.preventDefault();
    }else{
        document.getElementById("add-status").innerHTML = "";
        $('#status').removeClass('is-invalid');
        $('#status').addClass('is-valid');
    }   
    if(username==""){ //username
        document.getElementById("add-uname").innerHTML = "Please enter valid data.";
        $('#uname').addClass('is-invalid');
        $('[href="#acc"]').tab('show');
        $("#uname").focus(); 
        event.preventDefault();
    }else{
        document.getElementById("add-uname").innerHTML = "";
        $('#uname').removeClass('is-invalid');
        $('#uname').addClass('is-valid');
    }  
    if(password==""){ //password
        document.getElementById("add-pass").innerHTML = "Please enter valid data.";
        $('.pass').addClass('is-invalid');
        $('[href="#acc"]').tab('show');
        $(".pass").focus(); 
        event.preventDefault();
    }else{
        document.getElementById("add-pass").innerHTML = "";
        $('.pass').removeClass('is-invalid');
        $('.pass').addClass('is-valid');
    } 

 if(firstname=="" ||  lastname=="" || gender == "" || hireddate=="" || myDate >today || (contactno =="" || contactno.length <17) || civilstatus =="" ||department =="" || designation =="" || status ==""){
             $('[href="#infor"]').tab('show');
              return false;
     }  

    if(firstname=="" ||  lastname=="" || gender == "" || hireddate=="" || myDate >today || (contactno =="" || contactno.length <17) || civilstatus =="" ||department =="" || designation =="" || status =="" || username == "" || password=="") return false;

      $("#add_employee").hide();
      $("#confirmation_add").modal({backdrop:'static', keyboard: false},'show');
        event.preventDefault(); 
        return false;
});
    $("#cncl-add").unbind('click').bind('click', function(){
      $('#confirmation_add').modal('hide');
      $('#add_employee').show();
    });


$('#add_confirmBtn').unbind('click').bind('click', function()
{
    var fname = $('#fname').val().trim();
    var mname = $('#mname').val().trim();
    var lname = $('#lname').val().trim();
    var gender = $('#gender').val();
    var hdate = $('#hdate').val().trim();
    var cnum = $('#cnum').val().trim();
    var civilstatus = $('#cstatus').val();
    var dept = $('#dept').val();
    var dsgntion = $('#dsgntion').val();
    var status = $('#status').val();
    var uname = $('#uname').val().trim();
    var pass = $('.pass').val().trim();
  
  $.ajax({
          url : "<?php echo site_url('Employee/save');?>",
          method : "POST",
          data : {fname: fname,
              mname: mname,
              lname: lname,
              gender: gender,
              hdate: hdate,
              cnum: cnum,
              civilstatus: civilstatus,
              dept: dept,
              dsgntion: dsgntion,
              status: status,
              uname: uname,
              pass: pass},
          async : true,
          dataType : 'json',
        success: function(data){
          var result = data.split('|');
          if(result[0]=="false")
            {
             document.getElementById("add-fname").innerHTML = result[1];
             document.getElementById("add-lname").innerHTML = result[1];  
             $('#fname').addClass('is-invalid');
             $('#lname').addClass('is-invalid');
             $('#confirmation_add').modal('hide');
             $('#add_usermasterfile').show();
             $('[href="#infor"]').tab('show');
             $("#fname").focus(); 
            }

            else if(result[0]=='username_false'){
            document.getElementById("add-uname").innerHTML = result[1];
             $('#uname').addClass('is-invalid');
             $('#confirmation_add').modal('hide');
             $('#add_usermasterfile').show();
            $('[href="#acc"]').tab('show');
             $("#uname").focus(); 
            }
             else{
                window.location.replace('<?php echo base_url(); ?>Employee');
            }
        },
        error: function(request, textStatus, error) {

        }
        });
       return false;    
});
});
</script>
<!-- /add new employee script -->

<!-- edit employee script -->
  <script type="text/javascript">
    $(".toggle-password2").click(function() {

      $(this).toggleClass("fa-eye fa-eye-slash");
      var input = $($(this).attr("toggle"));
      if (input.attr("type") == "password") {
        input.attr("type", "text");
      } else {
        input.attr("type", "password");
      }
    });
    $(document).ready(function() {

    // masking for contact number
    $('#edit_cnum').mask('(+63) 000-000-0000');
    
    // phone number validate length of digits
    $("#edit_cnum").keypress(function(e){
        var contactno = $('#cnum').val();
        var length = contactno.length;
        var keyCode = e.which;
         if(length <17){
            document.getElementById("edit-cnum").innerHTML = "Please enter a 10 digit contact number.";
            $('#edit_cnum').addClass('is-invalid');
            $("#edit_cnum").focus(); 
         }
         else{
            document.getElementById("edit-cnum").innerHTML = "";
            $('#edit_cnum').removeClass('is-invalid').addClass('is-valid');        
         }
      });
     // birthday validation
    $('#edit_hdate').on('input', function() {
        var input=$(this);
        var is_bdate=input.val();
        var myDate = new Date(is_bdate);
        var today = new Date();
            if(myDate >today)
                {
                    document.getElementById("edit-hdate").innerHTML = "You cannot enter a date in the future!";
                    input.removeClass("is-valid").addClass("is-invalid");
                    return false;
                }
            else{
                document.getElementById("edit-hdate").innerHTML = "";
                input.removeClass("is-invalid").addClass("is-valid");
                return true;               
            }
        });

   // start of depart select change
    $('#edit_dept').on('change', function() {
        var dept_id = $("#edit_dept").val();
        
    $.ajax({
      url : "<?php echo site_url('Employee/get_designation');?>",
      method : "POST",
      data : {dept_id:           dept_id},
      async : true,
      dataType : 'json',
      success: function(data){
       
        var html = '';
        var i;
        html += '<option value="">No Selected</option>';
        for(i=0; i<data.length; i++){
        if($("#edit_dsgntionhidden").val()==data[i].designationID){
        html += '<option value='+data[i].designationID+' selected>'+data[i].designationdescription+'</option>';
        }else{
        html += '<option value='+data[i].designationID+'>'+data[i].designationdescription+'</option>';
        }
        }
        $('#edit_dsgntion').html(html);
        }
      }); 
     
    });  
    // end of department select change

    //start department onload modal
    
    //end of department onload modal

      /* CLEAR MODAL */
    $('#edit_employee').on('shown.bs.modal', function(){
        $('.edit_fname').focus();
        document.getElementById('edit_fname').focus();
       });

    $('#edit_employee').on('hidden.bs.modal', function(){

          $(this).find('form')[0].reset();
          document.getElementById("edit-fname").innerHTML = "";
          $('#edit_fname').removeClass('is-invalid');
          $('#edit_fname').removeClass('is-valid');
          $(this).find('form')[0].reset();
          document.getElementById("edit-mname").innerHTML = "";
          $('#edit_mname').removeClass('is-invalid');
          $('#edit_mname').removeClass('is-valid');
          $(this).find('form')[0].reset();
          document.getElementById("edit-lname").innerHTML = "";
          $('#edit_lname').removeClass('is-invalid');
          $('#edit_lname').removeClass('is-valid');
          $(this).find('form')[0].reset();
          document.getElementById("edit-hdate").innerHTML = "";
          $('#edit_hdate').removeClass('is-invalid');
          $('#edit_hdate').removeClass('is-valid');
          $(this).find('form')[0].reset();
           document.getElementById("edit-gender").innerHTML = "";
          $('#edit_gender').removeClass('is-invalid');
          $('#edit_gender').removeClass('is-valid');
          $(this).find('form')[0].reset();
          document.getElementById("edit-cnum").innerHTML = "";
          $('#edit_cnum').removeClass('is-invalid');
          $('#edit_cnum').removeClass('is-valid');
          $(this).find('form')[0].reset();
          document.getElementById("edit-cstatus").innerHTML = "";
          $('#edit_cstatus').removeClass('is-invalid');
          $('#edit_cstatus').removeClass('is-valid');
          $(this).find('form')[0].reset();
          document.getElementById("edit-dept").innerHTML = "";
          $('#edit_dept').removeClass('is-invalid');
          $('#edit_dept').removeClass('is-valid');
          $(this).find('form')[0].reset();
          document.getElementById("edit-dsgntion").innerHTML = "";
          $('#edit_dsgntion').removeClass('is-invalid');
          $('#edit_dsgntion').removeClass('is-valid');
          $(this).find('form')[0].reset();
          document.getElementById("edit-status").innerHTML = "";
          $('#edit_status').removeClass('is-invalid');
          $('#edit_status').removeClass('is-valid');
          $(this).find('form')[0].reset();
          document.getElementById("edit-uname").innerHTML = "";
          $('#edit_uname').removeClass('is-invalid');
          $('#edit_uname').removeClass('is-valid');
          $(this).find('form')[0].reset();
          document.getElementById("edit-pass").innerHTML = "";
          $('.edit_pass').removeClass('is-invalid');
          $('.edit_pass').removeClass('is-valid');
          $(this).find('form')[0].reset();

          $('[href="#edit_infor"]').tab('show');
      });

     /* EDIT BUTTON - PASS DATA TO MODAL */
  $(document).on("click", ".edit_btn", function(){
    $(".modal-body #edit_fname").val( $(this).data('editfname'));
    $(".modal-body #edit_mname").val( $(this).data('editmname'));
    $(".modal-body #edit_lname").val( $(this).data('editlname'));
    $(".modal-body #edit_gender").val( $(this).data('editgender'));
    $(".modal-body #edit_cstatus").val( $(this).data('editcstatus'));
    $(".modal-body #edit_cnum").val( $(this).data('editcnum'));
    $(".modal-body #edit_dept").val( $(this).data('editdept'));
    $(".modal-body #edit_dsgntion").val( $(this).data('editdsgntion'));
    $(".modal-body #edit_status").val( $(this).data('editstatus'));
    $(".modal-body #edit_hdate").val( $(this).data('edithdate'));
    $(".modal-body #edit_uname").val( $(this).data('edituname'));
    $(".modal-body .edit_pass").val( $(this).data('editpass'));
    $('.edit').attr('id', $(this).attr('id'));
    var dsgntion_id = $(this).data('editdsgntion');

    if($(this).data('editdepartment')==1){
        $(".modal-body #edit_department option:eq(1)").prop("selected", true);
    }
    var dept_id =$(this).data('editdept');
    $.ajax({
      url : "<?php echo site_url('Employee/get_designation');?>",
      method : "POST",
      data : {dept_id:           dept_id},
      async : true,
      dataType : 'json',
      success: function(data){
       
        var html = '';
        var i;
        html += '<option value="">No Selected</option>';
        for(i=0; i<data.length; i++){
        if(dsgntion_id==data[i].designationID){
        html += '<option value='+data[i].designationID+' selected>'+data[i].designationdescription+'</option>';
        }else{
        html += '<option value='+data[i].designationID+'>'+data[i].designationdescription+'</option>';
        }
        }
        $('#edit_dsgntion').html(html);
        }
      }); 
     
  });
    }); 
</script>
<script type="text/javascript">
     $(document).ready(function(){
   $('#edit_fname').on("cut copy paste",function(e) {
      e.preventDefault();
   });
     $('#edit_mname').on("cut copy paste",function(e) {
      e.preventDefault();
   });
       $('#edit_lname').on("cut copy paste",function(e) {
      e.preventDefault();
   });
    $('#edit_uname').on("cut copy paste",function(e) {
      e.preventDefault();
   });
      $('.edit_pass').on("cut copy paste",function(e) {
      e.preventDefault();
   });
});
</script>

<script type="text/javascript">
$(document).ready(function() {
  //update  user in modal
$('#edit_update').unbind('click').bind('click', function(){
    var firstname = $('#edit_fname').val().trim();
    var middlename = $('#edit_mname').val().trim();
    var lastname = $('#edit_lname').val().trim();
    var gender = $('#edit_gender').val();
    var hireddate = $('#edit_hdate').val().trim();
    var contactno = $('#edit_cnum').val().trim();
    var civilstatus = $('#edit_cstatus').val();
    var department = $('#edit_dept').val();
    var designation = $('#edit_dsgntion').val();
    var status = $('#edit_status').val();
    var username = $('#edit_uname').val().trim();
    var password = $('.edit_pass').val().trim();
    var myDate = new Date(hireddate);
    var today = new Date();
   
   
    if(firstname==""){ //firstname
        document.getElementById("edit-fname").innerHTML = "Please enter valid data..";
        $('#edit_fname').addClass('is-invalid');
        $('[href="#edit_infor"]').tab('show');
        $("#edit_fname").focus(); 
        event.preventDefault();
    }else{
        document.getElementById("edit-fname").innerHTML = ""; 
        $('#edit_fname').removeClass('is-invalid');
        $('#edit_fname').addClass('is-valid');
    }
    if(lastname==""){ //lastname
        document.getElementById("edit-lname").innerHTML = "Please enter valid data.";
        $('#edit_lname').addClass('is-invalid');
        $('[href="#edit_infor"]').tab('show');
        $("#edit_lname").focus(); 
        event.preventDefault();
    }else{
        document.getElementById("edit-lname").innerHTML = "";
        $('#edit_lname').removeClass('is-invalid');
        $('#edit_lname').addClass('is-valid');
    }
    if(gender==""){ //lastname
        document.getElementById("edit-gender").innerHTML = "Please enter valid data.";
        $('#edit_gender').addClass('is-invalid');
        $('[href="#edit_infor"]').tab('show');
        $("#edit_gender").focus(); 
        event.preventDefault();
    }else{
        document.getElementById("edit-gender").innerHTML = "";
        $('#edit_gender').removeClass('is-invalid');
        $('#edit_gender').addClass('is-valid');
    }
    if(hireddate==""){ //hireddate
        document.getElementById("edit-hdate").innerHTML = "Please enter valid data.";
        $('#edit_hdate').addClass('is-invalid');
        $('[href="#edit_infor"]').tab('show');
        $("#edit_hdate").focus(); 
        event.preventDefault();
    }else{

    if(hireddate !=""){
       $('#edit_hdate').on('input', function() {
      var input=$(this);
      var is_hdate=input.val();
      var myDate = new Date(is_hdate);
       var today = new Date();
      if(myDate >today)
          {
              document.getElementById("edit-hdate").innerHTML = "You cannot enter a date in the future!";
              input.removeClass("is-valid").addClass("is-invalid");
              return false;
          }
      else{
          document.getElementById("edit-hdate").innerHTML = "";
          input.removeClass("is-invalid").addClass("is-valid");
          return true;
      }
        });
    }
    else{
        document.getElementById("edit-hdate").innerHTML = "";
        $('#edit_hdate').removeClass('is-invalid');
        $('#edit_hdate').addClass('is-valid');
        }
    }
    if(contactno==""){ //contact number
        document.getElementById("edit-cnum").innerHTML = "Please enter valid data.";
        $('#edit_cnum').addClass('is-invalid');
        $('[href="#edit_infor"]').tab('show');
        $("#edit_cnum").focus(); 
        event.preventDefault();
    }
     else if(contactno.length <17){
            document.getElementById("edit-cnum").innerHTML = "Please enter a 10 digit contact number.";
            $('#edit_cnum').addClass('is-invalid');
            $('[href="#edit_infor"]').tab('show');
            $("#edit_cnum").focus(); 
             event.preventDefault();       
         }
    else{
        document.getElementById("edit-cnum").innerHTML = "";
        $('#edit_cNum').removeClass('is-invalid');
        $('#edit_cNum').addClass('is-valid');
    }
    if(civilstatus==""){ //unitnumber
        document.getElementById("edit-cstatus").innerHTML = "Please enter valid data.";
        $('#edit_cstatus').addClass('is-invalid');
        $('[href="#edit_infor"]').tab('show');
        $("#edit_cstatus").focus(); 
        event.preventDefault();
    }else{
        document.getElementById("edit-cstatus").innerHTML = "";
        $('#edit_cstatus').removeClass('is-invalid');
        $('#edit_cstatus').addClass('is-valid');
    }
    if(department==""){ //buildingst
        document.getElementById("edit-dept").innerHTML = "Please enter valid data.";
        $('#edit_dept').addClass('is-invalid');
        $('[href="#edit_infor"]').tab('show');
        $("#edit_dept").focus(); 
        event.preventDefault();
    }else{
        document.getElementById("edit-dept").innerHTML = "";
        $('#edit_dept').removeClass('is-invalid');
        $('#edit_dept').addClass('is-valid');
    }
    if(designation==""){ //barangay
        document.getElementById("edit-dsgntion").innerHTML = "Please enter valid data.";
        $('#edit_dsgntion').addClass('is-invalid');
        $('[href="#edit_infor"]').tab('show');
        $("#edit_dsgntion").focus(); 
        event.preventDefault();
    }else{
        document.getElementById("edit-dsgntion").innerHTML = "";
        $('#edit_dsgntion').removeClass('is-invalid');
        $('#edit_dsgntion').addClass('is-valid');
    }
    
    if(status==""){ //city
        document.getElementById("edit-status").innerHTML = "Please enter valid data.";
        $('#edit_status').addClass('is-invalid');
        $('[href="#edit_infor"]').tab('show');
        $("#edit_status").focus(); 
        event.preventDefault();
    }else{
        document.getElementById("edit-status").innerHTML = "";
        $('#edit_status').removeClass('is-invalid');
        $('#edit_status').addClass('is-valid');
    }   
    if(username==""){ //username
        document.getElementById("edit-uname").innerHTML = "Please enter valid data.";
        $('#edit_uname').addClass('is-invalid');
        $('[href="#edit_acc"]').tab('show');
        $("#edit_uname").focus(); 
        event.preventDefault();
    }else{
        document.getElementById("edit-uname").innerHTML = "";
        $('#edit_uname').removeClass('is-invalid');
        $('#edit_uname').addClass('is-valid');
    }  
    if(password==""){ //password
        document.getElementById("edit-pass").innerHTML = "Please enter valid data.";
        $('.edit_pass').addClass('is-invalid');
        $('[href="#edit_acc"]').tab('show');
        $(".edit_pass").focus(); 
        event.preventDefault();
    }else{
        document.getElementById("edit-pass").innerHTML = "";
        $('.edit_pass').removeClass('is-invalid');
        $('.edit_pass').addClass('is-valid');
    } 

 if(firstname=="" ||  lastname=="" || gender == "" || hireddate=="" || myDate >today || (contactno =="" || contactno.length <17) || civilstatus =="" ||department =="" || designation =="" || status ==""){
             $('[href="#edit_infor"]').tab('show');
              return false;
     }  

    if(firstname=="" ||  lastname=="" || gender == "" || hireddate=="" || myDate >today || (contactno =="" || contactno.length <17) || civilstatus =="" ||department =="" || designation =="" || status =="" || username == "" || password=="") return false;

      $("#edit_employee").hide();
      $("#confirmation_edit").modal({backdrop:'static', keyboard: false},'show');
        event.preventDefault(); 
        return false;
});
    $("#cncl-edit").unbind('click').bind('click', function(){
      $('#confirmation_edit').modal('hide');
      $('#edit_employee').show();
    });


    $('.edit').unbind('click').bind('click', function()

{
    var id = $(this).attr('id');
    var fname = $('#edit_fname').val().trim();
    var mname = $('#edit_mname').val().trim();
    var lname = $('#edit_lname').val().trim();
    var gender = $('#edit_gender').val();
    var hdate = $('#edit_hdate').val().trim();
    var cnum = $('#edit_cnum').val().trim();
    var civilstatus = $('#edit_cstatus').val();
    var dept = $('#edit_dept').val();
    var dsgntion = $('#edit_dsgntion').val();
    var status = $('#edit_status').val();
    var uname = $('#edit_uname').val().trim();
    var pass = $('.edit_pass').val().trim();
  
  $.ajax({
          url : "<?php echo site_url('Employee/update');?>",
          method : "POST",
          data : {
              edit_id:          id,
              edit_fname:       fname,
              edit_mname:       mname,
              edit_lname:       lname,
              edit_gender:      gender,
              edit_hdate:       hdate,
              edit_cnum:        cnum,
              edit_civilstatus: civilstatus,
              edit_dept:        dept,
              edit_dsgntion:    dsgntion,
              edit_status:      status,
              edit_uname:       uname,
              edit_pass:        pass},
          async : true,
          dataType : 'json',
        success: function(data){
          var result = data.split('|');
          if(result[0]=="false")
            {
             document.getElementById("edit-fname").innerHTML = result[1];
             document.getElementById("edit-lname").innerHTML = result[1];  
             $('#edit_fname').addClass('is-invalid');
             $('#edit_lname').addClass('is-invalid');
             $('#confirmation_edit').modal('hide');
             $('#edit_employee').show();
             $('[href="#edit_infor"]').tab('show');
             $("#edit_fname").focus(); 
            }

            else if(result[0]=='username_false'){
            document.getElementById("edit-uname").innerHTML = result[1];
             $('#edit_uname').addClass('is-invalid');
             $('#confirmation_edit').modal('hide');
             $('#edit_employee').show();
            $('[href="#edit_acc"]').tab('show');
             $("#edit_uname").focus(); 
            }
             else{
                window.location.replace('<?php echo base_url(); ?>Employee');
            }
        },
        error: function(request, textStatus, error) {

        }
        });
       return false;    
  });
});
</script>

<!-- /edit employee script -->





