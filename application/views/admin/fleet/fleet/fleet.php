

<body class="hold-transition skin-blue sidebar-mini">
  <!-- Content Wrapper. Contains page content -->
  <div class="content">
    <!-- Content Header (Page header) -->
      <div class="box">
         <div class="box-header">
            <h4><b>Fleet Record</b></h4>

              <?php echo validation_errors(); ?>
              <?php if (isset($message)) { ?>
              <h3 style="color:green;">Data inserted successfully</h3><br>
              <?php } ?>
            

            <div class="box-body">    <!-- /.box-header -->
                    <div class="col-xs-4 col-lg-2">
                    <!-- Button trigger modal -->
                    <a href="<?php echo base_url();?>admin_display/car_available">
                    <button type="submit" class="btn btn-success btn-raised btn-block btn-flat">Available</button></a>
                   </div> <!-- /.col -->
                    
                    <div class="col-xs-4 col-lg-2">
                    <!-- Button trigger modal -->
                    <a href="<?php echo base_url();?>admin_display/car_reserved">
                    <button type="submit" class="btn btn-info btn-raised btn-block btn-flat">Reserved</button></a>
                   </div> <!-- /.col -->
                    
                    <div class="col-xs-4 col-lg-2">
                    <!-- Button trigger modal -->
                    <a href="<?php echo base_url();?>admin_display/car_inactive">
                    <button type="submit" class="btn btn-danger btn-raised btn-block btn-flat">Inactive</button></a>
                   </div> <!-- /.col -->
                </div>

               <!--Search Box-->
              <div class="col-xs-6 col-lg-2" style="margin-top: -7px">
                <form action="fleet_search" method="post" class="form-inline" role="form">
                  <div class="form-group">
                    <input type="text" class="form-control" name="search" id="search" placeholder="Search. . . ."> 
                  </div>
                </form>
              </div>

       
              <table id="car" name="car" class="table table-bordered table-striped">
                <thead style="background-color: #00b0ff">
                  <tr>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Brand</th>
                    <th>Model</th>
                    <th>Plate</th>
                    <th>Capacity</th> 
                    <th>Price</th>
                    <th>Status</th>
                    <th colspan="3" align="center">Action</th>
                  </tr>
                </thead>
                                  
                <tbody>
                    <?php
                     foreach ($fleet as $row)  {
                      if ($row->car_Status == "Available")
                      {
                        $flag="success";
                      } 
                      else if ($row->car_Status == "Reserved")
                      {
                       $flag="info";
                      }
                      else
                      {
                       $flag="danger"; 
                      }
                    ?>  
                  <tr>
                      <!--t><?php // echo '<img src="data:image/jpeg;base64,'.base64_encode( $row->driver_pic ).'"/>'; ?></th-->
                      <td><img src="<?php echo base_url(); ?>cars/<?php echo $row->car_Image1?>" height="70" width="100"></td>
                      <td><?php echo $row->category_Name; ?></td>
                      <td><?php echo $row->brand_Name; ?></td>
                      <td><?php echo $row->car_Model; ?></td>
                      <td><?php echo $row->car_Plateno; ?></td>
                      <td><?php echo $row->car_Capacity; ?></td>
                      <td><?php echo $row->car_Price; ?></td>
                      <td><span class="label label-<?php echo $flag; ?>" align="center"></i><?php echo $row->car_Status; ?></span></td> 
                      <td>
                        <a rel="tooltip" data-placement="bottom" title="Update Car Details" 
                          id="Update Car Details" href="<?php echo base_url(); ?>admin_get/car_get/<?php echo $row->car_ID ?>"><i class="fa fa-pencil"></i>
                        </a>
                      </td>        
                      <td>
                        <a rel="tooltip" data-placement="bottom" title="View Car Details" 
                          id="View Car Details" href="<?php echo base_url(); ?>admin_get/car_show/<?php echo $row->car_ID ?>"><i class="fa fa-eye"></i>
                        </a>
                      </td>
                      <td>
                        <a rel="tooltip" data-placement="bottom" title="Delete Car Details" 
                          id="Delete Car Details" href="<?php echo base_url(); ?>admin_delete/car_delete/<?php echo $row->car_ID ?>"><i class="fa fa-trash"></i>
                        </a>
                      </td>
                  </tr>
                <?php } ?>
                </tbody>
               
                <tfoot style="background-color: #00b0ff">
                <tr>
                  <th>Image</th>
                  <th>Category</th>
                  <th>Brand</th>
                  <th>Model</th>
                  <th>Plate</th>
                  <th>Capacity</th> 
                  <th>Price</th>
                  <th>Status</th>
                  <th colspan="3" align="center">Action</th>
                </tr>
                </tfoot>

                  <!-- Button -->     
                  <div align="right">
                      <a rel="tooltip" data-placement="bottom" title="Add New Vehicle Record" id="Add Vehicle" 
                      href="#" class="btn btn-app" data-toggle="modal" data-target="#addvehicle">
                      <i class="fa fa-plus-square"></i>Add</a>

                      <a rel="tooltip" data-placement="bottom" title="Multiple Delete" id="Delete Fleet" 
                      href="#" class="btn btn-app">
                      <i class="fa fa-trash"></i>Delete</a>

                      <a rel="tooltip" data-placement="bottom" title="Print" id="print_Cars" href="#"
                      onclick="window.print()" class="btn btn-app">
                      <i class="fa fa-print"></i> Print</a>
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
               
          

<?php include 'fleet_add.php' ?>
