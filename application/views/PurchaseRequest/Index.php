<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-between align-items-center">
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb pl-0">
                  <li class="breadcrumb-item"><a href="<?= base_url().'Dashboard'?>"><i class="material-icons fs-16">dashboard</i> Dashboard</a></li>
                  <li class="breadcrumb-item" id="PurchaseRequest"><a href=""> Purchase Request </a></li>
                  <li class="breadcrumb-item active" id="PurchaseRequestV1" aria-current="page">Purchase Request</li>
                  <li class="breadcrumb-item active" id="PurchaseRequestV2" aria-current="page">Purchase Request Form</li>
                  <li class="breadcrumb-item active" id="PurchaseRequestV3" aria-current="page">Purchase Order Form</li>
              </ol>
          </nav>
            <button class="btn text-red" id="btn-back" style="display: none;border:none"><i class="fas fa-arrow-left"></i> BACK</button>
            <button class="btn text-red" id="btn-view-back" style="display: none;border:none"><i class="fas fa-arrow-left"></i> BACK</button>
            <button class="btn text-red" id="btn-create-back" style="display: none;border:none"><i class="fas fa-arrow-left"></i> BACK</button>
            <button class="btn text-red" id="btn-rejecte-back" style="display: none;border:none"><i class="fas fa-arrow-left"></i> BACK</button>
        </div>
        <div class="col-md-12">
            <div class="ms-panel" id="list-purchase-request">
              <div class="ms-panel-header bg-primary d-flex justify-content-between align-items-center">
                <h6 class="text-light">LIST OF PURCHASE REQUEST</h6>
                <button class="btn btn-outline-red" id="add-purchase-request-form">
                  <i class="fa fa-plus-square fa-lg"></i> ADD PURCHASE REQUEST
                </button>
              </div>
              <div class="ms-panel-body">
                <div class="row">
                  <div class="col-12">
                    <div class="table-responsive">
                      <table class="table table-bordered table-hover thead-primary" id="table-purchaserequest">
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
                                             id="btn-create-purchase-order" >
                                          <i style="font-size:1rem;" class="fas fa-edit text-secondary"></i><span> Create P.O</span>
                                        </div>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              <!-- <button class="btn btn-outline-secondary btn-sm" id="btn-create-purchase-order"><i class="fas fa-edit"></i> P.O.</button> -->
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
                                             id="btn-rejected-purchase-request" >
                                          <i style="font-size:1rem;" class="fas fa-eye text-secondary"></i><span> View</span>
                                        </div>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                             <!--  <button class="btn btn-sm btn-outline-secondary" id="btn-rejected-purchase-request"><i class="fas fa-eye"></i> View</button> -->
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
                                             id="btn-view-purchase-request" >
                                          <i style="font-size:1rem;" class="fas fa-eye text-secondary"></i><span> View</span>
                                        </div>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              <!-- <button class="btn btn-sm btn-outline-secondary" id="btn-view-purchase-request"><i class="fas fa-eye"></i> View</button> -->
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- CREATING PURCHASE REQUEST  -->
            <div class="ms-panel" id="create-purchase-request" style="display: none">
              <div class="ms-panel-header bg-primary d-flex justify-content-between align-items-center">
                <h6 class="text-light">CREATING PURCHASE REQUEST</h6>
              </div>
              <div class="ms-panel-body">
                <div class="row">
                  <div class="col-12 pb-4 border-bottom">
                    <div class="d-flex justify-content-between align-items-center">
                      <img src="<?= base_url() ?>pages/assets/img/bg/login-logo.png" alt="" style="max-height: 10vh; width: auto;">
                      <h5 class="text-red">PURCHASE REQUEST NO. PR-20-00001</h5>
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
                            <input type="text" value="" class="form-control w-100 text-center" disabled>
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
                        <span class="text-light font-weight-bold">LIST OF ITEMS:</span>
                      </div>
                    </div>



                    <div class="table-responsive pt-2 pb-5">
                      <div class="input-group mx-1 w-auto float-right">
                        <div class="input-group-prepend">
                          <span class="input-group-text text-white" id="basic-addon1" style="background: #ff0018"><i class="fas fa-plus"></i></span>
                        </div>
                        <input type="text" aria-label="Username" aria-describedby="basic-addon1" onkeypress="return numbersOnly(event)" maxlength="3" style="width: 50px;" name="addcourierrow" id="addcourierrow" class="addcourierrow" data-todo="add">
                      </div>
                      <table class="table table-bordered table-hover thead-primary ">
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
                            <th>ACTION</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>
                              <select name="add_itemcode" id="add_itemcode0" class="form-control">
                                <option value="" default selected>Select Item Code</option>
                                <option value="1">ITM-20-00001</option>
                                <option value="1">ITM-20-00002</option>
                              </select>
                            </td>
                            <td>
                              <input type="text" name="add_itemname" id="add_itemname0" class="add_itemname form-control" disabled>
                            </td>
                            <td>
                              <input type="number" name="add_itemqty" id="add_itemqty0" class="add_itemqty form-control">
                            </td>
                            <td>
                              <input type="text" name="add_itemuom" id="add_itemuom0" class="add_itemuom form-control" disabled>
                            </td>
                            <td>
                              <input type="text" name="add_itemunitcost" id="add_itemunitcost0" class="add_itemunitcost form-control" disabled>
                            </td>
                            <td>
                              YES
                            </td>
                            <td>
                              <input type="text" name="add_itemsubtotal" id="add_itemsubtotal0" class="add_itemsubtotal form-control" disabled>
                            </td>
                            <td>
                              <button class="btn btn-outline-danger removetablerow" data-todo="add" style="min-width: 1rem; padding: .3rem;">&nbsp;<i class="fas fa-minus"></i></button>
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
                      <div><span class="font-weight-bold">Preparer Name:</span> <span>Arjay Diangzon</span></div>
                      <div>
                        <button class="btn btn-outline-primary" id="btn-back">CANCEL</button>
                        <button class="btn btn-primary" id="save">SAVE</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          <!-- FOR APPROVAL CHARLES -->
            <div class="ms-panel" id="view-purchase-request" style="display: none">
              <div class="ms-panel-header bg-primary d-flex justify-content-between align-items-center">
                <h6 class="text-light">PURCHASE REQUEST</h6>
              </div>
              <div class="ms-panel-body">
                <div class="row">
                  <div class="col-12 pb-4 border-bottom">
                    <div class="d-flex justify-content-between align-items-center">
                      <img src="<?= base_url() ?>pages/assets/img/bg/login-logo.png" alt="" style="max-height: 10vh; width: auto;">
                      <h5 class="text-red">PURCHASE REQUEST NO. PR-20-00001</h5>
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
                            <textarea class="form-control" rows="3" disabled></textarea>
                          </div>
                        </div>
                      </form>
                    </div>

                    <!-- Divider -->
                    <div class="row mt-3 mb-3">
                      <div class="col-12 bg-primary p-3">
                        <span class="text-light font-weight-bold">LIST OF ITEMS:</span>
                      </div>
                    </div>


                    <div class="table-responsive mt-5 mb-5">
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
                            <td >ITM-20-00001</td>
                            <td>Soy Souce</td>
                            <td > 3 </td>
                            <td>pieces</td>
                            <td class="text-right">50.00</td>
                            <td> YES </td>
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
                        <div class="mx-2"><span class="font-weight-bold">Preparer Name:</span> <span>Arjay Diangzon</span><br><span class="text-light">text</span></div>
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

            <div class="ms-panel" id="rejected-purchase-request" style="display: none">
              <div class="ms-panel-header bg-primary d-flex justify-content-between align-items-center">
                <h6 class="text-light">PURCHASE REQUEST</h6>
              </div>
              <div class="ms-panel-body">
                <div class="row">
                  <div class="col-12 pb-4 border-bottom">
                    <div class="d-flex justify-content-between align-items-center">
                      <img src="<?= base_url() ?>pages/assets/img/bg/login-logo.png" alt="" style="max-height: 10vh; width: auto;">
                      <h5 class="text-red">PURCHASE REQUEST NO. PR-20-00001</h5>
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
                            <textarea class="form-control" rows="3" disabled>Remarks will display here</textarea>
                          </div>
                        </div>
                      </form>
                    </div>

                    <!-- Divider -->
                    <div class="row mt-3 mb-3">
                      <div class="col-12 bg-primary p-3">
                        <span class="text-light font-weight-bold">LIST OF ITEMS:</span>
                      </div>
                    </div>

                    <div class="table-responsive mt-5 mb-5">
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
                          <tr>
                            <td>1</td>
                            <td>ITM-20-00001</td>
                            <td>Soy Souce</td>
                            <td> 3 </td>
                            <td> pieces </td>
                            <td class="text-right">50.00 </td>
                            <td> YES </td>
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
                        <div class="mx-2"><span class="font-weight-bold">Preparer Name:</span> <span>Arjay Diangzon</span><br><span class="text-light">text</span></div>
                        <div class="mx-2"><span class="font-weight-bold">Checker Name:</span> <span>Amy Han</span><br>
                          <span class="badge badge-outline-danger">Rejected - Sept 10, 2020 1:51PM </span>
                        </div>
                        <div class="mx-2"><span class="font-weight-bold">Approver Name:</span> <span>Haba Gat</span><br>
                          <span class="badge badge-outline-danger">Rejected - Sept 10, 2020 1:51PM</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- CREATING PURCHASE ORDER -->
            <div class="ms-panel" id="create-purchase-order" style="display: none">
              <div class="ms-panel-header bg-primary d-flex justify-content-between align-items-center">
                <h6 class="text-light">CREATING PURCHASE ORDER</h6>
              </div>
              <div class="ms-panel-body">
                <div class="row">
                  <div class="col-12 pb-4 border-bottom">
                    <div class="d-flex justify-content-between align-items-center">
                      <img src="<?= base_url() ?>pages/assets/img/bg/login-logo.png" alt="" style="max-height: 10vh; width: auto;">
                      <h5 class="text-red">PURCHASE REQUEST NO. PR-20-00001</h5>
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
                          <select name="suppliercode" id="suppliercode" class="form-control">
                            <option value="">SUP-20-00001</option>
                            <option value="">SUP-20-00002</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <label>Supplier Name</label>
                          <input type="text" class="form-control" id="suppliername" disabled>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <label>Contact Person</label>
                          <input type="text" class="form-control" id="contactperson" disabled>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <div class="form-group">
                          <label>Contact Number</label>
                          <input type="text" class="form-control" id="contactnumber" disabled>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <label>Supplier Address</label>
                          <input type="text" class="form-control" id="supplieraddress" disabled>
                        </div>
                      </div>
                    </div>

                    <!-- Divider -->
                    <div class="row mt-3 mb-3">
                      <div class="col-12 bg-primary p-3">
                        <span class="text-light font-weight-bold">LIST OF ITEMS:</span>
                      </div>
                    </div>

                    <div class="table-responsive mb-5 mt-3">
                      <table class="table table-bordered table-hover thead-primary">
                        <thead>
                          <tr class="text-center">
                            <th>
                              <label class="ms-checkbox-wrap ms-checkbox-dark">
                                <input type="checkbox" value=""> <i class="ms-checkbox-check"></i>
                              </label>
                            </th>
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
                            <td>
                              <label class="ms-checkbox-wrap ms-checkbox-dark">
                                <input type="checkbox" value=""> <i class="ms-checkbox-check"></i>
                              </label>
                            </td>
                            <td>1</td>
                            <td >ITM-20-00001</td>
                            <td>Soy Souce</td>
                            <td > 3 </td>
                            <td>pieces</td>
                            <td class="text-right">50.00</td>
                            <td> YES </td>
                            <td class="text-right">150.00</td>
                          </tr>
                          <tr class="text-center">
                            <td>
                              <label class="ms-checkbox-wrap ms-checkbox-dark">
                                <input type="checkbox" value=""> <i class="ms-checkbox-check"></i>
                              </label>
                            </td>
                            <td>2</td>
                            <td>ITM-20-00002</td>
                            <td>Pork Ribs</td>
                            <td>5</td>
                            <td>kilogram</td>
                            <td class="text-right">80.00</td>
                            <td> YES</td>
                            <td class="text-right">400.00</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="row">
                      <div class="offset-9 col-3">
                        <div class="row">
                          <div class="col-6 font-weight-bold">SUB TOTAL:</div>
                          <div class="col-6 text-right">₱ <span id="basedpricecost">520.00</span></div>
                        </div>
                        <div class="row">
                          <div class="col-6 font-weight-bold">VAT (12%):</div>
                          <div class="col-6 text-right">₱ <span id="vatcost">30.00</span></div>
                        </div>
                      </div>
                      <div class="offset-9 col-3">
                        <div class="row">
                          <div class="col-6 font-weight-bold">TOTAL COST:</div>
                          <div class="col-6 text-right">₱ <span id="subtotalcost">550.00</span></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 mt-4 pt-4 border-top">
                      <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex justify-content-around align-items-center">
                          <div class="mx-2"><span class="font-weight-bold">Preparer Name:</span> <span>Arjay Diangzon</span><br><span class="text-light">text</span></div>
                          <div class="mx-2"><span class="font-weight-bold">Checker Name:</span> <span>Amy Han</span><br>
                            <span class="badge badge-outline-success">Approved - Sept 10, 2020 1:51PM</span>
                          </div>
                          <div class="mx-2"><span class="font-weight-bold">Approver Name:</span> <span>Haba Gat</span><br>
                            <span class="badge badge-outline-success">Approved - Sept 10, 2020 1:51PM </span>
                          </div>
                        </div>
                        <div>
                          <button class="btn btn-outline-primary" id="btn-create-cancel">CANCEL</button>
                          <button class="btn btn-primary" id="btn-create-save">SAVE</button>
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

<div class="modal fade" id="add_confirmationpurchaserequest" tabindex="-1" role="dialog" aria-labelledby="add_confirmationpurchaserequest" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-min" role="document">
    <div class="modal-content">
        <div class="modal-body pb-3 text-center">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <img class="isometric confirmationisometric" width="230px" height="100px" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/modal/confirmation.png">
        <h1 class="text-red text-center">ADD PURCHASE REQUEST</h1>
            <p class="text-center my-2">Are you sure you want to add Purchase Request?</p>
            <div class="invalid-feedback" id="confirmation-add-invalid"></div>
        </div>
        <div class="modal-footer" style="margin:auto;" >
          <div>
            <button type="button" data-dismiss="modal" class="btn btn-outline-primary shadow-none" id="add_confirmation_no">NO</button>
            <button type="button" class="btn btn-primary shadow-none" id="add_confirmation_yes">YES</button>
        </div>
        </div>
    </div>
  </div>
</div>

<div class="modal fade" id="approve_purchaserequest" tabindex="-1" role="dialog" aria-labelledby="approve_purchaserequest" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-min" role="document">
    <div class="modal-content">
        <div class="modal-body pb-3 text-center">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <img class="isometric confirmationisometric" width="230px" height="100px" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/modal/confirmation.png">
        <h1 class="text-red text-center">APPROVE PURCHASE REQUEST</h1>
            <p class="text-center my-2">Are you sure you want to add Purchase Request?</p>
            <div class="invalid-feedback" id="confirmation-add-invalid"></div>
        </div>
        <div class="modal-footer" style="margin:auto;">
          <div>
          <button type="button" data-dismiss="modal" class="btn btn-outline-primary shadow-none" id="pr_confirmation_no">NO</button>
            <button type="button" class="btn btn-primary shadow-none" id="pr_confirmation_yes">YES</button>
        </div>
        </div>
    </div>
  </div>
</div>

<div class="modal fade" id="reject_purchaserequest" tabindex="-1" role="dialog" aria-labelledby="reject_purchaserequest" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-min" role="document">
    <div class="modal-content">
        <div class="modal-body pb-3 text-center">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <img class="isometric confirmationisometric" width="230px" height="100px" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/modal/confirmation.png">
          <h1 class="text-red text-center">REJECT PURCHASE REQUEST</h1>
          <p class="text-center my-2">Are you sure you want to reject Purchase Request?</p>
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

<div class="modal fade" id="add_confirmationpurchaseorder" tabindex="-1" role="dialog" aria-labelledby="add_confirmationpurchaseorder" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-min" role="document">
    <div class="modal-content">
        <div class="modal-body pb-3 text-center">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <img class="isometric confirmationisometric" width="230px" height="100px" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/modal/confirmation.png">
        <h1 class="text-red text-center">CREATE PURCHASE ORDER</h1>
            <p class="text-center my-2">Are you sure you want to add Purchase Order?</p>
            <div class="invalid-feedback" id="confirmation-add-invalid"></div>
        </div>
        <div class="modal-footer" style="margin:auto;">
          <div>
            <button type="button" data-dismiss="modal" class="btn btn-outline-primary shadow-none" id="add_confirmation_pr_no">NO</button>
            <button type="button" class="btn btn-primary shadow-none" id="add_confirmation_pr_yes">YES</button>
        </div>
        </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function() {
    $("#table-purchaserequest").dataTable();

    $("#PurchaseRequest").hide();
    $("#PurchaseRequestV2").hide();
    $("#PurchaseRequestV3").hide();

    $(document).on("click", "#approve", function() {
      $("#approve_purchaserequest").modal("show");
    })

    $(document).on("click", "#btn-rejecte-back", function() {
      $("#btn-rejecte-back").hide();
      $("#rejected-purchase-request").hide();
      $("#list-purchase-request").show();
    })

    $(document).on("click", "#btn-rejected-purchase-request", function() {
      $("#list-purchase-request").hide();
      $("#rejected-purchase-request").show();
      $("#btn-rejecte-back").show();
    });

    $(document).on("click", "#btn-create-save", function() {
      $("#add_confirmationpurchaseorder").modal("show");
    })

    $(document).on("click", "#btn-create-back, #btn-create-cancel", function() {
      $("#btn-create-back").hide();
      $("#create-purchase-order").hide();
      $("#list-purchase-request").show();

      $("#PurchaseRequest").hide();
      $("#PurchaseRequestV1").show();
      $("#PurchaseRequestV3").hide();

    })

    $(document).on("click", "#btn-create-purchase-order", function() {
      $("#list-purchase-request").hide();
      $("#create-purchase-order").show();
      $("#btn-create-back").show();

      $("#PurchaseRequest").show();
      $("#PurchaseRequestV1").hide();
      $("#PurchaseRequestV3").show();

    });

    $(document).on("click", "#reject", function() {
      $("#reject_purchaserequest").modal("show");
    })

    $(document).on("click", "#btn-view-back", function() {
      $("#btn-view-back").hide();
      $("#view-purchase-request").hide();
      $("#list-purchase-request").show();
    })

    $(document).on("click", "#btn-view-purchase-request", function() {
      $("#list-purchase-request").hide();
      $("#view-purchase-request").show();
      $("#btn-view-back").show();
    });

    $(document).on("click", "#save", function() {
      $("#add_confirmationpurchaserequest").modal("show");
    })

    $(document).on("click", "#add-purchase-request-form", function() {
      $("#list-purchase-request").hide();
      $("#create-purchase-request").show();
      $("#btn-back").show();

      $("#PurchaseRequest").show();
      $("#PurchaseRequestV1").hide();
      $("#PurchaseRequestV2").show();

    })

    $(document).on("click", "#btn-back", function() {
      $("#btn-back").hide();
      $("#create-purchase-request").hide();
      $("#list-purchase-request").show();

      $("#PurchaseRequest").hide();
      $("#PurchaseRequestV1").show();
      $("#PurchaseRequestV2").hide();
    });

    $('#suppliercode').change(function(){
        
        $("#suppliername").val("Hatdog Inc.");
        $("#contactperson").val("Arjay Diangzon");
        $("#contactnumber").val("0912-345-6789");
        $("#supplieraddress").val("Pasig City");

    });

  })
</script>