<?php

   include './dbconnect.php';
   include './dboperation.php';
   $action = $_POST['action'];

   if ($_POST['action'] == "add") {
      if (AddOperation("dropdown", $_POST, $conn) == 1) {

         $response['status'] = true;
         $response['message'] = "Added Successfully";
      } else {
         $response['status'] = false;
         $response['message'] = "Somthing Wrong Input";
      }
      $conn->close();
      echo json_encode($response);
   }

   if ($_POST['action'] == "edit") {
      if (UpdateOperation("dropdown", $_POST, $conn) == 1) {
         $response['status'] = true;
         $response['message'] = "Update Successfully";
      } else {
         $response['status'] = false;
         $response['message'] = "Somthing Wrong Input";
      }
      $conn->close();
      echo json_encode($response);
   }

   if ($_POST['action'] == "singlerecord") {
      $result = getsinglerecord($_POST['table_name'], $_POST['key'], $conn, $_POST['field']);
      $conn->close();
      echo json_encode($result);
   }

   if ($_POST['action'] == "deleterecord") {
      $result = DeleteSoftOperation($_POST['table_name'], $_POST['key'], $conn, $_POST['field']);
      $conn->close();
      echo json_encode($result);
   }
