
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
               <h1>Purchase Order </h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a>Home</a></li>
                  <li class="breadcrumb-item active">Purchase Order</li>
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
                  <h3 class="card-title">Generate Purchase Order</h3>
               </div>
                   
               <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="email">Select Project <font color="red">*</font></label>
                                <select  class="form-control" id="project_id" name="project_id">
                                    <option value="">Select Project</option>
                                    <?php
                                    $listdata = $listobj->MasterLoadList($conn, 'project');
                                    while ($row = $listdata->fetch_assoc()) {
                                        ?>
                                        <option value="<?php echo $row["project_id"] ?>"> <?php echo $row["project_Name"] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                           
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="email">Select Supplier <font color="red">*</font></label>
                                <select  class="form-control" id="supplier_id" name="supplier_id">
                                    <option value="">Select Supplier</option>
                                    <?php
                                    $listdata = $listobj->MasterLoadList($conn, 'supplier');
                                        while ($row = $listdata->fetch_assoc()) {
                                            ?>
                                            <option value="<?php echo $row["supplier_id"] ?>"> <?php echo $row["supplier_name"] ?></option>
                                        <?php } ?>
                                </select>
                            </div>
                        </div>  
                            
                        <div class="col-sm-3" style="margin-top: 23px;">
                            <button type="button" class="btn btn-info" onclick="getItemDetails()">Get Item Details</button>
                        </div>
                    </div>

                    <div id="itemDetails">
                        
                    </div>   

               </div>             
            </div>
         </div>
      </div>
   </section>
   <!-- /.content -->
</div>

<script>
   
function getItemDetails(){

    var project_id = document.getElementById("project_id").value;
    var supplier_id = document.getElementById("supplier_id").value;

    if(project_id == ""){
        alert("Please select project!");
        return false;
    }

    if(supplier_id == ""){
        alert("Please select supplier!");
        return false;
    }

     $.ajax({
        url: "../action/showItemDetailsAction.php",
        type: "POST",
        data: {project_id:$("#project_id").val(),supplier_id:$("#supplier_id").val(),action:'getItemDetails'},
        success: function (data) {
        $("#itemDetails").html(data);
        }
    });
    
}

</script>
<?php include("../them/footer.php"); ?>
