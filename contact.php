<?php include("include/header.php"); ?>
<?php include('include/dbconfig.php'); ?>
<?php
$query=$db->query("SELECT * FROM `setting`");
$row=$query->fetch_array();
?>
<div class="row content">
	<div class="col-lg-12 col-md-12 col-sm-12">
		<div class="breadcrumbs">
			<p><a href="index.html">Home</a> <i class="icons icon-right-dir"></i> Contact</p>
		</div>
	</div>
	<section class="main-content col-lg-12 col-md-12 col-sm-12">
		<div class="row">
			<div class="col-lg-7 col-md-7 col-sm-7">
				<div class="carousel-heading no-margin">
					<h4>Contact Information</h4>
				</div>
				<div class="page-content contact-info">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29526.905024497508!2d72.61401614550738!3d22.3210156100015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395f06a6b5ea46af%3A0x4dec950277e0854d!2sKhambhat%2C+Gujarat!5e0!3m2!1sen!2sin!4v1491047552434" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="contact-item blue">
								<i class="icons icon-mail"></i>
								<p><?php echo $row['email']; ?></p>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="contact-item green">
								<i class="icons icon-location-3"></i>
								<p><?php echo $row['address1']; ?><br><?php echo $row['address2']; ?>.</p>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="contact-item orange">
								<i class="icons icon-phone"></i>
								<p><?php echo $row['mobile']; ?></p>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="contact-item blue">
								<i class="icons icon-person"></i>
								<p><?php echo $row['contactperson']; ?></p>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-lg-5 col-md-5 col-sm-5">
				<div class="carousel-heading no-margin">
					<h4>Contact Form</h4>
				</div>
				<div class="page-content contact-form">
					<form action="php/contact.php" method="post">
						<label>Name(required)</label>
						<input name="contact-name" type="text" class="form-control" required>
						<label>Email(required)</label>
						<input name="contact-email" type="email" style="margin-bottom: 15px;border: 1px solid #e6e6e6;height: 40px;width: 100%;background: #f7f7f7;font-size: 14px;" class="form-control" required>
						<label>Subject(required)</label>
						<input name="contact-subject" type="text" class="form-control" required>
						<label>Message(required)</label>
						<textarea name="contact-message" required class="form-control"></textarea>
						<input class="big" type="submit" name="submit" value="Send Message">
					</form>
				</div>
			</div>
		</div>
	</section>
</div>
<?php include("include/footer.php"); ?>	