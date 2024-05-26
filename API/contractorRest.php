<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
include '../action/dbconnect.php';
include '../action/dboperation.php';
include('../action/getList.php');
$listobj = new getList();
$listdata = $listobj->MasterLoadList($conn, 'contractor');
echo json_encode(resultsetList($listdata));
?>