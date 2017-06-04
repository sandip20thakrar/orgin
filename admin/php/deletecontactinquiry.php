<?php
include('../../include/dbconfig.php');
session_start();
	
			$query=$db->query("DELETE FROM `contact` WHERE conid='".$_GET['deletecontactinquiryid']."'");
			
			if($query)
			{	
			   ?>
			   <script>alert("Successfully Delete Record");window.location.assign("../contactinquiry.php");</script>
	  		  		
			<?php }
			else 
			{
				 ?>
			   <script>alert("Something is Wrong")window.location.assign("../contactinquiry.php");</script>
	  		  		
			<?php 
		     
    		}     	
	

?>

