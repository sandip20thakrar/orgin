<?php
include('../include/dbconfig.php');
session_start();
if(isset($_POST['submit']))
{
			$query=$db->query("INSERT INTO `productview`(`productid`, `proviewname`, `proviewemail`, `productviewmobile`, `proviewmessage`) VALUES ('".$_POST['productid']."','".$_POST['name']."','".$_POST['email']."','".$_POST['mobile']."','".$_POST['comment']."')");
			
			if($query)
			{	
			   ?>
			   <script>window.location.assign("../product.php");</script>
	  		  		
			<?php }
			else 
			{
				 ?>
			   <script>window.location.assign("../product.php");</script>
	  		  		
			<?php 
		     
    		}     	
	
}
?>

