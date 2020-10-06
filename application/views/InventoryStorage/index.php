<div class="ms-content-wrapper"> 
      <div class="row">
        <div class="col-md-12">
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb pl-0">
                  <li class="breadcrumb-item"><a href="<?= base_url(). 'Dashboard' ?>"><i class="material-icons fs-16">dashboard</i> Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Inventory Storage</li>
              </ol>
          </nav>
        </div>

         <div class="content container-fluid">
         <div class="ms-card">
         <div class="ms-panel-header d-flex justify-content-between align-items-center bg-primary">
              <h6 class="page-title text-white" >LIST OF INVENTORY STORAGE</h6>

              <button class="btn btn-outline-red" data-toggle="modal" data-target="#add_inventorystorage" id="show-add_inventorystorage" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                <i class="fa fa-plus-square"></i>&nbsp;ADD INVENTORY STORAGE
              </button>

        </div>
  
    <div class="col-xl-12 col-md-12">
 <br><br>      
          <div class="table-responsive container-fluid">
            <table id="tableinventorystorage" class="table table-bordered thead-primary dtBasicExample">
              <thead>
                <tr class="text-center">
                  <th>STORAGE CODE</th>
                  <th>STORAGE NAME</th>
                  <th>ADDRESS</th>
                  <th>FLOOR</th>
                  <th>BAY</th>
                  <th>LEVEL</th>
                  <th>STATUS</th>
                  <th>ACTION</th>
                </tr>
              </thead>
                <tbody>
               
                  <?php foreach($inventory_storage as $storage) { ?>
                    <tr>
                      <td><?= $storage['invr_storageCode'] ?></td>
                      <td><?= $storage['invr_storageName'] ?></td>
                      <td><?= $storage['invr_storageAddress'] ?></td>
                      <td><?= $storage['invr_storageFloor'] ?></td>
                      <td><?= $storage['invr_storageBay'] ?></td>
                      <td><?= $storage['invr_storageLevel'] ?></td>
                      <td class="text-center">
                        <?php
                          $status = $storage['invr_storageStatus'] == 1 ? 'Active' : 'Inactive';
                          $badge = $storage['invr_storageStatus'] == 1 ? 'badge-outline-success' : 'badge-outline-danger';
                        ?>
                        <span class="badge <?= $badge ?>"><?= $status ?></span>
                      </td>
                      <td>
                        <div class="drop-down float-right">
                          <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="material-icons" style="font-size: 1.5rem">more_vert</i></a>
                          <ul class="dropdown-menu dropdown-menu-right">
                            <li class="ms-dropdown-list">
                              <a class="media p-2 btn-edit-modal-inventory_storage" 
                                 href="javascript:void(0);"
                                 data-invr_storageid="<?= $storage['invr_storageID'] ?>"
                                 data-invr_storagename="<?= $storage['invr_storageName'] ?>"
                                 data-invr_storageaddress="<?= $storage['invr_storageAddress'] ?>"
                                 data-invr_storagefloor="<?= $storage['invr_storageFloor'] ?>"
                                 data-invr_storagebay="<?= $storage['invr_storageBay'] ?>"
                                 data-invr_storagelevel="<?= $storage['invr_storageLevel'] ?>"
                                 data-invr_storagestatus="<?= $storage['invr_storageStatus'] ?>"
                                 data-user_departmentid="<?= $storage["user_departmentID"] ?>">
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
<br><br>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="add_inventorystorage" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-lg"  role="document">
    <div class="modal-content">
      <div class="modal-header d-flex justify-content-between align-items-start bg-primary">
        <h5 class="modal-title text-light" id="exampleModalCenterTitle">ADD INVENTORY STORAGE</h5>
        <button type="button" class="close btn-close-add-inventorystorage" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="text-light">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="form-group p-3">
          <div class="row">
            
            <div class="col-md-4 col-sm-12 p-2">
              <label>Storage Name <strong class="text-red">*</strong></label>
              <input type="text" class="form-control alphanumericdashunderscorespaceparenthesis" name="add-inventory_storageName" id="add-inventory_storageName" placeholder="Enter Storage Name" autocomplete="off">
              <div class="invalid-feedback" id="add-invalid-inventory_storageName"></div>
            </div>
            <div class="col-md-4 col-sm-12 p-2">
              <label>Department Name </label><br>
              <select class="form-control add-inventory_storageDepartment select2" name="add-inventory_storageDepartment" id="add-inventory_storageDepartment" style="width: 100%">
                <option value="" selected disabled>Select User Department</option>
                <?php foreach ($user_department as $department) { ?>
                  <option value="<?= $department['user_departmentID'] ?>"><?= $department['user_departmentName'] ?></option>
                <?php } ?>
              </select>
              <div class="invalid-feedback" id="add-invalid-inventory_storageDepartment"></div>
            </div>
            <div class="col-md-4 col-sm-12 p-2">
              <label>Address <strong class="text-red">*</strong></label>
              <input class="form-control alphanumericdashcommaspace" placeholder="Enter Storage Address" name="" id="add-inventory_storageAddress" autocomplete="off">
              <div class="invalid-feedback" id="add-invalid-inventory_storageAddress"></div>
            </div>

            <div class="col-md-4 col-sm-12 p-2">
              <label>Floor <strong class="text-red">*</strong></label>
              <input class="form-control alphanumericdashcommaslash" placeholder="Enter Floor (Optional)" name="" id="add-inventory_storageFloor" autocomplete="off">
              <div class="invalid-feedback" id="add-invalid-inventory_storageFloor"></div>
            </div>
            <div class="col-md-4 col-sm-12 p-2">
              <label>Bay <strong class="text-red">*</strong></label>
              <input class="form-control alphanumericdashcommaslash" placeholder="Enter Bay (Optional)" name="" id="add-inventory_storageBay" autocomplete="off">
              <div class="invalid-feedback" id="add-invalid-inventory_storageBay"></div>
            </div>
            <div class="col-md-4 col-sm-12 p-2">
              <label>Level <strong class="text-red">*</strong></label>
              <input class="form-control alphanumericdashcommaslash" placeholder="Enter Level (Optional)" name="" id="add-inventory_storageLevel" autocomplete="off">
              <div class="invalid-feedback" id="add-invalid-inventory_storageLevel"></div>
            </div>


          <div class="col-12 p-2">
            <label>Status <strong class="text-red">*</strong></label>
            <div class="d-flex align-items-center">
              <span> Inactive </span> &nbsp;
                  <label class="ms-switch">
                  <input type="checkbox" checked="" name="add-inventory_storageStatus" id="add-inventory_storageStatus"> 
                  <span class="ms-switch-slider ms-switch-success round"></span>
                  </label> 
              <span>&nbsp; Active </span>
            </div>
          </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <div class="w-100 text-center">
         <button type="button" class="btn btn-primary submit-btn"id="btn-add-inventorystorage"name="save"> ADD</button>
       </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="confirmation_add" tabindex="-1" role="dialog" aria-labelledby="confirmation_add" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-min" role="document">
    <div class="modal-content">
        <div class="modal-body pb-3 text-center">
          <button type="button" class="close" id="btn-add-inventorystorage-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <img class="isometric confirmationisometric" width="230px" height="100px" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/modal/confirmation.png">
        <h1 class="text-red text-center font-weight-bold">ADD INVENTORY STORAGE</h1>
            <p class="text-center my-2">Are you sure you want to add storage location?</p>
            <div class="invalid-feedback d-flex justify-content-center align-items-center" id="confirmation-add-invalid"></div>
        </div>
        <div class="modal-footer">
          <div class="w-100 text-center">
          <button type="button" data-dismiss="modal" class="btn btn-outline-primary shadow-none" id="btn-add-inventorystorage-close">NO</button>
            <button type="button" class="btn btn-primary shadow-none" id="btn-add-save-inventory_storage">YES</button>
        </div>
        </div>
    </div>
  </div>
</div>

<div class="modal fade" id="edit_inventorystorage" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-lg"  role="document">
    <div class="modal-content">
      <div class="modal-header d-flex justify-content-between align-items-start bg-primary">
        <h5 class="modal-title text-light" id="exampleModalCenterTitle">EDIT INVENTORY STORAGE</h5>
        <button type="button" class="close btn-close-edit-inventorystorage" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="text-light">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="form-group p-3">
          <div class="row">
            <input type="hidden" name="edit-inventory_storageID" id="edit-inventory_storageID">
            <div class="col-md-4 col-sm-12 p-2">
              <label>Storage Name <strong class="text-red">*</strong></label>
              <input type="text" class="form-control alphanumericdashunderscorespaceparenthesis" name="edit-inventory_storageName" id="edit-inventory_storageName" placeholder="Enter Storage Name" autocomplete="off">
              <div class="invalid-feedback" id="edit-invalid-inventory_storageName"></div>
            </div>
            <div class="col-md-4 col-sm-12 p-2">
              <label>Department Name </label>
              <select class="form-control edit-inventory_storageDepartment select2" name="edit-inventory_storageDepartment" id="edit-inventory_storageDepartment" style="width: 100%">
                <option value="" selected disabled>Select User Department</option>
                <?php foreach ($user_department as $department) { ?>
                  <option value="<?= $department['user_departmentID'] ?>"><?= $department['user_departmentName'] ?></option>
                <?php } ?>
              </select>
              <div class="invalid-feedback" id="edit-invalid-inventory_storageDepartment"></div>
            </div>
            <div class="col-md-4 col-sm-12 p-2">
              <label>Address <strong class="text-red">*</strong></label>
              <input class="form-control alphanumericdashcommaspace" placeholder="Enter Storage Address" name="" id="edit-inventory_storageAddress" autocomplete="off">
              <div class="invalid-feedback" id="edit-invalid-inventory_storageAddress"></div>
            </div>

            <div class="col-md-4 col-sm-12 p-2">
              <label>Floor <strong class="text-red">*</strong></label>
              <input class="form-control alphanumericdashcommaslash" placeholder="Enter Floor (Optional)" name="" id="edit-inventory_storageFloor" autocomplete="off">
              <div class="invalid-feedback" id="edit-invalid-inventory_storageFloor"></div>
            </div>
            <div class="col-md-4 col-sm-12 p-2">
              <label>Bay <strong class="text-red">*</strong></label>
              <input class="form-control alphanumericdashcommaslash" placeholder="Enter Bay (Optional)" name="" id="edit-inventory_storageBay" autocomplete="off">
              <div class="invalid-feedback" id="edit-invalid-inventory_storageBay"></div>
            </div>
            <div class="col-md-4 col-sm-12 p-2">
              <label>Level <strong class="text-red">*</strong></label>
              <input class="form-control alphanumericdashcommaslash" placeholder="Enter Level (Optional)" name="" id="edit-inventory_storageLevel" autocomplete="off">
              <div class="invalid-feedback" id="edit-invalid-inventory_storageLevel"></div>
            </div>


          <div class="col-12 p-2">
            <label>Status <strong class="text-red">*</strong></label>
            <div class="d-flex align-items-center">
              <span> Inactive </span> &nbsp;
                  <label class="ms-switch">
                  <input type="checkbox" checked="" name="edit-inventory_storageStatus" id="edit-inventory_storageStatus"> 
                  <span class="ms-switch-slider ms-switch-success round"></span>
                  </label> 
              <span>&nbsp; Active </span>
            </div>
          </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <div class="w-100 text-center">
         <button type="button" class="btn btn-primary submit-btn"id="btn-edit-inventorystorage"name="save"> UPDATE</button>
       </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="confirmation_edit" tabindex="-1" role="dialog" aria-labelledby="confirmation_edit" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-min" role="document">
    <div class="modal-content">
        <div class="modal-body pb-3 text-center">
          <button type="button" class="close" id="btn-edit-inventorystorage-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <img class="isometric confirmationisometric" width="230px" height="100px" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/modal/confirmation.png">
        <h1 class="text-red text-center font-weight-bold">EDIT INVENTORY STORAGE</h1>
            <p class="text-center my-2">Are you sure you want to update storage location?</p>
            <div class="invalid-feedback d-flex justify-content-center align-items-center" id="confirmation-edit-invalid"></div>
        </div>
        <div class="modal-footer">
          <div class="w-100 text-center">
          <button type="button" data-dismiss="modal" class="btn btn-outline-primary shadow-none" id="btn-edit-inventorystorage-close">NO</button>
            <button type="button" class="btn btn-primary shadow-none" id="btn-edit-save-inventory_storage">YES</button>
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
    $('.select2').select2();
    $('#tableinventorystorage').DataTable();

    const elemArr = ["inventory_storageName", "inventory_storageAddress", "inventory_storageFloor", "inventory_storageBay", "inventory_storageLevel"];
    const elemArrText = ["Storage Name", "Storage Address", "Floor", "Bay", "Level"];
    const elemArrLength = elemArr.length;

    function validateInputs(todo = "add") {
      const focusElem = [];
      let count = 0;
      for (var i=0; i<elemArrLength; i++) {
        const elem = $("#"+todo+"-"+elemArr[i]).val();
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

    const saveInventoryStorage = (data, todo) => {
      const controllerTodo = todo == "add" ? "<?= site_url('InventoryStorage/save');?>" : "<?= site_url('InventoryStorage/update');?>";
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
            window.location.replace('<?= base_url().'InventoryStorage' ?>');
          }
        }
      })
    }

    $(document).on("click", "#btn-edit-save-inventory_storage", function() {
      const inventory_storageID = $("#edit-inventory_storageID").val().trim();
      const inventory_storageName = $("#edit-inventory_storageName").val().trim();
      const inventory_storageDepartment = $("#edit-inventory_storageDepartment").val() ? $("#edit-inventory_storageDepartment").val() : null;
      const inventory_storageAddress = $("#edit-inventory_storageAddress").val().trim();
      const inventory_storageFloor = $("#edit-inventory_storageFloor").val().trim();
      const inventory_storageBay = $("#edit-inventory_storageBay").val().trim();
      const inventory_storageLevel = $("#edit-inventory_storageLevel").val().trim();
      const inventory_storageStatus = $("input[id='edit-inventory_storageStatus']:checked").val() ? 1 : 0;

      const data = {
        inventory_storageID,
        inventory_storageName,
        inventory_storageDepartment,
        inventory_storageAddress,
        inventory_storageFloor,
        inventory_storageBay,
        inventory_storageLevel,
        inventory_storageStatus
      };
      saveInventoryStorage(data, "edit");
    })

    $(document).on("click", "#btn-add-save-inventory_storage", function() {
      const inventory_storageName = $("#add-inventory_storageName").val().trim();
      const inventory_storageDepartment = $("#add-inventory_storageDepartment").val() ? $("#add-inventory_storageDepartment").val() : null;
      const inventory_storageAddress = $("#add-inventory_storageAddress").val().trim();
      const inventory_storageFloor = $("#add-inventory_storageFloor").val().trim();
      const inventory_storageBay = $("#add-inventory_storageBay").val().trim();
      const inventory_storageLevel = $("#add-inventory_storageLevel").val().trim();
      const inventory_storageStatus = $("input[id='add-inventory_storageStatus']:checked").val() ? 1 : 0;

      const data = {
        inventory_storageName,
        inventory_storageDepartment,
        inventory_storageAddress,
        inventory_storageFloor,
        inventory_storageBay,
        inventory_storageLevel,
        inventory_storageStatus
      };
      saveInventoryStorage(data, "add");
    })

    $(document).on("click", ".btn-edit-modal-inventory_storage", function() {
      const inventory_storageID = $(this).data("invr_storageid");
      const inventory_storageName = $(this).data("invr_storagename");
      const inventory_storageAddress = $(this).data("invr_storageaddress");
      const inventory_storageFloor = $(this).data("invr_storagefloor");
      const inventory_storageBay = $(this).data("invr_storagebay");
      const inventory_storageLevel = $(this).data("invr_storagelevel");
      const inventory_storageStatus = $(this).data("invr_storagestatus") == 1 ? true : false;
      const user_departmentID = $(this).data("user_departmentid");

      $("#edit-inventory_storageID").val(inventory_storageID);
      $("#edit-inventory_storageName").val(inventory_storageName);
      $("#edit-inventory_storageAddress").val(inventory_storageAddress);
      $("#edit-inventory_storageFloor").val(inventory_storageFloor);
      $("#edit-inventory_storageBay").val(inventory_storageBay);
      $("#edit-inventory_storageLevel").val(inventory_storageLevel);
      $("#edit-inventory_storageLevel").val(inventory_storageLevel);
      $("input[id='edit-inventory_storageStatus']").prop("checked", inventory_storageStatus);
      $("#edit-inventory_storageDepartment").val(user_departmentID).trigger('change');

      $("#edit_inventorystorage").modal("show");
    })

    $(document).on("click", ".btn-close-add-inventorystorage, .btn-close-edit-inventorystorage", function() {
      clearInputs();
    })

    $(document).on("click", "#btn-edit-inventorystorage-close", function() {
      $("#confirmation-edit-invalid").html("");
      $("#edit_inventorystorage").modal("show");
      $("#confirmation_edit").modal("hide");
    })

    $(document).on("click", "#btn-add-inventorystorage-close", function() {
      $("#confirmation-add-invalid").html("");
      $("#add_inventorystorage").modal("show");
      $("#confirmation_add").modal("hide");
    })

    $(document).on("click", "#btn-edit-inventorystorage", function() {
      const validate = validateInputs("edit");
      if (validate) {
        $("#edit_inventorystorage").modal("hide");
        $("#confirmation_edit").modal("show");
      }
    })

    $(document).on("click", "#btn-add-inventorystorage", function() {
      const validate = validateInputs("add");
      if (validate) {
        $("#add_inventorystorage").modal("hide");
        $("#confirmation_add").modal("show");
      }
    })

    /*$(document).on("click", "#show-add_inventorystorage", function() {
      $("#add_inventorystorage").modal("show");
      $('.add-inventory_storageDepartment').select2({
        tags: true,
        dropdownParent: $("#add_inventorystorage");
      });
    })*/

    

  });
</script> 