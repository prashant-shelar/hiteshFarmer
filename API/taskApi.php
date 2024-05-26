<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
///$data = json_decode(file_get_contents("php://input"));
if(!empty($_GET['action'])){
    include '../action/dbconnect.php';
    include '../action/dboperation.php';
    include('../action/getList.php');
    $listobj = new getList();
    //echo $_GET['action'];
    if($_GET['action'] == "gettaskforuser"){
        echo json_encode(getlistrecord("task",$_GET['task_assign_user_id'],$conn,"task_assign_user_id"));
    }
    if($_GET['action'] == "singleTaskUser"){
       
        $sql = "select * from task t inner join project p on p.project_Id=t.task_Id where task_id = ". $_GET['task_id'];
        $response['taskDetail'] = getsinglerecordbysql($sql,$conn);
        $response['taskComment'] = getlistrecord("task_comment",$_GET['task_id'],$conn,"task_comment_main_id");
        $response['statusList'] =  resultsetList($listobj->DropdownList($conn, "dropdown", "dropdownKey", "TASK_STATUS"));
        
        echo json_encode($response);
    }
}else{
    http_response_code(400);
    echo json_encode(array("message" => "Please Fill Proper Data"));
}
?>