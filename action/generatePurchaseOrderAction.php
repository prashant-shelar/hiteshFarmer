<?php
session_start();
error_reporting(E_ERROR);
setlocale(LC_MONETARY,"en_IN");
include './dbconnect.php';
include './dboperation.php';

$projectId = trim($_POST['projectId']);
$supplierId = trim($_POST['supplierId']);
$requestedQuantity  = array_filter($_POST['requestedQuantity']);
$purchaseUnit = array_filter($_POST['purchaseUnit']);
$purchaseNote = array_filter($_POST['purchaseNote']);
$response = '';

$insertFlag = false;

for ($i=0; $i < count($requestedQuantity); $i++) { 
    $insertPurchaseOrder = "INSERT INTO puchase_order (purchase_item_id,purchase_item_name,purchase_quantity,purchase_unit,purchase_note,purchase_supplier_id,purchase_project_id, purchase_created_by, purchase_created_at)
                            VALUES (".$_POST['itemId'][$i].", "."'".$_POST['itemName'][$i]."'".", ".$requestedQuantity[$i].", "."'".$purchaseUnit[$i]."'".", "."'".$purchaseNote[$i]."'".", ".$supplierId.", ".$projectId.", "."'".$_SESSION['user_fullName']."'".", current_timestamp)";
    
    $conn->query($insertPurchaseOrder);
    $insertFlag = true;
}

if($insertFlag){
    $response = '<div class="row" style="margin-top:10px;">
                <div class="col-12">
                    <div class="alert alert-success alert-dismissible">
                        <b>Alert :</b> Purchase Order is generated successfully in the System </b>.
                    </div>  
                </div>
            </div>';
}else{
    $response = '<div class="row" style="margin-top:10px;">
                <div class="col-12">
                    <div class="alert alert-danger alert-dismissible">
                        <b>Alert :</b> Unable to generate the Purchase Order, Please contact Administrator </b>.
                    </div>  
                </div>
            </div>';
}

echo $response;


?>