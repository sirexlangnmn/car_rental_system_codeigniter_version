<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Compose Message</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- fullCalendar 2.2.5-->
  <link rel="stylesheet" href="<?php echo base_url();?>css/fullcalendar/fullcalendar.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>css/plugins/fullcalendar/fullcalendar.print.css" media="print">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>css/dist/css/AdminLTE.min.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url();?>css/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Material Design -->
  <link rel="stylesheet" href="<?php echo base_url();?>css/dist/css/bootstrap-material-design.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>css/dist/css/ripples.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>css/dist/css/MaterialAdminLTE.min.css">
  <!-- MaterialAdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>css/dist/css/skins/all-md-skins.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="hold-transition skin-blue sidebar-mini">


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Mailbox
        <small>12 new messages</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Mailbox</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <a href="<?php echo base_url(); ?>admin_display/mailbox" class="btn btn-primary btn-raised btn-block margin-bottom">Back to Inbox</a>

          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Folders</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="<?php echo base_url(); ?>admin_display/mailbox"><i class="fa fa-inbox"></i> Inbox
                  <span class="label label-primary pull-right">12</span></a></li>
                <li><a href="<?php echo base_url(); ?>admin_display/mailbox_sent"><i class="fa fa-envelope-o"></i> Sent</a></li>
                <li><a href="#"><i class="fa fa-file-text-o"></i> Drafts</a></li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Compose New Message</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group no-margin">
                <input class="form-control" placeholder="To:">
              </div>
              <div class="form-group no-margin">
                <input class="form-control" placeholder="Subject:">
              </div>
              <div class="form-group">
                    <textarea id="compose-textarea" class="form-control" style="height: 300px">
                      <h1><u>Heading Of Message</u></h1>
                      <h4>Subheading</h4>
                       <p>Statement. Statement. Statement. Statement. Statement. Statement. Statement. Statement. Statement.
                   Statement. Statement. Statement. Statement. Statement. Statement. Statement. Statement. Statement.
                   Statement. Statement. Statement. Statement. Statement. Statement. Statement. Statement. Statement.
                   Statement. Statement. Statement. Statement. Statement. Statement. Statement. Statement. Statement.
                   Statement. Statement. Statement. Statement. Statement. Statement. Statement. Statement. Statement.
                   Statement. Statement. Statement. Statement. Statement. Statement. Statement. Statement. Statement.</p>

                <p>Statement. Statement. Statement. Statement. Statement. Statement. Statement. Statement. Statement.
                   Statement. Statement. Statement. Statement. Statement. Statement. Statement. Statement. Statement.
                   Statement. Statement. Statement. Statement. Statement. Statement. Statement. Statement. Statement.
                   Statement. Statement. Statement. Statement. Statement. Statement. Statement. Statement. Statement.
                   Statement. Statement. Statement. Statement. Statement. Statement. Statement. Statement. Statement.
                   Statement. Statement. Statement. Statement. Statement. Statement. Statement. Statement. Statement.</p>

                <p>Statement. Statement. Statement. Statement. Statement. Statement. Statement. Statement. Statement.
                   Statement. Statement. Statement. Statement. Statement. Statement. Statement. Statement. Statement.
                   Statement. Statement. Statement. Statement. Statement. Statement. Statement. Statement. Statement.
                   Statement. Statement. Statement. Statement. Statement. Statement. Statement. Statement. Statement.
                   Statement. Statement. Statement. Statement. Statement. Statement. Statement. Statement. Statement.
                   Statement. Statement. Statement. Statement. Statement. Statement. Statement. Statement. Statement.</p>

                <p>Statement. Statement. Statement. Statement. Statement. Statement. Statement. Statement. Statement.
                   Statement. Statement. Statement. Statement. Statement. Statement. Statement. Statement. Statement.
                   Statement. Statement. Statement. Statement. Statement. Statement. Statement. Statement. Statement.
                   Statement. Statement. Statement. Statement. Statement. Statement. Statement. Statement. Statement.
                   Statement. Statement. Statement. Statement. Statement. Statement. Statement. Statement. Statement.
                   Statement. Statement. Statement. Statement. Statement. Statement. Statement. Statement. Statement.</p>
                      <ul>
                        <li>List item one</li>
                        <li>List item two</li>
                        <li>List item three</li>
                        <li>List item four</li>
                      </ul>
                      <p>Thank you,</p>
                      <p>Juan Dela Cruz</p>
                    </textarea>
              </div>
              <div class="form-group">
                <div class="btn btn-default btn-file">
                  <i class="fa fa-paperclip"></i> Attachment
                  <input type="file" name="attachment">
                </div>
                <p class="help-block">Max. 32MB</p>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <div class="pull-right">
                <button type="button" class="btn btn-default"><i class="fa fa-pencil"></i> Draft</button>
                <button type="submit" class="btn btn-primary btn-raised"><i class="fa fa-envelope-o"></i> Send</button>
              </div>
              <button type="reset" class="btn btn-danger"><i class="fa fa-times"></i> Discard</button>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <!--FOOT-->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url();?>css/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url();?>css/bootstrap/js/bootstrap.min.js"></script>
<!-- Material Design -->
<script src="<?php echo base_url();?>css/dist/js/material.min.js"></script>
<script src="../../dist/js/ripples.min.js"></script>
<script>
    $.material.init();
</script>
<!-- Slimscroll -->
<script src="<?php echo base_url();?>css/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>css/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>css/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>css/dist/js/demo.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url();?>css/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Page Script -->
<script>
  $(function () {
    //Add text editor
    $("#compose-textarea").wysihtml5();
  });
</script>
</body>
</html>
