-<?php
include('../include/dbconfig.php');
session_start();
if(isset($_POST['submit']))
{
			$query=$db->query("INSERT INTO `contact`(`conname`, `consubject`, `conemail`, `conmessage`) VALUES ('".$_POST['contact-name']."','".$_POST['contact-subject']."','".$_POST['contact-email']."','".$_POST['contact-message']."')");
			
			if($query)
			{	
			   ?>
			   <script>window.location.assign("../contact.php");</script>
	  		  		
			<?php }
			else 
			{
				 ?>
			   <script>window.location.assign("../contact.php");</script>
	  		  		
			<?php 
		     
    		}     	
	
}
?>

