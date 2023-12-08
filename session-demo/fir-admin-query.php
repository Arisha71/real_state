<?php // session_start(); ?>
<?php  	include('config.php'); ?>
<?php
//create query 
    if(isset($_POST['add-admin'])){
            $admin_username = $_POST['username'];
            $admin_email = $_POST['email'];
            $admin_Password = $_POST['Password'];
            $admin_mobile = $_POST['mobile'];
            $admin_usertype = $_POST['usertype'];
            $photo = $_FILES['photo'];

        //  $_SESSION['user'] == '$admin_usertype';

            $file_name = $_FILES['photo']['name'];
            $file_size =$_FILES['photo']['size'];
            $file_tmp =$_FILES['photo']['tmp_name'];
            $file_type=$_FILES['photo']['type'];

            $photo_dir = "upload-file/". $file_name;

            move_uploaded_file($file_tmp , $photo_dir);
 
	//encryption method ny md5..... 
	// $enc = md5($admin_username);
//insert query
$add_admin_query = mysqli_query($cn,"INSERT INTO admin (username, email, password ,mobile,usertype,photo)
VALUES('$admin_username','$admin_email','$admin_Password', '$admin_mobile','$admin_usertype','$photo_dir')");

if($add_admin_query){
    header("Location:profile.php");
}
else{
	echo mysqli_error($cn);	
}
}
?>