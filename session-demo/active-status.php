<?php include('config.php');

$get_id = $_GET['id'];
$qry = "SELECT * FROM property_selling WHERE id='$get_id'";
$result= mysqli_query($cn,$qry);
if(mysqli_num_rows($result)>0){
    $row= mysqli_fetch_assoc($result);
    $status = $row['status'];

    if($status == '0'){
        $customer_delete_query = mysqli_query($cn, "UPDATE property_selling SET status='1' WHERE id='$get_id'");
        if($customer_delete_query){
            session_start();
            $_SESSION['status'] = true;
            header("Location:view-customer.php");
            mysqli_close($cn);
        }
    }
    else{
        header("Location: view-customer.php");
        mysqli_close($cn);
    }
}
?>