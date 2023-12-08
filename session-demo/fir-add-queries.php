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
  $start = $_POST['start'];
  $end = $_POST['end'];
  $installment = $_POST['installment'];
  $price = $_POST['price'];
  $advance = $_POST['advance'];
  $remaning = $_POST['remaning'];
  $photo = $_FILES['photo'];

  $file_name = $_FILES['photo']['name'];
  $file_size = $_FILES['photo']['size'];
  $file_tmp = $_FILES['photo']['tmp_name'];
  $file_type = $_FILES['photo']['type'];

  $file_extension = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

  // folder path  
  $photo_dir = "upload-file/" . $file_name;

  if ($file_extension == 'pdf') {
    move_uploaded_file($file_tmp, $photo_dir);
    $add_customer_query = mysqli_query($cn, "INSERT INTO `property_selling`(`name`, `father_name`,`cnic`,`mobile`,`address`,`plot_no`,`start_date`,`end_date`,`installment`,`price`, `advance`,`remaning`,`image`,`status`) 
         VALUES ('$name','$father_name','$cnic','$mobile','$address','$plot_no', '$start', '$end', 
         '$installment','$price','$advance','$remaning','$photo_dir','1')");

    if ($add_customer_query) {
      //session start if query is run 
      session_start();  
      $_SESSION['status'] = "Data has been successfully inserted in database....";
      header("Location: add-customer.php");
    } else {
      //session start if query is run 
      $_SESSION['status'] = "Data has not been inserted in database....";
      header("Location: add-customer.php");
    }
  } 
  else {
    echo "<script>alert('only pdf files are uploaded.....')
        window.location.href='add-customer.php'
        </script> ";
    //echo mysqli_error($cn);
  }
}
