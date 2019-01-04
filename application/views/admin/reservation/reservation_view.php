
<body class="hold-transition skin-blue sidebar-mini">   <!-- View Reservation Detail Modal -->
  <div class="" id="reservationView" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="container">
      <div class="box box-default" style="margin-top: 20px">
        <div class="box-header with-border">
            
            <!--Button in the upper right corner-->
            <div class="col-xs-12" style="margin-right: -100px">
            <a href="<?php echo base_url();?>admin_display/reservation" class="btn btn-primary pull-right">
              <i class="fa fa-arrow-left"></i> Back
            </a>
           
            <?php foreach ($reservation as $row) { ?>
            <a href="<?php echo base_url(); ?>admin_get/reservation_get/<?php echo $row->reservation_ID ?>" 
               class="btn btn-primary pull-right">
               <i class="fa fa-pencil"></i>
               Update
            </a>
            <?php } ?>
           

            <?php foreach ($reservation as $row) { ?>
            <a href="<?php echo base_url(); ?>admin_display/reservation_history/<?php echo $row->reservation_ID ?>" 
               class="btn btn-primary pull-right">
               <i class="fa fa-history"></i>
               History
            </a>
            <?php } ?>

            <a href="#" onclick="window.print()" target="_blank" class="btn btn-primary pull-right">
              <i class="fa fa-print"></i>
              Print
            </a>

            <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
              <i class="fa fa-download"></i> Generate PDF
            </button>
            <!--Button in the upper right corner-->

            <img src="<?php echo base_url(); ?>images/urvanZone.jpg" height="100px" width="100px" style="margin-bottom: 50px"></i>
            <div class="row no-print" style="margin-right: -20px; margin-top: -200px"></div>
   
  
                   
              <div class="row invoice-info" style="margin-top: 100px">
                  <?php foreach ($customer as $row) { ?>
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
              
                    <div class="col-sm-4 invoice-col">
                      To
                      <address>
                        <strong><?php echo $row->cus_Firstname." ".$row->cus_Lastname ?></strong><br>
                        Contact: <?php echo $row->cus_Contact ?><br>
                        Email: <?php echo $row->cus_Email ?><br>
                        Address: <?php echo $row->cus_Address ?><br>
                      </address>
                    </div>
                  <?php } ?>

                  <div class="col-sm-4 invoice-col">
                    <?php foreach ($reservation as $row) { ?> 
                      <address>
                        <b>Res ID: </b> <?php echo $row->reservation_ID ?><br>
                        <b>Payment Due: </b><?php echo $row->dropoff_Date." ".$row->dropoff_Time ?><br>
                      </address>
                    <?php }?>
                  </div>
              </div>    <!-- /.col -->      
             
              
                <div class="col-lg-12 col-sm-6">
                  <h4 style="margin-top: -10px"><b>Reservation Details</b></h4>
                </div>
              
                    <div class="row" >
                        <?php foreach ($reservation as $row) { ?>
                          <div class="col-lg-3 col-xs-6">
                            <strong><i class="fa fa-user margin-r-5"></i>Res. ID</strong>
                            <p class="text-muted margin-r-5"><?php echo $row->reservation_ID ?></p>
                          </div>
                        <?php } ?>

                        <?php foreach ($customer as $row) { ?>
                          <div class="col-lg-3 col-xs-6">
                            <strong><i class="fa fa-user margin-r-5"></i>Client Name</strong>
                            <p class="text-muted"><?php echo $row->cus_Firstname." ".$row->cus_Lastname ?></p>
                          </div>
                        <?php } ?>

                        <?php foreach ($reservation as $row) { ?>
                          <div class="col-lg-3 col-xs-6">
                            <strong><i class="fa fa-user margin-r-5"></i>Dropoff Location</strong>
                              <p class="text-muted"><?php echo $row->dropoff_Location ?></p>
                          </div>
                          <div class="col-lg-3 col-xs-6">
                            <strong><i class="fa fa-user margin-r-5"></i>Pickup Location</strong>
                              <p class="text-muted"><?php echo $row->pickup_Location ?></p>
                          </div>  
                           <div class="col-lg-3 col-xs-6">
                            <strong><i class="fa fa-user margin-r-5"></i>Dropoff Date</strong>
                               <p class="text-muted margin-r-5"><?php echo $row->dropoff_Date ?></p>
                          </div>
                          <div class="col-lg-3 col-xs-6">
                            <strong><i class="fa fa-user margin-r-5"></i>Dropoff Time</strong>
                              <p class="text-muted"><?php echo $row->dropoff_Time ?></p>
                          </div>
                          <div class="col-lg-3 col-xs-6">
                            <strong><i class="fa fa-user margin-r-5"></i>Pickup Date</strong>
                              <p class="text-muted"><?php echo $row->pickup_Date ?></p>
                          </div> 
                          <div class="col-lg-3 col-xs-6">
                            <strong><i class="fa fa-user margin-r-5"></i>Pickup Time</strong>
                              <p class="text-muted"><?php echo $row->pickup_Time ?></p>
                          </div>
                         <div class="col-lg-3 col-xs-6">
                            <strong><i class="fa fa-user margin-r-5"></i>Total Payment</strong>
                              <p class="text-muted"><?php echo $row->total_payment ?></p>
                          </div>
                          <div class="col-lg-3 col-xs-6">
                            <strong><i class="fa fa-user margin-r-5"></i>Balance</strong>
                              <p class="text-muted"><?php echo $row->balance ?></p>
                          </div>
                          <div class="col-lg-3 col-xs-6">
                            <strong><i class="fa fa-user margin-r-5"></i>Res. Time</strong>
                              <p class="text-muted"><?php echo $row->reservation_Time ?></p>
                          </div>
                          <div class="col-lg-3 col-xs-6">
                            <strong><i class="fa fa-user margin-r-5"></i>Status</strong>
                              <p class="text-muted"><b><?php echo $row->reservation_status ?></b></p>
                          </div>
                        <?php } ?>

                        <?php foreach ($car as $row) { ?>
                          <div class="col-lg-3 col-xs-6">
                            <strong><i class="fa fa-user margin-r-5"></i>Car Selected</strong>
                            <p class="text-muted"><?php echo $row->category_Name." ".$row->brand_Name." ".$row->car_Model ?></p>
                          </div>
                        <?php } ?>

                        <?php foreach ($driver as $row) { ?>
                          <div class="col-lg-3 col-xs-6">
                            <strong><i class="fa fa-user margin-r-5"></i>Driver Name</strong>
                            <p class="text-muted"><?php echo $row->driver_Firstname." ".$row->driver_Lastname ?></p>
                          </div>
                        <?php } ?>
                    </div>

                  

        <div class="col-lg-12 col-sm-6">
          <div style="text-align:center">
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
        </div>


