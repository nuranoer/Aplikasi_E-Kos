<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Login Member</title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url();?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url();?>assets/css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header"><center>LOGIN MEMBER</div>
      <div class="card-body">
        <form role="form" method="post" action="">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="text" class="form-control" name="email_member" placeholder="Enter email" autofocus>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="pass_member"  placeholder="Password">
          </div>
          
          <button type="submit" class="btn btn-warning btn-block">Login</button>
        </form><br>
        <div class="text-center">
          <a  href="<?php echo base_url()."Welcome/Regis";?>"">Registrasi Member</a><br><br>
           <a  href="<?php echo base_url()."Welcome/Index";?>"">Kembali ke Beranda</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url();?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
