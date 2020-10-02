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
                            <tr>
                              <td>SUP-20-00001</td>
                              <td>Hatdog Inc.</td>
                              <td>Pasig City</td>
                              <td>Arjay Diangzon</td>
                              <td>09099054766</td>
                              <td>1324-4567-5697</td>
                              <td class="text-center">
                                <span class="badge badge-outline-success">Active</span>
                              </td>
                              <td>
                                <div class="drop-down float-right">
                                  <a href="#" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false"> <i class="material-icons" style="font-size: 1.5rem">more_vert</i></a>
                                  <ul class="dropdown-menu dropdown-menu-right">
                                    <li class="ms-dropdown-list">
                                      <a class="media p-2" href="#">
                                        <div class="media-body "
                                             data-controls-modal="your_div_id" 
                                             data-backdrop="static" 
                                             data-keyboard="false" 
                                             data-toggle="modal" 
                                             data-target="#edit_inventoryvendor" 
                                             href="javascript:void(0);" 
                                             id="" >
                                          <i class="fas fa-pencil-alt text-secondary" style="font-size: 1rem"></i><span> Edit</span>
                                        </div>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </td>
                            </tr>
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
          <input type="text" class="form-control" name="add-inventory_vendorSupplier" id="add-inventory_vendorSupplier">
          <div class="invalid-feedback" id="add-invalid-inventory_vendorSupplier"></div>
        </div>
        <div class="form-group">
          <label>Address <strong class="text-red">*</strong></label>
          <input type="text" class="form-control" name="add-inventory_vendorAddress" id="add-inventory_vendorAddress">
          <div class="invalid-feedback" id="add-invalid-inventory_vendorAddress"></div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label>Contact Person <strong class="text-red">*</strong></label>
              <input type="text" class="form-control" name="add-inventory_vendorContactperson" id="add-inventory_vendorContactperson">
              <div class="invalid-feedback" id="add-invalid-inventory_vendorContactperson"></div>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label>Contact Number <strong class="text-red">*</strong></label>
              <input type="text" class="form-control" name="add-inventory_vendorContactnumber" id="add-inventory_vendorContactnumber">
              <div class="invalid-feedback" id="add-invalid-inventory_vendorContactnumber"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <div class="form-group">
              <label for="">TIN <strong class="text-red">*</strong></label>
              <input type="text" class="form-control" name="add-inventory_vendorTin" id="add-inventory_vendorTin">
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
            <h6 class="text-center my-2">Are you sure you want to add new inventory vendor?</h6>
            <div class="invalid-feedback" id="confirmation-add-invalid"></div>
        </div>
        <div class="modal-footer">
          <div class="float-right">
          <button type="button" data-dismiss="modal" class="btn btn-outline-primary shadow-none" id="btn-add-inventoryvendor-close">NO</button>
            <button type="button" class="btn btn-primary shadow-none" id="save_add_confirmation_yes">YES</button>
        </div>
        </div>
    </div>
  </div>
</div>

<!-- <div class="modal fade" id="edit_modal" tabindex="-1" role="dialog" aria-labelledby="modal-edit-inventory-vendor" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="w-100 text-center">
            <h5 class="modal-title text-red p-2" id="exampleModalCenterTitle">EDIT INVENTORY VENDOR</h5>
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
      
        <div class="form-group">
          <label>Supplier Name <strong class="text-red">*</strong></label>
          <input type="text" class="form-control" name="add_suppliername" id="add_suppliername" value="Hatdog Inc.">
        </div>
        <div class="form-group">
          <label>Address <strong class="text-red">*</strong></label>
          <input type="text" class="form-control" name="add_supplieraddress" id="add_supplieraddress" value="Pasig City">
        </div>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label>Contact Person <strong class="text-red">*</strong></label>
              <input type="text" class="form-control" name="add_contactperson" id="add_contactperson" value="Arjay Diangzon">
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label>Contact Number <strong class="text-red">*</strong></label>
              <input type="text" class="form-control" name="add_contactnumber" id="add_contactnumber" value="09099054766">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <div class="form-group">
              <label for="">TIN <strong class="text-red">*</strong></label>
              <input type="text" class="form-control" name="add_tin" id="add_tin" value="1324-4567-5697">
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
                      <input type="checkbox" checked="" name="add_vat"id="add_vat"> 
                      <span class="ms-switch-slider ms-switch-success round"></span>
                    </label> 
                    <span>&nbsp; YES </span>
                  </div>
                </div>
              </div>
              <div class="col-md-7 col-sm-12">
                <div class="form-group">
                  <label>Status <strong class="text-red">*</strong></label>
                  <div class="d-flex justify-content-center align-items-center">
                    <span> Inactive &nbsp;</span> 
                    <label class="ms-switch">
                      <input type="checkbox" checked="" name="add_status" id="add_status"> 
                      <span class="ms-switch-slider ms-switch-success round"></span>
                    </label> 
                    <span>&nbsp; Active </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">CANCEL</button>
        <button type="button" class="btn btn-primary" id="btn-inventory-vendor-update">UPDATE</button>
      </div>
    </div>
  </div>
</div> -->

<div class="modal fade" id="edit_inventoryvendor" tabindex="-1" role="dialog" aria-labelledby="edit_inventoryvendor" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header d-flex justify-content-between align-items-start bg-primary">
        <h5 class="modal-title text-light" id="exampleModalCenterTitle">EDIT INVENTORY VENDOR</h5>
        <button type="button" class="close btn-close-edit-inventoryvendor" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="text-light">&times;</span></button>
      </div>
      <div class="modal-body">
      
        <div class="form-group">
          <label>Supplier Name <strong class="text-red">*</strong></label>
          <input type="text" class="form-control" name="edit-inventory_vendorSupplier" id="edit-inventory_vendorSupplier">
          <div class="invalid-feedback" id="edit-invalid-inventory_vendorSupplier"></div>
        </div>
        <div class="form-group">
          <label>editress <strong class="text-red">*</strong></label>
          <input type="text" class="form-control" name="edit-inventory_vendorAddress" id="edit-inventory_vendorAddress">
          <div class="invalid-feedback" id="edit-invalid-inventory_vendorAddress"></div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label>Contact Person <strong class="text-red">*</strong></label>
              <input type="text" class="form-control" name="edit-inventory_vendorContactperson" id="edit-inventory_vendorContactperson">
              <div class="invalid-feedback" id="edit-invalid-inventory_vendorContactperson"></div>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label>Contact Number <strong class="text-red">*</strong></label>
              <input type="text" class="form-control" name="edit-inventory_vendorContactnumber" id="edit-inventory_vendorContactnumber">
              <div class="invalid-feedback" id="edit-invalid-inventory_vendorContactnumber"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <div class="form-group">
              <label for="">TIN <strong class="text-red">*</strong></label>
              <input type="text" class="form-control" name="edit-inventory_vendorTin" id="edit-inventory_vendorTin">
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

<!-- <div class="modal fade" id="modal-edit-confirmation-save" tabindex="-1" role="dialog" aria-labelledby="modal-edit-confirmation-save" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-min" role="document">
    <div class="modal-content">
        <div class="modal-body pb-3 text-center">
          <button type="button" id="save_edit_confirmation_no" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <img class="isometric confirmationisometric" width="230px" height="100px" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/modal/confirmation.png">
        <h1 class="text-red text-center">UPDATE INVENTORY VENDOR</h1>
            <h6 class="text-center my-2">Are you sure you want to update inventory vendor?</h6>
            <div class="invalid-feedback" id="confirmation-add-invalid"></div>
        </div>
        <div class="modal-footer">
          <div class="float-right">
          <button type="button" data-dismiss="modal" class="btn btn-outline-primary shadow-none" id="save_edit_confirmation_no">NO</button>
            <button type="button" class="btn btn-primary shadow-none" id="save_edit_confirmation_yes">YES</button>
        </div>
        </div>
    </div>
  </div>
</div> -->

<div class="modal fade" id="confirmation_edit" tabindex="-1" role="dialog" aria-labelledby="confirmation_edit" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-min" role="document">
    <div class="modal-content">
        <div class="modal-body pb-3 text-center">
          <button type="button" id="btn-edit-inventoryvendor-close" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <img class="isometric confirmationisometric" width="230px" height="100px" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/modal/confirmation.png">
        <h1 class="text-red text-center">UPDATE INVENTORY VENDOR</h1>
            <h6 class="text-center my-2">Are you sure you want to update this inventory vendor?</h6>
            <div class="invalid-feedback" id="confirmation-edit-invalid"></div>
        </div>
        <div class="modal-footer">
          <div class="float-right">
          <button type="button" data-dismiss="modal" class="btn btn-outline-primary shadow-none" id="btn-edit-inventoryvendor-close">NO</button>
            <button type="button" class="btn btn-primary shadow-none" id="save_edit_confirmation_yes">YES</button>
        </div>
        </div>
    </div>
  </div>
</div>

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

    $(document).on("click", ".btn-close-add-inventoryvendor, .btn-close-edit-inventoryvendor", function() {
      clearInputs();
    })

    $(document).on("click", "#btn-edit-inventoryvendor-close", function() {
      $("#edit_inventoryvendor").modal("show");
      $("#confirmation_edit").modal("hide");
    })

    $(document).on("click", "#btn-add-inventoryvendor-close", function() {
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
    
    // $(document).on("click", "#save_edit_confirmation_no", function() {
    //   $("#modal-edit-confirmation-save").modal("hide");
    //   $("#edit_modal").modal("show");
    // })

    // $(document).on("click", "#btn-inventory-vendor-update", function() {
    //   $("#modal-edit-confirmation-save").modal("show");
    //   $("#edit_modal").modal("hide");
    // })

    // $(document).on("click", "#save_add_confirmation_no", function() {
    //   $("#modal-add-confirmation-save").modal("hide");
    //   $("#add_inventoryvendor").modal("show");
    // })

    // $(document).on("click", "#btn-inventory-vendor-save", function() {
    //   $("#modal-add-confirmation-save").modal("show");
    //   $("#add_inventoryvendor").modal("hide");
    // })
  })
</script>