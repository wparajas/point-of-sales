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
                  <li class="breadcrumb-item"><a href="<?= base_url(). 'Dashboard' ?>"><i class="material-icons fs-16">dashboard</i> Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Inventory Storage</li>
              </ol>
          </nav>
        </div>

         <div class="content container-fluid">
         <div class="ms-card">
         <div class="ms-panel-header d-flex justify-content-between align-items-center bg-primary">
              <h6 class="page-title text-white" >LIST OF INVENTORY STORAGE</h6>

              <button class="btn btn-outline-red" data-toggle="modal" data-target="#add_inventorystorage">
                <i class="fa fa-plus-square"></i>&nbsp;ADD INVENTORY STORAGE
              </button>

        </div>
  
    <div class="col-xl-12 col-md-12">
 <br><br>      
          <div class="table-responsive container-fluid">
            <table id="tabledepartment" class="table table-bordered thead-primary dtBasicExample">
              <thead>
                <tr class="text-center">
                  <th>WAREHOUSE CODE</th>
                  <th>WAREHOUSE NAME</th>
                  <th>ADDRESS</th>
                  <th>FLOOR</th>
                  <th>BAY</th>
                  <th>LEVEL</th>
                  <th>STATUS</th>
                  <th>ACTION</th>
                </tr>
              </thead>
                <tbody>
               
                  <tr>
                    <td>WAR-20-00001</td>
                    <td>Warehouse 1</td>
                    <td>Pasig City </td>
                    <td>Floor 1</td>
                    <td>Bay 1</td>
                    <td>Level 1</td>
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
                                   data-target="#edit_inventorystorage" 
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
<br><br>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="add_inventorystorage" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg"  role="document">
    <div class="modal-content">
      <div class="modal-header d-flex justify-content-between align-items-start bg-primary">
        <h5 class="modal-title text-light" id="exampleModalCenterTitle">ADD INVENTORY STORAGE</h5>
        <button type="button" class="close btn-close-add-inventorystorage" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="text-light">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="form-group p-3">
          <div class="row">
            
            <div class="col-6 p-2">
              <label>Warehouse <strong class="text-red">*</strong></label>
              <input type="text" class="form-control" name="add-inventory_storageWarehouse" id="add-inventory_storageWarehouse" placeholder=" Warehouse name">
              <div class="invalid-feedback" id="add-invalid-inventory_storageWarehouse"></div>
            </div>
            <div class="col-6 p-2">
              <label>Address <strong class="text-red">*</strong></label>
              <input class="form-control" placeholder="Warehouse Description" name="" id="add-inventory_storageAddress">
              <div class="invalid-feedback" id="add-invalid-inventory_storageAddress"></div>
            </div>

            <div class="col-4 p-2">
              <label>Floor </label>
              <input class="form-control" placeholder="Enter floor (Optional)" name="" id="add-inventory_storageFloor">
              <div class="invalid-feedback" id="add-invalid-inventory_storageFloor"></div>
            </div>
            <div class="col-4 p-2">
              <label>Bay</label>
              <input class="form-control" placeholder="Enter bay (Optional)" name="" id="add-inventory_storageBay">
              <div class="invalid-feedback" id="add-invalid-inventory_storageBay"></div>
            </div>
            <div class="col-4 p-2">
              <label>Level</label>
              <input class="form-control" placeholder="Enter level (Optional)" name="" id="add-inventory_storageLevel">
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

<!-- CONFIRMATION FOR ADD -->
<!-- <div class="modal fade" id="add_confirmation" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered"  role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="form-group p-3">
          <div class="row">
          <img style="margin:auto;" width="230px" height="100px" src="<?php echo base_url();?>pages\assets\img\modal\confirmation.png">
          <br>
          <h1 class="text-red" style="margin:auto;">ADD INVENTORY STORAGE</h1>
          <span class="text-secondary" style="margin:auto;">Are you sure you want to add new Inventory Storage?</span>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger btn-no" data-dismiss="modal">NO</button>
        <button type="button" class="btn btn-primary">YES</button>
      </div>
    </div>
  </div>
</div> -->

<div class="modal fade" id="confirmation_add" tabindex="-1" role="dialog" aria-labelledby="confirmation_add" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-min" role="document">
    <div class="modal-content">
        <div class="modal-body pb-3 text-center">
          <button type="button" class="close" id="btn-add-inventorystorage-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <img class="isometric confirmationisometric" width="230px" height="100px" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/modal/confirmation.png">
        <h1 class="text-red text-center font-weight-bold">ADD INVENTORY STORAGE</h1>
            <p class="text-center my-2">Are you sure you want to add new Inventory Storage?</p>
            <div class="invalid-feedback" id="confirmation-add-invalid"></div>
        </div>
        <div class="modal-footer">
          <div class="w-100 text-center">
          <button type="button" data-dismiss="modal" class="btn btn-outline-primary shadow-none" id="btn-add-inventorystorage-close">NO</button>
            <button type="button" class="btn btn-primary shadow-none" id="add">YES</button>
        </div>
        </div>
    </div>
  </div>
</div>


<!-- EDIT MODAL -->
<!-- <div class="modal fade" id="edit_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg"  role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="w-100 text-center">
            <h5 class="modal-title text-red p-2" id="exampleModalCenterTitle">EDIT INVENTORY STORAGE</h5>
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <div class="form-group p-3">
          <div class="row">

            <div class="col-6 p-2">
              <label>Warehouse <strong class="text-red">*</strong></label>
              <input type="text" class="form-control" name="courier_name" value="Warehouse 1">
            </div>
            <div class="col-6 p-2">
              <label>Address <strong class="text-red">*</strong></label>
              <input class="form-control" value="Pasig City" name="" >
            </div>

            <div class="col-4 p-2">
              <label>Floor </label>
              <input class="form-control" value="Floor 1" name="" >
            </div>
            <div class="col-4 p-2">
              <label>Bay</label>
              <input class="form-control" value="Bay 1" name="" >
            </div>
            <div class="col-4 p-2">
              <label>Level</label>
              <input class="form-control" value="Level 1" name="" >
            </div>


          <div class="col-12 p-2">
            <label>Status <strong class="text-red">*</strong></label>
            <div class="d-flex align-items-center">
              <span> Inactive </span> &nbsp;
                  <label class="ms-switch">
                  <input type="checkbox" checked="" name="addstatus" id="addstatus"> 
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
        <button type="button" class="btn btn-primary btn-edit">UPDATE</button>
      </div>
    </div>
  </div>
</div> -->
<div class="modal fade" id="edit_inventorystorage" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg"  role="document">
    <div class="modal-content">
      <div class="modal-header d-flex justify-content-between align-items-start bg-primary">
        <h5 class="modal-title text-light" id="exampleModalCenterTitle">EDIT INVENTORY STORAGE</h5>
        <button type="button" class="close btn-close-edit-inventorystorage" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="text-light">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="form-group p-3">
          <div class="row">
            
            <div class="col-6 p-2">
              <label>Warehouse <strong class="text-red">*</strong></label>
              <input type="text" class="form-control" name="edit-inventory_storageWarehouse" id="edit-inventory_storageWarehouse" placeholder=" Warehouse name">
              <div class="invalid-feedback" id="edit-invalid-inventory_storageWarehouse"></div>
            </div>
            <div class="col-6 p-2">
              <label>Address <strong class="text-red">*</strong></label>
              <input class="form-control" placeholder="Warehouse Description" name="" id="edit-inventory_storageAddress">
              <div class="invalid-feedback" id="edit-invalid-inventory_storageAddress"></div>
            </div>

            <div class="col-4 p-2">
              <label>Floor </label>
              <input class="form-control" placeholder="Enter floor (Optional)" name="" id="edit-inventory_storageFloor">
              <div class="invalid-feedback" id="edit-invalid-inventory_storageFloor"></div>
            </div>
            <div class="col-4 p-2">
              <label>Bay</label>
              <input class="form-control" placeholder="Enter bay (Optional)" name="" id="edit-inventory_storageBay">
              <div class="invalid-feedback" id="edit-invalid-inventory_storageBay"></div>
            </div>
            <div class="col-4 p-2">
              <label>Level</label>
              <input class="form-control" placeholder="Enter level (Optional)" name="" id="edit-inventory_storageLevel">
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


<!-- CONFIRMATION FOR ADD -->
<!-- <div class="modal fade" id="edit_confirmation" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered"  role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="form-group p-3">
          <div class="row">
          <img style="margin:auto;" width="230px" height="100px" src="<?php echo base_url();?>pages\assets\img\modal\confirmation.png">
          <br>
          <h1 class="text-red" style="margin:auto;">UPDATE INVENTORY STORAGE</h1>
          <span class="text-secondary" style="margin:auto;">Are you sure you want to update Inventory Storage?</span>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger btn-no-edit" data-dismiss="modal">NO</button>
        <button type="button" class="btn btn-primary">YES</button>
      </div>
    </div>
  </div>
</div> -->

<div class="modal fade" id="confirmation_edit" tabindex="-1" role="dialog" aria-labelledby="confirmation_edit" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-min" role="document">
    <div class="modal-content">
        <div class="modal-body pb-3 text-center">
          <button type="button" class="close" id="btn-edit-inventorystorage-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <img class="isometric confirmationisometric" width="230px" height="100px" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/modal/confirmation.png">
        <h1 class="text-red text-center font-weight-bold">EDIT INVENTORY STORAGE</h1>
            <p class="text-center my-2">Are you sure you want to update Inventory Storage?</p>
            <div class="invalid-feedback" id="confirmation-edit-invalid"></div>
        </div>
        <div class="modal-footer">
          <div class="w-100 text-center">
          <button type="button" data-dismiss="modal" class="btn btn-outline-primary shadow-none" id="btn-edit-inventorystorage-close">NO</button>
            <button type="button" class="btn btn-primary shadow-none" id="edit">YES</button>
        </div>
        </div>
    </div>
  </div>
</div>




<script type="text/javascript">
  $(document).ready(function() {

    $('#tabledepartment').DataTable();



    // $('.btn-add').click(function(){
    //   $("#add_inventorystorage").modal('hide');
    // });

    // $('.btn-no').click(function(){
    //   $("#add_inventorystorage").modal('show');
    // });

    // $('.btn-edit').click(function(){
    //   $("#edit_modal").modal('hide');
    //   $("#edit_confirmation").modal('show');
    // });

    // $('.btn-no-edit').click(function(){

    //   $("#edit_confirmation").modal('hide');
    //   $("#edit_modal").modal('show');
    // });

    const elemArr = ["inventory_storageWarehouse", "inventory_storageAddress"];
    const elemArrText = ["Warehouse", "Address"];
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

    $(document).on("click", ".btn-close-add-inventorystorage, .btn-close-edit-inventorystorage", function() {
      clearInputs();
    })

    $(document).on("click", "#btn-edit-inventorystorage-close", function() {
      $("#edit_inventorystorage").modal("show");
      $("#confirmation_edit").modal("hide");
    })

    $(document).on("click", "#btn-add-inventorystorage-close", function() {
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

  });
</script> 