<?php

if (session_status() === PHP_SESSION_NONE) {
   session_start();
}
if (isset($_SESSION['userid'])) {
   session_unset();
   session_destroy();
   echo "<script>location.href='../index.php'</script>";
   exit;
} else {
   echo "<script>location.href='../index.php'</script>";
   exit;
}
?>
