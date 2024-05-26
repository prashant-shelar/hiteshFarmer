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
               <h1>Distributer </h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a>Home</a></li>
                  <li class="breadcrumb-item active">Distributer </li>
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
               <input type="hidden" class="form-control" id="distributer_id" name="distributer_id"/>
               <div class="card-body">
                  <div class="card card-info">
                     <div class="card-header">
                        <h3 class="card-title">Distributer</h3>
                     </div>

                     <div class="card-body">
                        <div class="row">
                        
                           
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="email"> Distibuter Name <font color="red">*</font></label>
                                        <input type="text" class="form-control" id="distributer_name" name="distributer_name" placeholder="Distributer Name"/>
                                    </div>
                               </div>
                           
                               <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="email"> Distibuter Address <font color="red">*</font></label>
                                        <input type="text" class="form-control" id="distributer_address" name="distributer_address" placeholder="Distributer Address"/>
                                    </div>
                                </div>

                               <div class="col-sm-4">   
                                    <div class="form-group">
                                        <label for="email"> Distibuter Mobile <font color="red">*</font></label>
                                        <input type="text" class="form-control" id="distributer_mobile" name="distributer_mobile" onkeypress="return isMobileNumber(event,'distributer_mobile')" placeholder="Distributer Mobile"/>
                                    </div>
                               </div>

                               <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="email"> Distibuter Email <font color="red">*</font></label>
                                        <input type="text" class="form-control" id="distributer_email" name="distributer_email" placeholder="Distributer Email"/>
                                    </div>
                               </div>
                               <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="email"> Org Registation No <font color="red">*</font></label>
                                        <input type="text" class="form-control" id="dis_reg" name="ret_reg" placeholder="Registation No"/>
                                    </div>
                               </div>

                               <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="email">  Org Name <font color="red">*</font></label>
                                        <input type="text" class="form-control" id="dis_org" name="ret_org" placeholder="Organation Name"/>
                                    </div>
                               </div>

                               <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="email">  Org Address <font color="red">*</font></label>
                                        <input type="text" class="form-control" id="dis_org_add" name="ret_org_add" placeholder=" Organation Address"/>
                                    </div>
                               </div>

                               <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="email">  Org Office Address <font color="red">*</font></label>
                                        <input type="text" class="form-control" id="dis_org_add_office" name="dis_org_add_office" placeholder=" Organation Office Address"/>
                                    </div>
                               </div>

                               <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="email">  Org Email <font color="red">*</font></label>
                                        <input type="text" class="form-control" id="dis_org_email" name="dis_org_email" placeholder="Organation Email"/>
                                    </div>
                               </div>

                               <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="email"> Organation Mobile No <font color="red">*</font></label>
                                        <input type="text" class="form-control" id="dis_org_mob" name="dis_org_mob" onkeypress="return isMobileNumber(event,'ret_org_mob')" placeholder="Retailer Organation Mobile No"/>
                                    </div>
                               </div>

                               <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="email"> Distibuter PAN <font color="red">*</font></label>
                                        <input type="text" class="form-control" id="dis_pan" name="dis_pan" placeholder="Distributer PAN"/>
                                    </div>
                               </div>

                               <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="email"> Distibuter AADHAR <font color="red">*</font></label>
                                        <input type="text" class="form-control" id="dis_aadhar" name="dis_aadhar" placeholder="Distributer AADHAR"/>
                                    </div>
                               </div>

                               <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="email"> Distibuter State <font color="red">*</font></label>
                                         <select  class="form-control" id="dis_state" name="dis_state">
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
                                        <label for="email"> Distibuter Distract <font color="red">*</font></label>
                                        <input type="text" class="form-control" id="dis_distract" name="dis_distract" placeholder="Distributer Distract"/>
                                    </div>
                               </div>

                               <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="email"> Distibuter Taluka <font color="red">*</font></label>
                                        <input type="text" class="form-control" id="dis_tal" name="dis_tal" placeholder="Distributer Taluka"/>
                                    </div>
                               </div>

                              
                          
                           <input type="hidden" name="distributer_createdat" value="<?php echo date('d-m-y'); ?>"/>
                           <input type="hidden" name="distributer_status" value="1"/>

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
                  <h3 class="card-title">List of Distributers</h3>
                  <div class="card-tools">
                     <button type="button" class="btn btn-success btn-block" onclick="onSelect('add')">
                        <i class="fa fa-edit"></i> Add Distibuter
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
   var tableName = "distributer";
   var fieldName = "distributer_id";
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
         data: {tableSql: "select distributer_id,distributer_name,distributer_address from distributer order by distributer_id desc",
            field: fieldName, perpage: perPage, pageno: pageNo, Permission: "ACTIONSEDIT"},
         success: function (data) {
            $("#applytable").html(data);
         }
      });
   }

   $("#add_form").on('submit', (function (e) {

     
      
      if($("#distibuter_name").val() == ""){
         alert("Please enter the Distributer Name!");
         return false;
      }
      
      if($("#distributer_address").val() == ""){
         alert("Please enter the Distributer Address!");
         return false;
      }

      if($("#distributer_mobile").val() == ""){
         alert("Please enter the Distributer Mobile!");
         return false;
      }

      if($("#distributer_email").val() == ""){
         alert("Please enter the Distributer Email!");
         return false;
      }
   
      e.preventDefault();
      $.ajax({
         url: "../action/distibuterAcion.php",
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
         url: "../action/distibuterAcion.php",
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
