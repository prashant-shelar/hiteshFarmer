
<?php

include './dbconnect.php';
include './dboperation.php';
$action = $_POST['action'];

if ($action == "add") {

    $validationFlag = true;

    if ($_POST['building_name'] == '') {
        
        $validationFlag = false;
        $response['message'] = "Somthing Wrong Input for Building Name";

    }elseif ($_POST['building_project_id'] == '') {
        
        $validationFlag = false;
        $response['message'] = "Somthing Wrong Input for Building Project Id";

    }

     if ($validationFlag) {
        if (AddOperation("building", $_POST, $conn) == 1) {
            $buildingId = $conn->insert_id;
            $target_dir = "../drawing/".$buildingId."/";
            $file_path = $target_dir;
            $_POST['building_id'] = $buildingId;
            if (!file_exists($file_path)) {
                mkdir($file_path, 0777, true);
                $target_file = $target_dir . basename($_FILES["floor_plan"]["name"]);
                $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
                if (move_uploaded_file($_FILES["floor_plan"]["tmp_name"], $target_file)) {
                    $_POST['floor_plan'] = basename($_FILES["floor_plan"]["name"]);
                }
                $target_file = $target_dir . basename($_FILES["working_drawing"]["name"]);
                $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
                if (move_uploaded_file($_FILES["working_drawing"]["tmp_name"], $target_file)) {
                    $_POST['working_drawing'] = basename($_FILES["working_drawing"]["name"]);
                }
                $target_file = $target_dir . basename($_FILES["plumbing_drawing"]["name"]);
                $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
                if (move_uploaded_file($_FILES["plumbing_drawing"]["tmp_name"], $target_file)) {
                    $_POST['plumbing_drawing'] = basename($_FILES["plumbing_drawing"]["name"]);
                }
                $target_file = $target_dir . basename($_FILES["structural_drawing"]["name"]);
                $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
                if (move_uploaded_file($_FILES["structural_drawing"]["tmp_name"], $target_file)) {
                    $_POST['structural_drawing'] = basename($_FILES["structural_drawing"]["name"]);
                }
                $target_file = $target_dir . basename($_FILES["electrical_drawing"]["name"]);
                $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
                if (move_uploaded_file($_FILES["electrical_drawing"]["tmp_name"], $target_file)) {
                    $_POST['electrical_drawing'] = basename($_FILES["electrical_drawing"]["name"]);
                }
            } else {
                $target_file = $target_dir . basename($_FILES["floor_plan"]["name"]);
                $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
                if (move_uploaded_file($_FILES["floor_plan"]["tmp_name"], $target_file)) {
                    $_POST['floor_plan'] = basename($_FILES["floor_plan"]["name"]);
                }
                $target_file = $target_dir . basename($_FILES["working_drawing"]["name"]);
                $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
                if (move_uploaded_file($_FILES["working_drawing"]["tmp_name"], $target_file)) {
                    $_POST['working_drawing'] = basename($_FILES["working_drawing"]["name"]);
                }
                $target_file = $target_dir . basename($_FILES["plumbing_drawing"]["name"]);
                $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
                if (move_uploaded_file($_FILES["plumbing_drawing"]["tmp_name"], $target_file)) {
                    $_POST['plumbing_drawing'] = basename($_FILES["plumbing_drawing"]["name"]);
                }
                $target_file = $target_dir . basename($_FILES["structural_drawing"]["name"]);
                $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
                if (move_uploaded_file($_FILES["structural_drawing"]["tmp_name"], $target_file)) {
                    $_POST['structural_drawing'] = basename($_FILES["structural_drawing"]["name"]);
                }
                $target_file = $target_dir . basename($_FILES["electrical_drawing"]["name"]);
                $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
                if (move_uploaded_file($_FILES["electrical_drawing"]["tmp_name"], $target_file)) {
                    $_POST['electrical_drawing'] = basename($_FILES["electrical_drawing"]["name"]);
                }
            }
           
            UpdateOperation("building", $_POST, $conn);
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
    if (UpdateOperation("building", $_POST, $conn) == 1) {
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


