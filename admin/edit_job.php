<?php
include('connection/db.php');
// if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $job_title=$_POST['job_title'];
    $des=$_POST['Des'];
    $Country=$_POST['countryId'];
    $state=$_POST['stateId'];
    $city=$_POST['cityId'];
    print_r($_POST);
$qu=mysqli_query($con,"UPDATE `all_job` SET `job_id`='$id',`job_title`='$job_title',`des`='$des',`country`='$Country',`state`='$state',`city`='$city' WHERE job_id='$id'");
if(isset($qu)){
    header("Location:job_create.php");
    echo " <script> alert("."Data inserted successfully".") </script> ";
    
}
else{
    echo "<script> alert("."Sorry!!!!".") </script>";
}


?>