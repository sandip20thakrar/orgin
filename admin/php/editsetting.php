<?php
if(isset($_POST['imagesubmit'])){
	error_reporting(0);
include('../../include/dbconfig.php'); 
$target_dir = "../../upload_image/logo/";
$logoid=$_POST['logoid'];
      $filename = explode('.',$_FILES['fileToUpload']['name']);
      $ext = $filename[1];
      $imgname ='image'. time().date("Y-m-d").'.'.$ext;
      $target_file = $target_dir . $imgname ;

      $uploadOk = 1;
      $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
	  {
		  
		$query=$db->query("UPDATE `setting` SET `logo`='".$imgname."' WHERE settingid = '$logoid'");
		if($query)
		{ ?>
				<script>alert("Successfully Update Record");window.location="../setting.php";</script>		
		<?php }
		else{ ?>
				<script>alert("Something Is Wrong");window.location="../setting.php";</script>		
		<?php
			
		}
	 }
	  else{
		  ?>
				<script>alert("File Not Uploaded");window.location="../setting.php";</script>		
		<?php
	  }
	  }
?>
<?php
if(isset($_POST['submit'])){
	error_reporting(0);
include('../../include/dbconfig.php'); 

$address1=$_POST['address1'];
		$address2=$_POST['address2'];
		
		 $contactperson=$_POST['contactperson'];
		$number=$_POST['number'];
		$email=$_POST['email'];
	

		$query=$db->query("UPDATE `setting` SET `address1`='$address1',`address2`='$address2',`contactperson`='$contactperson',`mobile`='$number',`email`='$email' WHERE settingid='1'	");
		if($query)
		{ ?>
				<script>alert("Successfully Update Record");window.location="../setting.php";</script>		
		<?php }
		else{ ?>
				<script>alert("Something Is Wrong");window.location="../setting.php";</script>		
		<?php
		}
		
		
		
	 
	  }
?>