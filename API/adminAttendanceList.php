<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
include '../action/dbconnect.php';
include '../action/dboperation.php';
if(!empty($_GET['attendance_type'])){
       $sqlforselect = "select * from attendance where attendance_type =".$_GET['attendance_type'];
       $result = $conn->query($sqlforselect);
       echo json_encode(resultsetList($result));
}else{
    http_response_code(400);
    echo json_encode(array("message" => "Please Fill Proper Data"));
}

?>