<?php include("include/header.php"); 
$ggg=explode("-",$_GET['ptoductid']);

$query=$db->query("select * from product where proid='".$ggg[1]."'");
$row=$query->fetch_array();
?>
<div class="row content">
	<div class="col-lg-12 col-md-12 col-sm-12">
		<div class="breadcrumbs">
			<p><a href="#">Home</a> <i class="icons icon-right-dir"></i>Product</p>
		</div>
	</div>
	<section class="main-content col-lg-12 col-md-12 col-sm-12">
		<div id="product-single">
			<div class="product-single">
				<div class="row">
					<div class="col-lg-5 col-md-5 col-sm-5 product-single-image">
						<div id="product-slider">
							<ul class="slides">
								<li>
								<img class="cloud-zoom" src="upload_image/<?php echo $row['proimage']; ?>" data-large="upload_image/<?php echo $row['proimage']; ?>" style="height:500px;" />
								<a class="fullscreen-button" href="upload_image/<?php echo $row['proimage']; ?>">
								
								</a>
								</li>
							</ul>
						</div>
						
					</div>
					<div class="col-lg-7 col-md-7 col-sm-7 product-single-info">
						<h2>Product Name</h2>
						<p><?php echo $row['proname']; ?></p>
						<h2>Product Description</h2>
						<p><?php echo $row['prodetail']; ?></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="tabs">
						<div class="tab-heading">
							<a href="#tab1" class="button big">Inquiry</a>
						</div>
						<div class="page-content tab-content">
							<div id="tab1">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-8">
									<form action="php/productview.php" method="post">
									<input type="hidden" name="productid" value="<?php echo $ggg[1]; ?>">
										<label>Name (required)</label>
										<input type="text" name="name" class="form-control" required>
										<br><br>
										<label>E-mail (required)</label>
										<input type="email" name="email" style="margin-bottom: 15px;border: 1px solid #e6e6e6;height: 40px;width: 100%;background: #f7f7f7;font-size: 14px;" class="form-control" required>
										<br><br>
										<label>Mobile (required)</label>
										<input type="text" name="mobile" class="form-control" required>
										<br><br>
										<label>Comment</label>
										<textarea name="comment" class="form-control"></textarea>
										<br><br>
										<br>
										<input type="submit" name="submit" value="Submit comment" class="dark-blue big">
									</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</section>
</div>
<?php include("include/footer.php"); ?>	