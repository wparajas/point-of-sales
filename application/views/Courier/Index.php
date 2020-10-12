<h3 class="page-title">Courier</h3>
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12">
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb pl-0">
                  <li class="breadcrumb-item"><a href="<?= base_url(). 'Dashboard' ?>"><i class="material-icons fs-16">dashboard</i> Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Courier Setup</li>
              </ol>
          </nav>
        </div>
        <div class="col-md-12">
            <div class="ms-panel">
              <div class="ms-panel-header bg-primary d-flex justify-content-between align-items-center">
                  <h6 class="text-light">COURIER SETUP</h6>
                  <button class="btn btn-outline-red" data-toggle="modal" data-target="#add_courier" data-backdrop="static" data-keyboard="false">
                    <i class="fa fa-plus-square fa-lg"></i> ADD COURIER
                  </button>
              </div>
              <div class="ms-panel-body">
                <div class="row">
                  <div class="col-12">
                    <div class="table-responsive container-fluid">
                      <table id="tablecourier" class="table table-bordered thead-primary dtBasicExample">
                        <thead>
                          <tr class="text-center">
                            <th>CODE</th>
                            <th>COURIER NAME</th>
                            <th>CONTACT NUMBER</th>
                            <th>TIN NUMBER</th>
                            <th>STATUS</th>
                            <th>ACTION</th>
                          </tr>
                        </thead>
                          <tbody>
                          <?php foreach ($data as $item) { ?> 
                         
                            <tr>
                              <td><?php echo $item->couriercode; ?></td>
                              <td><?php echo $item->courier_name; ?></td>
                              <td><?php echo $item->courier_contactnumber; ?></td>
                              <td><?php echo $item->courier_tinnumber; ?></td>
                              <td class="text-center">
                                <?php if($item->courier_status=="1"){
                                    echo '<span class="badge badge-outline-success"> Active</span>';
                                  }
                                    else{ echo '<span class="badge badge-outline-danger">Inactive</span>';
                                  }
                                ?> 
                              </td>
                              <td>
                                <div class="drop-down float-right">
                                  <a href="#" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false"> <i class="material-icons" style="font-size: 1.5rem">more_vert</i></a>
                                  <ul class="dropdown-menu dropdown-menu-right">
                                    <li class="ms-dropdown-list">
                                      <a class="media p-2" href="#">
                                        <div class="media-body editcourier"
                                             data-controls-modal="your_div_id" 
                                             data-backdrop="static" 
                                             data-keyboard="false" 
                                             data-toggle="modal" 
                                             data-target="#edit_courier" 
                                             id="<?php echo $item->courierID; ?>" 
                                             data-name="<?php echo $item->courier_name; ?>" 
                                             data-contact="<?php echo $item->courier_contactnumber; ?>"
                                             data-tin="<?php echo $item->courier_tinnumber; ?>" 
                                             data-status="<?php echo $item->menugroupstatus; ?>">
                                             data-id="<?php echo $item->menugroupID; ?>"
                                             >
                                          <i class="fas fa-pencil-alt text-secondary" style="font-size: 1rem"></i><span> Edit</span>
                                        </div>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </td>
                            </tr>
                            <?php } ?>
                          </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Modal Courier -->
<div class="modal fade" id="add_courier" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header d-flex justify-content-between align-items-start bg-primary">
         <h5 class="modal-title text-light" id="exampleModalCenterTitle">ADD COURIER</h5>
         <button type="button" class="close btn-close-add-courier" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="text-light">&times;</span></button>
     </div>
      <div class="modal-body">
      
        <div class="form-group">
          <label>Courier Name <strong class="text-red">*</strong></label>
          <input type="text" class="form-control" name="add-courierName" id="add-courierName" placeholder="Courier Name" description="currier Name">
          <div class="invalid-feedback" id="add-invalid-courierName"></div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label>Contact Number <strong class="text-red">*</strong></label>
              <input type="text" class="form-control" placeholder="Contact Number" name="addcourierContactnumber" id="addcourierContactnumber"description="contact number" minlength=13 autocomplete="off">
              <div class="invalid-feedback" id="add-courierContactnumber"></div>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label>TIN Number <strong class="text-red">*</strong></label>
              <input type="text" class="form-control" placeholder="TIN Number" name="add-courierTin" id="add-courierTin"description="tin number" placeholder="000-000-000" minlength=11 autocomplete="off">
              <div class="invalid-feedback" id="add-invalid-courierTin"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label>VAT <strong class="text-red">*</strong></label>
              <div class="d-flex align-items-center">
                <span> NO &nbsp;</span>
                <label class="ms-switch">
                  <input type="checkbox" checked="" name="add-courierVat"id="add-courierVat" value="1"> 
                  <span class="ms-switch-slider ms-switch-success round"></span>
                </label> 
                <span>&nbsp; YES </span>
              </div>
            </div>
            <div class="invalid-feedback" id="add-invalid-courierVat"></div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label>Status <strong class="text-red">*</strong></label>
              <div class="d-flex align-items-center">
                <span> Inactive &nbsp;</span> 
                <label class="ms-switch">
                  <input type="checkbox" checked="" name="add-courierStatus" id="add-courierStatus" value="1"> 
                  <span class="ms-switch-slider ms-switch-success round"></span>
                </label> 
                <span>&nbsp; Active </span>
              </div>
            </div>
            <div class="invalid-feedback" id="add-invalid-courierStatus"></div>
          </div>
        </div>
        <div class="mt-3 d-flex justify-content-between">
          <h4 class="modal-title has-icon ms-icon-round text-left mb-2 text-red">COURIER PACKAGES</h4>
          <div class="input-group mx-1 w-auto">
            <div class="input-group-prepend">
              <span class="input-group-text text-white" id="basic-addon1" style="background: #ff0018"><i class="fas fa-plus"></i></span>
            </div>
            <input type="text" aria-label="Username" aria-describedby="basic-addon1" onkeypress="return numbersOnly(event)" maxlength="3" style="width: 50px;" name="addcourierrow" id="addcourierrow" class="addcourierrow" data-todo="add">
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-bordered thead-primary text-center" id="tablegroup2">
            <thead >
              <tr>
                <th>COURIER CODE</th>
                <th>ITEM</th>
                <th>DESCRIPTION</th>
                <th>RATE</th>
                <th>ACTION</th>
              </tr>
            </thead>
            <tbody id="add-tbody-courier-package">
              <tr class="add-tr-courier-package">
                <td class="">
                <input type="text" class="form-control addcouriercode" id="addcouriercode" name="addcouriercode" description ="courier code" disabled>
                <div class="invalid-feedback" id="add-addcouriercode"></div>

                </td>
                <td class="">
                <input type="text" id="additename" name="additename" class="form-control additename" description ="item name">
                <div class="invalid-feedback" id="add-additename"></div>
                </td>
                <td class="">
                <input type="text" id="adddescription" name="adddescription" class="form-control adddescription" description ="description">
                <div class="invalid-feedback" id="add-adddescription"></div>
                </td>
                <td class="">
                <input type="text" id="addrate" name="addrate" class="form-control addrate" description="rate" data-inputmask="'alias': 'currency'" autocomplete="off"value="0.00">
                <div class="invalid-feedback" id="add-addrate"></div>
                </td>
                <td class="courier-package-remove-table">
                  <button class="btn btn-outline-danger removetablerow" data-todo="add" style="min-width: 1rem; padding: .3rem;">&nbsp;<i class="fas fa-minus"></i></button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer">
         <div class="w-100 text-center">
             <button type="button" class="btn btn-primary submit-btn" id="save" name="save"> ADD</button>
         </div>
     </div>
    </div>
  </div>
</div>

<!-- Confirmation Add Modal Courier  -->
<div class="modal fade" id="confirmation_add" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-min" role="document">
    <div class="modal-content">
        <div class="modal-body pb-3 text-center">
          <button type="button" class="close" id="btn-add-courier-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <img class="isometric confirmationisometric" width="230px" height="100px" style="text-align: center" src="<?=base_url(); ?>pages/assets/img/modal/confirmation.png">
        <h1 class="text-red text-center">SAVE COURIER</h1>
            <h6 class="text-center my-2">Are you sure you want to save courier?</h6>
            <div class="invalid-feedback" id="confirmation-add-invalid"></div>
        </div>
        <div class="modal-footer">
           <div class="w-100 text-center">
               <button type="button" data-dismiss="modal" class="btn btn-outline-primary shadow-none" data-dismiss="modal"id="btn-cnl" name="btn-cnl">NO</button>
               <button type="button" class="btn btn-primary shadow-none" id="btnsave" name="btnsave">YES</button>
           </div>
       </div>
    </div>
  </div>
</div>

<!-- Edit Modal Courier -->
<div class="modal fade" id="edit_courier" tabindex="-1" role="dialog" aria-labelledby="edit_courier" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header d-flex justify-content-between align-items-start bg-primary">
         <h5 class="modal-title text-light" id="exampleModalCenterTitle">EDIT COURIER</h5>
         <button type="button" class="close btn-close-edit-courier" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="text-light">&times;</span></button>
     </div>
      <div class="modal-body">
      
        <div class="form-group">
          <label>Courier Name <strong class="text-red">*</strong></label>
          <input type="text" class="form-control" name="edit-courierName" id="edit-courierName" placeholder="Courier Name">
          <div class="invalid-feedback" id="edit-invalid-courierName"></div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label>Contact Number <strong class="text-red">*</strong></label>
              <input type="text" class="form-control" placeholder="Contact Number" name="edit-courierContactnumber" id="edit-courierContactnumber" minlength=13 autocomplete="off">
              <div class="invalid-feedback" id="edit-invalid-courierContactnumber"></div>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label>TIN Number <strong class="text-red">*</strong></label>
              <input type="text" class="form-control" placeholder="TIN Number" name="edit-courierTin" id="edit-courierTin">
              <div class="invalid-feedback" id="edit-invalid-courierTin"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label>VAT <strong class="text-red">*</strong></label>
              <div class="d-flex align-items-center">
                <span> NO &nbsp;</span>
                <label class="ms-switch">
                  <input type="checkbox" checked="" name="edit-courierVat"id="edit-courierVat"> 
                  <span class="ms-switch-slider ms-switch-success round"></span>
                </label> 
                <span>&nbsp; YES </span>
              </div>
            </div>
            <div class="invalid-feedback" id="edit-invalid-courierTin"></div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label>Status <strong class="text-red">*</strong></label>
              <div class="d-flex align-items-center">
                <span> Inactive &nbsp;</span> 
                <label class="ms-switch">
                  <input type="checkbox" checked="" name="edit-courierStatus" id="edit-courierStatus"> 
                  <span class="ms-switch-slider ms-switch-success round"></span>
                </label> 
                <span>&nbsp; Active </span>
              </div>
            </div>
            <div class="invalid-feedback" id="edit-invalid-courierStatus"></div>
          </div>
        </div>
        <div class="mt-3 d-flex justify-content-between">
          <h4 class="modal-title has-icon ms-icon-round text-left mb-2 text-red">COURIER PACKAGES</h4>
          <div class="input-group mx-1 w-auto">
            <div class="input-group-prepend">
              <span class="input-group-text text-white" id="basic-addon1" style="background: #ff0018"><i class="fas fa-plus"></i></span>
            </div>
            <input type="text" aria-label="Username" aria-describedby="basic-addon1" onkeypress="return numbersOnly(event)" maxlength="3" style="width: 50px;" name="editcourierrow" id="editcourierrow" class="editcourierrow" data-todo="edit">
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-bordered thead-primary text-center" id="tablegroup2">
            <thead >
              <tr>
                <th>COURIER CODE</th>
                <th>ITEM</th>
                <th>DESCRIPTION</th>
                <th>RATE</th>
                <th>ACTION</th>
              </tr>
            </thead>
            <tbody id="edit-tbody-courier-package">
              <tr class="edit-tr-courier-package">
                <td class="">
                  <input type="text" value="LBC" class="form-control" disabled>
                </td>
                <td class="">
                  <input type="text" name="" class="form-control edit-courier_packageItem">
                  <div class="invalid-feedback edit-invalid-courier_packageItem"></div>
                </td>
                <td class=""><?php echo $title; ?> 
                  <input type="text" name="" class="form-control edit-courier_packageDescription">
                  <div class="invalid-feedback edit-invalid-courier_packageDescription"></div>
                </td>
                <td class="">
                  <input type="text" name="" class="form-control edit-courier_packageRate">
                  <div class="invalid-feedback edit-invalid-courier_packageRate"></div>
                </td>
                <td class="courier-package-remove-table">
                  <button class="btn btn-outline-danger removetablerow" data-todo="edit" style="min-width: 1rem; padding: .3rem;">&nbsp;<i class="fas fa-minus"></i></button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer">
         <div class="w-100 text-center">
             <button type="button" class="btn btn-primary submit-btn"id="btn-edit-courier"name="save"> UPDATE</button>
         </div>
     </div>
    </div>
  </div>
</div>
<?php 
  if($this->session->flashdata('success')!=""){
    echo '<script type="text/javascript"> showSuccessToast("'.$this->session->flashdata("success").'")</script>';
  }
?>
<script>
  $(document).ready(function() {
    $('#addcourierContactnumber').mask('0000-000-0000');
    $('#add-courierTin').mask('000-000-000');

    // DATATABLES
    $("#tablecourier").dataTable();

    function updateTable(todo = "add") {
      $("."+todo+"-tr-courier-package").each(function(i) {

        $("."+todo+"-tr-courier-package", this).attr("number", (i));
      //   // INPUT
      $("."+todo+"-courier_packageItem", this).attr("id", todo+"-courier_packageItem"+i);
      $("."+todo+"-courier_packageDescription", this).attr("id", todo+"-courier_packageDescription"+i);
      $("."+todo+"-courier_packageRate", this).attr("id", todo+"-courier_packageRate"+i);
      $("."+todo+"-invalid-courier_packageItem", this).attr("id", todo+"-invalid-courier_packageItem"+i);
      $("."+todo+"-invalid-courier_packageDescription", this).attr("id", todo+"-invalid-courier_packageDescription"+i);
      $("."+todo+"-invalid-courier_packageRate", this).attr("id", todo+"-invalid-courier_packageRate"+i);
      //   // REMOVE ELEMENT
        $(this).attr("id", todo+"-table-row-id"+(i));
        $(".removetablerow", this).attr("id", (i));
      });
    }

        // ADDING NEW ROW
    $(document).on("keyup", ".addcourierrow", function(e) {
      const rownumber = $(this).val();
      const todo = $(this).data("todo");
      // console.log(todo);
      if (e.which === 13) {
        const courierElementLength = $("."+todo+"add-tr-courier-package").length;
        const newLength = rownumber - courierElementLength;
        let rows = ""
        for (var i=0; i<newLength; i++) {
          
          let html = "";
          html += '<tr class="'+todo+'-tr-courier-package">';
          html += '<td class="">';
          html += '<input type="text" class="form-control addcouriercode" id="addcouriercode" name="addcouriercode" description ="courier code"disabled>';
          html += '<div class="invalid-feedback" id="add-addcouriercode"></div>';
          html += '</td>';
          html += '<td>';
          html += '<input type="text" id="additename" name="additename" class="form-control additename" description ="item name">';
          html += '<div class="invalid-feedback" id="add-additename"></div>';
          html += '</td>';
          html += '<td>';
          html += '<input type="text" id="adddescription" name="adddescription" class="form-control adddescription" description="description">';
          html += '<div class="invalid-feedback" id="add-adddescription"></div>';
          html += '</td>';
          html += '<td>';
          html += '<input type="text" id="addrate" name="addrate" class="form-control addrate" description="rate">';
          html += '<div class="invalid-feedback" id="add-addrate"></div>';
          html += '</td>';
          html += '<td class="courier-package-table-remove">';
          html += '<button class="btn btn-outline-danger removetablerow" data-todo="'+todo+'" style="min-width: 1rem; padding: .3rem;">&nbsp;<i class="fas fa-minus"></i></button>';
          html += '</td>';
          html += '</tr>';
          rows += html;
        }
        $("#"+todo+"-tbody-courier-package").prepend(rows);
        updateTable(todo);
      }
    });


    updateTable("add");

    $('#save').unbind('click').bind('click', function(){
     
         var IDArray = ['#add-courierName','#addcourierContactnumber', '#add-courierTin', '#add-courierVat',
                        '#add-courierStatus','.addcouriercode','.additename','.adddescription','.addrate'];
         var ErrorIDArray = ['add-invalid-courierName','add-courierContactnumber','add-invalid-courierTin','add-invalid-courierVat',
                        'add-invalid-courierStatus','add-addcouriercode','add-additename','add-adddescription','add-addrate'];
        var ValueArray = [];	
        var firstRequired = "";
        var navIndex = 0;
            for(var i=0;i<IDArray.length;i++){
              if(i==3 || i==4 ||  i==5) continue;
               if($(IDArray[i]).val()==null || $(IDArray[i]).val()==""){
                    if(firstRequired==""){
                        firstRequired = IDArray[i];
                    };
                    $(IDArray[i]).addClass('is-invalid');
                    document.getElementById(ErrorIDArray[i]).innerHTML = "Please provide a " + $(IDArray[i]).attr("description") +".";
                
              }else{
                if(i==1){   
                 if($(IDArray[i]).val().length<13){ 
                  if(firstRequired==""){
                      firstRequired = IDArray[i];
                    };  
                    document.getElementById(ErrorIDArray[i]).innerHTML = "Mobile number must be 11 digit ";
                    $(IDArray[i]).addClass('is-invalid'); 
                  }else{
                  document.getElementById(ErrorIDArray[i]).innerHTML = "";	
                  $(IDArray[i]).removeClass('is-invalid');
                  $(IDArray[i]).addClass('is-valid');
                  event.preventDefault();
                  }
                }else if(i==2){
                if($(IDArray[i]).val().length<11){
                  if(firstRequired==""){
                    firstRequired = IDArray[i];
                  };
                  document.getElementById(ErrorIDArray[i]).innerHTML = "TIN number must be 11 digit ";
                  $(IDArray[i]).addClass('is-invalid');  
                }else{
                  document.getElementById(ErrorIDArray[i]).innerHTML = "";
                  $(IDArray[i]).removeClass('is-invalid');
                  $(IDArray[i]).addClass('is-valid');
                  event.preventDefault();
                }  
              }else{
              if($(IDArray[i]).val().trim()==""){
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
        }
      }      
      $(firstRequired).focus();
          if(firstRequired==""){
            if($(IDArray[i]).val()=="" || $(IDArray[i]).val()=="") return false;
            $('#add_courier').hide();
            $('#confirmation_add').modal({backdrop: 'static', keyboard: false},'show');
            event.preventDefault(); 
            return false;
          } 
   
  });
    $('#btn-cnl').unbind('click').bind('click', function(){
     $('#confirmation_add').hide();
      $('#add_courier').show();
   });
    $('#btnsave').unbind('click').bind('click', function(){
      var courierVat = 0;
      var courierstatus = 0;
      var totaladdcouriercode = [];
      var totalitename = [];
      var totaldescription = [];
      var totalrate = [];
      var addcourierName = $('#add-courierName').val();
      var addcourierContactnumber = $('#addcourierContactnumber').val();
      var addcourierTin = $('#add-courierTin').val();
      var statuscourierVat = $('input[name="add-courierVat"]:checked').val();
      var addcourierStatus = $('input[name="add-courierStatus"]:checked').val();
    
       if(statuscourierVat==null){
        var courierVat =0;
       }else{
        var courierVat = statuscourierVat;
       }
       if(addcourierStatus==null){
        var courierstatus =0;
       }else{
        var courierstatus = addcourierStatus;
       }
      //  $(".addcouriercode").each(function(){
      //   totaladdcouriercode.push($(this).val());
      //   });
        $(".additename").each(function(){
          totalitename.push($(this).val());
        }); 
        $(".adddescription").each(function(){
          totaldescription.push($(this).val());
        }); 
        $(".addrate").each(function(){
          totalrate.push($(this).val());
        });
        $.ajax({
          url : "<?php echo site_url('Courier/save'); ?>",
          method : "POST",
          data : {addcourierName:           addcourierName,      addcourierContactnumber:  addcourierContactnumber,
                  addcourierTin:            addcourierTin,        courierVat:               courierVat,
                  courierstatus:            courierstatus,       totalitename:             totalitename, 
                      totaldescription:     totaldescription,    totalrate:                totalrate},
                  async : true,
        dataType : 'json',
        success: function(data){ 
          var result = data.split('|');
          if(result[0]=="false"){
          document.getElementById("dd-invalid-courierName").innerHTML = result[1];
          $('#add-courierName').addClass('is-invalid');
          $("#add-courierName").focus(); 
          $('#confirmation_add').modal('hide');
          $('#add_courier').show();
          
        }else{
          window.location.replace('<?php echo base_url(); ?>courier');
        }     
        },
        error: function(request, textStatus, error) {

        }
        });
       return false;      

        });      
         

    $(document).on("click", ".btn-close-add-courier, .btn-close-edit-courier", function() {
      clearInputs();
    })

    $(document).on("click", "#btn-edit-courier-close", function() {
      $("#edit_courier").modal("show");
      $("#confirmation_edit").modal("hide");
    })

   /* $(document).on("click", "#btn-add-courier-close", function() {
      $("#add_courier").modal("show");
      $("#confirmation_add").modal("hide");
    })*/

    $(document).on("click", "#btn-edit-courier", function() {
      // UPDATING TABLE
      updateTable("edit");

      const validate = validateInputs("edit");
      if (validate) {
        $("#edit_courier").modal("hide");
        $("#confirmation_edit").modal("show");
      }
    })

    $(document).on("click", "#btn-add-courier", function() {
      const validate = validateInputs("add");
      if (validate) {
        $("#add_courier").modal("hide");
        $("#confirmation_add").modal("show");
      }
    })

    // REMOVE TABLE ROW
    $(document).on("click", ".removetablerow", function(e) {
      e.preventDefault();
      const id = $(this).attr("id");
      const todo = $(this).data("todo");
      console.log(todo);
      const elementLength = $("."+todo+"-tr-courier-package").length;
      if (elementLength > 1) {
        $("#"+todo+"-table-row-id"+id).remove();
      } 
      
      // UPDATING TABLE
      updateTable(todo);
    });

  })
</script>