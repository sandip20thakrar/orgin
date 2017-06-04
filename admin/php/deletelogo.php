<?php
	include('../../include/dbconfig.php');
	$settingid=$_GET['settingid'];
    
        $q=$db->query("SELECT * FROM `setting` where `settingid`='$settingid'");
        $user=$q->fetch_array();
        $path="../../upload_image/logo/".$user['logo'];
        unlink($path);

            $path="";

	       
	$db->query("UPDATE `setting` SET `logo`='' WHERE settingid = '$settingid'");
		
      ?>
			   <script>alert("Logo Delete Successfully");window.location="../setting.php";</script>

