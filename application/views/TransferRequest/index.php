<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-between align-items-center">
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb pl-0">
                  <li class="breadcrumb-item"><a href="<?= base_url().'Dashboard'?>"><i class="material-icons fs-16">dashboard</i> Dashboard</a></li>
                  <li class="breadcrumb-item" id="InventoryMovement"><a href="">Inventory Movement</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Transfer Request</li>
              </ol>
          </nav>
          <a class="btn-back text-black" href><i class="fas fa-arrow-left "></i> Back</a>
        </div>
        <div class="col-md-12 main-page">
            <div class="ms-panel">
              <div class="ms-panel-header bg-primary d-flex justify-content-between align-items-center">
                  <h6 class="text-light">LIST OF TRANSFER REQUEST</h6>
                  <button class="btn btn-outline-red" data-toggle="modal" id="add_button" data-target="#add_transfer_request">
                    <i class="fa fa-plus-square fa-lg"></i> ADD TRANSFER REQUEST
                  </button>
              </div>
              <div class="ms-panel-body">
                <div class="row">
                  <div class="col-12">
                    <div class="table-responsive container-fluid">
                      <table id="tablecourier" class="table table-bordered thead-primary dtBasicExample">
                        <thead>
                          <tr class="text-center">
                            <th>NUMBER</th>
                            <th>REQUEST NUMBER</th>
                            <th>PREPARER NAME</th>
                            <th>POSITION</th>
                            <th>DATE SUBMITED</th>
                            <th>STATUS</th>
                            <th>ACTION</th>
                          </tr>
                        </thead>
                          <tbody>
                         
                            <tr>
                              <td>1</td>
                              <td>TRD-20-00001</td>
                              <td>Amy Han</td>
                              <td>Warehouse Manager</td>
                              <td>Aug 20, 2020</td>
                              <td class="text-center">
                                <span class="badge badge-outline-info text-center">For Approval</span>
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
                                               id="view_btn-pending" >
                                            <i style="font-size: 1rem" class="fas fa-eye text-secondary"></i><span>View</span>
                                          </div>
                                        </a>
                                      </li>
                                    </ul>
                                  </div>
                                <!-- <button class="btn btn-outline-secondary btn-sm" id="view_btn-pending"><i class="fas fa-eye"></i>View</button> -->
                              </td>
                            </tr>

                            <tr>
                              <td>2</td>
                              <td>TR-20-00003</td>
                              <td>Amy Han</td>
                              <td>Warehouse Manager</td>
                              <td>Aug 20, 2020</td>
                              <td class="text-center">
                                <span class=" badge badge-outline-success">Completed</span>
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
                                               id="view_btn-approve" >
                                            <i style="font-size: 1rem" class="fas fa-eye text-secondary"></i><span>View</span>
                                          </div>
                                        </a>
                                      </li>
                                    </ul>
                                  </div>
                               <!--  <button class="btn btn-outline-secondary btn-sm" id="view_btn-approve"><i class="fas fa-eye"></i>View</button> -->
                              </td>
                            </tr>

                            <tr>
                              <td>3</td>
                              <td>TR-20-00003</td>
                              <td>Amy Han</td>
                              <td>Warehouse Manager</td>
                              <td>Aug 20, 2020</td>
                              <td class="text-center">
                                <span class="badge badge-outline-danger text-center">Rejected</span>
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
                                               id="view_btn-reject" >
                                            <i style="font-size: 1rem" class="fas fa-eye text-secondary"></i><span>View</span>
                                          </div>
                                        </a>
                                      </li>
                                    </ul>
                                  </div>
                                <!-- <button class="btn btn-outline-secondary btn-sm" id="view_btn-reject"><i class="fas fa-eye"></i>View</button> -->
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
                <div class="d-flex justify-content-between align-items-center">
                      <img src="<?= base_url() ?>pages/assets/img/bg/login-logo.png" alt="" style="max-height: 10vh; width: auto;">
                      <h5 class="text-red">TRANSFER REQUEST NO. PR-20-00001</h5>
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
                            <input type="text" value="" class="form-control w-100" disabled>
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
                <div class="row">
                  <div class="col-12 bg-primary p-3">
                    
                  </div>
                </div>

                <div class="mt-3 d-flex justify-content-between">
                  <h4 class="modal-title has-icon ms-icon-round text-left mb-2 text-red">ITEM REQUEST</h4>
                  <div class="input-group mx-1 w-auto">
                    <div class="input-group-prepend">
                      <span class="input-group-text text-white" id="basic-addon1" style="background: #ff0018"><i class="fas fa-plus"></i></span>
                    </div>
                    <input type="text" aria-label="Username" aria-describedby="basic-addon1" onkeypress="return numbersOnly(event)" maxlength="3" style="width: 50px;" name="add_transfer_request" class="add_transfer_request" data-todo="add">
                  </div>
                </div>
              <div class="table-responsive">
                <table class="table table-bordered thead-primary text-center" id="tablegroup2">
                  <thead >
                    <tr>
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
                  <tbody id="add-tbody-request">
                    <tr class="add-tr-request">
                      <td class="thenumber">1</td>
                      <td class="">
                        <select class="form-control">
                          <option disabled >Item Code</option>
                          <option selected>IC-20-00001</option>
                          <option>IC-20-00002</option>
                          <option>IC-20-00003</option>
                        </select>
                      </td>
                      <td class="">
                        <input type="text" readonly value="Soy Sauce" class="form-control">
                      </td>
                      <td class=""><input type="number" name="" class="form-control"></td>
                      <td class=""><input type="text" readonly name="" class="form-control"></td>
                      <td class=""><input type="text" readonly name="" class="form-control"></td>
                      <td class=""><input type="text" readonly name="" class="form-control"></td>
                      <td class=""><input type="text" readonly name="" class="form-control"></td>
                      <td class="courier-package-remove-table">
                        <button class="btn btn-outline-danger removetablerow" data-todo="add" style="min-width: 1rem; padding: .3rem;">&nbsp;<i class="fas fa-minus"></i></button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <br>
              
                  <div class="col-12 pt-4 border-top">
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="d-flex justify-content-around align-items-center">
                        <div class="mx-2"><span class="font-weight-bold">Preparer Name:</span> <span>Amy Han</span></div>
                      </div>
                      <div>
                        <button class="btn btn-outline-primary btn-cancel" id="btn-create-stockout-cancel">CANCEL</button>
                        <button class="btn btn-danger btn-receive" id="btn-create-stockout-save">SAVE</button>
                      </div>
                    </div>
                  </div>
           
              <!-- <div class="d-flex justify-content-between align-items-center">
                <label><strong>Preparer Name:</strong> Amy Han</label>
                <div>
                  <button class="btn btn-outline-primary btn-cancel">CANCEL</button>
                  <button class="btn btn-primary btn-receive">SAVE</button>
                </div>
              </div> -->

            </div>
          </div>
        </div>

        <div class="col-md-12 main-for-approval">
          <div class="ms-panel">
              <div class="ms-panel-header bg-primary d-flex justify-content-between align-items-center">
                  <h6 class="text-light">TRANSFER REQUEST STOCK OUT</h6>
              </div>
              <div class="ms-panel-body">
                <div class="d-flex justify-content-between align-items-center">
                      <img src="<?= base_url() ?>pages/assets/img/bg/login-logo.png" alt="" style="max-height: 10vh; width: auto;">
                      <h5 class="text-red">TRANSFER REQUEST NO. PR-20-00001</h5>
                    </div>
                    <div class="d-flex justify-content-between pb-3">
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
                            <input type="text" value="" class="form-control w-100" disabled>
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
                <div class="row">
                  <div class="col-12 bg-primary p-3">
                    
                  </div>
                </div>
<br><br>
              <div class="table-responsive">
                <table class="table table-bordered thead-primary text-center" id="tablegroup2">
                  <thead >
                    <tr>
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
                  <tbody id="add-tbody-request">
                    <tr class="add-tr-request">
                      <td class="thenumber">1</td>
                      <td class="">IC-20-00001</td>
                      <td class="">Soy Sauce</td>
                      <td class="">3</td>
                      <td class="">pcs</td>
                      <td class="">150.00</td>
                      <td class="">Yes</td>
                      <td class="">450.000</td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <br>
              
                <div class="col-12 pt-4 border-top">
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="d-flex justify-content-around align-items-center">
                        <div class="mx-2"><span class="font-weight-bold">Preparer Name:</span> <span>Arjay Diangzon</span><br><span class="text-light">Pogi</span>
                        </div>
                        <div class="mx-2"><span class="font-weight-bold">Checker Name:</span> <span>Amy Han</span><br>
                          <span class="badge badge-outline-info p-1">Pending</span>
                        </div>
                        <div class="mx-2"><span class="font-weight-bold">Approver Name:</span> <span>Haba Gat</span><br>
                          <span class="badge badge-outline-info p-1">Pending</span>
                        </div>
                      </div>
                      <div>
                        <button class="btn btn-outline-primary btn-reject" id="btn-create-stockout-cancel">REJECT</button>
                        <button class="btn btn-danger btn-approve" id="btn-create-stockout-save">APPROVE</button>
                      </div>
                    </div>
                  </div>
            </div>
          </div>
        </div>

        <div class="col-md-12 main-approve">
          <div class="ms-panel">
              <div class="ms-panel-header bg-primary d-flex justify-content-between align-items-center">
                  <h6 class="text-light">TRANSFER REQUEST</h6>
              </div>
              <div class="ms-panel-body">
                <div class="d-flex justify-content-between align-items-center">
                      <img src="<?= base_url() ?>pages/assets/img/bg/login-logo.png" alt="" style="max-height: 10vh; width: auto;">
                      <h5 class="text-red">TRANSFER REQUEST NO. PR-20-00001</h5>
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
                <div class="row">
                  <div class="col-12 bg-primary p-3">
                    
                  </div>
                </div>
<br><br>
              <div class="table-responsive">
                <table class="table table-bordered thead-primary text-center" id="tablegroup2">
                  <thead >
                    <tr>
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
                  <tbody id="add-tbody-request">
                    <tr class="add-tr-request">
                      <td class="thenumber">1</td>
                      <td class="">IC-20-00001</td>
                      <td class="">Soy Sauce</td>
                      <td class="">3</td>
                      <td class="">pcs</td>
                      <td class="">150.00</td>
                      <td class="">Yes</td>
                      <td class="">450.000</td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <br>
              
                  <div class="col-12 pt-4 border-top">
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="d-flex justify-content-around align-items-center">
                        <div class="mx-2"><span class="font-weight-bold">Preparer Name:</span> <span>Killua Doy</span><br><span class="text-light">pogi</span></div>
                        <div class="mx-2"><span class="font-weight-bold">Checker Name:</span> <span>Amy Han</span><br>
                          <span class="badge badge-outline-success p-1">Approve - September 11, 2020 11:52AM</span>
                        </div>
                        <div class="mx-2"><span class="font-weight-bold">Approver Name:</span> <span>Haba Gat</span><br>
                          <span class="badge badge-outline-success p-1">Approve - September 11, 2020 11:52AM</span>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
          </div>
        </div>

        <div class="col-md-12 main-rejected">
          <div class="ms-panel">
              <div class="ms-panel-header bg-primary d-flex justify-content-between align-items-center">
                  <h6 class="text-light">TRANSFER REQUEST STOCK OUT</h6>
              </div>
              <div class="ms-panel-body">
                <div class="d-flex justify-content-between align-items-center">
                      <img src="<?= base_url() ?>pages/assets/img/bg/login-logo.png" alt="" style="max-height: 10vh; width: auto;">
                      <h5 class="text-red">TRANSFER REQUEST NO. PR-20-00001</h5>
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
                            <textarea class="form-control" rows="3" disabled>Sample remarks here regarding on this department</textarea>
                          </div>
                        </div>
                      </form>
                    </div>
                <!-- Divider -->
                <div class="row">
                  <div class="col-12 bg-primary p-3">
                    
                  </div>
                </div>
<br><br>
              <div class="table-responsive">
                <table class="table table-bordered thead-primary text-center" id="tablegroup2">
                  <thead >
                    <tr>
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
                  <tbody id="add-tbody-request">
                    <tr class="add-tr-request">
                      <td class="thenumber">1</td>
                      <td class="">IC-20-00001</td>
                      <td class="">Soy Sauce</td>
                      <td class="">3</td>
                      <td class="">pcs</td>
                      <td class="">150.00</td>
                      <td class="">Yes</td>
                      <td class="">450.000</td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <br>
              
                  <div class="col-12 pt-4 border-top">
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="d-flex justify-content-around align-items-center">
                        <div class="mx-2"><span class="font-weight-bold">Preparer Name:</span> <span>Killua Doy</span><br><span class="text-light">Pogi</span></div>
                        <div class="mx-2"><span class="font-weight-bold">Checker Name:</span> <span>Amy Han</span><br>
                          <span class="badge badge-outline-danger p-1">Rejected - September 11, 2020 11:52AM</span>
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




          

               

<!-- href="<?php echo base_url();?>pages\vendors\iconic-fonts\font-awesome\css\all.min.css" -->




<!-- Confirmation Add Modal Courier  -->
<div class="modal fade" id="receive_confirmation" tabindex="-1" role="dialog" aria-labelledby="add_confirmationcourier" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-min" role="document">
    <div class="modal-content">
        <div class="modal-body pb-3 text-center">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <img class="isometric confirmationisometric" width="230px" height="100px" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/modal/confirmation.png">
        <h1 class="text-red text-center">ADD TRANSFER REQUEST</h1>
            <p class="text-center my-2 text-secondary">Are you sure you want to add Transfer Request?</p>
            <div class="invalid-feedback" id="confirmation-add-invalid"></div>
        </div>
        <div class="modal-footer">
          <div style="margin:auto;">
            <button type="button" data-dismiss="modal" class="btn btn-outline-primary shadow-none" id="add_confirmation_no">NO</button>
            <button type="button" class="btn btn-primary shadow-none" id="add_confirmation_yes">YES</button>
          </div>
        </div>
    </div>
  </div>
</div>

<!-- Confirmation REJECTING TRANSFER REQUEST  -->
<div class="modal fade" id="reject_confirmation" tabindex="-1" role="dialog" aria-labelledby="add_confirmationcourier" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-min" role="document">
    <div class="modal-content">
        <div class="modal-body pb-3 text-center">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <img class="isometric confirmationisometric" width="230px" height="100px" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/modal/reject.png">
        <h1 class="text-red text-center">REJECTING TRANSFER REQUEST</h1>
            <p class="text-center my-2 text-secondary">Are you sure you want to reject Transfer Request?</p><br>
            <label class="text-warning text-sm">Note: Please input a Remarks upon rejecting the document.</label>
            <textarea type="text" name="" class="form-control" required></textarea>
            <div class="invalid-feedback" id="confirmation-add-invalid">
              <!-- <input type="text" name="" class="form-control" value="asdasds"> -->
            </div>
        </div>
        <div class="modal-footer">
          <div style="margin:auto;">
            <button type="button" data-dismiss="modal" class="btn btn-outline-primary shadow-none" id="add_confirmation_no">NO</button>
            <button type="button" class="btn btn-primary shadow-none" id="add_confirmation_yes">YES</button>
          </div>
        </div>
    </div>
  </div>
</div>

<!-- Confirmation APPROVE TRANSFER REQUEST  -->
<div class="modal fade" id="approve_confirmation" tabindex="-1" role="dialog" aria-labelledby="add_confirmationcourier" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-min" role="document">
    <div class="modal-content">
        <div class="modal-body pb-3 text-center">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <img class="isometric confirmationisometric" width="230px" height="100px" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/modal/check.png">
        <h1 class="text-red text-center">APPROVING TRANSFER REQUEST</h1>
            <p class="text-center my-2 text-secondary">Are you sure you want to Approve Transfer Request?</p>
            <div class="invalid-feedback" id="confirmation-add-invalid"></div>
        </div>
        <div class="modal-footer">
          <div style="margin:auto;">
            <button type="button" data-dismiss="modal" class="btn btn-outline-primary shadow-none" id="add_confirmation_no">NO</button>
            <button type="button" class="btn btn-primary shadow-none" id="add_confirmation_yes">YES</button>
          </div>
        </div>
    </div>
  </div>
</div>



<script>
  $(document).ready(function() {

     function updateTable(todo) {
      $("."+todo+"-tr-request").each(function(i) {

        // $("."+todo+"-tr-courier-package", this).attr("number", (i));
      //   $(".stock-out-table-itemname", this).attr("id", "stock-out-table-itemname"+(i));
      //   $(".stock-out-table-uom", this).attr("id", "stock-out-table-uom"+(i));
      //   $(".stock-out-table-quantity", this).attr("id", "stock-out-table-quantity"+(i));
      //   $(".stock-out-table-remaining", this).attr("id", "stock-out-table-remaining"+(i));

      //   // INPUT
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

    $(".main-page").show();
    $(".main-creating-form").hide();
    $(".main-for-approval").hide();
    $(".main-approve").hide();
    $(".main-rejected").hide();
    $(".btn-back").hide();
    $("#InventoryMovement").hide();

    $("#add_button").click(function(){
     
      $(".main-page").hide();
      $(".main-creating-form").show();
      $(".main-for-approval").hide();
      $(".btn-back").toggle();
      $("#InventoryMovement").show();
    });
    $("#view_btn-pending").click(function(){
      $(".main-page").hide();
      $(".main-creating-form").hide();
      $(".main-approve").hide();
      $(".main-rejected").hide();
      $(".main-for-approval").show();
      $(".btn-back").toggle();
      $("#InventoryMovement").show();
    });
    $("#view_btn-approve").click(function(){
      $(".main-page").hide();
      $(".main-creating-form").hide();
      $(".main-approve").show();
      $(".main-rejected").hide();
      $(".main-for-approval").hide();
      $(".btn-back").toggle();
      $("#InventoryMovement").show();
    });
    $("#view_btn-reject").click(function(){
      $(".main-page").hide();
      $(".main-creating-form").hide();
      $(".main-approve").hide();
      $(".main-rejected").show();
      $(".main-for-approval").hide();
      $(".btn-back").toggle();
      $("#InventoryMovement").show();
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

     $(".btn-reject").click(function(){
      $("#reject_confirmation").modal('show');
    });

    $(".btn-approve").click(function(){
      $("#approve_confirmation").modal('show');
    });


    // DATATABLES
    $("#tablecourier").dataTable();

    $(document).on("click", ".removetablerow", function(e) {
      e.preventDefault();
      const id = $(this).attr("id");
      const todo = $(this).data("todo");
      console.log(todo);
      const elementLength = $("."+todo+"-tr-request").length;
      if (elementLength > 1) {
        $("#"+todo+"-table-row-id"+id).remove();
      } 
      updateTable(todo);
    });



    $(document).on("keyup",".add_transfer_request", function(e){
      const rownumber = $(this).val();
      const todo      = $(this).data("todo");
      if (e.which===13) {
        const RequestElementLength  = $("."+todo+"-tr-request").length;
        const NewLength             = rownumber - RequestElementLength;
        let rows = "";
        for(var i=0; i<NewLength; i++){
          let html = "";
          html += '<tr class ="'+todo+'-tr-request">';
          html += '<td>0</td>'
          html += '<td class = "">';
          html += '<select class="form-control">';
          html += '<option selected disabled>Item code</option>';
          html += '<option selected disabled>IC-20-00001</option>';
          html += '<option selected disabled>IC-20-00002</option>';
          html += '<option selected disabled>IC-20-00003</option>';
          html += '</select></td>';

          html += '<td class="">';
          html += '<input type="text" readonly class="form-control">';
          html += '</td>';

          html += '<td class="" >';
          html += '<input type="number" class="form-control">';
          html += '</td>';

          html += '<td class="" >';
          html += '<input type="text" readonly class="form-control">';
          html += '</td>';

          html += '<td class="" >';
          html += '<input type="text" readonly class="form-control">';
          html += '</td>';

          html += '<td class="" >';
          html += '<input type="text" readonly class="form-control">';
          html += '</td>';

          html += '<td class="" >';
          html += '<input type="text" readonly class="form-control">';
          html += '</td>';

          html += '<td class="" >';
          html += '<button class="btn btn-outline-danger removetablerow" data-todo="add" style="min-width: 1rem; padding: .3rem;">&nbsp;<i class="fas fa-minus"></i></button>';
          html += '</td>';

          html += '</tr>';
          rows += html;
        }
        $("#"+todo+"-tbody-request").prepend(rows);
        updateTable(todo);
      }

    });
    updateTable("add");

  });
</script>