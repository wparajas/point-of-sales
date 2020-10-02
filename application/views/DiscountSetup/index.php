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
                  <li class="breadcrumb-item"><a href="<?= base_url().'Dashboard'?>"><i class="material-icons fs-16">dashboard</i> Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Discount Setup</li>
              </ol>
          </nav>
        </div>
         <div class="content container-fluid">
         <div class="ms-card">
         <div class="ms-card-header d-flex justify-content-between align-items-center bg-primary">
              <h6 class="page-title text-white" >LIST OF DISCOUNTS AND PROMOS</h6>

              <BUTTON class="btn btn-outline-red text-red" data-toggle="modal" data-target="#add_discount">
                <i class="fa fa-plus-square fa-lg"></i>&nbsp;ADD DISCOUNT SETUP
              </BUTTON>

        </div>
  
    <div class="col-xl-12 col-md-12">
 <br><br>      
          <div class="table-responsive container-fluid">
            <table id="tabledepartment" class="table table-bordered thead-primary dtBasicExample">
              <thead>
                <tr class="text-center">
                  <th>DISCOUNT NUMBER</th>
                  <th>DISCOUNT NAME</th>
                  <th>DISCOUNT PERCENT</th>
                  <th>DISCOUNT VOUCHER</th>
                  <th>VALID UNTIL</th>
                  <th>PASSWORD</th>
                  <th>STATUS</th>
                  <th>ACTION</th>
                </tr>
              </thead>
                <tbody>
               
                  <tr>
                    <td>DN-20-00001</td>
                    <td>Senior Cetizen & Person With Dissability</td>
                    <td>10%</td>
                    <td>Not Required</td>
                    <td>N/A</td>
                    <td>Required</td>
                    <td class="text-center">
                      <span class="badge badge-outline-success">&nbsp;&nbsp;Active&nbsp;&nbsp;</span>
                    </td>
                    <td>
                      <div class="drop-down float-right">
                        <a href="#" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false"> <i class="material-icons" style="font-size:1.5rem;">more_vert</i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                          <li class="ms-dropdown-list">
                            <a class="media" href="#">
                              <div class="media-body editinventoryitem p-2"
                             
                                   data-controls-modal="your_div_id" 
                                   data-backdrop="static" 
                                   data-keyboard="false" 
                                   data-toggle="modal" 
                                   data-target="#edit_discount" 
                                   href="javascript:void(0);" 
                                   id="" >
                                <i class="fas fa-pencil-alt text-secondary" style="font-size:1rem;"></i><span>&nbsp;Edit</span>
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
<form>
<div class="modal fade" id="add_discount" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg"  role="document">
    <div class="modal-content">
      <div class="modal-header text-left bg-red">
        <div class="w-100">
            <h5 class="modal-title text-light p-2 font-weight-bold" id="exampleModalCenterTitle">ADD DISCOUNT & PROMO</h5>
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="text-light" aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <div class="form-group p-3">
          <div class="row">
	            <div class="col-12 p-1">
	              <label>Disount/Promo Name<strong class="text-red">*</strong></label>
	              <input type="text" class="form-control" name="add_name" id="add_name" placeholder="Discount/Promo Name">
                <div class="invalid-feedback" id="invalid-add_name"></div>
	            </div>

	            <div class="col-6 p-1">
	              <label>Discount Percentage <strong class="text-red">*</strong></label>
	              <input type="number" class="form-control" id="add_percentage" placeholder="Discount Percentage" name="add_percentage">
                <div class="invalid-feedback" id="invalid-add_percentage"></div>
	            </div>
	            <div class="col-6 p-1">
	              <label>Discount Valid Until</label>
	              <input type="date" class="form-control" id="valid_until" placeholder="Please enter Group Description" name="">
                <div class="invalid-feedback" id="invalid-valid_until"></div>
	            </div>

	            <div class="col-4 p-2">
	            <label>Discount Voucher <strong class="text-red">*</strong></label>
	            <div class="d-flex align-items-center">
	              <span> Not Required </span>&nbsp;
	                  <label class="ms-switch">
	                  <input type="checkbox" checked="" name="addstatus" id="addstatus"> 
	                  <span class="ms-switch-slider ms-switch-success round"></span>
	                  </label> 
	              <span>&nbsp; Required </span>
	            </div>
	          </div>
	          <div class="col-4 p-2">
	            <label>Password <strong class="text-red">*</strong></label>
	            <div class="d-flex align-items-center">
	              <span> Not Required </span>&nbsp;
	                  <label class="ms-switch">
	                  <input type="checkbox" checked="" name="addstatus" id="addstatus"> 
	                  <span class="ms-switch-slider ms-switch-success round"></span>
	                  </label> 
	              <span>&nbsp; Required </span>
	            </div>
	          </div>
	            

	          <div class="col-4 p-2">
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
      <div class="modal-footer w-100 text-center">
        <div class="text-center" style="margin:auto;">
          <button type="button" class="btn btn-primary btn-add" id="btn-save">ADD</button>
        </div>
      </div>
    </div>
  </div>
</div>
</form>

<!-- CONFIRMATION FOR ADD -->
<div class="modal fade" id="add_discount_confirmation" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered"  role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="form-group p-3">
          <div class="row">
          	<div class="w-100 text-center" >
          	 	<img style="margin:auto;" width="230px" height="100px" src="<?php echo base_url();?>pages\assets\img\modal\confirmation.png">	
          	</div>
          <h1 class="text-red" style="margin:auto;">ADD DISCOUNT/PROMOS</h1>
          <span class="text-secondary" style="margin:auto;">Are you sure you want to add new Discout/Promo?</span>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <div class="w-100 text-center">
          <button type="button" class="btn btn-outline-danger btn-add-no" data-dismiss="modal">NO</button>
          <button type="button" class="btn btn-primary">YES</button>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- EDIT MODAL -->
<div class="modal fade" id="edit_discount" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg"  role="document">
    <div class="modal-content">
      <div class="modal-header bg-red">
        <div class="w-100 text-left">
            <h5 class="modal-title text-light p-2" id="exampleModalCenterTitle">EDIT DISCOUNT & PROMO</h5>
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="text-light" aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <div class="form-group p-3">
          <div class="row">
	            <div class="col-12 p-1">
	              <label>Disount/Promo Name<strong class="text-red">*</strong></label>
	              <input type="text" class="form-control" name="edit_name" id="edit_name" placeholder="Discount/Promo Name" value="Senior Cetizen & Person With Dissability">
	            </div>

	            <div class="col-6 p-1">
	              <label>Discount Percentage <strong class="text-red">*</strong></label>
	              <input type="number" class="form-control" name="edit_percentage" id="edit_percentage" value="10">
	            </div>
	            <div class="col-6 p-1">
	              <label>Discount Valid Until</label>
	              <input type="date" class="form-control" id="edit_valid_until" placeholder="Please enter Group Description" name="">
	            </div>

	            <div class="col-4 p-2">
	            <label>Discount Voucher <strong class="text-red">*</strong></label>
	            <div class="d-flex align-items-center">
	              <span> Not Required </span>&nbsp;
	                  <label class="ms-switch">
	                  <input type="checkbox" checked="" name="addstatus" id="addstatus"> 
	                  <span class="ms-switch-slider ms-switch-success round"></span>
	                  </label> 
	              <span>&nbsp; Required </span>
	            </div>
	          </div>
	          <div class="col-4 p-2">
	            <label>Password <strong class="text-red">*</strong></label>
	            <div class="d-flex align-items-center">
	              <span> Not Required </span>&nbsp;
	                  <label class="ms-switch">
	                  <input type="checkbox" checked="" name="addstatus" id="addstatus"> 
	                  <span class="ms-switch-slider ms-switch-success round"></span>
	                  </label> 
	              <span>&nbsp; Required </span>
	            </div>
	          </div>
	            

	          <div class="col-4 p-2">
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
       <div class="w-100 text-center">
         <button type="button" class="btn btn-primary btn-update">UPDATE</button>
       </div>
      </div>
    </div>
  </div>
</div>


<!-- CONFIRMATION FOR EDIT -->
<div class="modal fade" id="edit_discount_confirmation" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered"  role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="form-group p-3">
          <div class="row">
          <img style="margin:auto;" width="230px" height="100px" src="<?php echo base_url();?>pages\assets\img\modal\confirmation.png">
          <br>
          <h1 class="text-red" style="margin:auto;">UPDATE DISCOUNT/PROMO</h1>
          <span class="text-secondary" style="margin:auto;">Are you sure you want to update Discount/Promo?</span>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <div class="w-100 text-center">
          <button type="button" class="btn btn-oultine-danger btn-update-no" data-dismiss="modal">NO</button>
          <button type="button" class="btn btn-primary">YES</button>
        </div>
      </div>
    </div>
  </div>
</div>




<script type="text/javascript">
  $(document).ready(function() {
 	/*$('#tabledepartment').DataTable();
 	//ADD
 	$(".btn-add").click(function(){
 		$("#add_discount").modal("hide");
 	});
 	$(".btn-add-no").click(function(){
 		$("#add_discount").modal("show");
 	});
 	//EDIT
 	$(".btn-update").click(function(){
 		$("#edit_discount").modal("hide");
 	});
 	$(".btn-update-no").click(function(){
 		$("#edit_discount").modal("show");
 	});*/
    // Add VALIDATION
    const elemArrId     = ["add_name","add_percentage","valid_until"];
    const elemArrTxt    = ["Discount/Promo Name","Discount Percentage","Valid Until"];
    const elemArrLength = elemArrId.length;

    $(document).on("click", "#btn-save", function(event){
      event.preventDefault();
      const focusElem = [];
      let count = 0;

      for(var i = 0; i<elemArrLength; i++){

        const elem = $("#"+elemArrId[i]).val();

        if (elem == "" || elem == null) {
          focusElem.push(elemArrId[i]);
          $("#"+elemArrId[i]).addClass("is-invalid");
          $("#invalid-"+elemArrId[i]).html(elemArrTxt[i]+" is required");
          count++;
        } else {
          $("#"+elemArrId[i]).addClass("is-valid");
          $("#"+elemArrId[i]).removeClass("is-invalid");
          $("#invalid-"+elemArrId[i]).html("");
        }
      }
      if (count > 0) {
        $("#"+focusElem[0]).focus();
      } else {
        $("#add_discount").modal("hide");
        $('#add_discount_confirmation').modal({backdrop: 'static', keyboard: false},'show');

      }

    });

    $(".btn-add-no").click(function(){
      $("#add_discount").modal("show");
    });

    //Edit Validation
    const elemArrIdEdit     = ["edit_name","edit_percentage","edit_valid_until"];
    const elemArrTxtEdit    = ["Discount/Promo Name","Discount Percentage","Valid Until"];
    const elemArrLengthEdit = elemArrIdEdit.length;

    $(document).on("click", ".btn-update", function(event){
      event.preventDefault();
      const focusElemEdit = [];
      let count = 0;

      for(var i = 0; i<elemArrLengthEdit; i++){

        const elemEdit = $("#"+elemArrIdEdit[i]).val();

        if (elemEdit == "" || elemEdit == null) {
          focusElemEdit.push(elemArrIdEdit[i]);
          $("#"+elemArrIdEdit[i]).addClass("is-invalid");
          $("#invalid-"+elemArrIdEdit[i]).html(elemArrTxtEdit[i]+" is required");
          count++;
        } else {
          $("#"+elemArrIdEdit[i]).addClass("is-valid");
          $("#"+elemArrIdEdit[i]).removeClass("is-invalid");
          $("#invalid-"+elemArrIdEdit[i]).html("");
        }
      }
      if (count > 0) {
        $("#"+focusElemEdit[0]).focus();
      } else {
        $("#edit_discount").modal("hide");
        $('#edit_discount_confirmation').modal({backdrop: 'static', keyboard: false},'show');

      }

    });

    $(".btn-update-no").click(function(){
      $("#edit_discount").modal("show");
    });


  });
</script> 