<style>
.ms-panel-header1 {
position: relative;
    padding: 0.2rem;
    border-bottom: 0px solid rgba(0,0,0,0.1);
}
.ms.panel-body1{
position: relative;
    padding: 0.2rem;
} 
.ms-panel-body1{
  position: relative;
    padding: 0.5rem;
}     
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

#background{
position:center;
z-index:0;
background:white;
display:block;
min-height:50%; 
min-width:50%;
color:yellow;
}

#content{
    position:absolute;
    z-index:1;
}

#bg-text
{
    color:lightgrey;
    font-size:70px;
    transform:rotate(0deg);
    -webkit-transform:rotate(0deg);
}
ul#header li {
  display:inline;
}
div.mini-cart-container{
   overflow: auto;
   height: 16em;
}
.modal-lg {
    max-width: 70%;

}

.modal-additional-order{
  max-width: 90%;
}

.nav-tabs li a {
background: #fff;
  }

.product-select :hover{
  opacity: 0.7;
  cursor: pointer;
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

.circle-icon {
    background: #FFFFFF;
    padding:5px;
    border-radius: 50%;
    vertical-align: middle;
} 
.removespace{
  padding: 0;
  list-style: none;
  font-size: 0;
}
  
</style>  
<div class="row">
    <!--Grid column-->
    <div class="col-lg-8" >
     
      <div class="mb-3">
        <div class="pt-4 wish-list" style="height:60em;">
            <div class="ms-panel ms-panel-fh" style="margin-left:1 0px; border-radius:5px; ">
               <div class="ms-panel-header" style="background-color:#ff0018;  border-radius:5px; ">
                <div class="col">
                  <a href="<?= base_url()?>pointofsale"><i class="fas fa-2x fa-chevron-circle-left text-white "></i><b class="text-white" style="margin-left:5px; position:absolute;margin-top:3px;">Exit Recall</b></a>
                  <h6 style="text-align:center;margin-top: -25px; " class="text-white"><b>Previous Orders</b></h6>
                </div>
            </div>
   
            <div class="row" style="float:left; margin-left: 50px;margin-right: 50px;" >
              <div class="container" style="margin-top:15px;">
                <div class="row" style="position:absolute;" >

          <a class="product-select"><div class="col-sm-auto">
            <div class="card border-danger mb-3" style="width: 16rem;">
              <div class="card-header text-white " style="background-color:#ff0018;">
                <div class="row" style="font-weight:600;">
                Order#: 001
              </div>
              <div class="row" style="font-weight:600;">
                Date: August 24, 2020
              </div>
              </div>
              <div class="card-body text-black">
                <h5 class="card-title" style="text-align:center;font-weight:600;">Amy Han</h5>
                <hr class="mb-4">
                <div class="row">
                  <div class="col" style="font-weight:600;">
                    Status
                  </div>
                  <div class="col" style="font-weight:600;">
                    Unpaid
                  </div>      
                </div>

                <div class="row" style="font-weight:600;">
                  <div class="col">
                    Total
                  </div>
                  <div class="col" style="font-weight:600;">
                    150.00
                  </div>  
                </div>
              </div>
            </div>
          </div></a>

          <a class="product-select"><div class="col-sm-auto">
            <div class="card border-danger mb-3" style="width: 16rem;">
              <div class="card-header text-white " style="background-color:#ff0018;">
                <div class="row" style="font-weight:600;">
                Order#: 002
              </div>
              <div class="row" style="font-weight:600;">
                Date: August 24, 2020
              </div>
              </div>
              <div class="card-body text-black">
                <h5 class="card-title" style="text-align:center;font-weight:600;">Amy Han</h5>
                <hr class="mb-4">
                <div class="row">
                  <div class="col" style="font-weight:600;">
                    Status
                  </div>
                  <div class="col" style="font-weight:600;">
                    Unpaid
                  </div>      
                </div>

                <div class="row">
                  <div class="col" style="font-weight:600;">
                    Total
                  </div>
                  <div class="col" style="font-weight:600;">
                    150.00
                  </div>  
                </div>
              </div>
            </div>
          </div></a>

          <a class="product-select"><div class="col-sm-auto">
            <div class="card border-danger mb-3" style="width: 16rem;">
              <div class="card-header text-white " style="background-color:#ff0018;font-weight:600;">
                <div class="row" style="font-weight:600;">
                Order#: 003
              </div>
              <div class="row" style="font-weight:600;">
                Date: August 24, 2020
              </div>
              </div>
              <div class="card-body text-black">
                <h5 class="card-title" style="text-align:center; font-weight:600;">Amy Han</h5>
                <hr class="mb-4">
                <div class="row">
                  <div class="col" style="font-weight:600;">
                    Status
                  </div>
                  <div class="col" style="font-weight:600;">
                    Unpaid
                  </div>      
                </div>

                <div class="row">
                  <div class="col" style="font-weight:600;">
                    Total
                  </div>
                  <div class="col" style="font-weight:600;">
                    150.00
                  </div>  
                </div>
              </div>
            </div>
          </div></a>



          
          
                </div>
              </div>
            </div>
         </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="mb-3">
        <div class="col-md-12" >
          <div class="input-group md-form form-sm form-1 pl-0">
          </div>
        </div>   
        
        <div class="pt-4" style="margin-right:15px;height:60em;"> 
          <div class="ms-panel ms-panel-fh" style=" border-radius:5px;">
          
             <div class="ms-panel-header ms-widget ms-panel-hoverable has-border ms-has-new-msg ms-notification-widget ms-panel-header1" style="background-color:#ff0018; border-radius:5px;">
              <div class="ms-panel-body1 media">
               
                <div class="media-body">
                  <h6 style="color: #FFFFFF;text-align: center;">ORDER DETAILS</h6>
                  <p style="color: #FFFFFF;text-align: center;">Order Number: </p>
                </div>
                 <i class="large fa fa-print printrecall" data-toggle="modal" data-target="#billingreport" data-backdrop="static" data-keyboard="false"></i></BUTTON>
        
            </div>
           </div> 
          <!--   <div class="ms-panel-header1" style="background-color:#ff0018;  border-radius:5px;">
              <div class="input-icons">
              <h6 style="text-align:center;" class="text-white">ORDER DETAILS </h6><i class="large material-icons dp48 circle-icon" style="float:right; color: red;">local_printshop</i>
               <h6 style="text-align:center;" class="text-white">ORDER No.:</h6>
              </div>
           </div>  -->
            <div class="ms-panel-body clearfix" >
              <div class="container" >
                <div id="background">
              <p id="bg-text" style="text-align:center; margin-top:45%;font-weight:600;">Select Order</p>
               </div>
                <div class="section">

                    <div class="row">
                      <div class="col">
                          <h6 style="font-weight:600;">Customer Name: Amy Han</h6>
                      </div>
                      <div class="col">
                        <h6 style="float:right; text-align: right;font-weight:600;"> Date: August 24 2020</h6>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col">
                        <h6 style="font-weight:600;">Table No.: 1</h6>
                      </div>
                      <div class="col">
                         <h6 style="float:right; text-align: right;font-weight:600;">Take-out</h6>
                      </div>
                    </div>
                     <hr class="mb-4">
                     <h6><b>Previous Order</b></h6>
                     <!-- Mini Cart Starts Here -->
                      <div class="mini-cart-container">
                        <div class="mini-cart-items">
                          <ul id="header">
                            <div class="product">
                              <!-- <div class="row">
                                <div col-12>
                                  Previous Order
                                </div>
                                <div class="col-4">
                                  <select id="sel1" style="font-weight:600;">
                                      <option value="1"> Prepairing</option>
                                      <option value="2">Served</option>
                                      <option value="3">Cancelled</option>
                                  </select>
                                </div>
                              </div> -->
                               <li>

                              <h6>
                                <select id="sel1" style="font-weight:600;">
                                  <option value="1"> Prepairing</option>
                                  <option value="2">Served</option>
                                  <option value="3">Cancelled</option>
                              </select>
                        
                                <span style="margin-left:20px;font-weight:600;">Mr.Muscle1<span>
                                <span class="item-prices" style="float:right;font-weight:600;" id="price_'+val+'">190.00</span>
                                <input type="number" style="margin-left:135px;width:60px;font-weight:600;" value="'+qty+'" min="1" class="item-quantities product-quantity " id="qty_'+val+'" rel="'+val+'" sel="'+price+'"/></h6> 
                              </li>
                            </div>
                          </ul>
                            <div id="total-items">
                          </div>
                        </div>
                      </div>
                    <!-- Mini Cart Ends Here -->  
                    <hr class="mb-4">  
                    <h6 class="mb-0" style="font-weight:600;">Based Total</h6> 
                    <h6><div id="subtotal-price"> <span style="width:70px;text-align: right; margin-top: -15px; float:right;font-weight:600;"> 00.0 </span></div></h6>
                    <h6 class="mb-0" style="font-weight:600;">VAT (12%)</h6>
                    <h6><div id="total-vat"> <span style="width:70px;text-align: right; margin-top: -15px; float:right;font-weight:600;"> 00.0 </span></div></h6>
                    <h6 class="mb-0" style="font-weight:600;">Discount</h6>
                    <h6><input class="float-right" type="number" style="width:70px; margin-top:-15px; margin-bottom:20px;font-weight:600;" disabled/></h6>
                    <hr class="mb-4">  
                    <h6 class="mb-0 new2" style="font-weight:600;">Subtotal</h6>
                    <h6><div id="total-price"> <span style="width:70px;text-align: right; margin-top: -15px; float:right;font-weight:600;"> 00.0 </span></div></h6>

                    <div class="row">
                      <div class="col">
                        <button type="button" class="btn btn-info" data-target="#additional-order" data-toggle="modal" data-target="#modal-3" data-backdrop="static" data-keyboard="false" style="font-weight:600;"><i class="fa fa-plus"></i> Add Order</button>
                      </div>
                      <div class="col"></div>
                      <div class="col"></div>

                      <div class="col" >
                        <button type="button" class="btn btn-success"  data-target="#checkout" data-toggle="modal" data-target="#modal-3" data-backdrop="static" data-keyboard="false" style="font-weight:600;" ><i class=" far fa-handshake"></i> Checkout</button>
                      </div>
                    </div>
          
              </div>
            </div>
          </div>
      
        </div>
      </div>
      <!-- Card -->
    </div>
    <!--Grid column-->
  </div>
</div>

<!-- Add Checkout  --> 
<div id="checkout" class="modal custom-modal fade" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
       <!--  <h3 class="modal-title has-icon ms-icon-round "><i class="flaticon-share bg-primary text-white"></i> Add Employee</h3> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6">
             <div class="modal-header" style=" display: flex; justify-content: center;">
              <div class="font-weight-bold" style="text-align: center;">
              <h5 style="color:#ff0018;font-weight:600;"><b>CHECKOUT</b></h5>
              </div>
            </div>
            <div class="modal-body" >

              <div class="row" style="float:right;" >
                            <label style="font-weight:600;"> CASH </label>
                            <label class="ms-switch" id="show_resultdata" style="margin-top:-5px;float:right;margin-left:5px;margin-right:5px;" >
                            <input type="checkbox" class="check-toggle" >
                            <span class="ms-switch-slider ms-switch-secondary round " for=""></span> </label>
                            <label style="font-weight:600;"> CARD </label>
                        </div>
                      <form method="post">
                        <br><br>
                        <div class="row">
                          
                          <div class="col">
                            <div class="form-group">                            
                              <label style="font-weight:600;"> Balance Due <span class="text-danger">*</span></label>
                              <input type="text" class="form-control "id="addcustomername" name="addcustomername"required="">
                              <div class="invalid-feedback" id="add-invalid-addcustomername"></div>
                            </div>
                          </div>
                          
                          <div class="col">
                            <div class="form-group">
                              <label style="font-weight:600;"> Amount Tendered  <span class="text-danger">*</span></label>
                              <input type="text" class="form-control "id="addcustomername" name="addcustomername"required="">
                              <div class="invalid-feedback" id="add-invalid-addcustomername"></div>
                            </div>
                          </div>

                        </div>

                        <!-- debit/credit card -->
                        <hr class="mb-4">
                        <div class="col-md-12">
                          <br>
                          <ul class="ms-payment-container">
                            <li>
                              <div class="ms-radio-img">
                                <input type="radio" name="payment-method" value="">
                                <div class="ms-payment-img">
                                  <img src="<?=base_url()?>\pages\assets\img\payment\payment-visa.png" alt="payment">
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="ms-radio-img">
                                <input type="radio" name="payment-method" value="">
                                <div class="ms-payment-img">
                                  <img src="<?=base_url()?>\pages\assets\img\payment\payment-paypal.png" alt="payment">
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="ms-radio-img">
                                <input type="radio" name="payment-method" value="">
                                <div class="ms-payment-img">
                                  <img src="<?=base_url()?>\pages\assets\img\payment\payment-master.png" alt="payment">
                                </div>
                              </div>
                            </li>
                          </ul>
                        </div>

                        <div class="row">
                          
                          <div class="col">
                            <div class="form-group">
                              <label style="font-weight:600;"> Card Holder Name</label>
                              <input type="text" class="form-control "id="cardholdername" name="cardholdername" disabled>
                            </div>
                            <div class="invalid-feedback" id="add-invalid-cardholdername"></div>
                          </div>
                          
                          <div class="col">
                            <div class="form-group">
                              <label style="font-weight:600;"> Card Number</label>
                              <input type="text" class="form-control "id="cardnumber" name="cardnumber" disabled>
                            </div>
                            <div class="invalid-feedback" id="add-invalid-cardnumber"></div>
                          </div>

                        </div>

                        <div class="row">
                          <div class="col">
                              <div class="form-group">
                              <label style="font-weight:600;"> Month <span class="text-danger">*</span></label>
                              <input type="text" class="form-control "id="creditmonth" name="creditmonth" disabled>
                              <div class="invalid-feedback" id="add-invalid-creditmonth"></div>
                            </div>
                          </div>

                          <div class="col">
                              <div class="form-group">
                              <label style="font-weight:600;"> Year <span class="text-danger">*</span></label>
                              <input type="text" class="form-control "id="credityear" name="credityear" disabled>
                              <div class="invalid-feedback" id="add-invalid-credityear"></div>
                            </div>
                          </div>

                          <div class="col">
                            <div class="form-group">
                              <label style="font-weight:600;"> CVV <span class="text-danger">*</span></label>
                              <input type="text" class="form-control "id="creditcvv" name="creditcvv" disabled>
                              <div class="invalid-feedback" id="add-invalid-creditcvv"></div>
                            </div>
                          </div>
                        </div>

                        <hr class="mb-4">

                        <div class="row">
                          <div class="col">
                              <div class="form-group">
                              <label style="font-weight:600;"> Type of Discount <span class="text-danger">*</span></label>
                              <select class="form-control" id="typediscount">
                                <option selected disabled>No Selected</option>
                                <option value="1">PWD</option>
                                <option value="2">Senior Citizen</option>
                              </select>
                              <div class="invalid-feedback" id="add-invalid-typediscount"></div>
                            </div>
                          </div>
                          
                          <div class="col">
                              <div class="form-group">
                              <label style="font-weight:600;"> Discount Percentage </label>
                              <input type="text" class="form-control "id="addcustomername" name="addcustomername" disabled="">
                              <div class="invalid-feedback" id="add-invalid-addcustomername"></div>
                            </div>
                          </div>

                          <div class="col">
                            <div class="form-group">
                              <label style="font-weight:600;"> Change </label>
                              <input type="text" class="form-control "id="addcustomername" name="addcustomername" disabled>
                              <div class="invalid-feedback" id="add-invalid-addcustomername"></div>
                            </div>
                          </div>
                        </div>
              </div>
            </div>
          <div class="col-md-6">
            <div class="modal-header text-center" style="background-color:#ff0018;display: flex; justify-content: center;">
              <div class="text-white">
               <div class="font-weight-bold" >
                <h5 class="text-white" style="font-weight:600;">ORDER DETAILS</h5>
                </div> 
                <br>
                <h6 class="text-white" style="font-weight:600;">ORDER# ON-20-0000001</h6>
              </div>
            </div>
            <div class="modal-body">
              <div class="container">
                <div class="section">
                  <!-- <h5 class="mb-0">Cart</h5> -->
                  <div class="row">
                    <div class="col">
                        <h6 style="font-weight:600;">Customer Name: Amy Han</h6>
                    </div>
                    <div class="col">
                      <h6 style="float:right; text-align: right;font-weight:600;"> Date: August 24 2020</h6>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col">
                      <h6 style="font-weight:600;">Table No.: 1</h6>
                    </div>
                    <div class="col">
                       <h6 style="float:right; text-align: right;font-weight:600;">Take-out</h6>
                    </div>
                  </div>
                   <hr class="mb-4">
                    <ul id="header">
                      <h6><li style="margin-left:20px;font-weight:600;">ID</li>
                      <li style="margin-left:20px;font-weight:600;">Food Item</li>
                      <li style="margin-left:20px;font-weight:600;">Quantity</li>
                      <li style="float:right; text-align: right;font-weight:600;">Price</li></h6>
                    </ul>
                   <hr class="mb-4">
                   <!-- Mini Cart Starts Here -->
                    <div class="mini-cart-container">
                      <div class="mini-cart-items">
                        <ul id="header">
                          <div class="product">
                          </div>
                        </ul>
                         <div id="total-items">
                        </div>
                      </div>
                    </div>
                  <!-- Mini Cart Ends Here -->  
                  <hr class="mb-4">  
                  <h6 class="mb-0" style="font-weight:600;">Subtotal:</h6> 
                  <h6><div id="subtotal-price"> <span style="width:70px;text-align: right; margin-top: -15px; float:right;font-weight:600;"> 00.0 </span></div></h6>
                  <h6 class="mb-0" style="font-weight:600;">VAT 12%</h6>
                  <h6><div id="total-vat"> <span style="width:70px;text-align: right; margin-top: -15px; float:right;font-weight:600;"> 00.0 </span></div></h6>
                  <h6 class="mb-0" style="font-weight:600;">Discount:</h6>
                  <h6><input class="float-right" type="number" style="width:70px; margin-top:-15px; margin-bottom:20px;font-weight:600;" disabled/></h6>
                  <hr class="mb-4">  
                  <h6 class="mb-0 new2" style="font-weight:600;">Total:</h6>
                  <h6><div id="total-price"> <span style="width:70px;text-align: right; margin-top: -15px; float:right;font-weight:600;"> 00.0 </span></div></h6>
                 </div>
                  <div class="form-group">
                     <button type="button" class="btn btn-pill btn-block btn-success float-right"id="save"name="save" style="font-weight:600;"><i class="far fa-handshake"></i><b> Settle</b></button>
                  </div>
              </div>
            </div>
          </div>
        </form>
        </div>
    </div>    
  </div>
</div>
</div>

<!-- end of add checkout -->

<!-- start of addtional order -->
<div id="additional-order" class="modal custom-modal fade" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-lg modal-additional-order" role="document">
    <div class="modal-content">
      <div class="modal-header">
       <!--  <h3 class="modal-title has-icon ms-icon-round "><i class="flaticon-share bg-primary text-white"></i> Add Employee</h3> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      
      <div class="modal-body">
        <div class="row">
          
           <div class="col" style="margin-top:15px;">
      <!-- <ul class="nav nav-tabs d-flex nav-justified mb-8" id="sync-tabs" style=" height: 130px; width:100%;overflow:hidden; overflow-y:scroll;"> -->
      <div class="row " id="select-highlight-button" style="max-height: 10vh; overflow-y: scroll;">
        <div class='col-2 p-0' style='word-break: break-word;text-align:center;' ><a style='font-weight:600;' href='#'id='' class='list-group-item  sync-tabs' role='tab' aria-controls='tab13' data-toggle='tab'>Pasta</a></div>
         <div class='col-2 p-0' style='word-break: break-word;text-align:center;' ><a style='font-weight:600;' href='#'id='' class='list-group-item  sync-tabs' role='tab' aria-controls='tab13' data-toggle='tab'>Salad</a></div>
          <div class='col-2 p-0' style='word-break: break-word;text-align:center;' ><a style='font-weight:600;' href='#'id='' class='list-group-item  sync-tabs' role='tab' aria-controls='tab13' data-toggle='tab'>Salad</a></div>
       <!--  <?php 
        foreach ($data['datagroup'] as $item)  {
        echo "<div class='col-2 p-0' style='word-break: break-word;text-align:center;' ><a style='font-weight:600;' href='#".$item->groupID."'id='$item->groupID' class='list-group-item  sync-tabs' role='tab' aria-controls='tab13' data-toggle='tab'>$item->description</a></div>";
        }
        ?>    -->
      </div>

      <!-- </ul> -->
      <div class="mb-3">
        <div class="pt-4 wish-list">
            <div class="ms-panel ms-panel-fh">
               <div class="tab-content" id="">
               <div class="ms-panel-header">
              <h6 style="text-align:center;font-weight:600;">Main Dish</h6>
            </div>
              <ul class="nav nav-tabs tabs-bordered d-flex nav-justified mb-8" role="tablist" id="listcategory">
                <li role='presentation'><a style='font-weight:600;' href='#' class='list-category-item' aria-controls='tab1' class='active show' role='tab' data-toggle='tab'>Carbonara</a></li>
                <li role='presentation'><a style='font-weight:600;' href='#' class='list-category-item' aria-controls='tab1' class='active show' role='tab' data-toggle='tab'>Salmon Fettucine</a></li>
                <li role='presentation'><a style='font-weight:600;' href='#' class='list-category-item' aria-controls='tab1' class='active show' role='tab' data-toggle='tab'>Pumpkin Pasta</a></li>
             </ul>   
            <!--    <?php 
            foreach ($data['datacategory'] as $category)  {
               echo "<li role='presentation'><a style='font-weight:600;' href='#".$category->categoryID."' class='list-category-item' aria-controls='tab1' class='active show' role='tab' data-toggle='tab'>$category->categorydescription</a></li>";
            }
            ?>
            </ul> -->
<!--list of product  -->
            <div class="row">
              <div class="container">
                <div class="row" style="margin-top:15px;">
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


                  <div class="col-sm-4 grid-item menu-select">
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

                  <div class="col-sm-4 grid-item menu-select">
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
                    <div class="col-sm-4 grid-item menu-select">
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
          <div class="col-sm-auto" style="float:right;font-weight:600;">
            <div class="modal-header" style="background-color:#ff0018;display: flex;justify-content: center;">
              <div class="text-white" >
               <div class="font-weight-bold">
                <h4 class="text-white"style="font-weight:600;" > Additional Order</h4>
               </div> 
              </div>
            </div>
            <div class="modal-body">
              <div class="container">
                <div class="section">
                  <!-- <h5 class="mb-0">Cart</h5> -->
                  <div class="row">
                    <div class="col">
                        <h6 style="font-weight:600;">Customer Name: Amy Han</h6>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col">
                      <h6 style="font-weight:600;">Table No.: #1</h6>
                    </div>
                  
                  </div>
                   <hr class="mb-4">
                   <!-- Mini Cart Starts Here -->
                    <div class="mini-cart-container">
                      <div class="mini-cart-items">
                        <ul id="header">
                          <div class="product">
                          <li><h6>
                              <span style="margin-left:20px;font-weight:600;">Mr.Muscle<span>
                              <span class="item-prices" style="float:right;font-weight:600;" id="price_'+val+'">190.00</span>
                              <input type="number" style="margin-left:135px;width:60px;font-weight:600;" value="'+qty+'" min="1" class="item-quantities product-quantity " id="qty_'+val+'" rel="'+val+'" sel="'+price+'"/></h6>
                            </li>
                          </div>
                        </ul>
                          <div id="total-items">
                        </div>
                      </div>
                    </div>
                  <!-- Mini Cart Ends Here -->  
                  <hr class="mb-4">  
                  <h6 class="mb-0" style="font-weight:600;">Subtotal:</h6> 
                  <h6><div id="subtotal-price"> <span style="width:70px;text-align: right; margin-top: -15px; float:right;font-weight:600;"> 00.0 </span></div></h6>
                 
                  <button type="button" class="btn btn-info btn-block" data-target="#additional-order" data-toggle="modal" data-target="#modal-3" data-backdrop="static" data-keyboard="false" style="font-weight:600;"><i class="fa fa-plus"></i> Add Order</button>
                 </div>
              </div>
            </div>
          </div>
       
    </div> 
   </div>    
  </div>
</div>
</div>

<div id="cancel_confirmation" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="form-header">
                <center><img class="isometric confirmationisometric" width="230px" height="100px" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/isometric/cancelitem.jpg">
               <h3 class="text-red p-2" style="text-align: center">CANCELLED ITEM</h3>
              <p style="text-align: center">Pleased Call Your Manager for Password Confirmation?</p></center>
              <span class="badge bg-inverse-warning" style="font-size: 10px;font-weight: 500;color: #F4DC0E;"> Note: Pleased  enter password</span>
                <input type="password" class="form-control input alphanumeric" id="addPword" autocomplete="off" description="password" required>
              <div class="invalid-feedback" id="status-invalid"></div>

              <br> 
          </div>
           
            <div class="modal-footer">
                 <button class="btn cancel-btn btn-outline-danger" data-dismiss="modal">NO</button>
                 <button type="button" class="btn submit-btn btn-primary float-right edit"> YES</button>
              </div>
        </div>
      </div>
    </div>
  </div> 

  

  <div class="modal fade" id="billingreport" role="dialog"  aria-labelledby="exampleModalCenterTitle" aria-hidden="true" aria-labelledby="modal-2" style="border-style: double;">
  <div class="modal-dialog modal-dialog-centered"  role="document">
    <div class="modal-content" style="border-style: double;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
        <div class="w-100 text-center py-5 px-2">
          <h5  style="text-align: center; font-family: Times New Roman, Times, serif;"> Sample Company Client Name</h5>
          <h5 style="text-align: center; font-family: Times New Roman, Times, serif;"> Owned by:  Blackcoders Group Inc.</h5>
          <h5 style="text-align: center; font-family: Times New Roman, Times, serif;"> L1 Spark Sample Mall Gateway Quezon </h5>
          <h5 style="text-align: center; font-family: Times New Roman, Times, serif;"> VAT Reg TIN : 000-010-001-001</h5>
          <h5 style="text-align: center; font-family: Times New Roman, Times, serif;"> POSO1-SN : 201233M123</h5>
          <h5 style="text-align: center; font-family: Times New Roman, Times, serif;"> Contact Number : 09123456789</h5>
          <br>
           <div class="removespace">     
              <h4 style="text-align: center; font-family: Times New Roman, Times, serif; font-weight: bold">Serving Number: #00001</h4>
              <h5 style="font-family: Times New Roman, Times, serif; padding-bottom: 0px; padding-top: 0px;">======================================</h5>
              <h5 style="font-family: Times New Roman, Times, serif; padding-bottom: 0px;">08/14/2020 11:46 BR# 000000008</h5>
              <h5 style="font-family: Times New Roman, Times, serif; padding-bottom: 0px; padding-top: 0px;">======================================</h5>
              <h5 style="text-align: center; font-family: Times New Roman, Times, serif;">------------------ <strong>BILLING REPORT</strong> -------------------</h5>
           </div>
           <br>
           <div class="row">
            <div class="col-3">Pork Adobo (Small)</div>
            <div class="col-3">1</div>
            <div class="col-3">₱ 150.00 <span class="float-right">=</span></div>
            <div class="col-3"><b>₱ 150.00</b></div>
           </div>
           <div class="row">
            <div class="col-3">Pork Adobo (Large)</div>
            <div class="col-3">1</div>
            <div class="col-3">₱ 150.00 <span class="float-right">=</span></div>
            <div class="col-3"><b>₱ 150.00</b></div>
           </div>
           <br><b>-------------------------------------------------------</b>
           <div class="row px-2">
            <div class="col-12 text-left"><h6>3 Item(s)</h6></div>
             <div class="col-6 text-left">
               <h5><b>Total Due</b></h5>
             </div>
             <div class="col-6 text-right">
               <h5><b>₱ 150.00</b></h5>
             </div>
           </div>
           <div class="row mt-5">
             <div class="col-8 font-weight-bold">
               <div class="border-bottom w-100 pb-2 mb-2">
                <span>Amy Han</span>
               </div>
               <span>Signature Over Printed Name</span>
             </div>
           </div>
        </div>   
   <!--  <button type="button" class="btn btn-outline-danger" data-dismiss="modal" id="cncl-add">NO</button> -->
    </div>
  </div>
</div>

<!-- end of additional order -->
<script type="text/javascript">
  $('document').ready(function(){ //start of document.ready
    var flag= true;
    if(flag){

    $('.section').hide();
    $('#background').show();
    }
    else{

    $('#background').hide();
    flag =false;
    }
      
    $(document).on("click", '.product-select', function () {

      $('.section').show();
      $('#background').hide();
        
    });

  

  var header = document.getElementById("select-highlight-button");
  var btns = header.getElementsByClassName("sync-tabs");
  for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[2].className = current[2].className.replace(" active", "");
    this.className += " active";
    });
  }
  $('#1').addClass('active');

  $(".list-group-item").on("click", function(){
      var id = $(this).attr('id');
    /*  $.ajax({
                url : "<?php echo site_url('pointofsale/groupdata');?>",
                method : "POST",
                data : {id:id},
                async : true,
                dataType : 'json',
                success: function(data){
              var html ="";
              for ( var i=0; i<data.length; i++ ) {
               html +=' <li role="presentation"><a style="font-weight:600;" href="#""' + data[i].categoryID + '""" class="list-category-item" aria-controls="tab1" class="active show" role="tab" data-toggle="tab">'+ data[i].categorydescription + '</a></li>';
              }
              $("#listcategory").html(html);
               },
                error: function(request, textStatus, error) {
              }

  }); */

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
  

  $('#sel1').change(function(){ 
    var sel         =   $('#sel1').val();
    if(sel == 3){
       $('#cancel_confirmation').modal({backdrop: 'static', keyboard: false},'show');
     
      }else{

      alert("");
    }
  });  

   $('.printrecall').unbind('click').bind('click', function(){
   
   }); 
   });  

</script>          