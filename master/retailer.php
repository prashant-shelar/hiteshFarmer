<?php
include('../action/dbconnect.php');
include('../them/header.php');
include('../action/getList.php');
$listobj = new getList();
?>


<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Retailer </h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a>Home</a></li>
                  <li class="breadcrumb-item active">Retailer </li>
               </ol>
            </div>
         </div>
      </div><!-- /.container-fluid -->
   </section>

   <!-- Main content -->
   <section class="content">
      <div class="container-fluid">

         <div id="madd">
               
            <form class="form-horizontal" id="add_form">

               <input type="hidden" id="action" name="action" value="add"/>
               <input type="hidden" class="form-control" id="ret_id" name="ret_id"/>
               <div class="card-body">
                  <div class="card card-info">
                     <div class="card-header">
                        <h3 class="card-title">Retailer</h3>
                     </div>

                     <div class="card-body">
                        <div class="row">
                               
                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="email">Select  Distibuter <font color="red">*</font></label>
                                    <select  class="form-control" id="ret_dis_id" name="ret_dis_id">
                                       <option value="">Select</option>
                                       <?php
                                       $listdata = $listobj->MasterLoadList($conn, 'distributer');
                                          while ($row = $listdata->fetch_assoc()) {
                                             ?>
                                             <option value="<?php echo $row["distributer_id"] ?>"> <?php echo $row["distributer_name"] ?></option>
                                          <?php } ?>
                                    </select>
                                 </div>
                              </div>
                           
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="email"> Full Name <font color="red">*</font></label>
                                        <input type="text" class="form-control" id="ret_name" name="ret_name" placeholder="Retailer Name"/>
                                    </div>
                               </div>
                           
                               <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="email"> Retailer Address <font color="red">*</font></label>
                                        <input type="text" class="form-control" id="ret_add" name="ret_add" placeholder="Retailer Address"/>
                                    </div>
                                </div>

                               <div class="col-sm-4">   
                                    <div class="form-group">
                                        <label for="email"> Retailer Mobile <font color="red">*</font></label>
                                        <input type="text" class="form-control" id="ret_mob" name="ret_mob" onkeypress="return isMobileNumber(event,'ret_mob')" placeholder="Retailer Mobile"/>
                                    </div>
                               </div>

                               <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="email"> Org Registation No <font color="red">*</font></label>
                                        <input type="text" class="form-control" id="ret_reg" name="ret_reg" placeholder="Retailer Registation No"/>
                                    </div>
                               </div>

                               <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="email">  Org Name <font color="red">*</font></label>
                                        <input type="text" class="form-control" id="ret_org" name="ret_org" placeholder="Retailer Organation Name"/>
                                    </div>
                               </div>

                               <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="email">  Org Address <font color="red">*</font></label>
                                        <input type="text" class="form-control" id="ret_org_add" name="ret_org_add" placeholder="Retailer Organation Address"/>
                                    </div>
                               </div>

                               <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="email">  Org Office Address <font color="red">*</font></label>
                                        <input type="text" class="form-control" id="ret_org_add_office" name="ret_org_add_office" placeholder="Retailer Organation Office Address"/>
                                    </div>
                               </div>

                               <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="email">  Org Email <font color="red">*</font></label>
                                        <input type="text" class="form-control" id="ret_org_email" name="ret_org_email" placeholder="Retailer Organation Email"/>
                                    </div>
                               </div>

                               <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="email"> Retailer Organation Mobile No <font color="red">*</font></label>
                                        <input type="text" class="form-control" id="ret_org_mob" name="ret_org_mob" onkeypress="return isMobileNumber(event,'ret_org_mob')" placeholder="Retailer Organation Mobile No"/>
                                    </div>
                               </div>

                               <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="email"> Retailer Print Type <font color="red">*</font></label>
                                        <input type="text" class="form-control" id="ret_print_type" name="ret_print_type" placeholder="Retailer Print Type"/>
                                    </div>
                               </div>

                               <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="email"> Retailer Print Type <font color="red">*</font></label>
                                        <input type="text" class="form-control" id="ret_img_header" name="ret_img_header" placeholder="Retailer image"/>
                                    </div>
                               </div>

                               <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="email"> PAN <font color="red">*</font></label>
                                        <input type="text" class="form-control" id="ret_pan" name="ret_pan" placeholder="PAN"/>
                                    </div>
                               </div>

                               <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="email"> AADHAR <font color="red">*</font></label>
                                        <input type="text" class="form-control" id="ret_aadhar" name="ret_aadhar" placeholder="AADHAR"/>
                                    </div>
                               </div>

                               <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="email"> State <font color="red">*</font></label>
                                        <select  class="form-control" id="ret_state" name="ret_state">
                                       <option value="">Select</option>
                                       <?php
                                      // $listdata = $listobj->MasterLoadList($conn, 'distributer');
                                      //    while ($row = $listdata->fetch_assoc()) {
                                             ?>
                                             <option value="Maharastra"> Maharastra</option>
                                             <option value="Gujrat"> Gujrat</option>
                                             <option value="MP"> MP</option>
                                          <?php // } ?>
                                    </select>
                                    
                                       </div>
                               </div>

                               <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="email"> Distract <font color="red">*</font></label>
                                        <input type="text" class="form-control" id="ret_distract" name="ret_distract" placeholder="Distract"/>
                                    </div>
                               </div>

                               <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="email"> Taluka <font color="red">*</font></label>
                                        <input type="text" class="form-control" id="ret_tal" name="ret_tal" placeholder="Taluka"/>
                                    </div>
                               </div> 
                              
                          
                           <input type="hidden" name="ret_created_at" value="<?php echo date('d-m-y'); ?>"/>
                           <input type="hidden" name="ret_status" value="1"/>

                        </div>

                        <div class="row">
                           <div class="col-sm-4">
                              <button type="submit" class="btn btn-info">Save</button>
                              <button style="margin-left: 10px;" type="button" id="cancelbut" class="btn btn-default" onclick="onSelect('list')">Cancel</button>
                           </div>
                        </div>

                     </div>
                  </div>
               </div>
            </form>
            
         </div>

         <div id="mlist">
            <div class="card card-info">
               <div class="card-header">
                  <h3 class="card-title">List of Retailers</h3>
                  <div class="card-tools">
                     <button type="button" class="btn btn-success btn-block" onclick="onSelect('add')">
                        <i class="fa fa-edit"></i> Add Retailer
                     </button>  
                  </div>
               </div>
               <div class="card-body">
                  <div id="applytable"></div>
               </div>
               <div class="card-footer">
               </div>
            </div>
         </div>

      </div>
   </section>
   <!-- /.content -->
</div>

<!-- jquery-validation -->
<script src="../plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../plugins/jquery-validation/additional-methods.min.js"></script>

<script>

 

   $('#madd').hide();
   $('#medit').hide();
   var tableName = "retailer";
   var fieldName = "ret_id";
   var actionName = "";
   var perPage = 10;
   var pageNo = 1;
   let Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
   });

   ongetPage(pageNo);


   function onSelect(operation) {
      switch (operation) {
         case "add":
            $('#madd').show();
            $('#action').val('add');
            $('#mlist').hide();
            break;
         case "list":
            $('#madd').hide();
            $('#mlist').show();
            document.getElementById("add_form").reset();
            ongetPage(1);
            break;
         case "edit":
            $('#madd').show();
            $('#action').val('edit');
            $('#mlist').hide();
            $("#madd :input").prop("disabled", false);
            break;
         default:
            $('#madd').hide();
            $('#mlist').show();
      }
   }

   function ongetPage(pageNo) {
      $.ajax({
         url: "../action/tableCreator.php",
         type: "POST",
         data: {tableSql: "select ret_id,ret_name as Name,ret_org as Org_Name,ret_org_add as Address from retailer order by ret_id desc",
            field: fieldName, perpage: perPage, pageno: pageNo, Permission: "ACTIONSEDIT"},
         success: function (data) {
            $("#applytable").html(data);
         }
      });
   }

   $("#add_form").on('submit', (function (e) {

    if($("#ret_dis_id").val() == ""){
         alert("Please select Distibuter!");
         return false;
      }
      
      if($("#ret_name").val() == ""){
         alert("Please enter the Retailer Name!");
         return false;
      }
      
      if($("#ret_add").val() == ""){
         alert("Please enter the Retailer Address!");
         return false;
      }

      if($("#ret_mob").val() == ""){
         alert("Please enter the Retailer Mobile No!");
         return false;
      }

      if($("#ret_email").val() == ""){
         alert("Please enter the Retailer Email!");
         return false;
      }

      if($("#ret_reg").val() == ""){
         alert("Please enter the Retailer Registation No!");
         return false;
      }

      if($("#ret_org").val() == ""){
         alert("Please enter the Retailer Orgnation!");
         return false;
      }

      if($("#ret_org_add").val() == ""){
         alert("Please enter the Retailer Orgnation Address!");
         return false;
      }

      if($("#ret_org_add_office").val() == ""){
         alert("Please enter the Retailer Orgnation Office Address!");
         return false;
      }

      if($("#ret_org_email").val() == ""){
         alert("Please enter the Retailer Orgnation Email!");
         return false;
      }

      if($("#ret_org_mob").val() == ""){
         alert("Please enter the Retailer Orgnation Mobile No!");
         return false;
      }

   
      e.preventDefault();
      $.ajax({
         url: "../action/retailerAction.php",
         type: "POST",
         data: new FormData(this),
         table_name: tableName,
         contentType: false,
         cache: false,
         processData: false,
         success: function (data) {
            if (JSON.parse(data).status) {
               document.getElementById("add_form").reset();
               Toast.fire({
                  icon: 'success',
                  title: JSON.parse(data).message
               });
               onSelect('list');
            } else {
               document.getElementById("add_form").reset();
               Toast.fire({
                  icon: 'error',
                  title: 'Wrong Request'
               });
            }
         }, error: function () {
         }
      });
   }));

   function onEdit(obj) {
      actionNameN = "singlerecord";
      this.onSelect('edit');
      $.ajax({
         url: "../action/retailerAction.php",
         type: "POST",
         data: {table_name: tableName, key: obj, action: actionNameN, field: fieldName},
         success: function (obj) {
            let object = JSON.parse(obj);
            for (x in JSON.parse(obj)) {
               console.log(object[x]);
               $("#" + x).val(object[x]);
            }
         }, error: function () {
         }
      });
   }


   function isMobileNumber(evt,id) {
   evt = (evt) ? evt : window.event;
   var charCode = (evt.which) ? evt.which : evt.keyCode;
   if (charCode > 31 && (charCode < 48 || charCode > 57)) {
      return false;
   }else if($("#"+id).val().length >= 10){
         return false;
   }
   return true;
}
   
   

</script>
<?php include("../them/footer.php"); ?>
