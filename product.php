<?php include("include/header.php"); ?>
<div class="row">
	<?php include("include/sidebar.php"); ?>
					<section class="main-content col-lg-9 col-md-9 col-sm-9">
		<div class="products-row row">
			<div class="carousel owl-carousel-wrap col-lg-12 col-md-12 col-sm-12">
				<?php
					$feature_query=$db->query("SELECT * FROM product");
					while($feature_row=$feature_query->fetch_array()){
				?>
				<div class="col-lg-4 col-md-4 col-sm-4">
					<div class="product">
						<div class="product-image">
							<img src="upload_image/<?php echo $feature_row['proimage']; ?>" style="height: 270px;" class="img-responsive">
							
						</div>
						<div class="product-info">
											<?php
											$chars =substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 5)), 0, 50);
											$chars1 =substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 50)), 0, 50);
											?>
												<h5><a href="product_detail.php?ptoductid=<?php echo $chars1."-".$feature_row['proid']."-".$chars; ?>"><?php echo $feature_row['proname']; ?></a></h5>
											</div>
											
											<div class="product-actions">
												<span class="add-to-cart">
													<span class="action-wrapper">
														<center><a href="product_detail.php?ptoductid=<?php echo $chars1."-".$feature_row['proid']."-".$chars; ?>">Veiw Detail</a></center>
													</span >
												</span>
												
											</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</section>
</div>
<?php include("include/footer.php"); ?>		