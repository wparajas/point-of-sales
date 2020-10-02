<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-between align-items-center">
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb pl-0">
                  <li class="breadcrumb-item"><a href="<?php base_url().'Dashboard'?>"><i class="material-icons fs-16">dashboard</i> Dashboard</a></li>
                  <li class="breadcrumb-item" id="PurchaseOrder"><a href="">Purchase Order</a></li>
                  <li class="breadcrumb-item active" id="PurchaseOrderV1">Purchase Order</li>
                  <li class="breadcrumb-item active" id="PurchaseOrderV2">Purchase Order Form</li>
              </ol>
          </nav>
          <button class="btn text-red" id="btn-back" style="display: none;border:none;"><i class="fas fa-arrow-left"></i> BACK</button>
          <button class="btn text-red" id="btn-rejected-back" style="display: none;border:none;"><i class="fas fa-arrow-left"></i> BACK</button>
          <button class="btn text-red" id="btn-approved-back" style="display: none;border:none;"><i class="fas fa-arrow-left"></i> BACK</button>
        </div>
        <div class="col-md-12">
            <div class="ms-panel" id="list-purchase-order">
              <div class="ms-panel-header bg-primary d-flex justify-content-between align-items-center">
                <h6 class="text-light">LIST OF PURCHASE ORDER</h6>
              </div>
              <div class="ms-panel-body">
                <div class="row">
                  <div class="col-12">
                    <div class="table-responsive">
                      <table class="table table-bordered table-hover thead-primary" id="table-purchaseorder">
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
                            <td class="text-center"><span class="badge badge-outline-success">Approved</span></td>
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
                                             id="btn-approved-purchase-order" >
                                          <i style="font-size:1rem;" class="fas fa-eye text-secondary"></i><span> View</span>
                                        </div>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                             <!--  <button class="btn btn-outline-secondary btn-sm" id="btn-approved-purchase-order"><i class="fas fa-eye"></i> View</button> -->
                            </td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>PR-20-00001</td>
                            <td>Arjay Diangzon</td>
                            <td>Warehouse Manager</td>
                            <td>September 10, 2020</td>
                            <td class="text-center"><span class="badge badge-outline-danger">Rejected</span></td>
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
                                             id="btn-rejected-purchase-order" >
                                          <i style="font-size:1rem;" class="fas fa-eye text-secondary"></i><span> View</span>
                                        </div>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                             <!--  <button class="btn btn-outline-secondary btn-sm" id="btn-rejected-purchase-order"><i class="fas fa-eye"></i> View</button> -->
                            </td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td>PR-20-00001</td>
                            <td>Arjay Diangzon</td>
                            <td>Warehouse Manager</td>
                            <td>September 10, 2020</td>
                            <td class="text-center"><span class="badge badge-outline-info">For Approval</span></td>
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
                                             id="btn-approve-purchase-order" >
                                          <i style="font-size:1rem;" class="fas fa-eye text-secondary"></i><span> View</span>
                                        </div>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              <!-- <button class="btn btn-outline-secondary btn-sm" id="btn-approve-purchase-order"><i class="fas fa-eye"></i> View</button> -->
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="ms-panel" id="approval-purchase-order" style="display: none">
              <div class="ms-panel-header bg-primary d-flex justify-content-between align-items-center">
                <h6 class="text-light">PURCHASE ORDER</h6>
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
                            <input type="text" value="For Approval" class="form-control w-100 text-center" disabled>
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
                            <th>VAT</th>
                            <th>SUB TOTAL</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="text-center">
                            <td>1</td>
                            <td>ITM-20-00001
                            </td>
                            <td>Soy Souce</td>
                            <td>3</td>
                            <td>pieces</td>
                            <td class="text-right">50.00</td>
                            <td>YES</td>
                            <td class="text-right">150.00</td>
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
                        <div class="mx-2"><span class="font-weight-bold">Preparer Name:</span> <span>Arjay Diangzon</span><br><span class="text-light">pogi</span></div>
                        <div class="mx-2"><span class="font-weight-bold">Checker Name:</span> <span>Amy Han</span><br><span class="badge badge-outline-info">Pending</span></div>
                        <div class="mx-2"><span class="font-weight-bold">Approver Name:</span> <span>Haba Gat</span><br><span class="badge badge-outline-info">Pending</span></div>
                      </div>
                      <div>
                        <button class="btn btn-outline-primary" id="reject">REJECT</button>
                        <button class="btn btn-primary" id="approve">APPROVE</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="ms-panel" id="rejected-purchase-order" style="display: none">
              <div class="ms-panel-header bg-primary d-flex justify-content-between align-items-center">
                <h6 class="text-light">PURCHASE ORDER</h6>
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
                            <input type="text" value="Rejected" class="form-control w-100 text-center" disabled>
                          </div>
                        </div>
                        <div class="row d-flex align-items-center my-1">
                          <div class="col-4">
                            <label>REMARKS</label>
                          </div>
                          <div class="col-8">
                            <!-- <input type="text" value="" class="form-control w-100" disabled> -->
                            <textarea class="form-control" rows="3" disabled>Remarks will be display here</textarea>
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
                            <th>VAT</th>
                            <th>SUB TOTAL</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="text-center">
                            <td>1</td>
                            <td>ITM-20-00001
                            </td>
                            <td>Soy Souce</td>
                            <td>3</td>
                            <td>pieces</td>
                            <td class="text-right">50.00</td>
                            <td>YES</td>
                            <td class="text-right">150.00</td>
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
                        <div class="mx-2"><span class="font-weight-bold">Preparer Name:</span> <span>Arjay Diangzon</span> <br><span class="text-light">Text</span></div>
                        <div class="mx-2"><span class="font-weight-bold">Checker Name:</span> <span>Amy Han</span><br>
                          <span class="badge badge-outline-danger">Rejected - Sept 10, 2020 1:51PM</span>
                        </div>
                        <div class="mx-2"><span class="font-weight-bold">Approver Name:</span> <span>Haba Gat</span><br>
                          <span class="badge badge-outline-info">Pending</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="ms-panel" id="approved-purchase-order" style="display: none">
              <div class="ms-panel-header bg-primary d-flex justify-content-between align-items-center">
                <h6 class="text-light">PURCHASE ORDER</h6>
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
                            <input type="text" value="Approved" class="form-control w-100 text-center" disabled>
                          </div>
                        </div>
                        <div class="row d-flex align-items-center my-1">
                          <div class="col-4">
                            <label>REMARKS</label>
                          </div>
                          <div class="col-8">
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
                            <th>VAT</th>
                            <th>SUB TOTAL</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="text-center">
                            <td>1</td>
                            <td>ITM-20-00001
                            </td>
                            <td>Soy Souce</td>
                            <td>3</td>
                            <td>pieces</td>
                            <td class="text-right">50.00</td>
                            <td>YES</td>
                            <td class="text-right">150.00</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="row">
                      <div class="offset-9 col-3">
                        <div class="row">
                          <div class="col-6 font-weight-bold">SUB TOTAL:</div>
                          <div class="col-6 text-right">₱ <span id="basedpricecost">120.00</span></div>
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
                        <div class="mx-2"><span class="font-weight-bold">Preparer Name:</span> <span>Arjay Diangzon</span><br><span class="text-light">text</span></div>
                        <div class="mx-2"><span class="font-weight-bold">Checker Name:</span> <span>Amy Han</span><br>
                          <span class="badge badge-outline-success">Approved - Sept 10, 2020 1:51PM)</span>
                        </div>
                        <div class="mx-2"><span class="font-weight-bold">Checker Name:</span> <span>Amy Han</span><br>
                          <span class="badge badge-outline-success">Approved - Sept 10, 2020 1:51PM)</span>
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

<div class="modal fade" id="approve_confirmation" tabindex="-1" role="dialog" aria-labelledby="approve_confirmation" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-min" role="document">
    <div class="modal-content">
        <div class="modal-body pb-3 text-center">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <img class="isometric confirmationisometric" width="230px" height="100px" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/modal/confirmation.png">
        <h1 class="text-red text-center">APPROVE PURCHASE ORDER</h1>
            <p class="text-center my-2">Are you sure you want to add Purchase Order?</p>
            <div class="invalid-feedback" id="confirmation-add-invalid"></div>
        </div>
        <div class="modal-footer" style="margin:auto;">
          <div>
            <button type="button" data-dismiss="modal" class="btn btn-outline-primary shadow-none" id="po_confirmation_no">NO</button>
            <button type="button" class="btn btn-primary shadow-none" id="po_confirmation_yes">YES</button>
        </div>
        </div>
    </div>
  </div>
</div>

<div class="modal fade" id="reject_confirmation" tabindex="-1" role="dialog" aria-labelledby="reject_confirmation" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-min" role="document">
    <div class="modal-content">
        <div class="modal-body pb-3 text-center">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <img class="isometric confirmationisometric" width="230px" height="100px" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/modal/confirmation.png">
          <h1 class="text-red text-center">REJECT PURCHASE ORDER</h1>
          <p class="text-center my-2">Are you sure you want to reject Purchase Order?</p>
          <div class="invalid-feedback" id="confirmation-add-invalid"></div>
          <small class="text-warning float-left">Note: Please input a remarks upon rejecting this document</small>
          <textarea class="form-control" style="resize: none" rows="3"></textarea>
        </div>
        <div class="modal-footer" style="margin:auto;">
          <div>
          <button type="button" data-dismiss="modal" class="btn btn-outline-primary shadow-none" id="reject_no">CANCEL</button>
            <button type="button" class="btn btn-primary shadow-none" id="reject_yes">REJECT</button>
        </div>
        </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function() {
    $("#table-purchaseorder").dataTable();

    $("#PurchaseOrder").hide();
    $("#PurchaseOrderV2").hide();

    $(document).on("click", "#btn-approved-back", function() {
      $("#list-purchase-order").show();
      $("#approved-purchase-order").hide();
      $("#btn-approved-back").hide();

      $("#PurchaseOrderV1").show();
      $("#PurchaseOrderV2").hide();
      $("#PurchaseOrder").hide();
    })

    $(document).on("click", "#btn-approved-purchase-order", function() {
      $("#list-purchase-order").hide();
      $("#approved-purchase-order").show();
      $("#btn-approved-back").show();

      $("#PurchaseOrderV1").hide();
      $("#PurchaseOrderV2").show();
      $("#PurchaseOrder").show();

    })

    $(document).on("click", "#btn-rejected-back", function() {
      $("#list-purchase-order").show();
      $("#rejected-purchase-order").hide();
      $("#btn-rejected-back").hide();

       $("#PurchaseOrderV1").show();
      $("#PurchaseOrderV2").hide();
      $("#PurchaseOrder").hide();
    })

    $(document).on("click", "#btn-rejected-purchase-order", function() {
      $("#list-purchase-order").hide();
      $("#rejected-purchase-order").show();
      $("#btn-rejected-back").show();

      $("#PurchaseOrderV1").hide();
      $("#PurchaseOrderV2").show();
      $("#PurchaseOrder").show();
    })

    $(document).on("click", "#reject", function() {
      $("#reject_confirmation").modal("show");
    })

    $(document).on("click", "#approve", function() {
      $("#approve_confirmation").modal("show");
    })

    $(document).on("click", "#btn-back", function() {
      $("#list-purchase-order").show();
      $("#approval-purchase-order").hide();
      $("#btn-back").hide();

      $("#PurchaseOrderV1").show();
      $("#PurchaseOrderV2").hide();
      $("#PurchaseOrder").hide();
    })

    $(document).on("click", "#btn-approve-purchase-order", function() {
      $("#list-purchase-order").hide();
      $("#approval-purchase-order").show();
      $("#btn-back").show();

      $("#PurchaseOrderV1").hide();
      $("#PurchaseOrderV2").show();
      $("#PurchaseOrder").show();
    })

  });
</script>