
<body class="hold-transition skin-blue sidebar-mini">

<!-- View Reservation Detail Modal -->
<div class="" id="view_car" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="container">
    <div class="box box-default" style="margin-top: 20px">
      <div class="box-header with-border">
       
        <div class="col-xs-12" style="margin-right: -100px">
          <a href="<?php echo base_url();?>admin_display/customer" class="btn btn-primary pull-right"><i class="fa fa-arrow-left"></i> Back</a>
          <a href="#" onclick="window.print()" target="_blank" class="btn btn-primary pull-right"><i class="fa fa-print"></i> Print</a>
          <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
            <i class="fa fa-download"></i> Generate PDF
          </button>
          <?php foreach ($customer_get as $row)  { ?>
           <a href="<?php echo base_url(); ?>admin_get/customer_history/<?php echo $row->cus_ID ?>" class="btn btn-primary pull-right"><i class="fa fa-history"></i>  Reservation History</a>
           <?php } ?>
          <img src="<?php echo base_url(); ?>images/urvanZone.jpg" height="100px" width="100px" style="margin-bottom: 50px"></i>
          <div class="row no-print" style="margin-right: -20px; margin-top: -200px">
          </div>
        
          <div class="row">
            <div class="col-xs-12">
              <h2 class="page-header" style="margin-left: 100px; margin-bottom: 90px;">
                <small class="pull-right">Date: 10/2/2017</small>
              </h2>
            </div>
            <h4 style="margin-top: -10px"><b>Customer's Information</b></h4>
          </div>    <!-- /.col -->
                  <?php
                    foreach ($customer_get as $row) {
                  ?>

                      <div class="row" >
                        <div class="col-lg-3 col-xs-6">  
                            <strong><i class="fa fa-user margin-r-5"></i>Image</strong>
                              <p class="text-muted margin-r-5">
                              <a href="<?php echo base_url(); ?>user/<?php echo $row->cus_Image ?>" class="image-zoom" rel="prettyPhoto[gallery]"><img src="<?php echo base_url(); ?>user/<?php echo $row->cus_Image ?>" height="70" width="100"></a></p>
                        </div> 
                      </div>
                      <div class="row" >
                        <div class="col-lg-3 col-xs-6">
                          <strong><i class="fa fa-user margin-r-5"></i>Cus ID</strong>
                            <p class="text-muted margin-r-5"><?php echo $row->cus_ID ?></p>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                          <strong><i class="fa fa-user margin-r-5"></i>First Name: </strong>
                            <p class="text-muted"><?php echo $row->cus_Firstname ?></p>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                          <strong><i class="fa fa-user margin-r-5"></i>Middle Name</strong>
                            <p class="text-muted"><?php echo $row->cus_Middlename ?></p>
                        </div>  
                         <div class="col-lg-3 col-xs-6">
                          <strong><i class="fa fa-user margin-r-5"></i>Last Name</strong>
                             <p class="text-muted margin-r-5"><?php echo $row->cus_Lastname ?></p>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                          <strong><i class="fa fa-user margin-r-5"></i>Contact Number </strong>
                            <p class="text-muted"><?php echo $row->cus_Contact ?></p>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                          <strong><i class="fa fa-user margin-r-5"></i>Address</strong>
                            <p class="text-muted"><?php echo $row->cus_Address ?></p>
                        </div> 
                        <div class="col-lg-3 col-xs-6">
                          <strong><i class="fa fa-user margin-r-5"></i>Email</strong>
                            <p class="text-muted"><?php echo $row->cus_Email ?></p>
                        </div>
                        
                    </div> 
                  <?php } ?>
                       
                        <dvi class="col-lg-12 col-sm-6">
                        <div style="text-align:center; margin-left: -10px">
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
                      </dvi>

                    
                  </div>
                </div>
              </div>
            </div>
         </div>
      </div>
  </div>
<!---->

