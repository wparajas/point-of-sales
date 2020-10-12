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
                  <button class="btn btn-outline-red" data-toggle="modal" data-target="#add_inventoryitem" data-backdrop="static" data-keyboard="false">
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
                            <th style="width: 90px">ITEM CODE</th>
                            <th>ITEM NAME</th>
                            <th>INVENTORY GROUP</th>
                            <th style="width: 30px">VAT</th>
                            <th>BASE PRICE</th>
                            <th>UOM</th>
                            <th>WAREHOUSE</th>
                            <th style="width: 50px">STATUS</th>
                            <th style="width: 50px">ACTION</th>
                          </tr>
                        </thead>
                          <tbody>
                         
                          <?php foreach($inventory_items as $inventory_item) { ?>
                            <tr>
                              <td><?= $inventory_item["invr_itemCode"] ?></td>
                              <td><?= $inventory_item["invr_itemName"] ?></td>
                              <td><?= $inventory_item["invr_groupName"] ?></td>
                              <td><?= $inventory_item["invr_itemVat"] == 1 ? "YES" : "NO" ?></td>
                              <td class="text-right"><?= '₱ '.formatcurrency($inventory_item["invr_itemBaseprice"]) ?></td>
                              <td><?= $inventory_item["measurement_name"] ?></td>
                              <td><?= $inventory_item["invr_storageCode"] ?></td>
                              <td class="text-center">
                                <?php
                                  $status = $inventory_item['invr_itemStatus'] == 1 ? 'Active' : 'Inactive';
                                  $badge = $inventory_item['invr_itemStatus'] == 1 ? 'badge-outline-success' : 'badge-outline-danger';
                                ?>
                                <span class="badge <?= $badge ?> w-100"><?= $status ?></span>
                              </td>
                              <td>
                                <div class="drop-down float-right">
                                  <a href="#" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false"> <i class="material-icons" style="font-size: 1.5rem">more_vert</i></a>
                                  <ul class="dropdown-menu dropdown-menu-right">
                                    <li class="ms-dropdown-list">
                                      <a class="media p-2 btn-edit-modal-inventory_item" href="javascript:void(0)"
                                      data-invr_itemid="<?= $inventory_item['invr_itemID'] ?>"
                                      data-invr_groupid="<?= $inventory_item['invr_groupID'] ?>"
                                      data-invr_itemcode="<?= $inventory_item['invr_itemCode'] ?>"
                                      data-invr_itemname="<?= $inventory_item['invr_itemName'] ?>"
                                      data-invr_itembaseprice="<?= $inventory_item['invr_itemBaseprice'] ?>"
                                      data-measurementID="<?= $inventory_item['measurementID'] ?>"
                                      data-invr_itemreorder="<?= $inventory_item['invr_itemReorder'] ?>"
                                      data-invr_itemvat="<?= $inventory_item['invr_itemVat'] ?>"
                                      data-invr_itemstatus="<?= $inventory_item['invr_itemStatus'] ?>"
                                      data-invr_groupName="<?= $inventory_item['invr_groupName'] ?>"
                                      data-measurement_name="<?= $inventory_item['measurement_name'] ?>"
                                      data-invr_storageCode="<?= $inventory_item['invr_storageCode'] ?>"
                                      data-invr_storageid="<?= $inventory_item['invr_storageID'] ?>">
                                        <div class="media-body editcourier">
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

<!-- Add Modal -->
<div class="modal fade" id="add_inventoryitem" role="dialog" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header d-flex justify-content-between align-items-start bg-primary">
         <h5 class="modal-title text-light" id="exampleModalCenterTitle">ADD INVENTORY ITEM</h5>
         <button type="button" class="close btn-close-add-inventoryitem" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="text-light">&times;</span></button>
     </div>
      <div class="modal-body">
        <form id="form-add-inventory_item">
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label>Warehouse Code <strong class="text-red">*</strong></label>
                <select class="form-control add-inventory_itemWarehouseCode select2" name="add-inventory_itemWarehouseCode" id="add-inventory_itemWarehouseCode" style="width: 100%">
                  <option value="" selected disabled>Select Warehouse Code</option>
                  <?php foreach ($inventory_storages as $storage) { ?>
                    <option value="<?= $storage['invr_storageID'] ?>"><?= $storage['invr_storageCode'] ?></option>
                  <?php } ?>
                </select>
                <div class="invalid-feedback" id="add-invalid-inventory_itemWarehouseCode"></div>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label>Warehouse Name</label>
                <input type="text" class="form-control" readonly id="add-inventory_itemWarehouseName">
                <div class="invalid-feedback" id="add-invalid-inventory_itemWarehouseName"></div>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Warehouse Address</label>
                <input type="text" class="form-control" readonly id="add-inventory_itemWarehouseAddress">
                <div class="invalid-feedback" id="add-invalid-inventory_itemWarehouseAddress"></div>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label>Warehouse Floor</label>
                <input type="text" class="form-control" readonly id="add-inventory_itemWarehouseFloor">
                <div class="invalid-feedback" id="add-invalid-inventory_itemWarehouseFloor"></div>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label>Warehouse Bay</label>
                <input type="text" class="form-control" readonly id="add-inventory_itemWarehouseBay">
                <div class="invalid-feedback" id="add-invalid-inventory_itemWarehouseBay"></div>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label>Warehouse Level</label>
                <input type="text" class="form-control" readonly id="add-inventory_itemWarehouseLevel">
                <div class="invalid-feedback" id="add-invalid-inventory_itemWarehouseLevel"></div>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label>Group Name <strong class="text-red">*</strong></label>
                <select class="form-control add-inventory_itemGroupName select2" name="add-inventory_itemGroupName" id="add-inventory_itemGroupName" style="width: 100%">
                  <option value="" selected disabled>Select Inventory Group</option>
                  <?php foreach ($inventory_groups as $group) { ?>
                    <option value="<?= $group['invr_groupID'] ?>"><?= $group['invr_groupName'] ?></option>
                  <?php } ?>
                </select>
                <div class="invalid-feedback" id="add-invalid-inventory_itemGroupName"></div>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label>Item Name <strong class="text-red">*</strong></label>
                <input type="text" class="form-control alphanumericdashspace" placeholder="Item Name" name="add_item_name" autocomplete="off" id="add-inventory_itemName">
                <div class="invalid-feedback" id="add-invalid-inventory_itemName"></div>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label>Based Price<strong class="text-red">*</strong></label>
                <input type="text" class="form-control text-right numberdot" placeholder="Based Price" name="add_base_price" autocomplete="off" id="add-inventory_itemBasePrice">
                <div class="invalid-feedback" id="add-invalid-inventory_itemBasePrice"></div>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label>Unit of Measure <strong class="text-red">*</strong></label>
                <select name="adduom" id="add-inventory_itemUom" class="form-control select2" style="width: 100%">
                  <option value="" selected disabled>Select Unit of Measurement</option>
                  <optgroup label="Length">
                    <?php foreach ($measurements as $measurement) { ?>
                      <?php if ($measurement['measurement_category'] === "Length") { ?>
                    <option value="<?= $measurement['measurementID'] ?>"><?= $measurement['measurement_name'] ?></option>
                      <?php } ?>
                    <?php } ?> 
                  </optgroup>
                  <optgroup label="Volume">
                    <?php foreach ($measurements as $measurement) { ?>
                      <?php if ($measurement['measurement_category'] === "Volume") { ?>
                    <option value="<?= $measurement['measurementID'] ?>"><?= $measurement['measurement_name'] ?></option>
                      <?php } ?>
                    <?php } ?> 
                  </optgroup>
                  <optgroup label="Weight">
                    <?php foreach ($measurements as $measurement) { ?>
                      <?php if ($measurement['measurement_category'] === "Weight") { ?>
                    <option value="<?= $measurement['measurementID'] ?>"><?= $measurement['measurement_name'] ?></option>
                      <?php } ?>
                    <?php } ?> 
                  </optgroup>
                  <optgroup label="Pieces">
                    <?php foreach ($measurements as $measurement) { ?>
                      <?php if ($measurement['measurement_category'] === "Pieces") { ?>
                    <option value="<?= $measurement['measurementID'] ?>"><?= $measurement['measurement_name'] ?></option>
                      <?php } ?>
                    <?php } ?> 
                  </optgroup>
                </select>
                <div class="invalid-feedback" id="add-invalid-inventory_itemUom"></div>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label>Re-Order Point <strong class="text-red">*</strong></label>
                <input type="text" class="form-control numbersonly" placeholder="Re-Order Point" autocomplete="off" name="add-inventory_itemReorderPoint" id="add-inventory_itemReorderPoint">
                <div class="invalid-feedback" id="add-invalid-inventory_itemReorderPoint"></div>
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
        </form>
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
            <p class="text-center my-2">Are you sure you want to add inventory item?</p>
            <div class="invalid-feedback d-flex justify-content-center align-items-center" id="confirmation-add-invalid"></div>
        </div>
        <div class="modal-footer">
          <div class="w-100 text-center">
          <button type="button" data-dismiss="modal" class="btn btn-outline-primary shadow-none" id="btn-add-inventoryitem-close">NO</button>
            <button type="button" class="btn btn-primary shadow-none" id="btn-add-save-inventory_item">YES</button>
        </div>
        </div>
    </div>
  </div>
</div>

<div class="modal fade" id="edit_inventoryitem" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header d-flex justify-content-between align-items-start bg-primary">
         <h5 class="modal-title text-light" id="exampleModalCenterTitle">EDIT INVENTORY ITEM</h5>
         <button type="button" class="close btn-close-edit-inventoryitem" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="text-light">&times;</span></button>
     </div>
      <div class="modal-body">
        <form id="form-edit-inventory_item">
        <input type="hidden" name="edit-inventory_itemID" id="edit-inventory_itemID">
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label>Warehouse Code <strong class="text-red">*</strong></label>
                <select class="form-control edit-inventory_itemWarehouseCode select2" name="edit-inventory_itemWarehouseCode" id="edit-inventory_itemWarehouseCode" style="width: 100%">
                  <option value="" selected disabled>Select Warehouse Code</option>
                  <?php foreach ($inventory_storages as $storage) { ?>
                    <option value="<?= $storage['invr_storageID'] ?>"><?= $storage['invr_storageCode'] ?></option>
                  <?php } ?>
                </select>
                <div class="invalid-feedback" id="edit-invalid-inventory_itemWarehouseCode"></div>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label>Warehouse Name</label>
                <input type="text" class="form-control" readonly id="edit-inventory_itemWarehouseName">
                <div class="invalid-feedback" id="edit-invalid-inventory_itemWarehouseName"></div>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Warehouse Address</label>
                <input type="text" class="form-control" readonly id="edit-inventory_itemWarehouseAddress">
                <div class="invalid-feedback" id="edit-invalid-inventory_itemWarehouseAddress"></div>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label>Warehouse Floor</label>
                <input type="text" class="form-control" readonly id="edit-inventory_itemWarehouseFloor">
                <div class="invalid-feedback" id="edit-invalid-inventory_itemWarehouseFloor"></div>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label>Warehouse Bay</label>
                <input type="text" class="form-control" readonly id="edit-inventory_itemWarehouseBay">
                <div class="invalid-feedback" id="edit-invalid-inventory_itemWarehouseBay"></div>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label>Warehouse Level</label>
                <input type="text" class="form-control" readonly id="edit-inventory_itemWarehouseLevel">
                <div class="invalid-feedback" id="edit-invalid-inventory_itemWarehouseLevel"></div>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label>Group Name <strong class="text-red">*</strong></label>
                <select class="form-control edit-inventory_itemGroupName select2" name="edit-inventory_itemGroupName" id="edit-inventory_itemGroupName" style="width: 100%">
                  <option value="" selected disabled>Select Inventory Group</option>
                  <?php foreach ($inventory_groups as $group) { ?>
                    <option value="<?= $group['invr_groupID'] ?>"><?= $group['invr_groupName'] ?></option>
                  <?php } ?>
                </select>
                <div class="invalid-feedback" id="edit-invalid-inventory_itemGroupName"></div>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label>Item Name <strong class="text-red">*</strong></label>
                <input type="text" class="form-control alphanumericdashspace" placeholder="Item Name" name="edit_item_name" autocomplete="off" id="edit-inventory_itemName">
                <div class="invalid-feedback" id="edit-invalid-inventory_itemName"></div>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label>Based Price<strong class="text-red">*</strong></label>
                <input type="text" class="form-control text-right numberdot" placeholder="Based Price" name="edit_base_price" autocomplete="off" id="edit-inventory_itemBasePrice">
                <div class="invalid-feedback" id="edit-invalid-inventory_itemBasePrice"></div>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label>Unit of Measure <strong class="text-red">*</strong></label>
                <select name="edituom" id="edit-inventory_itemUom" class="form-control select2" style="width: 100%">
                  <option value="" selected disabled>Select Unit of Measurement</option>
                  <optgroup label="Length">
                    <?php foreach ($measurements as $measurement) { ?>
                      <?php if ($measurement['measurement_category'] === "Length") { ?>
                    <option value="<?= $measurement['measurementID'] ?>"><?= $measurement['measurement_name'] ?></option>
                      <?php } ?>
                    <?php } ?> 
                  </optgroup>
                  <optgroup label="Volume">
                    <?php foreach ($measurements as $measurement) { ?>
                      <?php if ($measurement['measurement_category'] === "Volume") { ?>
                    <option value="<?= $measurement['measurementID'] ?>"><?= $measurement['measurement_name'] ?></option>
                      <?php } ?>
                    <?php } ?> 
                  </optgroup>
                  <optgroup label="Weight">
                    <?php foreach ($measurements as $measurement) { ?>
                      <?php if ($measurement['measurement_category'] === "Weight") { ?>
                    <option value="<?= $measurement['measurementID'] ?>"><?= $measurement['measurement_name'] ?></option>
                      <?php } ?>
                    <?php } ?> 
                  </optgroup>
                  <optgroup label="Pieces">
                    <?php foreach ($measurements as $measurement) { ?>
                      <?php if ($measurement['measurement_category'] === "Pieces") { ?>
                    <option value="<?= $measurement['measurementID'] ?>"><?= $measurement['measurement_name'] ?></option>
                      <?php } ?>
                    <?php } ?> 
                  </optgroup>
                </select>
                <div class="invalid-feedback" id="edit-invalid-inventory_itemUom"></div>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label>Re-Order Point <strong class="text-red">*</strong></label>
                <input type="text" class="form-control numbersonly" placeholder="Re-Order Point" autocomplete="off" name="edit-inventory_itemReorderPoint" id="edit-inventory_itemReorderPoint">
                <div class="invalid-feedback" id="edit-invalid-inventory_itemReorderPoint"></div>
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
        </form>
      </div>
      <div class="modal-footer">
         <div class="w-100 text-center">
             <button type="button" class="btn btn-primary submit-btn"id="btn-edit-inventoryitem"name="save"> UPDATE</button>
         </div>
     </div>
    </div>
  </div>
</div>

<div class="modal fade" id="confirmation_edit" tabindex="-1" role="dialog" aria-labelledby="confirmation_edit" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-min" role="document">
    <div class="modal-content">
        <div class="modal-body pb-3 text-center">
          <button type="button" class="close" id="btn-edit-inventoryitem-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <img class="isometric confirmationisometric" width="230px" height="100px" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/modal/confirmation.png">
        <h1 class="text-red text-center font-weight-bold">UPDATE INVENTORY ITEM</h1>
            <p class="text-center my-2">Are you sure you want to update inventory item?</p>
            <div class="invalid-feedback d-flex justify-content-center align-items-center" id="confirmation-edit-invalid"></div>
        </div>
        <div class="modal-footer">
          <div class="w-100 text-center">
          <button type="button" data-dismiss="modal" class="btn btn-outline-primary shadow-none" id="btn-edit-inventoryitem-close">NO</button>
            <button type="button" class="btn btn-primary shadow-none" id="btn-edit-save-inventory_item">YES</button>
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

    // DATATABLES
    $("#tablecourier").dataTable();

    $('.select2').select2();

    const elemArr = ["inventory_itemWarehouseCode", "inventory_itemGroupName", "inventory_itemName", "inventory_itemBasePrice", "inventory_itemUom", "inventory_itemReorderPoint"];
    const elemArrText = ["Warehouse Code", "Group Name", "Item Name", "Base Price", "Unit of Measurement", "Re-order Point"];
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

    const loadWarehouseDetails = (warehouseCode, todo) => {
      const data = {warehouseCode};
      $.ajax({
        method: "POST",
        url: "<?= base_url().'InventoryItem/loadWarehouseDetails' ?>",
        async: true,
        data,
        dataType: 'json',
        success: function(data) {
          if (data.length > 0) {
            data.map(item => {
              $("#"+todo+"-inventory_itemWarehouseName").val(item.invr_storageName);
              $("#"+todo+"-inventory_itemWarehouseAddress").val(item.invr_storageAddress);
              $("#"+todo+"-inventory_itemWarehouseFloor").val(item.invr_storageFloor);
              $("#"+todo+"-inventory_itemWarehouseBay").val(item.invr_storageBay);
              $("#"+todo+"-inventory_itemWarehouseLevel").val(item.invr_storageLevel);
            });
          }
        }
      })
    }

    const saveInventoryItem = (data, todo) => {
      const controllerTodo = todo == "add" ? "<?= site_url('InventoryItem/save');?>" : "<?= site_url('InventoryItem/update');?>";
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
            window.location.replace('<?= base_url().'inventoryitem' ?>');
          }
        }
      })
    }

    $(document).on("click", "#btn-edit-save-inventory_item", function() {
      const inventory_itemID = $("#edit-inventory_itemID").val().trim();
      const inventory_itemWarehouseCode = $("#edit-inventory_itemWarehouseCode").val().trim();
      const inventory_itemGroupName = $("#edit-inventory_itemGroupName").val().trim();
      const inventory_itemName = $("#edit-inventory_itemName").val().trim();
      const inventory_itemBasePrice = $("#edit-inventory_itemBasePrice").val().trim();
      const inventory_itemUom = $("#edit-inventory_itemUom").val().trim();
      const inventory_itemReorderPoint = $("#edit-inventory_itemReorderPoint").val().trim();
      const inventory_itemStatus = $("input[id='edit-inventory_itemStatus']:checked").val() ? 1 : 0;
      const inventory_itemVat = $("input[id='edit-inventory_itemVat']:checked").val() ? 1 : 0;

      const data = {
        inventory_itemID,
        inventory_itemWarehouseCode,
        inventory_itemGroupName,
        inventory_itemName,
        inventory_itemBasePrice,
        inventory_itemUom,
        inventory_itemReorderPoint,
        inventory_itemStatus,
        inventory_itemVat
      };
      saveInventoryItem(data, "edit");
    })

    // SAVE INVENTORY ITEM
    $(document).on("click", "#btn-add-save-inventory_item", function() {
      const inventory_itemWarehouseCode = $("#add-inventory_itemWarehouseCode").val().trim();
      const inventory_itemGroupName = $("#add-inventory_itemGroupName").val().trim();
      const inventory_itemName = $("#add-inventory_itemName").val().trim();
      const inventory_itemBasePrice = $("#add-inventory_itemBasePrice").val().trim();
      const inventory_itemUom = $("#add-inventory_itemUom").val().trim();
      const inventory_itemReorderPoint = $("#add-inventory_itemReorderPoint").val().trim();
      const inventory_itemStatus = $("input[id='add-inventory_itemStatus']:checked").val() ? 1 : 0;
      const inventory_itemVat = $("input[id='add-inventory_itemVat']:checked").val() ? 1 : 0;

      const data = {
        inventory_itemWarehouseCode,
        inventory_itemGroupName,
        inventory_itemName,
        inventory_itemBasePrice,
        inventory_itemUom,
        inventory_itemReorderPoint,
        inventory_itemStatus,
        inventory_itemVat
      };
      saveInventoryItem(data, "add");
    })

    $(document).on("click", ".btn-edit-modal-inventory_item", function() {
      const invr_itemID = $(this).data("invr_itemid");
      const invr_storageID = $(this).data("invr_storageid");
      const invr_groupID = $(this).data("invr_groupid");
      const invr_itemCode = $(this).data("invr_itemcode");
      const invr_itemName = $(this).data("invr_itemname");
      const invr_itemBaseprice = $(this).data("invr_itembaseprice");
      const measurementID = $(this).data("measurementid");
      const invr_itemReorder = $(this).data("invr_itemreorder");
      const invr_itemVat = $(this).data("invr_itemvat") == 1 ? true : false;
      const invr_itemStatus = $(this).data("invr_itemstatus") == 1 ? true : false;

      $("#edit-inventory_itemID").val(invr_itemID);
      $("#edit-inventory_itemWarehouseCode").val(invr_storageID).trigger("change");
      $("#edit-inventory_itemGroupName").val(invr_groupID).trigger("change");
      $("#edit-inventory_itemName").val(invr_itemName);
      $("#edit-inventory_itemBasePrice").val(invr_itemBaseprice);
      $("#edit-inventory_itemUom").val(measurementID).trigger("change");
      $("#edit-inventory_itemReorderPoint").val(invr_itemReorder);
      $("input[id='edit-inventory_itemStatus']").prop("checked", invr_itemStatus);
      $("input[id='edit-inventory_itemVat']").prop("checked", invr_itemVat);
      loadWarehouseDetails(invr_storageID, "edit");

      $("#edit_inventoryitem").modal("show");
    })

    // WAREHOUSE CODE CHANGES
    $(document).on("change", "#add-inventory_itemWarehouseCode", function() {
      const warehouseCode = $(this).val();
      loadWarehouseDetails(warehouseCode, "add");
    })
    $(document).on("change", "#edit-inventory_itemWarehouseCode", function() {
      const warehouseCode = $(this).val();
      loadWarehouseDetails(warehouseCode, "edit");
    })

    $(document).on("click", ".btn-close-add-inventoryitem, .btn-close-edit-inventoryitem", function() {
      clearInputs();
      $("#form-add-inventory_item").trigger("reset");
      $("#add-inventory_itemWarehouseCode").val("").trigger("change");
      $("#add-inventory_itemGroupName").val("").trigger("change");
      $("#add-inventory_itemUom").val("").trigger("change");
    })

    $(document).on("click", "#btn-edit-inventoryitem-close", function() {
      $("#confirmation-edit-invalid").html("");
      $("#edit_inventoryitem").modal("show");
      $("#confirmation_edit").modal("hide");
    })

    $(document).on("click", "#btn-add-inventoryitem-close", function() {
      $("#confirmation-add-invalid").html("");
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