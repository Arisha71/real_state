<?php   include('config.php');
 ?>
<?php
//create query 
if(isset($_POST['update-customer'])){
    $customer_edit_page_id=$_POST['customer-edit-page-id'];
    $name=$_POST['name'];
   $father_name= $_POST['fname'];
    $cnic=$_POST['cnic']; 
    $mobile=$_POST['mobile'];
    $address=$_POST['address'];
    $plot_no=$_POST['plotno'];
    $price=$_POST['price'];
    $installment=$_POST['installment'];
    $advane=$_POST['advance'];
    $remaning = $_POST['remaning'];
 
    //create new query method 1.

//create query by metod 2.
//insert query
$update_customer_query = mysqli_query($cn,"UPDATE `property_selling` SET `name`='$name',`father_name`='$father_name',`cnic`='$cnic',`mobile`='$mobile',`address`='$address',`plot_no`='$plot_no',`price`='$price',`installment`='$installment',`advacne`='$advane',`remaning`='$remaning' WHERE
id='$customer_edit_page_id'");
if($update_customer_query){
    header("Location:view-customer.php");
}
else{
    echo mysqli_error($cn);
}
}
?> 