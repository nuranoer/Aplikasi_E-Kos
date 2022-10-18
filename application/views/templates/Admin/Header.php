<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> Admin USA-KOST.COM</title>
  <!-- BOOTSTRAP STYLES-->
  <link href="<?php echo base_url() ?>assets/admin/css/bootstrap.css" rel="stylesheet" />
  <!-- FONTAWESOME STYLES-->
  <link href="<?php echo base_url() ?>assets/admin/css/font-awesome.css" rel="stylesheet" />
  <!-- CUSTOM STYLES-->
  <link href="<?php echo base_url() ?>assets/admin/css/custom.css" rel="stylesheet" />
  <!-- GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>



  <div id="wrapper">
     <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="adjust-nav">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo site_url('home'); ?>">
              <img src="<?php echo base_url() ?>assets/admin//img/logo.png" />

          </a>

      </div>

      <span class="logout-spn" >
        <a href="<?php echo site_url('login/logout'); ?>" style="color:#fff;">LOGOUT</a>  

    </span>
</div>
</div>
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
      <ul class="nav" id="main-menu">
       <?php echo generate_sidemenu();?>
      </ul>
    </div>
  </nav>
</div>
</body>