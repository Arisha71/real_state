<?php include('config.php') ?>
<?php
//======================= create delete admin query=========================

if(isset($_GET['id'])){

$id = $_GET['id']; //get data by id
$delete_admin_query = "DELETE  FROM  `admin`  WHERE  id = $id";
$res=mysqli_query($cn, $delete_admin_query);
if($res){
    header("Location: view-admin.php");
   }
else{
  header("Location: view-admin.php");
}
}
?>
