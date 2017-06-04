<?php
	include('../../include/dbconfig.php');
	$deleteimageid=$_GET['deleteimageid'];
    
        $q=$db->query("SELECT * FROM `product` where `proid`='$deleteimageid'");
        $user=$q->fetch_array();
        $path="../../upload_image/".$user['proimage'];
        unlink($path);

            $path="";

	       
	$db->query("delete from `product` WHERE proid = '$deleteimageid'");
		
      ?>
			   <script>alert("Product Delete Successfully");window.location="../product.php";</script>

