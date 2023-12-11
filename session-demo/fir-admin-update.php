<?php   include('config.php');?> 

<?php
//create query 
if(isset($_POST['edit-admin'])){
    $admin_edit_page_id=$_POST['admin-edit-page-id'];
	$admin_username = $_POST['username'];   
            $admin_email = $_POST['email'];
            $admin_Password = $_POST['Password'];
            $admin_mobile = $_POST['mobile'];
            $admin_usertype = $_POST['usertype'];
            $photo = $_POST['photo'];

            //update query
$update_admin_query = mysqli_query($cn,"UPDATE admin SET username='$admin_username', email='$admin_email', Password='$admin_Password' ,mobile='$admin_mobile', usertype= '$admin_usertype', photo='$photo' WHERE
id='$admin_edit_page_id'");
if($update_admin_query){
header("Location:profile.php");    
}
else {
   // echo mysqli_error($cn);
   header("Location:profile.php");

}
}
?> 