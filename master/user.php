<?php
include('../action/dbconnect.php');
include('../them/header.php');
include('../action/getList.php');
$listobj = new getList();
?>
<style>
/* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 55px;
  height: 24px;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 17px;
  width: 20px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 20px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>User </h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a>Home</a></li>
                  <li class="breadcrumb-item active">User</li>
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
                  <h3 class="card-title">User Detail</h3>
               </div>
               <form class="form-horizontal" id="add_form">

                  <input type="hidden" id="action" name="action" value="add"/>
                  <input type="hidden" class="form-control" id="user_id" name="user_id"/>
                  <div class="card-body">
                     <div class="card card-success">
                        <div class="card-header">
                           <h3 class="card-title">User Detail</h3>
                        </div>

                        <div class="card-body">
                           <div class="row">

                           <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="email">Select  Distibuter <font color="red">*</font></label>
                                    <select  class="form-control" id="user_dis_id" name="user_dis_id"
                                    onchange="getOption(this.value, 'retailer', 'ret_dis_id', 'ret_id', 'ret_name', 'user_ret_id')";
                                    >
                                       <option value="">Select</option>
                                       <?php
                                       $listdata = $listobj->MasterLoadList($conn, 'distributer');
                                          while ($row = $listdata->fetch_assoc()) {
                                             ?>
                                             <option value="<?php echo $row["distributer_id"] ?>"> <?php echo $row["distributer_name"] ?></option>
                                          <?php } ?>
                                    </select>
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">Select Retailer <font color="red">*</font></label>
                                    <select  class="form-control" id="user_ret_id" name="user_ret_id">
                                      <option value="">Select</option>
                                    </select>
                                 </div>
                              </div>



                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">Full Name *</label>
                                    <input type="text" class="form-control" id="user_full_name" name="user_full_name" placeholder="User FullName" />
                                 </div>
                              </div>
                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">User Name for Login *</label>
                                    <input type="text" class="form-control" id="user_name" name="user_name" placeholder="User Name for Login" />
                                 </div>
                              </div>
                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">Password *</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="password"  />
                                 </div>
                              </div>
                              
                              
                              
                              <input type="hidden" id="user_status" name="user_status" value="Y"/>
                              <input type="hidden" name="user_created_at" value="<?php echo date('d-m-y'); ?>"/>
                              <input type="hidden" name="user_role" value="2"/>
                           
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
                  <h3 class="card-title">List of User</h3>
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
   var tableName = "user_report";
   var fieldName = "user_id";
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

   function onActive(id,status){
           $.ajax({
            url: "../action/userAction.php",
            type: "POST",
            data: { key: id, action: "activate", status: status},
            success: function (data) {
            if (JSON.parse(data).status) {
                 ongetPage(1);
               Toast.fire({
                  icon: 'success',
                  title: JSON.parse(data).message
               });
            }
         }, error: function () {
         }
         });
    
   }

   function ongetPage(pageNo) {
      $.ajax({
         url: "../action/tableCreator.php",
         type: "POST",
         data: {tableSql: "select user_id,user_name,user_full_name,user_status from user_report",
            field: 'user_id', perpage: perPage, pageno: pageNo, Permission: "ACTIONSEDIT"},
         success: function (data) {
            $("#applytable").html(data);
         }
      });
   }

   $("#add_form").on('submit', (function (e) {
   
      if(document.getElementById("user_dis_id").value == ""){
         alert("Please Select Distibuter!");
         return false;
      }
      if(document.getElementById("user_ret_id").value == ""){
         alert("Please Select Retailer!");
         return false;
      }
      if(document.getElementById("user_full_name").value == ""){
         alert("Please Enter User FullName!");
         return false;
      }

      if(document.getElementById("user_name").value == ""){
         alert("Please Enter UserName!");
         return false;
      }
       
       if(document.getElementById("password").value == ""){
         alert("Please Enter Password!");
         return false;
      }
     
     
   
      e.preventDefault();
      $.ajax({
         url: "../action/userAction.php",
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
         url: "../action/userAction.php",
         type: "POST",
         data: {table_name: tableName, key: obj, action: actionNameN, field: fieldName},
         success: function (obj) {
            let object = JSON.parse(obj);
            for (x in JSON.parse(obj)) {
               console.log(object[x]);
               $("#" + x).val(object[x]);
            }
            getOption(object['user_ret_id'], 'retailer', 'ret_dis_id', 'ret_id', 'ret_name', 'user_ret_id')
         }, error: function () {
         }
      });
   }


   function onDelete(obj) {
      var result = confirm("Are You Sure Delete Record!");
      if (result === true) {
         actionNameN = "deleterecord";
         $.ajax({
            url: "../action/userAction.php",
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

   function getOption(selectedid, tablename, ddfieldname, ddfieldid, fieldvname, selid) {
     
        $.ajax({
            url: "../action/getDropdownlistbyid.php",
            type: "POST",
            data: {table_name: tablename, field: ddfieldname, sortvalue: selectedid, field_id: ddfieldid, field_name: fieldvname},
            success: function (obj) {
                $("#" + selid).html(obj);
            }, error: function () {
            }
        });
    };
   
   

</script>
<?php include("../them/footer.php"); ?>
