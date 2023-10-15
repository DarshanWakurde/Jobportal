<?php
include('connection/db.php');
 $category=$_POST['Category'];
 $des=$_POST['Des'];
$query=mysqli_query($con,"INSERT INTO `job_category`( `category`, `des`) VALUES ('$category','$des')");
var_dump($query);
if (isset($query)){

    echo"<div class='alert-success'>data has been succefully inserted</div>";
    header("Location:category.php");
}else{
    echo"<div class='alert-danger'>data has been not succefully inserted</div>";
}

?>