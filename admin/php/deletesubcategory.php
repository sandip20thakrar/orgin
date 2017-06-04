<?php
include('../../include/dbconfig.php');
session_start();
	
			$query=$db->query("DELETE FROM `subcategory` WHERE subcatid='".$_GET['subcateid']."'");
			
			if($query)
			{	
			   ?>
			   <script>alert("Successfully Delete Record");window.location.assign("../subcategory.php");</script>
	  		  		
			<?php }
			else 
			{
				 ?>
			   <script>alert("Something is Wrong")window.location.assign("../subcategory.php");</script>
	  		  		
			<?php 
		     
    		}     	
	

?>

