<?php include("include/header.php"); ?>
<?php include("include/sidemenu.php"); ?>
<?php include('../include/dbconfig.php'); ?>
<link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
		  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add New SubCategory</button>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">SubCategory</li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
			<h4>View SubCategory</h4>
            
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
				  <th>SubCategory Name</th>
                  <th>Category Name</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
				<?php
				$i=1;
				$sql=$db->query("SELECT * FROM `subcategory` INNER JOIN category on category.cateid=subcategory.categoryid order by subcategory.subcatname");
				while($row=$sql->fetch_array()){
				?>
					<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $row['subcatname']; ?></td>
					<td><?php echo $row['catename']; ?></td>
					<td><a href="" data-toggle="modal" data-target="#myModal<?php echo $row['subcatid']; ?>" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
					<a class="btn btn-danger" href="php/deletesubcategory.php?subcateid=<?php echo $row['subcatid']; ?>"><i class="fa fa-trash"></i> Delete</a></td>
					</tr>
					<div id="myModal<?php echo $row['subcatid']; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit SubCategory</h4>
      </div>
       <form action="php/edit_subcategory.php" method="post">
        <div class="modal-body">
          <label>Select Category</label>
		  <select name="editcategory" class="form-control" required>
			<option value="">Select Category</option>
		  <?php
		  $catquery=$db->query("SELECT * FROM `category`");
		  while($catrow=$catquery->fetch_array()){
		  ?>
		  <option <?php if($catrow['cateid'] == $row['categoryid']){ ?>selected<?php } ?> value="<?php echo $catrow['cateid']; ?>"><?php echo $catrow['catename']; ?></option>
		  <?php } ?>
		 </select> 
          </div>
		<div class="modal-body">
          <label>Edit SubCategory</label>
          <input type="text" name="editsubcategory" class="form-control" value="<?php echo $row['subcatname']; ?>" required placeholder="Edit SubCategory" />
        </div>
        <div class="modal-body">
		<input type="hidden" name="subcatid" value="<?php echo $row['subcatid']; ?>">
          <input type="submit" name="submit" class="btn green" value="Submit" />
        </div>
      </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
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
  <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add New SubCategory</h4>
      </div>
        <form action="php/add_subcategory.php" method="post">
        <div class="modal-body">
          <label>Select Category</label>
		  <select name="addcategory" class="form-control" required>
			<option value="">Select Category</option>
		  <?php
		  $catquery=$db->query("SELECT * FROM `category`");
		  while($catrow=$catquery->fetch_array()){
		  ?>
		  <option value="<?php echo $catrow['cateid']; ?>"><?php echo $catrow['catename']; ?></option>
		  <?php } ?>
		 </select> 
          </div>
		<div class="modal-body">
          <label>Add SubCategory</label>
          <input type="text" name="addsubcategory" class="form-control" value="" required placeholder="Add SubCategory" />
        </div>
        <div class="modal-body">

          <input type="submit" name="submit" class="btn green" value="Submit" />
        </div>
      </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
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
