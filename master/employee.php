
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
               <h1>employee   </h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a>Home</a></li>
                  <li class="breadcrumb-item active">item</li>
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
                  <h3 class="card-title">item</h3>
               </div>
               <form class="form-horizontal" id="add_form">

                  <input type="hidden" id="action" name="action" value="add"/>
                  <input type="hidden" class="form-control" id="emp_id" name="emp_id"/>
                  <div class="card-body">
                     <div class="card card-success">
                        <div class="card-header">
                           <h3 class="card-title">employee</h3>
                        </div>

                        <div class="card-body">
                           <div class="row">
                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">Full Name *</label>
                                    <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Full Name" required/>
                                 </div>
                              </div>
                              
                              
                               <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">Date Of Birth *</label>
                                    <input type="text" class="form-control" id="date_of_birth" name="date_of_birth" placeholder="Date Of Birth" required/>
                                 </div>
                              </div>
                              
                              
                              
                               <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">Gender *</label>
                                    <input type="text" class="form-control" id="gender" name="gender" placeholder="Gender" required/>
                                 </div>
                              </div>
                              
                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">Contact Number *</label>
                                    <input type="text" class="form-control" id="contact_number" name="contact_number" placeholder="Contact Number" required/>
                                 </div>
                              </div>
                              
                              
                               
                               <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">Email Address *</label>
                                    <input type="text" class="form-control" id="email_address" name="email_address" placeholder="Email Address" required/>
                                 </div>
                              </div>
                              
                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">Permanent Address *</label>
                                    <input type="text" class="form-control" id="permanent_address" name="permanent_address" placeholder="Permanent Address" required/>
                                 </div>
                              </div>  
                              
                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">Position/Title *</label>
                                    <input type="text" class="form-control" id="position/title" name="position/title" placeholder="Position/Title" required/>
                                 </div>
                              </div>
                              
                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">Department *</label>
                                    <input type="text" class="form-control" id="department" name="department" placeholder="Department" required/>
                                 </div>
                              </div>
                              
                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">Reporting Managers Name *</label>
                                    <input type="text" class="form-control" id="reporting_managers_name" name="reporting_Managers_name" placeholder="Reporting Managers Name" required/>
                                 </div>
                              </div>
                              
                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">Joining Date*</label>
                                    <input type="text" class="form-control" id="joining_date" name="joining_date" placeholder="Joining Date" required/>
                                 </div>
                              </div>
                              
                              
                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">Emergency Contact Name *</label>
                                    <input type="text" class="form-control" id="emergency_contact_name" name="emergency_contact_name" placeholder="Emergency Contact Name " required/>
                                 </div>
                              </div>
                              
                              
                               <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">Emereancy Contact Number *</label>
                                    <input type="text" class="form-control" id="emergency_contact_number" name="emergency_contact_number" placeholder="Emerge   ncy Contact Number " required/>
                                 </div>
                              </div>
                              
                               <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">Company Name *</label>
                                    <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Company Name" required/>
                                 </div>
                              </div>
                              
                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">Position Held *</label>
                                    <input type="text" class="form-control" id="position_held" name="position_held" placeholder="Position Held" required/>
                                 </div>
                              </div>
                              
                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">Degree Diploma Certificate *</label>
                                    <input type="text" class="form-control" id="degree/diploma/certificate" name="degree/diploma/certificate" placeholder="Degree Diploma Certificate" required/>
                                 </div>
                              </div>
                              
                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">Year Of Graduation *</label>
                                    <input type="text" class="form-control" id="year_of_graduation" name="year_of_graduation" placeholder="Year Of Graduation" required/>
                                 </div>
                              </div>
                              
                               <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">Photo *</label>
                                    <input type="text" class="form-control" id="photo" name="photo" placeholder="Photo" required/>
                                 </div>
                              </div>
                              
                               <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">ID Proof *</label>
                                    <input type="text" class="form-control" id="id_proof" name="id_proof" placeholder="ID Proof" required/>
                                 </div>
                              </div>
                              
                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">Address *</label>
                                    <input type="text" class="form-control" id="address" name="address" placeholder="Address" required/>
                                 </div>
                              </div>
                              
                               <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">ID Proof *</label>
                                    <input type="text" class="form-control" id="id_proof" name="id_proof" placeholder="ID Proof" required/>
                                 </div>
                              </div>
                              
                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">Address Proof *</label>
                                    <input type="text" class="form-control" id="address_proof" name="address_proof" placeholder="Address Proof" required/>
                                 </div>
                              </div>
                              
                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">Bank Account Details For Salary Deposit *</label>
                                    <input type="text" class="form-control" id="bank_account_details_for_salary_deposit" name="bank_account_details_for_salary_deposit" placeholder="Bank Account Details For Salary Deposit" required/>
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
                  <h3 class="card-title">List of employee</h3>
                  <div class="card-tools">
                           <button type="button" class="btn btn-primary" onclick="onSelect('add')">Add</button>
                       
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
   var tableName = "employee";
   var fieldName = "emp_id";
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
         data: {tableSql: "SELECT emp_id,full_name,date_of_birth,gender,contact_number,email_address,permanent_address,position/title,department,reporting_managers_name,joining_date,salary_details,emergency_contact_name,emergency_contact_number,company_name,position_held,degree/diploma/certificate,year_of_graduation,photo,id_proof,address_proof,bank_account_details_for_salary_deposit from employee order by emp_id desc "
           ,field: fieldName, perpage: perPage, pageno: pageNo, Permission: "ACTIONSEDIT"},
         success: function (data) {g
            $("#applytable").html(data);
         }
      });
   }

   $("#add_form").on('submit', (function (e) {
      e.preventDefault();
      $.ajax({
         url: "../action/employeeAction.php",
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
         url: "../action/employeeAction.php",
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
            url: "../action/employeeAction.php",
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
