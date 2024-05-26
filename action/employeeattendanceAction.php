
<?php

include './dbconnect.php';
include './dboperation.php';
$action = $_POST['action'];

if ($action == "add") {

    $validationFlag = true;

    if ($_POST['attendance_date'] == '') {
        
    $validationFlag = false;
    $response['message'] = "Somthing Wrong Input for Attendance Date";

    }elseif ($_POST['login_time'] == '') {
        
        $validationFlag = false;
        $response['message'] = "Somthing Wrong Input for Logout Time";

    }elseif ($_POST['attendance_project_id'] == '') {
        
        $validationFlag = false;
        $response['message'] = "Somthing Wrong Input for Attendance Project Id";

    }elseif ($_POST['attendance_contractor_id'] == '') {
        
        $validationFlag = false;
        $response['message'] = "Somthing Wrong Input for Attendance Contractor";

    }elseif ($_POST['attendance_meason'] == '') {
        
        $validationFlag = false;
        $response['message'] = "Somthing Wrong Input Attendance Meason";
    
    }elseif ($_POST['attendance_helper'] == '') {
        
        $validationFlag = false;
        $response['message'] = "Somthing Wrong Input for Attendance Helper";
    
    }

    if ($validationFlag) {

        $_POST['createdat'] = date('d-m-y');
        $sqlcheck = "select * from attendance where attendance_date = CURDATE() and attendance_contractor_id =".$_POST['attendance_contractor_id'];
        $result = $conn->query($sqlcheck);
       
        if ($result->num_rows == 0) {
        if (AddOperation("attendance", $_POST, $conn) == 1) {
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
        $conn->close();
        echo json_encode($response);
    
    }else{
        $response['status'] = false;
        $conn->close();
        echo json_encode($response);
    }
  
}

if ($action == "edit") {
    if (UpdateOperation("attendance", $_POST, $conn) == 1) {

        $validationFlag = true;

        if ($_POST['attendance_date'] == '') {
        
        $validationFlag = false;
        $response['message'] = "Somthing Wrong Input for Attendance Date";

        }elseif ($_POST['logout_time'] == '') {
            
            $validationFlag = false;
            $response['message'] = "Somthing Wrong Input for Logout Time";

        }elseif ($_POST['attendance_project_id'] == '') {
            
            $validationFlag = false;
            $response['message'] = "Somthing Wrong Input for Attendance Project Id";

        }elseif ($_POST['attendance_contractor_id'] == '') {
            
            $validationFlag = false;
            $response['message'] = "Somthing Wrong Input for Attendance Contractor";

        }elseif ($_POST['attendance_meason'] == '') {
            
            $validationFlag = false;
            $response['message'] = "Somthing Wrong Input Attendance Meason";
        
        }elseif ($_POST['attendance_helper'] == '') {
            
            $validationFlag = false;
            $response['message'] = "Somthing Wrong Input for Attendance Helper";
        
        }

        if ($validationFlag) {
            $response['status'] = true;
            $response['message'] = "Update Successfully";
        }else{
            $response['status'] = false;
        }
        
    } else {
        $response['status'] = false;
    }
    $conn->close();
    echo json_encode($response);
}

if ($action == "singlerecord") {
    $result = getsinglerecord($_POST['table_name'], $_POST['key'], $conn, $_POST['field']);
    $conn->close();
    echo json_encode($result);
}

if ($action == "singlerecorduserid") {
     $sqlcheck = "select attendance_id from attendance where attendance_user_id =".$_SESSION['user_id']." limit 0,1";
    $result = $conn->query($sqlcheck);
    $conn->close();
    echo json_encode(resultsetArray($result));
}

if ($action == "singlerecordcontratorid") {
    $sqlcheck = "select * from attendance where attendance_user_id =".$_SESSION['user_id']." limit 0,1";
    $result = $conn->query($sqlcheck);
    $conn->close();
    echo json_encode(resultsetArray($result));
}

if ($action == "deleterecord") {
    $result = DeleteSoftOperation($_POST['table_name'], $_POST['key'], $conn, $_POST['field']);
    $conn->close();
    echo json_encode($result);
}

          

