<?php include("include/header.php"); ?>
			<!-- /Header -->
			
	
			<!-- Content -->
			<div class="row">
				
				<!-- Main Content -->
					<?php include("include/slider.php"); ?>
					<?php include("include/sidebar.php"); ?>
					<section class="main-content col-lg-9 col-md-9 col-sm-9">
					<!-- Featured Products -->
					<div class="products-row row">
						
						<!-- Carousel Heading -->
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							<div class="carousel-heading">
								<h4>Products</h4>
								
							</div>
							
						</div>
						<!-- /Carousel Heading -->
						
						<!-- Carousel -->
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							<div>
									
									<!-- Slide -->
									<?php
									$feature_query=$db->query("select * from product order by proid desc limit 15");
									while($feature_row=$feature_query->fetch_array()){
									?>
									<div class="col-lg-4 col-md-4 col-sm-4">
										<!-- Carousel Item -->
										<div class="product">
											
											<div class="product-image">
												<img src="upload_image/<?php echo $feature_row['proimage']; ?>" class="img-responsive" style="height: 270px;" alt="Product1">
											
											</div>
											<script>
	function quickViewModal(el){
		
		
	}
	
</script>	
											<div class="product-info">
											<?php
											$chars =substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 5)), 0, 50);
											$chars1 =substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 50)), 0, 50);
											?>
												<h5><a href="product_detail.php?ptoductid=<?php echo $chars1."-".$feature_row['proid']."-".$chars.$feature_row['featured_product']; ?>"><?php echo $feature_row['proname']; ?></a></h5>
											</div>
											
											<div class="product-actions">
												<span class="add-to-cart">
													<span class="action-wrapper">
														<center><a href="product_detail.php?ptoductid=<?php echo $chars1."-".$feature_row['proid']."-".$chars.$feature_row['featured_product']; ?>">Veiw Detail</a></center>
													</span >
												</span>
												
											</div>
											
										</div>
										<!-- /Carousel Item -->
									</div>
									<?php } ?>
									<!-- /Slide -->
								
							</div>
						</div>
						<!-- /Carousel -->
						
					</div>
					<!-- /Featured Products -->
					
					
					
					
					<!-- New Collection -->
					
					<!-- /New Collection -->
					



					
					<!-- Random Products -->
					
					<!-- /Random Products -->
					
					


					<!-- Product Brands -->
					
					<!-- /Product Brands -->
					
						
				</section>
				<!-- /Main Content -->
				
				
				
				
				<!-- Sidebar -->
				
				<!-- /Sidebar -->
				
			</div>

<?php include("include/footer.php"); ?>		