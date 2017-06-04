<footer id="footer" class="row">
	<div class="col-lg-12 col-md-12 col-sm-12">
		<div id="main-footer">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-6">
					<h4>The Service</h4>
					<ul>
						<li><a href="index.php"><i class="icons icon-right-dir"></i> Home</a></li>
						<li><a href="product.php"><i class="icons icon-right-dir"></i> Product</a></li>
						<li><a href="contact.php"><i class="icons icon-right-dir"></i> Contact Us</a></li>
					</ul>
				</div>
				<!--<div class="col-lg-3 col-md-3 col-sm-6">
				<h4>Information</h4>
					<ul>
						<li><a href="about.php"><i class="icons icon-right-dir"></i> About Us</a></li>
						<li><a href="#"><i class="icons icon-right-dir"></i> Privacy Policy</a></li>
						<li><a href="#"><i class="icons icon-right-dir"></i> Terms &amp; Conditions</a></li>
					</ul>
				</div>-->
				<div class="col-lg-4 col-md-4 col-sm-6 contact-footer-info">
				<h4>Contact Us</h4>
					<ul>
					<?php
$query=$db->query("SELECT * FROM `setting`");
$row=$query->fetch_array();
?>
						
						<li><i class="icons icon-phone"></i><?php echo $row['mobile']; ?></li>
						<li><i class="icons icon-mail-alt"></i><?php echo $row['email']; ?></li>
						<li><i class="icons icon-location"></i> <?php echo $row['address1']; ?><br><?php echo $row['address2']; ?>.</li>
					</ul>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 facebook-iframe">
					<form id="newsletter" action="php/subscribe.php" method="post">
						<h4>Subscriber</h4>
						<input type="text" name="newsletter-email" placeholder="Enter your email address">
						<input type="submit" name="newsletter-submit" value="Submit">
					</form>				
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-12 col-md-12 col-sm-12">
		<div id="lower-footer">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6">
					<p class="copyright">Copyright 2017 <a href="index.php">Sulemani Agate</a>. All Rights Reserved.</p>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6">
					
				</div>
			</div>
		</div>
	</div>
</footer>
<div id="back-to-top">
<i class="icon-up-dir"></i>
</div>
</div>
<script src="js/modernizr.min.js"></script>
<script src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/jquery.raty.min.js"></script>
<script src="js/perfect-scrollbar.min.js"></script>
<script src="js/zoomsl-3.0.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
<script defer src="js/flexslider.min.js"></script>
<script src = "js/jquery.iosslider.min.js"></script>
<script src="js/jquery.nouislider.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/zoomsl-3.0.min.js"></script>
<script src="js/chosen.jquery.min.js" type="text/javascript"></script>
<script defer src="js/bootstrap.min.js"></script>
<script src="js/main-script.js"></script>
</body>
</html>