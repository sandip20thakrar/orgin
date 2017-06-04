-<?php
include('../include/dbconfig.php');
session_start();
if(isset($_POST['newsletter-submit']))
{
			$query=$db->query("INSERT INTO `subscribe`(`email`) VALUES ('".$_POST['newsletter-email']."')");
			
			if($query)
			{	
			   ?>
			   <script>window.location.assign("../index.php");</script>
	  		  		
			<?php }
			else 
			{
				 ?>
			   <script>window.location.assign("../index.php");</script>
	  		  		
			<?php 
		     
    		}     	
	
}
?>

