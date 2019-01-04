


<body class="hold-transition skin-blue sidebar-mini">

<!--header-->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
  <section class="content-header">
  <h1>Reservation</h1>
  <ol class="breadcrumb">
  <li><a href="<?php echo base_url(); ?>admin_display/reservation"><i class="fa fa-dashboard"></i>All</a></li>
  <li><a href="<?php echo base_url(); ?>admin_display/reservation_pending"><i class="fa fa-dashboard"></i>Pending</a></li>
  <li><a href="<?php echo base_url(); ?>admin_display/reservation_confirmed"><i class="fa fa-dashboard"></i>Confirmed</a></li>
  <li><a href="<?php echo base_url(); ?>admin_display/reservation_upcoming"><i class="fa fa-dashboard"></i>Upcoming</a></li>
  <li><a href="<?php echo base_url(); ?>admin_display/reservation_ongoing"><i class="fa fa-dashboard"></i>Ongoing</a></li>
  <li><a href="<?php echo base_url(); ?>admin_display/reservation_finished"><i class="fa fa-dashboard"></i>Finished</a></li>
  <li><a href="<?php echo base_url(); ?>admin_display/reservation_cancelled"><i class="fa fa-dashboard"></i>Cancelled</a></li>
  <li><a href="<?php echo base_url(); ?>admin_display/reservation_unfulfilled"><i class="fa fa-dashboard"></i>Unfulfilled</a></li>
  </ol>
  </section>
<br>

          <div class="box">
            <div class="box-header">
            
                <!--Search Box-->
              <div class="col-xs-6 col-lg-2" style="margin-top: -7px">
                <form action="reservation_search" method="post" class="form-inline" role="form">
                  <div class="form-group">
                    <input type="text" class="form-control" name="search" id="search" placeholder="Search. . . ."> 
                  </div>
                </form>
              </div>


              <table id="example1" class="table table-bordered table-striped">
                <thead style="background-color: #00b0ff">
                <tr>
                  <th>-</th>
                  <th>Res. ID</th>
                  <th>Pickup Date</th>
                  <th>Dropoff Date</th>
                  <th>Dropoff Location</th>
                  <th>Res. Time</th>
                  <th>Total Payment</th>
                  <th>Balance</th>
                  <th>Status</th>
                  <th colspan="5" align="center">Action</th>
                </tr>
                </thead>
                
                <tbody>  
                                 <?php
                     foreach ($reservation as $row)  {
                      if ($row->reservation_status == "Pending")
                      {
                        $flag="info";
                      } 
                      else if ($row->reservation_status == "Finished")
                      {
                        $flag="info";
                      } 
                      else if ($row->reservation_status == "Confirmed")
                      {
                       $flag="success";
                      }
                      else if ($row->reservation_status == "Cancelled")
                      {
                       $flag="success";
                      }
                      else if ($row->reservation_status == "Ongoing")
                      {
                       $flag="warning";
                      }
                      else if ($row->reservation_status == "Upcoming")
                      {
                       $flag="danger";
                      }
                      else if ($row->reservation_status == "Unfulfilled")
                      {
                       $flag="danger";
                      }
                      else
                      {
                       $flag="default"; 
                      }
                    ?>
    
                  <tr>
                    <td><input type="checkbox"></input></td>
                     <td><?php echo $row->reservation_ID; ?></td>
                     <td><?php echo $row->pickup_Date; ?></td>
                     <td><?php echo $row->dropoff_Date; ?></td>
                     <td><?php echo $row->dropoff_Location; ?></td>
                     <td><?php echo $row->reservation_Time; ?></td>
                     <td><?php echo $row->total_payment; ?></td>
                     <td><?php echo $row->balance; ?></td>
                     <td><span class="label label-<?php echo $flag; ?>" align="center"></i><?php echo $row->reservation_status; ?></span></td> 
                       <td>
                        <a rel="tooltip" data-placement="bottom" title="Update Reservation Details" 
                          id="Update Reservation Details" href="<?php echo base_url(); ?>admin_get/reservation_get/<?php echo $row->reservation_ID ?>"><i class="fa fa-pencil"></i>
                        </a>
                      </td>        
                      <td>
                        <a rel="tooltip" data-placement="bottom" title="View Reservation Details" 
                          id="View Reservation Details" href="<?php echo base_url(); ?>admin_get/reservation_show/<?php echo $row->reservation_ID ?>"><i class="fa fa-eye"></i>
                        </a>
                      </td>
                      <td>
                        <a rel="tooltip" data-placement="bottom" title="" 
                          id="" href=""><i class="fa fa-envelope"></i>
                        </a>
                      </td>
                      <td>
                        <a rel="tooltip" data-placement="bottom" title="" 
                          id="" href=""><i class="fa fa-money"></i>
                        </a>
                      </td>
                      <td>
                        <a rel="tooltip" data-placement="bottom" title="" 
                          id="" href=""><i class="fa fa-user"></i>
                        </a>
                      </td>
                   </tr>
                      
                     
                   <?php } ?>
                </tbody>
                <tfoot style="background-color: #00b0ff">
                <tr>
                  <th>-</th>
                  <th>Res. ID</th>
                  <th>Pickup Date</th>
                  <th>Dropoff Date</th>
                  <th>Dropoff Location</th>
                  <th>Res. Time</th>
                  <th>Total Payment</th>
                  <th>Balance</th>
                  <th>Status</th>
                  <th colspan="5" align="center">Action</th>
                </tr>
                </tfoot>
                 <div align="right">                   
                            <a rel="tooltip" data-placement="bottom" title="Print" id="SMSsender2" href=""
                             onclick="window.print()" class="btn btn-app"><i class="fa fa-print"></i> Print</a>
                       </div>
              </table>
              <?php echo form_close();?>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <!--FOOT-->





<!--SMS Modal-->
<div class="modal fade" id="sentsms" tabindex="-2" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    

<div class="login-box" style="margin-top: 45px">
  <div class="login-logo">
    <p><b></b></p>
  </div>

<div style="margin-top: -15px">
 <!-- quick email widget -->
          <div class="box box-info">
            <div class="box-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                  <h3 class="login-box-msg"><i class="fa fa-envelope"></i> &nbsp Send SMS</h3>
                  <!-- tools box -->
                 
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
                <div class="box-footer" style="margin-top: -15px; height: 50px">
                   <!-- Button trigger modal -->
                  <h3><button type="submit" class="pull-right btn btn-info btn-raised btn-flat"
                  data-toggle="#" data-target="#"><i class="fa fa-paper-plane"></i> &nbsp Send
                  </button></h3>
               </div>
            </div>
          </div>
      </div>
  </div>
</div>
</div>


<!--Payment Modal-->
<div class="modal fade" id="payment" tabindex="-2" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="login-box" style="margin-top: 45px">
      <div class="login-logo">
          <p><b></b></p>
      </div>

<div style="margin-top: -15px">
  <!-- /.login-logo -->
  <div class="login-box-body">
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span></button>
    <h3 class="login-box-msg"><i class="fa fa-pencil"></i> Update Reservation</h3>

    <form action="#" method="post">
       <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Payment">
        <span class="glyphicon glyphicon-money form-control-feedback">
          <i class="fa fa-money"></i>
        </span>
      </div>
      <div class="form-group">
                <select class="form-control select2" style="width: 100%;" >
                  <option selected="selected" disabled="Reservation Status" placeholder="Reservation Status">
                  Reservation Status</option>
                  <option value="Confirmed">Confirmed</option>
                  <option value="Cancelled">Cancelled</option>
                </select>
              </div>

               <div class="form-group">
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected" disabled="Reservation Status" placeholder="Assign Driver">
                  Assign Driver</option>
                  <option>Alvin Ebacuado</option>
                  <option>Federex Potolin</option>
                  <option>Dexter Saldivat</option>
                  <option>Dan Balasta</option>
                </select>
              </div>
              <div class="box-footer" style="margin-top: -15px; height: 50px">
                   <!-- Button trigger modal -->
                  <button type="submit" class="btn btn-info btn-raised btn-block btn-flat"
                  data-toggle="#" data-target="#"><i class="fa fa-pencil"></i> &nbsp Update
                  </button>
               </div>
    </form>
  </div>
    </div>
  </div>
</div>
</div>



