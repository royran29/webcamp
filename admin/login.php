<?php 
session_start();
if(isset($_GET['sign_out'])){
  session_destroy();
}

include_once 'functions/functions.php';
include_once 'templates/header.php';

?>



  <!-- =============================================== -->
<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="../index.php"><b>GDL</b>WebCamp</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form role="form" name="login-admin" id="login-admin-form" method="POST" action="insert-admin.php">
        <div class="form-group has-feedback">
          <input type="text" class="form-control" name="user" placeholder="Username">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
  
          <!-- /.col -->
          <div class="col-xs-12 ">
            <input type="hidden" name="login-admin" value="1">
            <button name="login-admin" type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-box-body -->
  </div>

<?php 
include_once 'templates/footer.php';
?>

