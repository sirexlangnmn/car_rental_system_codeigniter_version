
<body class="hold-transition skin-blue sidebar-mini">

<!-- View Reservation Detail Modal -->
<div class="" id="view_car" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="container">
    <div class="box box-default" style="margin-top: 20px">
      <div class="box-header with-border">
       
        <div class="col-xs-12" style="margin-right: -100px">
          <a href="<?php echo base_url();?>admin_display/user" class="btn btn-primary pull-right"><i class="fa fa-arrow-left"></i> Back</a>
          <a href="#" onclick="window.print()" target="_blank" class="btn btn-primary pull-right"><i class="fa fa-print"></i> Print</a>
          <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
            <i class="fa fa-download"></i> Generate PDF
          </button>
          <img src="<?php echo base_url(); ?>images/urvanZone.jpg" height="100px" width="100px" style="margin-bottom: 50px"></i>
          <div class="row no-print" style="margin-right: -20px; margin-top: -200px">
          </div>
         
         <?php foreach ($user_get as $row) { ?>
          <div class="row">
            <div class="col-xs-12">
              <h2 class="page-header" style="margin-left: 100px; margin-bottom: 90px;">
                <small class="pull-right">Date Created: <?php echo $row->date_created ?></small>
              </h2>
            </div>
            <h4 style="margin-top: -10px"><b>User's Information</b></h4>
          </div>    <!-- /.col -->
           <?php } ?>

                  <?php foreach ($user_get as $row) { ?>
                      <div class="row" >
                         <div class="col-lg-3 col-xs-6">  
                            <strong><i class="fa fa-user margin-r-5"></i>Picture</strong>
                              <p class="text-muted margin-r-5">
                              <a href="<?php echo base_url(); ?>user/<?php echo $row->Picture ?>" class="image-zoom" rel="prettyPhoto[gallery]"><img src="<?php echo base_url(); ?>user/<?php echo $row->Picture ?>" height="70" width="100"></a></p>
                        </div> 
                      </div>

                     <div class="row" >
                        <div class="col-lg-3 col-xs-6">
                          <strong><i class="fa fa-user margin-r-5"></i>ID</strong>
                            <p class="text-muted margin-r-5"><?php echo $row->ID ?></p>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                          <strong><i class="fa fa-user margin-r-5"></i>First Name: </strong>
                            <p class="text-muted"><?php echo $row->Firstname ?></p>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                          <strong><i class="fa fa-user margin-r-5"></i>Middle Name</strong>
                            <p class="text-muted"><?php echo $row->Middlename ?></p>
                        </div>  
                         <div class="col-lg-3 col-xs-6">
                          <strong><i class="fa fa-user margin-r-5"></i>Last Name</strong>
                             <p class="text-muted margin-r-5"><?php echo $row->Lastname ?></p>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                          <strong><i class="fa fa-user margin-r-5"></i>Contact Number </strong>
                            <p class="text-muted"><?php echo $row->Contact ?></p>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                          <strong><i class="fa fa-user margin-r-5"></i>Address</strong>
                            <p class="text-muted"><?php echo $row->Address ?></p>
                        </div> 
                        <div class="col-lg-3 col-xs-6">
                          <strong><i class="fa fa-user margin-r-5"></i>Email</strong>
                            <p class="text-muted"><?php echo $row->Email ?></p>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                          <strong><i class="fa fa-user margin-r-5"></i>Username</strong>
                            <p class="text-muted"><?php echo $row->Username ?></p>
                        </div>
                    </div>
                    
                    <div class="row" >
                        <div class="col-lg-3 col-xs-6">
                          <strong><i class="fa fa-user margin-r-5"></i>Position</strong>
                            <p class="text-muted margin-r-5"><?php echo $row->Position ?></p>
                        </div>
                         <div class="col-lg-3 col-xs-6">
                          <strong><i class="fa fa-user margin-r-5"></i>------</strong>
                            <p class="text-muted">------</p>
                        </div>  
                        <div class="col-lg-3 col-xs-6">
                          <strong><i class="fa fa-user margin-r-5"></i>------</strong>
                            <p class="text-muted">------</p>
                        </div>  
                         <div class="col-lg-3 col-xs-6">
                          <strong><i class="fa fa-user margin-r-5"></i>------</strong>
                             <p class="text-muted margin-r-5">------</p>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                          <strong><i class="fa fa-user margin-r-5"></i>------</strong>
                            <p class="text-muted">------</p>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                          <strong><i class="fa fa-user margin-r-5"></i>------</strong>
                            <p class="text-muted">------</p>
                        </div> 
                        <div class="col-lg-3 col-xs-6">
                          <strong><i class="fa fa-user margin-r-5"></i>------</strong>
                            <p class="text-muted">------</p>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                          <strong><i class="fa fa-user margin-r-5"></i>------</strong>
                            <p class="text-muted">------</p>
                        </div>
                    </div>    
                        <!--div class="col-lg-3 col-xs-6">
                          <strong><i class="fa fa-user margin-r-5"></i>Licensed Expiry Date</strong>
                            <p class="text-muted"><?php echo $row->User_Expired ?></p>
                        </div-->
                        
                  <?php } ?>
                        <!--div style="text-align:center; margin-top: -10px">
                         <span style="font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
                        &quot;Times New Roman&quot;,&quot;serif&quot;">
                        ***  NOTHING FOLLOWS  ***<o:p></o:p>
                        </span>
                      </div-->

                    
                  </div>
                </div>
              </div>
            </div>
         </div>
      </div>
  </div>
<!---->

