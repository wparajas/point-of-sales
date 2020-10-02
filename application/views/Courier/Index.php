<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12">
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb pl-0">
                  <li class="breadcrumb-item"><a href="<?= base_url(). 'Dashboard' ?>"><i class="material-icons fs-16">dashboard</i> Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Courier Setup</li>
              </ol>
          </nav>
        </div>
        <div class="col-md-12">
            <div class="ms-panel">
              <div class="ms-panel-header bg-primary d-flex justify-content-between align-items-center">
                  <h6 class="text-light">COURIER SETUP</h6>
                  <button class="btn btn-outline-red" data-toggle="modal" data-target="#add_courier">
                    <i class="fa fa-plus-square fa-lg"></i> ADD COURIER
                  </button>
              </div>
              <div class="ms-panel-body">
                <div class="row">
                  <div class="col-12">
                    <div class="table-responsive container-fluid">
                      <table id="tablecourier" class="table table-bordered thead-primary dtBasicExample">
                        <thead>
                          <tr class="text-center">
                            <th>CODE</th>
                            <th>COURIER NAME</th>
                            <th>CONTACT NUMBER</th>
                            <th>TIN NUMBER</th>
                            <th>STATUS</th>
                            <th>ACTION</th>
                          </tr>
                        </thead>
                          <tbody>
                         
                            <tr>
                              <td>COU-20-00001</td>
                              <td>LBC</td>
                              <td>0912-345-6789</td>
                              <td>000-000-000</td>
                              <td class="text-center">
                                <span class="badge badge-outline-success">Active</span>
                              </td>
                              <td>
                                <div class="drop-down float-right">
                                  <a href="#" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false"> <i class="material-icons" style="font-size: 1.5rem">more_vert</i></a>
                                  <ul class="dropdown-menu dropdown-menu-right">
                                    <li class="ms-dropdown-list">
                                      <a class="media p-2" href="#">
                                        <div class="media-body editcourier"
                                             data-controls-modal="your_div_id" 
                                             data-backdrop="static" 
                                             data-keyboard="false" 
                                             data-toggle="modal" 
                                             data-target="#edit_courier" 
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

<!-- Add Modal Courier -->
<div class="modal fade" id="add_courier" tabindex="-1" role="dialog" aria-labelledby="add_courier" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header d-flex justify-content-between align-items-start bg-primary">
         <h5 class="modal-title text-light" id="exampleModalCenterTitle">ADD COURIER</h5>
         <button type="button" class="close btn-close-add-courier" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="text-light">&times;</span></button>
     </div>
      <div class="modal-body">
      
        <div class="form-group">
          <label>Courier Name <strong class="text-red">*</strong></label>
          <input type="text" class="form-control" name="add-courierName" id="add-courierName" placeholder="Courier Name">
          <div class="invalid-feedback" id="add-invalid-courierName"></div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label>Contact Number <strong class="text-red">*</strong></label>
              <input type="text" class="form-control" placeholder="Contact Number" name="add-courierContactnumber" id="add-courierContactnumber">
              <div class="invalid-feedback" id="add-invalid-courierContactnumber"></div>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label>TIN Number <strong class="text-red">*</strong></label>
              <input type="text" class="form-control" placeholder="TIN Number" name="add-courierTin" id="add-courierTin">
              <div class="invalid-feedback" id="add-invalid-courierTin"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label>VAT <strong class="text-red">*</strong></label>
              <div class="d-flex align-items-center">
                <span> NO &nbsp;</span>
                <label class="ms-switch">
                  <input type="checkbox" checked="" name="add-courierVat"id="add-courierVat"> 
                  <span class="ms-switch-slider ms-switch-success round"></span>
                </label> 
                <span>&nbsp; YES </span>
              </div>
            </div>
            <div class="invalid-feedback" id="add-invalid-courierTin"></div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label>Status <strong class="text-red">*</strong></label>
              <div class="d-flex align-items-center">
                <span> Inactive &nbsp;</span> 
                <label class="ms-switch">
                  <input type="checkbox" checked="" name="add-courierStatus" id="add-courierStatus"> 
                  <span class="ms-switch-slider ms-switch-success round"></span>
                </label> 
                <span>&nbsp; Active </span>
              </div>
            </div>
            <div class="invalid-feedback" id="add-invalid-courierStatus"></div>
          </div>
        </div>
        <div class="mt-3 d-flex justify-content-between">
          <h4 class="modal-title has-icon ms-icon-round text-left mb-2 text-red">COURIER PACKAGES</h4>
          <div class="input-group mx-1 w-auto">
            <div class="input-group-prepend">
              <span class="input-group-text text-white" id="basic-addon1" style="background: #ff0018"><i class="fas fa-plus"></i></span>
            </div>
            <input type="text" aria-label="Username" aria-describedby="basic-addon1" onkeypress="return numbersOnly(event)" maxlength="3" style="width: 50px;" name="addcourierrow" id="addcourierrow" class="addcourierrow" data-todo="add">
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-bordered thead-primary text-center" id="tablegroup2">
            <thead >
              <tr>
                <th>COURIER CODE</th>
                <th>ITEM</th>
                <th>DESCRIPTION</th>
                <th>RATE</th>
                <th>ACTION</th>
              </tr>
            </thead>
            <tbody id="add-tbody-courier-package">
              <tr class="add-tr-courier-package">
                <td class="">
                  <input type="text" value="LBC" class="form-control" disabled>
                </td>
                <td class="">
                  <input type="text" name="" class="form-control add-courier_packageItem">
                  <div class="invalid-feedback add-invalid-courier_packageItem"></div>
                </td>
                <td class="">
                  <input type="text" name="" class="form-control add-courier_packageDescription">
                  <div class="invalid-feedback add-invalid-courier_packageDescription"></div>
                </td>
                <td class="">
                  <input type="text" name="" class="form-control add-courier_packageRate">
                  <div class="invalid-feedback add-invalid-courier_packageRate"></div>
                </td>
                <td class="courier-package-remove-table">
                  <button class="btn btn-outline-danger removetablerow" data-todo="add" style="min-width: 1rem; padding: .3rem;">&nbsp;<i class="fas fa-minus"></i></button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer">
         <div class="w-100 text-center">
             <button type="button" class="btn btn-primary submit-btn"id="btn-add-courier"name="save"> ADD</button>
         </div>
     </div>
    </div>
  </div>
</div>

<!-- Confirmation Add Modal Courier  -->
<div class="modal fade" id="confirmation_add" tabindex="-1" role="dialog" aria-labelledby="confirmation_add" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-min" role="document">
    <div class="modal-content">
        <div class="modal-body pb-3 text-center">
          <button type="button" class="close" id="btn-add-courier-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <img class="isometric confirmationisometric" width="230px" height="100px" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/modal/confirmation.png">
        <h1 class="text-red text-center">SAVE COURIER</h1>
            <h6 class="text-center my-2">Are you sure you want to save courier?</h6>
            <div class="invalid-feedback" id="confirmation-add-invalid"></div>
        </div>
        <div class="modal-footer">
           <div class="w-100 text-center">
               <button type="button" data-dismiss="modal" class="btn btn-outline-primary shadow-none" id="btn-add-courier-close">NO</button>
               <button type="button" class="btn btn-primary shadow-none" id="add">YES</button>
           </div>
       </div>
    </div>
  </div>
</div>

<!-- Edit Modal Courier -->
<div class="modal fade" id="edit_courier" tabindex="-1" role="dialog" aria-labelledby="edit_courier" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header d-flex justify-content-between align-items-start bg-primary">
         <h5 class="modal-title text-light" id="exampleModalCenterTitle">EDIT COURIER</h5>
         <button type="button" class="close btn-close-edit-courier" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="text-light">&times;</span></button>
     </div>
      <div class="modal-body">
      
        <div class="form-group">
          <label>Courier Name <strong class="text-red">*</strong></label>
          <input type="text" class="form-control" name="edit-courierName" id="edit-courierName" placeholder="Courier Name">
          <div class="invalid-feedback" id="edit-invalid-courierName"></div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label>Contact Number <strong class="text-red">*</strong></label>
              <input type="text" class="form-control" placeholder="Contact Number" name="edit-courierContactnumber" id="edit-courierContactnumber">
              <div class="invalid-feedback" id="edit-invalid-courierContactnumber"></div>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label>TIN Number <strong class="text-red">*</strong></label>
              <input type="text" class="form-control" placeholder="TIN Number" name="edit-courierTin" id="edit-courierTin">
              <div class="invalid-feedback" id="edit-invalid-courierTin"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label>VAT <strong class="text-red">*</strong></label>
              <div class="d-flex align-items-center">
                <span> NO &nbsp;</span>
                <label class="ms-switch">
                  <input type="checkbox" checked="" name="edit-courierVat"id="edit-courierVat"> 
                  <span class="ms-switch-slider ms-switch-success round"></span>
                </label> 
                <span>&nbsp; YES </span>
              </div>
            </div>
            <div class="invalid-feedback" id="edit-invalid-courierTin"></div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label>Status <strong class="text-red">*</strong></label>
              <div class="d-flex align-items-center">
                <span> Inactive &nbsp;</span> 
                <label class="ms-switch">
                  <input type="checkbox" checked="" name="edit-courierStatus" id="edit-courierStatus"> 
                  <span class="ms-switch-slider ms-switch-success round"></span>
                </label> 
                <span>&nbsp; Active </span>
              </div>
            </div>
            <div class="invalid-feedback" id="edit-invalid-courierStatus"></div>
          </div>
        </div>
        <div class="mt-3 d-flex justify-content-between">
          <h4 class="modal-title has-icon ms-icon-round text-left mb-2 text-red">COURIER PACKAGES</h4>
          <div class="input-group mx-1 w-auto">
            <div class="input-group-prepend">
              <span class="input-group-text text-white" id="basic-addon1" style="background: #ff0018"><i class="fas fa-plus"></i></span>
            </div>
            <input type="text" aria-label="Username" aria-describedby="basic-addon1" onkeypress="return numbersOnly(event)" maxlength="3" style="width: 50px;" name="addcourierrow" id="addcourierrow" class="addcourierrow" data-todo="edit">
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-bordered thead-primary text-center" id="tablegroup2">
            <thead >
              <tr>
                <th>COURIER CODE</th>
                <th>ITEM</th>
                <th>DESCRIPTION</th>
                <th>RATE</th>
                <th>ACTION</th>
              </tr>
            </thead>
            <tbody id="edit-tbody-courier-package">
              <tr class="edit-tr-courier-package">
                <td class="">
                  <input type="text" value="LBC" class="form-control" disabled>
                </td>
                <td class="">
                  <input type="text" name="" class="form-control edit-courier_packageItem">
                  <div class="invalid-feedback edit-invalid-courier_packageItem"></div>
                </td>
                <td class="">
                  <input type="text" name="" class="form-control edit-courier_packageDescription">
                  <div class="invalid-feedback edit-invalid-courier_packageDescription"></div>
                </td>
                <td class="">
                  <input type="text" name="" class="form-control edit-courier_packageRate">
                  <div class="invalid-feedback edit-invalid-courier_packageRate"></div>
                </td>
                <td class="courier-package-remove-table">
                  <button class="btn btn-outline-danger removetablerow" data-todo="edit" style="min-width: 1rem; padding: .3rem;">&nbsp;<i class="fas fa-minus"></i></button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer">
         <div class="w-100 text-center">
             <button type="button" class="btn btn-primary submit-btn"id="btn-edit-courier"name="save"> UPDATE</button>
         </div>
     </div>
    </div>
  </div>
</div>

<!-- <div class="modal fade" id="edit_modalcourier" tabindex="-1" role="dialog" aria-labelledby="edit_modalcourier" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="w-100 text-center">
            <h5 class="modal-title text-red p-2" id="exampleModalCenterTitle">EDIT COURIER</h5>
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
      
        <div class="form-group">
          <label>Courier Name <strong class="text-red">*</strong></label>
          <input type="text" class="form-control" name="edit_couriername" id="edit_couriername" placeholder="Courier Name">
        </div>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label>Contact Number <strong class="text-red">*</strong></label>
              <input type="text" class="form-control" placeholder="Contact Number" name="edit_contactnumber" id="edit_contactnumber">
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label>TIN Number <strong class="text-red">*</strong></label>
              <input type="text" class="form-control" placeholder="TIN Number" name="edit_tinnumber" id="edit_tinnumber">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label>VAT <strong class="text-red">*</strong></label>
              <div class="d-flex align-items-center">
                <span> NO &nbsp;</span>
                <label class="ms-switch">
                  <input type="checkbox" checked="" name="edit_vat"id="edit_vat"> 
                  <span class="ms-switch-slider ms-switch-success round"></span>
                </label> 
                <span>&nbsp; YES </span>
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label>Status <strong class="text-red">*</strong></label>
              <div class="d-flex align-items-center">
                <span> Inactive &nbsp;</span> 
                <label class="ms-switch">
                  <input type="checkbox" checked="" name="edit_status" id="edit_status"> 
                  <span class="ms-switch-slider ms-switch-success round"></span>
                </label> 
                <span>&nbsp; Active </span>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-3 d-flex justify-content-between">
          <h4 class="modal-title has-icon ms-icon-round text-left mb-2 text-red">COURIER PACKAGES</h4>
          <div class="input-group mx-1 w-auto">
            <div class="input-group-prepend">
              <span class="input-group-text text-white" id="basic-addon1" style="background: #ff0018"><i class="fas fa-plus"></i></span>
            </div>
            <input type="text" aria-label="Username" aria-describedby="basic-addon1" onkeypress="return numbersOnly(event)" maxlength="3" style="width: 50px;" name="addcourierrow" id="addcourierrow" class="addcourierrow" data-todo="edit">
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-bordered thead-primary text-center" id="tablegroup2">
            <thead >
              <tr>
                <th>COURIER CODE</th>
                <th>ITEM</th>
                <th>DESCRIPTION</th>
                <th>RATE</th>
                <th>ACTION</th>
              </tr>
            </thead>
            <tbody id="edit-tbody-courier-package">
              <tr class="edit-tr-courier-package">
                <td class="">
                  <input type="text" value="LBC" class="form-control" disabled>
                </td>
                <td class="">-</td>
                <td class="">-</td>
                <td class="">-</td>
                <td class="courier-package-remove-table">
                  <button class="btn btn-outline-danger removetablerow" data-todo="edit" style="min-width: 1rem; padding: .3rem;">&nbsp;<i class="fas fa-minus"></i></button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">CLOSE</button>
        <button type="button" class="btn btn-primary" id="edit_save">UPDATE</button>
      </div>
    </div>
  </div>
</div> -->

<!-- Confirmation Edit Modal Courier  -->
<div class="modal fade" id="confirmation_edit" tabindex="-1" role="dialog" aria-labelledby="confirmation_edit" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-min" role="document">
    <div class="modal-content">
        <div class="modal-body pb-3 text-center">
          <button type="button" class="close" id="btn-edit-courier-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <img class="isometric confirmationisometric" width="230px" height="100px" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/modal/confirmation.png">
        <h1 class="text-red text-center">UPDATE COURIER</h1>
            <h6 class="text-center my-2">Are you sure you want to update courier?</h6>
            <div class="invalid-feedback" id="confirmation-edit-invalid"></div>
        </div>
        <div class="modal-footer">
           <div class="w-100 text-center">
               <button type="button" data-dismiss="modal" class="btn btn-outline-primary shadow-none" id="btn-edit-courier-close">NO</button>
               <button type="button" class="btn btn-primary shadow-none" id="edit">YES</button>
           </div>
       </div>
    </div>
  </div>
</div>
<!-- <div class="modal fade" id="edit_confirmationcourier" tabindex="-1" role="dialog" aria-labelledby="edit_confirmationcourier" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-min" role="document">
    <div class="modal-content">
        <div class="modal-body pb-3">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <img class="isometric confirmationisometric" width="230px" height="100px" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/modal/confirmation.png">
        <h1 class="text-red text-center">UPDATE COURIER</h1>
            <h6 class="text-center my-2">Are you sure you want to update courier?</h6>
            <div class="invalid-feedback" id="confirmation-add-invalid"></div>
        </div>
        <div class="modal-footer">
          <div class="float-right">
          <button type="button" data-dismiss="modal" class="btn btn-outline-primary shadow-none" id="edit_confirmation_no">NO</button>
            <button type="button" class="btn btn-primary shadow-none" id="edit_confirmation_yes">YES</button>
        </div>
        </div>
    </div>
  </div>
</div> -->

<script>
  $(document).ready(function() {

    // DATATABLES
    $("#tablecourier").dataTable();

    function updateTable(todo = "add") {
      $("."+todo+"-tr-courier-package").each(function(i) {

        $("."+todo+"-tr-courier-package", this).attr("number", (i));
      //   $(".stock-out-table-itemname", this).attr("id", "stock-out-table-itemname"+(i));
      //   $(".stock-out-table-uom", this).attr("id", "stock-out-table-uom"+(i));
      //   $(".stock-out-table-quantity", this).attr("id", "stock-out-table-quantity"+(i));
      //   $(".stock-out-table-remaining", this).attr("id", "stock-out-table-remaining"+(i));

      //   // INPUT
      $("."+todo+"-courier_packageItem", this).attr("id", todo+"-courier_packageItem"+i);
      $("."+todo+"-courier_packageDescription", this).attr("id", todo+"-courier_packageDescription"+i);
      $("."+todo+"-courier_packageRate", this).attr("id", todo+"-courier_packageRate"+i);
      $("."+todo+"-invalid-courier_packageItem", this).attr("id", todo+"-invalid-courier_packageItem"+i);
      $("."+todo+"-invalid-courier_packageDescription", this).attr("id", todo+"-invalid-courier_packageDescription"+i);
      $("."+todo+"-invalid-courier_packageRate", this).attr("id", todo+"-invalid-courier_packageRate"+i);
      //   $(".stockout_itemcode", this).attr("id",
      //   $(".stockout_itemname", this).attr("id", "stockout_itemname"+(i));
      //   $(".stockout_uom", this).attr("id", "stockout_uom"+(i));
      //   $(".stockout_remaining", this).attr("id", "stockout_remaining"+(i));
      //   $(".invalid-quantity", this).attr("id", "invalid-quantity"+(i));
      //   $(".invalid-itemcode", this).attr("id", "invalid-itemcode"+(i));
      //   $(".stockout_invrid", this).attr("id", "stockout_invrid"+(i));
      //   $(".stockout_invrunitcost", this).attr("id" "stockout_itemcode"+(i));
      //   $(".stockout_quantity", this).attr("id", "stockout_quantity"+(i));, "stockout_invrunitcost"+(i));

      //   // REMOVE ELEMENT
        $(this).attr("id", todo+"-table-row-id"+(i));
        $(".removetablerow", this).attr("id", (i));
      });
    }

    const elemArr = ["courierName", "courierContactnumber", "courierTin"];
    const elemArrText = ["Courier Name", "Contact Number", "TIN number"];
    const elemArrLength = elemArr.length;

    const courierArr = ["courier_packageItem", "courier_packageDescription", "courier_packageRate"];
    const courierArrText = ["Package Item", "Description", "Rate"];
    const courierArrLength = courierArr.length;

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

      
      const courierLength = $("."+todo+"-tr-courier-package").length;
      for (var j=0; j<courierLength; j++) {
        for (var k=0; k<courierArrLength; k++) {
          const cour = $("#"+todo+"-"+courierArr[k]+j).val();
          if (cour == "" || cour == null || cour == undefined) {
            focusElem.push(courierArr[k]+j);
            $("#"+todo+"-"+courierArr[k]+j).addClass("is-invalid");
            $("#"+todo+"-invalid-"+courierArr[k]+j).html(courierArrText[k]+" is required");
            count++;
          } else {
            $("#"+todo+"-"+courierArr[k]+j).addClass("is-valid");
            $("#"+todo+"-"+courierArr[k]+j).removeClass("is-invalid");
            $("#"+todo+"-invalid-"+courierArr[k]+j).html("");
          }
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
      

        let courierLength = $("."+todos[i]+"-tr-courier-package").length;
        for (var h=0; h<courierLength; h++) {
          for (var l=0; l<courierArrLength; l++) {
            $("#"+todos[i]+"-"+courierArr[l]+h).removeClass("is-invalid");
            $("#"+todos[i]+"-"+courierArr[l]+h).removeClass("is-valid");
            $("#"+todos[i]+"-"+courierArr[l]+h).val("");
            $("#"+todos[i]+"-invalid-"+courierArr[l]+h).html("");
          }
        }

        // $("."+todos[i]+"-tr-courier-package").each(function() {
        //   $("."+todos[i]+"-")
        // })
        while (courierLength > 0) {
          $("#"+todos[i]+"-table-row-id"+courierLength).remove();
          courierLength--;
        }
      }
      
    }

    $(document).on("click", ".btn-close-add-courier, .btn-close-edit-courier", function() {
      clearInputs();
    })

    $(document).on("click", "#btn-edit-courier-close", function() {
      $("#edit_courier").modal("show");
      $("#confirmation_edit").modal("hide");
    })

    $(document).on("click", "#btn-add-courier-close", function() {
      $("#add_courier").modal("show");
      $("#confirmation_add").modal("hide");
    })

    $(document).on("click", "#btn-edit-courier", function() {
      // UPDATING TABLE
      updateTable("edit");

      const validate = validateInputs("edit");
      if (validate) {
        $("#edit_courier").modal("hide");
        $("#confirmation_edit").modal("show");
      }
    })

    $(document).on("click", "#btn-add-courier", function() {
      const validate = validateInputs("add");
      if (validate) {
        $("#add_courier").modal("hide");
        $("#confirmation_add").modal("show");
      }
    })

    // $(document).on("click", "#edit_confirmation_no", function() {
    //   $("#edit_confirmationcourier").modal("hide");
    //   $("#edit_modalcourier").modal("show");
    // })

    // $(document).on("click", "#edit_save", function() {
    //   $("#edit_modalcourier").modal("hide");
    //   $("#edit_confirmationcourier").modal("show");
    // });

    // $(document).on("click", "#add_confirmation_no", function() {
    //   $("#add_confirmationcourier").modal("hide");
    //   $("#add_modalcourier").modal("show");
    // })

    // $(document).on("click", "#add_save", function() {
    //   $("#add_modalcourier").modal("hide");
    //   $("#add_confirmationcourier").modal("show");
    // });

    // REMOVE TABLE ROW
    $(document).on("click", ".removetablerow", function(e) {
      e.preventDefault();
      const id = $(this).attr("id");
      const todo = $(this).data("todo");
      console.log(todo);
      const elementLength = $("."+todo+"-tr-courier-package").length;
      if (elementLength > 1) {
        $("#"+todo+"-table-row-id"+id).remove();
      } 
      
      // UPDATING TABLE
      updateTable(todo);
    });

    // ADDING NEW ROW
    $(document).on("keyup", ".addcourierrow", function(e) {
      const rownumber = $(this).val();
      const todo = $(this).data("todo");
      // console.log(todo);
      if (e.which === 13) {
        const courierElementLength = $("."+todo+"-tr-courier-package").length;
        const newLength = rownumber - courierElementLength;
        let rows = ""
        for (var i=0; i<newLength; i++) {
          let html = "";
          html += '<tr class="'+todo+'-tr-courier-package">';
          html += '<td class="">';
          html += '<input type="text" value="LBC" class="form-control" disabled>';
          html += '</td>';
          html += '<td>';
          html += '<input type="text" name="" class="form-control '+todo+'-courier_packageItem">';
          html += '<div class="invalid-feedback '+todo+'-invalid-courier_packageItem"></div>';
          html += '</td>';
          html += '<td>';
          html += '<input type="text" name="" class="form-control '+todo+'-courier_packageDescription" id="'+todo+'-courier_packageDescription">';
          html += '<div class="invalid-feedback '+todo+'-invalid-courier_packageDescription"></div>';
          html += '</td>';
          html += '<td>';
          html += '<input type="text" name="" class="form-control '+todo+'-courier_packageRate">';
          html += '<div class="invalid-feedback '+todo+'-invalid-courier_packageRate"></div>';
          html += '</td>';
          html += '<td class="courier-package-table-remove">';
          html += '<button class="btn btn-outline-danger removetablerow" data-todo="'+todo+'" style="min-width: 1rem; padding: .3rem;">&nbsp;<i class="fas fa-minus"></i></button>';
          html += '</td>';
          html += '</tr>';
          rows += html;
        }
        $("#"+todo+"-tbody-courier-package").prepend(rows);
        updateTable(todo);
      }
    });


    updateTable("add");

  })
</script>