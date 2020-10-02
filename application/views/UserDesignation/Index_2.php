    <style>
      .table-responsive{
       overflow-y: hidden;
    }
    </style>
    <div class="ms-content-wrapper"> 
      <div class="row">
          <nav aria-label="breadcrumb">
            <ul class="breadcrumb pl-0">
              <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Dashboard</a></li>
              <li class="breadcrumb-item"><a href="#"> Designation</a></li>
            </ul>
          </nav>
         <div class="col-auto float-right ml-auto">
               <button class="btn btn-pill btn-primary float-right adddesignation" data-target="#add_designation" data-toggle="modal" data-target="#modal-3" data-backdrop="static" data-keyboard="false"><i class="material-icons">add</i>Add Designation </button> 
          </div>
          <br>
        <div class="col-xl-12 col-md-12">
           <div class="ms-panel">
            <div class="ms-panel-header">
              <h6>List of Designation</h6>
            </div>
            <div class="ms-panel-body">
              <div class="table-responsive">
                <table id="tabletax" class="table table-bordered thead-primary dtBasicExample">
                  <thead>
                    <tr>
                      <th>Designation ID</th>
                      <th>Designation Name</th>
                       <th>Department</th>
                      <th>Status</th>
                      <th>Action</th>
                  </tr>
                  </thead>  
                    <tbody>
                         <?php foreach ($data['designation'] as $item) { ?> 
                      <tr>
                        <td><?php echo $item->designationID; ?></td>
                        <td><?php echo $item->designationdescription; ?></td>
                        <td><?php echo $item->department; ?></td>
                        <td>
                          <div class="action-label">
                            <?php if($item->designationstatus=="Active") {
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
                                <a class="media p-2" href="#">
                                   <div class="media-body editdesignation" 
                                   data-controls-modal="your_div_id" 
                                   data-backdrop="static" data-keyboard="false" 
                                   href="#" id="<?php echo $item->designationID; ?>" 
                                   data-toggle="modal" data-target="#edit_designation"
                                   data-id="<?php echo $item->designationID; ?>" 
                                   data-description="<?php echo $item->designationdescription; ?>" 
                                   data-departmentid="<?php echo $item->departmentID; ?>">
                                   <i class="fas fa-pencil-alt text-secondary"><span>Edit</span></i>
                                  </div> 
                                </a>
                                <a class="media p-2" href="#">
                                 <div class="media-body changestatus" 
                                     data-controls-modal="your_div_id" 
                                     data-backdrop="static" data-keyboard="false" 
                                     href="#" id="<?php echo $item->designationID; ?>" 
                                     data-toggle="modal" data-target="#status_designation" 
                                     data-id="<?php  echo $item->designationID; ?>" 
                                     data-status="<?php echo ($item->designationstatus=='Active') ? 'Inactive' : 'Active' ?>" 
                                     data-designationdescription="<?php echo $item->designationdescription; ?>">
                                     <i class="fas fa-paper-plane text-secondary text-success"><span>Change Status</span></i> 
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
  <div id="add_designation" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title has-icon ms-icon-round "><i class="flaticon-share bg-primary text-white"></i> Add designation</h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
          <div class="modal-body">
            <form method="post">
              <div class="form-group">
              <label>Department<span class="text-danger">*</span></label>
                  <select class="form-control" id="adddepartment" name="adddepartment" style="width: 100%;" description="department" required tabindex="14">
                    <option value="">No Selected</option>
                    <?php
                    foreach($data['department'] as $item)
                    {
                    echo '<option value="'.$item->departmentID.'">'.$item->description.'</option>';
                    }
                    ?>  
                  </select>
              <div class="invalid-feedback" id="add-department"></div>
              </div>  
              <div class="form-group">
              <label>Designation<span class="text-danger">*</span></label>
              <input type="text" placeholder="description" class="form-control restrictspecchar"id="adddescription" description="designation" name="adddescription"required="">
              <div class="invalid-feedback" id="add-designation"></div>
              </div>         
            <div class="modal-footer">
              <button type="button" class="btn btn-pill btn-block btn-primary btn-primary float-right"id="save"name="save"><i class="flaticon-tick-inside-circle"></i> Submit</button>
            </div>
          </form>
        </div>    
    </div>
  </div> 
</div>
 <div id="confirmation_add" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="form-header">
              <h3 style="text-align: center">Add designation</h3>
                <img class="isometric confirmationisometric" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/isometric/undraw_faq_rjoy.svg">
              <p style="text-align: center">Are you sure you want to add this record?</p>
              <div class="invalid-feedback" id="status-invalid"></div>
          </div>
        
            <div class="row">
              <div class="col-6" style="text-align: center">
                <a href="#" class="btn btn-pill btn-block btn-primary continue-btn add"><i class="flaticon-diamond"></i> Add</a>
              </div>
              <div class="col-6" style="text-align: center">
                <a href="#" data-dismiss="modal" class="btn btn-pill btn-block btn-primary cancel-btn" id="cncl-add" style="text-align: center"><i class="flaticon-information"></i> Cancel</a>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  <div id="edit_designation" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title has-icon ms-icon-round "><i class="flaticon-share bg-primary text-white"></i> Edit department</h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
          <div class="modal-body">
            <form method="post">
              <div class="form-group">
              <label for="editgroup">Department<span class="text-danger">*</span></label>
                  <select class="form-control" id="editdepartment" name="editdepartment" style="width: 100%;" description="department" required>
                    <option value="">No Selected</option>
                    <?php
                    foreach($data['department'] as $item)
                    {
                    echo '<option value="'.$item->departmentID.'">'.$item->description.'</option>';
                    }
                    ?>  
                  </select>
              <div class="invalid-feedback" id="edit-department"></div>
              </div>  
              <div class="form-group">
              <label>Designation<span class="text-danger">*</span></label>
              <input type="text" placeholder="description" class="form-control restrictspecchar"id="editdescription" description="designation" name="editdescription"required="">
              <div class="invalid-feedback" id="edit-description"></div>
              </div>         
            <div class="modal-footer">
               <button class="btn btn-pill btn-block btn-primary float-right update"><i class="flaticon-tick-inside-circle"></i> Update</button>
            </div>
          </form>
        </div>    
    </div>
  </div> 
</div>
 <!--  Confirmation edit  -->
    <div id="confirmation_edit" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="form-header">
             <h3 style="text-align: center">update menu category</h3>
              <img class="isometric confirmationisometric" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/isometric/undraw_faq_rjoy.svg">
              <p style="text-align: center">Are you sure you want to add this record?</p>
              <div class="invalid-feedback" id="status-invalid"></div>
          </div>
        
            <div class="row">
              <div class="col-6">
                <a href="#" class="btn btn-pill btn-block btn-primary continue-btn edit" ><i class="flaticon-diamond"></i> Update</a>
              </div>
              <div class="col-6">
                <a href="#" data-dismiss="modal" class="btn btn-pill btn-block btn-primary cancel-btn" id="cncl-edit"><i class="flaticon-information"></i> Cancel</a>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal custom-modal fade" id="status_designation" role="dialog">
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
                <a href="#" class="btn btn-pill btn-block btn-primary continue-btn change"><i class="flaticon-alert"></i> Change</a>
              </div>
              <div class="col-6">
                <a href="#" data-dismiss="modal" class="btn btn-pill btn-block btn-primary cancel-btn"><i class="flaticon-information"></i> Cancel</a>
              </div>
            </div>
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

<script  type="text/javascript">  
  $(document).ready(function() {
    $('#tabledes').DataTable({
      "paging": true
    }); 

     $('#add_designation').on('shown.bs.modal', function(){
        $("#adddepartment").focus(); 
    });

      $('#add_designation').on('hidden.bs.modal', function(){
        $(this).find('form')[0].reset();    
        $(".invalid-feedback").html("");
        $('input').removeClass('is-invalid');
        $('input').removeClass('is-valid');
        $('select').removeClass('is-invalid');
        $('select').removeClass('is-valid');
      }); 

        $('#save').unbind('click').bind('click', function(){
         var IDArray = ['#adddepartment','#adddescription'];
         var ErrorIDArray = ['add-department','add-designation'];
          var ValueArray = [];
          var firstRequired = "";
            for(var i=0;i<IDArray.length;i++){
               if($(IDArray[i]).val().trim()=="" || $(IDArray[i]).val().trim()==""){
                    if(firstRequired==""){
                        firstRequired = IDArray[i];
                    };
                    document.getElementById(ErrorIDArray[i]).innerHTML = "Please provide a " + $(IDArray[i]).attr("description") +".";
                    $(IDArray[i]).addClass('is-invalid');
                    event.preventDefault();
                }else{
                    document.getElementById(ErrorIDArray[i]).innerHTML = "";
                    $(IDArray[i]).removeClass('is-invalid');
                    $(IDArray[i]).addClass('is-valid');
                    event.preventDefault();
                } 
          } 
          $(firstRequired).focus();
          if(firstRequired==""){
            if($(IDArray[i]).val()=="" || $(IDArray[i]).val()=="") return false;
            $('#add_designation').hide();
            $('#confirmation_add').modal({backdrop: 'static', keyboard: false},'show');
            event.preventDefault(); 
            return false;
          } 
    });

     $('.add').unbind('click').bind('click', function(){
      var departmenID          =   $("#adddepartment").val();
      var description          =   $("#adddescription").val();
        $.ajax({
                url : "<?php echo site_url('Designations/save');?>",
                method : "POST",
                data : {departmenID: departmenID , description: description},
                async : true,
                dataType : 'json',
                success: function(data){
                var result = data.split('|');
              if(result[0]=="false"){
                document.getElementById("add-designation").innerHTML = result[1];
                  $('#adddescription').removeClass('is-valid');
                  $('#adddescription').addClass('is-invalid');
                  $('#add-designation').addClass('invalid-feedback');
                  $("#adddescription").focus();
                  $('#confirmation_add').modal('hide');
                  $('#add_designation').show();
              }else{
                  window.location.replace('<?php echo base_url(); ?>Designations');
                  }
                  },
               error: function(request, textStatus, error) {

                }    
        });  
     });
       $("#cncl-add").unbind('click').bind('click', function(){
      $('#confirmation_add').modal('hide');
      $('#add_designation').show();
    }); 

     /*  EDIT FUNCTION NG PABABA   */ 
    $(document).on("click", ".editcategory", function(){
      $(".modal-body #editgroup").val( $(this).data('groupid'));
      $(".modal-body #editgroup").trigger("change");
      $(".modal-body #editdescription").val( $(this).data('description'));
      $('.edit').attr('id', $(this).attr('id'));
    });
    $('.update').unbind('click').bind('click', function(){  
    var id = $(this).attr('id');
    var IDArray = ['#editdepartment', '#editdescription'];
       var ErrorIDArray = ['edit-department','edit-description'];
          var ValueArray = [];
          var firstRequired = "";
            for(var i=0;i<IDArray.length;i++){
               if($(IDArray[i]).val().trim()=="" || $(IDArray[i]).val().trim()==""){
                    if(firstRequired==""){
                        firstRequired = IDArray[i];
                    };
                    document.getElementById(ErrorIDArray[i]).innerHTML = "Please provide a " + $(IDArray[i]).attr("description") +".";
                    $(IDArray[i]).addClass('is-invalid');
                    event.preventDefault();
                }else{
                    document.getElementById(ErrorIDArray[i]).innerHTML = "";
                    $(IDArray[i]).removeClass('is-invalid');
                    $(IDArray[i]).addClass('is-valid');
                    event.preventDefault();
                } 
          }
          $(firstRequired).focus();
          if(firstRequired==""){
            if($(IDArray[i]).val()=="" || $(IDArray[i]).val()=="") return false;
            $('#edit_designation').hide();
            $('#confirmation_edit').modal({backdrop: 'static', keyboard: false},'show');
            event.preventDefault(); 
            return false;
          }  
    });
     /*  EDIT FUNCTION NG PABABA   */ 
    $(document).on("click", ".editdesignation", function(){
      $(".modal-body #editdepartment").val( $(this).data('departmentid'));
      $(".modal-body #editdepartment").trigger("change");
      $(".modal-body #editdescription").val( $(this).data('description'));
      $('.edit').attr('id', $(this).attr('id'));
    });

     $('.edit').unbind('click').bind('click', function(){
      var id                    = $(this).attr('id');
       var departmentid         =   $("#editdepartment").val();
       var description          =   $("#editdescription").val();
         $.ajax({
                    url : "<?php echo site_url('Designations/update');?>",
                    method : "POST",
                    data : {id:           id,
                            departmentid:  departmentid,
                            description:      description},
                    async : true,
                    dataType : 'json',
                    success: function(data){
                    var result = data.split('|');
                  if(result[0]=="false"){
                  document.getElementById("edit-description").innerHTML = result[1];
                  $('#editdescription').removeClass('is-valid');
                  $('#editdescription').addClass('is-invalid');
                  $('#edit-description').addClass('invalid-feedback');
                  $("#editdescription").focus();
                  $('#confirmation_edit').modal('hide');
                  $('#edit_designation').show();
                  }else{
                  window.location.replace('<?php echo base_url(); ?>Designations');
                  }
                  },
               error: function(request, textStatus, error) {
                }    
          });
                return false;
    });     

    $("#cncl-edit").unbind('click').bind('click', function(){
      $('#confirmation_edit').modal('hide');
      $('#edit_designation').show();
    }); 

    $('.changestatus').unbind('click').bind('click', function(){
      $('.change').attr('id', $(this).data('id'));
      $('.change').attr('status', $(this).data('status'));
      $('.change').attr('designationdescription', $(this).data('designationdescription'));
     // alert($(this).data('id')+ ' ' + $(this).data('departmentid')+' ' + $(this).data('status'));
      var displayText = "";

      if($(this).data('status')=="Active"){
        displayText = "<font color='green'>activate</font>";
      }else if($(this).data('status')=="Inactive"){
        displayText = "<font color='#e04d45'>Inactive</font>";
      }

      document.getElementById("statusmessage").innerHTML = "Are you sure you want to " + displayText + " this record?";
    });
   /* CHANGE STATUS */
    $('.change').unbind('click').bind('click', function(){
          var id = $(this).attr('id');
          var status = $(this).attr('status');
          var designationdescription = $(this).attr('designationdescription');

          // store data 
          // const data = {id, status, designationdescription};
          // alert(data.id +"\n"+ data.status +"\n"+ data.designationdescription);

                  $.ajax({
                        url : "<?php echo site_url('designations/changestatus');?>",
                        method : "POST",
                        data : {id:id,
                            status:status,
                            designationdescription:designationdescription},
                        async : true,
                        dataType : 'json',
                        success: function(data){
                          var result = data.split('|');
                          if(result[0]=="false"){
                            $("#status-invalid").css("display","block");
                            document.getElementById("status-invalid").innerHTML = result[1];
                          }else{
                            window.location.replace('<?php echo base_url(); ?>Designations');
                          }
                        },
                        error: function(request, textStatus, error) {

                        }
                  });
                  
                  return false;
              });
   }); 
</script>  