<?php
   include('../action/dbconnect.php');
   include('../them/header.php');
   include('../action/getList.php');
   $listObj = new getList();
?>
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Drop Down Master</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a>Home</a></li>
                  <li class="breadcrumb-item active">Drop Down</li>
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
                  <h3 class="card-title">Drop Down</h3>
               </div>
               <form class="form-horizontal" id="add_form">

                  <input type="hidden" id="action" name="action" value="add"/>
                  <input type="hidden" class="form-control" id="dropdownId" name="dropdownId"/>
                  <div class="card-body">
                     <div class="card card-success">
                        <div class="card-header">
                           <h3 class="card-title">Drop Down Detail</h3>
                        </div>

                        <div class="card-body">
                           <div class="row">
                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="dropdownKey">Drop Down Key</label>
                                    <select required class="form-control" id="dropdownKey" name="dropdownKey">
                                       <option value="">Select</option>
                                       <?php
                                          $listData = $listObj->DropdownDistList($conn, 'dropdown', 'dropdownKey');
                                          while ($row = $listData->fetch_assoc()) {
                                             ?>
                                             <option value="<?php echo $row["dropdownKey"] ?>"> <?php echo $row["dropdownKey"] ?></option>
                                          <?php } ?>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="dropdownDesc1">Dropdown Details 1</label>
                                    <input type="text" class="form-control" id="dropdownDesc1" name="dropdownDesc1" placeholder="Detail 1"/>
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="dropdownDesc2">Dropdown Details 2</label>
                                    <input type="text" class="form-control" id="dropdownDesc2" name="dropdownDesc2" placeholder="Detail 2"/>
                                 </div>
                              </div>

                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="dropdownDesc3">Dropdown Details 3</label>
                                    <input type="text" class="form-control" id="dropdownDesc3" name="dropdownDesc3" placeholder="Detail 3"/>
                                 </div>
                              </div>

                              <input type="hidden" id="editable" name="editable" value="1"/>
                              <input type="hidden" name="updateTime" value="<?php echo date('d-m-y H:i:s'); ?>"/>
                              <input type="hidden" name="updatedBy" value="<?php echo $_SESSION['user_id']; ?>"/>

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
                  <h3 class="card-title">List of Drop Down</h3>
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
   var tableName = "dropdown";
   var fieldName = "dropdownId";
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
         data: {tableSql: "SELECT dropdownId, dropdownKey AS Dropdown_Key, dropdownDesc1 AS Desc1, dropdownDesc2 AS Desc2, dropdownDesc3 AS Desc3 " +
                    " FROM dropdown " +
                    " WHERE is_active = 'Y' " +
                    " AND editable = 1 " +
                    " ORDER BY dropdownKey, dropdownId ASC ",
            DelPermission: "DDDEL", field: fieldName, perpage: perPage, pageno: pageNo, Permission: "DDEDIT"},
         success: function (data) {
            $("#applytable").html(data);
         }
      });
   }

   $("#add_form").on('submit', (function (e) {
      e.preventDefault();
      $.ajax({
         url: "../action/DropdownAction.php",
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
      actionName = "singlerecord";
      this.onSelect('edit');
      $.ajax({
         url: "../action/DropdownAction.php",
         type: "POST",
         data: {table_name: tableName, key: obj, action: actionName, field: fieldName},
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
         actionName = "deleterecord";
         $.ajax({
            url: "../action/DropdownAction.php",
            type: "POST",
            data: {table_name: tableName, key: obj, action: actionName, field: fieldName},
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

   $(document).on('keyup keypress', 'form input[type="text"]', function (e) {
      if (e.keyCode === 13) {
         e.preventDefault();
         return false;
      }
//      if (e.keyCode === 112) {
//         e.preventDefault();
//         window.open("../help/timesheets.html", '_blank').focus();
//         return false;
//      }
   });

   $(document).on('keyup keypress', 'form input[type="date"]', function (e) {
      if (e.keyCode === 13) {
         e.preventDefault();
         return false;
      }
   });

   $(document).on('keyup keypress', 'form input[type="number"]', function (e) {
      if (e.keyCode === 13) {
         e.preventDefault();
         return false;
      }
   });

</script>
<?php include("../them/footer.php"); ?>
