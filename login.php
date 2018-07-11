
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login | Co-Sy Fertility Clinic</title>
  <?php require_once('inc/header.php');?>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="login-box-body">
    <div class="login-logo">
   <img src="img/logo.png" width="122">
  </div>

    <form id="form-login" class="form-horizontal" enctype="multipart/form-data" method="post">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="pword">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
        <!-- /.col -->
        <div class="form-group">
          <button type="submit" class="btn btn-success btn-block btn-flat">Sign In</button>
        </div>

    </form>

    <!-- /.social-auth-links -->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/jquery-toast-plugin-master/dist/jquery.toast.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="js/toast-func.js"></script>
<script src="js/login-func.js"></script>
<!-- iCheck -->
</body>
</html>
