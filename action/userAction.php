<?php

   include './dbconnect.php';
   include './dboperation.php';
   $action = $_POST['action'];
   
   if ($action == "add") {
      if (AddOperation("user_report", $_POST, $conn) == 1) {

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
      if (UpdateOperation("user_report", $_POST, $conn) == 1) {
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
   
   if ($action == "activate") {
       
        $sqlupdate = "update user_report set user_status ='".$_POST['status']."' where user_id = ".$_POST['key'];
       $conn->query($sqlupdate);
       $response['status'] = true;
       $response['message'] = "Update Successfully";
       echo json_encode($response);
       
       
   }
