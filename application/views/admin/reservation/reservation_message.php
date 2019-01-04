
<body class="hold-transition skin-blue sidebar-mini">

<!-- Update Category Modal -->
<div class="" id="reservation_message" tabindex="-4" role="dialog" aria-labelledby="myModalLabel">
  <div class="" role="document">
    
<!---->
<div class="login-box" style="margin-top: 45px">
  <div class="login-logo">
    <p><b></b></p>
  </div>

<div style="margin-top: -15px">
  <!-- /.login-logo -->
  <div class="login-box-body">
   <h3 class="login-box-msg"><i class="fa fa-user"></i> Update Category</h3>
  <!--?php foreach ($cat_get as $row) { ?-->
<!--form method="post"-->
    <!--?php echo form_open_multipart('admin_update/cat_update'); ?-->
    
    <?php foreach ($customer as $row) { ?>
     <input type="hidden" class="form-control" name="reservation_ID" value="<?php echo $row->reservation_ID ?>">

       <div class="form-group has-feedback">
        <input type="text" class="form-control" name="category_Name" placeholder="Category" value="<?php echo $row->cus_Firstame." ".$row->cus_Lastname ?>">
        <span class="fa fa-car form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="category_Name" placeholder="Category" value="<?php echo $row->reservation_ID; ?>">
        <span class="fa fa-car form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="category_Name" placeholder="Category" value="<?php echo $row->category_Name ?>">
        <span class="fa fa-car form-control-feedback"></span>
      </div>
 <?php foreach ($reservation_message as $row) { ?>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="category_Name" placeholder="Category" value="<?php echo $row->message ?>">
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



