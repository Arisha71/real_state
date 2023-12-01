<?php include('config.php'); ?>
<?php
if (isset($_POST['add-image'])) {
    $photo = $_FILES['photo'];

    $file_name = $_FILES['photo']['name'];
    $file_size = $_FILES['photo']['size'];
    $file_tmp = $_FILES['photo']['tmp_name'];
    $file_type = $_FILES['photo']['type'];
    // folder path  
   
    $photo_dir = "upload-file/" . $file_name;
    // echo "<script>alert('file path is uploaded')</script> ";

    if ($file_type == 'pdf') {
        move_uploaded_file($file_tmp, $photo_dir);
        $query = mysqli_query($cn, "INSERT INTO image_upload (image)
        VALUES('$photo_dir')");
        echo "<script>alert(' pdf files is successfully uploaded')</script> ";
        header("Location:add-documunts.php");
    } else {

        echo "<script>alert('only pdf files are uploaded')</script> ";
    }
}
?>