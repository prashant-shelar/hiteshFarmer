<?php
session_start();
include './dbconnect.php';
include './dboperation.php';
$response['status'] = false;
$sql = "SELECT * FROM user where user_Name = ? and password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $_POST['userName'], $_POST['password']);
$stmt->execute();
$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
    $response['status'] = true;
    $response['message'] = "Success";
    $_SESSION['user_id'] = $row['user_id'];
    $_SESSION['user_name'] = $row['user_name'];
    $_SESSION['user_fullName'] = $row['user_fullName'];
    $_SESSION['role'] = $row['role'];
    $_SESSION['user_project_id'] = $row['user_project_id'];
}

echo json_encode($response);
