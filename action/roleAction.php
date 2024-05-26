
<?php

include './dbconnect.php';
include './dboperation.php';
$action = $_POST['action'];

if ($action == "add") {
    if (AddOperation("role", $_POST, $conn) == 1) {
        
        $response['status'] = true;
        $response['message'] = "Added Successfully";
    } else {
        $response['status'] = false;
        $response['message'] = "Somthing Wrong Input";
    }
    $conn->close();
    echo json_encode($response);
}

if ($action == "edit") {
    if (UpdateOperation("role", $_POST, $conn) == 1) {
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


