<!DOCTYPE html>
<html>
<head> <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="<?php echo base_url(); ?>design/dist/urvanlogo.png">
  <title>UrvanZone | Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>design/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>design/plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>design/dist/css/AdminLTE.min.css">
  <!-- Material Design -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>design/dist/css/bootstrap-material-design.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>design/dist/css/ripples.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>design/dist/css/MaterialAdminLTE.min.css">
  <!-- MaterialAdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>design/dist/css/skins/all-md-skins.min.css">
 
</head>
<body class="hold-transition skin-blue sidebar-mini">

<!-- Add Fuel Modal -->
<div class="modal fade" id="addFuel" tabindex="-2" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document"> 
<!---->
<div class="login-box" style="margin-top: 45px">
  <div class="login-logo">
    <p><b></b></p>
  </div>

<div style="margin-top: -15px">
  <!-- /.login-logo -->
  <div class="login-box-body">
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span></button>
    <h3 class="login-box-msg"><i class="fa fa-pencil"></i>Add Car Fuel</h3>
 
 <?php echo form_open('Admin_insert/fuel_insert'); ?>
       <div class="form-group has-feedback">
        <input type="text" class="form-control" name="fuel_Name" placeholder=" Car Fuel">
        <span class="fa fa-car form-control-feedback"></span>
      </div>
      <div class="box-footer" style="margin-top: -15px; height: 50px">
          <h3><button type="submit" class="btn btn-info btn-raised btn-block btn-flat"
                  data-toggle="#" data-target="#"><i class="fa fa-pencil"></i> &nbsp Add
              </button>
          </h3>
      </div>
    </form>
  </div>
    </div>
  </div>
</div>
</div>



<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url(); ?>design/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>design/bootstrap/js/bootstrap.min.js"></script>
<!-- Material Design -->
<script src="<?php echo base_url(); ?>design/dist/js/material.min.js"></script>
<script src="<?php echo base_url(); ?>design/dist/js/ripples.min.js"></script>
<script>
    $.material.init();
</script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>design/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>design/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>design/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>design/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>design/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>design/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>

</body>
</html>