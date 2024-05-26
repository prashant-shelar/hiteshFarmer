
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
               <h1>Attendance</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a>Home</a></li>
                  <li class="breadcrumb-item active">Attendance</li>
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
                  <h3 class="card-title">Attendance</h3>
               </div>
               <form class="form-horizontal" id="add_form">

                  <input type="hidden" id="action" name="action" value="add"/>
                  <input type="hidden" class="form-control" id="attendance_id" name="attendance_id"/> 
                  <input type="hidden" class="form-control" id="attendance_flag" name="attendance_flag" value="Y"/>
                  <input type="hidden" class="form-control" id="attendance_type" name="attendance_type" value="1"/>
                  <input type="hidden" class="form-control" id="current_month" name="current_month" value="<?php echo date('m'); ?>"/> 
                  <input type="hidden" class="form-control" id="current_year" name="current_year" value="<?php echo date('y'); ?>"/>
                  <input type="hidden" class="form-control" id="current_day" name="current_day" value="<?php echo date('d'); ?>"/>
                  <input type="hidden" class="form-control" id="attendance_user_name" name="attendance_user_name" value="<?php echo $_SESSION['user_fullName']; ?>"/>
                  <input type="hidden" class="form-control" id="attendance_user_id" name="attendance_user_id" value="<?php echo $_SESSION['user_id']; ?>"/>
               
                  <div class="card-body">
                    

                        <div class="card-body">
                           <div class="row">
                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">Date</label>
                                    <input type="date" class="form-control" id="attendance_date" name="attendance_date" required readonly />
                                 </div>
                              </div>
                              
                               <div class="col-sm-4" id="logindiv">
                                 <div class="form-group">
                                    <label for="email">Login Time</label>
                                    <input type="time" class="form-control" id="login_time" name="login_time" required readonly value=<?php echo date("h:i a"); ?> />
                                 </div>
                              </div>
                              
                                <div class="col-sm-4" id="logoutdiv">
                                 <div class="form-group">
                                    <label for="email">Logout Time</label>
                                    <input type="time" class="form-control" id="logout_time" name="logout_time" required readonly value=<?php echo date("h:i a"); ?> />
                                 </div>
                              </div>
                              
                                <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">Select Project *</label>
                                    <select  class="form-control" id="attendance_project_id" name="attendance_project_id" required>
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
                             
                             
                              <input type="hidden" name="updatedat" value="<?php echo date('d-m-Y'); ?>"/>
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
                  <h3 class="card-title">List of Attendance</h3>
                  <div class="card-tools">
                           <button type="button" class="btn btn-primary" onclick="onSelect('add')">Start Day</button>
                         <button type="button" class="btn btn-danger" onclick="onEdit('edit')">End Day</button>
                       
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
         data: {tableSql: "SELECT attendance_id , attendance_user_name as Name,DATE_FORMAT(attendance_date,'%d/%m/%Y') as Date,login_time,logout_time, project_name " +
                    " FROM attendance inner join project on attendance_project_id = project_id where attendance_user_id ="+ user_id 
                   + " ORDER BY attendance_id desc ",
            field: fieldName, perpage: perPage, pageno: pageNo, Permission: "ACTIONSEDIT"},
         success: function (data) {
            $("#applytable").html(data);
         }
      });
   }

   $("#add_form").on('submit', (function (e) {
      e.preventDefault();
      $.ajax({
         url: "../action/myattendanceAction.php",
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
      actionNameN = "singlerecorduserid";
      this.onSelect('edit');
      $.ajax({
         url: "../action/myattendanceAction.php",
         type: "POST",
         data: {table_name: tableName, key: obj, action: actionNameN, field: fieldName},
         success: function (data) {
            let object = JSON.parse(data);
            console.log(object);
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
            url: "../action/myattendanceAction.php",
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
