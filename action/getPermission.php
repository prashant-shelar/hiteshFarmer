<?php

   if (session_status() === PHP_SESSION_NONE) {
      session_start();
   }
   date_default_timezone_set("Asia/Kolkata");

   function getpermission($actionCode) {
      $status = false;
      if (isset($_SESSION['Useraction'])) {
//      print_r($_SESSION);
         foreach ($_SESSION['Useraction'] as $value) {
            if ($actionCode == $value) {
//         echo $value . "<br>";
               $status = true;
               break;
            }
         }
      }
      //return $status;
      return true;
   }

?>
