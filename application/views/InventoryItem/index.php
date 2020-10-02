<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12">
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb pl-0">
                  <li class="breadcrumb-item"><a href="<?= base_url().'Dashboard' ?>"><i class="fas fa-boxes"></i> Dashboard</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">Inventory Item</li>
              </ol>
          </nav>
        </div>
        <div class="col-md-12">
            <div class="ms-panel">
              <div class="ms-panel-header bg-primary d-flex justify-content-between align-items-center">
                  <h6 class="text-light">LIST OF INVENTORY ITEM</h6>
                  <button class="btn btn-outline-red" data-toggle="modal" data-target="#add_inventoryitem">
                    <i class="fa fa-plus-square fa-lg"></i> ADD INVENTORY ITEM
                  </button>
              </div>
              <div class="ms-panel-body">
                <div class="row">
                  <div class="col-12">
                    <div class="table-responsive container-fluid">
                      <table id="tablecourier" class="table table-bordered thead-primary dtBasicExample">
                        <thead>
                          <tr class="text-center">
                            <th>ITEM CODE</th>
                            <th>ITEM NAME</th>
                            <th>INVENTORY GROUP</th>
                            <th>VAT</th>
                            <th>BASE PRICE</th>
                            <th>UOM</th>
                            <th>WAREHOUSE</th>
                            <th>STATUS</th>
                            <th>ACTION</th>
                          </tr>
                        </thead>
                          <tbody>
                         
                            <tr>
                              <td>IC-20-00001</td>
                              <td>Soy Sauce</td>
                              <td>Seasonings</td>
                              <td>Yes</td>
                              <td class="text-right">150.00</td>
                              <td>pcs</td>
                              <td>WAR-20-00001</td>
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
                                             data-target="#edit_inventoryitem" 
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
<div class="modal fade" id="add_inventoryitem" tabindex="-1" role="dialog" aria-labelledby="add_inventoryitem" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header d-flex justify-content-between align-items-start bg-primary">
         <h5 class="modal-title text-light" id="exampleModalCenterTitle">ADD INVENTORY ITEM</h5>
         <button type="button" class="close btn-close-add-inventoryitem" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="text-light">&times;</span></button>
     </div>
      <div class="modal-body">
      
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label>Warehouse Code <strong class="text-red">*</strong></label>
              <select name="add_warehouse_code" class="form-control" id="add-inventory_itemWarehouseCode" required>
                <option disabled selected value>Please select Warehouse code</option>
                <option>WAR-20-00001</option>
                <option>WAR-20-00002</option>
              </select>
            </div>
            <div class="invalid-feedback" id="add-invalid-inventory_itemWarehouseCode"></div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label>Warehouse Name</label>
              <input type="text" class="form-control" readonly id="add-inventory_itemWarehouseName">
            </div>
            <div class="invalid-feedback" id="add-invalid-inventory_itemWarehouseName"></div>
          </div>
          <div class="col-12">
            <div class="form-group">
              <label>Warehouse Address</label>
              <input type="text" class="form-control" readonly id="add-inventory_itemWarehouseAddress">
            </div>
            <div class="invalid-feedback" id="add-invalid-inventory_itemWarehouseAddress"></div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <label>Warehouse Floor</label>
              <input type="text" class="form-control" readonly id="add-inventory_itemWarehouseFloor">
            </div>
            <div class="invalid-feedback" id="add-invalid-inventory_itemWarehouseFloor"></div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <label>Warehouse Bay</label>
              <input type="text" class="form-control" readonly id="add-inventory_itemWarehouseBay">
            </div>
            <div class="invalid-feedback" id="add-invalid-inventory_itemWarehouseBay"></div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <label>Warehouse Level</label>
              <input type="text" class="form-control" readonly id="add-inventory_itemWarehouseLevel">
            </div>
            <div class="invalid-feedback" id="add-invalid-inventory_itemWarehouseLevel"></div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label>Group Name <strong class="text-red">*</strong></label>
              <select class="form-control" name="add_group_name" required id="add-inventory_itemGroupName">
                <option disabled selected>Group Name</option>
                <option>Seasonings</option>
                <option>Pork</option>
              </select>
            </div>
            <div class="invalid-feedback" id="add-invalid-inventory_itemGroupName"></div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label>Item Name <strong class="text-red">*</strong></label>
              <input type="text" class="form-control" placeholder="Item name" name="add_item_name" id="add-inventory_itemName">
            </div>
            <div class="invalid-feedback" id="add-invalid-inventory_itemName"></div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <label>Base Price<strong class="text-red">*</strong></label>
              <input type="number" class="form-control" placeholder="Base Price" name="add_base_price" id="add-inventory_itemBasePrice">
            </div>
            <div class="invalid-feedback" id="add-invalid-inventory_itemBasePrice"></div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <label>Unit of Measure <strong class="text-red">*</strong></label>
               <select class="form-control" name="add_uom" required id="add-inventory_itemUom">
                <option selected disabled>Unit of Measure</option>
                <option>pieces</option>
                <option>boxes</option>
                <option>rolls</option>
                <option>kilograms</option>
              </select>
            </div>
            <div class="invalid-feedback" id="add-invalid-inventory_itemUom"></div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <label>Re-Order Point <strong class="text-red">*</strong></label>
              <input type="text" class="form-control" placeholder="Re-Order Point" name="add-inventory_itemReorderPoint" id="add-inventory_itemReorderPoint">
            </div>
            <div class="invalid-feedback" id="add-invalid-inventory_itemReorderPoint"></div>
          </div>

        </div>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label>VAT <strong class="text-red">*</strong></label>
              <div class="d-flex align-items-center">
                <span> NO &nbsp;</span>
                <label class="ms-switch">
                  <input type="checkbox" checked="" name="add-inventory_itemVat"id="add-inventory_itemVat"> 
                  <span class="ms-switch-slider ms-switch-success round"></span>
                </label> 
                <span>&nbsp; YES </span>
              </div>
            </div>
            <div class="invalid-feedback" id="add-invalid-inventory_itemVat"></div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label>Status <strong class="text-red">*</strong></label>
              <div class="d-flex align-items-center">
                <span> Inactive &nbsp;</span> 
                <label class="ms-switch">
                  <input type="checkbox" checked="" name="add-inventory_itemStatus" id="add-inventory_itemStatus"> 
                  <span class="ms-switch-slider ms-switch-success round"></span>
                </label> 
                <span>&nbsp; Active </span>
              </div>
            </div>
            <div class="invalid-feedback" id="add-invalid-inventory_itemStatus"></div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
         <div class="w-100 text-center">
             <button type="button" class="btn btn-primary submit-btn"id="btn-add-inventoryitem"name="save"> ADD</button>
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
          <button type="button" class="close" id="btn-add-inventoryitem-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <img class="isometric confirmationisometric" width="230px" height="100px" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/modal/confirmation.png">
        <h1 class="text-red text-center font-weight-bold">ADD INVENTORY ITEM</h1>
            <p class="text-center my-2">Are you sure you want to add new inventory item?</p>
            <div class="invalid-feedback" id="confirmation-add-invalid"></div>
        </div>
        <div class="modal-footer">
          <div class="w-100 text-center">
          <button type="button" data-dismiss="modal" class="btn btn-outline-primary shadow-none" id="btn-add-inventoryitem-close">NO</button>
            <button type="button" class="btn btn-primary shadow-none" id="add">YES</button>
        </div>
        </div>
    </div>
  </div>
</div>
<!-- <div class="modal fade" id="confirmation_add" tabindex="-1" role="dialog" aria-labelledby="confirmation_add" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-min" role="document">
    <div class="modal-content">
        <div class="modal-body pb-3 text-center">
          <button type="button" class="close" data-dismiss="modal" id="btn-edit-inventorygroup-close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <img class="isometric confirmationisometric" width="230px" height="100px" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/modal/confirmation.png">
        <h1 class="text-red text-center">ADD INVENTORY ITEM</h1>
            <h6 class="text-center my-2 text-secondary">Are you sure you want to add new Inventory Item?</h6>
            <div class="invalid-feedback" id="confirmation-add-invalid"></div>
        </div>
        <div class="modal-footer">
          <div class="float-right">
          <button type="button" data-dismiss="modal" class="btn btn-outline-primary shadow-none" id="btn-edit-inventorygroup-close">NO</button>
            <button type="button" class="btn btn-primary shadow-none" id="add_confirmation_yes">YES</button>
        </div>
        </div>
    </div>
  </div>
</div> -->

<!-- Edit Modal -->
<div class="modal fade" id="edit_inventoryitem" tabindex="-1" role="dialog" aria-labelledby="edit_inventoryitem" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header d-flex justify-content-between align-items-start bg-primary">
         <h5 class="modal-title text-light" id="exampleModalCenterTitle">EDIT INVENTORY ITEM</h5>
         <button type="button" class="close btn-close-edit-inventoryitem" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="text-light">&times;</span></button>
     </div>
      <div class="modal-body">
      
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label>Warehouse Code <strong class="text-red">*</strong></label>
              <select name="edit_warehouse_code" class="form-control" id="edit-inventory_itemWarehouseCode" required>
                <option disabled selected value>Please select Warehouse code</option>
                <option>WAR-20-00001</option>
                <option>WAR-20-00002</option>
              </select>
            </div>
            <div class="invalid-feedback" id="edit-invalid-inventory_itemWarehouseCode"></div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label>Warehouse Name</label>
              <input type="text" class="form-control" readonly id="edit-inventory_itemWarehouseName">
            </div>
            <div class="invalid-feedback" id="edit-invalid-inventory_itemWarehouseName"></div>
          </div>
          <div class="col-12">
            <div class="form-group">
              <label>Warehouse Address</label>
              <input type="text" class="form-control" readonly id="edit-inventory_itemWarehouseAddress">
            </div>
            <div class="invalid-feedback" id="edit-invalid-inventory_itemWarehouseAddress"></div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <label>Warehouse Floor</label>
              <input type="text" class="form-control" readonly id="edit-inventory_itemWarehouseFloor">
            </div>
            <div class="invalid-feedback" id="edit-invalid-inventory_itemWarehouseFloor"></div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <label>Warehouse Bay</label>
              <input type="text" class="form-control" readonly id="edit-inventory_itemWarehouseBay">
            </div>
            <div class="invalid-feedback" id="edit-invalid-inventory_itemWarehouseBay"></div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <label>Warehouse Level</label>
              <input type="text" class="form-control" readonly id="edit-inventory_itemWarehouseLevel">
            </div>
            <div class="invalid-feedback" id="edit-invalid-inventory_itemWarehouseLevel"></div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label>Group Name <strong class="text-red">*</strong></label>
              <select class="form-control" name="edit_group_name" required id="edit-inventory_itemGroupName">
                <option disabled selected>Group Name</option>
                <option>Seasonings</option>
                <option>Pork</option>
              </select>
            </div>
            <div class="invalid-feedback" id="edit-invalid-inventory_itemGroupName"></div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label>Item Name <strong class="text-red">*</strong></label>
              <input type="text" class="form-control" placeholder="Item name" name="edit_item_name" id="edit-inventory_itemName">
            </div>
            <div class="invalid-feedback" id="edit-invalid-inventory_itemName"></div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <label>Base Price<strong class="text-red">*</strong></label>
              <input type="number" class="form-control" placeholder="Base Price" name="edit_base_price" id="edit-inventory_itemBasePrice">
            </div>
            <div class="invalid-feedback" id="edit-invalid-inventory_itemBasePrice"></div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <label>Unit of Measure <strong class="text-red">*</strong></label>
               <select class="form-control" name="edit_uom" required id="edit-inventory_itemUom">
                <option selected disabled>Unit of Measure</option>
                <option>pieces</option>
                <option>boxes</option>
                <option>rolls</option>
                <option>kilograms</option>
              </select>
            </div>
            <div class="invalid-feedback" id="edit-invalid-inventory_itemUom"></div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <label>Re-Order Point <strong class="text-red">*</strong></label>
              <input type="text" class="form-control" placeholder="Re-Order Point" name="edit-inventory_itemReorderPoint" id="edit-inventory_itemReorderPoint">
            </div>
            <div class="invalid-feedback" id="edit-invalid-inventory_itemReorderPoint"></div>
          </div>

        </div>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label>VAT <strong class="text-red">*</strong></label>
              <div class="d-flex align-items-center">
                <span> NO &nbsp;</span>
                <label class="ms-switch">
                  <input type="checkbox" checked="" name="edit-inventory_itemVat"id="edit-inventory_itemVat"> 
                  <span class="ms-switch-slider ms-switch-success round"></span>
                </label> 
                <span>&nbsp; YES </span>
              </div>
            </div>
            <div class="invalid-feedback" id="edit-invalid-inventory_itemVat"></div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label>Status <strong class="text-red">*</strong></label>
              <div class="d-flex align-items-center">
                <span> Inactive &nbsp;</span> 
                <label class="ms-switch">
                  <input type="checkbox" checked="" name="edit-inventory_itemStatus" id="edit-inventory_itemStatus"> 
                  <span class="ms-switch-slider ms-switch-success round"></span>
                </label> 
                <span>&nbsp; Active </span>
              </div>
            </div>
            <div class="invalid-feedback" id="edit-invalid-inventory_itemStatus"></div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
         <div class="w-100 text-center">
             <button type="button" class="btn btn-primary submit-btn"id="btn-edit-inventoryitem"name="save"> UPDATE</button>
         </div>
     </div>
    </div>
  </div>
</div>
<!-- <div class="modal fade" id="edit_modal" tabindex="-1" role="dialog" aria-labelledby="add_modalcourier" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="w-100 text-center">
            <h5 class="modal-title text-red p-2" id="exampleModalCenterTitle">EDIT INVENTORY ITEM</h5>
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
      
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label>Warehouse Code <strong class="text-red">*</strong></label>
              <select name="add_warehouse_code" class="form-control" required>
                <option disabled  value>Please select Warehouse code</option>
                <option selected>WAR-20-00001</option>
                <option>WAR-20-00002</option>
              </select>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label>Warehouse Name</label>
              <input type="text" class="form-control" value="Warehouse 1" readonly>
            </div>
          </div>
          <div class="col-12">
            <div class="form-group">
              <label>Warehouse Address</label>
              <input type="text" class="form-control" value="Pasig City" readonly>
            </div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <label>Warehouse Floor</label>
              <input type="text" class="form-control" value="Floor 1" readonly>
            </div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <label>Warehouse Bay</label>
              <input type="text" class="form-control" value="Bay 1" readonly>
            </div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <label>Warehouse Level</label>
              <input type="text" class="form-control" value="Level 1" readonly>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label>Group Name <strong class="text-red">*</strong></label>
              <select class="form-control" name="add_group_name" required>
                <option disabled >Please Select Group Name</option>
                <option selected>Seasonings</option>
                <option>Pork</option>
              </select>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label>Item Name <strong class="text-red">*</strong></label>
              <input type="text" class="form-control" value=" Soy Sauce" name="edit_item_name" id="add_contactnumber">
            </div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <label>Base Price<strong class="text-red">*</strong></label>
              <input type="number" class="form-control" value="150.00" name="edit_base_price" id="add_tinnumber">
            </div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <label>Unit of Measure <strong class="text-red">*</strong></label>
               <select class="form-control" name="edit_uom" required>
                <option disabled>Please select Unit of Measure</option>
                <option selected>pieces</option>
                <option>boxes</option>
                <option>rolls</option>
                <option>kilograms</option>
              </select>
            </div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <label>Re-Order Point <strong class="text-red">*</strong></label>
              <input type="text" class="form-control" placeholder="Re-Order Point" name="add_tinnumber" id="add_tinnumber">
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
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">CANCEL</button>
        <button type="button" class="btn btn-primary btn-edit" id="edit_save">UPDATE</button>
      </div>
    </div>
  </div>
</div> -->

<!-- Confirmation Edit Modal Courier  -->
<!-- <div class="modal fade" id="edit_confirmation" tabindex="-1" role="dialog" aria-labelledby="edit_confirmationcourier" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-min" role="document">
    <div class="modal-content">
        <div class="modal-body pb-3 text-center">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <img class="isometric confirmationisometric" width="230px" height="100px" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/modal/confirmation.png">
        <h1 class="text-red text-center">UPDATE INVENTORY ITEM COURIER</h1>
            <h6 class="text-center my-2 text-secondary">Are you sure you want to update Inventory Item?</h6>
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
<div class="modal fade" id="confirmation_edit" tabindex="-1" role="dialog" aria-labelledby="confirmation_edit" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-min" role="document">
    <div class="modal-content">
        <div class="modal-body pb-3 text-center">
          <button type="button" class="close" id="btn-edit-inventoryitem-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <img class="isometric confirmationisometric" width="230px" height="100px" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/modal/confirmation.png">
        <h1 class="text-red text-center font-weight-bold">UPDATE INVENTORY ITEM</h1>
            <p class="text-center my-2">Are you sure you want to update this inventory item?</p>
            <div class="invalid-feedback" id="confirmation-edit-invalid"></div>
        </div>
        <div class="modal-footer">
          <div class="w-100 text-center">
          <button type="button" data-dismiss="modal" class="btn btn-outline-primary shadow-none" id="btn-edit-inventoryitem-close">NO</button>
            <button type="button" class="btn btn-primary shadow-none" id="edit">YES</button>
        </div>
        </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function() {

    // DATATABLES
    $("#tablecourier").dataTable();

    const elemArr = ["inventory_itemWarehouseCode", "inventory_itemGroupName", "inventory_itemName", "inventory_itemBasePrice", "inventory_itemUom", "inventory_itemReorderPoint"];
    const elemArrText = ["Warehouse Code", "Group Name", "Item Name", "Base Price", "Unit of Measurement", "Re-order Point"];
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

    $(document).on("click", ".btn-close-add-inventoryitem, .btn-close-edit-inventoryitem", function() {
      clearInputs();
    })

    $(document).on("click", "#btn-edit-inventoryitem-close", function() {
      $("#edit_inventoryitem").modal("show");
      $("#confirmation_edit").modal("hide");
    })

    $(document).on("click", "#btn-add-inventoryitem-close", function() {
      $("#add_inventoryitem").modal("show");
      $("#confirmation_add").modal("hide");
    })

    $(document).on("click", "#btn-edit-inventoryitem", function() {
      const validate = validateInputs("edit");
      if (validate) {
        $("#edit_inventoryitem").modal("hide");
        $("#confirmation_edit").modal("show");
      }
    })

    $(document).on("click", "#btn-add-inventoryitem", function() {
      const validate = validateInputs("add");
      if (validate) {
        $("#add_inventoryitem").modal("hide");
        $("#confirmation_add").modal("show");
      }
    })

  })
</script>