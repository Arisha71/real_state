<?php include('config.php');
$get_id = $_GET['id'];

$qry = "SELECT * FROM property_selling";
$result = mysqli_query($cn, $qry);
if(mysqli_num_rows($result)> 0){
    $row = mysqli_fetch_assoc($result);
    $status = $row['status'];
    if($status == '1'){
        $customer_delete_query = mysqli_query($cn, "UPDATE property_selling SET status = '0' WHERE id='$get_id'");

        if($customer_delete_query){
            session_start();
            $_SESSION['status'] = true;
            header("Location: view-customer.php");
        }
        else{
            header("Location:view-customer.php");
        }
    }
}
?>