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
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-utensils"></i> Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Menu Category</li>
              </ol>
          </nav>
        </div>
         <div class="content container-fluid">
         <div class="ms-card">
         <div class="ms-card-header d-flex justify-content-between align-items-center bg-primary">
              <h6 class="page-title text-white" >LIST OF MENU CATEGORIES</h6>

              <BUTTON class="btn btn-outline-red text-red" data-toggle="modal" data-target="#add_menu_group_category" data-backdrop="static" data-keyboard="false">
                <i class="fa fa-plus-square fa-lg"></i>&nbsp;ADD MENU CATEGORY

        </div>
  
    <div class="col-xl-12 col-md-12">
 <br><br>      
          <div class="table-responsive container-fluid">
            <table id="tabledepartment" class="table table-bordered thead-primary dtBasicExample">
              <thead>
                <tr class="text-center">
                  <th>NUMBER</th>
                  <th>MENU GROUP NAME</th>
                  <th>MENU CATEGORY NAME</th>
                  <th>STATUS</th>
                  <th>ACTION</th>
                </tr>
              </thead>
                <tbody>
                <?php foreach ($data['menucategory'] as $category) { ?> 
                  <tr>
                    <td><?php echo $category->menucategoryID; ?></td>
                    <td><?php echo $category->menugroup; ?></td>
                    <td><?php echo $category->menucategoryname; ?></td>
                    
                    <td class="text-center">
                        <?php if($category->menucategorystatus=="1"){
                                  echo '<span class="badge badge-outline-success"> Active</span>';
                                }
                                  else{ echo '<span class="badge badge-outline-danger">Inactive</span>';
                                }
                           ?> 
                    </td>
                    <td>
                      <div class="drop-down float-right">
                        <a href="#" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false"> <i style="font-size:1.5rem" class="material-icons">more_vert</i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                          <li class="ms-dropdown-list">
                            <a class="media p-2" href="#">
                              <div class="media-body edit_menucategory"
                                   data-controls-modal="your_div_id" 
                                   data-backdrop="static" 
                                   data-keyboard="false" 
                                   data-toggle="modal" 
                                   data-target="#edit_menucategory" 
                                   href="javascript:void(0);" 
                                   id="<?php echo $category->menucategoryID; ?>"
                                   data-id="<?php echo $category->menucategoryID; ?>"
                                   data-menugroupid="<?php echo $category->menugroupID; ?>"
                                   data-menugroup="<?php echo $category->menugroup; ?>"
                                   data-category="<?php echo $category->menucategoryname; ?>"
                                   data-status="<?php echo $category->menucategorystatus; ?>">
                                <i style="font-size: 1rem;" class="fas fa-pencil-alt text-secondary"></i><span> Edit</span>
                              </div>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
            <?php }  ?>
                </tbody>
            </table>
          </div>
<br><br>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="add_menu_group_category" role="dialog">
  <div class="modal-dialog modal-dialog-centered"  role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <div class="w-100">
            <h5 class="modal-title text-light p-2 font-weight-bold" id="exampleModalCenterTitle">ADD MENU CATEGORY</h5>
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
              <label>Menu Group<strong class="text-red"> *</strong></label>
              <select class="form-control select2 alphanumericwithspace" name="addmenugroup" id="addmenugroup" style="width: 100%;"description="menu group">
                  <option value="">No Selected</option>
                <?php
                    foreach($data['menugroup'] as $item)
                    {
                    echo '<option value="'.$item->menugroupID.'">'.$item->menugroup.'</option>';
                    }
                ?>
                </select>
              <div class="invalid-feedback" id="add-menugroup"></div>    
            </div>
            <div class="col-12 p-2">
              <label>Menu Category<strong class="text-red"> *</strong></label>
              <input class="form-control alphanumericwithspace" placeholder="Please enter Group Category" id="addmenucategory" name="addmenucategory" description="menu category">
              <div class="invalid-feedback" id="add-menucategory"></div>    
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
        <button type="button" class="btn btn-primary" id="save" name="save" >ADD</button>
        </div>
      </div>
     </form> 
    </div>
  </div>
</div>

<!-- CONFIRMATION FOR ADD -->
<div class="modal fade" id="add_menu_group_category_confirmation" role="dialog">
  <div class="modal-dialog modal-dialog-centered"  role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="form-group p-3">
          <div class="row">
          	<div class="w-100 text-center" >
          	 	<img style="margin:auto;" width="230px" height="100px" src="<?php echo base_url();?>pages\assets\img\modal\confirmation.png">	
          	</div>
          <h1 class="text-red" style="margin:auto;">ADD MENU GROUP</h1>
          <span class="text-secondary" style="margin:auto;">Are you sure you want to add menu category?</span>
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
<div class="modal fade" id="edit_menucategory" role="dialog">
  <div class="modal-dialog modal-dialog-centered"  role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <div class="w-100">
            <h5 class="modal-title text-light p-2 font-weight-bold" id="exampleModalCenterTitle">EDIT MENU CATEGORY</h5>
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
              <label>Menu Group<strong class="text-red"> *</strong></label>
              <select class="form-control select2 alphanumericwithspace" name="edit_groupname"id="edit_groupname" style="width: 100%;" description="menu group">
                <option disabled>Please select menu group</option>
                <?php
                    foreach($data['menugroup'] as $item)
                    {
                    echo '<option value="'.$item->menugroupID.'">'.$item->menugroup.'</option>';
                    }
                ?>
              </select>
              <div class="invalid-feedback" id="edit-groupname"></div>    
            </div>
            <div class="col-12 p-2">
              <label>Menu Category<strong class="text-red"> *</strong></label>
              <input class="form-control alphanumericwithspace" value="Pork" name="edit_groupategory" id="edit_groupategory" description="menu category">
              <div class="invalid-feedback" id="edit-groupategory"></div> 
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
          <button type="button" class="btn btn-primary update">UPDATE</button>
        </div>
      </div>
     </form> 
    </div>
  </div>
</div>


<!-- CONFIRMATION FOR EDIT -->
<div class="modal fade" id="edit_groupcategory_confirmation"  role="dialog">
  <div class="modal-dialog modal-dialog-centered"  role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="form-group p-3">
          <div class="row">
          <img style="margin:auto;" width="230px" height="100px" src="<?php echo base_url();?>pages\assets\img\modal\confirmation.png">
          <br>
          <h1 class="text-red" style="margin:auto;">UPDATE MENU CATEGORY</h1>
          <span class="text-secondary" style="margin:auto;">Are you sure you want to update menu category?</span>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal" class="btn btn-outline-danger" id="cncl-edit">NO</button>
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

  $('.select2').select2();

 $('#tabledepartment').DataTable({
      "paging": true
    // false to disable pagination (or any other option)
    });

 $('#add_menu_group_category').on('hidden.bs.modal', function(){
    $(this).find('form')[0].reset("");    
    $(".invalid-feedback").html("");
    $('input').removeClass('is-invalid');
    $('input').removeClass('is-valid');
    $('select').removeClass('is-invalid');
    $('select').removeClass('is-valid');

    $(".select2-selection--single").each(function(){
        $(this).removeClass("is-invalid");
        $(this).removeClass("is-valid");
    });
  });
  $('#edit_menucategory').on('hidden.bs.modal', function(){
    $(this).find('form')[0].reset("");    
    $(".invalid-feedback").html("");
    $('input').removeClass('is-invalid');
    $('input').removeClass('is-valid');
    $('select').removeClass('is-invalid');
    $('select').removeClass('is-valid');

  $(".select2-selection--single").each(function(){
        $(this).removeClass("is-invalid");
        $(this).removeClass("is-valid");
    });  
  });
   
   

  $('#btn-cnl').unbind('click').bind('click', function(){
     $('#add_menu_group_category_confirmation').hide();
      $('#add_menu_group_category').show();
   }); 

      $('#save').unbind('click').bind('click', function(){
     
         var IDArray = ['#addmenugroup','#addmenucategory', '#addstatus'];
         var ErrorIDArray = ['add-menugroup','add-menucategory','add-status'];
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
            $('#add_menu_group_category').hide();
            $('#add_menu_group_category_confirmation').modal({backdrop: 'static', keyboard: false},'show');
            event.preventDefault(); 
            return false;
          } 
    });

   $('#btnsave').unbind('click').bind('click', function(){
      var addstatus = 0;
       var addmenugroup = $('#addmenugroup').val();
       var addmenucategory = $('#addmenucategory').val();
       var statusadd = $('input[name="addstatus"]:checked').val();
       if(statusadd==null){
        var addstatus =0;
       }else{
        var addstatus = statusadd;
       }
     $.ajax({
          url : "<?php echo site_url('MenuCategory/save');?>",
          method : "POST",
          data : {addmenugroup:   addmenugroup,   addmenucategory: addmenucategory,
                  addstatus:  addstatus},
          async : true,
          dataType : 'json',
        success: function(data){
          var result = data.split('|');
          if(result[0]=="false"){
          document.getElementById("add-menugroup").innerHTML = result[1];
          $('#addmenugroup').addClass('is-invalid');
          $("#addmenugroup").focus(); 
          $('#add_menu_group_category_confirmation').modal('hide');
          $('#add_menu_group_category').show();
          
        }else{
          window.location.replace('<?php echo base_url(); ?>menucategory');
          
        }
        },
        error: function(request, textStatus, error) {

        }
        });
       return false;  

  });   
   $('.edit_menucategory').unbind('click').bind('click', function(){
    $(".modal-body #edit_groupname").val($(this).data('menugroupid'));
    $(".modal-body #edit_groupname").trigger("change");
    $(".modal-body #edit_groupategory").val($(this).data('category'));
    $(".modal-body input[name='editstatus'][value='"+$(this).data('status')+"']").prop("checked", true);
    $('.edit').attr('id', $(this).attr('id'));
   });

   $('.update').unbind('click').bind('click', function(){
      var IDArray = ['#edit_groupname','#edit_groupategory', '#editstatus'];
         var ErrorIDArray = ['edit-groupname','edit-groupategory','edit-status'];
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
            $('#edit_menucategory').hide();
            $('#edit_groupcategory_confirmation').modal({backdrop: 'static', keyboard: false},'show');
            event.preventDefault(); 
            return false;
          }
   });


    $('.edit').unbind('click').bind('click', function(){
       var id = $(this).attr('id');
       var editgroupname = $('#edit_groupname').val();
       var editgroupategory = $('#edit_groupategory').val();
       var editstatus = $('input[name="editstatus"]:checked').val();


       $.ajax({
          url : "<?php echo site_url('MenuCategory/update');?>",
          method : "POST",
             method : "POST",
          data : {id:               id,                 editgroupname:   editgroupname,   
                  editgroupategory: editgroupategory,   editstatus:      editstatus},
          async : true,
          dataType : 'json',
        success: function(data){
        var result = data.split('|');
          if(result[0]=="false"){
          document.getElementById("edit-groupname").innerHTML = result[1];
          $('#edit_groupname').addClass('is-invalid');
          $("#addmenugroup").focus(); 
          $('#edit_groupcategory_confirmation').modal('hide');
          $('#edit_menucategory').show();
          
        }else{
          window.location.replace('<?php echo base_url(); ?>MenuCategory');
        }
        },
        error: function(request, textStatus, error) {

        }
        });
       return false;  



       })
    $('#cncl-edit').unbind('click').bind('click', function(){
    $('#edit_groupcategory_confirmation').hide();
    $('#edit_menucategory').show();
  });

  });
</script> 