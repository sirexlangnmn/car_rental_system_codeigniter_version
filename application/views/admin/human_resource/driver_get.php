<body class="hold-transition skin-blue sidebar-mini">     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">    <!-- Content Header (Page header) -->
    <div class="box">
      <div class="box-header">
        <h4><b>Driver Record</b></h4>
          <div style="margin-top: -15px">
            
              <h3 class="login-box-msg"><i class="fa fa-user"></i> Update Driver Record</h3>
                <?php foreach ($driver_get as $row) { ?>
                <!--form method="post"-->
                <?php echo form_open_multipart('admin_update/driver_update'); ?>
                
                  <input type="hidden" class="form-control" name="driver_ID" value="<?php echo $row->driver_ID ?>">
                  <div class="row" >
                      <div class="col-lg-6 col-xs-12"> 
                        <label>Lastname</label>
                        <div class="form-group has-feedback" style="margin-top: -7px">
                          <input type="text" 
                                 class="form-control" 
                                 name="driver_Lastname" 
                                 value="<?php echo $row->driver_Lastname ?>">
                          <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                      </div>

                      <div class="col-lg-6 col-xs-12"> 
                        <label>Firstname</label>
                        <div class="form-group has-feedback" style="margin-top: -7px">
                          <input type="text" 
                                 class="form-control" 
                                 name="driver_Firstname" 
                                 value="<?php echo $row->driver_Firstname ?>">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                      </div>

                      <div class="col-lg-6 col-xs-12"> 
                        <label>Middlename</label>
                        <div class="form-group has-feedback" style="margin-top: -7px">
                          <input type="text" 
                                 class="form-control" 
                                 name="driver_Middlename" 
                                 value="<?php echo $row->driver_Middlename?>">
                          <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                      </div>

                      <div class="col-lg-6 col-xs-12"> 
                        <label>Address</label>
                        <div class="form-group has-feedback"  style="margin-top: -7px">
                          <input type="text" 
                                 class="form-control" 
                                 name="driver_Address" 
                                 value="<?php echo $row->driver_Address ?>">
                          <span class="glyphicon glyphicon-map-marker form-control-feedback"></span>
                        </div>
                      </div>

                      <div class="col-lg-6 col-xs-12"> 
                        <label>Email</label>
                        <div class="form-group has-feedback" style="margin-top: -7px">
                          <input type="email" 
                                 class="form-control" 
                                 name="driver_Email" 
                                 value="<?php echo $row->driver_Email ?>">
                          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>
                      </div>

                      <div class="col-lg-6 col-xs-12"> 
                        <label>Contact</label>
                        <div class="form-group has-feedback" style="margin-top: -7px">
                          <input type="text" 
                                 class="form-control" 
                                 name="driver_Contact" 
                                 value="<?php echo $row->driver_Contact ?>">
                          <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                        </div>
                      </div>

                      <div class="col-lg-6 col-xs-12"> 
                        <label>Driver License</label>
                        <div class="form-group has-feedback" style="margin-top: -7px">
                          <input type="text" 
                                 class="form-control" 
                                 name="driver_License" 
                                 value="<?php echo $row->driver_License ?>">
                          <span class="glyphicon glyphicon-map-marker form-control-feedback"></span>
                        </div>
                      </div>

                      <div class="col-lg-6 col-xs-12">
                        <label>License Expiration</label>
                        <div class="form-group has-feedback" style="margin-top: -7px">
                          <input type="text" 
                                 class="form-control"
                                 name="driver_Expired" 
                                 value="<?php echo $row->driver_Expired ?>">
                          <span class="glyphicon glyphicon-map-marker form-control-feedback"></span>
                        </div>
                      </div>

                      <div class="col-lg-6 col-xs-12"> 
                        <label>Picture</label>
                        <div class="form-group" style="margin-top: -7px">
                           <input type="text" 
                                  readonly="" 
                                  class="form-control" 
                                  name="driver_Picture" 
                                  placeholder="Browse Picture...">
                           <input type="file" id="exampleInputFile">
                         <span class="glyphicon glyphicon-picture form-control-feedback"></span>
                        </div>
                      </div>
                    </div>
       
                    <!-- Button trigger modal -->
                    <div class="col-xs-12 col-lg-3">    
                      <button type="submit" 
                                  class="btn btn-info btn-raised btn-block btn-flat"
                                  data-toggle="#" 
                                  href="<?php echo site_url('Admin_update/driver_update/' . $row->driver_ID); ?>" 
                                  data-target="#">
                                  <i class="fa fa-pencil"></i> &nbsp Update
                      </button>
                </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
  
