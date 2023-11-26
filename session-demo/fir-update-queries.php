<?php   include('config.php');
 ?>
<?php
//create query 
if(isset($_POST['update-student'])){
    $student_edit_page_id=$_POST['student-edit-page-id'];
    $name=$_POST['name'];
    $father_name=$_POST['fname']; 
    $cnic=$_POST['cnic']; 
    $mobile=$_POST['mobile'];
    $address=$_POST['address'];
    //create new query method 1.

//create query by metod 2.
//insert query
$update_student_query = mysqli_query($cn,"UPDATE student_information SET name='$name', fname='$father_name', cnic= '$cnic',mobile='$mobile', address='$address' WHERE
id='$student_edit_page_id'");
if($update_student_query){
    header("Location:view-student.php");
}
}
?> 