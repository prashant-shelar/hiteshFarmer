<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sarthak</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
 <style>
body  {
  background-image: url("./dist/img/bg-image.jpg");
  background-repeat: no-repeat;
  background-color: #cccccc;
   width: 100%;
  height: 100%;
}
</style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b style="color: aliceblue;">Saarthak Developer </b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Login in to start your session</p>

      <form id="login_form">
        <div class="input-group mb-3">
          <input type="hidden" class="form-control" name="action" value="login" placeholder="Email">
          <input type="text" class="form-control" name="userName" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" id="Submit" class="btn btn-primary btn-block">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    
      <!-- /.social-auth-links -->

     
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
<script>
    var Toast = Swal.mixin({ 
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
           $("#login_form").on('submit', (function (e) {
                e.preventDefault();
                $.ajax({url: "./action/loginAction.php", 
                    type: "POST", 
                    data: new FormData(this), 
                    contentType: false, 
                    cache: false, 
                    processData: false, 
                    success: function (data) {
     
                       if(JSON.parse(data).status){
                            Toast.fire({
                              icon: 'success',
                              title: 'Login Successfull'
                            });
                            window.location.href = "dashboard/dashboard.php";
                       }else{
                           document.getElementById("login_form").reset();
                           Toast.fire({
                              icon: 'error',
                              title: 'Please Check Username And Password'
                            });
                       }
                    }, error: function () {
                    }});
            }));
        </script> 
</body>
</html>
