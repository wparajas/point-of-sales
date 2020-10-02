<style>
  .centertag {

    justify-content: center;
    text-align: center;
  }
 </style> 
<div class="ms-content-wrapper"> 
      <div class="row">
        <div class="col-12">
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb pl-0">
                  <li class="breadcrumb-item"><a href="<?php base_url().'Dashboard'?>"><i class="material-icons fs-16">dashboard</i>Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Payment Setup</li>
              </ol>
          </nav>
        </div>         <div class="content container-fluid">
         <div class="ms-card">
         <div class="ms-card-header d-flex justify-content-between align-items-center bg-primary">
              <h6 class="page-title text-white font-weight-bold" >PAYMENT SETUP</h6>

              <BUTTON class="btn btn-outline-red text-red" data-toggle="modal" data-target="#add_payment">
                <i class="fa fa-plus-square fa-lg"></i>&nbsp;ADD PAYMENT
              </BUTTON>

        </div>
  
    <div class="col-xl-12 col-md-12">
 <br><br>      
          <div class="table-responsive container-fluid">
            <table id="tabledepartment" class="table table-bordered thead-primary dtBasicExample">
              <thead>
                <tr class="text-center">
                  <th>PAYMENT CODE</th>
                  <th>MODE OF PAYMENT</th>
                  <th>STATUS</th>
                  <th>ACTION</th>
                </tr>
              </thead>
                <tbody>
               
                  <tr>
                    <td>PY-00001</td>
                    <td>BDO</td>
                    <td class="text-center">
                      <span class="badge badge-outline-success">&nbsp;&nbsp;Active&nbsp;&nbsp;</span>
                    </td>
                    <td>
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
                                   id="" >
                                <i style="font-size:1rem;" class="fas fa-pencil-alt text-secondary"></i><span> Edit</span>
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

<div class="modal fade" id="add_payment" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered"  role="document">
    <div class="modal-content">
      <div class="modal-header bg-red">
        <div class="w-100">
            <h5 class="modal-title text-light p-2 font-weight-bold" id="exampleModalCenterTitle">ADD PAYMENT SETUP</h5>
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="text-light" aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <div class="form-group p-3">
          <div class="row">
            <div class="col-12 p-2">
              <label>Mode of Payment <strong class="text-red">*</strong></label>
              <input type="text" class="form-control" id="addpayment" name="addpayment" placeholder="Please enter a payment">
              <div class="invalid-feedback" id="invalid-addpayment"></div>
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
      <div class="modal-footer text-center">
        <div style="margin:auto;"> 
          <button type="button" class="btn btn-primary" id="save" name="save">ADD</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="add_payment_confirmation"  role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered"  role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="form-header">
                 <center><img class="isometric confirmationisometric" width="230px" height="100px" sytle="" src="<?=base_url(); ?>pages/assets/img/isometric/addpicture.png"></center>
               <h3 class="text-red p-2" style="text-align: center">ADD PAYMENT SETUP</h3>
              <p style="text-align: center">Are you sure you want to add new Payment Setup?</p></center>
              <div class="invalid-feedback" id="status-invalid"></div>
              <br> 
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal" id="cncl-add">NO</button>
        <button type="button" class="btn btn-primary add">YES</button>
      </div>
    </div>
  </div>
</div>
</div>
</div>

 <div id="edit_payment" class="modal custom-modal fade" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="centertag">
             <div class="modal-header bg-primary">
              <div class="w-100 text-left">
                <h5 class="modal-title text-light p-2 font-weight-bold" id="exampleModalCenterTitle">EDIT PAYMENT SETUP</h5>
              </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span class="text-light" aria-hidden="true">&times;</span>
                </button>
              </div>
             </div> 
            <div class="modal-body">
            <form method="post">     
             <div class="row">
            <div class="col-12 p-2">
              <label>Mode of Payment <strong class="text-red">*</strong></label>
              <input type="text" class="form-control" id="editpayment" name="addpayment" placeholder="Please enter a payment">
              <div class="invalid-feedback" id="invalid-editpayment"></div>
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
            <div class="modal-footer">
              <div style="margin:auto;">
                <button type="button" class="btn submit-btn btn-primary float-right update" id="update-save"> UPDATE</button>
              </div>
            </div>
           
            </form>
          </div>
        </div>    
    </div>
  </div>

  <div id="edit_payment_confirmation" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="form-header">
                <center><img class="isometric confirmationisometric" width="230px" height="100px" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/isometric/updatepicture.jpg">
               <h3 class="text-red p-2" style="text-align: center">UPDATE PAYMENT SETUP</h3>
              <p style="text-align: center">Are you sure you want to update Payment Setup?</p></center>
              <div class="invalid-feedback" id="status-invalid"></div>
              <br> 
          </div>
           
            <div class="modal-footer">
                 <button class="btn cancel-btn btn-outline-danger" id="cncl-edit" >NO</button>
                 <button type="button" class="btn submit-btn btn-primary float-right edit"> YES</button>
              </div>
        </div>
      </div>
    </div>
  </div>

<script type="text/javascript">

    $('#save').unbind('click').bind('click', function(){
      $('#add_payment').hide();
      $('#add_payment_confirmation').modal({backdrop: 'static', keyboard: false},'show');
      event.preventDefault(); 
    });

    $("#cncl-add").unbind('click').bind('click', function(){

      $('#add_payment_confirmation').modal('hide');
      $('#add_payment').show();
    }); 

    $('.add').unbind('click').bind('click', function(){
      window.location.replace('<?php echo base_url(); ?>Payment');

    });

     $('.update').unbind('click').bind('click', function(){
     
      $('#edit_payment').hide();
      $('#edit_payment_confirmation').modal({backdrop: 'static', keyboard: false},'show');

    }); 

     $("#cncl-edit").unbind('click').bind('click', function(){
      $('#edit_payment_confirmation').modal('hide');
      $('#edit_payment').show();
    }); 

     $(".edit").unbind('click').bind('click', function(){
      window.location.replace('<?php echo base_url(); ?>Payment');

    });  


</script>

