<?php
include('connection/db.php');

session_start();
 $job_title=$_POST['job_title'];
 $des=$_POST['Des'];
 $countryId=$_POST['countryId'];
 $stateId=$_POST['stateId'];
 $cityId=$_POST['cityId'];
 $category=$_POST['category'];
 $keyword=$_POST['keyword'];
 $que="INSERT INTO `all_job`(`customer_email`, `job_title`, `des`, `country`, `state`, `city`, `keyword`, `category`) VALUES ('".$_SESSION['email']."','".$job_title."','".$des."','".$countryId."','".$stateId."','".$cityId."','".$keyword."','".$category."')";
$query=mysqli_query($con,$que);
var_dump($query);
if (isset($query)){
    echo"<div class='alert-success'>data has been succefully inserted</div>";
    header("Location:job_create.php");
}else{
    echo"<div class='alert-danger'>data has been not succefully inserted</div>";
}


?>
<!-- <script>alert("Data Inserted Successfully")</script> -->