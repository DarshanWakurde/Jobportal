<?php
include('connection/db.php');
$del=$_GET['del'];

    $query=mysqli_query($con,"delete from all_job where job_id = '$del'");
    if($query){
        echo"<script>alert('Record has deleted !!!')</script>";
        header('location:job_create.php');
    }else{
        echo"<script>alert('Record has not deleted !!!')</script>";
    
    }

?>