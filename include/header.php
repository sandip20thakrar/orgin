<?php include("dbconfig.php");
$query=$db->query("select * from setting where settingid='1'");
$row=$query->fetch_array();
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="upload_image/logo/<?php echo $row['logo']; ?>" type="image/x-icon"/>
<title>Sulemani Agate</title>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,900,700italic,500italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/perfect-scrollbar.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/fontello.css">
<link rel="stylesheet" type="text/css" href="css/settings.css" media="screen" />
<link rel="stylesheet" href="css/animation.css">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/chosen.css">
</head>
<body>
<div class="container">
	<header class="row">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<div id="main-header">
				<div class="row">
					<div id="logo" class="col-lg-4 col-md-4 col-sm-4">
						<a href="index.php">
						
						<img src="upload_image/logo/<?php echo $row['logo']; ?>" class="img-responsive" alt="Logo">
						<center>Sulemani Agate</center></a>
					</div>
					<nav id="main-navigation" class="style1 col-lg-8 col-md-8 col-sm-8">
						<ul>
							<li class="home-green current-item"><a href="index.php"><i class="icons icon-shop-1"></i><span class="nav-caption">Home</span></a></li>
							<li class="red"><a href="product.php"><i class="icons icon-camera-7"></i><span class="nav-caption">Product</span></a></li>
							<!--<li class="blue"><a href="about.php"><i class="icons icon-desktop-3"></i><span class="nav-caption">About</span></a></li>-->
							<li class="purple"><a href="contact.php"><i class="icons icon-location-7"></i><span class="nav-caption">Contact</span></a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>