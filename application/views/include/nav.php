


<body class="hold-transition skin-blue sidebar-mini">


<div class="wrapper">
   <!-- Main Header -->
  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Urvan Zone</b></span>
      <!-- logo for regular state and mobile devices -->
      <span><img src="<?php echo base_url(); ?>images/FINAL LOGO.png" class="user-image" 
        height="70px" width="210px" alt="Company Logo" ></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
 

          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="<?php echo base_url();?>user/<?php echo $_SESSION['Picture'];?>" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
               <span class="hidden-xs">Welcome  <?php echo $_SESSION['Firstname'];?>  <?php echo $_SESSION['Lastname'];?></span>
            </a>
           
            <!--pop up-->
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
            <!--pop up-->
              <li class="user-header">
                <img src="<?php echo base_url();?>user/<?php echo $_SESSION['Picture'];?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $_SESSION['Firstname'];?>  <?php echo $_SESSION['Lastname'];?> <br> <small><?php echo $_SESSION['Position'];?></small>
                  <small>UrvanZone</small>
                </p>
              </li>

             
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url('logout/out') ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
            <!--pop up end-->
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li> 
            <img src="<?php echo base_url();?>images/urvanZone.jpg" height="60px" width="60px"></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
     <!-- /.search form -->