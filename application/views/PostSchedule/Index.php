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
                  <li class="breadcrumb-item"><a href="#"><i class="material-icons fs-16">dashboard</i> Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Post Scheduling</li>
              </ol>
          </nav>
        </div>

         <div class="content container-fluid">
         <div class="ms-card">
         <div class="ms-card-header d-flex justify-content-between align-items-center bg-primary">
              <h6 class="page-title text-white font-weight-bold" >LIST OF SCHEDULE</h6>

              <BUTTON class="btn btn-outline-red text-red" data-toggle="modal" data-target="#add_schedule">
                <i class="fa fa-plus-square fa-lg"></i>&nbsp;ADD SCHEDULE
              </BUTTON>

        </div>
  
    <div class="col-xl-12 col-md-12">
      <div class="row" style="margin-left: 12px;">
       <div class="col-5 p-3">
         <label for="hireddate">From Date:</label>
          <input id="edithireddate" name="edithireddate" type="date" class="form-control datetimepicker" placeholder="yyyy-mm-dd" >
          <div class="invalid-feedback" id="edit-hireddate"></div>
       </div> 
        <div class="col-5 p-3">
         <label for="hireddate">To Date:</label>
          <input id="edithireddate" type="date" name="edithireddate" class="form-control datetimepicker" placeholder="yyyy-mm-dd" >
          <div class="invalid-feedback" id="edit-hireddate"></div>
       </div>
        <div class="col-2 p-3">
          <br>
             <button type="button" class="btn btn-primary search"style="margin-top: 5px; margin-left: 80px;" ><i class="far fa-dot-circle"></i> SHOW</button>
        </div>  
      </div>  
 <br><br>      
          <div class="table-responsive container-fluid">
            <table id="tabledepartment" class="table table-bordered thead-primary dtBasicExample">
              <thead>
                <tr class="text-center">
                  <th>NUMBER</th>
                  <th>SHIFTING SCHEDULE</th>
                  <th>DAY</th>
                  <th>PREPARER NAME</th>
                  <th>DATE SUBMITED</th>
                  <th>STATUS</th>
                  <th>ACTION</th>
                </tr>
              </thead>
                <tbody>
               
                  <tr>
                    <td>PY-00001</td>
                    <td>7:00am - 5:00pm</td>
                     <td>Aug 03, 2020</td>
                     <td>EDE</td>
                     <td>Aug 03, 2020</td>
                    <td class="text-center">
                      <span class="badge badge-outline-success">&nbsp;&nbsp;Active&nbsp;&nbsp;</span>
                    </td>
                    <td>
                      <div class="drop-down float-right">
                        <a href="#" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false"> <i style="font-size:1.5rem;" class="material-icons">more_vert</i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                          <li class="ms-dropdown-list">
                            <a class="media p-2" href="#">
                              <div class="media-body editpayment"
                             
                                   data-controls-modal="your_div_id" 
                                   data-backdrop="static" 
                                   data-keyboard="false" 
                                   data-toggle="modal" 
                                   data-target="#edit_schedule" 
                                   href="javascript:void(0);" 
                                   id="" >
                                <i class="fas fa-pencil-alt text-secondary" style="font-size:1rem;"></i><span> Edit</span>
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

<div class="modal fade" id="add_schedule" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg"  role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <div class="w-100">
            <h5 class="modal-title text-light font-weight-bold p-2" id="exampleModalCenterTitle">ADD SCHEDULE</h5>
        </div>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="text-light" aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
        <div class="form-group p-12">
          <div class="row p-2">
           
              <div class="col-4 p-1">
                 <label for="hireddate">Date:</label>
                  <input id="add_date" type="date" name="adddate" class="form-control datetimepicker" placeholder="yyyy-mm-dd" >
                  <div class="invalid-feedback" id="invalid-add_date"></div>
               </div>
                <div class="col-4 p-1">
                 <label for="hireddate">From Date:</label>
                  <input id="add_fromtime" type="time" name="addfromtime" class="form-control datetimepicker">
                  <div class="invalid-feedback" id="invalid-add_fromtime"></div>
               </div>
              <div class="col-4 p-1">
                 <label for="hireddate">From Date:</label>
                  <input id="add_totime" type="time" name="addtotime" class="form-control datetimepicker">
                  <div class="invalid-feedback" id="invalid-add_totime"></div>
               </div>
             <div class="col-12 p-1">
                <div class="form-group">
                  <label>Employee <code>*</code></label>
                  <select class="form-control select2" id="add_employees" name="department"  multiple="multiple" style="width: 100%;" >
                    <option value="0">Select employee name</option>
                    <option value="1">Kim Chou</option>
                    <option value="2">Ryan Kim Mendoza</option>
                  </select>
                  <div class="invalid-feedback" id="invalid-add_employees"></div>  
                </div>
             </div>  

         
          <div class="col-12 p-2">
            <label>Status</label>
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
          <button type="button" class="btn btn-primary" data-toggle="modal" id="btn-save" name="save" >ADD</button>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="add_schedule_confirmation"  role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered"  role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="form-header">
                 <center><img class="isometric confirmationisometric" width="230px" height="100px" sytle="" src="<?=base_url(); ?>pages/assets/img/isometric/addpicture.png"></center>
               <h3 class="text-red p-2" style="text-align: center">ADD PAYMENT SETUP</h3>
              <p style="text-align: center">Are you sure you want to add new Schedule?</p></center>
              <div class="invalid-feedback" id="status-invalid"></div>
              <br> 
        </div>
      <div class="modal-footer">
        <div class="w-100 text-center">
          <button type="button" class="btn btn-outline-danger" data-dismiss="modal" id="cncl-add">NO</button>
          <button type="button" class="btn btn-primary add">YES</button>
        </div>
      </div>
    </div>
  </div>
 </div>
</div>  
</div>

<div class="modal fade" id="edit_schedule" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg"  role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <div class="w-100">
            <h5 class="modal-title text-light p-2 font-weight-bold" id="exampleModalCenterTitle">EDIT SCHEDULE</h5>
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="text-light" aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <div class="form-group p-12">
          <div class="row p-2">
           
              <div class="col-4 p-1">
                 <label for="hireddate">Date:</label>
                  <input id="editdate" type="date" name="editdate" class="form-control datetimepicker" placeholder="yyyy-mm-dd" description="date">
                  <div class="invalid-feedback" id="  "></div>
               </div>
                <div class="col-4 p-1">
                 <label for="hireddate">From Time:</label>
                  <input id="editfromtime" type="time" name="editfromtime" class="form-control datetimepicker" description="from time">
                  <div class="invalid-feedback" id="edit-fromtime"></div>
               </div>
              <div class="col-4 p-1">
                 <label for="hireddate">To Time:</label>
                  <input id="edittotime" type="time" name="edittotime" class="form-control datetimepicker" description="to time">
                  <div class="invalid-feedback" id="edit-totime"></div>
               </div>
             <div class="col-12 p-1">
                <div class="form-group">
                  <label>Employee <code>*</code></label>
                  <select class="form-control select2" id="editemployee" name="editemployee"  style="width: 100%;" description="employee">
                  <option value="0">Select employee name</option>
                  <option value="1">Kim Chou</option>
                  <option value="2">Ryan Kim Mendoza</option>
                  </select>
                  <div class="invalid-feedback" id="edit-employee"></div>  
                </div>
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
      <div class="modal-footer">
        <div class="w-100 text-center">
         <button type="button" class="btn submit-btn btn-primary update"> UPDATE</button>
        </div>
      </div>
    </div>
  </div>
 </div> 

<div id="edit_schedule_confirmation" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="form-header">
                <center><img class="isometric confirmationisometric" width="230px" height="100px" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/isometric/updatepicture.jpg">
               <h3 class="text-red p-2" style="text-align: center">UPDATE PAYMENT SETUP</h3>
              <p style="text-align: center">Are you sure you want to update Schedule?</p></center>
              <div class="invalid-feedback" id="status-invalid"></div>
              <br> 
          </div>
           
            <div class="modal-footer">
              <div class="w-100 text-center">
                  <button class="btn cancel-btn btn-outline-danger" id="cncl-edit" >NO</button>
                  <button type="button" class="btn submit-btn btn-primary float-right edit"> YES</button>
              </div>
              </div>
        </div>
      </div>
    </div>
  </div> 





<script type="text/javascript">
  $(document).ready(function() {

   $('.select2').select2();
   
  $('#save').unbind('click').bind('click', function(){
      $('#add_schedule').hide();
      $('#add_schedule_confirmation').modal({backdrop: 'static', keyboard: false},'show');
      event.preventDefault(); 
    });

    $("#cncl-add").unbind('click').bind('click', function(){

      $('#add_schedule_confirmation').modal('hide');
      $('#add_schedule').show();
    }); 

    $('.add').unbind('click').bind('click', function(){
      window.location.replace('<?php echo base_url(); ?>PostSchedule');

    });  

     $('.update').unbind('click').bind('click', function(){

      var IDArray = ['#editdate','#editfromtime','#edittotime','#editemployee'];
      var ErrorIDArray = ['edit-hireddate','edit-fromtime','edit-totime','edit-employee'];
      var editemployee = $("#editemployee").val();

      var ValueArray = [];
      var firstRequired = "";
      for(var i=0;i<IDArray.length;i++){
               if($(IDArray[i]).val().trim()=="" || $(IDArray[i]).val().trim()==""){
                    if(firstRequired==""){
                        firstRequired = IDArray[i];
                    };
                    document.getElementById(ErrorIDArray[i]).innerHTML = "Please provide a " + $(IDArray[i]).attr("description") +".";
                  

                    $(IDArray[i]).addClass('is-invalid');
                    event.preventDefault();
                }else{
                    document.getElementById(ErrorIDArray[i]).innerHTML = "";
                   
                    
                    $(IDArray[i]).removeClass('is-invalid');
                    $(IDArray[i]).addClass('is-valid');
                    event.preventDefault();
                } 
          }
          if(editemployee=="0"){
            document.getElementById("edit-employee").innerHTML = "Please provide an employee name.";
             $("[aria-labelledby='select2-editemployee-container']").addClass('is-invalid');
              ('#editemployee').addClass('is-invalid');
            

          }else{
           
             $("[aria-labelledby='select2-editemployee-container']").addClass('is-valid');
             $('#editemployee').removeClass('is-valid');

          }

          $(firstRequired).focus();
          if(firstRequired==""){
            if($(IDArray[i]).val()=="" || $(IDArray[i]).val()=="") return false;
             $('#edit_schedule').hide();
             $('#edit_schedule_confirmation').modal({backdrop: 'static', keyboard: false},'show');
            event.preventDefault(); 
            return false;
          }  

     
    

    }); 

     $("#cncl-edit").unbind('click').bind('click', function(){
      $('#edit_schedule_confirmation').modal('hide');
      $('#edit_schedule').show();
    }); 

     $(".edit").unbind('click').bind('click', function(){
      alert("sample");

      

      window.location.replace('<?php echo base_url(); ?>PostSchedule');

    }); 


    const elemArrId     = ["add_date","add_fromtime","add_totime","add_employees"];
    const elemArrTxt    = ["Date","Start time","End time","List of Employees"];
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
        $("#cash_in_out").modal("hide");
        $('#cash_in_out_confirmation').modal({backdrop: 'static', keyboard: false},'show');

      }

    });

    $(".btn-add-no-cashin-cashout").click(function(){
      $("#cash_in_out").modal("show");
    });




  });  
</script>
