
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
               <h1>Unit </h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a>Home</a></li>
                  <li class="breadcrumb-item active">Unut</li>
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
                  <h3 class="card-title">Unit</h3>
               </div>
               <form class="form-horizontal" id="add_form">

                  <input type="hidden" id="action" name="action" value="add"/>
                  <input type="hidden" class="form-control" id="unit_id" name="unit_id"/>
                  <div class="card-body">
                     <div class="card card-success">
                        <div class="card-header">
                           <h3 class="card-title">Unit</h3>
                        </div>

                        <div class="card-body">
                           <div class="row">
                           <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">Select Project *</label>
                                    <select  class="form-control" id="building_project_id" name="building_project_id" required>
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
                                    <label for="email">Select Building *</label>
                                    <select  class="form-control" id="unit_building_id" name="unit_building_id" required>
                                       <option>Select</option>
                                       <?php
                                       $listdata = $listobj->MasterLoadList($conn, 'building');
                                          while ($row = $listdata->fetch_assoc()) {
                                             ?>
                                             <option value="<?php echo $row["building_id"] ?>"> <?php echo $row["building_name"] ?></option>
                                          <?php } ?>
                                    </select>
                                 </div>
                              </div>
                              
                               <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">Unit Type *</label>
                                     <select  class="form-control" id="unit_type" name="unit_type" required>
                                       <option>Select</option>
                                       <?php
                                       $listdata = $listobj->DropdownList($conn, "dropdown", "dropdownKey", "FlatType");
                                          while ($row = $listdata->fetch_assoc()) {
                                             ?>
                                             <option value="<?php echo $row["dropdownDesc1"] ?>"> <?php echo $row["dropdownDesc1"] ?></option>
                                          <?php } ?>
                                    </select>
                                 </div>
                              </div>
                              
                               <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">Select Floor *</label>
                                    <select  class="form-control" id="unit_building_flower" name="unit_building_flower" required>
                                       <option>Select</option>
                                       <?php
                                       $listdata = $listobj->DropdownList($conn, "dropdown", "dropdownKey", "FL_TYPE");
                                          while ($row = $listdata->fetch_assoc()) {
                                             ?>
                                             <option value="<?php echo $row["dropdownDesc1"] ?>"> <?php echo $row["dropdownDesc1"] ?></option>
                                          <?php } ?>
                                    </select>
                                 </div>
                              </div>
                              
                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">unit No *</label>
                                    <input type="text" class="form-control" id="unit_no" name="unit_no" placeholder="Unit No" required/>
                                 </div>
                              </div>
                             
                             <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">unit Area *</label>
                                    <input type="text" class="form-control" id="unit_area" name="unit_area" placeholder="Unit Area" required/>
                                 </div>
                              </div>
                              
                              
                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">Unit Cost *</label>
                                    <input type="text" class="form-control" id="unit_cost" name="unit_cost" placeholder="Unit Cost" required/>
                                 </div>
                              </div>
                              
                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">Unit Final Cost </label>
                                    <input type="text" class="form-control" id="final_cost" name="final_cost" placeholder="Final Cost" readonly/>
                                 </div>
                              </div>
                              
                               <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">Unit Description </label>
                                    <textarea type="text" class="form-control" id="unit_description" name="unit_description" placeholder="Description"/></textarea>
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
                  <h3 class="card-title">List of Unit</h3>
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
   var tableName = "unit";
   var fieldName = "unit_id";
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
         data: {tableSql: "select * from unit ORDER BY unit_id desc ",
            field: fieldName, perpage: perPage, pageno: pageNo, Permission: "ACTIONSEDIT"},
         success: function (data) {
            $("#applytable").html(data);
         }
      });
   }

   $("#add_form").on('submit', (function (e) {
      e.preventDefault();
      $.ajax({
         url: "../action/buildingAction.php",
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
         url: "../action/buildingAction.php",
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


   function onDelete(obj) {
      var result = confirm("Are You Sure Delete Record!");
      if (result === true) {
         actionNameN = "deleterecord";
         $.ajax({
            url: "../action/buildingAction.php",
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
