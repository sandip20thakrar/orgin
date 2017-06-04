<?php
include('../../include/dbconfig.php');
session_start();
	
			$query=$db->query("DELETE FROM `category` WHERE cateid='".$_GET['cateid']."'");
			
			if($query)
			{	
			   ?>
			   <script>alert("Successfully Delete Record");window.location.assign("../category.php");</script>
	  		  		
			<?php }
			else 
			{
				 ?>
			   <script>alert("Something is Wrong")window.location.assign("../category.php");</script>
	  		  		
			<?php 
		     
    		}     	
	

?>

