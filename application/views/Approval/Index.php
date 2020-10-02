<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12">
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb pl-0">
                  <li class="breadcrumb-item"><a href="#"><i class="material-icons fs-16">dashboard</i> Dashboard</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">Approval Setup</li>
              </ol>
          </nav>
        </div>
        <div class="col-md-12">
            <div class="ms-panel">
              <div class="ms-panel-header bg-primary">
                  <h6 class="text-light">APPROVAL SETUP</h6>
              </div>
              <div class="ms-panel-body">
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="ms-panel ms-btn-display roles-menu">
                      <ul id="roles" class="list-group notification-list">
                        <?php foreach ($module['approval'] as $item) { ?> 
                           <li class="list-group-item approval" id="<?php echo $item->moduleID; ?>">
                            <div class="d-flex justify-content-between align-items-center">
                              <a href="javascript:void(0);" class="link text-dark <?php echo $item->moduleID; ?>"><?php echo $item->moduleDescription; ?></a>
                              <a href="#"  id="<?php echo $item->moduleID; ?>" data-id="<?php echo $item->moduleID; ?>" data-description="<?php echo $item->moduleDescription; ?>" class="iconedit" ></a>
                            </div>
                          </li>
                      <?php } ?>    
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-12">
                    <div class="table-responsive">
                      <table class="table table-bordered table-hover thead-primary" id="table-permission">
                        <thead>
                          <tr class="text-center">
                            <th>ROLES OF APPROVERS</th>
                            <th>TYPE OF APPROVERS</th>
                          </tr>
                        </thead>
                        <tbody id="edittable">
                          <tr class="table-tr-approval">
                            <td>
                              <select name="addchecker" id="addchecker" class="form-control input employeeID select2 alphanumericwithspace" style="width: 100%;"description ="checker">
                                <option value="" selected disabled>Select Checker</option>
                                <option value="999">N/A</option>
                                <?php
                                  foreach($module['user'] as $user)
                                  {
                                  echo '<option value="'.$user->user_accountID.'">'.$user->fullname.'</option>';
                                  }
                                  ?>
                              </select>
                              <div class="invalid-feedback" id="add-checker"></div>
                            </td>
                            <td class="text-center">CHECKER</td>
                          </tr>
                          <tr class="table-tr-approval" >
                            <td>
                              <select name="addapproval" id="addapproval" class="form-control employeeID select2 alphanumericwithspace" style="width: 100%;" discription="approval">
                                <option value="" selected disabled>Select Approver</option>
                                 <option value="999">N/A</option>
                              <?php
                                  foreach($module['user'] as $user)
                                  {
                                  echo '<option value="'.$user->user_accountID.'">'.$user->fullname.'</option>';
                                  }
                                  ?>
                              </select>
                              <div class="invalid-feedback" id="add-approval"></div>
                            </td>
                            <td class="text-center">APPROVER</td>
                          </tr>
                        </tbody>
                        <tfoot>
                          <tr class="table-tr-approval">
                            <td colspan="2">
                              <button class="btn btn-primary float-right" id="btn-add-approvers">SAVE</button>
                            </td>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="modal fade" id="confirmation_approval" tabindex="-1" role="dialog" aria-labelledby="confirmation_approval" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-min" role="document">
    <div class="modal-content">
        <div class="modal-body pb-3">
          <button type="button" class="close " data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <img class="isometric confirmationisometric" width="230px" height="100px" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/modal/confirmation.png">
        <h1 class="text-red text-center">SAVE APPROVERS</h1>
            <h6 class="text-center my-2">Are you sure you want to save approves?</h6>
            <div class="invalid-feedback" id="confirmation-add-invalid"></div>
        </div>
        <div class="modal-footer">
          <div class="float-right">
          <button type="button" data-dismiss="modal" class="btn btn-outline-primary shadow-none">NO</button>
            <button type="button" class="btn btn-primary shadow-none" id="add">YES</button>
        </div>
        </div>
    </div>
  </div>
</div> -->
</div>

<div class="modal fade" id="confirmation_userapproval" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-min" role="document">
    <div class="modal-content">
        <div class="modal-body pb-3 text-center">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <img class="isometric confirmationisometric" width="230px" height="100px" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/modal/confirmation.png">
        <h1 class="text-red text-center font-weight-bold">Updated Approval</h1>
            <p class="text-center my-2">Are you sure you want to update this approval?</p>
            <div class="invalid-feedback" id="confirmation-add-invalid"></div>
        </div>
        <div class="modal-footer">
          <div class="w-100 text-center">
          <button type="button"  class="btn btn-outline-primary" data-dismiss="modal" id="cncl-add">NO</button>
            <button type="button" class="btn btn-primary add" id="add">YES</button>
        </div>
        </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function() {
   $('#16').addClass('active');
   $('.select2').select2();
   $(document).on("keypress", ".alphanumericwithspace", function(e){
        var keyCode = e.which;

        if ( !( (keyCode >= 48 && keyCode <= 57) ||(keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) ) && keyCode != 32 && keyCode != 13) {
          e.preventDefault();
        }
    });
    $(document).on("click", ".approval", function(e) {
      $(".table-tr-approval-default").hide();
      $(".approval").each(function() { 
        $(this).removeClass("active"); 
        $(".link", this).removeClass("text-red");
        $(".link", this).addClass("text-dark");
      });
      $(this).addClass("active");
      $(".link", this).removeClass("text-dark");
      $(".link", this).addClass("text-red");
      $(".table-tr-approval").show();
    });
    $(document).on("click", ".iconedit", function(){
      id = $(this).attr('id');
      
    /*  $(".modal-body #editgroup").val( $(this).data('groupid'));
      $(".modal-body #editgroup").trigger("change");
      $(".modal-body #editdescription").val( $(this).data('description'));*/
      $('.update').attr('id', $(this).attr('id'));
    });

      $('#cncl-add').unbind('click').bind('click', function(){
      $('#confirmation_userapproval').hide();
     
    });

        $('.roles-menu li').unbind('click').bind('click', function(){
        var moduleid = $(this).attr('id');
        $('.roles-menu li').removeClass('active');
        $('#' + moduleid).addClass('active');
        });  

        $('.roles-menu li').unbind('click').bind('click', function(){
         var html = '';
          var approvalID= $(this).attr('id');

         
        /*
          html += 
            '<tr class="table-tr-approval">'+
                '<td>'+
                 '<select name="addchecker" id="addchecker" class="form-control input employeeID select2 alphanumericwithspace" style="width: 100%;" description ="checker">'+ 
                    '<option value="" selected disabled>Select Checker</option>'+
                    '<option value="999">N/A</option>'+
                    <?php foreach($module['user'] as $user) {   
                      echo "'<option value=".'"'.$user->user_accountID.'"'.">".$user->fullname."</option>' +"; 
                    } ?> 
                    '</select>'+
                   '<div class="invalid-feedback" id="add-checker"></div>'+
                '</td>'+
                '<td class="text-center">CHECKER</td>'+
              '</tr>'+
              '<tr class="table-tr-approval" >'+
                '<td>'+
                 '<select name="addapproval" id="addapproval" class="form-control employeeID select2 alphanumericwithspace" style="width: 100%;"  discription="approval">'+
                    '<option value="" selected disabled>Select Approver</option>'+
                    '<option value="999">N/A</option>'+
                   <?php foreach($module['user'] as $user) {   
                      echo "'<option value=".'"'.$user->user_accountID.'"'.">".$user->fullname."</option>' +"; 
                    } ?> 
                    '</select>' +
                    '<div class="invalid-feedback" id="add-approval"></div>'+
                '</td>'+
                '<td class="text-center">APPROVER</td>'+
              '</tr>';

           $('#edittable').html(html);
            $('.select2').select2();
*/
            $.ajax({
                  url : "<?php echo site_url('Approval/approvalrecord');?>",
                  method : "POST",
                  data : {approvalID:  approvalID},
                  async : true,
                  dataType : 'json',
                  success: function(response){
                  
 
                    for ( var i=0; i<response.length; i++ ) {
                    var user_accountID   =    response[i].user_accountID;

                  
                /*    $('.employeeID' + (i+1)).val (user_accountID);*/
                   /* $('#addchecker').val (user_accountID);*/

                    

                  }
                   $('#addchecker').val(user_accountID);
                 $('#addchecker').select2().trigger('change');  
                 /* $('#addchecker'+response).html(response.user_accountID);*/

                }
                  

         });

        $('#add').attr('id', $(this).attr('id'));

        });
        $('#btn-add-approvers').click(function(){
          var description = $('#addchecker').val();
          var IDArray = ['#addchecker','#addapproval'];
         var ErrorIDArray = ['add-checker','add-approval'];
          var ValueArray = [];
          var firstRequired = "";
            for(var i=0;i<IDArray.length;i++){
               if($(IDArray[i]).val()==null || $(IDArray[i]).val()==""){
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
            /*$('#add_designation').hide();*/
            $('#confirmation_userapproval').modal({backdrop: 'static', keyboard: false},'show');
            event.preventDefault(); 
            return false;
          } 
    });
    $('#add').unbind('click').bind('click', function(){
      var employeeID = [];
      var moduleID = $(this).attr('id');
     
      const description = $('#addchecker').val();
      const addapproval = $('#addapproval').val();
     // const employeeID = description + "," + addapproval;
       $(".employeeID").each(function(){
               employeeID.push($(this).val());
            });
      if(description == addapproval){
        err = "error";
        showErrorToast('Cannot update, duplicate employee!');
        return false;
       }else{
        $.ajax({
                  url : "<?php echo site_url('Approval/save');?>",
                  method : "POST",
                  data : {moduleID:  moduleID, employeeID: employeeID},
                  async : true,
                  dataType : 'json',
                  success: function(data){
                    $('#confirmation_userapproval').modal('hide');
                    showSuccessToast('Approval successfully updated!');

                   },
                  error: function(request, textStatus, error) {

                }  
    
        }); 
          return false;

      }
     }) 
      
        
  })
</script>