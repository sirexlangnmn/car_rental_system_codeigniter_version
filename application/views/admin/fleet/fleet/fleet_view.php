
<body class="hold-transition skin-blue sidebar-mini">

<!-- View Reservation Detail Modal -->
<div class="" id="view_car" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="container">
    <div class="box box-default" style="margin-top: 20px">
      <div class="box-header with-border">
       
        <div class="col-xs-12" style="margin-right: -100px">
           <a href="<?php echo base_url();?>admin_display/fleet" class="btn btn-primary pull-right"><i class="fa fa-arrow-left"></i> Back</a>
          <a href="#" onclick="window.print()" target="_blank" class="btn btn-primary pull-right"><i class="fa fa-print"></i> Print</a>
          <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
            <i class="fa fa-download"></i> Generate PDF
          </button>
          <img src="<?php echo base_url(); ?>images/urvanZone.jpg" height="100px" width="100px" style="margin-bottom: 50px"></i>
          <div class="row no-print" style="margin-right: -20px; margin-top: -200px">
          </div>
        
          <div class="row">
            <div class="col-xs-12">
              <h2 class="page-header" style="margin-left: 100px; margin-bottom: 90px;">
                <small class="pull-right">Date: 10/2/2017</small>
              </h2>
            </div>
                   
            <h4 style="margin-top: -10px"><b>Car's Information</b></h4>
          </div>  
         
                  <!-- /.col -->
                  <?php foreach ($car_show as $row) { ?>
                  
                     <div class="row" >
                        <div class="col-lg-3 col-xs-6">  
                            <strong><i class="fa fa-user margin-r-5"></i>Side View</strong>
                              <p class="text-muted margin-r-5">
                              <a href="<?php echo base_url(); ?>cars/<?php echo $row->car_Image1 ?>" class="image-zoom" rel="prettyPhoto[gallery]"><img src="<?php echo base_url(); ?>cars/<?php echo $row->car_Image1 ?>" height="70" width="100"></a></p>
                        </div> 
                        <div class="col-lg-3 col-xs-6">  
                          <strong><i class="fa fa-user margin-r-5"></i>Front View</strong>
                              <p class="text-muted margin-r-5">
                              <a href="<?php echo base_url(); ?>cars/<?php echo $row->car_Image2 ?>" class="image-zoom" rel="prettyPhoto[gallery]"><img src="<?php echo base_url(); ?>cars/<?php echo $row->car_Image2 ?>" height="70" width="100"></a></p>
                        </div> 
                        <div class="col-lg-3 col-xs-6">  
                          <strong><i class="fa fa-user margin-r-5"></i>Inside View</strong>
                            <p class="text-muted margin-r-5">
                            <a href="<?php echo base_url(); ?>cars/<?php echo $row->car_Image3 ?>" class="image-zoom" rel="prettyPhoto[gallery]"><img src="<?php echo base_url(); ?>cars/<?php echo $row->car_Image3 ?>" height="70" width="100"></a></p>
                        </div> 
                        <div class="col-lg-3 col-xs-6">  
                          <strong><i class="fa fa-user margin-r-5"></i>Back VIew</strong>
                            <p class="text-muted margin-r-5">
                            <a href="<?php echo base_url(); ?>cars/<?php echo $row->car_Image1 ?>" class="image-zoom" rel="prettyPhoto[gallery]"><img src="<?php echo base_url(); ?>cars/<?php echo $row->car_Image1 ?>" height="70" width="100"></a></p>
                        </div> 

                        <div class="col-lg-3 col-xs-6">
                          <strong><i class="fa fa-user margin-r-5"></i>car ID</strong>
                            <p class="text-muted margin-r-5"><?php echo $row->car_ID ?></p>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                          <strong><i class="fa fa-user margin-r-5"></i>Car Category</strong>
                            <p class="text-muted"><?php echo $row->category_Name ?></p>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                          <strong><i class="fa fa-user margin-r-5"></i>Car Brand</strong>
                            <p class="text-muted"><?php echo $row->brand_Name ?></p>
                        </div>  
                         <div class="col-lg-3 col-xs-6">
                          <strong><i class="fa fa-user margin-r-5"></i>Car Model</strong>
                             <p class="text-muted margin-r-5"><?php echo $row->car_Model ?></p>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                          <strong><i class="fa fa-user margin-r-5"></i>Plate No</strong>
                            <p class="text-muted"><?php echo $row->car_Plateno ?></p>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                          <strong><i class="fa fa-user margin-r-5"></i>Capacity</strong>
                            <p class="text-muted"><?php echo $row->car_Capacity ?></p>
                        </div> 
                        <div class="col-lg-3 col-xs-6">
                          <strong><i class="fa fa-user margin-r-5"></i>Transmission</strong>
                            <p class="text-muted"><?php echo $row->transmission_Name ?></p>
                        </div>
                       <div class="col-lg-3 col-xs-6">
                          <strong><i class="fa fa-user margin-r-5"></i>Fuel</strong>
                            <p class="text-muted"><?php echo $row->fuel_Name ?></p>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                          <strong><i class="fa fa-user margin-r-5"></i>Engine</strong>
                            <p class="text-muted"><?php echo $row->engine_Name ?></p>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                          <strong><i class="fa fa-user margin-r-5"></i>Price</strong>
                            <p class="text-muted"><?php echo $row->car_Price ?></p>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                          <strong><i class="fa fa-user margin-r-5"></i>Status</strong>
                            <p class="text-muted"><?php echo $row->car_Status ?></p>
                        </div>
                         <?php
                            foreach ($driver as $row) {
                        ?>
                        <div class="col-lg-3 col-xs-6">
                          <strong><i class="fa fa-user margin-r-5"></i>Driver</strong>
                            <p class="text-muted"><?php echo $row->driver_Firstname." ".$row->driver_Lastname ?></p>
                        </div>
                        <?php } ?>
                      </div>
                  
                  <?php  } ?>

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
                        <!--div style="text-align:center; margin-top: -10px">
                         <span style="font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
                        &quot;Times New Roman&quot;,&quot;serif&quot;">
                        ***  NOTHING FOLLOWS  ***<o:p></o:p>
                        </span>
                      </div-->
              
<!---->

