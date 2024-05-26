<?php

session_start();

// if (session_status() === PHP_SESSION_NONE) {
//     if("session in connection");
//     session_start();
// }
   include '../action/dbconnect.php';
 //  include '../action/getPermission.php';
 //  echo $_SESSION['user_id'];
//   if (isset($_SESSION['user_id'])) {
 //   echo "sesssion if"  ;
 //  }else {
       
 //      echo "sesssion else";
     // echo "<script>location.href='../index.php'</script>";
      //exit;
 //  }
 
   $fname = $_SESSION['user_name'];
   
  // date_default_timezone_set("Asia/Kolkata");
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Profile</title>

      <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="../dist/css/adminlte.min.css">
      <link rel="stylesheet" href="../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
      <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
      <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
      <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
      <link rel="stylesheet" href="../plugins/select2/css/select2.min.css">
      <!-- Ionicons -->
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- iCheck -->
      <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
      <!-- JQVMap -->
      <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">

      <!-- overlayScrollbars -->
      <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
      <!-- Daterange picker -->
      <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
      <!-- summernote -->
      <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
      
      <script src="../plugins/jquery/jquery.min.js"></script>
      <!-- Bootstrap 4 -->
      <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- AdminLTE App -->
      <script src="../dist/js/adminlte.min.js"></script>
      <!-- AdminLTE for demo purposes -->
<!--      <script src="../dist/js/demo.js"></script>-->
      <script src="../plugins/sweetalert2/sweetalert2.min.js"></script>
      <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
      <script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
      <script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
      <script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
      <script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
      <script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
      <script src="../plugins/jszip/jszip.min.js"></script>
      <script src="../plugins/pdfmake/pdfmake.min.js"></script>
      <script src="../plugins/pdfmake/vfs_fonts.js"></script>
      <script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
      <script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
      <script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
      <script src="../plugins/select2/js/select2.full.min.js"></script>
         
   <body class="hold-transition sidebar-mini">
      <!-- Site wrapper -->
      <div class="wrapper">
         <!-- Navbar -->
         <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a class="nav-link" data-widget="pushmenu" role="button"><i class="fas fa-bars"></i></a>
               </li>
               <li class="nav-item d-none d-sm-inline-block">
                  <a class="nav-link">Home</a>
               </li>
            </ul>
            <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
               <li class="nav-item">
                    <a href="../action/logOut.php" class="btn btn-app bg-danger">
                      <i class="fa fa-power-off"></i> Logout
                    </a>
               </li>
            </ul>
         </nav>
         <!-- /.navbar -->

         <!-- Main Sidebar Container -->
         <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->

            <a class="brand-link">
               <i class="nav-icon fas fa-city"></i>
               <span class="brand-text font-weight-light">Gajanan Auto</span>
            </a>

            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                <img src="../dist/img/user-new.jpg" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info" style="padding-top: 8px;color: whitesmoke;">
                <?php echo ucfirst($fname); ?>
              </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
               <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                 <li class="nav-item">
                     <a href="../dashboard/dashboard.php" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Home</p>
                     </a>
                  </li>

                  <li class="nav-item">
                     <a href="../master/labReport.php" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Report</p>
                     </a>
                  </li>
                 
                  
                  
                 
                  
		          <li class="nav-item">
                     <a  href="#" class="nav-link">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>
                           Configuration
                           <i class="fas fa-angle-right right"></i>
                        </p>
                     </a>
                     <ul class="nav nav-treeview">
                        
                         
                         
                         <li class="nav-item">
                            <a href="../master/distributer.php" class="nav-link" >
                              <i class="fas fa-user nav-icon"></i>
                               <p>Distributer</p>
                               </a>
                         </li> 

                         <li class="nav-item">
                            <a href="../master/retailer.php" class="nav-link" >
                              <i class="fas fa-user nav-icon"></i>
                               <p>Retailer</p>
                               </a>
                         </li> 

                         <li class="nav-item">
                            <a href="../master/user.php" class="nav-link" >
                              <i class="fas fa-user nav-icon"></i>
                               <p>User</p>
                               </a>
                         </li> 
                         
                         
                         <!-- <li class="nav-item">
                            <a href="../master/employee.php" class="nav-link" >
                              <i class="fas fa-user nav-icon"></i>
                               <p>Employee</p>
                               </a>
                         </li> -->
                         
<!--                          <li class="nav-item"> -->
<!--                             <a href="../master/customer.php" class="nav-link" > -->
<!--                               <i class="fas fa-user nav-icon"></i> -->
<!--                                <p>Customer</p> -->
<!--                                </a> -->
<!--                          </li> -->
                         

                       

                     </ul>
                  </li>
                 
                

                  

                 

                  

                

               </ul>
            </nav>
            <!-- /.sidebar-menu -->

            <!-- /.sidebar -->
         </aside>