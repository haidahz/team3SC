<?php include 'pages/headerGuest.php'; 
session_start();

if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php"); 
    exit();
}
?>

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
  <img src="hotelpic.png" height="100px" alt="Hotel Logo">
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="authenticate.php" method="post">
        <div class="input-group mb-3">
          <input type="text" name="uname" class="form-control" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="psw" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      
    <!-- /.login-card-body -->
  </div>
</div>

<?php include 'pages/footer.php'; ?>