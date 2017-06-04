<?php
include('../../include/dbconfig.php');
session_start();
if(isset($_POST['submit']))
{
			$query=$db->query("INSERT INTO `category`(`catename`) VALUES ('".$_POST['category']."')");
			
			if($query)
			{	
			   ?>
			   <script>alert("Successfully Inert Record");window.location.assign("../category.php");</script>
	  		  		
			<?php }
			else 
			{
				 ?>
			   <script>alert("Something is Wrong")window.location.assign("../category.php");</script>
	  		  		
			<?php 
		     
    		}     	
	
}
?>

