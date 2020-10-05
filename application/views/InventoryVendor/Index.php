<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12">
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb pl-0">
                  <li class="breadcrumb-item"><a href="<?= base_url(). 'Dashboard' ?>"><i class="material-icons fs-16">dashboard</i> Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Inventory Vendor</li>
              </ol>
          </nav>
        </div>
        <div class="col-md-12">
            <div class="ms-panel">
              <div class="ms-panel-header bg-primary d-flex justify-content-between align-items-center">
                  <h6 class="text-light">LIST OF INVENTORY VENDOR</h6>
                  <button class="btn btn-outline-red" data-toggle="modal" data-target="#add_inventoryvendor">
                    <i class="fa fa-plus-square fa-lg"></i> ADD INVENTORY VENDOR
                  </button>
              </div>
              <div class="ms-panel-body">
                <div class="row">
                  <div class="col-12">
                    <div class="table-responsive">
                      <table id="table-inventory-vendor" class="table table-bordered thead-primary dtBasicExample">
                        <thead>
                          <tr class="text-center">
                            <th>CODE</th>
                            <th>SUPPLIER NAME</th>
                            <th>ADDRESS</th>
                            <th>CONTACT PERSON</th>
                            <th>CONTACT NUMBER</th>
                            <th>TIN NUMBER</th>
                            <th>STATUS</th>
                            <th>ACTION</th>
                          </tr>
                        </thead>
                          <tbody>
                            <?php foreach($inventory_vendors as $inventory_vendor) { ?>
                              <tr>
                                <td><?= $inventory_vendor['invr_vendorCode'] ?></td>
                                <td><?= $inventory_vendor['invr_vendorName'] ?></td>
                                <td><?= $inventory_vendor['invr_vendorAddress'] ?></td>
                                <td><?= $inventory_vendor['invr_vendorContactperson'] ?></td>
                                <td><?= $inventory_vendor['invr_vendorContactnumber'] ?></td>
                                <td><?= $inventory_vendor['invr_vendorTin'] ?></td>
                                <td class="text-center">
                                  <?php
                                    $status = $inventory_vendor['invr_vendorStatus'] == 1 ? 'Active' : 'Inactive';
                                    $badge = $inventory_vendor['invr_vendorStatus'] == 1 ? 'badge-outline-success' : 'badge-outline-danger';
                                  ?>
                                  <span class="badge <?= $badge ?>"><?= $status ?></span>
                                </td>
                                <td>
                                  <div class="drop-down float-right">
                                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="material-icons" style="font-size: 1.5rem">more_vert</i></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                      <li class="ms-dropdown-list">
                                        <a class="media p-2 btn-edit-modal-inventory_vendor" 
                                        data-invr_vendorid="<?= $inventory_vendor['invr_vendorID'] ?>"
                                        data-invr_vendorname="<?= $inventory_vendor['invr_vendorName'] ?>"
                                        data-invr_vendoraddress="<?= $inventory_vendor['invr_vendorAddress'] ?>"
                                        data-invr_vendorcontactperson="<?= $inventory_vendor['invr_vendorContactperson'] ?>"
                                        data-invr_vendorcontactnumber="<?= $inventory_vendor['invr_vendorContactnumber'] ?>"
                                        data-invr_vendortin="<?= $inventory_vendor['invr_vendorTin'] ?>"
                                        data-invr_vendorstatus="<?= $inventory_vendor['invr_vendorStatus'] ?>"
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

<!-- Add Modal Inventory Vendor -->
<div class="modal fade" id="add_inventoryvendor" tabindex="-1" role="dialog" aria-labelledby="add_inventoryvendor" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header d-flex justify-content-between align-items-start bg-primary">
        <h5 class="modal-title text-light" id="exampleModalCenterTitle">ADD INVENTORY VENDOR</h5>
        <button type="button" class="close btn-close-add-inventoryvendor" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="text-light">&times;</span></button>
      </div>
      <div class="modal-body">
      
        <div class="form-group">
          <label>Supplier Name <strong class="text-red">*</strong></label>
          <input type="text" autocomplete="off" class="form-control alphanumericdashunderscorespaceparenthesis" name="add-inventory_vendorSupplier" id="add-inventory_vendorSupplier">
          <div class="invalid-feedback" id="add-invalid-inventory_vendorSupplier"></div>
        </div>
        <div class="form-group">
          <label>Address <strong class="text-red">*</strong></label>
          <input type="text" autocomplete="off" class="form-control alphanumericdashspacecomma" name="add-inventory_vendorAddress" id="add-inventory_vendorAddress">
          <div class="invalid-feedback" id="add-invalid-inventory_vendorAddress"></div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label>Contact Person <strong class="text-red">*</strong></label>
              <input type="text" autocomplete="off" class="form-control alphanumericdashspace" name="add-inventory_vendorContactperson" id="add-inventory_vendorContactperson">
              <div class="invalid-feedback" id="add-invalid-inventory_vendorContactperson"></div>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label>Contact Number <strong class="text-red">*</strong></label>
              <input type="text" autocomplete="off" class="form-control contactnumber" maxlength="11" name="add-inventory_vendorContactnumber" id="add-inventory_vendorContactnumber">
              <div class="invalid-feedback" id="add-invalid-inventory_vendorContactnumber"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <div class="form-group">
              <label for="">TIN <strong class="text-red">*</strong></label>
              <input type="text" autocomplete="off" class="form-control tinnumber" maxlength="15" name="add-inventory_vendorTin" id="add-inventory_vendorTin">
              <div class="invalid-feedback" id="add-invalid-inventory_vendorTin"></div>
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-5 col-sm-12">
                <div class="form-group">
                  <label>VAT <strong class="text-red">*</strong></label>
                  <div class="d-flex justify-content-center align-items-center">
                    <span> NO &nbsp;</span>
                    <label class="ms-switch">
                      <input type="checkbox" checked="" name="add-inventory_vendorVat"id="add-inventory_vendorVat"> 
                      <span class="ms-switch-slider ms-switch-success round"></span>
                    </label> 
                    <span>&nbsp; YES </span>
                  </div>
                </div>
                <div class="invalid-feedback" id="add-invalid-inventory_vendorVat"></div>
              </div>
              <div class="col-md-7 col-sm-12">
                <div class="form-group">
                  <label>Status <strong class="text-red">*</strong></label>
                  <div class="d-flex justify-content-center align-items-center">
                    <span> Inactive &nbsp;</span> 
                    <label class="ms-switch">
                      <input type="checkbox" checked="" name="add-inventory_vendorStatus" id="add-inventory_vendorStatus"> 
                      <span class="ms-switch-slider ms-switch-success round"></span>
                    </label> 
                    <span>&nbsp; Active </span>
                  </div>
                </div>
                <div class="invalid-feedback" id="add-invalid-inventory_vendorStatus"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
         <div class="w-100 text-center">
             <button type="button" class="btn btn-primary submit-btn"id="btn-add-inventoryvendor"name="save"> ADD</button>
         </div>
     </div>
    </div>
  </div>
</div>

<div class="modal fade" id="confirmation_add" tabindex="-1" role="dialog" aria-labelledby="confirmation_add" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-min" role="document">
    <div class="modal-content">
        <div class="modal-body pb-3 text-center">
          <button type="button" id="btn-add-inventoryvendor-close" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <img class="isometric confirmationisometric" width="230px" height="100px" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/modal/confirmation.png">
        <h1 class="text-red text-center">ADD INVENTORY VENDOR</h1>
            <h6 class="text-center my-2">Are you sure you want to add Inventory Vendor?</h6>
            <div class="invalid-feedback d-flex justify-content-center align-items-center" id="confirmation-add-invalid"></div>
        </div>
        <div class="modal-footer">
          <div class="w-100 text-center">
            <button type="button" data-dismiss="modal" class="btn btn-outline-primary shadow-none" id="btn-add-inventoryvendor-close">NO</button>
            <button type="button" class="btn btn-primary shadow-none" id="btn-add-save-inventory_vendor">YES</button>
        </div>
        </div>
    </div>
  </div>
</div>

<div class="modal fade" id="edit_inventoryvendor" tabindex="-1" role="dialog" aria-labelledby="edit_inventoryvendor" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header d-flex justify-content-between align-items-start bg-primary">
        <h5 class="modal-title text-light" id="exampleModalCenterTitle">EDIT INVENTORY VENDOR</h5>
        <button type="button" class="close btn-close-edit-inventoryvendor" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="text-light">&times;</span></button>
      </div>
      <div class="modal-body">
        <input type="hidden" name="edit-inventory_vendorID" id="edit-inventory_vendorID">
        <div class="form-group">
          <label>Supplier Name <strong class="text-red">*</strong></label>
          <input type="text" autocomplete="off" class="form-control alphanumericdashunderscorespaceparenthesis" name="edit-inventory_vendorSupplier" id="edit-inventory_vendorSupplier">
          <div class="invalid-feedback" id="edit-invalid-inventory_vendorSupplier"></div>
        </div>
        <div class="form-group">
          <label>Address <strong class="text-red">*</strong></label>
          <input type="text" autocomplete="off" class="form-control alphanumericdashspacecomma" name="edit-inventory_vendorAddress" id="edit-inventory_vendorAddress">
          <div class="invalid-feedback" id="edit-invalid-inventory_vendorAddress"></div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label>Contact Person <strong class="text-red">*</strong></label>
              <input type="text" autocomplete="off" class="form-control alphanumericdashspace" name="edit-inventory_vendorContactperson" id="edit-inventory_vendorContactperson">
              <div class="invalid-feedback" id="edit-invalid-inventory_vendorContactperson"></div>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label>Contact Number <strong class="text-red">*</strong></label>
              <input type="text" autocomplete="off" class="form-control contactnumber" maxlength="11" name="edit-inventory_vendorContactnumber" id="edit-inventory_vendorContactnumber">
              <div class="invalid-feedback" id="edit-invalid-inventory_vendorContactnumber"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <div class="form-group">
              <label for="">TIN <strong class="text-red">*</strong></label>
              <input type="text" autocomplete="off" class="form-control tinnumber" maxlength="15" name="edit-inventory_vendorTin" id="edit-inventory_vendorTin">
              <div class="invalid-feedback" id="edit-invalid-inventory_vendorTin"></div>
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-5 col-sm-12">
                <div class="form-group">
                  <label>VAT <strong class="text-red">*</strong></label>
                  <div class="d-flex justify-content-center align-items-center">
                    <span> NO &nbsp;</span>
                    <label class="ms-switch">
                      <input type="checkbox" checked="" name="edit-inventory_vendorVat"id="edit-inventory_vendorVat"> 
                      <span class="ms-switch-slider ms-switch-success round"></span>
                    </label> 
                    <span>&nbsp; YES </span>
                  </div>
                </div>
                <div class="invalid-feedback" id="edit-invalid-inventory_vendorVat"></div>
              </div>
              <div class="col-md-7 col-sm-12">
                <div class="form-group">
                  <label>Status <strong class="text-red">*</strong></label>
                  <div class="d-flex justify-content-center align-items-center">
                    <span> Inactive &nbsp;</span> 
                    <label class="ms-switch">
                      <input type="checkbox" checked="" name="edit-inventory_vendorStatus" id="edit-inventory_vendorStatus"> 
                      <span class="ms-switch-slider ms-switch-success round"></span>
                    </label> 
                    <span>&nbsp; Active </span>
                  </div>
                </div>
                <div class="invalid-feedback" id="edit-invalid-inventory_vendorStatus"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
         <div class="w-100 text-center">
             <button type="button" class="btn btn-primary submit-btn"id="btn-edit-inventoryvendor"name="save"> UPDATE</button>
         </div>
     </div>
    </div>
  </div>
</div>

<div class="modal fade" id="confirmation_edit" tabindex="-1" role="dialog" aria-labelledby="confirmation_edit" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-min" role="document">
    <div class="modal-content">
        <div class="modal-body pb-3 text-center">
          <button type="button" id="btn-edit-inventoryvendor-close" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <img class="isometric confirmationisometric" width="230px" height="100px" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/modal/confirmation.png">
        <h1 class="text-red text-center">UPDATE INVENTORY VENDOR</h1>
            <h6 class="text-center my-2">Are you sure you want to update Inventory Vendor?</h6>
            <div class="invalid-feedback d-flex justify-content-center align-items-center" id="confirmation-edit-invalid"></div>
        </div>
        <div class="modal-footer">
          <div class="w-100 text-center">
            <button type="button" data-dismiss="modal" class="btn btn-outline-primary shadow-none" id="btn-edit-inventoryvendor-close">NO</button>
            <button type="button" class="btn btn-primary shadow-none" id="btn-edit-save-inventory_vendor">YES</button>
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

<script>
  $(document).ready(function() {
    $("#table-inventory-vendor").DataTable();

    const elemArr = ["inventory_vendorSupplier", "inventory_vendorAddress", "inventory_vendorContactperson", "inventory_vendorContactnumber", "inventory_vendorTin"];
    const elemArrText = ["Supplier", "Address", "Contact Person", "Contact Number", "TIN"];
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

    const saveInventoryVendor = (data, todo) => {
      const controllerTodo = todo == "add" ? "<?= site_url('InventoryVendor/save');?>" : "<?= site_url('InventoryVendor/update');?>";
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
            window.location.replace('<?= base_url().'InventoryVendor' ?>');
          }
        }
      })
    }

    $(document).on("click", "#btn-edit-save-inventory_vendor", function() {
      const inventory_vendorID = $("#edit-inventory_vendorID").val().trim();
      const inventory_vendorSupplier = $("#edit-inventory_vendorSupplier").val().trim();
      const inventory_vendorAddress = $("#edit-inventory_vendorAddress").val().trim();
      const inventory_vendorContactperson = $("#edit-inventory_vendorContactperson").val().trim();
      const inventory_vendorContactnumber = $("#edit-inventory_vendorContactnumber").val().trim();
      const inventory_vendorTin = $("#edit-inventory_vendorTin").val().trim();
      const inventory_vendorVat = $("input[id='edit-inventory_vendorVat']:checked").val() ? 1 : 0;
      const inventory_vendorStatus = $("input[id='edit-inventory_vendorStatus']:checked").val() ? 1 : 0;

      const data = {
        inventory_vendorID,
        inventory_vendorSupplier,
        inventory_vendorAddress,
        inventory_vendorContactperson,
        inventory_vendorContactnumber,
        inventory_vendorTin,
        inventory_vendorVat,
        inventory_vendorStatus
      };
      saveInventoryVendor(data, "edit");
    })

    $(document).on("click", "#btn-add-save-inventory_vendor", function() {
      const inventory_vendorSupplier = $("#add-inventory_vendorSupplier").val().trim();
      const inventory_vendorAddress = $("#add-inventory_vendorAddress").val().trim();
      const inventory_vendorContactperson = $("#add-inventory_vendorContactperson").val().trim();
      const inventory_vendorContactnumber = $("#add-inventory_vendorContactnumber").val().trim();
      const inventory_vendorTin = $("#add-inventory_vendorTin").val().trim();
      const inventory_vendorVat = $("input[id='add-inventory_vendorVat']:checked").val() ? 1 : 0;
      const inventory_vendorStatus = $("input[id='add-inventory_vendorStatus']:checked").val() ? 1 : 0;

      const data = {
        inventory_vendorSupplier,
        inventory_vendorAddress,
        inventory_vendorContactperson,
        inventory_vendorContactnumber,
        inventory_vendorTin,
        inventory_vendorVat,
        inventory_vendorStatus
      };
      saveInventoryVendor(data, "add");
    })

    $(document).on("click", ".btn-edit-modal-inventory_vendor", function() {
      const inventory_vendorID = $(this).data("invr_vendorid");
      const inventory_vendorName = $(this).data("invr_vendorname");
      const inventory_vendorAddress = $(this).data("invr_vendoraddress");
      const inventory_vendorContactperson = $(this).data("invr_vendorcontactperson");
      const inventory_vendorContactnumber = $(this).data("invr_vendorcontactnumber");
      const inventory_vendorTin = $(this).data("invr_vendortin");
      const inventory_vendorStatus = $(this).data("invr_vendorstatus") == 1 ? true : false;

      $("#edit-inventory_vendorID").val(inventory_vendorID);
      $("#edit-inventory_vendorSupplier").val(inventory_vendorName);
      $("#edit-inventory_vendorAddress").val(inventory_vendorAddress);
      $("#edit-inventory_vendorContactperson").val(inventory_vendorContactperson);
      $("#edit-inventory_vendorContactnumber").val(inventory_vendorContactnumber);
      $("#edit-inventory_vendorTin").val(inventory_vendorTin);
      $("input[id='edit-inventory_vendorStatus']").prop("checked", inventory_vendorStatus);

      $("#edit_inventoryvendor").modal("show");
    })

    $(document).on("click", ".btn-close-add-inventoryvendor, .btn-close-edit-inventoryvendor", function() {
      clearInputs();
    })

    $(document).on("click", "#btn-edit-inventoryvendor-close", function() {
      $("#confirmation-edit-invalid").html("");
      $("#edit_inventoryvendor").modal("show");
      $("#confirmation_edit").modal("hide");
    })

    $(document).on("click", "#btn-add-inventoryvendor-close", function() {
      $("#confirmation-add-invalid").html("");
      $("#add_inventoryvendor").modal("show");
      $("#confirmation_add").modal("hide");
    })

    $(document).on("click", "#btn-edit-inventoryvendor", function() {
      const validate = validateInputs("edit");
      if (validate) {
        $("#edit_inventoryvendor").modal("hide");
        $("#confirmation_edit").modal("show");
      }
    })

    $(document).on("click", "#btn-add-inventoryvendor", function() {
      const validate = validateInputs("add");
      if (validate) {
        $("#add_inventoryvendor").modal("hide");
        $("#confirmation_add").modal("show");
      }
    })

  })
</script>