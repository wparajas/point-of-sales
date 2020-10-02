<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12">
        	<nav aria-label="breadcrumb">
            	<ol class="breadcrumb pl-0">
              		<li class="breadcrumb-item"><a href="#"><i class="material-icons fs-16">dashboard</i> Dashboard</a>
              		</li>
              		<li class="breadcrumb-item active" aria-current="page">Roles & Permission</li>
            	</ol>
        	</nav>
        </div>
        <div class="col-md-12">
          	<div class="ms-panel">
            	<div class="ms-panel-header bg-primary">
              		<h6 class="text-light">ROLES AND PERMISSION</h6>
            	</div>
            	<div class="ms-panel-body">
            		<div class="row">
            			<div class="col-lg-3 col-md-3 col-sm-12">
            				<button class="btn btn-primary btn-block mb-3" data-toggle="modal" data-target="#add_userrole" data-backdrop="static" data-keyboard="false"><i class="fas fa-plus-square"></i> ADD ROLES</button>
            				<div class="ms-panel ms-btn-display roles-menu">
            					<ul id="roles" class="list-group notification-list">
                  <?php foreach ($role as $item) { ?> 
									<li class="list-group-item roles" id="<?php echo $item->roleID; ?>">
                    <div class="d-flex justify-content-between align-items-center">
                      <a href="javascript:void(0);" class="link text-dark <?php echo $item->roleID; ?>"><?php echo $item->roleDescription; ?></a>
                      <a href="#"  id="<?php echo $item->roleID; ?>" data-id="<?php echo $item->roleID; ?>" data-description="<?php echo $item->roleDescription; ?>" data-toggle="modal" data-target="#modal-edit-role" class="float-right text-secondary iconedit" ><i class="fas fa-pencil-alt"></i></a>
                    </div>
									</li>
                  <?php } ?>
								</ul>
            				</div>
            			</div>
            			<div class="col-lg-9 col-md-9 col-sm-12">
                    <div class="ms-panel-body">
            				<div class="table-responsive">
            					<table class="table table-bordered table-hover thead-primary" id="tablegroup">
            						<thead>
            							<tr><th>MODULE ACCESS</th></tr>
            						</thead>
            						<tbody id="resultdata">
                          <?php foreach ($module as $item) {  ?>
            							<tr class="table-tr-permission" style="">
            								<td>
            									<div class="d-flex justify-content-between align-items-center">
	            									<span><?php echo $item->moduledescription; ?></span>
	            									<span>
		            									<label class="ms-switch">
      															<input type="checkbox" class="check" id="<?php echo $item->ID; ?>" description="<?php echo $item->moduledescription; ?>" name="<?php echo $item->moduleShortDesc; ?>"<?php if($item->modulestatus==1){ echo 'checked'; } ?>> 
      															<span class="ms-switch-slider ms-switch-success round" for="<?php echo $item->moduleShortDesc; ?>"></span> 
      														</label>
      													</span>
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
        </div>
    </div>
</div>



<div class="modal fade" id="add_userrole" role="dialog">
 	<div class="modal-dialog modal-dialog-centered modal-min" role="document">
  	<div class="modal-content">
      <div class="modal-header bg-primary d-flex justify-content-between align-items-start">
        <!-- <div class=""> -->
          <h5 class="text-light font-weight-bold">ADD ROLE</h5>
        <!-- </div> -->
        <button type="button" class="close btn-close-add-role" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="text-light">&times;</span></button>
      </div>
  		<div class="modal-body">
				<div class="form-group">
					<label>Role Name</label>
					<input type="text" name="add-user_roleName" id="add-user_roleName" class="form-control" placeholder="Enter role name">
          <div class="invalid-feedback" id="add-invalid-user_roleName"></div>
				</div>
  		</div>
  		<div class="modal-footer">
  			<div class="w-100 text-center">
          <button class="btn btn-primary submit-btn shadow-none" id="save">ADD</button>
  				<!-- <button type="button" class="btn btn-primary shadow-none" id="btn-add-role">ADD</button> -->
				</div>
  		</div>
    </div>
	</div>
</div>


<div class="modal fade" id="confirmation_userrole" role="dialog">
 	<div class="modal-dialog modal-dialog-centered modal-min" role="document">
  	<div class="modal-content">
    		<div class="modal-body pb-3 text-center">
      		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  			<img class="isometric confirmationisometric" width="230px" height="100px" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/modal/confirmation.png">
  			<h1 class="text-red text-center font-weight-bold">ADD ROLE</h1>
            <p class="text-center my-2">Are you sure you want to add new Role?</p>
            <div class="invalid-feedback" id="confirmation-add-invalid"></div>
    		</div>
    		<div class="modal-footer">
    			<div class="w-100 text-center">
					<button type="button" class="btn btn-outline-primary cancel-btn" id="cncl-add">NO</button>
    				<button type="button" class="btn btn-primary add" id="add">YES</button>
				</div>
    		</div>
    </div>
	</div>
</div>

<div class="modal fade" id="modal-edit-role" role="dialog" >
  <div class="modal-dialog modal-dialog-centered modal-min" role="document">
    
    <div class="modal-content">
      <div class="modal-header bg-primary d-flex justify-content-between align-items-start">
        <!-- <div class=""> -->
          <h5 class="text-light font-weight-bold">UPDATE ROLE</h5>
        <!-- </div> -->
        <button type="button" class="close btn-close-edit-role" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="text-light">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Role Name</label>
          <input type="text" name="edit-user_roleName" id="edit-user_roleName" class="form-control" placeholder="Enter role name">
          <div class="invalid-feedback" id="edit-invalid-user_roleName"></div>
        </div>
      </div>
      <div class="modal-footer">
        <div class="w-100 text-center">
          <button type="button" class="btn btn-primary shadow-none update">UPDATE</button>
        </div>

      </div>
    </div>
  
  </div>
</div>

<div class="modal fade" id="modal-confirmation-edit-role" role="dialog" >
  <div class="modal-dialog modal-dialog-centered modal-min" role="document">
    <div class="modal-content">
        <div class="modal-body pb-3 text-center">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <img class="isometric confirmationisometric" width="230px" height="100px" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/modal/confirmation.png">
        <h1 class="text-red text-center">UPDATE ROLE</h1>
            <h6 class="text-center my-2">Are you sure you want to update role?</h6>
            <div class="invalid-feedback" id="confirmation-add-invalid"></div>
        </div>
        <div class="modal-footer">
          <div class="w-100 text-center">
            <button type="button" data-dismiss="modal" class="btn btn-outline-primary shadow-none cancel-btn" id="cncl-edit">NO</button>
            <button type="button" class="btn btn-primary shadow-none edit">YES</button>
          </div>
   </div>
    </div>
  </div>
 </div>
</div>
<script>
  $(document).ready(function() {
    $('#1').addClass('active');
     /*$('#tablegroup').DataTable({
       "paging": true
     // false to disable pagination (or any other option)
  });*/

    $(document).on("click", ".check", function(){
      
      var id = $(this).attr('id');
      var description = $("ul#roles li.active a").text().replace("edit","").replace("delete","").trim() + " - " + $(this).attr('description');

      var status = $(this).prop('checked')==true ? "1" : "0";
      $.ajax({
                url : "<?php echo site_url('Permission/changestatus');?>",
                method : "POST",
                data : {id:id,
                    description:description,
                    status,status},
                async : true,
                dataType : 'json',

                
                success: function(data){
                  var result = data.split('|');
              if(result[0]=="false"){

              }else{                
                showRoleModuleSuccessToast(result[1],result[2]=="enabled" ? '#3c763d':'#b02b2b');
              }
                },
                error: function(request, textStatus, error) {

              }
            });
    });

    $(document).on("click", ".roles", function(e) {
      $(".roles").each(function() { 
        $(".link", this).removeClass("text-red");
        $(".link", this).addClass("text-dark");
        $(this).removeClass("active"); 
      })
      $(this).addClass("active");
      $(".link", this).removeClass("text-dark");
      $(".link", this).addClass("text-red");
     /* $(".table-tr-permission").show();*/
    })

    $(document).on("mouseover", ".roles", function(e) {
      $(".btn-edit", this).show();
    })

    $(document).on("mouseout", ".roles", function(e) {
      $(".btn-edit", this).hide();
    })

    $('#edit_role').on('shown.bs.modal', function(){
      $("#editdescription").focus(); 
  }); 
    $('.iconedit').unbind('click').bind('click', function(){
    $(".modal-body #edit-user_roleName").val( $(this).data('description'));
    $('.edit').attr('id', $(this).attr('id'));
  });

    $('.update').unbind('click').bind('click', function(){
      
    var rolename = $('#edit-user_roleName').val().trim();
    if(rolename==""){
      document.getElementById("edit-invalid-user_roleName").innerHTML = "Please provide a role.";
      $('#edit-user_roleName').addClass('is-invalid');
      $("#edit-user_roleName").focus(); 
      event.preventDefault();
    }else{

      
      document.getElementById("edit-invalid-user_roleName").innerHTML = "";
      $('#edit-user_roleName').removeClass('is-invalid');
      $('#edit-user_roleName').addClass('is-valid');
      $("#edit-user_roleName").focus();
    }
    if(rolename=="" ) return false;
      $('#modal-edit-role').hide();
      $('#modal-confirmation-edit-role').modal('show');
      event.preventDefault(); 
      return false;
    });

      $("#cncl-edit").unbind('click').bind('click', function(){
      $('#modal-confirmation-edit-role').hide();
       $('#modal-edit-role').modal("show");
    });
    $(document).on("click", "#save", function() {
    var addrolename = $('#add-user_roleName').val().trim();
    if(addrolename==""){
      document.getElementById("add-invalid-user_roleName").innerHTML = "Please provide a role.";
      $('#add-user_roleName').addClass('is-invalid');
      $("#add-user_roleName").focus(); 
      event.preventDefault();
    }else{
      document.getElementById("add-invalid-user_roleName").innerHTML = "";
      $('#add-user_roleName').removeClass('is-invalid');
      $('#add-user_roleName').addClass('is-valid');
      $("#add-user_roleName").focus();
    }
    if(addrolename=="" ) return false;
      $('#add_userrole').hide();
      $('#confirmation_userrole').modal({backdrop: 'static', keyboard: false},'show');
      event.preventDefault(); 
      return false;
    });
     $(document).on("click", "#cncl-add", function() {
      $('#confirmation_userrole').modal('hide');
      $('#add_userrole').show();
       // $('#confirmation_userrole').hide();
    /*  $("#add_userrole").modal("show");*/
    });
    $('.roles-menu li').unbind('click').bind('click', function(){
     

      var moduleid = $(this).attr('id');
      $('.roles-menu li').removeClass('active');
      $('#' + moduleid).addClass('active');

      $.ajax({
                url : "<?php echo site_url('Permission/loadmodules');?>",
                method : "POST",
                data : {moduleid:moduleid},
                async : true,
                dataType : 'json',
                success: function(data){
              var html ="";

          for ( var i=0; i<data.length; i++ ) {

            var checked = "";

            if(data[i].moduleShortDesc=="rolespermission") continue;

            if(data[i].modulestatus=="1"){
              checked = "checked=''";
            }
            html +='<tr><td>' + 
                    '<div class="d-flex justify-content-between align-items-center">' +
                          '<span>'+ data[i].moduledescription + '</span>' +
                          '<span>' +
                            '<label class="ms-switch">' +
                              '<input type="checkbox" class="check"' + checked + '" id="' + data[i].ID + '" description="' + data[i].moduledescription +'" name="' + data[i].moduleShortDesc +'">'+
                              '<span class="ms-switch-slider ms-switch-success round" for="' + data[i].moduleShortDesc + '"></span> ' +
                            '</label>' +
                          '</span>' +
                        '</div>' +
                      '</td>' +
                    '</tr>';
          }
               console.log(html)
              $("#resultdata").html(html);
                },
                error: function(request, textStatus, error) {

              }
            });

    });

     $(document).on("click", "#add", function() {
        var description = $('#add-user_roleName').val().trim();

        $.ajax({
                  url : "<?php echo site_url('Permission/save');?>",
                  method : "POST",
                  data : {description:  description},
                  async : true,
                  dataType : 'json',
                  success: function(data){
                    var result = data.split('|');
                  if(result[0]=="false"){
                  document.getElementById("add-invalid-user_roleName").innerHTML = result[1];
                  $('#addrole').addClass('is-invalid');
                $('#confirmation_userrole').modal('hide');
                  $('#add_userrole').show();
                  $("#add-user_roleName").focus(); 
                  }else{
                  window.location.replace('<?php echo base_url(); ?>Permission');
                  }
                  },
                  error: function(request, textStatus, error) {

                }
              });
              return false;

     }); 

     $('.edit').unbind('click').bind('click', function(){
          var id = $(this).attr('id');
          var description = $('#edit-user_roleName').val().trim();
          $.ajax({
                  url : "<?php echo site_url('Permission/update');?>",
                  method : "POST",
                  data : {id:id,
                      description:description},
                  async : true,
                  dataType : 'json',
                  success: function(data){
                    var result = data.split('|');
                  if(result[0]=="false"){
                   document.getElementById("edit-invalid-user_roleName").innerHTML = result[1];
                  $('#edit-user_roleName').addClass('is-invalid');
                  $('#confirmation_edit').modal('hide');
                  $('#edit_role').show();
                  $("#edit-user_roleName").focus(); 
                  }else{
                  window.location.replace('<?php echo base_url(); ?>Permission');
                  }
                  },
                  error: function(request, textStatus, error) {

                }
              });
              return false;
        });



  })
</script>