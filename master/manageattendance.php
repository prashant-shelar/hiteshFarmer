
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
               <h1>Worker Attendance</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a>Home</a></li>
                  <li class="breadcrumb-item active">Worker Attendance</li>
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
                  <h3 class="card-title"> Worker Attendance</h3>
               </div>
               <form class="form-horizontal" id="add_form">

                  <input type="hidden" id="action" name="action" value="add"/>
                  <input type="hidden" class="form-control" id="attendance_id" name="attendance_id"/> 
                  <input type="hidden" class="form-control" id="attendance_flag" name="attendance_flag" value="Y"/>
                  <input type="hidden" class="form-control" id="attendance_type" name="attendance_type" value="2"/>
                  <input type="hidden" class="form-control" id="current_month" name="current_month" value="<?php echo date('m'); ?>"/> 
                  <input type="hidden" class="form-control" id="current_year" name="current_year" value="<?php echo date('y'); ?>"/>
                  <input type="hidden" class="form-control" id="current_day" name="current_day" value="<?php echo date('d'); ?>"/>
                  <input type="hidden" class="form-control" id="attendance_user_name" name="attendance_user_name" value="<?php echo $_SESSION['user_fullName']; ?>"/>
                  <input type="hidden" class="form-control" id="attendance_user_id" name="attendance_user_id" value="<?php echo $_SESSION['user_id']; ?>"/>
               
                  <div class="card-body">
                    

                        <div class="card-body">

                            <div class="alert alert-warning alert-dismissible">
                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                              <h5><i class="icon fas fa-exclamation-triangle"></i> Warning!</h5>
                              Attendance <b> Meason Count & Helper Count </b> Should be a numeric value.
                           </div>

                           <div class="row">
                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">Date <font color="red">*</font></label>
                                    <input type="date" class="form-control" id="attendance_date" name="attendance_date" readonly />
                                 </div>
                              </div>
                              
                               <div class="col-sm-4" id="logindiv">
                                 <div class="form-group">
                                    <label for="email">Login Time</label>
                                    <input type="time" class="form-control" id="login_time" name="login_time" readonly value=<?php echo date("h:i a"); ?> />
                                 </div>
                              </div>
                              
                                <div class="col-sm-4" id="logoutdiv">
                                 <div class="form-group">
                                    <label for="email">Logout Time <font color="red">*</font></label>
                                    <input type="text" class="form-control" id="logout_time" name="logout_time" readonly value=<?php echo date("h:i a"); ?> />
                                 </div>
                              </div>
                              
                                <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">Select Project <font color="red">*</font></label>
                                    <select  class="form-control" id="attendance_project_id" name="attendance_project_id">
                                       <option value="">Select</option>
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
                                    <label for="email">Select Contractor <font color="red">*</font></label>
                                    <select  class="form-control" id="attendance_contractor_id" name="attendance_contractor_id">
                                       <option value="">Select Contractor</option>
                                       <?php
                                       $listdata = $listobj->MasterLoadList($conn, 'contractor');
                                          while ($row = $listdata->fetch_assoc()) {
                                             ?>
                                             <option value="<?php echo $row["contractor_id"] ?>"> <?php echo $row["contractor_name"] ?></option>
                                          <?php } ?>
                                    </select>
                                 </div>
                              </div>
                              
                               <div class="col-sm-4" >
                                 <div class="form-group">
                                    <label for="email">Meason Count <font color="red">*</font></label>
                                    <input type="text" class="form-control" id="attendance_meason" name="attendance_meason" onblur="checkNumericMeason(this)" />
                                 </div>
                              </div>
                             
                             <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">Helper Count <font color="red">*</font></label>
                                    <input type="text" class="form-control" id="attendance_helper" name="attendance_helper" onblur="checkNumericHelper(this)" />
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
                  <h3 class="card-title">List of Worker Attendance</h3>
                  
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

 
 
document.getElementById('attendance_date').valueAsDate = new Date();
   $('#madd').hide();
   $('#medit').hide();
   var tableName = "attendance";
   var fieldName = "attendance_id";
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
            $('#logoutdiv').remove();
            $('#mlist').hide();
            break;
         case "list":
            $('#madd').hide();
            $('#mlist').show();
            document.getElementById("add_form").reset();
             location.reload();
            ongetPage(1);
            break;
         case "edit":
            $('#madd').show();
            $('#action').val('edit');
            $('#logindiv').remove();
            $('#mlist').hide();
            $("#madd :input").prop("disabled", false);
            break;
         default: 
            $('#madd').hide();
            $('#mlist').show();
      }
   }



   function ongetPage(pageNo) {
   var user_id = '<?php echo $_SESSION['user_id']; ?>';
      $.ajax({
         url: "../action/tableCreator.php",
         type: "POST",
         data: {tableSql: "SELECT attendance_id, attendance_user_name as Filled_By,Attendance_Date,Login_Time,Logout_Time, Project_Name,Contractor_Name " +
                    " FROM attendance inner join project on attendance_project_id = project_id inner join contractor on attendance_contractor_id = contractor_id "+
                    " ORDER BY attendance_id desc ",
            field: fieldName, perpage: perPage, pageno: pageNo, Permission: "ACTIONSEDIT"},
         success: function (data) {
            $("#applytable").html(data);
         }
      });
   }

   $("#add_form").on('submit', (function (e) {

      var attendance_date = document.getElementById("attendance_date").value;
      var logout_time = document.getElementById("logout_time").value;
      var attendance_project_id = document.getElementById("attendance_project_id").value;
      var attendance_contractor_id = document.getElementById("attendance_contractor_id").value;
      var attendance_meason = document.getElementById("attendance_meason").value;
      var attendance_helper = document.getElementById("attendance_helper").value;


      if(attendance_date == ""){
         alert("Please select attendance date!");
         return false;
      }

      if(logout_time == ""){
         alert("Please enter the logout time!");
         return false;
      }

      if(attendance_project_id == ""){
         alert("Please select the project!");
         return false;
      }

      if(attendance_contractor_id == ""){
         alert("Please select the contractor details!");
         return false;
      }

      if(attendance_meason == ""){
         alert("Please enter the attendance meason!");
         return false;
      }

      if (isNaN(attendance_meason)) {
         alert("Attendance Meason should be numeric value") 
         return false;
      }

      if(attendance_helper == ""){
         alert("Please enter the attendance helper!");
         return false;
      }

      e.preventDefault();

      $.ajax({
         url: "../action/employeeattendanceAction.php",
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
         url: "../action/employeeattendanceAction.php",
         type: "POST",
         data: {table_name: tableName, key: obj, action: actionNameN, field: fieldName},
         success: function (data) {
            let object = JSON.parse(data);
            console.log(object);
            for (x in JSON.parse(data)) {
               console.log(object[x]);
               if(x != "logout_time"){
               $("#" + x).val(object[x]);
               }
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
            url: "../action/employeeattendanceAction.php",
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

   function checkNumericMeason(input){
      if (isNaN(input.value)) {
         document.getElementById("attendance_meason").value = "";
         alert("Entered value should be a numeric value!");
      }
   }

   function checkNumericHelper(input){
      if (isNaN(input.value)) {
         document.getElementById("attendance_helper").value = "";
         alert("Entered value should be a numeric value!");
      }
   }
   

</script>
<?php include("../them/footer.php"); ?>
