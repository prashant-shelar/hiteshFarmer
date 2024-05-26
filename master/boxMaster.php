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
               <h1>BOX </h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a>Home</a></li>
                  <li class="breadcrumb-item active">Box </li>
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
               <input type="hidden" class="form-control" id="box_id" name="box_id"/>
               <div class="card-body">
                  <div class="card card-info">
                     <div class="card-header">
                        <h3 class="card-title">Box</h3>
                     </div>

                     <div class="card-body">
                        <div class="row">
                        
                           <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">Rack *</label>
                                     <select  class="form-control" id="rack_no" name="rack_no" >
                                       <option value="">Select</option>
                                       <?php
                                       $listdata = $listobj->DropdownList($conn, "dropdown", "dropdownKey", "RACK");
                                          while ($row = $listdata->fetch_assoc()) {
                                             ?>
                                             <option value="<?php echo $row["dropdownDesc1"] ?>"> <?php echo $row["dropdownDesc1"] ?></option>
                                          <?php } ?>
                                    </select>
                                 </div>
                              </div>
                              
                           <div class="col-sm-4">
                              <div class="form-group">
                                 <label for="email"> Box No <font color="red">*</font></label>
                                 <input type="text" class="form-control" id="box_no" name="box_no" placeholder="Box no"/>
                              </div>
                           </div>
                          
                           <input type="hidden" name="updatedat" value="<?php echo date('d-m-y'); ?>"/>
                           <input type="hidden" name="updatedby" value="<?php echo $_SESSION['user_id']; ?>"/>

                        </div>

                        <div class="row">
                           <div class="col-sm-4">
                              <button type="submit" class="btn btn-info">Save</button>
                              <button style="margin-left: 10px;" type="button" id="cancelbut" class="btn btn-default" onclick="onSelect('list')">Cancel</button>
                           </div>
                        </div>

                     </div>
                  </div>
               </div>
            </form>
            
         </div>

         <div id="mlist">
            <div class="card card-info">
               <div class="card-header">
                  <h3 class="card-title">List of Box</h3>
                  <div class="card-tools">
                     <button type="button" class="btn btn-success btn-block" onclick="onSelect('add')">
                        <i class="fa fa-edit"></i> Add Box
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

 

   $('#madd').hide();
   $('#medit').hide();
   var tableName = "box";
   var fieldName = "box_id";
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
         data: {tableSql: "select box_id,box_no,rack_no from box order by box_id desc",
            field: fieldName, perpage: perPage, pageno: pageNo, Permission: "ACTIONSEDIT"},
         success: function (data) {
            $("#applytable").html(data);
         }
      });
   }

   $("#add_form").on('submit', (function (e) {

     

     
      
        if($("#rack_no").val() == ""){
         alert("Please enter the Rack No !");
         return false;
      }
      
       if($("#box_no").val() == ""){
         alert("Please enter the Box No !");
         return false;
      }
   
      e.preventDefault();
      $.ajax({
         url: "../action/boxAction.php",
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
         url: "../action/boxAction.php",
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
            url: "../action/projectAction.php",
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
