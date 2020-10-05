<div class="ms-content-wrapper"> 
      <div class="row">
        <div class="col-md-12">
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb pl-0">
                 <li class="breadcrumb-item"><a href="<?= base_url(). 'Dashboard' ?>"><i class="material-icons fs-16">dashboard</i> Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Inventory Group</li>
              </ol>
          </nav>
        </div>
         <div class="content container-fluid">
         <div class="ms-card">
         <div class="ms-card-header d-flex justify-content-between align-items-center bg-primary">
              <h6 class="page-title text-white" >LIST OF INVENTORY GROUP</h6>

              <button class="btn btn-outline-red" data-toggle="modal" data-target="#add_inventorygroup">
                <i class="fa fa-plus-square fa-lg"></i> ADD GROUP
              </button>

        </div>
  
    <div class="col-xl-12 col-md-12">
 <br><br>      
          <div class="table-responsive container-fluid">
            <table id="tabledepartment" class="table table-bordered thead-primary dtBasicExample">
              <thead>
                <tr class="text-center">
                  <th>CODE</th>
                  <th>NAME</th>
                  <th>DESCRIPTION</th>
                  <th>STATUS</th>
                  <th>ACTION</th>
                </tr>
              </thead>
                <tbody>
                <?php foreach($inventory_groups as $inventory_group) { ?>
                  <tr>
                    <td><?= $inventory_group["invr_groupCode"] ?></td>
                    <td><?= $inventory_group["invr_groupName"] ?></td>
                    <td><?= $inventory_group["invr_groupDescription"] ?></td>
                    <td class="text-center">
                      <?php
                        $status = $inventory_group['invr_groupStatus'] == 1 ? 'Active' : 'Inactive';
                        $badge = $inventory_group['invr_groupStatus'] == 1 ? 'badge-outline-success' : 'badge-outline-danger';
                      ?>
                      <span class="badge <?= $badge ?>"><?= $status ?></span>
                    </td>
                    <td>
                      <div class="drop-down float-right">
                        <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="material-icons" style="font-size: 1.5rem">more_vert</i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                          <li class="ms-dropdown-list">
                            <a class="media p-2 btn-edit-modal-inventory_group"
                              data-invr_groupid="<?= $inventory_group["invr_groupID"] ?>"
                              data-invr_groupcode="<?= $inventory_group["invr_groupCode"] ?>"
                              data-invr_groupname="<?= $inventory_group["invr_groupName"] ?>"
                              data-invr_groupdescription="<?= $inventory_group["invr_groupDescription"] ?>"
                              data-invr_groupstatus="<?= $inventory_group["invr_groupStatus"] ?>"
                              href="javascript:void(0);">
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
                  <!-- <tr>
                    <td>1</td>
                    <td>Condiments</td>
                    <td>A condiment is a spice, sauce, or preparation that is added to food</td>
                    <td class="text-center">
                      <span class="badge badge-outline-success">Active</span>
                    </td>
                    <td>
                      <div class="drop-down float-right">
                        <a href="#" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false"> <i class="material-icons" style="font-size: 1.5rem">more_vert</i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                          <li class="ms-dropdown-list">
                            <a class="media p-2" href="#">
                              <div class="media-body editinventoryitem"
                             
                                   data-controls-modal="your_div_id" 
                                   data-backdrop="static" 
                                   data-keyboard="false" 
                                   data-toggle="modal" 
                                   data-target="#edit_inventorygroup" 
                                   href="javascript:void(0);" 
                                   id="" >
                                <i class="fas fa-pencil-alt text-secondary" style="font-size: 1rem"></i><span> Edit</span>
                              </div>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr> -->
         
                </tbody>
            </table>
          </div>
<br><br>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="add_inventorygroup" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered"  role="document">
    <div class="modal-content">
      <div class="modal-header d-flex justify-content-between align-items-start bg-primary">
           <h5 class="modal-title text-light" id="exampleModalCenterTitle">ADD INVENTORY GROUP</h5>
           <button type="button" class="close btn-close-add-inventorygroup" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="text-light">&times;</span></button>
       </div>
      <div class="modal-body">
        <div class="form-group p-3">
          <div class="row">
            <div class="col-12 p-2">
              <label>Group Name <strong class="text-red">*</strong></label>
              <input type="text" class="form-control alphanumericdashspace" name="" id="add-inventory_groupName" placeholder="Please enter group name">
              <div class="invalid-feedback" id="add-invalid-inventory_groupName"></div>
            </div>
            <div class="col-12 p-2">
              <label>Description <strong class="text-red">*</strong></label>
              <textarea class="form-control alphabetspacezero" placeholder="Please enter group description" name="" id="add-inventory_groupDescription"></textarea>
              <div class="invalid-feedback" id="add-invalid-inventory_groupDescription"></div>
            </div>
          <div class="col-12 p-2">
            <label>Status <strong class="text-red">*</strong></label>
            <div class="d-flex align-items-center">
              <span> Inactive </span> &nbsp;
                  <label class="ms-switch">
                  <input type="checkbox" checked="" name="add-inventory_groupStatus" id="add-inventory_groupStatus"> 
                  <span class="ms-switch-slider ms-switch-success round"></span>
                  </label> 
              <span>&nbsp; Active </span>
            </div>
            <div class="invalid-feedback" id="add-invalid-inventory_groupStatus"></div>
          </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
           <div class="w-100 text-center">
               <button type="button" class="btn btn-primary submit-btn"id="btn-add-inventorygroup"name="save"> ADD</button>
           </div>
       </div>
    </div>
  </div>
</div>

<!-- Confirmation ADD  -->
 <div class="modal fade" id="confirmation_add" tabindex="-1" role="dialog" aria-labelledby="confirmation_add" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-min" role="document">
    <div class="modal-content">
        <div class="modal-body pb-3 text-center">
          <button type="button" class="close" id="btn-add-inventorygroup-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <img class="isometric confirmationisometric" width="230px" height="100px" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/modal/confirmation.png">
        <h1 class="text-red text-center font-weight-bold">ADD INVENTORY GROUP</h1>
            <p class="text-center my-2">Are you sure you want to add inventory group?</p>
            <div class="invalid-feedback d-flex justify-content-center align-items-center" id="confirmation-add-invalid"></div>
        </div>
        <div class="modal-footer">
          <div class="w-100 text-center">
          <button type="button" data-dismiss="modal" class="btn btn-outline-primary shadow-none" id="btn-add-inventorygroup-close">NO</button>
            <button type="button" class="btn btn-primary shadow-none" id="btn-add-save-inventory_group">YES</button>
        </div>
        </div>
    </div>
  </div>
</div>


<!-- EDIT MODAL -->
<div class="modal fade" id="edit_inventorygroup" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered"  role="document">
    <div class="modal-content">
      <div class="modal-header d-flex justify-content-between align-items-start bg-primary">
           <h5 class="modal-title text-light" id="exampleModalCenterTitle">EDIT INVENTORY GROUP</h5>
           <button type="button" class="close btn-close-edit-inventorygroup" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="text-light">&times;</span></button>
       </div>
      <div class="modal-body">
      <input type="hidden" name="edit-inventory_groupID" id="edit-inventory_groupID">
        <div class="form-group p-3">
          <div class="row">
            <div class="col-12 p-2">
              <label>Group Name <strong class="text-red">*</strong></label>
              <input type="text" class="form-control alphanumericdashspace" name="" id="edit-inventory_groupName" placeholder="Please enter group name">
              <div class="invalid-feedback" id="edit-invalid-inventory_groupName"></div>
            </div>
            <div class="col-12 p-2">
              <label>Description <strong class="text-red">*</strong></label>
              <textarea class="form-control alphabetspacezero" placeholder="Please enter group description" name="" id="edit-inventory_groupDescription"></textarea>
              <div class="invalid-feedback" id="edit-invalid-inventory_groupDescription"></div>
            </div>
          <div class="col-12 p-2">
            <label>Status <strong class="text-red">*</strong></label>
            <div class="d-flex align-items-center">
              <span> Inactive </span> &nbsp;
                  <label class="ms-switch">
                  <input type="checkbox" checked="" name="edit-inventory_groupStatus" id="edit-inventory_groupStatus"> 
                  <span class="ms-switch-slider ms-switch-success round"></span>
                  </label> 
              <span>&nbsp; Active </span>
            </div>
            <div class="invalid-feedback" id="edit-invalid-inventory_groupStatus"></div>
          </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
           <div class="w-100 text-center">
               <button type="button" class="btn btn-primary submit-btn"id="btn-edit-inventorygroup"name="save"> UPDATE</button>
           </div>
       </div>
    </div>
  </div>
</div>

<!-- Confirmation Edit  -->
<div class="modal fade" id="confirmation_edit" tabindex="-1" role="dialog" aria-labelledby="confirmation_edit" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-min" role="document">
    <div class="modal-content">
        <div class="modal-body pb-3 text-center">
          <button type="button" class="close" id="btn-edit-inventorygroup-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <img class="isometric confirmationisometric" width="230px" height="100px" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/modal/confirmation.png">
        <h1 class="text-red text-center font-weight-bold">UPDATE INVENTORY GROUP</h1>
            <p class="text-center my-2">Are you sure you want to update this inventory group?</p>
            <div class="invalid-feedback" id="confirmation-edit-invalid"></div>
        </div>
        <div class="modal-footer">
          <div class="w-100 text-center">
          <button type="button" data-dismiss="modal" class="btn btn-outline-primary shadow-none" id="btn-edit-inventorygroup-close">NO</button>
            <button type="button" class="btn btn-primary shadow-none" id="btn-edit-save-inventory_group">YES</button>
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

    $('#tabledepartment').DataTable();

    const elemArr = ["inventory_groupName", "inventory_groupDescription"];
    const elemArrText = ["Group Name", "Description"];
    const elemArrLength = elemArr.length;

    function validateInputs(todo = "add") {
      const focusElem = [];
      let count = 0;
      for (var i=0; i<elemArrLength; i++) {
        const elem = $("#"+todo+"-"+elemArr[i]).val();
        console.log(elem);
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

    const saveInventoryGroup = (data, todo) => {
      const controllerTodo = todo == "add" ? "<?= site_url('InventoryGroup/save');?>" : "<?= site_url('InventoryGroup/update');?>";
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
            window.location.replace('<?= base_url().'InventoryGroup' ?>');
          }
        }
      })
    }

    $(document).on("click", "#btn-edit-save-inventory_group", function() {
      const inventory_groupID = $("#edit-inventory_groupID").val().trim();
      const inventory_groupName = $("#edit-inventory_groupName").val().trim();
      const inventory_groupDescription = $("#edit-inventory_groupDescription").val().trim();
      const inventory_groupStatus = $("input[id='edit-inventory_groupStatus']:checked").val() ? 1 : 0;

      const data = {
        inventory_groupID,
        inventory_groupName,
        inventory_groupDescription,
        inventory_groupStatus
      };
      saveInventoryGroup(data, "edit");
    })

    $(document).on("click", "#btn-add-save-inventory_group", function() {
      const inventory_groupName = $("#add-inventory_groupName").val().trim();
      const inventory_groupDescription = $("#add-inventory_groupDescription").val().trim();
      const inventory_groupStatus = $("input[id='add-inventory_groupStatus']:checked").val() ? 1 : 0;

      const data = {
        inventory_groupName,
        inventory_groupDescription,
        inventory_groupStatus
      };
      saveInventoryGroup(data, "add");
    })

    $(document).on("click", ".btn-edit-modal-inventory_group", function() {
      const inventory_groupID = $(this).data("invr_groupid");
      const inventory_groupName = $(this).data("invr_groupname");
      const inventory_groupDescription = $(this).data("invr_groupdescription");
      const inventory_groupStatus = $(this).data("invr_groupstatus") == 1 ? true : false;

      $("#edit-inventory_groupID").val(inventory_groupID);
      $("#edit-inventory_groupName").val(inventory_groupName);
      $("#edit-inventory_groupDescription").val(inventory_groupDescription);
      $("input[id='edit-inventory_groupStatus']").prop("checked", inventory_groupStatus);

      $("#edit_inventorygroup").modal("show");
    })

    $(document).on("click", ".btn-close-add-inventorygroup, .btn-close-edit-inventorygroup", function() {
      clearInputs();
    })

    $(document).on("click", "#btn-edit-inventorygroup-close", function() {
      $("#edit_inventorygroup").modal("show");
      $("#confirmation_edit").modal("hide");
    })

    $(document).on("click", "#btn-add-inventorygroup-close", function() {
      $("#add_inventorygroup").modal("show");
      $("#confirmation_add").modal("hide");
    })

    $(document).on("click", "#btn-edit-inventorygroup", function() {
      const validate = validateInputs("edit");
      if (validate) {
        $("#edit_inventorygroup").modal("hide");
        $("#confirmation_edit").modal("show");
      }
    })

    $(document).on("click", "#btn-add-inventorygroup", function() {
      const validate = validateInputs("add");
      if (validate) {
        $("#add_inventorygroup").modal("hide");
        $("#confirmation_add").modal("show");
      }
    })

    // $('.btn-add').click(function(){
    //   $('#add_modal').modal('hide');
    //   $('#add_confirmation').modal('show');
    // });

    // $('.btn-no-confirmation').click(function(){
    //   $('#add_modal').modal('show');
    //   $('#add_confirmation').modal('hide');
    // });


    // $('.btn-edit').click(function(){
    //   $('#edit_modal').modal('hide');
    //   $('#edit_confirmation').modal('show');
    // });

    // $('.btn-no-confirmation-edit').click(function(){
    //   $('#edit_modal').modal('show');
    //   $('#edit_confirmation').modal('hide');
    // });

  });
</script>