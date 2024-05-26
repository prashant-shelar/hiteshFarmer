<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
$data = json_decode(file_get_contents("php://input"));
if( !empty($data->action)){
    include '../action/dbconnect.php';
    include '../action/dboperation.php';
    print_r($data);
    uniqid();
    
}else{
    http_response_code(400);
    echo json_encode(array("message" => "Please Fill UserName And Password"));
}
?>