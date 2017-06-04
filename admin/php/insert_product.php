<?php
if(isset($_POST['submit'])){
	error_reporting(0);
include('../../include/dbconfig.php'); 
$target_dir = "../../upload_image/";
      $filename = explode('.',$_FILES['fileToUpload']['name']);
      $ext = $filename[1];
      $imgname ='image'. time().date("Y-m-d").'.'.$ext;
      $target_file = $target_dir . $imgname ;

      $uploadOk = 1;
	  $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	  if ($_FILES["fileToUpload"]["size"] > 1048576) {
		  ?>
				<script>alert("Sorry, your file is too large.");window.location="../addproduct.php";</script>		
		<?php
   
}
      else{
	  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
	  {
		$query=$db->query("INSERT INTO `product`(`cateid`, `subcatid`, `proname`, `proimage`, `proprice`, `prodetail`) VALUES ('".$_POST['category']."','".$_POST['subcategory']."','".$_POST['proname']."','".$imgname."','','".$_POST['prodetail']."')");
		if($query)
		{ ?>
				<script>alert("Successfully Insert Record");window.location="../addproduct.php";</script>		
		<?php }
		else{ ?>
				<script>alert("Something Is Wrong");window.location="../addproduct.php";</script>		
		<?php
			
		}
	 
	  }
	  else{
		  ?>
				<script>alert("File Not Uploaded");window.location="../addproduct.php";</script>		
		<?php
	  }}
	  }
?>