<style type="text/css">
/* width */
::-webkit-scrollbar {
  width: 5px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #ff0018; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}

.col-md-8 {
  padding-top: 5px;
   padding-right: 10px;
    padding-left: 20px;
}
.col-md-4 {
  padding-top: 5px;
   padding-right: 20px;
    padding-left: 10px;
}
.clear {
  clear: both;
}
.spacer {
  width: 100%;
  height: 42px;
}
ul li {
 margin: 1px;
 /*width: 100px;*/
}
table, th, td {
  border: none;
  border-collapse: collapse;
}
ul#header li {
  display:inline;
}

.modal-lg {
    max-width: 70%;

}
.nav-tabs li a {
background: #fff;
  }

.menu-select :hover{
  opacity: 0.7;
  cursor: pointer;
}

.list-group-item:hover{
  background-color: #ff0018;
  color: #fff;
}
.list-group-item.active {
    background-color: #ff0018;
}

  
</style> 

<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12">
          

          <section>
            <!--Grid row-->
            <div class="row">
              <!--Grid column-->
              <div class="col-lg-8">
                <!-- <ul class="nav nav-tabs d-flex nav-justified mb-8" id="sync-tabs" style=" height: 130px; width:100%;overflow:hidden; overflow-y:scroll;"> -->
                <div class="row " id="select-highlight-button" style="max-height: 10vh; overflow-y: scroll;">
                  <div class='col-2 p-0' style='word-break: break-word;text-align:center;font-weight:600;' >
                    <a href='#'id='' class='list-group-item  sync-tabs' role='tab' aria-controls='tab13' data-toggle='tab'>Pasta</a>
                  </div>
                  <div class='col-2 p-0' style='word-break: break-word;text-align:center;font-weight:600;' >
                    <a href='#'id='' class='list-group-item  sync-tabs' role='tab' aria-controls='tab14' data-toggle='tab'>Beverages</a>
                  </div>
                  <div class='col-2 p-0' style='word-break: break-word;text-align:center;font-weight:600;' >
                    <a href='#'id='' class='list-group-item  sync-tabs' role='tab' aria-controls='tab15' data-toggle='tab'>Beverages</a>
                  </div>
                  <div class='col-2 p-0' style='word-break: break-word;text-align:center;font-weight:600;' >
                    <a href='#'id='' class='list-group-item  sync-tabs' role='tab' aria-controls='tab16' data-toggle='tab'>Beverages</a>
                  </div>
                  <div class='col-2 p-0' style='word-break: break-word;text-align:center;font-weight:600;' >
                    <a href='#'id='' class='list-group-item  sync-tabs' role='tab' aria-controls='tab16' data-toggle='tab'>Beverages</a>
                  </div>
                  <div class='col-2 p-0' style='word-break: break-word;text-align:center;font-weight:600;' >
                    <a href='#'id='' class='list-group-item  sync-tabs' role='tab' aria-controls='tab16' data-toggle='tab'>Beverages</a>
                  </div>
                 
                 
                </div>

                <!-- </ul> -->
                <div class="mb-3">
                  <div class="pt-4 wish-list">
                      <div class="ms-panel ms-panel-fh">
                         <div class="tab-content" id="">
                         <div class="ms-panel-header">
                        <h6 style="text-align:center;font-weight:600;">Main Dish</h6>
                      </div>
                        <!-- <ul class="nav nav-tabs tabs-bordered d-flex nav-justified mb-8" role="tablist" id="listcategory">
                          <li role='presentation' style='font-weight:600;'><a href='#".$category->categoryID."' class='list-category-item' aria-controls='tab1' class='active show' role='tab' data-toggle='tab'></a> Pasta</li>
                          <li role='presentation' style='font-weight:600;'><a href='#".$category->categoryID."' class='list-category-item' aria-controls='tab1' class='active show' role='tab' data-toggle='tab'></a> Water</li>
                          <li role='presentation' style='font-weight:600;'><a href='#".$category->categoryID."' class='list-category-item' aria-controls='tab1' class='active show' role='tab' data-toggle='tab'></a> Wine</li> 
                      <?php 
                      // foreach ($data['datacategory'] as $category)  {
                      //    echo "<li role='presentation' style='font-weight:600;'><a href='#".$category->categoryID."' class='list-category-item' aria-controls='tab1' class='active show' role='tab' data-toggle='tab'>$category->categorydescription</a></li>";
                      // }
                      ?>
                      </ul> -->
                      <ul class="nav nav-tabs tabs-bordered d-flex nav-justified mt-3" role="tablist" id="listcategory">
                            <li role='presentation'><a style='font-weight:600;' href='#' class='list-category-item active show' aria-controls='tab1' role='tab' data-toggle='tab'>Carbonara</a></li>
                            <li role='presentation'><a style='font-weight:600;' href='#' class='list-category-item' aria-controls='tab1' role='tab' data-toggle='tab'>Salmon Fettucine</a></li>
                            <li role='presentation'><a style='font-weight:600;' href='#' class='list-category-item' aria-controls='tab1' role='tab' data-toggle='tab'>Pumpkin Pasta</a></li>
                         </ul>  
          <!--list of product  -->
                      <div class="row">
                        <div class="container">
                          <div class="row p-2" style="margin-top:15px;">
                                       <!-- START The Product Item -->
                           <!--  <div class="col-md-4 col-sm-4 grid-item">
                              <img src="http://www.jarrow.com/productImg2/KETO.jpg" alt="" />
                              <h1 class="product-title">7-Keto DHEA 100 mg</h1>
                              <h3 class="product-price">12.99</h3>
                              <div class="quantity-input">
                              
                                <input type="hidden" id="text_7_keto_dhea" value="1" class="input-text qty text" size="4"/>
                              
                              </div>
                              <button class="btn btn-success add-to-cart-button" rel="7_keto_dhea" product="7-Keto DHEA 100 mg" sel="12.99"><span class="glyphicon glyphicon-ok"></span> Add to Cart</button>
                            </div> -->

                           <!--  <div class="col-md-4 col-sm-4 grid-item">
                              <img src="http://www.jarrow.com/productImg2/KETO.jpg" alt="" />
                              <h1 class="product-title">Mr. Muscle</h1>
                              <h3 class="product-price">140.99</h3>
                              <div class="quantity-input">
                             
                                <input type="hidden" id="text_4_keto_dhea" value="1" class="input-text qty text" size="4"/>
                          
                              </div>
                              <button class="btn btn-success add-to-cart-button" rel="4_keto_dhea" product="4-Keto DHEA 100 mg" sel="140.99"><span class="glyphicon glyphicon-ok"></span> Add to Cart</button>
                            </div>
           -->


                            <div class="col-sm-3 grid-item menu-select">
                              <a><div class="ms-card">
                                <div class="ms-card-img">
                                  <img src="<?= base_url()?>pages\assets\img\costic\food-2.jpg" alt="card_img">
                                </div>
                                <div class="ms-card-body">
                                  <div class="row">

                                      <div class="col" style="float:left;font-weight:600;">
                                          <h6>Pork Adobo(Small)</h6>
                                      </div>

                                      <div class="col" style="float:right;margin-top:15px;font-weight:600;">
                                        <h6 class="text-success">140.00</h6>
                                      </div>

                                  </div>
                                  
                                </div>
                              </div></a>
                            </div>

                            <div class="col-sm-3 grid-item menu-select">
                              <a><div class="ms-card">
                                <div class="ms-card-img">
                                  <img src="<?= base_url()?>pages\assets\img\costic\food-2.jpg" alt="card_img">
                                </div>
                                <div class="ms-card-body">
                                  <div class="row">

                                      <div class="col" style="float:left;font-weight:600;">
                                          <h6>Pork Adobo(Small)</h6>
                                      </div>

                                      <div class="col" style="float:right;margin-top:15px;font-weight:600;">
                                        <h6 class="text-success">140.00</h6>
                                      </div>

                                  </div>
                                  
                                </div>
                              </div></a>
                            </div>

                            <div class="col-sm-3 grid-item menu-select">
                              <a><div class="ms-card">
                                <div class="ms-card-img">
                                  <img src="<?= base_url()?>pages\assets\img\costic\food-2.jpg" alt="card_img">
                                </div>
                                <div class="ms-card-body">
                                  <div class="row">

                                      <div class="col" style="float:left;font-weight:600;">
                                          <h6>Pork Adobo(Small)</h6>
                                      </div>

                                      <div class="col" style="float:right;margin-top:15px;font-weight:600;">
                                        <h6 class="text-success">140.00</h6>
                                      </div>

                                  </div>
                                  
                                </div>
                              </div></a>
                            </div>

                            
                            <!-- END!! The Product Item -->
                          </div>
                        </div>
                      </div>
          <!-- end list of product  -->
                    </div>
                   </div>
                  </div>
                </div>
              </div>
              <!--Grid column-->
              <!--Grid column-->
              <div class="col-lg-4">
                <div class="input-group">
                  <input class="form-control my-0 py-1" type="text" placeholder="Search" aria-label="Search" style="font-weight:600;">
                  <div class="input-group-prepend">
                    <span class="input-group-text purple lighten-3" id="basic-text1"><i class="fa fa-barcode"
                        aria-hidden="true"></i></span>
                  </div>
                    <a  href="<?=base_url()?>Recall"><button type="button" class="btn btn-primary has-icon btn-sm" style="margin-top:0; margin-left:5px;font-weight:600;"><i class="fa fa-eye"></i> Recall</button></a>
                </div>
                <!-- Card -->
                <div class="ms-panel">
                  <div class="ms-panel-header border-bottom pt-4 pb-3">
                    <h4 class="font-weight-bold">CART</h4>
                  </div>
                  <div class="ms-panel-body">
                    <div class="table-responsive">
                      <table class="table border-0">
                        <thead>
                          <tr class="text-center">
                            <th>REMOVE</th>
                            <th>ID</th>
                            <th>FOOD ITEM</th>
                            <th>QUANTITY</th>
                            <th>PRICE</th>
                          </tr>
                        </thead>
                        <tbody class="border-bottom">
                          <tr>
                            <td class="text-center">
                              <button class="text-danger" style="border: none; background: transparent; outline: none; cursor: pointer;"><i class="fas fa-trash-alt"></i></button>
                            </td>
                            <td>1</td>
                            <td>Pork Adobo (Small)</td>
                            <td>
                              <input type="number" min="0" class="form-control">
                            </td>
                            <td class="text-right">
                              ₱ 300.00
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="row">
                      <div class="col-6">Sub Total </div>
                      <div class="col-6 text-right">₱ 100.00</div>
                    </div>
                    <div class="row">
                      <div class="col-6">VAT (12%) </div>
                      <div class="col-6 text-right">₱ 10.00</div>
                    </div>
                    <div class="row">
                      <div class="col-6">Discount </div>
                      <div class="col-6 text-right">
                        <input type="text" class="form-control w-50 float-right" disabled>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="form-group">
                          <label for="">Total Cost</label>
                          <input type="text" class="form-control" disabled>
                        </div>
                      </div>
                      <div class="col-12">
                        <button class="btn btn-block btn-success" data-target="#add_customer" data-toggle="modal" data-backdrop="static" data-keyboard="false"><i class="fa fa-money-bill float-left pt-1"></i>CHECKOUT</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Card -->
              </div>
              <!--Grid column-->
            </div>
            <div class="row" style="margin-top: -2vh">
              <div class="offset-8 col-lg-4 col-md-4 col-sm-12 text-center">
                <button type="button" class="btn btn-warning has-icon" style="width:45%;" data-toggle="modal" data-target="#add_void"><i class="fa fa-stop"></i> Void</button>
                <button type="button" class="btn btn-info has-icon" style="width:45%;" data-toggle="modal" data-target="#hold_customer"><i class="fa fa-pause"></i> Hold</button>
              </div>
            </div>
            <!-- Grid row -->
          </section>
          <!--Section: Block Content-->

          <div class="modal fade" id="add_void" tabindex="-1" role="dialog" aria-labelledby="add_void" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog modal-dialog-centered modal-min" role="document">
              <div class="modal-content">
                  <div class="modal-body pb-3 text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <img class="isometric confirmationisometric" width="230px" height="100px" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/modal/confirmation.png">
                    <h1 class="text-red text-center">VOIDING ORDER</h1>
                    <h6 class="text-center my-2">Please call your manager for password confirmation</h6>
                    <div class="invalid-feedback" id="confirmation-add-invalid"></div>
                    <small class="text-warning float-left">Note: Please enter password</small>
                    <textarea class="form-control" style="resize: none" rows="3"></textarea>
                  </div>
                  <div class="modal-footer">
                    <div class="float-right">
                    <button type="button" data-dismiss="modal" class="btn btn-outline-primary shadow-none" id="void_no">CANCEL</button>
                      <button type="button" class="btn btn-primary shadow-none" id="void_yes">VOID</button>
                  </div>
                  </div>
              </div>
            </div>
          </div>

          <div class="modal fade" id="add_discount" tabindex="-1" role="dialog" aria-labelledby="add_discount" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog modal-dialog-centered modal-min" role="document">
              <div class="modal-content">
                  <div class="modal-body pb-3 text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="close_add_discount"><span aria-hidden="true">&times;</span></button>
                    <img class="isometric confirmationisometric" width="230px" height="100px" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/modal/confirmation.png">
                    <h1 class="text-red text-center">DISCOUNT CONFIRMATION</h1>
                    <h6 class="text-center my-2">Please call your manager for password confirmation</h6>
                    <div class="invalid-feedback" id="confirmation-add-invalid"></div>
                    <small class="text-warning float-left">Note: Please enter password</small>
                    <textarea class="form-control" style="resize: none" rows="3"></textarea>
                  </div>
                  <div class="modal-footer">
                    <div class="float-right">
                    <button type="button" data-dismiss="modal" class="btn btn-outline-primary shadow-none" id="close_add_discount">CANCEL</button>
                      <button type="button" class="btn btn-primary shadow-none" id="discount_yes">SUBMIT</button>
                  </div>
                  </div>
              </div>
            </div>
          </div>

          <!-- Hold Customer  --> 
          <div id="hold_customer" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header bg-primary">
                 <h5 class="modal-title has-icon ms-icon-round text-light text-center w-100"> ADD CUSTOMER</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                 
                  <form method="post">
                   
                    <div class="form-group">
                      <label>Customer Name <span class="text-danger">*</span></label>
                      <input type="text" class="form-control "id="addcustomername" name="addcustomername"required="" value="Amy Han">
                      <div class="invalid-feedback" id="add-invalid-addcustomername"></div>
                    </div>

                    <div class="row">
                      <div class="col-md-6 mb-3">   
                        <div class="form-group">
                          <label>Type of Order <span class="text-danger">*</span></label>
                          <select class="form-control " id="addtypeorder" name="addtypeorder" style="width: 100%;" required tabindex="14" disabled>
                              <option value="1" selected>Dine-in</option>
                              <option value="2">Take-out</option>
                            </select>
                          <div class="invalid-feedback" id="add-invalid-addtypeorder"></div>
                        </div> 
                      </div> 

                      <div class="col-md-6 mb-3"> 
                        <div class="form-group">
                         <label>Table Number <span class="text-danger">*</span></label>
                          <input type="text"  class="form-control "id="addtablename" name="addtablename"required="" value="12">
                          <div class="invalid-feedback" id="add-invalid-addtablename"></div>
                        </div>
                      </div>     
                    </div> 


                  
                </div>
                  <div class="modal-footer">
                    <button class="btn btn-outline-primary" data-dismiss="modal" aria-label="Close">CANCEL</button>
                    <button type="button" class="btn btn-primary"id="hold"name="hold" data-toggle="modal" data-backdrop="static" data-keyboard="false">HOLD</button>
                  </div>
                </form>
              </div>    
            </div>
          </div>

          <!-- Add Customer  --> 
          <div id="add_customer" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header bg-primary">
                 <h5 class="modal-title has-icon ms-icon-round text-light text-center w-100"> ADD CUSTOMER</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                 
                  <form method="post">
                   
                    <div class="form-group">
                      <label>Customer Name <span class="text-danger">*</span></label>
                      <input type="text" class="form-control "id="addcustomername" name="addcustomername"required="">
                      <div class="invalid-feedback" id="add-invalid-addcustomername"></div>
                    </div>

                    <div class="row">
                      <div class="col-md-6 mb-3">   
                        <div class="form-group">
                          <label>Type of Order <span class="text-danger">*</span></label>
                          <select class="form-control " id="addtypeorder" name="addtypeorder" style="width: 100%;" required tabindex="14">
                              <option selected disabled>No Selected</option>
                              <option value="1">Dine-in</option>
                              <option value="2">Take-out</option>
                            </select>
                          <div class="invalid-feedback" id="add-invalid-addtypeorder"></div>
                        </div> 
                      </div> 

                      <div class="col-md-6 mb-3"> 
                        <div class="form-group">
                         <label>Table Number <span class="text-danger">*</span></label>
                          <input type="text"  class="form-control "id="addtablename" name="addtablename"required="">
                          <div class="invalid-feedback" id="add-invalid-addtablename"></div>
                        </div>
                      </div>     
                    </div> 


                  
                </div>
                  <div class="modal-footer">
                    <button class="btn btn-outline-primary" data-dismiss="modal" aria-label="Close">CANCEL</button>
                    <button type="button" class="btn btn-primary"id="save"name="save" 
                    data-backdrop="static" 
                    data-keyboard="false">CHECK OUT</button>
                  </div>
                </form>
              </div>    
            </div>
          </div>

          <!-- Add Checkout  --> 
          <div id="checkout" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                 <!--  <h3 class="modal-title has-icon ms-icon-round "><i class="flaticon-share bg-primary text-white"></i> Add Employee</h3> -->
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="close_add_customer"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-8 col-sm-12">
                      <div class="ms-panel">
                        <div class="ms-panel-header">
                          <h5 class="text-center w-100 text-red font-weight-bold">CHECK OUT DETAILS</h5>
                        </div>
                        <div class="ms-panel-body">
                          <div class="row">
                              <div class="offset-8 col-4 d-flex justify-content-center align-items-center">
                                <label style="font-weight:600;"> CASH &nbsp;</label>
                                <label class="ms-switch" id="show_resultdata">
                                  <input type="checkbox" class="check-toggle" >
                                  <span class="ms-switch-slider ms-switch-secondary round " for=""></span> 
                                </label>
                                <label style="font-weight:600;"> CARD </label>
                              </div>
                          </div>
                          <div class="row">
                            <div class="col-6">
                              <div class="form-group">                            
                                <label style="font-weight:600;"> Balance Due <span class="text-danger">*</span></label>
                                <input type="text" class="form-control "id="addcustomername" name="addcustomername">
                                <div class="invalid-feedback" id="add-invalid-addcustomername"></div>
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="form-group">
                                <label style="font-weight:600;"> Amount Tendered  <span class="text-danger">*</span></label>
                                <input type="text" class="form-control "id="addcustomername" name="addcustomername"required="">
                                <div class="invalid-feedback" id="add-invalid-addcustomername"></div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-4">
                              <div class="form-group">
                                <label for="">Courier Code</label>
                                <select name="" id="" class="form-control">
                                  <option value="" selected>Select Courier Code</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-4">
                              <div class="form-group">
                                <label for="">Courier Name</label>
                                <input type="text" class="form-control" disabled>
                              </div>
                            </div>
                            <div class="col-4">
                              <div class="form-group">
                                <label for="">Courier Package</label>
                                <select name="" id="" class="form-control">
                                  <option value="" selected>Select Courier Package</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <hr class="mt-2 mb-3 border">
                          <div class="row">
                            <div class="col-4">
                              <ul class="ms-payment-container">
                                <li>
                                  <div class="ms-radio-img">
                                    <input type="radio" name="payment-method" value="" disabled>
                                    <div class="ms-payment-img">
                                      <img src="<?=base_url()?>\pages\assets\img\payment\payment-visa.png" alt="payment">
                                    </div>
                                  </div>
                                </li>
                                <li>
                                  <div class="ms-radio-img">
                                    <input type="radio" name="payment-method" value="" disabled>
                                    <div class="ms-payment-img">
                                      <img src="<?=base_url()?>\pages\assets\img\payment\payment-paypal.png" alt="payment">
                                    </div>
                                  </div>
                                </li>
                                <li>
                                  <div class="ms-radio-img">
                                    <input type="radio" name="payment-method" value="" disabled>
                                    <div class="ms-payment-img">
                                      <img src="<?=base_url()?>\pages\assets\img\payment\payment-master.png" alt="payment">
                                    </div>
                                  </div>
                                </li>
                              </ul>
                            </div>
                            <div class="col-4">
                              <div class="form-group">
                                <label> Card Holder Name</label>
                                <input type="text" class="form-control "id="cardholdername" name="cardholdername" disabled>
                              </div>
                              <div class="invalid-feedback" id="add-invalid-cardholdername"></div>
                            </div>
                            <div class="col-4">
                              <div class="form-group">
                                <label> Card Number</label>
                                <input type="text" class="form-control "id="cardnumber" name="cardnumber" disabled>
                              </div>
                              <div class="invalid-feedback" id="add-invalid-cardnumber"></div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-4">
                              <div class="form-group">
                                <label for="">Type of Discount</label>
                                <select name="" id="discount_type" class="form-control">
                                  <option value="" selected>Sample Discount</option>
                                  <option value="">Another Discount</option>
                                  <option value="">Another Two Discount</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-4">
                              <div class="form-group">
                                <label for="">Discount Percentage</label>
                                <input type="text" class="form-control text-right" disabled>
                              </div>
                            </div>
                            <div class="col-4">
                              <div class="form-group">
                                <label for="">Change</label>
                                <input type="text" class="form-control text-right" disabled>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                      <div class="ms-panel">
                        <div class="ms-panel-header">
                          <div class="row">
                            <div class="col-6"><span class="font-weight-bold">Order Number:</span> ON-20-00001</div>
                            <div class="col-6"><span class="font-weight-bold">Table Number:</span> 3</div>
                          </div>
                          <div class="row">
                            <div class="col-6"><span class="font-weight-bold">Customer Name:</span> Amy Han</div>
                            <div class="col-6"><span class="font-weight-bold">Type of Order:</span> Dine In</div>
                          </div>
                        </div>
                        <div class="ms-panel-body">
                          <div class="">
                            <h5 class="font-weight-bold">CART</h5>
                          </div>
                          <div class="table-responsive">
                            <table class="table border-0">
                              <thead>
                                <tr class="text-center">
                                  <th>ID</th>
                                  <th>FOOD ITEM</th>
                                  <th>QUANTITY</th>
                                  <th>PRICE</th>
                                </tr>
                              </thead>
                              <tbody class="border-bottom" style="font-size: .7rem">
                                <tr>
                                  <td>1</td>
                                  <td>Pork Adobo (Small)</td>
                                  <td class="text-center">3</td>
                                  <td class="text-right">
                                    ₱ 300.00
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="row">
                            <div class="col-6">Sub Total </div>
                            <div class="col-6 text-right">₱ 100.00</div>
                          </div>
                          <div class="row">
                            <div class="col-6">VAT (12%) </div>
                            <div class="col-6 text-right">₱ 10.00</div>
                          </div>
                          <div class="row">
                            <div class="col-6">Discount </div>
                            <div class="col-6 text-right">
                              <input type="text" class="form-control w-50 float-right" disabled>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-12">
                              <div class="form-group">
                                <label for="">Total Cost</label>
                                <input type="text" class="form-control" disabled>
                              </div>
                            </div>
                            <div class="col-12">
                              <button class="btn btn-block btn-success" ><i class="fa fa-money-bill float-left pt-1"></i>CHECKOUT</button>
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
    </div>
</div>

<script type="text/javascript">

 function commaSeparateNumber(val){
  while (/(\d+)(\d{3})/.test(val.toString())){
    val = val.toString().replace(/(\d+)(\d{3})/, '$1'+','+'$2');
  }
  return val;
  }

  $('document').ready(function(){ //start of document.ready 

    $(document).on("click", "#close_add_discount", function() {
      $("#add_discount").modal("hide");
      $("#checkout").modal("show");
    })

    $(document).on("click", "#close_add_customer", function() {
      $("#add_customer").modal("show");
      $("#checkout").modal("hide");
    })

    $(document).on("change", "#discount_type", function() {
      $("#checkout").modal("hide");
      $("#add_discount").modal("show");
    })

    $(document).on("click", "#save", function() {
      $("#add_customer").modal("hide");
      $("#checkout").modal("show");
    })

  var lineNo =1;
  $(document).on("click", '.add-to-cart-button', function () {
    var vat_percentage = 0.12;
    var val = $(this).attr("rel");
    var price = $(this).attr('sel');
    var qty = $("input#text_"+val).val();
    var subtotal = 0.0;
    var productName =$(this).attr('product');
    alert(qty);
    if($(".mini-cart-items ul li#"+val).length)
    {
      var new_val=parseFloat($("span#price_"+val).text())+(parseFloat(qty)*parseFloat(price));
      // alert(new_val);
      $("span#price_"+val).text(new_val.toFixed(2));
      
      var new_qty_val=parseInt($("input#qty_"+val).val())+parseInt(qty);
      $("input#qty_"+val).val(new_qty_val);
    }else{ 
        $('.mini-cart-items ul').append('<li id="'+val+'">'+'<h6><div class="product-removal"><span class="fa fa-trash float-left mt-1 remove-product" style="color:#ff0018;"></span></div><span style="margin-left:10px;">'+lineNo+'</span><span style="margin-left:20px;">'+productName+'<span>'+'<span class="item-prices" style="float:right;" id="price_'+val+'">'+price+'</span><input type="number" style="margin-left:135px;width:60px;" value="'+qty+'" min="1" class="item-quantities product-quantity " id="qty_'+val+'" rel="'+val+'" sel="'+price+'"/></h6>'+'</li>');
        lineNo++;
    }

    
    $(".item-prices").each(function()
    {
        subtotal += parseFloat($(this).text());
    });

    $('div#subtotal-price > span').text(commaSeparateNumber(subtotal.toFixed(2)));
    $("div#total-vat > span").text((subtotal* vat_percentage).toFixed(2));
    $("div#total-price > span").text((subtotal+(subtotal* vat_percentage)).toFixed(2));
    
    var totalQty = 0;
    $(".item-quantities").each(function(){
      totalQty += parseFloat($(this).text());
    });

    $('div#total-items > span').text(totalQty.toFixed(0));
    
   

   }); //end of click add to cart

  $(document).on("change", '.product-quantity', function () {
      var vat_percentage = 0.12;
      var val = $(this).attr("rel");
      var price = $(this).attr('sel');
      var qty = $(this).val();
      var new_val=parseFloat(parseFloat(qty)*parseFloat(price));
      var subtotal = 0.00;

    $("span#price_"+val).text(new_val.toFixed(2));
    
    $(".item-prices").each(function(){
        subtotal += parseFloat($(this).text());
       
    });

    $('div#subtotal-price > span').text(commaSeparateNumber(subtotal.toFixed(2)));
    $("div#total-vat > span").text((subtotal* vat_percentage).toFixed(2));
    $("div#total-price > span").text((subtotal+(subtotal* vat_percentage)).toFixed(2));
   
    }); // end of product-quantity 
    $(document).on("click", '.product-removal', function () {
      var subtotal =0.00;
      var vat_percentage = 0.12;
       $(".product").each(function(){
    
        var productRow = $('.remove-product').parent().parent();
        productRow.remove();
      });  
     $(".item-prices").each(function(){
        subtotal += parseFloat($(this).text());
         alert( $(this).text());

      });
    $('div#subtotal-price > span').text(commaSeparateNumber(subtotal.toFixed(2)));
    $("div#total-vat > span").text((subtotal* vat_percentage).toFixed(2));
    $("div#total-price > span").text((subtotal+(subtotal* vat_percentage)).toFixed(2));
    }); // end of product-removal

}); // end of document.ready



</script>


<script type="text/javascript">
  var header = document.getElementById("select-highlight-button");
  var btns = header.getElementsByClassName("sync-tabs");
  for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
    });
  }
</script>


<script type="text/javascript">
  $(document).ready(function() {
  $('#1').addClass('active');

 $(document).on("click", ".list-group-item", function(){
  var id = $(this).attr('id');
  $.ajax({
      url : "<?php echo site_url('pointofsale/groupdata');?>",
      method : "POST",
      data : {id:id},
      async : true,
      dataType : 'json',
      success: function(data){
    var html ="";
    for ( var i=0; i<data.length; i++ ) {
     html +=' <li role="presentation"><a href="#""' + data[i].categoryID + '""" class="list-category-item" aria-controls="tab1" class="active show" role="tab" data-toggle="tab" style="font-weight:600;">'+ data[i].categorydescription + '</a></li>';
    }
    $("#listcategory").html(html);
     },
      error: function(request, textStatus, error) {
    }

  }); 

  }); 

  $(document).on("click", ".check-toggle", function(){
    var output       =   $(".check-toggle").prop('checked')==true ? "1" : "0";

    if(output == 1){
      document.getElementById("cardholdername").disabled = false;
      document.getElementById("cardnumber").disabled = false;
      document.getElementById("creditmonth").disabled = false;
      document.getElementById("credityear").disabled = false;
      document.getElementById("creditcvv").disabled = false;
    }
    else{
      document.getElementById("cardholdername").disabled = true;
      document.getElementById("cardnumber").disabled = true;
      document.getElementById("creditmonth").disabled = true;
      document.getElementById("credityear").disabled = true;
      document.getElementById("creditcvv").disabled = true;

      document.getElementById("cardholdername").value = "";
      document.getElementById("cardnumber").value = "";
      document.getElementById("creditmonth").value = "";
      document.getElementById("credityear").value = "";
      document.getElementById("creditcvv").value = "";

      
    }
  });


   });  

</script>      