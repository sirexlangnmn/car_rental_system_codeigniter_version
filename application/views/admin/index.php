<body class="hold-transition skin-blue sidebar-mini">

<!-- Loader -->
<div class="plash">
  <div id="scene">
    <span></span>
      <div id="road">
        <div id="stripes"></div>
      </div>
  </div>
  <div class="loading">Loading<span>...</span></div>
</div>
<!--Loader -->


<section class="content">   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">  <!-- Content Header (Page header) -->
      <h1>
        Dashboard <small>Control panel</small>
      </h1>
    </section>

        <section class="content"> <!--Aggregate all 3 Rows of Small Boxes-->
          <div class="row"> <!-- 1st row of Small boxes (Stat box) -->
            <div class="col-lg-3 col-xs-6"> <!-- Small boxes (Stat box) 1 -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php echo $pending ?></h3>
                  <p>Pending Reservation</p>
                </div>
                <div class="icon">
                  <i class="fa fa-spinner"></i>
                </div>
                <a href="<?php echo base_url(); ?>admin_display/reservation_pending" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>

            <!-- col -->
            <div class="col-lg-3 col-xs-6">   <!-- Small boxes (Stat box) 1 -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php echo $confirmed ?></h3>
                  <p>Confirmed Reservation</p>
                </div>
                <div class="icon">
                  <i class="fa fa-thumbs-o-up"></i>
                </div>
                <a href="<?php echo base_url(); ?>admin_display/reservation_confirmed" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>  
            
            <!-- col -->
            <div class="col-lg-3 col-xs-6">   <!-- Small boxes (Stat box) 1 -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?php echo $upcoming ?></h3>
                  <p>Upcoming Reservation</p>
                </div>
                <div class="icon">
                  <i class="fa fa-car"></i>
                </div>
                <a href="<?php echo base_url(); ?>admin_display/reservation_upcoming" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>

            <!-- col -->
            <div class="col-lg-3 col-xs-6">   <!-- Small boxes (Stat box) 1 -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?php echo $ongoing ?></h3>
                  <p>Ongoing Reservation</p>
                </div>
                <div class="icon">
                  <i class="fa fa-hourglass-half"></i>
                </div>
                <a href="<?php echo base_url(); ?>admin_display/reservation_finished" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>    <!-- 1st row close-->
     
      
      <div class="row">    <!-- 2nd row of Small boxes (Stat box) -->
        <div class="col-lg-3 col-xs-6">   <!-- Small boxes (Stat box) 2 -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $finished ?></h3>
              <p>Finished Reservation</p>
            </div>
            <div class="icon">
              <i class="fa fa-check-circle-o"></i>
            </div>
            <a href="<?php echo base_url(); ?>admin_display/reservation_finished" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-green"> <!-- Small boxes (Stat box) 2 -->
            <div class="inner">
              <h3><?php echo $cancelled ?></h3>
              <p>Cancelled Reservation</p>
            </div>
            <div class="icon">
              <i class="fa fa-thumbs-down"></i>
            </div>
            <a href="<?php echo base_url(); ?>admin_display/reservation_cancelled" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-red">    <!-- Small boxes (Stat box) 2 -->
            <div class="inner">
              <h3><?php echo $unfulfilled ?></h3>
              <p>Unfulfilled Payment</p>
            </div>
            <div class="icon">
              <i class="fa fa-money"></i>
            </div>
            <a href="<?php echo base_url(); ?>admin_display/reservation_unfulfilled" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">   <!-- Small boxes (Stat box) 2 -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>56</h3>
              <p>User Registration</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="<?php echo base_url(); ?>admin/customer" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>  <!-- 2nd row close-->

      <div class="row"> <!-- 3rd row of Small boxes (Stat box) -->
        <div class="col-lg-3 col-xs-6">   <!-- Small boxes (Stat box) 3 -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $car_reserved_count ?></h3>
              <p>Reserved Vehicle</p>
            </div>
            <div class="icon">
              <i class="fa fa-spinner"></i>
            </div>
            <a href="<?php echo base_url(); ?>admin_display/car_reserved" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6"> <!-- Small boxes (Stat box) 3 -->
          <div class="small-box bg-green">
            <div class="inner">
             
              <h3><?php echo $car_available_count ?></h3>
              <p>Available Vehicle</p>
               
            </div>
           
            <div class="icon">
              <i class="fa fa-automobile"></i>
            </div>
            <a href="<?php echo base_url(); ?>admin_display/car_available" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6"> <!-- Small boxes (Stat box) 3 -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $car_inactive_count ?></h3>
              <p>Inactive Vehicle</p>
            </div>
            <div class="icon">
              <i class="fa fa-car"></i>
            </div>
            <a href="<?php echo base_url(); ?>admin_display/car_inactive" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6"> <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
             <h3>12</h3>
              <p>Messages</p>
            </div>
          <div class="icon">
            <i class="fa fa-envelope"></i>
          </div>
          <a href="mailbox.html" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

    </div>
  </section>


      
     <section class="content">     <!-- Content of graph and statistic-->
      <div class="row"> <!-- Left col -->
        <section class="col-lg-7 connectedSortable"> <!-- Custom tabs (Charts with tabs)-->
          <div class="nav-tabs-custom">     <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-right">
              <li class="pull-left header"><i class="fa fa-inbox"></i>Confirmed and Finished</li>
            </ul>
            <div class="tab-content no-padding">
               <!-- Morris chart - Sales -->
              <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
              <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
            </div>
          </div>
          <!-- /.nav-tabs-custom -->

        
          <!-- TO DO List -->
          <div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>
                <h3 class="box-title">Upcoming and Ongoing</h3>
            </div>

            <div class="box-body">    <!-- /.box-header -->
              <ul class="todo-list">
                <li>
                  <p class="text">da3zj3l1ss
                    <a href="#"> Federex Potolin</a></p>
                  <!-- Emphasis label -->
                  <small class="label label-danger"><i class="fa fa-clock-o"></i> 2 days left</small>
                </li>
               
                <li>
                  <p class="text">da10szl1ssa
                    <a href="#">Kien Dolorfo</a></p>
                  <!-- Emphasis label -->
                  <small class="label label-success"><i class="fa fa-clock-o"></i> 7 days left</small>
                </li>

                 <li>
                  <p class="text">21zj3l1htaa
                    <a href="#">Alvin Ebacuado</a></p>
                  <!-- Emphasis label -->
                  <small class="label label-danger"><i class="fa fa-clock-o"></i> 2 days left</small>
                </li>

                 <li>
                 <p class="text">lksi3l1ss36
                    <a href="#">Dexter Saldivar</a></p>
                  <!-- Emphasis label -->
                  <small class="label label-success"><i class="fa fa-clock-o"></i> 7 days left</small>
                </li>

                 <li>
                 <p class="text">da3fds9sl1a
                    <a href="#">Dan Balasta</a></p>
                  <!-- Emphasis label -->
                  <small class="label label-primary"><i class="fa fa-clock-o"></i> 10 days left</small>
                </li>
              </ul>
            </div>


            <!-- /.box-body -->
            <div class="box-footer clearfix no-border">
               <div class="box-tools pull-left">
                <ul class="pagination pagination-sm inline">
                  <li><a href="#">&laquo;</a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- /.box -->
        </section>
        <!-- /.Left col -->
      

        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">
          <!-- Map box -->
          <div class="box box-solid bg-light-blue-gradient">
            <div class="box-header">
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip" title="Date range">
                  <i class="fa fa-calendar"></i></button>
                <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->

              <i class="fa fa-map-marker"></i>

              <h3 class="box-title">
                Monitoring
              </h3>
            </div>
            <div class="box-body">
              <div id="world-map" style="height: 250px; width: 100%;"></div>
            </div>
            <!-- /.box-body-->
            </div>
          <!-- /.box -->

          <!-- solid sales graph -->
          <div class="box box-solid bg-teal-gradient">
            <div class="box-header">
              <i class="fa fa-th"></i>

              <h3 class="box-title">Sales Graph</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
            </div>
            <div class="box-body border-radius-none">
              <div class="chart" id="line-chart" style="height: 250px;"></div>
            </div>
            <!-- /.box-body -->
              <!-- /.row -->
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->

                <!-- /.col -->
  </div>
</section>
       



<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url(); ?>design/plugins/jQuery/jquery-2.2.3.min.js"></script>

<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
 <!--nasa loob ng bootstrap/js folder yun offline version ng jquery-ui.js-->
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
 <!--nasa loob ng bootstrap/js folder yun offline version ng raphael.js-->
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
 <!--nasa loob ng bootstrap/js folder yun offline version ng moment.js-->
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
<script src="<?php echo base_url(); ?>design/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>design/dist/js/demo.js"></script>


<!-- Google map -->
  <script src="<?php echo base_url(); ?>design/custom.js"></script>
</body>
</html>
