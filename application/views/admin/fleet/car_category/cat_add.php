
<body class="hold-transition skin-blue sidebar-mini">

<!-- Add Category Modal -->
<div class="modal fade" id="addcategory" tabindex="-2" role="dialog" aria-labelledby="myModalLabel">
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
    <h3 class="login-box-msg"><i class="fa fa-pencil"></i>Add Car Category</h3>
 
 <?php echo form_open('Admin_insert/cat_insert'); ?>
 
    <?php echo validation_errors(); ?>
       <div class="form-group has-feedback">
        <input type="text" class="form-control" name="category_Name" placeholder=" Car Category">
        <span class="fa fa-car form-control-feedback"></span>
      </div>
      <div class="box-footer" style="margin-top: -15px; height: 50px">
          <h3><button type="submit" class="btn btn-info btn-raised btn-block btn-flat"
                  data-toggle="#" data-target="#"><i class="fa fa-pencil"></i> &nbsp Add
                  </button></h3>
      </div>
    </form>
  </div>
    </div>
  </div>
</div>
</div>



