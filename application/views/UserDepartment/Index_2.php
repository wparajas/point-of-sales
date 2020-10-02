    <div class="ms-content-wrapper"> 
      <div class="row">
          <nav aria-label="breadcrumb">
            <ul class="breadcrumb pl-0">
              <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Dashboard</a></li>
              <li class="breadcrumb-item"><a href="#">Employee Department</a></li>
            </ul>
          </nav>
         <div class="col-auto float-right ml-auto">
               <button class="btn btn-pill btn-primary float-right" data-toggle="modal" data-target="#add_department" data-backdrop="static" data-keyboard="false"><i class="material-icons">add</i>Add Departmemt </button> 
          </div>
          <br>
        <div class="col-xl-12 col-md-12">
           <div class="ms-panel">
            <div class="ms-panel-header">
              <h6>List of Departments</h6>
            </div>
            <div class="ms-panel-body">
              <div class="table-responsive">
                <table id="tabledepartment" class="table table-bordered thead-primary dtBasicExample">
                  <thead>
                    <tr>
                      <th>Group ID</th>
                      <th>Description</th>
                      <th>Status</th>
                      <th>Action</th>
                  </tr>
                  </thead>  
                    <tbody>
                      <?php foreach ($data as $item) { ?> 
                      <tr>
                        <td><?php echo $item->departmentID; ?></td>
                        <td><?php echo $item->description; ?></td>
                        <td>
                          <div class="action-label">
                        <?php if($item->departmentstatus=="Active") 
                                echo '<span class="badge badge-pill badge-success custom-status" style="text-align:center"><i class="far fa-dot-circle"></i> Active</span>';
                                else echo '<span class="badge badge-pill badge-danger custom-status" style="text-align:center"><i class="far fa-dot-circle"></i>Inactive</span>';
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
                              <div class="media-body editemployeedepartment" data-controls-modal="your_div_id" data-backdrop="static" data-keyboard="false" href="#" id="<?php echo $item->departmentID; ?>" data-toggle="modal" data-target="#edit_employeedepartment" data-description="<?php echo $item->description; ?>"><i class="fas fa-pencil-alt text-secondary"><span>Edit</span></i>
                            </div>
                            </a>
                              <a class="media p-2" href="#">
                                <div class="media-body changestatus" data-controls-modal="your_div_id" data-backdrop="static" data-keyboard="false" href="#" id="<?php echo $item->departmentID; ?>" data-toggle="modal" data-target="#status_employeedepartment" data-id="<?php echo $item->departmentID; ?>" data-status="<?php echo ($item->departmentstatus=='Active') ? 'Inactive' : 'Active' ?>" data-description="<?php echo $item->description; ?>"><i class="fas fa-paper-plane text-secondary text-success"><span>Change Status</span></i>
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
     <!-- add description  --> 
    <div id="add_department" class="modal custom-modal fade" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <center><h3 class="modal-title has-icon ms-icon-round ">Add department</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
            <div class="modal-body">
            <form method="post">
              <div class="form-group">
              <label>Department<span class="text-danger">*</span></label>
              <input type="text" placeholder="description" class="form-control restrictspecchar"id="adddescription" name="adddescription"required="">
              <div class="invalid-feedback" id="add-invalid"></div>
              </div>           
            <div class="modal-footer">
              <button type="button" class="btn btn-pill btn-block btn-primary float-right"id="save"name="save"><i class="flaticon-tick-inside-circle"></i> Submit</button>
            </div>
            </form>
          </div>
        </div>    
    </div>
  </div>
    <!--  Confirmation add  -->
    <div id="confirmation_add" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="form-header">
              <h3 style="text-align: center">Add department</h3>
               <img class="isometric confirmationisometric" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/isometric/undraw_faq_rjoy.svg">
              <p style="text-align: center">Are you sure you want to add this record?</p>
              <div class="invalid-feedback" id="status-invalid"></div>
          </div>
        
            <div class="row">
              <div class="col-6" style="text-align: center">
                <a href="#" class="btn btn-pill btn-block btn-primary continue-btn add"><i class="flaticon-diamond"></i> Add</a>
              </div>
              <div class="col-6" style="text-align: center">
                <a href="#" data-dismiss="modal" class="btn btn-pill btn-block btn-primary cancel-btn" id="cncl-add" style="text-align: center"> <i class="flaticon-information"></i> Cancel</a>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
    <!-- Edit Department Modal -->
  <div id="edit_employeedepartment" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit department</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label>Department <span class="text-danger">*</span></label>
              <input class="form-control restrictspecchar" type="text" id="editdescription">
              <div class="invalid-feedback" id="edit-invalid"></div>
            </div>
            <div class="submit-section">
              <button class="btn btn-pill btn-block btn-primary float-right update"><i class="flaticon-tick-inside-circle"></i> Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /Edit Department Modal -->
    <!-- Confirmation Modal -->
  <div id="confirmation_edit" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="form-header">
              <h3 style="text-align: center">Update department</h3>
               <img class="isometric confirmationisometric" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/isometric/undraw_faq_rjoy.svg">
              <p style="text-align: center">Are you sure you want to update this record?</p>
              <div class="invalid-feedback" id="status-invalid"></div>
              <br> 
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
   <!-- Status Modal -->
  <div class="modal custom-modal fade" id="status_employeedepartment" role="dialog">
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
                <a href="#" class="btn btn-pill btn-block btn-primary continue-btn change"><i class="flaticon-alert"></i>  Change</a>
              </div>
              <div class="col-6">
                <a href="#" data-dismiss="modal" class="btn btn-pill btn-block btn-primary  cancel-btn"><i class="flaticon-information"></i> Cancel</a>
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
    // DataTable
    $('#tabledepartment').DataTable({
      "paging": true
    // false to disable pagination (or any other option)
    });

    $('#add_department').on('shown.bs.modal', function(){
      $("#adddescription").focus(); 
    });

    $('#add_department').on('hidden.bs.modal', function(){
      $(this).find('form')[0].reset();    
      $(".invalid-feedback").html("");
      $('input').removeClass('is-invalid');
      $('input').removeClass('is-valid');
    });
    $('#edit_employeedepartment').on('hidden.bs.modal', function(){
      $(this).find('form')[0].reset();
      $(".invalid-feedback").html("");
      $('input').removeClass('is-invalid');
      $('input').removeClass('is-valid');
    }); 

    $('#save').unbind('click').bind('click', function(){
    var description = $('#adddescription').val().trim();
    if(description==""){
      document.getElementById("add-invalid").innerHTML = "Please provide a department.";
      $('#adddescription').addClass('is-invalid');
      $("#adddescription").focus(); 
      event.preventDefault();
    }else{
      document.getElementById("add-invalid").innerHTML = "";
      $('#adddescription').removeClass('is-invalid');
      $('#adddescription').addClass('is-valid');
      $("#adddescription").focus();
    }
    if(description=="" ) return false;
      $('#add_department').hide();
      $('#confirmation_add').modal({backdrop: 'static', keyboard: false},'show');
      event.preventDefault(); 
      return false;
    });
    $("#cncl-add").unbind('click').bind('click', function(){

      $('#confirmation_add').modal('hide');
      $('#add_department').show();
    });

    $('.add').unbind('click').bind('click', function(){
    var description = $('#adddescription').val().trim();
      $.ajax({
      url : "<?php echo site_url('Department/save');?>",
      method : "POST",
      data : {description:description},
      async : true,
      dataType : 'json',
      success: function(data){
      var result = data.split('|');
      if(result[0]=="false"){
        document.getElementById("add-invalid").innerHTML = result[1];
        $('#adddescription').addClass('is-invalid');
        $('#confirmation_add').modal('hide');
        $('#add_department').show();
        $("#adddescription").focus(); 
      }else{
        window.location.replace('<?php echo base_url(); ?>Department');
      }
      },
      error: function(request, textStatus, error) {

      }
      });
    return false;  
    });

    /* EDIT BUTTON - PASS DATA TO MODAL */
    $(document).on("click", ".editemployeedepartment", function(){
      $(".modal-body #editdescription").val( $(this).data('description'));
      $('.edit').attr('id', $(this).attr('id'));
    });

    /* UPDATE DESCIPTION */
    $('.update').unbind('click').bind('click', function(){
      var id = $(this).attr('id');
          var description = $('#editdescription').val();
          if(description==""){
            document.getElementById("edit-invalid").innerHTML = "Please provide a department.";
            $('#editdescription').addClass('is-invalid');
            $("#editdescription").focus(); 
                event.preventDefault();
          }else{
            document.getElementById("edit-invalid").innerHTML = "";
            $('#editdescription').removeClass('is-invalid');
            $('#editdescription').addClass('is-valid');
            $("#editdescription").focus();
          }
         
          if(description=="" ) return false;

          $('#edit_employeedepartment').hide();
        $('#confirmation_edit').modal({backdrop: 'static', keyboard: false},'show');

        event.preventDefault(); 
        return false;
    }); 

    $("#cncl-edit").unbind('click').bind('click', function(){
      $('#confirmation_edit').modal('hide');
      $('#edit_employeedepartment').show();
    });

    $('.edit').unbind('click').bind('click', function(){
      
          var id = $(this).attr('id');
          var description = $('#editdescription').val().trim();
            $.ajax({
              url : "<?php echo site_url('Department/update');?>",
              method : "POST",
              data : {id:id,
                  description:description},
              async : true,
              dataType : 'json',
              success: function(data){
                var result = data.split('|');
              if(result[0]=="false"){
                document.getElementById("edit-invalid").innerHTML = result[1];
                $('#editdescription').addClass('is-invalid');
                $('#confirmation_edit').modal('hide');
                $('#edit_employeesdepartment').show();
                $("#editdescription").focus(); 
              }else{
                window.location.replace('<?php echo base_url(); ?>Department');
              }
              },
              error: function(request, textStatus, error) {
             }
        });             
    });
    $('.changestatus').unbind('click').bind('click', function(){
      $('.change').attr('id', $(this).data('id'));
      $('.change').attr('status', $(this).data('status'));
      $('.change').attr('description', $(this).data('description'));
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
    var description = $(this).attr('description');
    alert(description);
      $.ajax({
        url : "<?php echo site_url('Department/changestatus');?>",
        method : "POST",
        data : {id:id,
        status:status,
        description:description},
        async : true,
        dataType : 'json',
      success: function(data){
        var result = data.split('|');
        if(result[0]=="false"){
        $("#status-invalid").css("display","block");
        document.getElementById("status-invalid").innerHTML = result[1];
        }else{
        window.location.replace('<?php echo base_url(); ?>Department');
        }
      },
      error: function(request, textStatus, error) {

      }
      });
    return false;
    });       

  }); 
</script>     