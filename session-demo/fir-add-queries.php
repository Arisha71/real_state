<?php

//create query 
include('config.php');
if (isset($_POST['add-customer'])) {
    $name = $_POST['name'];
    $father_name = $_POST['fname'];
    $cnic = $_POST['cnic'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $plot_no = $_POST['plotno'];
    $installment = $_POST['installment'];
    $price = $_POST['price'];
    $advane = $_POST['advance'];
    $remaning = $_POST['remaning'];


    //create new query method 1.
    // $qry = "INSERT INTO student(name,fname,cnic,mobile,address,status)VALUES('$val1','$val2','$val3','$val4','$val5',1)";
    // mysqli_connect($cn,$qry);

    //create query by metod 2.
    //insert query
    $add_customer_query = mysqli_query($cn, "INSERT INTO `property_selling`( `name`, `father_name`, `cnic`, `mobile`, `address`, `plot_no`, `installment`, `price` `advacne`, `remaning`, `status`) 
VALUES ('$name','$father_name','$cnic','$mobile	','$address','$plot_no','$installment', '$price' ,'$advane','$remaning','1')");
    if ($add_customer_query) {
        header("Location:add-customer.php");
    }
    echo mysqli_error($cn);
}
