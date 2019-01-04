

<body class="hold-transition skin-blue sidebar-mini">   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">    <!-- Content Header (Page header) -->
    <div class="box">
      <div class="box-header"> 
        <h4><b>Customers Record </b></h4>

          <?php echo validation_errors(); ?>
          <?php if (isset($message)) { ?>
          <h3 style="color:green;">Data inserted successfully</h3><br>
          <?php } ?>

          <!--Search Box-->
          <div class="col-xs-6 col-lg-2" style="margin-top: -7px">
            <form action="customer_search" method="post" class="form-inline" role="form">
              <div class="form-group">
                <input type="text" class="form-control" name="search" id="search" placeholder="Search. . . ."> 
              </div>
            </form>
          </div>

          <!-- /.box-header -->
          <table id="example1" name="customer" class="table table-bordered table-striped">
             <thead style="background-color: #00b0ff">
                <tr>    
                  <th>-</th>
                  <th>ID</th>           
                  <th>Image</th>
                  <th>Last Name</th>
                  <th>First Name</th>
                  <th>Middle Name</th>
                  <th>Address</th>
                  <th>Email</th>
                  <th>Contact</th>
                  <th colspan="2" align="center">Action</th>
                </tr>
              </thead>
                   
              <tbody>
                 <?php foreach ($customer_fetch as $row)  { ?>
                   <tr> 
                      <td><?php echo form_checkbox();?></td>                                       
                      <td><?php echo $row->cus_ID ?></td>
                      <td>
                        <a href="<?php echo base_url(); ?>user/<?php echo $row->cus_Image ?>" 
                           class="image-zoom" 
                           rel="prettyPhoto[gallery]">
                           <img src="<?php echo base_url(); ?>user/<?php echo $row->cus_Image ?>" height="70" width="100">
                        </a>
                      </td>
                      <td><?php echo $row->cus_Lastname ?></td>
                      <td><?php echo $row->cus_Firstname ?></td>
                      <td><?php echo $row->cus_Middlename ?></td>
                      <td><?php echo $row->cus_Address ?></td>
                      <td><?php echo $row->cus_Email ?></td>
                      <td><?php echo $row->cus_Contact ?></td>       
                      <!--Button in the right corner of table-->
                      <td>
                        <a rel="tooltip" 
                           data-placement="bottom" 
                           title="View Customer Details" 
                           id="View Customer Details" 
                           href="<?php echo base_url(); ?>admin_get/customer_show/<?php echo $row->cus_ID ?>">
                           <i class="fa fa-eye"></i>
                        </a>
                      </td>
                      <td>
                        <a rel="tooltip" 
                           data-placement="bottom" 
                           title="View Customer History" 
                           id="View Customer History" 
                           href="<?php echo base_url(); ?>admin_get/customer_history/<?php echo $row->cus_ID ?>">
                           <i class="fa fa-history"></i>
                        </a>
                      </td>
                      <!--Button in the right corner of table-->
                  </tr>
                <?php } ?>
              </tbody>       
            
              <tfoot style="background-color: #00b0ff">
                <tr>
                  <th>-</th>
                  <th>ID</th>
                  <th>Image</th>
                  <th>Last Name</th>
                  <th>First Name</th>
                  <th>Middle Name</th>
                  <th>Address</th>
                  <th>Email</th>
                  <th>Contact</th>
                  <th colspan="2" align="center">Action</th>
                </tr>
              </tfoot>

              <!--Button in the upper right corner-->
              <div align="right">
                  <a rel="tooltip" data-placement="bottom" title="Add customer" id="Add customer" 
                  href="#" class="btn btn-app" data-toggle="modal" data-target="#add_customer">
                  <i class="fa fa-plus-square"></i>Add</a>

                  <a rel="tooltip" data-placement="bottom" title="Multiple Delete" id="Delete customer" 
                  href="" class="btn btn-app">
                  <i class="fa fa-trash"></i>Delete</a>

                  <a rel="tooltip" data-placement="bottom" title="Sent SMS" id="Sent SMS" 
                  href="#" class="btn btn-app" data-target="#sentsms" data-toggle="modal">
                  <i class="fa fa-envelope"></i>Message</a>

                  <a rel="tooltip" data-placement="bottom" title="Print" id="print_customers" 
                  href="" onclick="window.print()" class="btn btn-app">
                  <i class="fa fa-print"></i> Print</a>
              </div>
              <!--Button in the upper right corner close-->
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
                  <!--quick email widget close-->
                </div>
              </div>
            </div>
          </div>
    
    
      </div>
    </div>
  </div>




