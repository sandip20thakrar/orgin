<?php
include('../../include/dbconfig.php');
session_start();
if(isset($_POST['submit']))
{
	
			$query=$db->query("UPDATE `category` SET `catename`='".$_POST['editcategory']."' WHERE cateid='".$_POST['cateid']."'");
			
			if($query)
			{	
			   ?>
			   <script>alert("Successfully Edit Record");window.location.assign("../category.php");</script>
	  		  		
			<?php }
			else 
			{
				 ?>
			   <script>alert("Something is Wrong")window.location.assign("../category.php");</script>
	  		  		
			<?php 
		     
    		}     	
	
}
?>

