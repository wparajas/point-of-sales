<style>
  .centertag {

    justify-content: center;
    text-align: center;
  }
 </style> 
<div class="ms-content-wrapper"> 
      <div class="row">
        <div class="col-md-12">
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb pl-0">
                  <li class="breadcrumb-item"><a href="<?= base_url(). 'Dashboard' ?>"><i class="fas fa-utensils"></i> Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Menu Group</li>
              </ol>
          </nav>
        </div>
         <div class="content container-fluid">
         <div class="ms-card">
         <div class="ms-card-header d-flex justify-content-between align-items-center bg-primary">
              <h6 class="page-title text-white font-weight-bold" >LIST OF MENU GROUP</h6>

              <BUTTON class="btn btn-outline-red text-red" data-toggle="modal" data-target="#add_menu_group" data-backdrop="static" data-keyboard="false">
                <i class="fa fa-plus-square fa-lg"></i>&nbsp;ADD MENU GROUP
              </BUTTON>

        </div>
  
    <div class="col-xl-12 col-md-12">
 <br><br>      
          <div class="table-responsive container-fluid">
            <table id="tablepayment" class="table table-bordered thead-primary dtBasicExample">
              <thead>
                <tr class="text-center">
                  <th>NUMBER</th>
                  <th>MENU GROUP NAME</th>
                  <th>MENU GROUP DESCRIPTION</th>
                  <th>STATUS</th>
                  <th>ACTION</th>
                </tr>
              </thead>
                <tbody>
                <?php foreach ($data as $item) { ?> 
                  
                  <tr class="text-center">                   
                    <td><?php echo $item->menugroupID; ?></td>
                    <td class="text-left"><?php  echo $item->menugroup; ?></td>
                    <td class="text-left">
                    	<?php echo $item->menudescription; ?>
					           </td>
                    <td>
                
                      <?php if($item->menugroupstatus=="1"){
                                  echo '<span class="badge badge-outline-success"> Active</span>';
                                }
                                  else{ echo '<span class="badge badge-outline-danger">Inactive</span>';
                                }
                           ?> 
                    </td>
                    <td>
                      <div class="drop-down float-right">
                        <a href="#" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false"> <i style="font-size: 1.5rem" class="material-icons">more_vert</i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                          <li class="ms-dropdown-list">
                            <a class="media p-2" href="#">
                              <div class="media-body edit_menu_group"
                                   data-controls-modal="your_div_id" 
                                   data-backdrop="static" 
                                   data-keyboard="false" 
                                   data-toggle="modal" 
                                   data-target="#edit_menu_group" 
                                   id="<?php echo $item->menugroupID; ?>"
                                   data-id="<?php echo $item->menugroupID; ?>"
                                   data-menugroup="<?php echo $item->menuname; ?>"
                                   data-menudescription="<?php echo $item->menudescription; ?>"
                                   data-status="<?php echo $item->menugroupstatus; ?>">
                                <i style="font-size: 1rem" class="fas fa-pencil-alt text-secondary"></i><span>Edit</span>
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
        <br><br>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="add_menu_group" role="dialog">
  <div class="modal-dialog modal-dialog-centered"  role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <div class="w-100">
            <h5 class="modal-title text-light p-2 font-weight-bold" id="exampleModalCenterTitle">ADD MENU GROUP</h5>
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="text-light" aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <form>
        <div class="form-group p-3">
          <div class="row">
            <div class="col-12 p-2">
              <label>Group Name <strong class="text-red">*</strong></label>
              <input type="text" class="form-control letterswithspace" name="addmenuname"id="addmenuname" placeholder="Please enter Group name" description="group name">
              <div class="invalid-feedback" id="add-menuname"></div>
            </div>
            <div class="col-12 p-2">
              <label>Group Description <strong class="text-red">*</strong></label>
              <textarea class="form-control" id="addmenudescription" name="addmenudescription" placeholder="Please enter Group Description" description="description"></textarea>
               <div class="invalid-feedback" id="add-menudescription"></div>
            </div>

          <div class="col-12 p-2">
            <label>Status </label>
            <div class="d-flex align-items-center">
              <span> Inactive </span> &nbsp;
                  <label class="ms-switch">
                  <input type="hidden" name="addstatus"id="addstatus" class="checked" value="0" />
                  <input type="checkbox" name="addstatus" id="addstatus" class="checked" value="1"/> 
                  <span class="ms-switch-slider ms-switch-success round"></span>
                  </label> 
              <span>&nbsp; Active </span>
            </div>
          </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <div style="margin:auto;">
          <button type="button" class="btn btn-primary" id="save" name="save">ADD</button>
        </div>
      </div>
     </form> 
    </div>
  </div>
</div>

<!-- CONFIRMATION FOR ADD -->
<div class="modal fade" id="add_menu_group_confirmation" role="dialog">
  <div class="modal-dialog modal-dialog-centered"  role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="form-group p-3">
          <div class="row">
          	<div class="w-100 text-center" >
          	 	<img style="margin:auto;" width="230px" height="100px" src="<?php echo base_url();?>pages\assets\img\modal\confirmation.png">	
          	</div>
          <h1 class="text-red" style="margin:auto;">ADD MENU GROUP</h1>
          <span class="text-secondary" style="margin:auto;">Are you sure you want to add new Menu Group?</span>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal"id="btn-cnl" name="btn-cnl">NO</button>
        <button type="button" class="btn btn-primary" id="btnsave" name="btnsave">YES</button>
      </div>
    </div>
  </div>
</div>


<!-- EDIT MODAL -->
<div class="modal fade" id="edit_menu_group" role="dialog">
  <div class="modal-dialog modal-dialog-centered"  role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <div class="w-100">
            <h5 class="modal-title text-light font-weight-bold p-2" id="exampleModalCenterTitle">EDIT MENU GROUP</h5>
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="text-light" aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <form>
        <div class="form-group p-3">
          <div class="row">
            <div class="col-12 p-2">
              <label>Group Name <strong class="text-red">*</strong></label>
              <input type="text" class="form-control"  id="editmenugroup" name="editmenugroup">
               <div class="invalid-feedback" id="edit-menugroup"></div>
            </div>
            <div class="col-12 p-2">
              <label>Group Description <strong class="text-red">*</strong></label>
              <textarea class="form-control" id="editmenugroupdescription" name="editmenugroupdescription"></textarea>
               <div class="invalid-feedback" id="edit-menugroupdescription"></div>
            </div>

          <div class="col-12 p-2">
            <label>Status </label>
            <div class="d-flex align-items-center">
              <span> Inactive </span> &nbsp;
                  <label class="ms-switch">
                  <input type="hidden" name="editstatus"id="editstatus" class="check" value="0" />
                  <input type="checkbox" name="editstatus" id="editstatus" class="check" value="1"/> 
                  <span class="ms-switch-slider ms-switch-success round"></span>
                  </label> 
              <span>&nbsp; Active </span>
            </div>
          </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <div style="margin:auto;">
          <button class="btn btn-primary update"> UPDATE</button>
          <!-- <button type="button" class="btn btn-primary update" data-toggle="modal"  data-target="#edit_courier_confirmation">UPDATE</button> -->
        </div>
      </div>
     </form> 
    </div>
  </div>
</div>


<!-- CONFIRMATION FOR EDIT -->
<div class="modal fade" id="edit_menugroup_confirmation" role="dialog">
  <div class="modal-dialog modal-dialog-centered"  role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="form-group p-3">
          <div class="row">
          <img style="margin:auto;" width="230px" height="100px" src="<?php echo base_url();?>pages\assets\img\modal\confirmation.png">
          <br>
          <h1 class="text-red" style="margin:auto;">UPDATE MENU GROUP</h1>
          <span class="text-secondary" style="margin:auto;">Are you sure you want to update Menu Group?</span>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-outline-danger" id="cncl-edit">NO</button>
        <button type="button" class="btn btn-primary edit">YES</button>
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
 $('#tablepayment').DataTable({
      "paging": true
    // false to disable pagination (or any other option)
    });
  $('#add_menu_group').on('hidden.bs.modal', function(){
    $(this).find('form')[0].reset("");    
    $(".invalid-feedback").html("");
    $('input').removeClass('is-invalid');
    $('input').removeClass('is-valid');
    $('select').removeClass('is-invalid');
    $('select').removeClass('is-valid');
  });
   $('#edit_menu_group').on('hidden.bs.modal', function(){
    $(this).find('form')[0].reset("");    
    $(".invalid-feedback").html("");
    $('input').removeClass('is-invalid');
    $('input').removeClass('is-valid');
    $('select').removeClass('is-invalid');
    $('select').removeClass('is-valid');
  });
  $('#save').unbind('click').bind('click', function(){
       /*  var menuname = $('#addmenuname').val();*/
       // var addstatus = $('#addstatus').val();
     
         var IDArray = ['#addmenuname','#addmenudescription', '#addstatus'];
         var ErrorIDArray = ['add-menuname','add-menudescription','add-status'];
          var ValueArray = [];
          var firstRequired = "";
            for(var i=0;i<IDArray.length;i++){
              if(i==2) continue;
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
            $('#add_menu_group').hide();
            $('#add_menu_group_confirmation').modal({backdrop: 'static', keyboard: false},'show');
            event.preventDefault(); 
            return false;
          } 
    }); 
   $('#btn-cnl').unbind('click').bind('click', function(){
     $('#add_menu_group_confirmation').hide();
      $('#add_menu_group').show();
   });

  $('#btnsave').unbind('click').bind('click', function(){
      var addstatus = 0;
       var menuname = $('#addmenuname').val();
       var menudescription = $('#addmenudescription').val();
       var statusadd = $('input[name="addstatus"]:checked').val();
       if(statusadd==null){
        var addstatus =0;
       }else{
        var addstatus = statusadd;
       }
     $.ajax({
          url : "<?php echo site_url('MenuGroup/save');?>",
          method : "POST",
          data : {menuname:   menuname,   menudescription: menudescription,
                  addstatus:  addstatus},
          async : true,
          dataType : 'json',
        success: function(data){
          var result = data.split('|');
          if(result[0]=="false"){
          document.getElementById("add-menuname").innerHTML = result[1];
          $('#addmenuname').addClass('is-invalid');
          $("#addmenuname").focus(); 
          $('#add_menu_group_confirmation').modal('hide');
          $('#add_menu_group').show();
          
        }else{
          window.location.replace('<?php echo base_url(); ?>Menugroup');
        }
        },
        error: function(request, textStatus, error) {

        }
        });
       return false;  


  });

  $('.edit_menu_group').unbind('click').bind('click', function(){
    $(".modal-body #editmenugroup").val( $(this).data('menugroup'));
    $(".modal-body #editmenugroupdescription").val($(this).data('menudescription'));
    $(".modal-body input[name='editstatus'][value='"+$(this).data('status')+"']").prop("checked", true);
    $('.edit').attr('id', $(this).attr('id'));
   });

   $('.update').unbind('click').bind('click', function(){
        var IDArray = ['#editmenugroup','#editmenugroupdescription', '#editstatus'];
         var ErrorIDArray = ['edit-menugroup','edit-menugroupdescription','edit-status'];
          var ValueArray = [];
          var firstRequired = "";
            for(var i=0;i<IDArray.length;i++){
              if(i==2) continue;
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
            $('#edit_menu_group').hide();
            $('#edit_menugroup_confirmation').modal({backdrop: 'static', keyboard: false},'show');
            event.preventDefault(); 
            return false;
          } 

   }); 

  $('#cncl-edit').unbind('click').bind('click', function(){
    $('#edit_menugroup_confirmation').hide();
    $('#edit_menu_group').show();
  });
  $('.edit').unbind('click').bind('click', function(){
      var id = $(this).attr('id');
      var menuname = $('#editmenugroup').val();
       var menudescription = $('#editmenugroupdescription').val();
       var editstatus = $('input[name="editstatus"]:checked').val();
        $.ajax({
          url : "<?php echo site_url('MenuGroup/update');?>",
          method : "POST",
          data : {id:              id,                menuname:   menuname,   
                  menudescription: menudescription,   editstatus:  editstatus},
          async : true,
          dataType : 'json',
        success: function(data){
          var result = data.split('|');
          if(result[0]=="false"){
          document.getElementById("edit-menugroup").innerHTML = result[1];
          $('#editmenugroup').addClass('is-invalid');
          $("#editmenugroup").focus(); 
          $('#edit_menugroup_confirmation').modal('hide');
          $('#edit_menu_group').show();
          
        }else{
          window.location.replace('<?php echo base_url(); ?>Menugroup');
        }
        },
        error: function(request, textStatus, error) {

        }
        });
       return false;  

  });

 });  
</script> 