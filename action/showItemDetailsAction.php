<?php
error_reporting(E_ERROR);
setlocale(LC_MONETARY,"en_IN");
include './dbconnect.php';
include './dboperation.php';
$action = $_POST['action'];

$validationFlag = true;

if ($_POST['project_id'] == '') {
    
	$validationFlag = false;
	$response['message'] = "Somthing Wrong Input for Project Id";

}elseif ($_POST['supplier_id'] == '') {
    
    $validationFlag = false;
    $response['message'] = "Somthing Wrong Input for Supplier Id";

}

if ($validationFlag) {

	$projectId = trim($_POST['project_id']);
	$supplierId = trim($_POST['supplier_id']);

    $sqlItemDetails =  "SELECT itm.item_id, itm.item_name, itm.item_description, irr.quantity, irr.reason_for_stock, 
                        prj.project_name
                        FROM item_requisition_request irr
                        INNER JOIN item as itm ON itm.item_id = irr.item_select_id
                        INNER JOIN project as prj ON prj.project_id = irr.req_project_id
                        WHERE irr.req_project_id = ".$projectId." ";
	$result = $conn->query($sqlItemDetails);

    $sqlSupplierDetails =  "SELECT sup.supplier_name, sup.supplier_address, sup.supplier_gstno, sup.bank_name, 
                            sup.account_no, sup.ifsc_code
                            FROM supplier sup
                            WHERE sup.supplier_id = ".$supplierId." ";
    $resultSupplier = $conn->query($sqlSupplierDetails);

    $newItemArr = array();
    $newSupplierArr = array();
	$response = '';
    $resultItemArr = array();
    $k = 0;

	foreach ($result as $key => $valueItemArr) {
		$newItemArr[] = $valueItemArr;
	}

    foreach ($resultSupplier as $key => $valueSupplierArr) {
		$newSupplierArr[] = $valueSupplierArr;
	}

    for ($i=0; $i < count($newItemArr); $i++) { 
        $resultItemArr[$i]['item_name'] = $newItemArr[$i]['item_name'];
        $resultItemArr[$i]['item_id'] = $newItemArr[$i]['item_id'];
        $resultItemArr[$i]['item_description'] = $newItemArr[$i]['item_description'];
        $resultItemArr[$i]['quantity'] = $newItemArr[$i]['quantity'];
        $resultItemArr[$i]['reason_for_stock'] = $newItemArr[$i]['reason_for_stock'];
        $resultItemArr[$i]['project_name'] = $newItemArr[$i]['project_name'];
        $resultItemArr[$i]['supplier_name'] = $newSupplierArr[$k]['supplier_name'];
        $resultItemArr[$i]['supplier_address'] = $newSupplierArr[$k]['supplier_address'];
        $resultItemArr[$i]['supplier_gstno'] = $newSupplierArr[$k]['supplier_gstno'];
        $resultItemArr[$i]['bank_name'] = $newSupplierArr[$k]['bank_name'];
        $resultItemArr[$i]['account_no'] = $newSupplierArr[$k]['account_no'];
        $resultItemArr[$i]['ifsc_code'] = $newSupplierArr[$k]['ifsc_code'];
        $resultItemArr[$i]['supplier_id'] = $supplierId;
    }

	$response ='  <div class="row" style="margin-top:10px;">
                        <div class="col-12">
                           <div class="alert alert-warning alert-dismissible">
                              <b>Note :</b> Generate the Purchase Order <b> (P.O) as per the Item List shown below </b>.
                           </div>  
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
	                            <div class="card-header">
	                               <h3 class="card-title" style="text-align: center;">Requisition Requested Item List</h3>
	                            </div>
                            
	                            <div class="card-body">
	                                <table class="table table-bordered">
	                                    <thead>
	                                        <tr>
                                                <th>Project </th>
                                                <th>Supplier Details</th>
	                                        </tr>
	                                    </thead>
	                                    <tbody>
                                            <tr>
                                                <td> <span class="badge bg-success"> '.$resultItemArr[$k]['project_name'].' </span></td>
                                                <td bgcolor="#f3dfa4"><span class="badge bg-warning"> '.$resultItemArr[$k]['supplier_name'].' </span><br><br>
                                                    Address : <b> '.$resultItemArr[$k]['supplier_address'].' </b> <br>
                                                    GSTN No :<b> '.$resultItemArr[$k]['supplier_gstno'].' </b><br>
                                                    Bank Details :<b> '.$resultItemArr[$k]['bank_name'].' (Acc No: '.$resultItemArr[$k]['account_no'].' & IFSC : '.$resultItemArr[$k]['ifsc_code'].' ) </b><br>
                                                </td>
                                            <tr>
                                        </tbody>
                                    </table>     

                                        <table class="table table-bordered" style ="margin-top:10px;">
                                        <thead>
                                           <tr>
                                              <th>Action</th>
                                              <th>Item Name </th>
                                              <th>Required Quantity</th>
                                              <th> Quantity</th>
                                              <th> Unit</th>
                                              <th> Note</th>
                                           </tr>
                                       </thead>
                                       <tbody>';
                                    
	for ($j=0; $j < count($resultItemArr); $j++) { 
		$response .=    '<tr>
                            <td>
                                <input type="hidden" class="form-control" name="item_id[]" value="'.$resultItemArr[$j]['item_id'].'">
                                <input type="hidden" class="form-control" name="item_name[]" value="'.$resultItemArr[$j]['item_name'].'">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" id="item_'.$j.'" name="item[]" value="'.$resultItemArr[$j]['item_id'].'" ">
                                </div>
                            </td>   
                            <td bgcolor="#f3dfa4"><b> '.$resultItemArr[$j]['item_name'].' </b> </td>
	                        <td bgcolor="#b4e9b7"><span class="badge bg-danger"> '.$resultItemArr[$j]['quantity'].' </span><br><br> Reason for Stock :<b> '.$resultItemArr[$j]['reason_for_stock'].'</b></td>
                            <td>
                                <div class="form-group">
                                    <label for="email">Purchase Quantity <font color="red">*</font></label>
                                    <input type="text" class="form-control" id="requested_quantity_'.$j.'" name="requested_quantity[]" disabled>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <label for="email">Purchase Unit <font color="red">*</font></label>
                                    <input type="text" class="form-control" id="purchase_unit_'.$j.'" name="purchase_unit[]" disabled>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <label for="email">Purchase Note <font color="red">*</font></label>
                                    <input type="text" class="form-control" id="purchase_note_'.$j.'" name="purchase_note[]" disabled>
                                </div>
                            </td>
	                    </tr>';
    }                    
    $response .=    '
                    <tr>
                    <td bgcolor="#f3dfa4" colspan="5"></td>
                    <td colspan="2">
                        <button type="button" class="btn btn-success" id="generatePO" onclick="generatePurchaseOrder()">Generate P.O.</button>
                    </td>
                    </tr>
                    </tbody>
	               </table>
	             </div>
	       </div>
	      
	    </div>      
	 </div>
     
     
    <div id="poDetails">
                        
    </div>';
		
	

echo $response;

}else{
    
    $response['status'] = false;
    $conn->close();
    //echo json_encode($response);
}

?>

<script>

$(':checkbox').change(function() {
 var item_id = $(this).attr('id');
 var id = item_id.split("_");
 var real_id = id[1];
 if($("#item_"+real_id).is(':checked')){
   $("#requested_quantity_"+real_id).prop('disabled', false);
   $("#purchase_unit_"+real_id).prop('disabled', false);
   $("#purchase_note_"+real_id).prop('disabled', false);
 }
 else {
   $("#requested_quantity_"+real_id).prop('disabled', true);
   $("#purchase_unit_"+real_id).prop('disabled', true);
   $("#purchase_note_"+real_id).prop('disabled', true);
 }
});


function generatePurchaseOrder(){
     
    var requestedQuantity = [];
    $('input[name^="requested_quantity"]').each(function() {
        requestedQuantity.push(this.value);
    });

    var purchaseUnit = [];
    $('input[name^="purchase_unit"]').each(function() {
        purchaseUnit.push(this.value);
    });

    var purchaseNote = [];
    $('input[name^="purchase_note"]').each(function() {
        purchaseNote.push(this.value);
    });

    var itemName = [];
    $('input[name^="item_name"]').each(function() {
        itemName.push(this.value);
    });

    var itemId = [];
    $('input[name^="item_id"]').each(function() {
        itemId.push(this.value);
    });

    var projectId = "<?php echo $projectId; ?>";
    var supplierId = "<?php echo $supplierId; ?>";

    $.ajax({
        url: "../action/generatePurchaseOrderAction.php",
        type: "POST",
        data: {requestedQuantity:requestedQuantity,purchaseUnit:purchaseUnit,purchaseNote:purchaseNote,itemId:itemId,projectId:projectId,supplierId:supplierId,itemName:itemName},
        success: function (data) {
            $('#generatePO').prop('disabled', true);
            $("#poDetails").html(data);
        }
    });

}

</script>





