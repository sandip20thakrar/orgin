<?php include("include/header.php"); ?>
<?php include("include/sidemenu.php"); ?>
<?php include('../include/dbconfig.php'); ?>
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	
    $('#category').on('change',function(){
		
        var category = $(this).val();
        if(category){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'category='+category,
                success:function(html){
                    $('#subcategory').html(html);
                     
                }
            }); 
        }else{
            $('#subcategory').html('<option value="">Select Category First</option>');
            
        }
    });
	
	$("#category").change(function() {
	
    $("#categorydropdown").removeClass("hide");
	$("#categorydropdown").addClass("show");

});
	});
	

</script>

 
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <section class="content-header">
      <h1>
       Edit Product
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Product</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-8">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Product</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="php/edit_product.php" method="post" enctype="multipart/form-data">
			<input type="hidden" name="productid" value="<?php echo $_GET['editproduct']; ?>">
			<?php
			
			$sql1=$db->query("SELECT * FROM product INNER JOIN category on category.cateid=product.cateid where product.proid='".$_GET['editproduct']."'");
			$row1=$sql1->fetch_array();
			$sql4=$db->query("SELECT * FROM product INNER JOIN subcategory on subcategory.subcatid=product.subcatid where product.proid='".$_GET['editproduct']."'");
			$row4=$sql4->fetch_array();
			?>
              <div class="box-body">
			  <div class="form-group">
                  <label>Select Category</label>
                  <select class="form-control" name="category" required id="category">
				  	<option value="">Select Category</option>
					<?php
					$query=$db->query("select * from category");
					while($row=$query->fetch_array()){
					?>
                    <option <?php if($row['cateid'] == $row1['cateid']){ ?>selected<?php } ?> value="<?php echo $row['cateid']; ?>"><?php echo $row['catename']; ?></option>
					<?php } ?>
                   
                  </select>
                </div>
				 <div class="form-group" id="categorydropdown">
				<label>Select SubCategory</label>
				<select name="subcategory" id="subcategory" class="form-control">
    <option value="">Select SubCategory</option>
	<?php
	
					$query2=$db->query("select * from subcategory");
					while($row2=$query2->fetch_array()){
					?>
                    <option <?php if($row4['subcatid'] == $row2['subcatid']){ ?>selected<?php } ?> value="<?php echo $row2['subcatid']; ?>"><?php echo $row2['subcatname']; ?></option>
					<?php } ?>
</select>
 </div>
 
 
                <div class="form-group">
                  <label>Product Name</label>
                  <input type="text" class="form-control" name="proname" value="<?php echo $row1['proname']; ?>" placeholder="Enter Product Name" required>
                </div>
				<!-- <div class="form-group">
                  <label>Product Price</label>
                  <input type="text" class="form-control" name="proprice" value="<?php echo $row1['proprice']; ?>" placeholder="Enter Product Price" required>
                </div> -->
				<div class="form-group">
                  <label>Product Detail</label>
				  <textarea class="form-control" placeholder="Enter Product Detail" name="prodetail" required><?php echo $row1['prodetail']; ?></textarea>
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col -->
		<div class="col-md-4">
		<div class="box box-primary">
           
            <!-- /.box-header -->
            <!-- form start -->
            <form action="php/edit_product.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="productid" value="<?php echo $_GET['editproduct']; ?>">
              <div class="box-body">
			  <?php 
			  if($row1['proimage'] != ""){
			  ?>
				<div class="form-group">
                  <img src="../upload_image/<?php echo $row1['proimage']; ?>" class="img-responsive">
                </div>
				<div class="form-group">
                  <a href="php/deleteimage.php?deleteimageid=<?php echo $row1['proid']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>	
                </div>
			  <?php }else{ ?>
                <div class="form-group">
                  <label>Select Product Image</label>
                 <input type="file" name="fileToUpload" class="form-control" required>
                </div>
			  <?php } ?>
              </div>
              <!-- /.box-body -->
			<?php 
			  if($row1['proimage'] == ""){
			  ?>
              <div class="box-footer">
                <button type="submit" name="imagesubmit" class="btn btn-primary">Submit</button>
              </div>
			  <?php } ?>
            </form>
          </div>
		  
		</div>
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
