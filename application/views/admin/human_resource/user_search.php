

<body class="hold-transition skin-blue sidebar-mini">

<!--header-->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


          <div class="box">
            <div class="box-header">
              <h4><b>Users Record </b></h4>
             
              <?php echo validation_errors(); ?>
              <?php if (isset($message)) { ?>
              <h3 style="color:green;">Data inserted successfully</h3><br>
              <?php } ?>

      <!--Search Box-->
      <div class="col-xs-6 col-lg-2" style="margin-top: -7px">
        <form action="user_search" method="post" class="form-inline" role="form">
          <div class="form-group">
            <input type="text" class="form-control" name="search" id="search" placeholder="Search. . . ."> 
            <!--button type="submit" class="btn btn-info">Submit</button-->
            </div>
        </form>
      </div>

            <!-- /.box-header -->
              <table id="example1" name="User" class="table table-bordered table-striped">
             <thead style="background-color: #00b0ff">
                <tr>    
                 <th>-</th>
                 <th>ID</th>           
                  <th>User Image</th>
                  <th>Last Name</th>
                  <th>First Name</th>
                  <th>Middle Name</th>
                  <th>Address</th>
                  <th>Email</th>
                  <th>Contact</th>
                  <th>Username</th>
                  <th>Position</th>
                  <th colspan="3" align="center">Action</th>
                </tr>
                </thead>
                   
                <tbody>
                  <?php foreach ($user_search as $row) { ?>  
                 <tr> 
                    <td><?php echo form_checkbox();?></td>                                       
                    <td><?php echo $row->ID; ?></td>
                    <td><p class="text-muted margin-r-5">
                        <a href="<?php echo base_url("user/{$user_model['Picture']}"); ?>" class="image-zoom" rel="prettyPhoto[gallery]"><img src="<?php echo base_url("user/{$user_model['Picture']}"); ?>" class="image-zoom" height="70" width="100"></a></p>
                      </td>
                    <td><?php echo $row->Lastname; ?></td>
                    <td><?php echo $row->Firstname; ?></td>
                    <td><?php echo $row->Middlename; ?></td>
                    <td><?php echo $row->Address; ?></td>
                    <td><?php echo $row->Email; ?></td>
                    <td><?php echo $row->Contact; ?></td>
                    <td><?php echo $row->Username; ?></td>
                    <td><?php echo $row->Position; ?></td>
                    <td>
                      <a rel="tooltip" data-placement="bottom" title="Update User Details" 
                        id="Update User Details" href="<?php echo base_url(); ?>Admin_get/User_get/<?php echo $row->ID ?>"><i class="fa fa-pencil"></i>
                      </a>
                    </td>        
                    <td>
                      <a rel="tooltip" data-placement="bottom" title="View User Details" 
                        id="View User Details" href="<?php echo base_url(); ?>Admin_get/User_show/<?php echo $row->ID ?>"><i class="fa fa-eye"></i>
                      </a>
                    </td>
                    <td>
                      <a rel="tooltip" data-placement="bottom" title="Delete User Details" 
                        id="View User Details" href="<?php echo base_url(); ?>Admin_delete/User_delete/<?php echo $row->ID ?>"><i class="fa fa-trash"></i>
                      </a>
                    </td>

                </tr>
                <?php
                    }
                ?>
                </tbody>
                
                <tfoot style="background-color: #00b0ff">
               <tr>    
                 <th>-</th>
                 <th>ID</th>           
                  <th>User Image</th>
                  <th>Last Name</th>
                  <th>First Name</th>
                  <th>Middle Name</th>
                  <th>Address</th>
                  <th>Email</th>
                  <th>Contact</th>
                  <th>Username</th>
                  <th>Position</th>
                  <th colspan="3" align="center">Action</th>
                </tr>
                </tfoot>

                 <div align="right">
                              
                              <a rel="tooltip" data-placement="bottom" title="Add User" 
                              id="Add User" href="#" class="btn btn-app" data-toggle="modal" 
                              data-target="#Add_User"><i class="fa fa-plus-square"></i>Add</a>

                              <a rel="tooltip" data-placement="bottom" title="Multiple Delete" 
                              id="Delete User" href="" class="btn btn-app">
                              <i class="fa fa-trash"></i>Delete</a>

                             <a rel="tooltip" data-placement="bottom" title="Sent SMS" id="Sent SMS" href="#" class="btn btn-app" data-target="#sentsms" data-toggle="modal">
                              <i class="fa fa-envelope"></i>Message</a>

                              <a rel="tooltip" data-placement="bottom" title="Print" id="print_Users" href=""
                               onclick="window.print()" class="btn btn-app"><i class="fa fa-print"></i> Print</a>

                  </div>
              </tbody>
          </table>
           <?php echo form_close();?>
  


<!--sms-->
<div class="modal fade" id="sentsms" tabindex="-2" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    
<!---->
<div class="login-box" style="margin-top: 45px">
  <div class="login-logo">
    <p><b></b></p>
  </div>

<div style="margin-top: -15px">
 <!-- quick email widget -->
          <div class="box box-info">
            <div class="box-header">
              <h3 class="login-box-msg"><i class="fa fa-envelope"></i> Send SMS</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              </div>
              <!-- /. tools -->
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
                <i class="fa fa-arrow-circle-right"></i></button>
            </div>
          </div>
      </div>
  </div>
</div>
</div>
</div>
</div>
</div>

<?php include 'user_add.php'; ?> 


