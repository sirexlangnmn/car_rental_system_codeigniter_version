<body class="hold-transition skin-blue sidebar-mini">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <div class="box">
         <div class="box-header">
            <h4><b>Vehicle Record</b></h4>

            <div style="margin-top: -15px">
                <!-- /.login-logo -->
                <div class="login-box-body">
                   <h3 class="login-box-msg"><i class="fa fa-user"></i> Update Vehicle Record</h3>
                    <?php foreach ($fleet as $row) { ?>
                    <?php echo form_open_multipart('admin_update/car_update'); ?>

   <input type="hidden" class="form-control" name="car_ID" value="<?php echo $row->car_ID ?>">
       <div class="col-lg-6 col-xs-12"> 
          <label>Side View</label>
       <div class="form-group"  style="margin-top: -7px">
         <input type="text" readonly="" class="form-control" name="car_Image1" value="<?php echo $row->car_Image1 ?>" placeholder="Car Front View...">
         <input type="file" id="exampleInputFile">
         <span class="glyphicon glyphicon-picture form-control-feedback"></span>
      </div>
    </div>

       <div class="col-lg-6 col-xs-12"> 
          <label>Front View</label>
       <div class="form-group"  style="margin-top: -7px">
         <input type="text" readonly="" class="form-control" name="car_Image2" value="<?php echo $row->car_Image2 ?>" placeholder="Car Side View...">
         <input type="file" id="exampleInputFile">
         <span class="glyphicon glyphicon-picture form-control-feedback"></span>
      </div>
    </div>

      <div class="col-lg-6 col-xs-12"> 
          <label>Inside View</label>
      <div class="form-group"  style="margin-top: -7px">
         <input type="text" readonly="" class="form-control" name="car_Image3" value="<?php echo $row->car_Image3 ?>" placeholder="Car Inner View...">
         <input type="file" id="exampleInputFile">
         <span class="glyphicon glyphicon-picture form-control-feedback"></span>
      </div>
    </div>

      <div class="col-lg-6 col-xs-12"> 
          <label>Category</label>
      <div class="form-group has-feedback" style="margin-top: -7px">
        <select class="form-control" placeholder="Category" name="category_Name">
          <option><?php echo $row->category_Name ?></option>
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
    </div>  
    <?php } ?>


<?php foreach ($fleet as $row) { ?>
      <div class="col-lg-6 col-xs-12"> 
          <label>Brand</label>
      <div class="form-group has-feedback" style="margin-top: -7px">
        <select class="form-control" placeholder="Brand" name="brand_Name">
          <option><?php echo $row->brand_Name ?></option>
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
    </div>  
<?php } ?>



<?php foreach ($fleet as $row) { ?>
      <div class="col-lg-6 col-xs-12"> 
          <label>Model</label>
      <div class="form-group has-feedback" style="margin-top: -7px">
        <input type="text" class="form-control" name="car_Model" value="<?php echo $row->car_Model ?>" placeholder="Model">
        <span class="fa fa-car form-control-feedback"></span>
      </div>  
    </div> 
    
      <div class="col-lg-6 col-xs-12"> 
          <label>Plate Number</label>
      <div class="form-group has-feedback" style="margin-top: -7px">
        <input type="text" class="form-control" name="car_Plateno" value="<?php echo $row->car_Plateno ?>" placeholder="Plate Number">
        <span class="fa fa-align-justify form-control-feedback"></span>
      </div>
    </div>

      <div class="col-lg-6 col-xs-12"> 
          <label>Capacity</label>
      <div class="form-group has-feedback" style="margin-top: -7px">
        <input type="text" class="form-control" name="car_Capacity" value="<?php echo $row->car_Capacity ?>" placeholder="Capacity">
        <span class="fa fa-align-justify form-control-feedback"></span>
      </div>
      </div>

      <div class="col-lg-6 col-xs-12"> 
          <label>Transmission</label>
      <div class="form-group has-feedback" style="margin-top: -7px">
        <select class="form-control" name="transmission_Name" placeholder="Transmission">
          <option><?php echo $row->transmission_Name ?></option>
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
      </div>
<?php } ?>

<?php foreach ($fleet as $row) { ?>
      <div class="col-lg-6 col-xs-12"> 
          <label>Fuel</label>
      <div class="form-group has-feedback" style="margin-top: -7px">
        <select class="form-control" name="fuel_Name" placeholder="Fuel">
         <option><?php echo $row->fuel_Name ?></option>
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
      </div>
<?php } ?>


<?php foreach ($fleet as $row) { ?>
      <div class="col-lg-6 col-xs-12"> 
          <label>Engine</label>
     <div class="form-group has-feedback" style="margin-top: -7px">
        <select class="form-control" name="engine_Name" placeholder="Engine">
          <option><?php echo $row->engine_Name ?></option>
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
      </div>
<?php } ?>

<?php foreach ($fleet as $row) { ?>
      <div class="col-lg-6 col-xs-12"> 
          <label>Price</label>
      <div class="form-group has-feedback" style="margin-top: -7px">
        <input type="text" class="form-control" name="car_Price" value="<?php echo $row->car_Price ?>" placeholder="Price">
        <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
      </div>
      </div>

      <div class="col-lg-6 col-xs-12"> 
          <label>Status</label>
       <div class="form-group has-feedback" style="margin-top: -7px">
        <select class="form-control" name="car_Status" placeholder="Status">
           
            <option disabled>-- Choose Status Here --</option>
             <?php
             foreach ($status as $row)  {
          ?>
            <option><?php echo $row->car_Status ?></option>
          <?php } ?>  
        </select>
        <span class="fa fa-car form-control-feedback">
      </div>  
      </div>
    <div class="col-xs-12 col-lg-3">
      <div class="box-footer" style="margin-top: -15px; height: 50px">      
          <div class="col-xs-12 col-lg-12">
              <!-- Button trigger modal -->
              <h3><button type="submit" class="btn btn-info btn-raised btn-block btn-flat"
              data-toggle="#" data-target="#"><i class="fa fa-pencil"></i> &nbsp Submit</button></h3>
          </div>
      </div>
    </div>
    </form>
     <?php } ?>
  </div>
    </div>
  </div>
</div>
</div>



