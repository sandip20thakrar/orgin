<?php include("include/header.php"); ?>
<?php include("include/sidemenu.php"); ?>
<?php include('../include/dbconfig.php'); ?>

<link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
		  <h1>User Product Inquiry</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User Product Inquiry</li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
			<h4>View User Product Inquiry</h4>
            
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Full Name</th>
                  <th>Mobile No.</th>
				  <th>Email</th>
				  <th>Message</th>
				  <th>Action</th>
                </tr>
                </thead>
                <tbody>
				<?php
				$i=1;
				$sql=$db->query("SELECT * FROM `productview` order by proviewid desc");
				while($row=$sql->fetch_array()){
				?>
					<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $row['proviewname']; ?></td>
					<td><?php echo $row['productviewmobile']; ?></td>
					<td><?php echo $row['proviewemail']; ?></td>
					<td><?php echo substr($row['proviewmessage'], 0, 15); ?></td>
					<td>
					<a href="viewuserproductinquiry.php?viewuserproductinquiry=<?php echo $row['proviewid']; ?>" class="btn btn-primary"><i class="fa fa-fw fa-street-view"></i> View</a>
					<a class="btn btn-danger" href="php/deleteuserproductinquiry.php?deleteuserproductinquiry=<?php echo $row['proviewid']; ?>"><i class="fa fa-trash"></i> Delete</a>
<?php
if($row['productviewnew'] == ''){
?>
<img src="../img/new.gif" class="img-responsive" style="width: 20%;">
<?php }else{} ?>
</td>
					</tr>
					
				<?php $i++;} ?>
                </tbody>
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
	
<!-- edit -->
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
