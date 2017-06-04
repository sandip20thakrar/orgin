<?php include("include/header.php"); ?>
<?php include("include/sidemenu.php"); ?>
<?php include('../include/dbconfig.php'); ?>
<?php
$query=$db->query("SELECT * FROM `setting` WHERE settingid='1'");
$row=$query->fetch_array();
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Setting
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        
        <li class="active">Setting</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Setting</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="php/editsetting.php">
              <div class="box-body">
                <div class="form-group">
                  <label>Address Line 1</label>
                  <input type="text" value="<?php echo $row['address1']; ?>" class="form-control" name="address1" placeholder="Enter Address Line 1">
                </div>
                <div class="form-group">
                  <label>Address Line 2</label>
                  <input type="text" value="<?php echo $row['address2']; ?>" class="form-control" name="address2" placeholder="Enter Address Line 2">
                </div>
               <div class="form-group">
                  <label>Contact Person</label>
                  <input type="text" value="<?php echo $row['contactperson']; ?>" class="form-control" name="contactperson" placeholder="Enter Contact Person Name">
                </div>
				<div class="form-group">
                  <label>Mobile No.</label>
                  <input type="number" value="<?php echo $row['mobile']; ?>" class="form-control" name="number" placeholder="Enter Mobile No.">
                </div>
				<div class="form-group">
                  <label>Email Id</label>
                  <input type="email" value="<?php echo $row['email']; ?>" class="form-control" name="email" placeholder="Enter Email Id">
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

          <!-- Form Element sizes -->
          
          <!-- /.box -->

          
          <!-- /.box -->

          <!-- Input addon -->
          
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-primary">
            
            <!-- /.box-header -->
            <!-- form start -->
            <form action="php/editsetting.php" method="post" enctype="multipart/form-data">
			<input type="hidden" name="logoid" value="<?php echo $row['settingid']; ?>">
              <div class="box-body">
                <?php 
			  if($row['logo'] != ""){
			  ?>
				<div class="form-group">
                  <center><img src="../upload_image/logo/<?php echo $row['logo']; ?>" class="img-responsive"></center>
                </div>
				<div class="form-group">
                  <center><a href="php/deletelogo.php?settingid=<?php echo $row['settingid']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a></center>
                </div>
			  <?php }else{ ?>
                <div class="form-group">
                  <center><label>Select Product Image</label></center>
                 <center><input type="file" name="fileToUpload" class="form-control" style="width: 80%;" required></center>
                </div>
			  <?php } ?>
              </div>
              <!-- /.box-body -->
			<?php 
			  if($row['logo'] == ""){
			  ?>
              <div class="box-footer">
                <button type="submit" name="imagesubmit" class="btn btn-primary">Submit</button>
              </div>
			  <?php } ?>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
          <!-- general form elements disabled -->
          
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <footer class="main-footer">
    
    <strong>Copyright &copy; 2017 <a href="#">Sulemani Agate</a>.</strong> All Rights
    Reserved.
  </footer>

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>
