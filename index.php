<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Halaman Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->

  <!-- Theme style -->
  <link rel="stylesheet" href="assets/bootstrap/css/AdminLTE.min.css">
  <!-- iCheck -->

  <!-- <link rel="stylesheet" type="text/css" href="css/custom.css"> -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <div style="text-align: center;">
        <h3>HALAMAN LOGIN</h3>

      </div>
    </div>
    <div class="login-box-body">
      <div style="text-align: center;">

      </div>
      <form action="cek_login.php" method="post">
        <div class="form-group has-feedback">
          <input name="username" type="text" class="form-control" placeholder="Username">
          <span class="glyphicon fa fa-user-o form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input name="password" type="password" class="form-control" placeholder="Password">
          <span class="glyphicon fa fa-key form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-8">

          </div>
          <!-- /.col -->
          <div class="col-xs-4">
            <button name="log" style="text-align: center;" type="submit" class="btn btn-primary btn-block btn-flat">Login<i class="fa fa-sign-in"></i></button>
            <br>
          </div>
          <!-- /.col -->
        </div>
      </form>





    </div>
    <!-- /.login-box-body -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery 2.2.3 -->
  <script src="assets/js/jquery-2.2.3.min.js"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>