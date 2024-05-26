
<?php
session_start();
include './dbconnect.php';
include './dboperation.php';
$action = $_POST['action'];

if ($action == "add") {

    $validationFlag = true;

    if ($_POST['task_project_id'] == '') {
        
        $validationFlag = false;
        $response['message'] = "Somthing Wrong Input for Task Project Id";

    }elseif ($_POST['task_assign_user_id'] == '') {
        
        $validationFlag = false;
        $response['message'] = "Somthing Wrong Input for Assigned User Id";

    }elseif ($_POST['task_startDate'] == '') {
        
        $validationFlag = false;
        $response['message'] = "Somthing Wrong Input for Task Start Date";

    }elseif ($_POST['task_tentive_end'] == '') {
        
        $validationFlag = false;
        $response['message'] = "Somthing Wrong Input for Task Tentive End";

    }elseif ($_POST['task_title'] == '') {
        
        $validationFlag = false;
        $response['message'] = "Somthing Wrong Input for Task Title";

    }elseif ($_POST['task_description'] == '') {
        
        $validationFlag = false;
        $response['message'] = "Somthing Wrong Input Task Description";
    
    }elseif ($_POST['task_comment_comment'] == '') {
        
        $validationFlag = false;
        $response['message'] = "Somthing Wrong Input for Task Comment";
    
    }elseif ($_POST['task_status'] == '') {
        
        $validationFlag = false;
        $response['message'] = "Somthing Wrong Input Task Status";
    }

    if ($validationFlag) {

        $_POST['task_user_name']= getuserFullname($_POST['task_assign_user_id'],$conn);
       
        $_POST['task_status']= "TO DO";
        if (AddOperation("task", $_POST, $conn) == 1) {
            $task_id = $conn->insert_id;
            $attachment = "";
            SendNotifactionToMobile($_POST['task_title'],$_POST['task_description'],getuserTocken($_POST['task_assign_user_id'],$conn));
            if (isset($_FILES["task_attachment"])) {
            $target_dir = "../taskAttachment/".$task_id."/";
            $file_path = $target_dir;
            if (!file_exists($file_path)) {
                mkdir($file_path, 0777, true);
                $target_file = $target_dir . basename($_FILES["task_attachment"]["name"]);
                $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
                if (move_uploaded_file($_FILES["task_attachment"]["tmp_name"], $target_file)) {
                    $attachment = basename($_FILES["task_attachment"]["name"]);
                }
            }
            $taskComment['task_attachment'] = $attachment;
            }
            $taskComment['task_comment_main_id'] = $task_id;
            $taskComment['task_comment_status'] = "TO DO";
            $taskComment['task_comment_comment'] = $_POST['task_comment_comment'];
            $taskComment['task_previous_status'] = "NEW";
            $taskComment['commentby'] = $_SESSION['user_fullName'];
            $taskComment['updatedat'] = date('d-m-y');
            
            AddOperation("task_comment", $taskComment, $conn);
            $response['status'] = true;
            $response['message'] = "Added Successfully";
        } else {
            $response['status'] = false;
            $response['message'] = "Somthing Wrong Input";
        }
        
    }else{
        $response['status'] = false;
    }


    $conn->close();
    echo json_encode($response);
}

if ($action == "edit") {
    $attachment = "";
    if (UpdateOperation("task", $_POST, $conn) == 1) {
        SendNotifactionToMobile("Update".$_POST['task_title'],"Update".$_POST['task_description'],getuserTocken($_POST['task_assign_user_id'],$conn));
        if (isset($_FILES["task_attachment"])) {
           
         $target_dir = "../taskAttachment/".$_POST['task_id']."/";
         $file_path = $target_dir;
         file_exists($file_path);
          if(!file_exists($file_path)){
              mkdir($file_path, 0777, true);
          }
            
            $target_file = $target_dir . basename($_FILES["task_attachment"]["name"]);
            $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
            if (move_uploaded_file($_FILES["task_attachment"]["tmp_name"], $target_file)) {
                $attachment = basename($_FILES["task_attachment"]["name"]);
            }
            $taskComment['task_attachment'] = $attachment;
        }
        $taskComment['task_comment_main_id'] = $_POST['task_id'];
        $taskComment['task_comment_status'] = $_POST['task_status'];
        $taskComment['task_previous_status'] = "NEW";
        $taskComment['task_comment_comment'] = $_POST['task_comment_comment'];
        $taskComment['commentby'] = $_SESSION['user_fullName'];
        $taskComment['updatedat'] = date('d-m-y');
        AddOperation("task_comment", $taskComment, $conn);
        $response['status'] = true;
        $response['message'] = "Update Successfully";
    } else {
        $response['status'] = false;
        $response['message'] = "Somthing Wrong Input";
    }
    $conn->close();
    echo json_encode($response);
}

if ($action == "singlerecord") {
    $result = getsinglerecord($_POST['table_name'], $_POST['key'], $conn, $_POST['field']);
    $conn->close();
    echo json_encode($result);
}

if ($action == "deleterecord") {
    $result = DeleteSoftOperation($_POST['table_name'], $_POST['key'], $conn, $_POST['field']);
    $conn->close();
    echo json_encode($result);
}

function getuserFullname($userId,$conn){
    $result = getsinglerecord("user", $userId, $conn, "user_id");
    return $result['user_fullName'];
}

function getuserTocken($userId,$conn){
    $result = getsinglerecord("user", $userId, $conn, "user_id");
    return $result['notifactionTocken'];
}


if($action == "taskComment"){
    
    $result = GetAllRecordBySql('select * from task_comment where task_comment_main_id = '.$_POST['key'].' order by task_commnt_id desc', $conn);
    $conn->close();
   $response = '<table id="example1" class="table table-bordered table-striped">
   				<thead>
      				<tr>
                        <th>Download</th>
                        <th>Comment</th>
                         <th>Status</th>
                         <th>CommentBy</th>
                     </tr>
                 </thead>
                 <tbody>';
  foreach ($result as $row) {
      
      $response .= '<tr>';
      if($row['task_attachment'] != null){
          $response .= '<th><a title="Download" href="../taskAttachment/'.$_POST['key'].'/'.$row['task_attachment'].'"download=""><i class="fa fa-download"></i></a> ';
          $response .= '<a title="View" style = "padding-left: 15px;" target="_blank" href="../taskAttachment/'.$_POST['key'].'/'.$row['task_attachment'].'"><img width="150" height="150" src="../taskAttachment/'.$_POST['key'].'/'.$row['task_attachment'].'" class="img-rounded" alt="attachement"></a></th>';
      }else{
          $response .= '<th></th>';
          
      }
      $response .='<th>'.$row['task_comment_comment'].'</th>';
      if ($row['task_comment_status'] == 'TO DO') {
        $response .='<th><span class="badge bg-info">'.$row['task_comment_status'].'</span></th>';
      }elseif ($row['task_comment_status'] == 'IN PROGRESS') {
        $response .='<th><span class="badge bg-warning">'.$row['task_comment_status'].'</span></th>';
      }elseif ($row['task_comment_status'] == 'ON HOLD') {
        $response .='<th><span class="badge bg-primary">'.$row['task_comment_status'].'</span></th>';
      }elseif ($row['task_comment_status'] == 'COMPLETE') {
        $response .='<th><span class="badge bg-success">'.$row['task_comment_status'].'</span></th>';
      }elseif ($row['task_comment_status'] == 'CLOSE') {
        $response .='<th><span class="badge bg-danger">'.$row['task_comment_status'].'</span></th>';
      }
      
      $response .='<th>'.$row['commentby'].'</th>';
      $response .= '</tr>';
  }
                   
            $response .= '</tbody></table>';
            echo $response;
}
