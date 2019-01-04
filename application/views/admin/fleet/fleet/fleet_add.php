  <!-- Add Vehicle Modal -->
<div class="modal fade" id="addvehicle" tabindex="-2" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    
<!---->
<div class="login-box" style="margin-top: 45px">
  <div class="login-logo">
    <p><b></b></p>
  </div>

    <?php echo validation_errors(); ?>
<div style="margin-top: -15px">
  <!-- /.login-logo -->
  <div class="login-box-body">
     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    
<h3 class="login-box-msg"><i class="fa fa-car"></i>Add New Vehicle</h3>
  <?php echo form_open_multipart('admin_insert/car_insert'); ?>
       <div class="form-group"  style="margin-top: -7px">
         <input type="text" readonly="" class="form-control" name="car_Image1" placeholder="Car Front View...">
         <input type="file" id="exampleInputFile" name="car_Images1">
         <span class="glyphicon glyphicon-picture form-control-feedback"></span>
      </div>
      <div class="form-group"  style="margin-top: -7px">
         <input type="text" readonly="" class="form-control" name="car_Image2" placeholder="Car Side View...">
         <input type="file" id="exampleInputFile" name="car_Images2">
         <span class="glyphicon glyphicon-picture form-control-feedback"></span>
      </div>
      <div class="form-group"  style="margin-top: -7px">
         <input type="text" readonly="" class="form-control" name="car_Image3" placeholder="Car Inner View...">
         <input type="file" id="exampleInputFile" name="car_Images3">
         <span class="glyphicon glyphicon-picture form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback" style="margin-top: -7px">
        <select class="form-control" placeholder="Category" name="category_Name">
          <option disabled>-- Choose Category Here --</option>
          <?php
             foreach ($category as $row)  {
          ?>
            <option><?php echo $row->category_Name ?></option>
          <?php
            }
          ?>      
        </select>
        <span class="fa fa-car form-control-feedback">
      </div>      
      <div class="form-group has-feedback" style="margin-top: -7px">
        <select class="form-control" placeholder="Brand" name="brand_Name">
            <option disabled>-- Choose Brand Here --</option>
            <?php
             foreach ($brand as $row)  {
          ?>
            <option><?php echo $row->brand_Name ?></option>
          <?php
            }
          ?>
        </select>
        <span class="fa fa-car form-control-feedback">
      </div>
      <div class="form-group has-feedback" style="margin-top: -7px">
        <input type="text" class="form-control" name="car_Model" placeholder="Model">
        <span class="fa fa-car form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback" style="margin-top: -7px">
        <select class="form-control" placeholder="Driver" name="driver_ID">
            <option disabled>-- Choose Brand Here --</option>
            <?php
             foreach ($driver as $row)  {
          ?>
            <option><?php echo $row->driver_Firstname." ".$row->driver_Lastname ?></option>
          <?php
            }
          ?>
        </select>
        <span class="fa fa-car form-control-feedback">
      </div>
         
      <div class="form-group has-feedback" style="margin-top: -7px">
        <input type="text" class="form-control" name="car_Plateno" placeholder="Plate Number">
        <span class="fa fa-align-justify form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback" style="margin-top: -7px">
        <input type="text" class="form-control" name="car_Capacity" placeholder="Capacity">
        <span class="fa fa-align-justify form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback" style="margin-top: -7px">
        <select class="form-control" name="transmission_Name" placeholder="Transmission">
          <option disabled>-- Choose Transmission Here --</option>
          <?php
             foreach ($transmission as $row)  {
          ?>
            <option><?php echo $row->transmission_Name ?></option>
          <?php
            }
          ?>   
        </select>
        <span class="fa fa-car form-control-feedback">
      </div>
      <div class="form-group has-feedback" style="margin-top: -7px">
        <select class="form-control" name="fuel_Name" placeholder="Fuel">
          <option disabled>-- Choose Fuel Here --</option>
          <?php
             foreach ($fuel as $row)  {
          ?>
            <option><?php echo $row->fuel_Name ?></option>
          <?php
            }
          ?>   
        </select>
        <span class="fa fa-car form-control-feedback">
      </div> 
     <div class="form-group has-feedback" style="margin-top: -7px">
        <select class="form-control" name="engine_Name" placeholder="Engine">
          <option disabled>-- Choose Engine Here --</option>
             <?php
             foreach ($engine as $row)  {
          ?>
            <option><?php echo $row->engine_Name ?></option>
          <?php
            }
          ?>  
        </select>
        <span class="fa fa-car form-control-feedback">
      </div>
      <div class="form-group has-feedback" style="margin-top: -7px">
        <input type="text" class="form-control" name="car_Price" placeholder="Price">
        <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
      </div>
       <div class="form-group has-feedback" style="margin-top: -7px">
        <select class="form-control" name="car_Status" placeholder="Status">
            <option disabled>-- Choose Status Here --</option>
             <?php
             foreach ($status as $row)  {
          ?>
            <option><?php echo $row->car_Status ?></option>
          <?php
            }
          ?>  
        </select>
        <span class="fa fa-car form-control-feedback">
      </div>   
      <div class="box-footer" style="margin-top: -15px; height: 50px">      
          <div class="col-xs-12 col-lg-12">
              <!-- Button trigger modal -->
              <h3><button type="submit" class="btn btn-info btn-raised btn-block btn-flat"
              data-toggle="#" data-target="#"><i class="fa fa-pencil"></i> &nbsp Submit</button></h3>
          </div>
      </div>
    </form>
  </div>
    </div>
  </div>
</div>
</div>