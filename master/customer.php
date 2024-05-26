
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
               <h1>Customer </h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a>Home</a></li>
                  <li class="breadcrumb-item active">Customer</li>
               </ol>
            </div>
         </div>
      </div><!-- /.container-fluid -->
   </section>

   <!-- Main content -->
   <section class="content">
      <div class="container-fluid">

         <div id="madd">
            <div class="card card-info">
               <div class="card-header">
                  <h3 class="card-title">Customer</h3>
               </div>
               <form class="form-horizontal" id="add_form">

                  <input type="hidden" id="action" name="action" value="add"/>
                  <input type="hidden" class="form-control" id="customer_id" name="customer_id"/>
                  <div class="card-body">
                    

                        <div class="card-body">
                           <div class="row">
                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email"> Name *</label>
                                    <input type="text" class="form-control" id="customer_name" name="customer_name" placeholder="Name"/>
                                 </div>
                              </div>
                              
                               <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">Mobile No *</label>
                                    <input type="text" class="form-control" id="customer_mob_no" name="customer_mob_no" placeholder="Mobile No"/>
                                 </div>
                              </div>
                              
                               <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email"> Address *</label>
                                    <input type="text" class="form-control" id="customer_address" name="customer_address" placeholder="Address"/>
                                 </div>
                              </div>
                              
                               <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email"> Email *</label>
                                    <input type="text" class="form-control" id="customer_email" name="customer_email" placeholder="Email"/>
                                 </div>
                              </div>
                              
                               <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email"> PAN Number*</label>
                                      <input type="text" class="form-control" id="customer_pan" name="customer_pan" placeholder=" PAN Number"/>
                                 </div>
                              </div>
                              
                               <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">Select project *</label>
                                    <select  class="form-control" id="customer_project_id" name="customer_project_id" >
                                       <option>Select</option>
                                       <?php
                                       $listdata = $listobj->MasterLoadList($conn, 'project');
                                          while ($row = $listdata->fetch_assoc()) {
                                             ?>
                                             <option value="<?php echo $row["project_id"] ?>"> <?php echo $row["project_Name"] ?></option>
                                          <?php } ?>
                                    </select>
                                 </div>
                              </div>
                              
                              
                              
                              
                               
                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">Select building *</label>
                                    <select  class="form-control" id="customer_building_id" name="customer_building_id" >
                                       <option>Select</option>
                                       <?php
                                       $listdata = $listobj->MasterLoadList($conn, 'unit');
                                          while ($row = $listdata->fetch_assoc()) {
                                             ?>
                                             <option value="<?php echo $row["building_id"] ?>"> <?php echo $row["building_name"] ?></option>
                                          <?php } ?>
                                    </select>
                                 </div>
                              </div>
                              
                           
                                
                             
                              
                              
                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">Select unit *</label>
                                    <select  class="form-control" id="customer_unit_id" name="customer_unit_id" >
                                       <option>Select</option>
                                       <?php
                                       $listdata = $listobj->MasterLoadList($conn, 'unit');
                                          while ($row = $listdata->fetch_assoc()) {
                                             ?>
                                             <option value="<?php echo $row["unit_id"] ?>"> <?php echo $row["unit_no"] ?></option>
                                          <?php } ?>
                                    </select>
                                 </div>
                              </div>
                              
                              
                              
                            <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">Final Cost*</label>
                                    <input type="text" class="form-control" id="customer_final_cost" name="customer_final_cost" placeholder="Final Cost" />
                                 </div>
                              </div>
                              
                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">Booking Date*</label>
                                    <input type="Date" class="form-control" id="booking_date" name="booking_date" placeholder="Booking Date" />
                                 </div>
                              </div> 
                              
                               <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">Deliver Date </label>
                                    <input type="Date" class="form-control" id="deliver_date" name="deliver_date" placeholder="Deliver Date"/>
                                 </div>
                              </div>
                             
                              
                             
                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">Reference Name</label>
                                    <input type="text" class="form-control" id="reference_name" name="reference_name" placeholder="Reference Name "/>
                                 </div>
                              </div>
                             
                             
                              <input type="hidden" name="updatedat" value="<?php echo date('d-m-y'); ?>"/>
                              <input type="hidden" name="updatedby" value="<?php echo $_SESSION['user_id']; ?>"/>

                           </div>
                        </div>
                   
                  </div>
                  <div class="card-footer">
                     <button type="submit" class="btn btn-info">Save</button>
                     <button type="button" id="cancelbut" class="btn btn-default" onclick="onSelect('list')">Cancel</button>
                  </div>
               </form>
            </div>
         </div>

         <div id="mlist">
            <div class="card card-info">
               <div class="card-header">
                  <h3 class="card-title">List of Customer</h3>
                  <div class="card-tools">
                           <a href="#" class="btn btn-app bg-success" onclick="onSelect('add')">
                        <i class="fas fa-edit"></i> Add
                     </a>
                       
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

<script>

 
 

   $('#madd').hide();
   $('#medit').hide();
   var tableName = "customer";
   var fieldName = "customer_id";
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
         data: {tableSql: "SELECT * from customer  ORDER BY customer_id desc "
          , field: fieldName, perpage: perPage, pageno: pageNo, Permission: "ACTIONSEDIT"},
         success: function (data) {
            $("#applytable").html(data);
         }
      });
   }

   $("#add_form").on('submit', (function (e) {
       
       if(document.getElementById("customer_name").value == ""){
         alert("Please Enter Customer Name!");
         return false;
      }
      
       if(document.getElementById("customer_mob_no").value == ""){
         alert("Please Enter Mobile No!");
         return false;
      }
      
      if(document.getElementById("customer_email").value == ""){
         alert("Please Enter Email!");
         return false;
      }
      
       if(document.getElementById("customer_address").value == ""){
         alert("Please Enter Address!");
         return false;
      }
      
      if(document.getElementById("customer_pan").value == ""){
         alert("Please Enter PAN No!");
         return false;
      }
      
      if(document.getElementById("customer_project_id").value == ""){
         alert("Please Select Project!");
         return false;
      }
      
      if(document.getElementById("customer_building_id").value == ""){
         alert("Please Select Building!");
         return false;
      }
      
      if(document.getElementById("customer_unit_id").value == ""){
         alert("Please Select Unit!");
         return false;
      }
      
      if(document.getElementById("customer_final_cost").value == ""){
         alert("Please Enter Final Cost!");
         return false;
      }
      
       if(document.getElementById("booking_date").value == ""){
         alert("Please Enter Booking Date!");
         return false;
      }
   
   
      e.preventDefault();
      $.ajax({
         url: "../action/customerAction.php",
         type: "POST",
         data: new FormData(this),
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
         url: "../action/customerAction.php",
         type: "POST",
         data: {table_name: tableName, key: obj, action: actionNameN, field: fieldName},
         success: function (data) {
            let object = JSON.parse(data);
            for (x in JSON.parse(data)) {
               console.log(object[x]);
               $("#" + x).val(object[x]);
               
            }
         }, error: function () {
         }
      });
   }


   function onDelete(obj) {
      var result = confirm("Are You Sure Delete Record!");
      if (result === true) {
         actionNameN = "deleterecord";
         $.ajax({
            url: "../action/customerAction.php",
            type: "POST",
            data: {table_name: tableName, key: obj, action: actionNameN, field: fieldName},
            success: function (obj) {
               Toast.fire({
                  icon: 'success',
                  title: 'Record Deleted successfully!'
               });
               ongetPage(pageNo);
            }, error: function () {
            }
         });
      } else {
      }
   }
   
   

</script>
<?php include("../them/footer.php"); ?>
