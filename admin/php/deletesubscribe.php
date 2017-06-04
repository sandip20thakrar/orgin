<?php
include('../../include/dbconfig.php');
session_start();
	
			$query=$db->query("DELETE FROM `subscribe` WHERE id='".$_GET['deletesubscribeid']."'");
			
			if($query)
			{	
			   ?>
			   <script>alert("Successfully Delete Record");window.location.assign("../subscribe.php");</script>
	  		  		
			<?php }
			else 
			{
				 ?>
			   <script>alert("Something is Wrong")window.location.assign("../subscribe.php");</script>
	  		  		
			<?php 
		     
    		}     	
	

?>

