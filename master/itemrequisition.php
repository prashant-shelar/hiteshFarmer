
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
               <h1>Requisition Request </h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a>Home</a></li>
                  <li class="breadcrumb-item active">Requisition Request</li>
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
                  <input type="hidden" class="form-control" id="item_rr_id" name="item_rr_id"/>
                  <div class="card-body">
                     <div class="card card-success">
                        <div class="card-header">
                           <h3 class="card-title">Requisition Request</h3>
                        </div>

                        <div class="card-body">
                           <div class="row">
                           
                                  <div class="col-sm-4">
                                     <div class="form-group">
                                        <input type="hidden" class="form-control" id="item_name" name="item_name" placeholder="item Name" required/>
                                        <label for="email">Select Project *</label>
                                        <select  class="form-control" id="req_project_id" name="req_project_id" required>
                                           <option>Select</option>
                                           <?php $listdata = $listobj->MasterLoadList($conn, 'project');
                                              while ($row = $listdata->fetch_assoc()) {?>
                                                 <option value="<?php echo $row["project_id"] ?>"> <?php echo $row["project_Name"] ?></option>
                                              <?php } ?>
                                        </select>
                                     </div>
                                  </div>
                                  <div class="col-sm-4">
                                     <div class="form-group">
                                        <input type="hidden" class="form-control" id="item_name" name="item_name" placeholder="item Name" required/>
                                        <label for="email">Select item *</label>
                                        <select  class="form-control" id="item_select_id" name="item_select_id" required>
                                           <option>Select</option>
                                           <?php $listdata = $listobj->MasterLoadList($conn, 'item');
                                              while ($row = $listdata->fetch_assoc()) {?>
                                                 <option value="<?php echo $row["item_id"] ?>"> <?php echo $row["item_name"] ?></option>
                                              <?php } ?>
                                        </select>
                                     </div>
                                  </div>
                                  
                               <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">Quantity*</label>
                                    <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Quantity" required/>
                                 </div>
                              </div>
                              
                               <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">Description *</label>
                                    <input type="text" class="form-control" id="item_description" name="item_description" placeholder="item Description" required/>
                                 </div>
                              </div>
                              
                            
                              
                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label for="email">Reason for Stock *</label>
                                    <input type="text" class="form-control" id="reason_for_stock" name="reason_for_stock" placeholder=" Reason for Stock" required/>
                                 </div>
                              </div>
                              
                              <div class="col-sm-4">
                                 <div class="form-group">
                                     <button type="button" class="btn btn-primary" onclick="onAddList()">Add</button>
                       
                                 </div>
                              </div>
                               
                              </div>
                                    <input type="hidden" name="created_User_id" value="<?php echo date('d-m-y'); ?>"/>
                              <input type="hidden" name="updatedat" value="<?php echo date('d-m-y'); ?>"/>
                              <input type="hidden" name="updatedby" value="<?php echo $_SESSION['user_id']; ?>"/>



 <div class="row">
                                    <table class='table table-striped' id="itemreq">
                                       <thead>
                                          <tr>
                                             <th>Action</th>
                                             <th>Item Name</th>
                                             <th>Quantity</th>
                                             <th>Description</th>
                                             <th>Reason</th>
                                          </tr>
                                       </thead>
                                       <tbody id="itemreqbody">
                                       </tbody>
                                    </table>    
                                 </div>


                           </div>
                        </div>
                     </div>
                
                  <div class="card-footer">
                     <button type="button" class="btn btn-info">Save</button>
                     <button type="button" id="cancelbut" class="btn btn-default" onclick="onSelect('list')">Cancel</button>
                  </div>
               </form>
            </div>
         </div>

         <div id="mlist">
            <div class="card card-info">
               <div class="card-header">
                  <h3 class="card-title">List of items</h3>
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
   var tableName = "item_requisition_request";
   var fieldName = "item_rr_id";
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
   var itemReqList = [];
   function onAddList(){
     itemReqList.push(
     {
     "item_name": "itemName", 
     "item_select_id": $("#item_select_id").val(), 
     "req_project_id": $("#req_project_id").val(),
     "item_description": $("#item_description").val(),
      "reason_for_stock": $("#reason_for_stock").val(),
       "quantity": $("#quantity").val(),
        "item_req_id": $("#item_req_id").val(),
         "created_User_id": $("#created_User_id").val(),
         "updatedby": $("#updatedby").val(), 
         "updatedat": $("#updatedat").val()});
         
         console.log(itemReqList);
           countindex = 0;
          content = "<tbody id='itemreqbody'>";
      for (let singledata of itemReqList) {
         console.log(singledata);
         content += "<tr>" +
                 "<td>" + "<div class='btn btn-primary btn-xs' onclick='ondeleteitem(" + countindex + ")'><i class='fa fa-trash'></i></div> </td>" +
                 "<td>" + singledata.item_name + "</td>" +
                 "<td>" + singledata.quantity + "</td>" +
                 "<td>" + singledata.item_description + "</td>" +
                 "<td>" + singledata.reason_for_stock + "</td>" +
                 "</tr>";
         countindex++;
      }
      content += "</tbody></table>";
      $('#itemreqbody').remove();
      $('#itemreq').append(content); 
         
   }
   
   function ondeleteitem(itemIndex){
    itemReqList.splice(itemIndex, 1);
      $("#bomtabledata").val(JSON.stringify(itemReqList));
      console.log(itemReqList);
      countindex = 0;
      content = " <tbody id='itemreqbody'>";
         for (let singledata of itemReqList) {
         console.log(singledata);
         content += "<tr>" +
                 "<td>" + "<div class='btn btn-primary btn-xs' onclick='ondeleteitem(" + countindex + ")'><i class='fa fa-trash'></i></div> </td>" +
                 "<td>" + singledata.item_name + "</td>" +
                 "<td>" + singledata.quantity + "</td>" +
                 "<td>" + singledata.item_description + "</td>" +
                 "<td>" + singledata.reason_for_stock + "</td>" +
                 "</tr>";
         countindex++;
      }
      content += "</tbody></table>";
      $('#itemreqbody').remove();
      $('#itemreq').append(content);
   
   }

   function ongetPage(pageNo) {
      $.ajax({
         url: "../action/tableCreator.php",
         type: "POST",
         data: {tableSql: "SELECT item_rr_id, item_name,quantity,item_description,reason_for_stock,created_user_id from item_requisition_request order by item_rr_id desc"
           ,field: fieldName, perpage: perPage, pageno: pageNo, Permission: "ACTIONSEDIT"},
         success: function (data) {
            $("#applytable").html(data);
         }
      });
   }

   $("#add_form").on('click', (function () {
   
      $.ajax({
         url: "../API/itemRequestRest.php",
         type: "POST",
         data: JSON.stringify({itemList : itemReqList,"action":"add"}),
         contentType: "application/json",
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
         url: "../action/itemrequsitionAction.php",
         type: "POST",
         data: {table_name: tableName, key: obj, action: actionNameN, field: fieldName},
         success: function (data) {
            let object = JSON.parse(data);
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
            url: "../action/itemrequsitionAction.php",
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
