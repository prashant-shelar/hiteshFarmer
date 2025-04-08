<?php

include './dbconnect.php';
include './dboperation.php';
$action = $_POST['action'];

//ADD
if ($action == "add") {
    if (AddOperation("lab_report", $_POST, $conn) == 1) {

        $response['status'] = true;
        $response['message'] = "Added Successfully";
    } else {
        $response['status'] = false;
        $response['message'] = "Somthing Wrong Input";
    }
    $conn->close();
    echo json_encode($response);
}

//EDIT
if ($action == "edit") {
    if (UpdateOperation("lab_report", $_POST, $conn) == 1) {
        $response['status'] = true;
        $response['message'] = "Update Successfully";
    } else {
        $response['status'] = false;
        $response['message'] = "Somthing Wrong Input";
    }
    $conn->close();
    echo json_encode($response);
}

//GET SINGLE RECORD
if ($action == "singlerecord") {
    $result = getsinglerecord($_POST['table_name'], $_POST['key'], $conn, $_POST['field']);
    $conn->close();
    echo json_encode($result);
}



