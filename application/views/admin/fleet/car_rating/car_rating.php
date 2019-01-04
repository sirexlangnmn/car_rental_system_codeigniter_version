

<body class="hold-transition skin-blue sidebar-mini">

<!--header-->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h4><b>Vehicle Rating</b></h4>

    <?php echo validation_errors(); ?>
    <?php if (isset($message)) { ?>
      <h3 style="color:green;">Data inserted successfully</h3><br>
    <?php } ?>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="box-body">
          
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>-</th>
                  <th>Car Rating</th>
                  <th>Rating Date</th>
                </tr>
                </thead>
                
                 <?php
                     foreach ($rating_fetch as $rating_model)  {
                  ?>    
                <tbody>
                  <tr>
                     <td><input type="checkbox"></input></td>
                     <td><?php echo $rating_model['rating']; ?></td>
                     <td><?php echo $rating_model['rating_date']; ?></td>
                  </tr>
                </tbody>
                <?php
                    }
                ?>
                <tfoot>
                <tr>
                  <th>-</th>
                  <th>Car Rating</th>
                  <th>Rating Date</th>
                </tr>
                </tr>
                </tfoot>
                <div align="left">
                    <a rel="tooltip" data-placement="bottom" title="Add Rating" id="Add Rating" href="#" class="btn btn-app" data-target="#addrating" data-toggle="modal">
                    <i class="fa fa-plus-square"></i>Add</a>
                </div>
              </tbody>
            </table>
          </div>
        </div>
      </div>

          
 

<?php include 'rating_add.php'; ?>



