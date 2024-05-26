<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
$data = json_decode(file_get_contents("php://input"));
if( !empty($data->userName) && !empty($data->password)){
    include '../action/dbconnect.php';
   
    $response['status'] = false;
    $sql = "SELECT * FROM user where user_active='Y' and user_Name = ? and password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $data->userName, $data->password);
    $stmt->execute();
    $result = $stmt->get_result();
    
   
    while ($row = $result->fetch_assoc()) {
        $response['status'] = true;
        $response['userId'] = $row['user_id'];
        $response['userFullName'] = $row['user_fullName'];
        $response['projectId'] = $row['user_project_id'];
        $response['role'] = $row['role'];
        $response['message'] = "Success";
    }
    
    $updateTocket = "update user set notifactionTocken ='".$data->notifactionTocken."' where user_name = '".$data->userName."'";
    $conn->query($updateTocket);
    http_response_code(200);
    echo json_encode($response);
}
else{
   
    http_response_code(400);
    echo json_encode(array("message" => "Please Fill UserName And Password"));
}
?>