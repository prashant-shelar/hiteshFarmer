
<?php

include './dbconnect.php';
include './dboperation.php';
$action = $_POST['action'];

if ($action == "add") {

    $validationFlag = true;

    if ($_POST['project_Name'] == '') {
        
        $validationFlag = false;
        $response['message'] = "Somthing Wrong Input for Project Name";

    }elseif ($_POST['location'] == '') {
        
        $validationFlag = false;
        $response['message'] = "Somthing Wrong Input for Location";

    }elseif ($_POST['start_date'] == '') {
        
        $validationFlag = false;
        $response['message'] = "Somthing Wrong Input for Start Date";

    }elseif ($_POST['end_Date'] == '') {
        
        $validationFlag = false;
        $response['message'] = "Somthing Wrong Input for End Date";

    }

    if ($validationFlag) {

        if (AddOperation("project", $_POST, $conn) == 1) {
        
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
    if (UpdateOperation("project", $_POST, $conn) == 1) {
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


