 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="<?php echo base_url(); ?>design/dist/urvanlogo.png">
  <title>UrvanZone | Admin</title>  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>design/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>design/dist/css/AdminLTE.min.css">
  <!-- Material Design -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>design/dist/css/bootstrap-material-design.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>design/dist/css/ripples.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>design/dist/css/MaterialAdminLTE.min.css">
  <!-- MaterialAdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>design/dist/css/skins/all-md-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>design/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>design/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>design/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>design/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>design/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

</head>

<body class="hold-transition skin-blue sidebar-mini">


<section class="content">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h4><b>Messages</b></h4>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>-</th>
                  <th>Name</th>
                  <th>E mail</th>
                  <th>Mobile No.</th>
                  <th>Subject</th>
                  <th>Message</th>
                </tr>
                </thead>
                
                <tbody>
                  <tr>
                     <td><input type="checkbox" align="center"></input></td>
                     <td>Juan Pedro</td>
                     <td>Juan@gmail.com</td>
                     <td>09091234567</td>
                     <td>Subject</td>
                     <td>Message</td>
                  </tr>

                 <tr>
                     <td><input type="checkbox" align="center"></input></td>
                     <td>Juan Pedro</td>
                     <td>Juan@gmail.com</td>
                     <td>09091234567</td>
                     <td>Subject</td>
                     <td>Message</td>
                  </tr>

                  <tr>
                     <td><input type="checkbox" align="center"></input></td>
                     <td>Juan Pedro</td>
                     <td>Juan@gmail.com</td>
                     <td>09091234567</td>
                     <td>Subject</td>
                     <td>Message</td>
                  </tr>

                  <tr>
                     <td><input type="checkbox" align="center"></input></td>
                     <td>Juan Pedro</td>
                     <td>Juan@gmail.com</td>
                     <td>09091234567</td>
                     <td>Subject</td>
                     <td>Message</td>
                  </tr>

                <tfoot>
                <tr>
                  <th>-</th>
                  <th>Name</th>
                  <th>E mail</th>
                  <th>Mobile No.</th>
                  <th>Subject</th>
                  <th>Message</th>
                </tr>
                </tfoot>
                          <div align="right">
                             
                              <a rel="tooltip" data-placement="bottom" title="Sent Email" id="Sent Email" 
                              href="#" class="btn btn-app" data-target="#sentemail" data-toggle="modal">
                              <i class="fa fa-envelope"></i>Sent Email</a>

                              <a rel="tooltip" data-placement="bottom" title="Sent SMS" id="Sent SMS" 
                              href="#" class="btn btn-app" data-target="#sentsms" data-toggle="modal">
                              <i class="fa fa-phone"></i>Sent SMS</a>


                            </div>
              </tbody>
            </table>
          </div>
        </div>
      </div>

  
        </section>
  
  <!--FOOT-->
  <?php include'include/foot.php'; ?>
<!-- Sent Email Modal -->
<div class="modal fade" id="sentemail" tabindex="-2" role="dialog" aria-labelledby="myModalLabel">
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
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">Quick Email</h3>
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
                  <input type="email" class="form-control" name="emailto" placeholder="Email to:">
                  <span class="fa fa-envelope-o form-control-feedback"></span>
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



<!-- Sent SMS Modal-->
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
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">Send SMS</h3>
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



<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url(); ?>design/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>design/bootstrap/js/bootstrap.min.js"></script>
<!-- Material Design -->
<script src="<?php echo base_url(); ?>design/dist/js/material.min.js"></script>
<script src="<?php echo base_url(); ?>design/dist/js/ripples.min.js"></script>
<script>
    $.material.init();
</script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?php echo base_url(); ?>design/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url(); ?>design/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url(); ?>design/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url(); ?>design/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url(); ?>design/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo base_url(); ?>design/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url(); ?>design/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url(); ?>design/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url(); ?>design/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>design/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>design/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>design/dist/js/demo.js"></script>