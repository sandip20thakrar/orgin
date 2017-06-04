<?php include("include/header.php"); ?>
<?php include("include/sidemenu.php"); ?>
<?php include('../include/dbconfig.php'); ?>
<link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <section class="content-header">
      <h1>
       User Product View
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User Product View</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
			<h4>User Product View</h4>
            
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			<?php
        $db->query("UPDATE `productview` SET `productviewnew`='1' WHERE proviewid='".$_GET['viewuserproductinquiry']."'");
	
				$sql=$db->query("SELECT * FROM productview INNER JOIN product on product.proid=productview.productid INNER JOIN category on category.cateid=product.cateid INNER JOIN subcategory on subcategory.subcatid=product.subcatid where productview.proviewid='".$_GET['viewuserproductinquiry']."'");
				$row1=$sql->fetch_array();

$sql=$db->query("SELECT * FROM productview INNER JOIN product on product.proid=productview.productid INNER JOIN category on category.cateid=product.cateid where productview.proviewid='".$_GET['viewuserproductinquiry']."'");
				$row=$sql->fetch_array();
				?>
				<div class="table-responsive">
              <table class="table table-bordered table-striped">
                <thead>
				<tr>
                  <th>Full Name</th>
				  <td><?php echo $row['proviewname']; ?></td>
				  </tr>
				  <tr>
                  <th>Mobile No.</th>
				  <td><?php echo $row['productviewmobile']; ?></td>
				  </tr>
				  <tr>
                  <th>Email</th>
				  <td><?php echo $row['proviewemail']; ?></td>
				  </tr>
				  <tr>
                  <th>Message</th>
				  <td><?php echo $row['proviewmessage']; ?></td>
				  </tr>
				<tr>
                  <th>Category Name</th>
				  <td><?php echo $row['catename']; ?></td>
				  </tr>
<?php if($row1['subcatid'] == ''){ }else{?>
				  <tr>
				  <th>SubCategory Name</th>
				  <td><?php echo $row1['subcatname']; ?></td>
				    </tr><?php } ?>
				   <tr>
				  <th>Product Name</th>
				  <td><?php echo $row['proname']; ?></td>
				   </tr>
				  <tr>
				  <!-- <th>Product Price</th>-->
				   <!--<td><?php echo $row['proprice']; ?></td>-->
				    </tr>
				   <tr>
				  <th>Product Description</th>
				  <td><?php echo $row['prodetail']; ?></td>
				   </tr>
				  <tr>
				  <th>Product Image</th>
				  <td><img src="../upload_image/<?php echo $row['proimage']; ?>" class="img-responsive" style="width:80px;height:80px;"></td>
                 
                </tr>
                </thead>
                
              </table>
            </div>
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
