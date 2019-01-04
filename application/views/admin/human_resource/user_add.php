
 <!--Add User Modal--> 
<div class="modal fade" id="Add_User" tabindex="-2" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    
<!---->
<div class="login-box" style="margin-top: 60px">
  <div class="login-logo">
    <p><b></b></p>
  </div>

<div style="margin-top: -40px">
  <!-- /.login-logo -->
  <div class="login-box-body">
     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
     <h3 class="login-box-msg"><i class="fa fa-user"></i> Add User</h3>

<?php echo form_open_multipart('admin_insert/user_insert'); ?>
       <div class="form-group has-feedback" style="margin-top: -5px">
        <input type="text" class="form-control" name="Lastname" placeholder="Last Name">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
       <div class="form-group has-feedback" style="margin-top: -7px">
        <input type="text" class="form-control" name="Firstname" placeholder="First Name">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback" style="margin-top: -7px">
        <input type="text" class="form-control" name="Middlename" placeholder="Middle Name">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
       <div class="form-group has-feedback"  style="margin-top: -7px">
        <input type="text" class="form-control" name="Address" placeholder="Address">
        <span class="glyphicon glyphicon-map-marker form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback" style="margin-top: -7px">
        <input type="email" class="form-control" name="Email" placeholder="Email Address">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback" style="margin-top: -7px">
        <input type="text" class="form-control" name="Contact" placeholder="Contact Number">
        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback" style="margin-top: -7px">
        <input type="text" class="form-control" name="Username" placeholder="Username">
        <span class="glyphicon glyphicon-map-marker form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback" style="margin-top: -7px">
        <input type="password" class="form-control" name="Password" placeholder="Password">
        <span class="glyphicon glyphicon-map-marker form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback" style="margin-top: -7px">
           <select class="form-control select2" style="width: 100%;" class="form-control" name="Position" placeholder="Position">
                  <option value="Admin">Admin</option>
                  <option value="Staff">Staff</option>
            </select>
      </div>
      <div class="form-group"  style="margin-top: -7px; margin-bottom: 30px">
         <input type="text" size="20" readonly="" class="form-control" name="Picture" placeholder="Browse Picture...">
         <input type="file" id="exampleInputFile">
         <span class="glyphicon glyphicon-picture form-control-feedback"></span>
      </div>
      <div class="col-xs-12 col-lg-12" style="margin-top: -40px">
            <!-- Button trigger modal -->
            <h3><button type="submit" class="btn btn-info btn-raised btn-block btn-flat"
            data-toggle="#" data-target="#"><i class="fa fa-pencil"></i> &nbsp Submit</button></h3>
      </div>
    </form>
  </div>
    </div>
  </div>
</div>
</div>
