<?php
include('../../include/dbconfig.php');
session_start();
if(isset($_POST['submit']))
{
	
			$query=$db->query("UPDATE `subcategory` SET `categoryid`='".$_POST['editcategory']."',`subcatname`='".$_POST['editsubcategory']."' WHERE subcatid='".$_POST['subcatid']."'");
			
			if($query)
			{	
			   ?>
			   <script>alert("Successfully Edit Record");window.location.assign("../subcategory.php");</script>
	  		  		
			<?php }
			else 
			{
				 ?>
			   <script>alert("Something is Wrong")window.location.assign("../subcategory.php");</script>
	  		  		
			<?php 
		     
    		}     	
	
}
?>

