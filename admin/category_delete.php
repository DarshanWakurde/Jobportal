<?php
include('connection/db.php');
$del=$_GET['del'];

    $query=mysqli_query($con,"DELETE FROM `job_category` WHERE id='$del'");
    if($query){
        echo"<script>alert('Record has deleted !!!')</script>";
        header('location:category.php');
    }else{
        echo"<script>alert('Record has not deleted !!!')</script>";
    
    }

?>