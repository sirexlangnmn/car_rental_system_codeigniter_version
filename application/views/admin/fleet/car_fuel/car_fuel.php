

<body class="hold-transition skin-blue sidebar-mini">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
          <div class="box">
            <div class="box-header">
            <h4><b>Car Fuel</b></h4>
                  
                    <?php echo validation_errors(); ?>
                    <?php if (isset($message)) { ?>
                    <h3 style="color:green;">Data inserted successfully</h3><br>
                    <?php } ?>

                    <!--Search Box-->
                    <div class="col-xs-6 col-lg-2" style="margin-top: -7px">
                      <form action="driver_search" method="post" class="form-inline" role="form">
                        <div class="form-group">
                          <input type="text" class="form-control" name="search" id="search" placeholder="Search. . . ."> 
                          <!--button type="submit" class="btn btn-info">Submit</button-->
                          </div>
                      </form>
                    </div>
                              
              <table id="example1" class="table table-bordered table-striped">
                  <thead style="background-color: #00b0ff">
                    <tr>
                      <th>-</th>
                      <th>Car Fuel</th>
                      <th colspan="2" align="center">Action</th>
                    </tr>
                  </thead>
                      <tbody>
                       <?php foreach ($fuel as $row) { ?>   
                          <tr>
                             <td><input type="checkbox"></input></td>
                             <td><?php echo $row->fuel_Name; ?></td>
                             <td>
                                <a rel="tooltip" data-placement="bottom" title="Update Fuel" id="Update Fuel" 
                                href="<?php echo base_url(); ?>admin_get/fuel_get/<?php echo $row->fuel_ID ?>">
                                <i class="fa fa-pencil"></i>
                                </a>
                             </td>   
                             <td>
                                <a rel="tooltip" data-placement="bottom" title="Delete Fuel" id="Delete Fuel" 
                                href="<?php echo base_url(); ?>admin_delete/fuel_delete/<?php echo $row->fuel_ID?>">
                                <i class="fa fa-trash"></i>
                                </a>
                            </td>
                          </tr>
                        <?php } ?>
                      </tbody>
                  <tfoot style="background-color: #00b0ff">
                      <tr>
                        <th>-</th>
                        <th>Car Fuel</th>
                        <th colspan="2" align="center">Action</th>
                      </tr>
                  </tfoot>
                  <div align="right">
                    <a rel="tooltip" data-placement="bottom" title="Add Fuel" id="Add Fuel" href="#" class="btn btn-app" data-target="#addFuel" data-toggle="modal"><i class="fa fa-plus-square"></i>Add</a> 
                  </div>
              </table>
              <?php echo $links ?>
          </div>
        </div>
    </div>
</div>

  
<?php include 'fuel_add.php'; ?> 

