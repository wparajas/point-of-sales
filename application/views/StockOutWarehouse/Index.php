<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-between align-items-center">
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb pl-0">
                  <li class="breadcrumb-item"><a href="<?= base_url().'Dashboard'?>"><i class="material-icons fs-16">dashboard</i> Dashboard</a></li>
                  <li class="breadcrumb-item active" id="StockOutWarehouse">Stock Out Warehouse</li>
                  <li class="breadcrumb-item" id="StockOutWarehouseV1"><a href="#"> Stock Out Warehouse</a></li>
                  <li class="breadcrumb-item active" id="StockOutWareHouseV2" aria-current="page">Stock Out Form</li>
              </ol>
          </nav>
            <button class="btn text-red" id="btn-approval-back" style="display: none; border:none;"><i class="fas fa-arrow-left"></i> BACK</button>
            <button class="btn text-red" id="btn-approved-back" style="display: none; border:none;"><i class="fas fa-arrow-left"></i> BACK</button>
            <button class="btn text-red" id="btn-create-back" style="display: none; border:none;"><i class="fas fa-arrow-left"></i> BACK</button>
            <button class="btn text-red" id="btn-rejected-back" style="display: none; border:none;"><i class="fas fa-arrow-left"></i> BACK</button>
        </div>
        <div class="col-md-12">
            <div class="ms-panel" id="list-stockout">
              <div class="ms-panel-header bg-primary d-flex justify-content-between align-items-center">
                  <h6 class="text-light">LIST OF STOCK OUT</h6>
                  <button class="btn btn-outline-red" id="btn-create-stockout">
                    <i class="fa fa-plus-square fa-lg"></i> ADD STOCK OUT
                  </button>
              </div>
              <div class="ms-panel-body">
                <div class="row">
                  <div class="col-12">
                    <div class="table-responsive container-fluid">
                      <table id="table-stockout" class="table table-bordered thead-primary dtBasicExample">
                        <thead>
                          <tr class="text-center">
                            <th>NUMBER</th>
                            <th>TRANSFER NUMBER</th>
                            <th>PREPARER NAME</th>
                            <th>POSITION</th>
                            <th>DATE SUBMITTED</th>
                            <th>STATUS</th>
                            <th>ACTION</th>
                          </tr>
                        </thead>
                          <tbody>
                            <tr class="text-center">
                              <td>1</td>
                              <td>TR-20-00001</td>
                              <td>Amy Han</td>
                              <td>Warehouse Manager</td>
                              <td>September 11, 2020</td>
                              <td>
                                <span class="badge badge-outline-info">For Approval</span>
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
                                               id="btn-approval-stockout" >
                                            <i style="font-size: 1rem" class="fas fa-eye text-secondary"></i><span>View</span>
                                          </div>
                                        </a>
                                      </li>
                                    </ul>
                                  </div>
                               <!--  <button class="btn btn-sm btn-outline-secondary" id="btn-approval-stockout"><i class="fas fa-eye"></i> View</button> -->
                              </td>
                            </tr>
                            <tr class="text-center">
                              <td>2</td>
                              <td>TR-20-00002</td>
                              <td>Amy Han</td>
                              <td>Warehouse Manager</td>
                              <td>September 11, 2020</td>
                              <td>
                                <span class="badge badge-outline-danger">&nbsp;&nbsp;Rejected&nbsp;&nbsp;</span>
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
                                               id="btn-approved-stockout" >
                                            <i style="font-size: 1rem" class="fas fa-eye text-secondary"></i><span>View</span>
                                          </div>
                                        </a>
                                      </li>
                                    </ul>
                                  </div>
                                <!-- <button class="btn btn-sm btn-outline-secondary" id="btn-approved-stockout"><i class="fas fa-eye"></i> View</button> -->
                              </td>
                            </tr>
                          </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="ms-panel" id="approval-stockout" style="display: none">
              <div class="ms-panel-header bg-primary d-flex justify-content-between align-items-center">
                <h6 class="text-light">STOCK OUT</h6>
                <div class="btn-group">
                  <button class="btn btn-outline-red"><i class="fas fa-print"></i> PRINT</button>
                  <button class="btn btn-outline-red"><i class="fas fa-file-pdf"></i> PDF</button>
                </div>
              </div>
              <div class="ms-panel-body">
                <div class="row">
                  <div class="col-12 pb-4 border-bottom">
                    <div class="d-flex justify-content-between align-items-center">
                      <img src="<?= base_url() ?>pages/assets/img/bg/login-logo.png" alt="" style="max-height: 10vh; width: auto;">
                      <h5 class="text-red">TRANSFER NO. TR-20-00001</h5>
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
                            <input type="text" value="" class="form-control w-100" value="Approved" disabled>
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

                    <div class="row mt-3 mb-3">
                      <div class="col-12 bg-primary p-3">
                        <span class="text-light font-weight-bold">STOCK TO:</span>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-4">
                        <div class="form-group">
                          <label>Warehouse Code</label> 
                          <input type="text" class="form-control" value="WAR-20-00001" disabled>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <label>Warehouse Name</label>
                          <input type="text" class="form-control" value="Exodus" disabled>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <label>Warehouse Address</label>
                          <input type="text" class="form-control" value="Pasig City" disabled>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-4">
                        <div class="form-group">
                          <label>Floor</label> 
                          <input type="text" class="form-control" value="Floor 2" disabled>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <label>Bay</label>
                          <input type="text" class="form-control" value="N/A" disabled>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <label>Level</label>
                          <input type="text" class="form-control" value="N/A" disabled>
                        </div>
                      </div>
                    </div>
                    
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
                            <th>UOM</th>
                            <th>TOTAL QTY</th>
                            <th>QTY</th>
                            <th>BAR CODE</th>
                            <th>EXP DATE</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>IC-20-00001</td>
                            <td>Soy Sauce</td>
                            <td>Pieces</td>
                            <td>8</td>
                            <td>
                              <div>3</div>
                              <div>5</div>
                            </td>
                            <td>
                              <div>1-123456-321523</div>
                              <div>1-321452-123532</div>
                            </td>
                            <td>
                              <div>September 11, 2020</div>
                              <div>September 13, 2020</div>
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
                        <div class="mx-2"><span class="font-weight-bold">Checker Name:</span> <span>Amy Han</span><br><span class="badge badge-outline-info">Pending </span></div>
                        <div class="mx-2"><span class="font-weight-bold">Approver Name:</span> <span>Haba Gat</span><br><span class="badge badge-outline-info">Pending </span></div>
                      </div>
                      <div>
                        <button class="btn btn-outline-primary" id="btn-stockout-reject">REJECT</button>
                        <button class="btn btn-danger" id="btn-stockout-approve">APPROVE</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="ms-panel" id="create-stockout" style="display: none">
              <div class="ms-panel-header bg-primary d-flex justify-content-between align-items-center">
                <h6 class="text-light">CREATING STOCK OUT</h6>
              </div>
              <div class="ms-panel-body">
                <div class="row">
                  <div class="col-12 pb-4 border-bottom">
                    <div class="d-flex justify-content-between align-items-center">
                      <img src="<?= base_url() ?>pages/assets/img/bg/login-logo.png" alt="" style="max-height: 10vh; width: auto;">
                      <h5 class="text-red">TRANSFER NO. TR-20-00001</h5>
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
                            <input type="text" value="" class="form-control w-100" value="" disabled>
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
                        <span class="text-light font-weight-bold">STOCK TO:</span>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-4">
                        <div class="form-group">
                          <label>Warehouse Code</label> 
                          <select name="warehouse_code" id="warehouse_code" class="form-control">
                            <option value="">WAR-20-00001</option>
                            <option value="">WAR-20-00002</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <label>Warehouse Name</label>
                          <input type="text" class="form-control" value="Exodus" disabled>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <label>Warehouse Address</label>
                          <input type="text" class="form-control" value="Pasig City" disabled>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-4">
                        <div class="form-group">
                          <label>Floor</label> 
                          <input type="text" class="form-control" value="Floor 2" disabled>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <label>Bay</label>
                          <input type="text" class="form-control" value="N/A" disabled>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <label>Level</label>
                          <input type="text" class="form-control" value="N/A" disabled>
                        </div>
                      </div>
                    </div>

                    <!-- Divider -->
                    <div class="row mt-3 mb-3">
                      <div class="col-12 bg-primary p-3">
                        <span class="text-light font-weight-bold">LIST OF ITEMS:</span>
                      </div>
                    </div>

                    <div class="input-group mx-1 w-auto float-right">
                      <div class="input-group-prepend">
                        <span class="input-group-text text-white" id="basic-addon1" style="background: #ff0018"><i class="fas fa-plus"></i></span>
                      </div>
                      <input type="text" aria-label="Username" aria-describedby="basic-addon1" onkeypress="return numbersOnly(event)" maxlength="3" style="width: 50px;" name="addstockoutrow" id="addstockoutrow" class="addstockoutrow" data-todo="add">
                    </div>
                    <div class="table-responsive mt-5 mb-5">
                      <table class="table table-bordered table-hover thead-primary">
                        <thead>
                          <tr class="text-center">
                            <th>NUMBER</th>
                            <th>ITEM CODE</th>
                            <th>ITEM NAME</th>
                            <th>UOM</th>
                            <th>QTY</th>
                            <th>BAR CODE</th>
                            <th>EXP DATE</th>
                            <th>ACTION</th>
                          </tr>
                        </thead>
                        <tbody id="add-tbody-stockout">
                          <tr class="add-tr-stockout">
                            <td>1</td>
                            <td>
                              <select name="" id="" class="form-control">
                                <option value="">IC-20-00001</option>
                                <option value="">IC-20-00002</option>
                              </select>
                            </td>
                            <td>
                              <input type="text" class="form-control" value="Soy Sauce" disabled>
                            </td>
                            <td>
                              <input type="text" class="form-control" value="Pieces" disabled>
                            </td>
                            <td class="text-center">
                              <div>3</div>
                              <div>5</div>
                              <div>
                                <input type="number" class="form-control">
                              </div>
                            </td>
                            <td class="text-center">
                              <div>1-123456-321523</div>
                              <div>1-321452-123532</div>
                              <div>
                                <input type="text" class="form-control">
                              </div>
                            </td>
                            <td>
                              <div>September 11, 2020</div>
                              <div>September 13, 2020</div>
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
                      <div class="d-flex justify-content-around align-items-center">
                        <div class="mx-2"><span class="font-weight-bold">Preparer Name:</span> <span>Arjay Diangzon</span></div>
                      </div>
                      <div>
                        <button class="btn btn-outline-primary" id="btn-create-stockout-cancel">CANCEL</button>
                        <button class="btn btn-danger" id="btn-create-stockout-save">SAVE</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="ms-panel" id="approved-stockout" style="display: none">
              <div class="ms-panel-header bg-primary d-flex justify-content-between align-items-center">
                <h6 class="text-light">STOCK OUT</h6>
                <div class="btn-group">
                  <button class="btn btn-outline-red"><i class="fas fa-print"></i> PRINT</button>
                  <button class="btn btn-outline-red"><i class="fas fa-file-pdf"></i> PDF</button>
                </div>
              </div>
              <div class="ms-panel-body">
                <div class="row">
                  <div class="col-12 pb-4 border-bottom">
                    <div class="d-flex justify-content-between align-items-center">
                      <img src="<?= base_url() ?>pages/assets/img/bg/login-logo.png" alt="" style="max-height: 10vh; width: auto;">
                      <h5 class="text-red">TRANSFER NO. TR-20-00001</h5>
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
                            <input type="text" value="Approved" class="form-control w-100 text-center" value="Rejected" disabled>
                          </div>
                        </div>
                        <div class="row d-flex align-items-center my-1">
                          <div class="col-4">
                            <label>REMARKS</label>
                          </div>
                          <div class="col-8">
                            <!-- <input type="text" value="" class="form-control w-100" disabled> -->
                            <textarea class="form-control" rows="3" disabled>Sample Remarks here</textarea>
                          </div>
                        </div>
                      </form>
                    </div>

                    <div class="row mt-3 mb-3">
                      <div class="col-12 bg-primary p-3">
                        <span class="text-light font-weight-bold">STOCK TO:</span>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-4">
                        <div class="form-group">
                          <label>Warehouse Code</label> 
                          <input type="text" class="form-control" value="WAR-20-00001" disabled>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <label>Warehouse Name</label>
                          <input type="text" class="form-control" value="Exodus" disabled>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <label>Warehouse Address</label>
                          <input type="text" class="form-control" value="Pasig City" disabled>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-4">
                        <div class="form-group">
                          <label>Floor</label> 
                          <input type="text" class="form-control" value="Floor 2" disabled>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <label>Bay</label>
                          <input type="text" class="form-control" value="N/A" disabled>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <label>Level</label>
                          <input type="text" class="form-control" value="N/A" disabled>
                        </div>
                      </div>
                    </div>
                    
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
                            <th>UOM</th>
                            <th>TOTAL QTY</th>
                            <th>QTY</th>
                            <th>BAR CODE</th>
                            <th>EXP DATE</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>IC-20-00001</td>
                            <td>Soy Sauce</td>
                            <td>Pieces</td>
                            <td>8</td>
                            <td>
                              <div>3</div>
                              <div>5</div>
                            </td>
                            <td>
                              <div>1-123456-321523</div>
                              <div>1-321452-123532</div>
                            </td>
                            <td>
                              <div>September 11, 2020</div>
                              <div>September 13, 2020</div>
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
                        <div class="mx-2"><span class="font-weight-bold">Preparer Name:</span> <span>Arjay Diangzon</span><br><span class="text-light">asd</span></div>
                        <div class="mx-2"><span class="font-weight-bold">Checker Name:</span> <span>Amy Han</span><br>
                          <span class="badge badge-outline-success">Approved - September 11, 2020 11:52AM</span>
                        </div>
                        <div class="mx-2"><span class="font-weight-bold">Approver Name:</span> <span>Haba Gat</span><br>
                          <span class="badge badge-outline-danger">Rejected - September 11, 2020 11:52AM</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="ms-panel" id="rejected-stockout" style="display: none">
              <div class="ms-panel-header bg-primary d-flex justify-content-between align-items-center">
                <h6 class="text-light">STOCK OUT</h6>
                <div class="btn-group">
                  <button class="btn btn-outline-red"><i class="fas fa-print"></i> PRINT</button>
                  <button class="btn btn-outline-red"><i class="fas fa-file-pdf"></i> PDF</button>
                </div>
              </div>
              <div class="ms-panel-body">
                <div class="row">
                  <div class="col-12 pb-4 border-bottom">
                    <div class="d-flex justify-content-between align-items-center">
                      <img src="<?= base_url() ?>pages/assets/img/bg/login-logo.png" alt="" style="max-height: 10vh; width: auto;">
                      <h5 class="text-red">TRANSFER NO. TR-20-00001</h5>
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
                            <input type="text" value="Rejected" class="form-control w-100 text-center" value="Approved" disabled>
                          </div>
                        </div>
                        <div class="row d-flex align-items-center my-1">
                          <div class="col-4">
                            <label>REMARKS</label>
                          </div>
                          <div class="col-8">
                            <!-- <input type="text" value="" class="form-control w-100" disabled> -->
                            <textarea class="form-control" rows="3" disabled>Remarks will display here</textarea>
                          </div>
                        </div>
                      </form>
                    </div>

                    <div class="row mt-3 mb-3">
                      <div class="col-12 bg-primary p-3">
                        <span class="text-light font-weight-bold">STOCK TO:</span>
                      </div>
                    </div>
                      
                    </div>
                    <div class="row">
                      <div class="col-4">
                        <div class="form-group">
                          <label>Warehouse Code</label> 
                          <input type="text" class="form-control" value="WAR-20-00001" disabled>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <label>Warehouse Name</label>
                          <input type="text" class="form-control" value="Exodus" disabled>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <label>Warehouse Address</label>
                          <input type="text" class="form-control" value="Pasig City" disabled>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-4">
                        <div class="form-group">
                          <label>Floor</label> 
                          <input type="text" class="form-control" value="Floor 2" disabled>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <label>Bay</label>
                          <input type="text" class="form-control" value="N/A" disabled>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <label>Level</label>
                          <input type="text" class="form-control" value="N/A" disabled>
                        </div>
                      </div>
                    </div>

                    <div class="row mt-3 mb-3 w-100">
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
                            <th>UOM</th>
                            <th>TOTAL QTY</th>
                            <th>QTY</th>
                            <th>BAR CODE</th>
                            <th>EXP DATE</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>IC-20-00001</td>
                            <td>Soy Sauce</td>
                            <td>Pieces</td>
                            <td>8</td>
                            <td>
                              <div>3</div>
                              <div>5</div>
                            </td>
                            <td>
                              <div>1-123456-321523</div>
                              <div>1-321452-123532</div>
                            </td>
                            <td>
                              <div>September 11, 2020</div>
                              <div>September 13, 2020</div>
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
                          <span class="badge badge-outline-danger">Rejected - September 11, 2020 11:52AM</span>
                        </div>
                        <div class="mx-2"><span class="font-weight-bold">Approver Name:</span> <span>Haba Gat</span><br>
                          <span class="badge badge-outline-danger">Rejected - September 11, 2020 11:52AM</span>
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
        <h1 class="text-red text-center">APPROVE STOCK OUT</h1>
            <h6 class="text-center my-2">Are you sure you want to approve stock out?</h6>
            <div class="invalid-feedback" id="confirmation-add-invalid"></div>
        </div>
        <div class="modal-footer text-center" style="margin:auto">
          <div class="text-center">
            <button type="button" data-dismiss="modal" class="btn btn-outline-primary shadow-none" id="so_confirmation_no">NO</button>
            <button type="button" class="btn btn-primary shadow-none" id="so_confirmation_yes">YES</button>
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
          <h1 class="text-red text-center">REJECT STOCK OUT</h1>
          <h6 class="text-center my-2">Are you sure you want to reject stock out?</h6>
          <div class="invalid-feedback" id="confirmation-add-invalid"></div>
          <small class="text-warning float-left">Note: Please input a remarks upon rejecting this document</small>
          <textarea class="form-control" style="resize: none" rows="3"></textarea>
        </div>
        <div class="modal-footer text-center" style="margin:auto">
          <div class="text-center">
            <button type="button" data-dismiss="modal" class="btn btn-outline-primary shadow-none" id="reject_no">CANCEL</button>
            <button type="button" class="btn btn-primary shadow-none" id="reject_yes">REJECT</button>
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
        <h1 class="text-red text-center">TRANSFER ITEMS</h1>
            <p class="text-center my-2 text-secondary">Are you sure you want to trasfer items?</p>
            <div class="invalid-feedback" id="confirmation-add-invalid"></div>
        </div>
        <div class="modal-footer text-center" style="margin:auto">
          <div class="text-center">
            <button type="button" data-dismiss="modal" class="btn btn-outline-primary shadow-none" id="save_confirmation_no">NO</button>
            <button type="button" class="btn btn-primary shadow-none" id="save_confirmation_yes">YES</button>
        </div>
        </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function() {
     

    $("#table-stockout").DataTable();

    $("#StockOutWarehouseV1").hide();
    $("#StockOutWareHouseV2").hide();

    function updateTable(todo = "add") {
      $("."+todo+"-tr-stockout").each(function(i) {

        $("."+todo+"-tr-stockout", this).attr("number", (i));

        // REMOVE ELEMENT
        $(this).attr("id", todo+"-table-row-id"+(i));
        $(".removetablerow", this).attr("id", (i));
      });
    }

    $(document).on("click", "#btn-rejected-back", function() {
      $("#list-stockout").show();
      $("#rejected-stockout").hide();
      $("#btn-rejected-back").hide();


    })

    $(document).on("click", "#btn-rejected-stockout", function() {
      $("#list-stockout").hide();
      $("#rejected-stockout").show();
      $("#btn-rejected-back").show();
    })

    $(document).on("click", "#btn-approved-back", function() {
      $("#list-stockout").show();
      $("#approved-stockout").hide();
      $("#btn-approved-back").hide();
    })

    $(document).on("click", "#btn-approved-stockout", function() {
      $("#list-stockout").hide();
      $("#approved-stockout").show();
      $("#btn-approved-back").show();
    })

    $(document).on("click", "#btn-create-stockout-save", function() {
      $("#modal-confirmation-save").modal("show");
    })

    // REMOVE TABLE ROW
    $(document).on("click", ".removetablerow", function(e) {
      e.preventDefault();
      const id = $(this).attr("id");
      const todo = $(this).data("todo");
      console.log(todo);
      const elementLength = $("."+todo+"-tr-stockout").length;
      if (elementLength > 1) {
        $("#"+todo+"-table-row-id"+id).remove();
      } 
      
      // UPDATING TABLE
      updateTable(todo);
    });

    // ADDING NEW ROW
    $(document).on("keyup", ".addstockoutrow", function(e) {
      const rownumber = $(this).val();
      const todo = $(this).data("todo");
      // console.log(todo);
      if (e.which === 13) {
        const elementLength = $("."+todo+"-tr-stockout").length;
        const newLength = rownumber - elementLength;
        let rows = ""
        for (var i=0; i<newLength; i++) {
          let html = "";
          html += '<tr class="'+todo+'-tr-stockout">';
          html += '<td class="">';
          html += '1';
          html += '</td>';
          html += '<td>';
          html += '<select name="" id="" class="form-control">';
          html += '<option value="">IC-20-00001</option>';
          html += '<option value="">IC-20-00002</option>';
          html += '</select>';
          html += '</td>';
          html += '<td>';
          html += '<input type="text" class="form-control" value="Soy Sauce" disabled>';
          html += '</td>';
          html += '<td>';
          html += '<input type="text" class="form-control" value="Pieces" disabled>';
          html += '</td>';
          html += '<td>';
          html += '<div><input type="number" class="form-control"></div>';
          html += '</td>';
          html += '<td>';
          html += '<div><input type="text" class="form-control"></div>';
          html += '</td>';
          html += '<td>';
          html += 'September 11, 2020';
          html += '</td>';
          html += '<td class="stockout-table-remove">';
          html += '<button class="btn btn-outline-danger removetablerow" data-todo="'+todo+'" style="min-width: 1rem; padding: .3rem;">&nbsp;<i class="fas fa-minus"></i></button>';
          html += '</td>';
          html += '</tr>';
          rows += html;
        }
        $("#"+todo+"-tbody-stockout").prepend(rows);
        updateTable(todo);
      }
    });

    $(document).on("click", "#btn-create-back, #btn-create-stockout-cancel", function() {
      $("#list-stockout").show();
      $("#create-stockout").hide();
      $("#btn-create-back").hide();
      $("#StockOutWarehouseV1").hide();
      $("#StockOutWareHouseV2").hide();
      $("#StockOutWarehouse").show();
    })

    $(document).on("click", "#btn-create-stockout", function() {
      $("#list-stockout").hide();
      $("#create-stockout").show();
      $("#btn-create-back").show();
      $("#StockOutWarehouseV1").show();
      $("#StockOutWareHouseV2").show();
      $("#StockOutWarehouse").hide();
    })

    $(document).on("click", "#btn-stockout-reject", function() {
      $("#reject_confirmation").modal("show");
      $("#StockOutWarehouseV1").show();
      $("#StockOutWareHouseV2").show();
      $("#StockOutWarehouse").hide();
    })

    $(document).on("click", "#btn-stockout-approve", function() {
      $("#approve_confirmation").modal("show");
      $("#StockOutWarehouseV1").show();
      $("#StockOutWareHouseV2").show();
      $("#StockOutWarehouse").hide();
    })

    $(document).on("click", "#btn-approval-back", function() {
      $("#list-stockout").show();
      $("#approval-stockout").hide();
      $("#btn-approval-back").hide();
      $("#StockOutWarehouseV1").show();
      $("#StockOutWareHouseV2").show();
      $("#StockOutWarehouse").hide();
    })

    $(document).on("click", "#btn-approval-stockout", function() {
      $("#list-stockout").hide();
      $("#approval-stockout").show();
      $("#btn-approval-back").show();
      $("#StockOutWarehouseV1").show();
      $("#StockOutWareHouseV2").show();
      $("#StockOutWarehouse").hide();
    })

  });
</script>