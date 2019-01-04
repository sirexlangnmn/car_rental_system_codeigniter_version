
<body class="hold-transition skin-blue sidebar-mini">

<!-- Update fuel Modal -->
<div class="" id="update_driver" tabindex="-4" role="dialog" aria-labelledby="myModalLabel">
  <div class="" role="document">
    
<!---->
<div class="login-box" style="margin-top: 45px">
  <div class="login-logo">
    <p><b></b></p>
  </div>

<div style="margin-top: -15px">
  <!-- /.login-logo -->
  <div class="login-box-body">
     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
   <h3 class="login-box-msg"><i class="fa fa-user"></i> Update Fuel</h3>
  <?php foreach ($fuel_get as $row) { ?>
<!--form method="post"-->
    <?php echo form_open_multipart('admin_update/fuel_update'); ?>
    
     <input type="hidden" class="form-control" name="fuel_ID" value="<?php echo $row->fuel_ID ?>">

       <div class="form-group has-feedback">
        <input type="text" class="form-control" name="fuel_Name" placeholder="fuel" value="<?php echo $row->fuel_Name ?>">
        <span class="fa fa-car form-control-feedback"></span>
      </div>
      <h3><div class="box-footer" style="margin-top: -15px; height: 50px">
                   <!-- Button trigger modal -->
                  <button type="submit" class="btn btn-info btn-raised btn-block btn-flat"
                  data-toggle="#" data-target="#"><i class="fa fa-pencil"></i> &nbsp Update
                  </button></h3>
               </div>
    </form>
     <?php } ?>

  </div>
    </div>
  </div>
</div>
</div>



