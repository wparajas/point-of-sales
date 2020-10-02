<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-between align-items-center">
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="<?= base_url().'Dashboard'?>"><i class="material-icons fs-16">dashboard</i> Dashboard</a></li>
                    <li class="breadcrumb-item" id="StockInDepartment"><a href="">Stock In Department</a></li>
                    <li class="breadcrumb-item active" id="StockInDepartmentV1">Stock In Department</li>
                    <li class="breadcrumb-item active" id="StockInDepartmentV2" aria-current="page">Stock Out Form</li>
              </ol>
          </nav>
          <a class="btn-back text-black" href><i class="fas fa-arrow-left "></i> Back</a>
        </div>
        <div class="col-md-12 main-page">
            <div class="ms-panel">
              <div class="ms-panel-header bg-primary d-flex justify-content-between align-items-center">
                  <h6 class="text-light">LIST OF TRANSFER STOCK OUT</h6>
              </div>
              <div class="ms-panel-body">
                <div class="row">
                  <div class="col-12">
                    <div class="table-responsive container-fluid">
                      <table id="tablecourier" class="table table-bordered thead-primary dtBasicExample">
                        <thead>
                          <tr class="text-center">
                            <th>NUMBER</th>
                            <th>TRANSFER NUMBER NAME</th>
                            <th>PREPARER NAME</th>
                            <th>POSITION</th>
                            <th>DATE SUBMITED</th>
                            <th>DATE APPROVE</th>
                            <th>STATUS</th>
                            <th>ACTION</th>
                          </tr>
                        </thead>
                          <tbody>
                         
                            <tr>
                              <td>1</td>
                              <td>TR-20-00001</td>
                              <td>Amy Han</td>
                              <td>Warehouse Manager</td>
                              <td>Aug 20, 2020</td>
                              <td>Aug 20, 2020</td>
                              <td class="text-center">
                                <span class="badge badge-outline-info text-center">Pending</span>
                              </td>
                              <td>
                                <div class="drop-down float-right">
                                    <a href="#" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false"> <i style="font-size: 1.5rem" class="material-icons">more_vert</i></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                      <li class="ms-dropdown-list">
                                        <a class="media p-2" href="#">
                                          <div class="media-body editinventoryitem"
                                         
                                               data-controls-modal="your_div_id" 
                                               data-backdrop="static" 
                                               data-keyboard="false" 
                                               data-toggle="modal" 
                                               data-target="#edit_menu_group" 
                                               href="javascript:void(0);" 
                                               id="view_btn" >
                                            <i style="font-size: 1rem" class="fas fa-eye text-secondary"></i><span>View</span>
                                          </div>
                                        </a>
                                      </li>
                                    </ul>
                                  </div>
                              </td>
                            </tr>

                            <tr>
                              <td>1</td>
                              <td>TR-20-00003</td>
                              <td>Amy Han</td>
                              <td>Warehouse Manager</td>
                              <td>Aug 20, 2020</td>
                              <td>Aug 20, 2020</td>
                              <td class="text-center">
                                <span class="badge badge-outline-success text-center">Completed</span>
                              </td>
                              <td>
                                <div class="drop-down float-right">
                                    <a href="#" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false"> <i style="font-size: 1.5rem" class="material-icons">more_vert</i></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                      <li class="ms-dropdown-list">
                                        <a class="media p-2" href="#">
                                          <div class="media-body editinventoryitem"
                                         
                                               data-controls-modal="your_div_id" 
                                               data-backdrop="static" 
                                               data-keyboard="false" 
                                               data-toggle="modal" 
                                               data-target="#edit_menu_group" 
                                               href="javascript:void(0);" 
                                               id="view_btn" >
                                            <i style="font-size: 1rem" class="fas fa-eye text-secondary"></i><span>View</span>
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
        
        <div class="col-md-12 main-creating-form">
            <div class="ms-panel">
              <div class="ms-panel-header bg-primary d-flex justify-content-between align-items-center">
                  <h6 class="text-light">STOCK OUT</h6>
              </div>
              <div class="ms-panel-body">
                <div class="row">
                  <div class="col-6">
                    <img src="<?php echo base_url();?>pages\assets\img\bg\login-logo.png" style="height: 10vh;width: auto;">
                  </div>
                  <!-- LOG AND DATE  -->
                  <div class="col-6" style="text-align:right;">
                    <h4 class="text-danger font-weight-bold text-xl">TRANSFER NO. TR-20-00001</h4><br>
                    <span class="text-weight-bold">DATE &nbsp;</span> 
                    <span class="text-center p-2" style="background:#F0F0FA;border-radius: 5px;">Aug 20, 2020 03:20pm</span><br><br>
                    <span class="text-weight-bold">STATUS &nbsp;</span> 
                    <span class="text-center p-2" style="background:#F0F0FA;border-radius: 5px;color:#F0F0FA">Aug 20, 2020 03:20pm</span><br><br>
                    <span class="text-weight-bold">REMARKS &nbsp;</span> 
                    <span class="text-center p-2" style="background:#F0F0FA;border-radius:5px;color:#F0F0FA">Aug 20, 2020 03:20pm
                    </span>
                    <!-- <h6>DATE<input type="text" class="form-control" readonly value="August 20, 2020 03:20pm" style="max-width:20%;"></h6> -->
                  </div>
                </div>
                <!-- INFORMATION -->
                <div class="row">
                  <div class="col-3" style="margin-top:-3%;">
                    Unit 1701 Antel Global Corporate Center <br>
                    Julia Vargas Ave., Ortigas Center, <br>
                    Pasig City - 1800 <br>
                    Phone: +(63) 961-727-7951 <br>
                    Telephone: (02) 7-746-5688 <br>
                    www.theblackcoders.com <br><br>
                  </div>
                </div>
                <!-- Divider -->
                <div class="row">
                  <div class="col-12 bg-primary p-3">
                    <span class="text-light font-weight-bold">STOCK TO:</span>
                  </div>
                </div>

                <!-- INFORMATION OF WREHOUSE -->
                <div class="row p-2">
                  <div class="col-3">
                    <strong>Warehouse Code:</strong> <input type="text" readonly class="form-control" value="WAR-20-00001" name="">
                  </div>
                  <div class="col-3">
                    <strong>Warehouse Name:</strong><input type="text" readonly value="Department Kitchen" class="form-control" name="">
                  </div>
                 <div class="col-6 row">
                    <div class="col-4">
                    <strong>Floor:</strong><input type="text" readonly class="form-control" value="Floor 2" name="">
                    </div>
                    <div class="col-4">
                      <strong>Bay:</strong> <input type="text" readonly class="form-control" value="N/A" name="">
                    </div>
                    <div class="col-4">
                      <strong>Level:</strong> <input type="text" readonly class="form-control" value="N/A" name="">
                    </div>
                 </div>
                   <div class="col-12 mt-2">
                        <strong>Warehouse Address:</strong><input type="text" readonly class="form-control" value="Pasig City" name="">
                    </div>
                  
                </div>

                <!-- Divider -->
                <div class="row mt-2">
                  <div class="col-12 bg-primary p-3">
                    <span class="text-light font-weight-bold">LIST OF ITEMS</span>
                  </div>
                </div>

                <div class="mt-3 d-flex justify-content-between">
                  <div class="table-responsive">
                    <table class="table table-bordered thead-primary text-center" id="tablegroup2">
                      <thead >
                        <tr>
                          <th>NUMBER</th>
                          <th>ITEM CODE</th>
                          <th>ITEM NAME</th>
                          <th>QTY</th>
                          <th>UOM</th>
                          <th>BAR CODE</th>
                          <th>EXP DATE</th>
                        </tr>
                      </thead>
                      <tbody id="edit-tbody-courier-package">
                        <tr class="edit-tr-courier-package">
                          <td class="">1</td>
                          <td class="">IC-20-00001</td>
                          <td class="">Soy Sauce</td>
                          <td class="">2</td>
                          <td class="">pcs</td>
                          <td class="">
                            1-23456-789123 <br>
                            1-23456-789312
                          </td>
                          <td>
                             Aug 20, 2021 <br>
                             Sep 21, 2021
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
              </div>

              <br>
                  <div class="col-12 pt-4 border-top">
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="d-flex justify-content-around align-items-center">
                        <div class="mx-2"><span class="font-weight-bold">Preparer Name:</span> <span>Arjay Diangzon</span><br><span class="text-light">pogi</span></div>
                        <div class="mx-2"><span class="font-weight-bold">Checker Name:</span> <span>Amy Han</span><br>
                          <span class="badge badge-outline-success">Approved-September 11, 2020 11:52AM)</span>
                        </div>
                        <div class="mx-2"><span class="font-weight-bold">Approver Name:</span> <span>Haba Gat</span><br>
                          <span class="badge badge-outline-success">Approved-September 11, 2020 11:52AM)</span>
                        </div>
                      </div>
                      <div>
                        <button class="btn btn-outline-primary" id="btn-create-stockout-cancel">CANCEL</button>
                        <button class="btn btn-danger btn-receive" id="btn-create-stockout-save">SAVE</button>
                      </div>
                    </div>
                  </div>
            </div>
        </div>

    </div>
</div>

<!-- Confirmation Add Modal Courier  -->
<div class="modal fade" id="receive_confirmation" tabindex="-1" role="dialog" aria-labelledby="add_confirmationcourier" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-min" role="document">
    <div class="modal-content">
        <div class="modal-body pb-3 text-center">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <img class="isometric confirmationisometric" width="230px" height="100px" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/modal/confirmation.png">
        <h1 class="text-red text-center">RECEIVE ITEMS</h1>
            <h6 class="text-center my-2 text-secondary">Are you sure you want to Receive Items?</h6>
            <div class="invalid-feedback" id="confirmation-add-invalid"></div>
        </div>
        <div class="modal-footer">
          <div class="w-100 text-center">
          <button type="button" data-dismiss="modal" class="btn btn-outline-primary shadow-none" id="add_confirmation_no">NO</button>
            <button type="button" class="btn btn-primary shadow-none" id="add_confirmation_yes">YES</button>
        </div>
        </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function() {
    $(".main-page").show();
    $(".main-creating-form").hide();
    $(".btn-back").hide();
    $("#StockInDepartmentV2").hide();
    $("#StockInDepartment").hide();

    $("#view_btn").click(function(){
     
      $(".main-page").hide();
      $(".main-creating-form").show();
      $(".btn-back").toggle();
      $("#StockInDepartmentV1").hide();
      $("#StockInDepartmentV2").show();
      $("#StockInDepartment").show();
    });

    $(".btn-back, .btn-cancel").click(function(){
      $(".main-page").show();
      $(".main-creating-form").hide();
      $(".btn-back").hide();
    });
    $(".btn-receive").click(function(){
      $("#receive_confirmation").modal("show");
    });
    $("#add_confirmation_yes").click(function(){
      $("#receive_confirmation").modal('hide');
    });

    // DATATABLES
    $("#tablecourier").dataTable();

    function updateTable(todo = "add") {
      $("."+todo+"-tr-courier-package").each(function(i) {

        $("."+todo+"-tr-courier-package", this).attr("number", (i));
     
      //   // REMOVE ELEMENT
        $(this).attr("id", todo+"-table-row-id"+(i));
        $(".removetablerow", this).attr("id", (i));
      });
    }

    updateTable("add");

  });
</script>