<?php include('config.php'); ?>
<?php
if(isset($_POST['image'])){
    $photo = $_FILES['photo'];

    $file_name = $_FILES['photo']['name'];
    $file_size =$_FILES['photo']['size'];
    $file_tmp =$_FILES['photo']['tmp_name'];
    $file_type=$_FILES['photo']['type'];  

    $photo_dir = "upload-file/". $file_name;

    move_uploaded_file($file_tmp , $photo_dir);
    $query = mysqli_query($cn,"INSERT INTO upload_image (image)
VALUES('$photo')");

if($query){
    header("Location:add-customer.php");
}
else{
	echo mysqli_error($cn);	
}
}
?>