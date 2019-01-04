<body class="hold-transition skin-blue sidebar-mini"> 	<!-- Content Wrapper. Contains page content -->
  	<div class="content-wrapper">	 <!-- Content Header (Page header) -->
      	<div class="box">
         	<div class="box-header">
	            <h4><b>Reservation Details</b></h4>
	            <div style="margin-top: -15px">
	            	<div class="login-box-body">
                   	<h3 class="login-box-msg"><i class="fa fa-user"></i> Update Reservation Record</h3>
                    
                    <?php foreach ($reservation as $row) { ?>
                    <?php echo form_open_multipart('admin_update/reservation_update'); ?>

	   					<input type="hidden" class="form-control" name="reservation_ID" value="<?php echo $row->reservation_ID ?>">
					    
					    <div class="col-lg-6 col-xs-12"> 
					      <label>Dropoff Location</label>
					      <div class="form-group has-feedback" style="margin-top: -7px">
					        <input type="text" 
					        	   class="form-control" 
					        	   name="dropoff_Location" 
					        	   placeholder="Dropoff Locaiton"
					        	   value="<?php echo $row->dropoff_Location ?>">
					        <span class="fa fa-car form-control-feedback"></span>
					      </div>  
					    </div> 

					     <div class="col-lg-6 col-xs-12"> 
					      <label>Pickup Location</label>
					      <div class="form-group has-feedback" style="margin-top: -7px">
					        <input type="text" 
					        	   class="form-control" 
					        	   name="pickup_Location" 
					        	   placeholder="Pickup Location"
					        	   value="<?php echo $row->pickup_Location ?>">
					        <span class="fa fa-car form-control-feedback"></span>
					      </div>  
					    </div> 

					    <div class="col-lg-6 col-xs-12"> 
					      <label>Pickup Date</label>
					      <div class="form-group has-feedback" style="margin-top: -7px">
					        <input type="text" 
					        	   class="form-control" 
					        	   name="pickup_Date" 
					        	   placeholder="Pickup Date"
					        	   value="<?php echo $row->pickup_Date ?>">
					        <span class="fa fa-car form-control-feedback"></span>
					      </div>  
					    </div> 

					    <div class="col-lg-6 col-xs-12"> 
					      <label>Pickup Time</label>
					      <div class="form-group has-feedback" style="margin-top: -7px">
					        <input type="text"
					        	   class="form-control" 
					        	   name="pickup_Time" 
					        	   placeholder="Pickup Time"
					        	   value="<?php echo $row->pickup_Time ?>">
					        <span class="fa fa-car form-control-feedback"></span>
					      </div>  
					    </div> 

					     <div class="col-lg-6 col-xs-12"> 
					      <label>Dropoff Date</label>
					      <div class="form-group has-feedback" style="margin-top: -7px">
					        <input type="text" 
					        	   class="form-control" 
					        	   name="dropoff_Date" 
					        	   placeholder="Dropoff Date"
					        	   value="<?php echo $row->dropoff_Date ?>">
					        <span class="fa fa-car form-control-feedback"></span>
					      </div>  
					    </div> 

					    <div class="col-lg-6 col-xs-12"> 
					      <label>Dropoff Time</label>
					      <div class="form-group has-feedback" style="margin-top: -7px">
					        <input type="text" 
					        	   class="form-control" 
					        	   name="dropoff_Time" 
					        	   placeholder="Dropoff Time"
					        	   value="<?php echo $row->dropoff_Time ?>">
					        <span class="fa fa-car form-control-feedback"></span>
					      </div>  
					    </div> 

					    <div class="col-lg-6 col-xs-12"> 
					      <label>Total Payment</label>
					      <div class="form-group has-feedback" style="margin-top: -7px">
					        <input type="text" 
					        	   class="form-control" 
					        	   name="total_payment" 
						       	   placeholder="Total Payment"
					        	   value="<?php echo $row->total_payment ?>">
					        <span class="fa fa-car form-control-feedback"></span>
					      </div>  
					    </div> 

					    <div class="col-lg-6 col-xs-12"> 
					      <label>Balance</label>
					      <div class="form-group has-feedback" style="margin-top: -7px">
					        <input type="text" 
					        	   class="form-control" 
					        	   name="balance" 
					        	   placeholder="Balance"
					        	   value="<?php echo $row->balance ?>">
					        <span class="fa fa-car form-control-feedback"></span>
					      </div>  
					    </div> 

					    <div class="col-lg-6 col-xs-12"> 
					      <label>Res. Time</label>
					      <div class="form-group has-feedback" style="margin-top: -7px">
					        <input type="text" 
					        	   class="form-control" 
					        	   name="reservation_Time" 
					        	   placeholder="Reservation Time"
					        	   value="<?php echo $row->reservation_Time ?>">
					        <span class="fa fa-car form-control-feedback"></span>
					      </div>  
					    </div> 

					    <div class="col-lg-6 col-xs-12"> 
					      <label>Status</label>
					      <div class="form-group has-feedback" style="margin-top: -7px">
					        <select class="form-control" placeholder="Reservation Status" name="reservation_status">
					           <option><?php echo $row->reservation_status  ?></option>
					           <option disabled>-- Choose Status Here --</option>
					            <?php foreach ($reservation_status as $row)  { ?>
					            <option><?php echo $row->reservation_status ?></option>
					          	<?php } ?>    
					        </select>
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
			    
     				<?php } ?>
	  				</div>
	    		</div>
	  		</div>
		</div>
	</div>



