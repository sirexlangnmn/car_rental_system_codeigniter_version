


<body class="hold-transition skin-blue sidebar-mini">

<!--header-->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
    <section class="content-header">
       <h1>Reservation</h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>admin_display/reservation"><i class="fa fa-dashboard"></i>All</a></li>
        <li><a href="<?php echo base_url(); ?>admin_display/pending"><i class="fa fa-dashboard"></i>Pending</a></li>
        <li><a href="<?php echo base_url(); ?>admin_display/confirmed"><i class="fa fa-dashboard"></i>Confirmed</a></li>
        <li><a href="<?php echo base_url(); ?>admin_display/upcoming"><i class="fa fa-dashboard"></i>Upcoming</a></li>
        <li><a href="<?php echo base_url(); ?>admin_display/ongoing"><i class="fa fa-dashboard"></i>Ongoing</a></li>
        <li><a href="<?php echo base_url(); ?>admin_display/finished"><i class="fa fa-dashboard"></i>Finished</a></li>
        <li><a href="<?php echo base_url(); ?>admin_display/cancelled"><i class="fa fa-dashboard"></i>Cancelled</a></li>      
      </ol>
    </section>
<br>

          <div class="box">
            <div class="box-header">
              <h4><b>All Reservation</b></h4>
         
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
                  <th>ID</th>
                  <th>Dropoff Location</th>
                  <th>Dropoff Date</th>
                  <th>Dropoff Time</th>
                  <th>Pickup Location</th>
                  <th>Pickup Date</th>
                  <th>Pickup Time</th>
                  <th>Res. Time</th>
                  <th>Total Payment</th>
                  <th>Balance</th>
                  <th>Status</th>
                  <th colspan="5" align="center">Action</th>
                </tr>
                </thead>
                
                <tbody>
                      <?php
                     foreach ($reservation_search as $row)  {
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
                     <td><?php echo $row->dropoff_Location; ?></td>
                     <td><?php echo $row->dropoff_Date; ?></td>
                     <td><?php echo $row->dropoff_Time; ?></td>
                     <td><?php echo $row->pickup_Location; ?></td>
                     <td><?php echo $row->pickup_Date; ?></td>
                     <td><?php echo $row->pickup_Time; ?></td>
                     <td><?php echo $row->reservation_Time; ?></td>
                     <td><?php echo $row->total_payment; ?></td>
                     <td><?php echo $row->balance; ?></td>
                     <td><span class="label label-<?php echo $flag; ?>" align="center"></i><?php echo $row->reservation_status; ?></span></td>
                     <td>
                        <a rel="tooltip" data-placement="bottom" title="Update Car Details" 
                          id="Update Car Details" href="<?php echo base_url(); ?>admin_get/reservation_get/<?php echo $row->reservation_ID ?>"><i class="fa fa-pencil"></i>
                        </a>
                      </td>        
                      <td>
                        <a rel="tooltip" data-placement="bottom" title="View Car Details" 
                          id="View Car Details" href="<?php echo base_url(); ?>admin_get/reservation_show/<?php echo $row->reservation_ID ?>"><i class="fa fa-eye"></i>
                        </a>
                      </td>
                      <td>
                        <a rel="tooltip" data-placement="bottom" title="Delete Car Details" 
                          id="Delete Car Details" href="<?php echo base_url(); ?>admin_delete/car_delete/<?php echo $row->reservation_ID ?>"><i class="fa fa-envelope"></i>
                        </a>
                      </td>
                      <td>
                        <a rel="tooltip" data-placement="bottom" title="Delete Car Details" 
                          id="Delete Car Details" href="<?php echo base_url(); ?>admin_delete/car_delete/<?php echo $row->reservation_ID ?>"><i class="fa fa-money"></i>
                        </a>
                      </td>
                      <td>
                        <a rel="tooltip" data-placement="bottom" title="Delete Car Details" 
                          id="Delete Car Details" href="<?php echo base_url(); ?>admin_delete/car_delete/<?php echo $row->reservation_ID ?>"><i class="fa fa-user"></i>
                        </a>
                      </td>
                   </tr>
                      
                     
                   <?php } ?>
                </tbody>
                <tfoot style="background-color: #00b0ff">
                <tr>
                 <th>-</th>
                  <th>ID</th>
                  <th>Dropoff Location</th>
                  <th>Dropoff Date</th>
                  <th>Dropoff Time</th>
                  <th>Pickup Location</th>
                  <th>Pickup Date</th>
                  <th>Pickup Time</th>
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



<!-- View Reservation Detail Modal -->
<div class="modal fade" id="ViewReservationDetail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="container">
          <div class="box box-default" style="margin-top: 20px">
        <div class="box-header with-border">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
               </button>
              <h4 style="margin-top: -10px"><b>Reservation Details</b></h4>
<img src="<?php echo base_url(); ?>images/urvanZone.jpg" height="100px" width="100px" style="margin-bottom: 103px"></i> 
      <div class="row no-print" style="margin-right: -20px; margin-top: -200px">
        <div class="col-xs-12" style="margin-right: -100px">
          <a href="#" target="_blank" class="btn btn-primary pull-right"><i class="fa fa-print"></i> Print</a>
          <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
            <i class="fa fa-download"></i> Generate PDF
          </button>
        </div>
      </div>
      

      <div class="row">
        <div class="col-xs-12">

          <h2 class="page-header" style="margin-left: 100px">
            Urvan Zone
            <small class="pull-right">Date: 10/2/2017</small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
              <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          From
          <address>
            <strong>Urvan Zone Car Rental</strong><br>
            J9 - 33 Evangelista Avenue Corner F.<br>
            Marcelo Street Santolan Pasig City<br>
            Philippines, Ph 11107<br>
            Phone: (123) 123-5432<br>
            Email: urvanzone@gmail.com
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          To
          <address>
            <strong>Juan Tamad</strong><br>
            795 Mabini St, Suite 600<br>
            Vito Cruz, VC 11111<br>
            Phone: (555) 456-1234<br>
            Email: juan.tamad@gmail.com
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          .<address>
          <b>Invoice: </b> #0012345<br>
          <b>Order ID: </b>123ABC456<br>
          <b>Payment Due: </b> 10/22/2017<br>
          <b>Account: </b> 123-45678
        </address>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="separator"></div>
                     <div class="row" >
                        <div class="col-lg-3 col-xs-6">
                          <strong><i class="fa fa-user margin-r-5"></i>Reservation Code</strong>
                            <p class="text-muted margin-r-5">E2dZog31kR</p>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                          <strong><i class="fa fa-user margin-r-5"></i>Reservation Status</strong>
                            <p class="text-muted"><b>Pending</b></p>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                          <strong><i class="fa fa-user margin-r-5"></i>Driver Assigned</strong>
                            <p class="text-muted">Self Driven</p>
                        </div>  
                         <div class="col-lg-3 col-xs-6">
                          <strong><i class="fa fa-user margin-r-5"></i>Vehicle</strong>
                            <p class="text-muted">
                              Toyota
                            </p>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                          <strong><i class="fa fa-user margin-r-5"></i>Pick up Date</strong>
                            <p class="text-muted">2017-09-19</p>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                          <strong><i class="fa fa-user margin-r-5"></i>Pick up Time</strong>
                            <p class="text-muted">10:00am</p>
                        </div> 
                        <div class="col-lg-3 col-xs-6">
                          <strong><i class="fa fa-user margin-r-5"></i>Total Payable</strong>
                            <p class="text-muted">2,200.00</p>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                          <strong><i class="fa fa-user margin-r-5"></i>Drop Date</strong>
                            <p class="text-muted">2017-09-19</p>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                          <strong><i class="fa fa-user margin-r-5"></i>Drop Time</strong>
                            <p class="text-muted">10:00pm</p>
                        </div>
                        

                        <div class="col-lg-3 col-xs-6">
                          <strong><i class="fa fa-user margin-r-5"></i>Balance</strong>
                            <p class="text-muted">2,000.00</p>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                          <strong><i class="fa fa-user margin-r-5"></i>Rent Purpose</strong>
                            <p class="text-muted">
                              Personal
                            </p>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                          <strong><i class="fa fa-user margin-r-5"></i>Destination</strong>
                            <p class="text-muted">Manila</p>
                        </div>
                         
                        <div style="text-align:center; margin-top: -10px">
                         <span style="font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
                        &quot;Times New Roman&quot;,&quot;serif&quot;">
                        ***  NOTHING FOLLOWS  ***<o:p></o:p>
                        </span>
                      </div>
                 
                      <div style="text-align:center; margin-top: -5px">
                         <span style="font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
                        &quot;Times New Roman&quot;,&quot;serif&quot;">
                        - - - - - - - - - - - - - - - - - - <o:p></o:p>
                        </span>
                      </div>
                      <h4 style="margin-left: 40px"><b><u>Customer Copy</u></b></h4>
                         <div class="row" style="margin: 20px">

                        <div class="col-lg-3 col-xs-6">
                          <strong><i class="fa fa-user margin-r-5"></i>Customer's Name</strong>
                            <p class="text-muted">Federex Potolin</p>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                          <strong><i class="fa fa-user"></i>Reservation Code</strong>
                            <p class="text-muted">E2dZog31kR</p>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                          <strong><i class="fa fa-user margin-r-5"></i>Invoice Number</strong>
                            <p class="text-muted">#0012345</p>
                        </div>  
                        <div class="col-lg-3 col-xs-6">
                          <strong><i class="fa fa-user margin-r-5"></i>Order ID</strong>
                            <p class="text-muted">123ABC456</p>
                        </div> 
                      </div>
                      <div style="margin-bottom: -120px"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
         </div>
      </div>
  </div>
<!---->


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



