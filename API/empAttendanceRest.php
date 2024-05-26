<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
$data = json_decode(file_get_contents("php://input"));
if( !empty($data->attendance_user_id) && !empty($data->action)){
    include '../action/dbconnect.php';
    include '../action/dboperation.php';
    if($data->action == "login"){
    $sqlcheck = "select * from attendance where attendance_date = CURDATE() and attendance_type = 2 and attendance_user_id =".$data->attendance_user_id;
    $result = $conn->query($sqlcheck);
    $requestDate['attendance_flag'] = "Y"; 
    $requestDate['attendance_type'] = "2"; 
    $requestDate['current_day'] = $data->current_day; 
    $requestDate['current_month'] = $data->current_month; 
    $requestDate['current_year'] = $data->current_year;
    $requestDate['attendance_user_name'] = $data->attendance_user_name;
    $requestDate['attendance_user_id'] = $data->attendance_user_id;
    $requestDate['attendance_date'] = $data->attendance_date;
    $requestDate['login_time'] = $data->login_time;
    $requestDate['attendance_project_id'] = $data->attendance_project_id;
    $requestDate['attendance_contractor_id'] = $data->attendance_contractor_id;
    $requestDate['attendance_meason'] = $data->attendance_meason;
    $requestDate['attendance_helper'] = $data->attendance_helper;
    $requestDate['attendance_department'] = $data->attendance_department;
    $requestDate['updatedat'] = $data->updatedat;
    $requestDate['updatedby'] = $data->updatedby;    
    $requestDate['createdat'] = date('d-m-y');
    $requestDate['attendance_let'] = $data->attendance_let;
    $requestDate['attendance_long'] = $data->attendance_long;
    $requestDate['attendance_comment'] = $data->attendance_comment;
    $requestDate['attendance_status'] = "0";
    if ($result->num_rows == 0) {
        if (AddOperation("attendance", $requestDate, $conn) == 1) {
            $response['status'] = true;
            $response['message'] = "Added Successfully";
        } else {
            $response['status'] = false;
            $response['message'] = "Somthing Wrong Input";
        }
    }else{
        $response['status'] = true;
        $response['message'] = "Already Time Log!";
    }
     echo json_encode($response);
    }
    if($data->action == "logout"){
        $requestDate['action'] = "logout";
      $sqlcheck = "select * from attendance where attendance_date = CURDATE() and attendance_type = 2 and attendance_user_id =".$data->attendance_user_id;
      $result = $conn->query($sqlcheck);
       
        while ($row = $result->fetch_assoc()) {
          $requestDate['attendance_id'] = $row['attendance_id'];
        }
        $requestDate['attendance_flag'] = "Y";
        $requestDate['attendance_type'] = "2";
        $requestDate['current_day'] = $data->current_day;
        $requestDate['current_month'] = $data->current_month;
        $requestDate['current_year'] = $data->current_year;
        $requestDate['attendance_user_name'] = $data->attendance_user_name;
        $requestDate['attendance_user_id'] = $data->attendance_user_id;
        $requestDate['attendance_date'] = $data->attendance_date;
        $requestDate['logout_time'] = $data->logout_time;
        $requestDate['attendance_project_id'] = $data->attendance_project_id;
        $requestDate['attendance_contractor_id'] = $data->attendance_contractor_id;
        $requestDate['attendance_meason'] = $data->attendance_meason;
        $requestDate['attendance_helper'] = $data->attendance_helper;
        $requestDate['attendance_department'] = $data->attendance_department;
        $requestDate['updatedat'] = $data->updatedat;
        $requestDate['updatedby'] = $data->updatedby;
        $requestDate['attendance_let'] = $data->attendance_let;
        $requestDate['attendance_long'] = $data->attendance_long;
        $requestDate['attendance_comment'] = $data->attendance_comment;
        $requestDate['attendance_status'] = "0";
      
        if (UpdateOperation("attendance", $requestDate, $conn) == 1) {
            $response['status'] = true;
            $response['message'] = "Logout Successfully";
        } else {
            $response['status'] = false;
            $response['message'] = "Somthing Wrong Input";
        }
        http_response_code(200);
        echo json_encode($response);
    }
   
}else{
    http_response_code(400);
    echo json_encode(array("message" => "Please Fill UserName And Password"));
}
?>