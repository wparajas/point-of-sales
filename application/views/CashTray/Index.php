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
                  <li class="breadcrumb-item"><a href="#"><i class="material-icons fs-16">dashboard</i>Dashboard</a> </li>
                  <li class="breadcrumb-item"><a href="#">POS</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Cash Try</li>
              </ol>
            </nav>
          </div>
         <div class="content container-fluid">
         <div class="ms-card">
         <div class="ms-card-header d-flex justify-content-between align-items-center bg-primary">
              <h5 class="page-title text-white h6 font-weight-bold" >LIST OF CASH TRAY</h5>

              <BUTTON class="btn btn-outline-red text-red" data-toggle="modal" data-target="#set_starting_cash">
                <i class="fa fa-plus-square fa-lg"></i> SET STARTING CASH
              </BUTTON>

        </div>
  
    <div class="col-xl-12 col-md-12">
 <br><br>      
          <div class="table-responsive container-fluid">
            <table id="tabledepartment" class="table table-bordered thead-primary dtBasicExample">
              <thead>
                <tr class="text-center">
                  <th>NUMBER</th>
                  <th>TRANSACTION</th>
                  <th>TIME</th>
                  <th>AMOUNT</th>
                </tr>
              </thead>
                <tbody>
               
                  <tr class="text-center">
                    <td>1</td>
                    <td style="text-align: left">Starting Cash</td>
                    <td>6:30am</td>
                    <td style="text-align: right">25,000.00</td>
                  </tr>
                  <tr class="text-center">
                    <td>2</td>
                    <td style="text-align: left">Settled</td>
                    <td>-</td>
                    <td>-</td>
                  </tr>
                  <tr class="text-center">
                    <td>3</td>
                    <td style="text-align: left">Cash In</td>
                    <td>-</td>
                    <td>-</td>
                  </tr>
                  <tr class="text-center">
                    <td>4</td>
                    <td style="text-align: left">Cash Out</td>
                    <td>-</td>
                    <td>-</td>
                  </tr>
         
                </tbody>
            </table>
          </div>
<br><br>
      </div>
      <div class="row">
      	<div class="offset-9 col-3 row">
      		<div class="col-6 p-1">
      			<span class="font-weight-bold" >Expected Incash</span>
      		</div>
      		<div class="col-6 text-right p-1">
      			₱&nbsp;0.00
      		</div>
      		<div class="col-6 p-2">
      			<span class="font-weight-bold" >Actual Incash</span>
      		</div>
      		<div class="col-6 text-right p-1">
      			₱&nbsp;0.00
      		</div>
      		<div class="col-6 p-1">
      			<span class="font-weight-bold" >Discrepancy</span>
      		</div>
      		<div class="col-6 text-right p-1">
      			₱&nbsp;0.00
      		</div>
      	</div>
      </div>

<hr class="h-2">
	<div class="text-right p-2">
                  <button class="btn btn-outline-primary btn-reject"  data-toggle="modal" data-target="#cash_in_out">CASH IN/ CASH OUT</button>
                  <button class="btn btn-primary btn-approve"  data-toggle="modal" data-target="#set_closing_cash" data-todo="edit">SET CLOSING CASH</button>
    </div>
  </div>
</div>

<!-- Modal SET STARTING CASH -->
<div class="modal fade" id="set_starting_cash" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg"  role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <div class="w-100">
            <h5 class="modal-title text-red p-2 text-light font-weight-bold" id="exampleModalCenterTitle">SET STARTING CASH</h5>
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="text-light" aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<div class="row">
      		<div class="offset-6 col-6 text-right ">
      			<span><strong>Date & Time:&nbsp;&nbsp;</strong>Sep 01, 2020 6:00am</span>
      		</div>
      	</div>
      	<br>
      	<div class="mt-3 d-flex justify-content-between">
          <h4 class="modal-title has-icon ms-icon-round text-left mb-2 text-red">COIN/CASH</h4>
          <div class="input-group mx-1 w-auto">
            <div class="input-group-prepend">
              <span class="input-group-text text-white" id="basic-addon1" style="background: #ff0018"><i class="fas fa-plus"></i></span>
            </div>
            <input type="text" aria-label="Username" aria-describedby="basic-addon1" onkeypress="return numbersOnly(event)" maxlength="3" style="width: 50px;" name="add-cash" id="add-cash" class="add-cash" data-todo="add">
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-bordered thead-primary text-center" id="tablegroup2">
            <thead>
              <tr>
                <th>NUMBER OF COINS</th>
                <th>COIN VALUE</th>
                <th>TOTAL</th>
                <th>ACTION</th>
              </tr>
            </thead>
            <tbody id="add-tbody-starting-cash">
              <tr class="add-tr-starting-cash">
                <td>
                	<input type="number" class="form-control add_starting_cash" data-todo="add" name="add_starting_cash" required>
            	  </td>
                <td class="">
                  <input type="number" class="form-control add_value_cash" data-todo="add" name="add_value_cash" required>
                </td>
                <td class="">
                	<input type="text" readonly data-todo="add" name="add_total_cash" class="form-control add_total_cash">
                </td>
                <td>
                	<button class="btn btn-outline-danger btn-sm p-1 removetablerow" data-todo="add" style="min-width: 1rem; padding: .3rem;">&nbsp;<i class="fas fa-trash"></i>
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <div class="w-100 text-center">
          <button type="submit" class="btn btn-primary btn-add" data-toggle="modal"  data-target="#set_starting_confirmation" >SET</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal SET CASH IN/CASH OUT -->
<div class="modal fade" id="cash_in_out" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg"  role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <div class="w-100">
            <h5 class="modal-title text-light p-2 font-weight-bold" id="exampleModalCenterTitle">ADD CASH IN/CASH OUT</h5>
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="text-light" aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<div class="row">
      		<div class="col-6 p-2">
      			<label>Type of Transaction <strong class="text-danger">*</strong></label>
      			<select class="form-control" id="add_transaction">
      				<option disabled selected class="text-secondary">Select type of transaction</option>
      				<option>Cash In</option>
      				<option>Cash Out</option>
      			</select>
            <div class="invalid-feedback" id="invalid-add_transaction"></div>
      		</div>
      		<div class="col-6 p-2">
      			<label>Amount <strong class="text-danger">*</strong></label>
      			<input type="number" name="" id="add_amount" class="form-control text-right">
            <div class="invalid-feedback" id="invalid-add_amount"></div>
      		</div>
      		<div class="col-12 p-2">
      			<label>Reason to Cash In/ Cash Out <strong class="text-danger">*</strong></label>
      			<textarea class="form-control" id="add_cashin_cashout"></textarea>
            <div class="invalid-feedback" id="invalid-add_cashin_cashout"></div>
      		</div>
      	</div>
      </div>
      <div class="modal-footer">
        <div class="w-100 text-center">
          <button type="button" class="btn btn-primary btn-cashin_cashout">ADD</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal SET CLOSING CASH -->
<div class="modal fade" id="set_closing_cash" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg"  role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <div class="w-100">
            <h5 class="modal-title text-light p-2" id="exampleModalCenterTitle">SET CLOSING CASH</h5>
        </div>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="text-light" aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
      	<div class="row">
      		<div class="offset-6 col-6 text-right ">
      			<span><strong>Date & Time:&nbsp;&nbsp;</strong>Sep 01, 2020 6:00am</span>
      		</div>
      	</div>
      	<br>
      	<div class="mt-3 d-flex justify-content-between">
          <h4 class="modal-title has-icon ms-icon-round text-left mb-2 text-red">COIN/CASH</h4>
          <div class="input-group mx-1 w-auto">
            <div class="input-group-prepend">
              <span class="input-group-text text-white" id="basic-addon1" style="background: #ff0018"><i class="fas fa-plus"></i></span>
            </div>
            <input type="text" aria-label="Username" aria-describedby="basic-addon1" onkeypress="return numbersOnly(event)" maxlength="3" style="width: 50px;" name="add-cash" id="add-cash" class="add-cash" data-todo="edit" >
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-bordered thead-primary text-center" id="tablegroup2">
            <thead>
              <tr>
                <th>NUMBER OF COINS</th>
                <th>COIN VALUE</th>
                <th>TOTAL</th>
                <th>ACTION</th>
              </tr>
            </thead>
            <tbody id="edit-tbody-starting-cash">
            <form action="#">
              <tr class="edit-tr-starting-cash">
                <td>
                  <input type="number" class="form-control text-right" name="add_starting_cash" required>
              </td>
                <td class="">
                  <input type="number" class="form-control text-right" name="add_value_cash" required>
                </td>
                <td class="">
                  <input type="text" readonly name="add_total_cash" class="form-control text-right">
                </td>
                <td>
                  <button type="submit" class="btn btn-outline-danger btn-sm p-1 removetablerow" data-todo="add" style="min-width: 1rem; padding: .3rem;">&nbsp;<i class="fas fa-minus"></i></button>
                </td>
              </tr>
            </form>
            </tbody>
          </table>
        </div>
        <div class="row">
        	<div class="offset-9 col-3 row">
        		<div class="col-6 border-bottom">
        			<span>Total :</span>
        		</div>
        		<div class="col-6 text-right border-bottom">
        			<span >0.00</span>
        		</div>
        	</div>
        </div>
      </div>
      <div class="modal-footer">
        <div class="w-100 text-center">
          <button type="button" class="btn btn-primary btn-closing" data-toggle="modal"  data-target="#set_closing_confirmation">SET</button>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- CONFIRMATION FOR ADD -->
<div class="modal fade" id="set_starting_confirmation" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered"  role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="form-group p-3">
          <div class="row">
          	<div class="w-100 text-center" >
          	 	<img style="margin:auto;" width="230px" height="100px" src="<?php echo base_url();?>pages\assets\img\modal\confirmation.png">	
          	</div>
          <h1 class="text-red" style="margin:auto;">SET STARTING CASH</h1>
          <span class="text-secondary" style="margin:auto;">Are you sure you want to set Starting Cash?</span>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger btn-add-no" data-dismiss="modal">NO</button>
        <button type="button" class="btn btn-primary">YES</button>
      </div>
    </div>
  </div>
</div>

<!-- CONFIRMATION FOR CLOSING SETUP -->
<div class="modal fade" id="set_closing_confirmation" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered"  role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="form-group p-3">
          <div class="row">
          	<div class="w-100 text-center" >
          	 	<img style="margin:auto;" width="230px" height="100px" src="<?php echo base_url();?>pages\assets\img\modal\confirmation.png">	
          	</div>
          <h1 class="text-red" style="margin:auto;">SET CLOSING CASH</h1>
          <span class="text-secondary" style="margin:auto;">Are you sure you want to set Closing Cash?</span>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger btn-add-no" data-dismiss="modal">NO</button>
        <button type="button" class="btn btn-primary">YES</button>
      </div>
    </div>
  </div>
</div>

<!-- CONFIRMATION FOR CLOSING SETUP -->
<div class="modal fade" id="cash_in_out_confirmation" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered"  role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="form-group p-3">
          <div class="row">
          	<div class="w-100 text-center" >
          	 	<img style="margin:auto;" width="230px" height="100px" src="<?php echo base_url();?>pages\assets\img\modal\confirmation.png">	
          	</div>
          <h1 class="text-red" style="margin:auto;">ADD CASH IN/CASH OUT</h1>
          <span class="text-secondary" style="margin:auto;">Are you sure you want to add new Cash In/Cash Out?</span>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger btn-add-no-cashin-cashout" data-dismiss="modal">NO</button>
        <button type="button" class="btn btn-primary">YES</button>
      </div>
    </div>
  </div>
</div>



<script type="text/javascript">
  $(document).ready(function() {
   	$('#tabledepartment').DataTable();
   	//ADD
     	$(".btn-add").click(function(){
     		$("#set_starting_cash").modal("hide"); 		
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
     	});
     	//CLOSING
     	$(".btn-closing").click(function(){
     		$("#set_closing_cash").modal("hide"); 		
     	});
   	//CASH IN/CASH OUT
   /*	$(".btn-cashin_cashout").click(function(){
   		$("#cash_in_out").modal("hide"); 		
   	});*/

   	function updateTable(todo = "add") {
      $("."+todo+"-tr-starting-cash").each(function(i) {

        $("."+todo+"-tr-starting-cash", this).attr("number", (i));

        $("."+todo+"_starting_cash", this).attr("id", todo+"_starting_cash"+i);
        $("."+todo+"_value_cash", this).attr("id", todo+"_value_cash"+i);
        $("."+todo+"_starting_cash", this).attr("number", i);
        $("."+todo+"_value_cash", this).attr("number", i);
        $("."+todo+"_total_cash", this).attr("id", todo+"_total_cash"+i);
        

        // REMOVE ELEMENT
        $(this).attr("id", todo+"-table-row-id"+(i));
        $(".removetablerow", this).attr("id", (i));
      });
    }

    $(document).on("keyup", ".add_starting_cash, .add_value_cash", function() {
      const number = $(this).attr("number");
      const startCash = parseFloat($("#add_starting_cash"+number).val());
      const valueCash = parseFloat($("#add_value_cash"+number).val());
      console.log(number+" "+startCash+" "+valueCash);
      $("#add_total_cash"+number).val(!(startCash*valueCash) ? '0.00' : (startCash*valueCash).toFixed(2));
    })

    // REMOVE TABLE ROW
    $(document).on("click", ".removetablerow", function(e) {
      e.preventDefault();
      const id    = $(this).attr("id");
      const todo  = $(this).data("todo");
      //console.log(todo);
      const elementLength = $("."+todo+"-tr-starting-cash").length;
      if (elementLength > 1) {
        $("#"+todo+"-table-row-id"+id).remove();
      } 
      // UPDATING TABLE
      updateTable(todo);
    });
    // ADDING NEW ROW
    $(document).on("keyup", ".add-cash", function(e) {
      const rownumber = $(this).val();
      const todo = $(this).data("todo");
       
      if (e.which === 13) {
        const itemElementLength = $("."+todo+"-tr-starting-cash").length;
        console.log(rownumber);
        console.log(itemElementLength);
        const newLength = rownumber - itemElementLength;
        let rows = "";
        for (var i=0; i<newLength; i++) {
          let html = "";
          html += '<tr class="'+todo+'-tr-starting-cash">';
            html += '<td><input type="number" class="form-control add_starting_cash" data-todo="add" name="add_starting_cash" required></td>'
            html += '<td class=""><input type="number" class="form-control add_value_cash" data-todo="add" name="add_value_cash" required ></td>';
            html += '<td><input type="text" readonly data-todo="add" name="add_total_cash" class="form-control add_total_cash"></td>';
            html += '<td class="courier-package-table-remove">';
            html += '<button class="btn btn-outline-danger btn-sm p-1 removetablerow" data-todo="'+todo+'" style="min-width: 1rem; padding: .3rem;">&nbsp;<i class="fas fa-trash"></i></button>';
            html += '</td>';
          html += '</tr>';
          rows += html;
        }
        $("#"+todo+"-tbody-starting-cash").prepend(rows);
        updateTable(todo);
      }
    });
    updateTable("add");



    const elemArrId     = ["add_transaction","add_amount","add_cashin_cashout"];
    const elemArrTxt    = ["Transaction","Amount","Cashi In/Out"];
    const elemArrLength = elemArrId.length;

    $(document).on("click", ".btn-cashin_cashout", function(event){
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
        $("#cash_in_out").modal("hide");
        $('#cash_in_out_confirmation').modal({backdrop: 'static', keyboard: false},'show');

      }

    });

    $(".btn-add-no-cashin-cashout").click(function(){
      $("#cash_in_out").modal("show");
    });













  });



</script> 