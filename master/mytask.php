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
            <div class="card card-info">
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
                                    <label for="email">Select Project *</label>
                                    <select  class="form-control" id="task_project_id" name="task_project_id" required readonly>
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
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <label for="email">Select Employee For Task *</label>
                                    <select  class="form-control" id="task_assign_user_id" name="task_assign_user_id" required readonly>
                                       <option>Select</option>
                                       <?php
                                       $listdata = $listobj->MasterLoadList($conn, 'user');
                                          while ($row = $listdata->fetch_assoc()) {
                                             ?>
                                             <option value="<?php echo $row["user_id"] ?>"> <?php echo $row["user_fullName"] ?></option>
                                          <?php } ?>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group">
                                    <label for="email"> Title *</label>
                                    <input type="text" class="form-control" id="task_title" name="task_title" placeholder="Task Title" required readonly/>
                                 </div>
                              </div>
                              <div class="col-sm-12"> 
                                 <div class="form-group">
                                    <label for="email"> Description *</label>
                                    <textarea class="form-control" id="task_description" name="task_description" placeholder="Description" readonly></textarea>
                                 </div>
                              </div>
                              
                              <div class="col-sm-12"> 
                                 <div class="form-group">
                                    <label for="email"> Comment *</label>
                                    <textarea class="form-control" id="task_comment_comment" name="task_comment_comment" placeholder="Comment"></textarea>
                                 </div>
                              </div>
                              
                              <div class="col-sm-12"> 
                                 <div class="form-group">
                                    <label for="email"> Attach *</label>
                                <input type="file" class="form-control" id="task_attachment" name="task_attachment"/>
                                 </div>
                              </div>
                              
                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">Status *</label>
                                     <select  class="form-control" id="task_status" name="task_status" required>
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
            <div class="card card-info">
               <div class="card-header">
                  <h3 class="card-title">List of Task</h3>
                 
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
      var userId = '<?php echo $_SESSION['user_id']; ?>';
      $.ajax({
         url: "../action/tableCreator.php",
         type: "POST",
         data: {tableSql: "SELECT task_id, task_title,task_user_name as Assign_User,task_startDate as Start,task_endDate as End,task_status as Status FROM task where task_assign_user_id ="+userId+" ORDER BY task_id desc ",
            field: fieldName, perpage: perPage, pageno: pageNo, Permission: "ACTIONSEDIT"},
         success: function (data) {
            $("#applytable").html(data);
         }
      });
   }

   $("#add_form").on('submit', (function (e) {
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
                  title: 'Wrong Request'
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
               console.log(object[x]);
               if(x != "task_comment_comment"){
                $("#" + x).val(object[x]);
               }
            }
           $.ajax({
         url: "../action/taskAction.php",
         type: "POST",
         data: {action:"taskComment",key: task_id},
         success: function (data) {
            $("#applytablecomment").html(data);
         }
      });
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
   
   

</script>
<?php include("../them/footer.php"); ?>
