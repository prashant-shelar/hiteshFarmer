
<?php

include('../them/header.php');
include('../action/dbconnect.php');
include('../action/getList.php');
$listobj = new getList();
?>

<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Supplier </h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a>Home</a></li>
                  <li class="breadcrumb-item active">Supplier</li>
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
                  <h3 class="card-title">Supplier</h3>
               </div>
               <form class="form-horizontal" id="add_form">

                  <input type="hidden" id="action" name="action" value="add"/>
                  <input type="hidden" class="form-control" id="supplier_id" name="supplier_id"/>
                  <div class="card-body">
                     <div class="card card-success">
                        <div class="card-header">
                           <h3 class="card-title">Contractor</h3>
                        </div>

                        <div class="card-body">
                           <div class="row">
                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email"> Name *</label>
                                    <input type="text" class="form-control" id="supplier_name" name="supplier_name" placeholder="Name" />
                                 </div>
                              </div>
                              
                               <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">Mobile No *</label>
                                    <input type="text" class="form-control" id="supplier_mno" name="supplier_mno" placeholder="Mobile No" />
                                 </div>
                              </div>
                              
                               <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email"> GstNo *</label>
                                    <input type="text" class="form-control" id="supplier_gstno" name="supplier_gstno" placeholder=" GstNo" />
                                 </div>
                              </div>
                              
                               <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">address *</label>
                                    <input type="text" class="form-control" id="supplier_address" name="supplier_address" placeholder="address" />
                                 </div>
                              </div>
                              
                               <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">Bank Name </label>
                                    <input type="text" class="form-control" id="bank_name" name="bank_name" placeholder="Bank Name" />
                                 </div>
                              </div>
                              
                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">Account No</label>
                                    <input type="text" class="form-control" id="account_no" name="account_no" placeholder="Account No" />
                                 </div>
                              </div>
                              
                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">IFSC Code</label>
                                    <input type="text" class="form-control" id="ifsc_code" name="ifsc_code" placeholder="IfSC Code" />
                                 </div>
                              </div>
                             
                             
                              <input type="hidden" name="updatedat" value="<?php echo date('d-m-y'); ?>"/>
                              <input type="hidden" name="updatedby" value="<?php echo $_SESSION['user_id']; ?>"/>

                           </div>
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
                  <h3 class="card-title">List of Supplier</h3>
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
   var tableName = "supplier";
   var fieldName = "supplier_id";
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
         data: {tableSql: "SELECT supplier_id, supplier_name, supplier_mno ,supplier_gstno as GSTNO ,supplier_address  from supplier ORDER BY supplier_id desc "
          , field: fieldName, perpage: perPage, pageno: pageNo, Permission: "ACTIONSEDIT"},
         success: function (data) {
            $("#applytable").html(data);
         }
      });
   }

   $("#add_form").on('submit', (function (e) {
   
   
   
      if(document.getElementById("supplier_name").value == ""){
         alert("Please Enter Supplier Name!");
         return false;
      }
      
      if(document.getElementById("supplier_mno").value == ""){
         alert("Please Enter Mobile No!");
         return false;
      }
      
      if(document.getElementById("supplier_gstno").value == ""){
         alert("Please Enter GST No!");
         return false;
      }
      
      if(document.getElementById("supplier_address").value == ""){
         alert("Please Enter Address!");
         return false;
      }
     
      e.preventDefault();
      $.ajax({
         url: "../action/supplierAction.php",
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
         url: "../action/supplierAction.php",
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
            url: "../action/supplierAction.php",
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
