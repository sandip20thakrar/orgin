<?php
	include('../../include/dbconfig.php');
	$deleteimageid=$_GET['deleteimageid'];
    
        $q=$db->query("SELECT * FROM `product` where `proid`='$deleteimageid'");
        $user=$q->fetch_array();
        $path="../../upload_image/".$user['proimage'];
        unlink($path);

            $path="";

	       
	$db->query("UPDATE `product` SET `proimage`='' WHERE proid = '$deleteimageid'");
		
      ?>
			   <script>alert("Image Delete Successfully");window.location="../editproduct.php?editproduct=<?php echo $deleteimageid; ?>";</script>

