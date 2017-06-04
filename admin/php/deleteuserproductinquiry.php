<?php
include('../../include/dbconfig.php');
session_start();
	
			$query=$db->query("DELETE FROM `productview` WHERE proviewid='".$_GET['deleteuserproductinquiry']."'");
			
			if($query)
			{	
			   ?>
			   <script>alert("Successfully Delete Record");window.location.assign("../userproductinquiry.php");</script>
	  		  		
			<?php }
			else 
			{
				 ?>
			   <script>alert("Something is Wrong")window.location.assign("../userproductinquiry.php");</script>
	  		  		
			<?php 
		     
    		}     	
	

?>

