

<body class="hold-transition skin-blue sidebar-mini">

<!--header-->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   

          <div class="box">
            <div class="box-header">
              <h3><b>Vehicle Record</b></h4>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

               <!--Search Box-->
              <div class="col-xs-6 col-lg-2" style="margin-top: -7px">
                <form action="#" method="post" class="form-inline" role="form">
                  <div class="form-group">
                    <input type="text" class="form-control" name="search" id="search" placeholder="Search. . . ."> 
                  </div>
                </form>
              </div>
              
              <table id="example1" class="table table-bordered table-striped">
                <thead style="background-color: #00b0ff">
                <tr>
                  <th>-</th>
                  <th>Brand</th>
                  <th>Model</th>
                  <th>Category</th>
                  <th>Total no of Cars</th>
                  <th>Available Cars</th>
                  <th>Active</th>
                </tr>
                </thead>
                
                <tbody>
                  <tr>
                     <td><input type="checkbox"></input></td>
                     <td>Toyota</td>
                     <td>Toyota XD</td>
                     <td>Sedan</td>
                     <td>17</td>
                     <td>4</td>
                     <td>13</td>
                  </tr>

                   <tr>
                     <td><input type="checkbox"></input></td>
                     <td>Toyota</td>
                     <td>Toyota XD</td>
                     <td>Sedan</td>
                     <td>17</td>
                     <td>16</td>
                     <td>1</td>
                  </tr>
                  
                   <tr>
                     <td><input type="checkbox"></input></td>
                     <td>Toyota</td>
                     <td>Toyota XD</td>
                     <td>Sedan</td>
                     <td>17</td>
                     <td>15</td>
                     <td>2</td>
                  </tr>

                   <tr>
                     <td><input type="checkbox"></input></td>
                     <td>Toyota</td>
                     <td>Toyota XD</td>
                     <td>Sedan</td>
                     <td>17</td>
                     <td>15</td>
                     <td>2</td>
                  </tr>

                   <tr>
                     <td><input type="checkbox"></input></td>
                     <td>Toyota</td>
                     <td>Toyota XD</td>
                     <td>Sedan</td>
                     <td>17</td>
                     <td>12</td>
                     <td>5</td>
                  </tr> 
 
                </tbody>
                <tfoot>
                <tr>
                  <th>-</th>
                  <th>Brand</th>
                  <th>Model</th>
                  <th>Category</th>
                  <th>Total no of Cars</th>
                  <th>Available Cars</th>
                  <th>Active</th>
                </tr>
                </tr>
                </tfoot>

                <div align="right">
                              <a rel="tooltip" data-placement="bottom" title="Add New Vehicle Record" id="Add New Record" href="#" class="btn btn-app" data-toggle="modal" data-target="#addnewrecord">
                              <i class="fa fa-plus-square"></i>Add</a>
   
                              <a rel="tooltip" data-placement="bottom" title="View Vehicle Record" id="#" 
                              href="<?php echo base_url(); ?>fleet_controller" class="btn btn-app" data-toggle="#" data-target="#">
                                <i class="fa fa-eye"></i>View</a>

                              <a rel="tooltip" data-placement="bottom" title="Update Vehicle Record" id="Update Vehicle Record" href="#" class="btn btn-app" data-toggle="modal" 
                              data-target="#updatevehiclerecord"><i class="fa fa-pencil"></i>Update</a>

                              <a rel="tooltip" data-placement="bottom" title="Print" id="print_drivers" href=""
                               onclick="window.print()" class="btn btn-app"><i class="fa fa-print"></i> Print</a>

                            </div>
              </table>
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

<!---->


  <!-- Add New Record Modal -->
<div class="modal fade" id="addnewrecord" tabindex="-2" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    
<!---->
<div class="login-box" style="margin-top: 45px">
  <div class="login-logo">
    <p><b></b></p>
  </div>

  


<div style="margin-top: -15px">
  <!-- /.login-logo -->
  <div class="login-box-body">
     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h3 class="login-box-msg"><i class="fa fa-pencil"></i>Add New Record</h3>

    <form action="#" method="post">
       <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Brand">
        <span class="fa fa-car form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback" style="margin-top: -7px">
        <input type="password" class="form-control" placeholder="Model">
        <span class="fa fa-car form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback" style="margin-top: -7px">
        <input type="email" class="form-control" placeholder="Category">
        <span class="fa fa-car form-control-feedback"></span>
      </div>
      <div class="box-footer" style="margin-top: -15px; height: 50px">
          <h3><button type="submit" class="btn btn-info btn-raised btn-block btn-flat"
                  data-toggle="#" data-target="#"><i class="fa fa-pencil"></i> &nbsp Update
                  </h3></button>
      </div>
    </form>
  </div>
    </div>
  </div>
</div>
</div>


<!-- Add New Record modal -->
<div class="modal fade" id="updatevehiclerecord" tabindex="-2" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    
<!---->
<div class="login-box" style="margin-top: 45px">
  <div class="login-logo">
    <p><b></b></p>
  </div>

<div style="margin-top: -15px">
  <!-- /.login-logo -->
  <div class="login-box-body">
     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h3 class="login-box-msg"><i class="fa fa-pencil"></i> Update Record</h3>

    <form action="#" method="post">
       <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Brand">
        <span class="fa fa-car form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback" style="margin-top: -7px">
        <input type="password" class="form-control" placeholder="Model">
        <span class="fa fa-car form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback" style="margin-top: -7px">
        <input type="email" class="form-control" placeholder="Category">
        <span class="fa fa-car form-control-feedback"></span>
      </div>
      <div class="box-footer" style="margin-top: -15px; height: 50px">
          <h3><button type="submit" class="btn btn-info btn-raised btn-block btn-flat"
                  data-toggle="#" data-target="#"><i class="fa fa-pencil"></i> &nbsp Update
                  </h3></button>
      </div>
    </form>
  </div>
    </div>
  </div>
</div>
</div>
  
  <!--FOOT-->
  





