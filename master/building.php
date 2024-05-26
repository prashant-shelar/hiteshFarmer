
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
               <h1>Building </h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a>Home</a></li>
                  <li class="breadcrumb-item active">Building</li>
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
               <input type="hidden" class="form-control" id="building_id" name="building_id"/>
               <div class="card-body">
                  <div class="card card-info">
                     <div class="card-header">
                        <h3 class="card-title">Building</h3>
                     </div>

                     <div class="card-body">
                        <div class="row">
                           <div class="col-sm-4">
                              <div class="form-group">
                                 <label for="email">Name <font color="red">*</font></label>
                                 <input type="text" class="form-control" id="building_name" name="building_name" placeholder="Building Name"/>
                              </div>
                           </div>
                           <div class="col-sm-4">
                              <div class="form-group">
                                 <label for="email">Select Project <font color="red">*</font></label>
                                 <select  class="form-control" id="building_project_id" name="building_project_id">
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
                                 <label for="email">Floor Plan </label>
                                 <input type="file" class="form-control" id="floor_plan" name="floor_plan" placeholder="Floor Plan" />
                                 <div class="form-group" id="flowerdownload"></div>
                              </div>
                           </div>
                           
                           <div class="col-sm-4">
                              <div class="form-group">
                                 <label for="email">Working Drawing </label>
                                 <input type="file" class="form-control" id="working_drawing" name="working_drawing" placeholder="working drawing" />
                                <div class="form-group" id="workingdownload"></div>
                              </div>
                           </div>
                           
                           <div class="col-sm-4">
                              <div class="form-group">
                                 <label for="email">Plumbing Drawing </label>
                                 <input type="file" class="form-control" id="plumbing_drawing" name="plumbing_drawing" placeholder="plumbing drawing" />
                                 <div class="form-group" id="plumbingdownload"></div>
                              </div>
                           </div>
                           
                           <div class="col-sm-4">
                              <div class="form-group">
                                 <label for="email">Structural Drawing </label>
                                 <input type="file" class="form-control" id="structural_drawing" name="structural_drawing" placeholder="structural drawing" />
                                  <div class="form-group" id="structuraldownload"></div>
                              </div>
                           </div>
                           
                            <div class="col-sm-4">
                              <div class="form-group">
                                 <label for="email">Electrical Drawing </label>
                                 <input type="file" class="form-control" id="electrical_drawing" name="electrical_drawing" placeholder="Electrical drawing" />
                                  <div class="form-group" id="electricaldownload"></div>
                              </div>
                           </div>
                          
                          
                           <input type="hidden" name="updatedat" value="<?php echo date('d-m-y'); ?>"/>
                           <input type="hidden" name="updatedby" value="<?php echo $_SESSION['user_id']; ?>"/>
                        </div>
                        <div class="row">
                           <button type="submit" class="btn btn-info">Save</button>
                           <button style="margin-left: 10px;" type="button" id="cancelbut" class="btn btn-default" onclick="onSelect('list')">Cancel</button>
                        </div>
                     </div>
                  </div>
               </div>
            </form>
         </div>

         <div id="mlist">
            <div class="card card-info">
               <div class="card-header">
                  <h3 class="card-title">List of Building</h3>
                  <div class="card-tools">
                     <button type="button" class="btn btn-success btn-block" onclick="onSelect('add')">
                        <i class="fa fa-edit"></i> Add Building
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

<script>

   $('#madd').hide();
   $('#medit').hide();
   var tableName = "building";
   var fieldName = "building_id";
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
         data: {tableSql: "SELECT building_id, building_Name, project_name " +
                    " FROM building inner join project on building_project_id = project_id  " +
                    " ORDER BY building_id desc ",
            field: fieldName, perpage: perPage, pageno: pageNo, Permission: "ACTIONSEDIT"},
         success: function (data) {
            $("#applytable").html(data);
         }
      });
   }

   $("#add_form").on('submit', (function (e) {

      var building_name = document.getElementById("building_name").value;
      var building_project_id = document.getElementById("building_project_id").value;

      if(building_name == ""){
         alert("Please enter the building name!");
         return false;
      }

      if(building_project_id == ""){
         alert("Please select the building project!");
         return false;
      }

      e.preventDefault();
      $.ajax({
         url: "../action/buildingAction.php",
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
         url: "../action/buildingAction.php",
         type: "POST",
         data: {table_name: tableName, key: obj, action: actionNameN, field: fieldName},
         success: function (data) {
            let object = JSON.parse(data);
            for (x in JSON.parse(data)) {
               console.log(object[x]);
               if (x != "floor_planqq" && x != "working_drawing" && x != "plumbing_drawing" && x != "structural_drawing" && x != "electrical_drawing") {
                console.log(x);
               $("#" + x).val(object[x]);
               }
               if (x === "floor_planqq") {
               
                 console.log("../drawing/"+obj+"/" + object[x]);
//                    var img = document.createElement("a");
//                   img.href = "../drawing/"+obj+"/" + object[x];
//                   img.innerText = 'Download';
//                   img.setAttribute('download', '');
//                   $('#flowerdownload').html(img);
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
