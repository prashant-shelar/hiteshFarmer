    <?php

//    if (session_status() === PHP_SESSION_NONE) {
//       if("session in connection");
//       session_start();
//    }
  
//session_start();
// server

// $servername = "profileconsultants.in";
// $username = "thewelln_root";
// $password = "e.@Bl7Qc8moI";
// $db = "thewelln_scheduling";

$servername = "saarthakdeveloper.com";
$username = "saarthak_dev";
$password = "Abhi@7588555845";
$db = "saarthak_temp";

//local

// $servername = "localhost";
// $username = "root";
// $password = "";
// $db = "dhidb";

   $conn = new mysqli($servername, $username, $password, $db);
   if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
   }
   date_default_timezone_set("Asia/Kolkata");
 //  date_default_timezone_set("Asia/Kolkata");
?>