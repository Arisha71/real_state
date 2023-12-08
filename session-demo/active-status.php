<?php include('config.php');

$GET_id = $GET_id['id'];
$query= $cn->query($query);
if($result->num_rows >0){
    $row = $result->fetch_assoc();
    $customer_id = $row['id'];
    $customer_status = $row['status'];

    if($customer_status == 1){
        $customer_delete_query = mysqli_query($cn, "UPDATE property_selling SET customer_status='0' WHERE customer_id='$get_id'");
        if($vendor_delete_query){
            session_start();
            $_SESSION['status'] = true;
            header("Location: view-customer.php");
            mysqli_close($cn);
        }
    }
    else{
        header("Location: view-customer.php");
        mysqli_close($cn);
    }
}
?>