<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
header("Access-Control-Allow-Methods: POST");
$data = json_decode(file_get_contents("php://input"));
if( !empty($data->task_id) && !empty($data->action)){
    include '../action/dbconnect.php';
    include '../action/dboperation.php';
    if($data->action == "commentadd"){
        $attachment = "";
       
        if ($data->task_attachment != null) {
            
            
            $bin = base64_decode($data->task_attachment);
            $size = getImageSizeFromString($bin);
            $ext = substr($size['mime'], 6);
            $target_dir = "../taskAttachment/".$data->task_id."/";
            $IMG_NAME = uniqid( ).$ext;
            $img_file = $target_dir.$IMG_NAME;
            file_put_contents($img_file, $bin);
            
            
            $file_path = $target_dir;
            file_exists($file_path);
            if(!file_exists($file_path)){
                mkdir($file_path, 0777, true);
            }
            
            $attachment = $IMG_NAME;
            $taskComment['task_attachment'] = $attachment;
        }
        $taskComment['task_attachment'] = $attachment;
        $taskComment['task_comment_main_id'] = $data->task_id;
        $taskComment['task_comment_status'] = $data->task_status;
        $taskComment['task_comment_comment'] = $data->task_comment_comment;
        $taskComment['commentby'] = $data->user_fullName;
        $taskComment['updatedat'] = date('d-m-y');
        AddOperation("task_comment", $taskComment, $conn);
        $sqlupdateStatus = "update  task set task_status = '".$data->task_status."' where task_id = '".$data->task_id."'";
        $conn->query($sqlupdateStatus);
        $response['status'] = true;
        $response['message'] = "Update Successfully";
    }
    echo json_encode($response);
}else{
    http_response_code(400);
    echo json_encode(array("message" => "Please Fill UserName And Password"));
}
?>