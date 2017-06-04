<?php
if(isset($_POST['submit'])){
	error_reporting(0);
include('../../include/dbconfig.php'); 

		$uname=$_POST['uname'];
		$password=$_POST['password'];
		$email=$_POST['email'];
		
		$query=$db->query("UPDATE `usermaster` SET `uname`='$uname',`password`='$password',`email`='$email' WHERE type='admin'");
		if($query)
		{ ?>
				<script>alert("Successfully Update Record");window.location="../profile.php";</script>		
		<?php }
		else{ ?>
				<script>alert("Something Is Wrong");window.location="../profile.php";</script>		
		<?php
		}
		
		
		
	 
	  }
?>