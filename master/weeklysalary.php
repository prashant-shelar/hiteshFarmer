
<?php
include('../action/dbconnect.php');
include('../them/header.php');
include('../action/getList.php');
$listobj = new getList();
?>

<!-- Css Link -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
<!-- js Link-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>

<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Salary </h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a>Home</a></li>
                  <li class="breadcrumb-item active">Employee Report</li>
               </ol>
            </div>
         </div>
      </div><!-- /.container-fluid -->
   </section>

   <!-- Main content -->
   <section class="content">
      <div class="container-fluid">

         <div>
            <div class="card card-info">
               <div class="card-header">
                  <h3 class="card-title">Weekly Salary</h3>
               </div>
                   
                  <div class="card-body">
                     <div class="row">
                           
                        <div class="col-sm-3">
                           <div class="form-group">
<<<<<<< Updated upstream
                              <label for="email">Select User Details <font color="red">*</font></label>
                              <select  class="form-control" id="attendance_user_id" name="attendance_user_id">
                                 <option value="">Select User</option>
=======
                              <label for="email">Select Employee <font color="red">*</font></label>
                              <select  class="form-control" id="attendance_contractor_id" name="attendance_contractor_id">
                                 <option value="">Select Employee</option>
>>>>>>> Stashed changes
                                 <?php
                                 $listdata = $listobj->MasterLoadList($conn, 'user');
                                    while ($row = $listdata->fetch_assoc()) {
                                       ?>
                                       <option value="<?php echo $row["user_id"] ?>"> <?php echo $row["user_fullName"] ?></option>
                                    <?php } ?>
                              </select>
                           </div>
                        </div>
                        
                        <div class="col-sm-2">
                           <div class="form-group">
                              <label for="email">From Date <font color="red">*</font></label>
                              <input type="text" class="form-control" id="attendance_Fromdate" placeholder="From Date" name="attendance_Fromdate" />
                           </div>
                        </div>
                              
                        <div class="col-sm-2">
                           <div class="form-group">
                              <label for="email">To Date <font color="red">*</font></label>
                              <input type="text" class="form-control" id="attendance_Todate" placeholder="To Date" name="attendance_Todate" />
                           </div>
                        </div>  
                        
                        <div class="col-sm-1" style="margin-top: 23px;">
                           <button type="button" class="btn btn-info" onclick="getReport()">Search</button>
                        </div>

                     </div>
                     <div id="commission">
                    
                     </div>   
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

   $('.datepicker').datepicker({
        max: true,
        inline: true
   });

   $('#attendance_Fromdate').datepicker({
      format: 'yyyy-mm-dd',
      todayHighlight: true,
      autoclose: true
   });

   $('#attendance_Todate').datepicker({
      format: 'yyyy-mm-dd',
      todayHighlight: true,
      autoclose: true
   });

   $("#attendance_Fromdate").datepicker().on('changeDate', (selected) => {
      var minDate = new Date(selected.date.valueOf());
      $('#attendance_Todate').datepicker('setStartDate', minDate);
   });

   $("#attendance_Todate").datepicker().on('changeDate', (selected) => {
      var minDate = new Date(selected.date.valueOf());
      $('#attendance_Fromdate').datepicker('setEndDate', minDate);
   });

   var tableName = "role";
   var fieldName = "role_id";
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
         data: {tableSql: "SELECT * from role  ORDER BY role_id desc "
          , field: fieldName, perpage: perPage, pageno: pageNo, Permission: "ACTIONSEDIT"},
         success: function (data) {
            $("#applytable").html(data);
         }
      });
   }

   function getReport(){

      var attendance_user_id = document.getElementById("attendance_user_id").value;
      var attendance_Fromdate = document.getElementById("attendance_Fromdate").value;
      var attendance_Todate = document.getElementById("attendance_Todate").value;

      if(attendance_user_id == ""){
         alert("Please select User!");
         return false;
      }

      if(attendance_Fromdate == ""){
         alert("Please enter from date!");
         return false;
      }

      if(attendance_Todate == ""){
         alert("Please enter to date!");
         return false;
      }

      $.ajax({
         url: "../action/myattendanceAction.php",
         type: "POST",
         data: {attendance_user_id:$("#attendance_user_id").val(),attendance_Fromdate:$("#attendance_Fromdate").val(),attendance_Todate:$("#attendance_Todate").val(),action:'getReport'},
         success: function (data) {
            $("#commission").html(data);
         }
      });
    
   }
   
</script>
<?php include("../them/footer.php"); ?>
