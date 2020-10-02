<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-between align-items-center">
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb pl-0">
                  <li class="breadcrumb-item"><a href="<?php base_url().'Dashboard'?>"><i class="material-icons fs-16">dashboard</i> Dashboard</a></li>
                  <li class="breadcrumb-item" id="StockInWarehouse"><a href=""> Stock in Warehouse</a></li>
                  <li class="breadcrumb-item active" id="StockInWarehouseV1" aria-current="page">Stock in Warehouse</li>
                  <li class="breadcrumb-item active" id="StockInWarehouseV2" aria-current="page">Purhcase Order Form</li>

              </ol>
          </nav>
          <button class="btn text-red" id="btn-pending-back" style="display: none;border:none"><i class="fas fa-arrow-left"></i> BACK</button>
          <button class="btn text-red" id="btn-completed-back" style="display: none;border:none"><i class="fas fa-arrow-left"></i> BACK</button>
        </div>
        <div class="col-md-12">
            <div class="ms-panel" id="list-purchase-order">
              <div class="ms-panel-header bg-primary d-flex justify-content-between align-items-center">
                <h6 class="text-light">STOCK IN WAREHOUSE</h6>
              </div>
              <div class="ms-panel-body">
                <div class="row">
                  <div class="col-12">
                    <div class="table-responsive">
                      <table class="table table-bordered table-hover thead-primary" id="table-stockInWarehouse">
                        <thead>
                          <tr class="text-center">
                            <th>NUMBER</th>
                            <th>PURCHASE NUMBER</th>
                            <th>PREPARER NAME</th>
                            <th>POSITION</th>
                            <th>DATE SUBMITTED</th>
                            <th>STATUS</th>
                            <th>ACTION</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>PR-20-00001</td>
                            <td>Arjay Diangzon</td>
                            <td>Warehouse Manager</td>
                            <td>September 10, 2020</td>
                            <td class="text-center"><span class="badge badge-outline-info">Pending</span></td>
                            <td class="text-center">
                              <div class="drop-down float-right">
                                  <a href="#" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false"> <i style="font-size: 1.5rem;" class="material-icons">more_vert</i></a>
                                  <ul class="dropdown-menu dropdown-menu-right">
                                    <li class="ms-dropdown-list">
                                      <a class="media p-2" href="#">
                                        <div class="media-body editpayment"
                                       
                                             data-controls-modal="your_div_id" 
                                             data-backdrop="static" 
                                             data-keyboard="false" 
                                             data-toggle="modal" 
                                             data-target="#edit_payment" 
                                             href="javascript:void(0);" 
                                             id="btn-pending-purchase-order" >
                                          <i style="font-size:1rem;" class="fas fa-pencil-alt text-secondary"></i><span> Edit</span>
                                        </div>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              <!-- <button class="btn btn-sm btn-outline-secondary" id="btn-pending-purchase-order"><i class="fas fa-eye"></i> View</button> -->
                            </td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>PR-20-00002</td>
                            <td>Arjay Diangzon</td>
                            <td>Warehouse Manager</td>
                            <td>September 10, 2020</td>
                            <td class="text-center"><span class="badge badge-outline-success">Completed</span></td>
                            <td class="text-center">
                              <div class="drop-down float-right">
                                  <a href="#" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false"> <i style="font-size: 1.5rem;" class="material-icons">more_vert</i></a>
                                  <ul class="dropdown-menu dropdown-menu-right">
                                    <li class="ms-dropdown-list">
                                      <a class="media p-2" href="#">
                                        <div class="media-body editpayment"
                                       
                                             data-controls-modal="your_div_id" 
                                             data-backdrop="static" 
                                             data-keyboard="false" 
                                             data-toggle="modal" 
                                             data-target="#edit_payment" 
                                             href="javascript:void(0);" 
                                             id="btn-completed-purchase-order" >
                                          <i style="font-size:1rem;" class="fas fa-pencil-alt text-secondary"></i><span> Edit</span>
                                        </div>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                             <!--  <button class="btn btn-sm btn-outline-secondary" id="btn-completed-purchase-order"><i class="fas fa-eye"></i> View</button> -->
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="ms-panel" id="pending-purchase-order" style="display: none">
              <div class="ms-panel-header bg-primary d-flex justify-content-between align-items-center">
                <h6 class="text-light">STOCK IN WAREHOUSE</h6>
              </div>
              <div class="ms-panel-body">
                <div class="row">
                  <div class="col-12 pb-4 border-bottom">
                    <div class="d-flex justify-content-between align-items-center">
                      <img src="<?= base_url() ?>pages/assets/img/bg/login-logo.png" alt="" style="max-height: 10vh; width: auto;">
                      <h5 class="text-red">PURCHASE ORDER NO. PO-20-00001</h5>
                    </div>
                    <div class="d-flex justify-content-between">
                      <div class="company-info">
                        <br>
                        <address>
                          Unit 1701 Antel Global Corporate Center <br>
                          Julia Vargas Avenue, Ortigas Center <br>
                          Pasig City - 1900
                        </address>
                        <div class="phone">Phone: (+63) 961-727-7951</div>
                        <div class="telephone">Telephone: (02) 7-746-5688</div>
                        <div class="website">www.theblackcoders.com</div>
                      </div>
                      <form action="#">
                        <div class="row d-flex align-items-center my-1">
                          <div class="col-4">
                            <label>DATE & TIME</label>
                          </div>
                          <div class="col-8">
                            <input type="text" value="September 10, 2020 10:45PM" class="form-control w-100" disabled>
                          </div>
                        </div>
                        <div class="row d-flex align-items-center my-1">
                          <div class="col-4">
                            <label>STATUS</label>
                          </div>
                          <div class="col-8">
                            <input type="text" value="Approved" class="form-control w-100 text-center" value="Approved" disabled>
                          </div>
                        </div>
                        <div class="row d-flex align-items-center my-1">
                          <div class="col-4">
                            <label>REMARKS</label>
                          </div>
                          <div class="col-8">
                            <!-- <input type="text" value="" class="form-control w-100" disabled> -->
                            <textarea class="form-control" rows="3" disabled></textarea>
                          </div>
                        </div>
                      </form>
                    </div>

                    <!-- Divider -->
                    <div class="row mt-3 mb-3">
                      <div class="col-12 bg-primary p-3">
                        <span class="text-light font-weight-bold">SUPPLIER DETAILS:</span>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-4">
                        <div class="form-group">
                          <label>Supplier Code</label> 
                          <input type="text" class="form-control" value="SUP-20-00001" disabled>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <label>Supplier Name</label>
                          <input type="text" class="form-control" value="Exodus" disabled>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <label>Contact Person</label>
                          <input type="text" class="form-control" value="Arjay Diangzon" disabled>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <div class="form-group">
                          <label>Contact Number</label>
                          <input type="text" class="form-control" value="09099054766" disabled>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <label>Supplier Address</label>
                          <input type="text" class="form-control" value="Pasig City" disabled>
                        </div>
                      </div>
                    </div>
                    
                    <!-- Divider -->
                    <div class="row mt-3 mb-3">
                      <div class="col-12 bg-primary p-3">
                        <span class="text-light font-weight-bold">LIST OF ITEMS:</span>
                      </div>
                    </div>
                    
                    <div class="table-responsive pt-3 pb-5">
                      <table class="table table-bordered table-hover thead-primary">
                        <thead>
                          <tr class="text-center">
                            <th>NUMBER</th>
                            <th>ITEM CODE</th>
                            <th>ITEM NAME</th>
                            <th>QTY</th>
                            <th>UOM</th>
                            <th>UNIT COST</th>
                            <th>SUB TOTAL</th>
                            <th>DATE RECEIVED</th>
                            <th>RECEIVED</th>
                            <th>REMAINING</th>
                            <th>LOCATION</th>
                            <th>ACTION</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="text-center">
                            <td>1</td>
                            <td>ITM-20-00001</td>
                            <td>Soy Souce</td>
                            <td>3</td>
                            <td>pieces</td>
                            <td class="text-right">50.00</td>
                            <td class="text-right">150.00</td>
                            <td>September 11, 2020</td>
                            <td>5</td>
                            <td>5</td>
                            <td>
                              <select name="location" id="location" class="form-control">
                                <option value="">Default</option>
                                <option value="">Add Location</option>
                                <option value="">WAR-20-00001</option>
                              </select>
                            </td>
                            <td>
                              <button class="btn btn-outline-success" data-toggle="modal" data-target="#modal-receive-items">RECORD</button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="row">
                      <div class="offset-9 col-3">
                        <div class="row">
                          <div class="col-6 font-weight-bold">SUB TOTAL:</div>
                          <div class="col-6 text-right">₱ <span id="basedpricecost">0.00</span></div>
                        </div>
                        <div class="row">
                          <div class="col-6 font-weight-bold">VAT (12%):</div>
                          <div class="col-6 text-right">₱ <span id="vatcost">0.00</span></div>
                        </div>
                      </div>
                      <div class="offset-9 col-3">
                        <div class="row">
                          <div class="col-6 font-weight-bold">TOTAL COST:</div>
                          <div class="col-6 text-right">₱ <span id="subtotalcost">0.00</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 pt-4 border-top">
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="d-flex justify-content-around align-items-center">
                        <div class="mx-2"><span class="font-weight-bold">Preparer Name:</span> <span>Arjay Diangzon</span></div>
                        <div class="mx-2"><span class="font-weight-bold">Checker Name:</span> <span>Amy Han</span><br>
                          <span class="badge badge-outline-success">Approved - Sept 10, 2020 1:51PM</span>
                        </div>
                        <div class="mx-2"><span class="font-weight-bold">Approver Name:</span> <span>Haba Gat</span><br>
                          <span class="badge badge-outline-success">Approved - Sept 10, 2020 1:51PM</span>
                        </div>
                      </div>
                      <div>
                        <button class="btn btn-outline-primary" id="btn-stockin-cancel">CANCEL</button>
                        <button class="btn btn-danger" id="btn-stockin-save" disabled>SAVE</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="ms-panel" id="completed-purchase-order" style="display: none">
              <div class="ms-panel-header bg-primary d-flex justify-content-between align-items-center">
                <h6 class="text-light">STOCK IN WAREHOUSE</h6>
              </div>
              <div class="ms-panel-body">
                <div class="row">
                  <div class="col-12 pb-4 border-bottom">
                    <div class="d-flex justify-content-between align-items-center">
                      <img src="<?= base_url() ?>pages/assets/img/bg/login-logo.png" alt="" style="max-height: 10vh; width: auto;">
                      <h5 class="text-red">PURCHASE ORDER NO. PO-20-00001</h5>
                    </div>
                    <div class="d-flex justify-content-between">
                      <div class="company-info">
                        <br>
                        <address>
                          Unit 1701 Antel Global Corporate Center <br>
                          Julia Vargas Avenue, Ortigas Center <br>
                          Pasig City - 1900
                        </address>
                        <div class="phone">Phone: (+63) 961-727-7951</div>
                        <div class="telephone">Telephone: (02) 7-746-5688</div>
                        <div class="website">www.theblackcoders.com</div>
                      </div>
                      <form action="#">
                        <div class="row d-flex align-items-center my-1">
                          <div class="col-4">
                            <label>DATE & TIME</label>
                          </div>
                          <div class="col-8">
                            <input type="text" value="September 10, 2020 10:45PM" class="form-control w-100" disabled>
                          </div>
                        </div>
                        <div class="row d-flex align-items-center my-1">
                          <div class="col-4">
                            <label>STATUS</label>
                          </div>
                          <div class="col-8">
                            <input type="text" value="Approved" class="form-control w-100 text-center" value="Approved" disabled>
                          </div>
                        </div>
                        <div class="row d-flex align-items-center my-1">
                          <div class="col-4">
                            <label>REMARKS</label>
                          </div>
                          <div class="col-8">
                            <!-- <input type="text" value="" class="form-control w-100" disabled> -->
                            <textarea class="form-control" rows="3" disabled></textarea>
                          </div>
                        </div>
                      </form>
                    </div>

                   <!-- Divider -->
                    <div class="row mt-3 mb-3">
                      <div class="col-12 bg-primary p-3">
                        <span class="text-light font-weight-bold">SUPPLIER DETAILS:</span>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-4">
                        <div class="form-group">
                          <label>Supplier Code</label> 
                          <input type="text" class="form-control" value="SUP-20-00001" disabled>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <label>Supplier Name</label>
                          <input type="text" class="form-control" value="Exodus" disabled>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <label>Contact Person</label>
                          <input type="text" class="form-control" value="Arjay Diangzon" disabled>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <div class="form-group">
                          <label>Contact Number</label>
                          <input type="text" class="form-control" value="09099054766" disabled>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <label>Supplier Address</label>
                          <input type="text" class="form-control" value="Pasig City" disabled>
                        </div>
                      </div>
                    </div>

                    <!-- Divider -->
                    <div class="row mt-3 mb-3">
                      <div class="col-12 bg-primary p-3">
                        <span class="text-light font-weight-bold">LIST OF ITEMS:</span>
                      </div>
                    </div>

                    <div class="table-responsive mt-3 mb-5">
                      <table class="table table-bordered table-hover thead-primary">
                        <thead>
                          <tr class="text-center">
                            <th>NUMBER</th>
                            <th>ITEM CODE</th>
                            <th>ITEM NAME</th>
                            <th>QTY</th>
                            <th>UOM</th>
                            <th>UNIT COST</th>
                            <th>SUB TOTAL</th>
                            <th>DATE RECEIVED</th>
                            <th>RECEIVED</th>
                            <th>REMAINING</th>
                            <th>LOCATION</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>ITM-20-00001</td>
                            <td>Soy Souce</td>
                            <td>3</td>
                            <td>pieces</td>
                            <td class="text-right">50.00</td>
                            <td class="text-right">150.00</td>
                            <td>September 11, 2020</td>
                            <td>5</td>
                            <td>5</td>
                            <td>
                              <input type="text" class="form-control" value="WAR-20-00001" disabled>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="row">
                      <div class="offset-9 col-3">
                        <div class="row">
                          <div class="col-6 font-weight-bold">SUB TOTAL:</div>
                          <div class="col-6 text-right">₱ <span id="basedpricecost">130.00</span></div>
                        </div>
                        <div class="row">
                          <div class="col-6 font-weight-bold">VAT (12%):</div>
                          <div class="col-6 text-right">₱ <span id="vatcost">20.00</span></div>
                        </div>
                      </div>
                      <div class="offset-9 col-3">
                        <div class="row">
                          <div class="col-6 font-weight-bold">TOTAL COST:</div>
                          <div class="col-6 text-right">₱ <span id="subtotalcost">150.00</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 pt-4 border-top">
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="d-flex justify-content-around align-items-center">
                        <div class="mx-2"><span class="font-weight-bold">Preparer Name:</span> <span>Arjay Diangzon</span></div>
                        <div class="mx-2"><span class="font-weight-bold">Checker Name:</span> <span>Amy Han</span><br>
                          <span class="badge badge-outline-success">Approved - Sept 10, 2020 1:51PM</span>
                        </div>
                        <div class="mx-2"><span class="font-weight-bold">Approver Name:</span> <span>Haba Gat</span><br>
                          <span class="badge badge-outline-success">Approved - Sept 10, 2020 1:51PM</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal-receive-items" tabindex="-1" role="dialog" aria-labelledby="modal-receive-items" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="w-100 text-center">
            <h5 class="modal-title text-red p-2" id="exampleModalCenterTitle">RECORD PRODUCT</h5>
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
     
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="">Item Code</label>
              <input type="text" class="form-control" value="IC-20-00001" disabled>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="">Item Name</label>
              <input type="text" class="form-control" value="Soy Sauce" disabled>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <div class="form-group">
              <label for="">Remaining Quantity</label>
              <input type="text" class="form-control" value="3" disabled>
            </div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <label for="">Unit of Measurement</label>
              <input type="text" class="form-control" value="Pieces" disabled>
            </div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <label for="">Warehouse Code</label>
              <input type="text" class="form-control" value="WAR-20-00001" disabled>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-3">
            <div class="form-group">
              <label>Warehouse Name</label>
              <input type="text" class="form-control" value="Warehouse 1" disabled>
            </div>
          </div>
          <div class="col-3">
            <div class="form-group">
              <label>Floor</label>
              <input type="text" class="form-control" value="Floor 1" disabled>
            </div>
          </div>
          <div class="col-3">
            <div class="form-group">
              <label>Bay</label>
              <input type="text" class="form-control" value="Bay 1" disabled>
            </div>
          </div>
          <div class="col-3">
            <div class="form-group">
              <label>Level</label>
              <input type="text" class="form-control" value="Level 1" disabled>
            </div>
          </div>
        </div>
        <div class="mt-3 d-flex justify-content-between">
          <h4 class="modal-title has-icon ms-icon-round text-left mb-2 text-red">PRODUCT DETAILS</h4>
          <div class="input-group mx-1 w-auto">
            <div class="input-group-prepend">
              <span class="input-group-text text-white" id="basic-addon1" style="background: #ff0018"><i class="fas fa-plus"></i></span>
            </div>
            <input type="text" aria-label="Username" aria-describedby="basic-addon1" onkeypress="return numbersOnly(event)" maxlength="3" style="width: 50px;" name="addpdrow" id="addpdrow" class="addpdrow" data-todo="add">
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-bordered thead-primary text-center" id="tablegroup2">
            <thead >
              <tr>
                <th>RECEIVED QTY</th>
                <th>BARCODE</th>
                <th>MANUFACTURE DATE</th>
                <th>EXPIRATION DATE</th>
                <th>ACTION</th>
              </tr>
            </thead>
            <tbody id="add-tbody-product-details">
              <tr class="add-tr-product-details">
                <td class="">
                  <input type="number" min="1" class="form-control">
                </td>
                <td class="">
                  <input type="text" class="form-control" value="1-234567-890123" disabled>
                </td>
                <td class="">
                  <input type="date" class="form-control">
                </td>
                <td class="">
                  <input type="date" class="form-control">
                </td>
                <td class="product-details-remove-table">
                  <button class="btn btn-outline-danger removetablerow" data-todo="add" style="min-width: 1rem; padding: .3rem;">&nbsp;<i class="fas fa-minus"></i></button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-outline-danger float-left" id="btn-print-barcode"><i class="fas fa-print"></i> PRINT BARCODE</button>
        <div class="float-right">
          <button type="button" class="btn btn-outline-danger" data-dismiss="modal">CLOSE</button>
          <button type="button" class="btn btn-danger" id="receive_items_save" disabled>SAVE</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-confirmation-print" tabindex="-1" role="dialog" aria-labelledby="modal-confirmation-print" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-min" role="document">
    <div class="modal-content">
        <div class="modal-body pb-3 text-center">
          <button type="button" id="print_confirmation_no" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <img class="isometric confirmationisometric" width="230px" height="100px" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/modal/confirmation.png">
        <h1 class="text-red text-center">PRINTING BARCODES</h1>
            <h6 class="text-center my-2">Are you sure you want to print barcodes?</h6>
            <div class="invalid-feedback" id="confirmation-add-invalid"></div>
        </div>
        <div class="modal-footer">
          <div class="float-right">
          <button type="button" data-dismiss="modal" class="btn btn-outline-primary shadow-none" id="print_confirmation_no">NO</button>
            <button type="button" class="btn btn-primary shadow-none" id="print_confirmation_yes">YES</button>
        </div>
        </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-confirmation-save" tabindex="-1" role="dialog" aria-labelledby="modal-confirmation-save" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-min" role="document">
    <div class="modal-content">
        <div class="modal-body pb-3 text-center">
          <button type="button" id="save_confirmation_no" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <img class="isometric confirmationisometric" width="230px" height="100px" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/modal/confirmation.png">
        <h1 class="text-red text-center">RECEIVE ITEMS</h1>
            <h6 class="text-center my-2">Are you sure you want to receive items?</h6>
            <div class="invalid-feedback" id="confirmation-add-invalid"></div>
        </div>
        <div class="modal-footer">
          <div class="float-right">
          <button type="button" data-dismiss="modal" class="btn btn-outline-primary shadow-none" id="save_confirmation_no">NO</button>
            <button type="button" class="btn btn-primary shadow-none" id="save_confirmation_yes">YES</button>
        </div>
        </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function() {
    $("#table-stockInWarehouse").DataTable();

    $("#StockInWarehouse").hide();
    $("#StockInWarehouseV2").hide();

    function updateTable(todo = "add") {
      $("."+todo+"-tr-product-details").each(function(i) {

        $("."+todo+"-tr-product-details", this).attr("number", (i));

      //   // REMOVE ELEMENT
        $(this).attr("id", todo+"-table-row-id"+(i));
        $(".removetablerow", this).attr("id", (i));
      });
    }

    $(document).on("click", "#btn-completed-back", function() {
      $("#list-purchase-order").show();
      $("#completed-purchase-order").hide();
      $("#btn-completed-back").hide();

      $("#StockInWarehouse").hide();
      $("#StockInWarehouseV1").show();
      $("#StockInWarehouseV2").hide();
    })

    $(document).on("click", "#btn-completed-purchase-order", function() {
      $("#list-purchase-order").hide();
      $("#completed-purchase-order").show();
      $("#btn-completed-back").show();

      $("#StockInWarehouse").show();
      $("#StockInWarehouseV1").hide();
      $("#StockInWarehouseV2").show();
    })

    // REMOVE TABLE ROW
    $(document).on("click", ".removetablerow", function(e) {
      e.preventDefault();
      const id = $(this).attr("id");
      const todo = $(this).data("todo");
      console.log(todo);
      const elementLength = $("."+todo+"-tr-product-details").length;
      if (elementLength > 1) {
        $("#"+todo+"-table-row-id"+id).remove();
      } 
      
      // UPDATING TABLE
      updateTable(todo);
    });

    // ADDING NEW ROW
    $(document).on("keyup", ".addpdrow", function(e) {
      const rownumber = $(this).val();
      const todo = $(this).data("todo");
      // console.log(todo);
      if (e.which === 13) {
        const elementLength = $("."+todo+"-tr-product-details").length;
        const newLength = rownumber - elementLength;
        let rows = ""
        for (var i=0; i<newLength; i++) {
          let html = "";
          html += '<tr class="'+todo+'-tr-product-details">';
          html += '<td class="">';
          html += '<input type="number" min="1" class="form-control">';
          html += '</td>';
          html += '<td>';
          html += '<input type="text" class="form-control" value="1-234567-890123" disabled>';
          html += '</td>';
          html += '<td>';
          html += '<input type="date" class="form-control">';
          html += '</td>';
          html += '<td>';
          html += '<input type="date" class="form-control">';
          html += '</td>';
          html += '<td class="product-details-table-remove">';
          html += '<button class="btn btn-outline-danger removetablerow" data-todo="'+todo+'" style="min-width: 1rem; padding: .3rem;">&nbsp;<i class="fas fa-minus"></i></button>';
          html += '</td>';
          html += '</tr>';
          rows += html;
        }
        $("#"+todo+"-tbody-product-details").prepend(rows);
        updateTable(todo);
      }
    });

    $(document).on("click", "#receive_items_save", function() {
      $("#modal-receive-items").modal("hide");
      $("#btn-stockin-save").removeAttr("disabled");
    })

    $(document).on("click", "#btn-stockin-save", function() {
      $("#modal-receive-items").modal("hide");
      $("#modal-confirmation-save").modal("show");
    })

    $(document).on("click", "#print_confirmation_yes", function() {
      $("#receive_items_save").removeAttr("disabled");
      $("#btn-print-barcode").hide();
    })

    $(document).on("click", "#print_confirmation_no, #print_confirmation_yes", function() {
      $("#modal-receive-items").modal("show");
      $("#modal-confirmation-print").modal("hide");
    })

    $(document).on("click", "#btn-print-barcode", function() {
      $("#modal-receive-items").modal("hide");
      $("#modal-confirmation-print").modal("show");
    })

    $(document).on("click", "#btn-pending-back, #btn-stockin-cancel", function() {
      $("#list-purchase-order").show();
      $("#pending-purchase-order").hide();
      $("#btn-pending-back").hide();

      $("#StockInWarehouse").hide();
      $("#StockInWarehouseV1").show();
      $("#StockInWarehouseV2").hide();
    })

    $(document).on("click", "#btn-pending-purchase-order", function() {
      $("#list-purchase-order").hide();
      $("#pending-purchase-order").show();
      $("#btn-pending-back").show();

      $("#StockInWarehouse").show();
      $("#StockInWarehouseV1").hide();
      $("#StockInWarehouseV2").show();

    })

    updateTable("add");
  })
</script>