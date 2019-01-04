<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>UrvanZone | Admin System Log in</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="<?php echo base_url(); ?>admin_assets/login_asset/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>admin_assets/login_asset/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="<?php echo base_url();?>admin_assets/login_asset/css/style.css">
  </head>
<body class="hold-transition login-page">
<div class="login-box" style="margin-top: -3px">
 <div class="login-logo">
        <a href="#"><b>UrvanZone</b><br>Admin System</a>
      </div><!-- /.login-logo -->
  <!-- /.login-logo -->
  <div class="login-box-body">
     <script src="<?php echo base_url();?>admin_assets/login_asset/lib/sketch.min.js"></script>
        <script src="<?php echo base_url();?>admin_assets/login_asset/lib/dat.gui.min.js"></script>
        <script src="<?php echo base_url();?>admin_assets/login_asset/js/tentacles.js"></script>
    <p class="login-box-msg"> <img src="<?php echo base_url(); ?>images/urvanzone.png" height="170px" width="170px"></a> <br>Sign In</p>
<?php echo $this->session->flashdata('errorMessage') ?>
<?php echo $this->session->flashdata('successMessage') ?>
<?php echo form_open('login_con/login_validation') ?>
      <div class="form-group has-feedback">
        <input type="username" class="form-control" placeholder="Username" name="username">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-7">
              <input type="checkbox"> Remember Me</input>
        </div>
        <!-- /.col -->
        <div class="col-xs-5">
          <button type="submit" class="btn btn-primary btn-raised btn-block btn-flat" align="center">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
   <?php echo form_close() ?>

    <a href="#">Forgot password?</a><br>
    <a href="#">Create Account.</a><br>
  
  </div>
  <!-- /.login-box-body -->
</div>
     </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
</div>
    

    
  </body>
</html>

