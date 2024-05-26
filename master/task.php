<?php
include('../action/dbconnect.php');
include('../them/header.php');
include('../action/getList.php');
$listobj = new getList();
?>

<!-- Css Link -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
<!-- js Link-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>


<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Task </h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a>Home</a></li>
                  <li class="breadcrumb-item active">Task</li>
               </ol>
            </div>
         </div>
      </div><!-- /.container-fluid -->
   </section>

   <!-- Main content -->
   <section class="content">
      <div class="container-fluid">

         <div id="madd">
            <div class="card card-primary">
               <div class="card-header">
                  <h3 class="card-title">Task</h3>
               </div>
               <form class="form-horizontal" id="add_form">

                  <input type="hidden" id="action" name="action" value="add"/>
                  <input type="hidden" class="form-control" id="task_id" name="task_id"/>
                  <div class="card-body">

                        <div class="card-body">
                           <div class="row">
                           
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label for="email">Select Project <font color="red">*</font></label>
                                    <select  class="form-control" id="task_project_id" name="task_project_id">
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
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label for="email">Select Employee For Task <font color="red">*</font></label>
                                    <select  class="form-control" id="task_assign_user_id" name="task_assign_user_id">
                                       <option value="">Select</option>
                                       <?php
                                       $listdata = $listobj->MasterLoadList($conn, 'user');
                                          while ($row = $listdata->fetch_assoc()) {
                                             ?>
                                             <option value="<?php echo $row["user_id"] ?>"> <?php echo $row["user_fullName"] ?></option>
                                          <?php } ?>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label for="email"> Start Date <font color="red">*</font></label>
                                    <input type="text" autocomplete="off" class="form-control" id="task_startDate" name="task_startDate" placeholder="Select Start Date"/>
                                   </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label for="email">Tentative End Date <font color="red">*</font></label>
                                    <input type="text" autocomplete="off" class="form-control" id="task_tentive_end" name="task_tentive_end" placeholder="Select Tentative Date"/>
                                   </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <label for="email"> Title <font color="red">*</font></label>
                                    <input type="text" class="form-control" id="task_title" name="task_title" placeholder="Task Title"/>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <label for="email"> Description <font color="red">*</font></label>
                                    <textarea class="form-control" id="task_description" name="task_description" placeholder="Description" ></textarea>
                                 </div>
                              </div>
                              
                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <label for="email"> Comment <font color="red">*</font></label>
                                    <textarea class="form-control" id="task_comment_comment" name="task_comment_comment" placeholder="Description" >New Task Created</textarea>
                                 </div>
                              </div>
                              
                                <div class="col-sm-12"> 
                                 <div class="form-group">
                                    <label for="email"> Attach </label>
                               <input type="file" class="form-control" id="task_attachment" name="task_attachment"/>
                                   </div>
                              </div>
                              
                              
                              
                              
                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">Status <font color="red">*</font></label>
                                     <select  class="form-control" id="task_status" name="task_status">
                                       <option>Select Status</option>
                                       <?php
                                       $listdata = $listobj->DropdownList($conn, "dropdown", "dropdownKey", "TASK_STATUS");
                                          while ($row = $listdata->fetch_assoc()) {
                                             ?>
                                             <option value="<?php echo $row["dropdownDesc1"] ?>"> <?php echo $row["dropdownDesc1"] ?></option>
                                          <?php } ?>
                                    </select>
                                 </div>
                              </div>
                              
                               <div class="col-sm-12">
                                   <div id="applytablecomment"></div>
                                </div>  
                              
                              <input type="hidden" name="updatedat" value="<?php echo date('d-m-y'); ?>"/>
                              <input type="hidden" name="updatedby" value="<?php echo $_SESSION['user_id']; ?>"/>
                              <input type="hidden" id="task_assignby" name="task_assignby" value="<?php echo $_SESSION['user_id']; ?>"/>

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
            <div class="card card-primary">
               <div class="card-header">
                  <h3 class="card-title">List of Task</h3>
                  <div class="card-tools">
                     <button type="button" class="btn btn-success btn-block" onclick="onSelect('add')">
                        <i class="fa fa-edit"></i> Add Task
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

   $('.datepicker').datepicker({
        max: true,
        inline: true
    });

   $('#task_startDate').datepicker({
      format: 'dd-mm-yyyy',
      todayHighlight: true,
      autoclose: true
   });

   $('#task_tentive_end').datepicker({
      format: 'dd-mm-yyyy',
      todayHighlight: true,
      autoclose: true
   });

   $("#task_startDate").datepicker().on('changeDate', (selected) => {
      var minDate = new Date(selected.date.valueOf());
      $('#task_tentive_end').datepicker('setStartDate', minDate);
   });

   $("#task_tentive_end").datepicker().on('changeDate', (selected) => {
      var minDate = new Date(selected.date.valueOf());
      $('#task_startDate').datepicker('setEndDate', minDate);
   });

   $('#madd').hide();
   $('#medit').hide();
   var tableName = "task";
   var fieldName = "task_id";
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
            $('#task_status').val('TO DO');
            $('#mlist').hide();
            break;
         case "list":
            $('#madd').hide();
            $('#mlist').show();
            document.getElementById("add_form").reset();
            ongetPage(1);
            stopTimer();
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
         data: {tableSql: "SELECT task_id as No, task_title as Title,task_user_name as Assigned_to,task_startDate as Start_Date,task_tentive_end as Tentive_End,task_endDate as End_Date,task_status as Status FROM task ORDER BY task_id desc ",
            field: "No", perpage: perPage, pageno: pageNo, Permission: "ACTIONSEDIT"},
         success: function (data) {
            $("#applytable").html(data);
         }
      });
   }

   $("#add_form").on('submit', (function (e) {
      
      var taskProjectId = document.getElementById("task_project_id").value;
      var taskAssignUserId = document.getElementById("task_assign_user_id").value;
      var taskStartDate = document.getElementById("task_startDate").value;
      var taskTentiveDate = document.getElementById("task_tentive_end").value;
      var taskTitle = document.getElementById("task_title").value;
      var taskDescription = document.getElementById("task_description").value;
      var taskComment = document.getElementById("task_comment_comment").value;
      var taskStatus = document.getElementById("task_status").value;

      if(taskProjectId == ""){
         alert("Please select project!");
         return false;
      }

      if(taskAssignUserId == ""){
         alert("Please select employee for task!");
         return false;
      }

      if(taskStartDate == ""){
         alert("Please Enter task start date!");
         return false;
      }

      if(taskTentiveDate == ""){
         alert("Please enter task tentative date!");
         return false;
      }

      if(taskTitle == ""){
         alert("Please enter task title!");
         return false;
      }

      if(taskDescription == ""){
         alert("Please enter task description!");
         return false;
      }

      if(taskComment == ""){
         alert("Please enter task comment!");
         return false;
      }

      if(taskStatus == ""){
         alert("Please enter task status!");
         return false;
      }

      e.preventDefault();
      $.ajax({
         url: "../action/taskAction.php",
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
                  title: JSON.parse(data).message
               });
            }
         }, error: function () {
         }
      });
   }));

   function onEdit(obj) {
   var task_id = obj;
      actionNameN = "singlerecord";
      this.onSelect('edit');
      
      $.ajax({
         url: "../action/taskAction.php",
         type: "POST",
         data: {table_name: tableName, key: obj, action: actionNameN, field: fieldName},
         success: function (obj) {
            let object = JSON.parse(obj);
            for (x in JSON.parse(obj)) {
             if(x != "task_comment_comment"){
              $("#" + x).val(object[x]);
              }else{
              $("#" + x).val("");
              }
              // $("#" + x).val(object[x]);
            }
               startTimer(task_id);
              
      
         }, error: function () {
         }
      });
   }
   
   


   function onDelete(obj) {
      var result = confirm("Are You Sure Delete Record!");
      if (result === true) {
         actionNameN = "deleterecord";
         $.ajax({
            url: "../action/taskAction.php",
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
   
   var timer;
   function updateComment(task_id){
       $.ajax({
         url: "../action/taskAction.php",
         type: "POST",
         data: {action:"taskComment",key: task_id},
         success: function (data) {
            $("#applytablecomment").html(data);
         }
      });  
   }
      
    function startTimer(task_id) {
        timer = setInterval(function() { 
           updateComment(task_id);
        }, 5000);
    }
      
     function stopTimer() {
        clearInterval(timer); 
    }
   

</script>
<?php include("../them/footer.php"); ?>
