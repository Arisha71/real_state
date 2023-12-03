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
    $price = $_POST['price'];
    $installment = $_POST['installment'];
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
    // echo "<script>alert('file path is uploaded')</script> ";

    if ($file_extension == 'pdf') {
        move_uploaded_file($file_tmp, $photo_dir);
        $add_customer_query = mysqli_query($cn, "INSERT INTO `property_selling`( `name`, `father_name`, `cnic`, `mobile`, `address`, `plot_no`,  `installment`,`price`, `advance`, `remaning`,`image` ,`status`  ) 
         VALUES ('$name','$father_name','$cnic','$mobile','$address','$plot_no','$price','$installment','$advance','$remaning','$photo_dir','1')");
            echo "<script>alert('pdf file type is uploaded.....')
        window.location.href='add-documunts.php'
        </script> ";
    } else {
        echo "<script>alert('only pdf files are uploaded.....')
        window.location.href='add-documunts.php'
        </script> ";
    }
echo mysqli_error($cn);
}
?>