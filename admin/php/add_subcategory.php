<?php
include('../../include/dbconfig.php');
session_start();
if(isset($_POST['submit']))
{
			$query=$db->query("INSERT INTO `subcategory`(`categoryid`, `subcatname`) VALUES ('".$_POST['addcategory']."','".$_POST['addsubcategory']."')");
			
			if($query)
			{	
			   ?>
			   <script>alert("Successfully Inert Record");window.location.assign("../subcategory.php");</script>
	  		  		
			<?php }
			else 
			{
				 ?>
			   <script>alert("Something is Wrong")window.location.assign("../subcategory.php");</script>
	  		  		
			<?php 
		     
    		}     	
	
}
?>

