<?php
if(isset($_POST['imagesubmit'])){
	error_reporting(0);
include('../../include/dbconfig.php'); 
$target_dir = "../../upload_image/";
$productid=$_POST['productid'];
      $filename = explode('.',$_FILES['fileToUpload']['name']);
      $ext = $filename[1];
      $imgname ='image'. time().date("Y-m-d").'.'.$ext;
      $target_file = $target_dir . $imgname ;

      $uploadOk = 1;
      $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
	  {
		  
		$query=$db->query("UPDATE `product` SET `proimage`='".$imgname."' WHERE proid = '$productid'");
		if($query)
		{ ?>
				<script>alert("Successfully Update Record");window.location="../editproduct.php?editproduct=<?php echo $productid; ?>";</script>		
		<?php }
		else{ ?>
				<script>alert("Something Is Wrong");window.location="../editproduct.php?editproduct=<?php echo $productid; ?>";</script>		
		<?php
			
		}
	 }
	  else{
		  ?>
				<script>alert("File Not Uploaded");window.location="../editproduct.php?editproduct=<?php echo $productid; ?>";</script>		
		<?php
	  }
	  }
?>
<?php
if(isset($_POST['submit'])){
	error_reporting(0);
include('../../include/dbconfig.php'); 

$productid=$_POST['productid'];
		$category=$_POST['category'];
		
		 $subcategory=$_POST['subcategory'];
		$proname=$_POST['proname'];
		$proprice=$_POST['proprice'];
		$prodetail=$_POST['prodetail'];
		$featured_product=$_POST['featured_product'];
			

		$query=$db->query("UPDATE `product` SET `cateid`='$category',`subcatid`='',`proname`='$proname',`proprice`='',`prodetail`='$prodetail' WHERE proid = '$productid'");
		if($query)
		{ ?>
				<script>alert("Successfully Update Record");window.location="../editproduct.php?editproduct=<?php echo $productid; ?>";</script>		
		<?php }
		else{ ?>
				<script>alert("Something Is Wrong");window.location="../editproduct.php?editproduct=<?php echo $productid; ?>";</script>		
		<?php
		}
		
		
		
	 
	  }
?>