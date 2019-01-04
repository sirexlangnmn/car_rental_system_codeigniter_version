

<body class="hold-transition skin-blue sidebar-mini">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <div class="box">
         <div class="box-header">
            <h4><b>Drivers Record </b></h4>

              <?php echo validation_errors(); ?>
              <?php if (isset($message)) { ?>
              <h3 style="color:green;">Data inserted successfully</h3><br>
              <?php } ?>

              <!--Search Box-->
              <div class="col-xs-6 col-lg-2" style="margin-top: -7px">
                <form action="driver_search" method="post" class="form-inline" role="form">
                  <div class="form-group">
                    <input type="text" class="form-control" name="search" id="search" placeholder="Search. . . ."> 
                  </div>
                </form>
              </div>

              <!-- /.box-header -->
              <table id="example1" name="driver" class="table table-bordered table-striped">
                 <thead style="background-color: #00b0ff">
                    <tr>    
                      <th>-</th>
                      <th>ID</th>           
                      <th>Driver Image</th>
                      <th>Last Name</th>
                      <th>First Name</th>
                      <th>Middle Name</th>
                      <th>Address</th>
                      <th>Email</th>
                      <th>Contact</th>
                      <th>License</th>
                      <th>Expiration</th>
                      <th colspan="3" align="center">Action</th>
                    </tr>
                    </thead>
                       
                      <tbody>
                         <?php foreach ($driver_fetch as $row)  { ?>
                         <tr> 
                            <td><?php echo form_checkbox();?></td>                                       
                            <td><?php echo $row->driver_ID ?></td>
                            <!--t><?php // echo '<img src="data:image/jpeg;base64,'.base64_encode( $row->driver_pic ).'"/>'; ?></th-->
                            <td><img src="<?php echo base_url("drivers/{$row->driver_Image}"); ?>" height="70" width="100"></td>
                            <td><?php echo $row->driver_Lastname ?></td>
                            <td><?php echo $row->driver_Firstname ?></td>
                            <td><?php echo $row->driver_Middlename ?></td>
                            <td><?php echo $row->driver_Address ?></td>
                            <td><?php echo $row->driver_Email ?></td>
                            <td><?php echo $row->driver_Contact ?></td>
                            <td><?php echo $row->driver_License ?></td>
                            <td><?php echo $row->driver_Expired ?></td>
                            <td>
                              <a rel="tooltip" data-placement="bottom" title="Update Driver Details" id="Update Driver Details" href="<?php echo base_url(); ?>admin_get/driver_get/<?php echo $row->driver_ID ?>">
                              <i class="fa fa-pencil"></i>
                              </a>
                            </td>        
                            <td>
                              <a rel="tooltip" data-placement="bottom" title="View Driver Details" id="View Driver Details"
                               href="<?php echo base_url(); ?>admin_get/driver_show/<?php echo $row->driver_ID ?>">
                               <i class="fa fa-eye"></i>
                              </a>
                            </td>
                            <td>
                              <a rel="tooltip" data-placement="bottom" title="Delete Driver Details" id="View Driver Details" 
                              href="<?php echo site_url(); ?>admin_delete/driver_delete/<?php echo $row->driver_ID ?>">
                              <i class="fa fa-trash"></i>
                              </a>
                            </td>
                          </tr>
                      <?php } ?>
                      </tbody>       
                
                      <tfoot style="background-color: #00b0ff">
                        <tr>
                          <th>-</th>
                          <th>ID</th>
                          <th>Driver Image</th>
                          <th>Last Name</th>
                          <th>First Name</th>
                          <th>Middle Name</th>
                          <th>Address</th>
                          <th>Email</th>
                          <th>Contact</th>
                          <th>License</th>
                          <th>Expiration</th>
                          <th colspan="3" align="center">Action</th>
                        </tr>
                      </tfoot>

                      <!--Button-->
                      <div align="right">
                          <a rel="tooltip" data-placement="bottom" title="Add Driver" id="Add Driver" 
                          href="#" class="btn btn-app" data-toggle="modal" data-target="#add_driver">
                          <i class="fa fa-plus-square"></i>Add</a>

                          <a rel="tooltip" data-placement="bottom" title="Multiple Delete" id="Delete Driver" 
                          href="" class="btn btn-app">
                          <i class="fa fa-trash"></i>Delete</a>

                          <a rel="tooltip" data-placement="bottom" title="Sent SMS" id="Sent SMS" 
                          href="#" class="btn btn-app" data-target="#sentsms" data-toggle="modal">
                          <i class="fa fa-envelope"></i>Message</a>

                          <a rel="tooltip" data-placement="bottom" title="Print" id="print_drivers" 
                          href="" onclick="window.print()" class="btn btn-app">
                          <i class="fa fa-print"></i> Print</a>
                      </div>
              </table>
             <?php echo form_close();?>
  

              <!-- SMS Modal-->
              <div class="modal fade" id="sentsms" tabindex="-2" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="login-box" style="margin-top: 45px">
                    <div style="margin-top: -30px">
                       <!-- quick email widget -->
                        <div class="box box-info">
                          <div class="box-header">
                            <h3 class="login-box-msg"><i class="fa fa-envelope"></i> Send SMS</h3>    
                              <div class="pull-right box-tools">  <!-- tools box -->
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div> <!-- /. tools -->
                          </div>
                          <div class="box-body">
                            <form action="#" method="post">
                              <div class="form-group">
                                  <input type="email" class="form-control" name="emailto" placeholder="Contact Number:">
                                  <span class="fa fa-phone form-control-feedback"></span>
                              </div>
                              <div class="form-group">
                                  <input type="text" class="form-control" name="subject" placeholder="Subject">
                                  <span class="fa fa-book form-control-feedback"></span>
                              </div>
                              <div>
                                  <textarea class="textarea" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                              </div>
                            </form>
                          </div>
                          <div class="box-footer clearfix">
                            <button type="button" class="pull-right btn btn-default" id="sendEmail">Send
                            <i class="fa fa-arrow-circle-right"></i>
                            </button>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
    
    
          </div>
      </div>
  </div>


<?php include 'driver_add.php'; ?> 


