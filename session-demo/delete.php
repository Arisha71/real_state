<?php
include ("config.php");
// create delete query ,after deletng the data move  back to the view-student page...
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid']; //get data by id and delete it by its id

    $sql =  "UPDATE `property_selling` SET `status`='0' WHERE `id` = '$id'";
    $result = mysqli_query($cn,$sql);
    //if data found and delete it then go to view-student page
    if($result){
        header("Location:view-customer.php");
    }
    //if data not found and delete then also go to view-student page
    else{
        header("Location:view-customer.php");
    }   
}
?>