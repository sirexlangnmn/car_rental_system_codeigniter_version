<!-- Sidebar Menu -->
<ul class="sidebar-menu">
  
    <?php 
        date_default_timezone_set('Asia/Manila');
        $datestring = '%Y-%m-%d %h:%i:%s %a';
        $time = time();
        echo mdate($datestring, $time);
    ?>
            
        <li class="header">MAIN NAVIGATION</li>   <!-- Optionally, you can add icons to the links -->
        <li class="active">
          <a href="<?php echo base_url();?>admin_display/index">
            <i class="fa fa-home"></i>
            <span>Dashboard</span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url();?>admin_display/gps">
            <i class="fa fa-home"></i>
            <span>Fleet Monitoring</span>
          </a>
        </li>
         
        <li class="treeview">
          <a href="#"><i class="fa fa-credit-card"></i> <span>Reservation</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>admin_display/reservation">All Reservation</a></li>
            <li><a href="<?php echo base_url();?>admin_display/reservation_pending">Pending Reservation</a></li>
            <li><a href="<?php echo base_url();?>admin_display/reservation_confirmed">Confirmed Reservation</a></li>
            <li><a href="<?php echo base_url();?>admin_display/reservation_upcoming">Upcoming Reservation</a></li>
            <li><a href="<?php echo base_url();?>admin_display/reservation_ongoing">Ongoing Reservation</a></li>
            <li><a href="<?php echo base_url();?>admin_display/reservation_finished">Finished Reservation</a></li>
            <li><a href="<?php echo base_url();?>admin_display/reservation_cancelled">Cancelled Reservation</a></li>
          </ul>
        </li>

        <li>
          <a href="<?php echo base_url();?>admin_display/reservation_unfulfilled">
            <i class="fa fa-money"></i> 
            <span>Unfulfilled Payment</span>
          </a>
        </li>
         
        <li class="treeview">
          <a href="#"><i class="fa fa-calendar"></i> <span>Manage Events</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" color="black">
            <li><a href="<?php echo base_url();?>calendar">Calendar Activities</a></li>
            <li><a href="<?php echo base_url();?>admin_display/schedule">Schedule of Reservation</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#"><i class="fa fa-car"></i> <span>Manage Vehicle</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" color="black">
            <li><a href="<?php echo base_url();?>admin_display/fleet">Fleet Record</a></li>
            <li><a href="<?php echo base_url();?>admin_display/car_category">Car Category</a></li>
            <li><a href="<?php echo base_url();?>admin_display/car_brand">Car Brand</a></li>
            <li><a href="<?php echo base_url();?>admin_display/car_transmission">Car Transmission</a></li>
            <li><a href="<?php echo base_url();?>admin_display/car_fuel">Car Fuel</a></li>
            <li><a href="<?php echo base_url();?>admin_display/car_engine">Car Engine</a></li>
            <li><a href="<?php echo base_url();?>admin_display/car_status">Car Status</a></li>
            <li><a href="<?php echo base_url();?>admin_display/car_rating">Car Rating</a></li>
          </ul>
        </li>

        <li>
          <a href="<?php echo base_url();?>admin_display/customer">
            <i class="fa fa-user"></i>
            <span>Customer</span>
          </a>
        </li>
        
        <li class="treeview">
          <a href="#"><i class="fa fa-users"></i> <span>Human Resource</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>admin_display/user">User Record</a></li>
            <li><a href="<?php echo base_url();?>admin_display/driver">Driver Record</a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#"><i class="fa fa-envelope"></i> <span>Messages</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>admin_display/mailbox">Email</a></li>
            <li><a href="<?php echo base_url();?>admin_display/messages">Messages</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#"><i class="fa fa-bar-chart"></i> <span>Graph | Report</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="">Reservation</a></li>
            <li><a href="<?php echo base_url();?>admin_chart/showchart">Sales</a></li>
            <li><a href="">Vehicle</a></li>
            <li><a href="">Driver</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#"><i class="fa fa-gears"></i> <span>Manage Front End</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="">Logo</a></li>
            <li><a href="">Slide Show</a></li>
            <li><a href="">Content</a></li>
            <li><a href="">Advertisement</a></li>
          </ul>
        </li>

        <li><a href=""><i class="fa fa-gear"></i> <span>Settings</span></a></li>
        <li><a href=""><i class="fa fa-database"></i> <span>Database Back Up</span></a></li>
</ul>
    
<!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->
</aside>
