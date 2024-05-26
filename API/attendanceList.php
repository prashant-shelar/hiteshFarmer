<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
include '../action/dbconnect.php';
include '../action/dboperation.php';
if(!empty($_GET['action'])){
    if($_GET['action'] == "myAttendanceList"){
       $sqlforselect = "select * from attendance where attendance_type = 1 and attendance_user_id =".$_GET['attendance_user_id'];
       $result = $conn->query($sqlforselect);
       echo json_encode(resultsetList($result));
    }
    if($_GET['action'] == "employeeAttendanceList"){
        $sqlforselect = "select * from attendance where attendance_type = 2 and attendance_user_id =".$_GET['attendance_user_id'];
        $result = $conn->query($sqlforselect);
        echo json_encode(resultsetList($result));
    }
}else{
    http_response_code(400);
    echo json_encode(array("message" => "Please Fill Proper Data"));
}

?>