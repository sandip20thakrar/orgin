

<?php include('../include/dbconfig.php');

if(isset($_POST["category"]) && !empty($_POST["category"])){
    //Get all state data
    $query = $db->query("SELECT * FROM subcategory WHERE categoryid = ".$_POST['category']."");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display states list
    if($rowCount > 0){
        echo '<option value="">Select SubCategory</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['subcatid'].'">'.$row['subcatname'].'</option>';
        }
    }else{
        echo '<option value="">SubCategory not available</option>';
    }
}
?>