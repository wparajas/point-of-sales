<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12">
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb pl-0">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-utensils"></i> Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Menu Item</li>
              </ol>
          </nav>
        </div>
        <div class="col-md-12">
            <div class="ms-panel">
              <div class="ms-panel-header bg-primary d-flex justify-content-between align-items-center">
                  <h6 class="text-light">LIST OF MENU ITEM</h6>
                  <button class="btn btn-outline-red" data-toggle="modal" data-target="#add_modal_menuitem"><!-- add_modalcourier -->
                    <i class="fa fa-plus-square fa-lg"></i> ADD MENU ITEM
                  </button>
              </div>
              <div class="ms-panel-body">
                <div class="row">
                  <div class="col-12">
                    <div class="table-responsive container-fluid">
                      <table id="tablecourier" class="table table-bordered thead-primary dtBasicExample">
                        <thead>
                          <tr class="text-center">
                            <th>MENU ITEM CODE</th>
                            <th>ITEM NAME</th>
                            <th>VAT</th>
                            <th>BASE PRICE</th>
                            <th>SUB TOTAL</th>
                            <th>MENU GROUP</th>
                            <th>MENU CATEGORY</th>
                            <th>STATUS</th>
                            <th>ACTION</th>
                          </tr>
                        </thead>
                          <tbody>
                         
                            <tr>
                              <td>MIC-20-00001</td>
                              <td>Pork Adobo</td>
                              <td>Yes</td>
                              <td style="text-align:right">119.00</td>
                              <td style="text-align:right">132.00</td>
                              <td>Main Dish</td>
                              <td>Pork</td>
                              <td style="text-align:center;">
                                <span class="badge badge-outline-success">&nbsp;&nbsp;Active&nbsp;&nbsp;</span>
                              </td>
                              <td>
                                <div class="drop-down float-right">
                                  <a href="#" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false"> <i style="font-size:1.5rem;" class="material-icons">more_vert</i></a>
                                  <ul class="dropdown-menu dropdown-menu-right">
                                    <li class="ms-dropdown-list">
                                      <a class="media p-2" href="#"><!-- edit_modalcourier -->
                                        <div class="media-body editcourier"
                                             data-controls-modal="your_div_id" 
                                             data-backdrop="static" 
                                             data-keyboard="false" 
                                             data-toggle="modal" 
                                             data-target="#edit_modal_menuitem" 
                                             href="javascript:void(0);" 
                                             id="" >
                                          <i style="font-size: 1rem" class="fas fa-pencil-alt text-secondary"></i><span>Edit</span>
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
<div class="modal fade" id="add_modal_menuitem" tabindex="-1" role="dialog" aria-labelledby="add_modal_menuitem" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <div class="w-100">
            <h5 class="modal-title text-light p-2 font-weight-bold" id="exampleModalCenterTitle">ADD MENU ITEM</h5>
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="text-light" aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label>Menu Group <strong class="text-red">*</strong></label>
              <select class="form-control" name="add_menu_group" id="add_menu_group">
                <option disabled selected>Menu group</option>
                <option>Main Dish</option>
                <option>Desserts</option>
                <option>Drinks</option>
              </select>
              <div class="invalid-feedback" id="invalid-add_menu_group"></div>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label>Menu Category <strong class="text-red">*</strong></label>
              <select class="form-control" name="add_menu_category" id="add_menu_category">
                <option disabled selected>Menu group</option>
                <option>Pork</option>
                <option>Sea Foods</option>
                <option>Chicken</option>
              </select>
              <div class="invalid-feedback" id="invalid-add_menu_category"></div>
            </div>
          </div>
          <div class="col-12">
            <div class="form-group">
              <label>Menu Item <strong class="text-red">*</strong></label>
              <input type="text" name="add_menu_item" id="add_menu_item" class="form-control" placeholder="Menu item" required>
              <div class="invalid-feedback" id="invalid-add_menu_item"></div>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label>Item Size <strong class="text-red">*</strong></label>
              <input type="text" class="form-control" placeholder="Item size" name="add_tinnumber" id="add_item_size">
              <div class="invalid-feedback" id="invalid-add_item_size"></div>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label>Base Price<strong class="text-red">*</strong></label>
              <input type="text" class="form-control" placeholder="Enter base price" id="add_base_price">
              <div class="invalid-feedback" id="invalid-add_base_price"></div>
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
                  <input type="checkbox" checked="" name="add_vat"id="add_vat"> 
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
                  <input type="checkbox" checked="" name="add_status" id="add_status"> 
                  <span class="ms-switch-slider ms-switch-success round"></span>
                </label> 
                <span>&nbsp; Active </span>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-3 d-flex justify-content-between">
          <h4 class="modal-title has-icon ms-icon-round text-left mb-2 text-red">INGREDIENTS</h4>
          <div class="input-group mx-1 w-auto">
            <div class="input-group-prepend">
              <span class="input-group-text text-white" id="basic-addon1" style="background: #ff0018"><i class="fas fa-plus"></i></span>
            </div>
            <input type="text" aria-label="Username" aria-describedby="basic-addon1" onkeypress="return numbersOnly(event)" maxlength="3" style="width: 50px;" name="add-menuitem" id="add-menuitem" class="add-menuitem" data-todo="add">
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-bordered thead-primary text-center" id="tablegroup2" style="font-size:80%;">
            <thead>
              <tr>
                <th>NUMBER</th>
                <th>INVENTORY GROUP</th>
                <th>ITEM CODE</th>
                <th>ITEM NAME</th>
                <th>QTY</th>
                <th>UOM</th>
                <th>UCOST</th>
                <th>ACTION</th>
              </tr>
            </thead>
            <tbody id="add-tbody-menuitem-ingredients">
              <tr class="add-tr-menuitem-ingredients">
                <td>1</td>
                <td class="">
                  <select class="form-control" name="add_menu_category">
                    <option disabled selected>Menu group</option>
                    <option>Pork</option>
                    <option>Sea Foods</option>
                    <option>Chicken</option>
                  </select>
                </td>
                <td class=""><input type="text" readonly name="add-code-ingredients" class="form-control"></td>
                <td class=""><input type="text" readonly name="add-name-ingredients" class="form-control"></td>
                <td class=""><input type="number" name="add-qty-ingredients" class="form-control"></td>
                <td class=""><input type="text" readonly class="form-control"></td>
                <td class=""><input type="text" readonly class="form-control"></td>
                <td class="courier-package-remove-table">
                  <button class="btn btn-outline-danger btn-sm p-1 removetablerow" data-todo="add" style="min-width: 1rem; padding: .3rem;">&nbsp;<i class="fas fa-minus"></i></button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <div style="margin:auto;">
          <button type="button" class="btn btn-primary" id="add_save">ADD</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Confirmation Add Modal Courier  -->
<div class="modal fade" id="add_confirmationcourier" tabindex="-1" role="dialog" aria-labelledby="add_confirmationcourier" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-min" role="document">
    <div class="modal-content">
        <div class="modal-body pb-3">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <img class="isometric confirmationisometric" width="230px" height="100px" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/modal/confirmation.png">
        <h1 class="text-red text-center">ADD MENU ITEM</h1>
            <h6 class="text-center my-2">Are you sure you want to add new Menu Item?</h6>
            <div class="invalid-feedback" id="confirmation-add-invalid"></div>
        </div>
        <div class="modal-footer">
          <div class="float-right">
          <button type="button" data-dismiss="modal" class="btn btn-outline-primary shadow-none" id="add_confirmation_no">NO</button>
            <button type="button" class="btn btn-primary shadow-none" id="add_confirmation_yes">YES</button>
        </div>
        </div>
    </div>
  </div>
</div>

<!-- Edit Modal Courier -->
<div class="modal fade" id="edit_modal_menuitem" tabindex="-1" role="dialog" aria-labelledby="edit_modal_menuitem" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <div class="w-100">
            <h5 class="modal-title text-light p-2 font-weight-bold" id="exampleModalCenterTitle">EDIT MENU ITEM</h5>
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="text-light" aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label>Menu Group <strong class="text-red">*</strong></label>
              <select class="form-control" name="edit_menu_item">
                <option disabled>Menu group</option>
                <option selected>Main Dish</option>
                <option>Desserts</option>
                <option>Drinks</option>
              </select>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label>Menu Category <strong class="text-red">*</strong></label>
              <select class="form-control" name="edit_menu_category">
                <option disabled>Menu group</option>
                <option selected>Pork</option>
                <option>Sea Foods</option>
                <option>Chicken</option>
              </select>
            </div>
          </div>
          <div class="col-12">
            <div class="form-group">
              <label>Menu Item <strong class="text-red">*</strong></label>
              <input type="text" name="edit_menu_item" class="form-control" value="Pork Adobo" required>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label>Item Size <strong class="text-red">*</strong></label>
              <input type="text" class="form-control" value="Small" name="edit_item_size">
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label>Base Price<strong class="text-red">*</strong></label>
              <input type="text" style="text-align:right;" class="form-control" value="119.00" name="edit_base_price">
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
                  <input type="checkbox" checked="" name="add_vat"id="add_vat"> 
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
                  <input type="checkbox" checked="" name="add_status" id="add_status"> 
                  <span class="ms-switch-slider ms-switch-success round"></span>
                </label> 
                <span>&nbsp; Active </span>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-3 d-flex justify-content-between">
          <h4 class="modal-title has-icon ms-icon-round text-left mb-2 text-red">INGREDIENTS</h4>
          <div class="input-group mx-1 w-auto">
            <div class="input-group-prepend">
              <span class="input-group-text text-white" id="basic-addon1" style="background: #ff0018"><i class="fas fa-plus"></i></span>
            </div>
            <input type="text" aria-label="Username" aria-describedby="basic-addon1" onkeypress="return numbersOnly(event)" maxlength="3" style="width: 50px;" name="add-menuitem" id="add-menuitem" class="add-menuitem" data-todo="edit">
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-bordered thead-primary text-center" id="tablegroup2" style="font-size:80%;">
            <thead>
              <tr>
                <th>NUMBER</th>
                <th>INVENTORY GROUP</th>
                <th>ITEM CODE</th>
                <th>ITEM NAME</th>
                <th>QTY</th>
                <th>UOM</th>
                <th>UCOST</th>
                <th>ACTION</th>
              </tr>
            </thead>
            <tbody id="edit-tbody-menuitem-ingredients">
              <tr class="edit-tr-menuitem-ingredients">
                <td>1</td>
                <td class="">
                  <select class="form-control" name="add_menu_category">
                    <option disabled >Menu group</option>
                    <option selected>Pork</option>
                    <option>Sea Foods</option>
                    <option>Chicken</option>
                  </select>
                </td>
                <td class=""><input type="text" readonly name="add-code-ingredients" value="IC-20-00001" class="form-control"></td>
                <td class=""><input type="text" readonly name="add-name-ingredients" value="Pork Meat" class="form-control"></td>
                <td class=""><input type="number" name="add-qty-ingredients" value="5" class="form-control"></td>
                <td class=""><input type="text" readonly class="form-control" value="kg"></td>
                <td class=""><input type="text" readonly class="form-control" value="100.00" style="text-align:right;"></td>
                <td class="courier-package-remove-table">
                  <button class="btn btn-outline-danger btn-sm p-1 removetablerow" data-todo="add" style="min-width: 1rem; padding: .3rem;">&nbsp;<i class="fas fa-minus"></i></button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <div style="margin:auto;">
          <button type="button" class="btn btn-primary" id="edit_save">UPDATE</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Confirmation Edit Modal Courier  -->
<div class="modal fade" id="edit_confirmationcourier" tabindex="-1" role="dialog" aria-labelledby="edit_confirmationcourier" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-min" role="document">
    <div class="modal-content">
        <div class="modal-body pb-3">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <img class="isometric confirmationisometric" width="230px" height="100px" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/modal/updatepicture.png">
        <h1 class="text-red text-center">UPDATE MENU ITEM</h1>
            <h6 class="text-center my-2 text-secondary">Are you sure you want to update Menu item?</h6>
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
</div>

<script>
  $(document).ready(function() {

    // DATATABLES
    $("#tablecourier").dataTable();

    function updateTable(todo = "add") {
      $("."+todo+"-tr-menuitem-ingredients").each(function(i) {

        $("."+todo+"-tr-menuitem-ingredient", this).attr("number", (i));

      //   // REMOVE ELEMENT
        $(this).attr("id", todo+"-table-row-id"+(i));
        $(".removetablerow", this).attr("id", (i));
      });
    }

    $(document).on("click", "#edit_confirmation_no", function() {
      $("#edit_confirmationcourier").modal("hide");
      $("#edit_modalcourier").modal("show");
    })

    $(document).on("click", "#edit_save", function() {
      $("#edit_modal_menuitem").modal("hide");
      $("#edit_confirmationcourier").modal("show");
    });

    $(document).on("click", "#add_confirmation_no", function() {
      $("#add_confirmationcourier").modal("hide");
      $("#add_modal_menuitem").modal("show");
    })

    $(document).on("click", "#add_save", function() {
      $("#add_modal_menuitem").modal("hide");
      $("#add_confirmationcourier").modal("show");
    });

    // REMOVE TABLE ROW
    $(document).on("click", ".removetablerow", function(e) {
      e.preventDefault();
      const id    = $(this).attr("id");
      const todo  = $(this).data("todo");
      //console.log(todo);
      const elementLength = $("."+todo+"-tr-menuitem-ingredients").length;
      if (elementLength > 1) {
        $("#"+todo+"-table-row-id"+id).remove();
      } 
      
      // UPDATING TABLE
      updateTable(todo);
    });

    // ADDING NEW ROW
    $(document).on("keyup", ".add-menuitem", function(e) {
      const rownumber = $(this).val();
      const todo = $(this).data("todo");
       console.log(todo);
      if (e.which === 13) {
        const itemElementLength = $("."+todo+"-tr-menuitem-ingredients").length;
        console.log(itemElementLength);
        const newLength = rownumber - itemElementLength;
        let rows = "";
        for (var i=0; i<newLength; i++) {
          let html = "";
          html += '<tr class="'+todo+'-tr-menuitem-ingredients">';
            html += '<td>1</td>'
            html += '<td class="">';
            html += '<select class="form-control" name="add_menu_category">';
              html += '<option disabled selected>Menu group</option>';
              html += '<option>Pork</option>';
              html += '<option>Sea Foods</option>';
              html += '<option>Chicken</option>';
            html += '</select>';
            html += '</td>';
            html += '<td><input type="text" readonly name="add-code-ingredients" class="form-control"></td>';
            html += '<td><input type="text" readonly name="add-name-ingredients" class="form-control"></td>';
            html += '<td><input type="number" name="add-qty-ingredients" class="form-control"></td>';
            html += '<td><input type="text" readonly class="form-control"></td>';
            html += '<td class=""><input type="text" readonly class="form-control"></td>';
            html += '<td class="courier-package-table-remove">';
            html += '<button class="btn btn-outline-danger btn-sm p-1 removetablerow" data-todo="'+todo+'" style="min-width: 1rem; padding: .3rem;">&nbsp;<i class="fas fa-minus"></i></button>';
            html += '</td>';
          html += '</tr>';
          rows += html;
        }
        $("#"+todo+"-tbody-menuitem-ingredients").prepend(rows);
        updateTable(todo);
      }
    });

    updateTable("add");

  })
</script>