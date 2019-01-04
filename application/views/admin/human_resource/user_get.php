<body class="hold-transition skin-blue sidebar-mini">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <div class="box">
         <div class="box-header">
            <h4><b>Fleet Record</b></h4>

            <div style="margin-top: -15px">
                <!-- /.login-logo -->
                <div class="login-box-body">
                   <h3 class="login-box-msg"><i class="fa fa-user"></i> Update User Record</h3>
                   <?php foreach ($user_get as $row) { ?>
                <!--form method="post"-->
                    <?php echo form_open_multipart('admin_update/user_update'); ?>
                    
                  <input type="hidden" class="form-control" name="ID" value="<?php echo $row->ID ?>">
                  <div class="row" >
                      <div class="col-lg-6 col-xs-12"> 
                        <label>Lastname</label>
                        <div class="form-group has-feedback" style="margin-top: -7px">
                          <input type="text" class="form-control" name="Lastname" value="<?php echo $row->Lastname ?>">
                          <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                      </div>

                      <div class="col-lg-6 col-xs-12"> 
                        <label>Firstname</label>
                       <div class="form-group has-feedback" style="margin-top: -7px">
                        <input type="text" class="form-control" name="Firstname" value="<?php echo $row->Firstname ?>">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                      </div>
                      </div>

                      <div class="col-lg-6 col-xs-12"> 
                        <label>Middlename</label>
                        <div class="form-group has-feedback" style="margin-top: -7px">
                          <input type="text" class="form-control" name="Middlename" value="<?php echo $row->Middlename ?>">
                          <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                      </div>

                      <div class="col-lg-6 col-xs-12"> 
                        <label>Address</label>
                        <div class="form-group has-feedback"  style="margin-top: -7px">
                          <input type="text" class="form-control" name="Address" value="<?php echo $row->Address ?>">
                          <span class="glyphicon glyphicon-map-marker form-control-feedback"></span>
                        </div>
                      </div>

                      <div class="col-lg-6 col-xs-12"> 
                        <label>Email</label>
                        <div class="form-group has-feedback" style="margin-top: -7px">
                          <input type="email" class="form-control" name="Email" value="<?php echo $row->Email ?>">
                          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>
                      </div>

                      <div class="col-lg-6 col-xs-12"> 
                        <label>Contact</label>
                        <div class="form-group has-feedback" style="margin-top: -7px">
                          <input type="text" class="form-control" name="Contact" value="<?php echo $row->Contact ?>">
                          <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                        </div>
                      </div>

                      <div class="col-lg-6 col-xs-12"> 
                        <label>Username</label>
                        <div class="form-group has-feedback" style="margin-top: -7px">
                          <input type="text" class="form-control" name="Username" value="<?php echo $row->Username ?>">
                          <span class="glyphicon glyphicon-map-marker form-control-feedback"></span>
                        </div>
                      </div>

                        <div class="col-lg-6 col-xs-12"> 
                        <label>Password</label>
                        <div class="form-group has-feedback" style="margin-top: -7px">
                          <input type="text" class="form-control" name="Password" value="<?php echo $row->Password ?>">
                          <span class="glyphicon glyphicon-map-marker form-control-feedback"></span>
                        </div>
                      </div>

                      <div class="col-lg-6 col-xs-12">
                        <label>Position</label>
                        <div class="form-group has-feedback" style="margin-top: -7px">
                          <select class="form-control select2" style="width: 100%;" class="form-control" name="Position" placeholder="Position">
                          <option><?php echo $row->Position ?></option>
                          <option disabled>-- Choose Fuel Here --</option>
                          <option value="Admin">Admin</option>
                          <option value="Staff">Staff</option>
                          </select>
                        </div>
                      </div>

                      <div class="col-lg-6 col-xs-12"> 
                        <label>Picture</label>
                        <div class="form-group"  style="margin-top: -7px">
                           <input type="text" readonly="" class="form-control" name="Picture" placeholder="Browse Picture...">
                           <input type="file" id="exampleInputFile">
                         <span class="glyphicon glyphicon-picture form-control-feedback"></span>
                        </div>
                      </div>
                    </div>
                  </div>
                    
                  <div class="col-xs-12 col-lg-3">
                      <!-- Button trigger modal -->
                      <h3><button type="submit" class="btn btn-info btn-raised btn-block btn-flat"
                      data-toggle="#" href="<?php echo site_url('Admin_update/user_update/' . $row->ID); ?>" data-target="#"><i class="fa fa-pencil"></i> &nbsp Update</button></h3>
                  </div>
              </div>
          </div>
      <?php } ?>
    </div>
</div>
  
