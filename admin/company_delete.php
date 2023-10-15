<?php
include('connection/db.php');
$del=$_GET['del'];

    $query=mysqli_query($con,"DELETE FROM `company` WHERE company_id='$del'");
    if($query){
        echo"<script>alert('Record has deleted !!!')</script>";
        header('location:create_company.php');
    }else{
        echo"<script>alert('Record has not deleted !!!')</script>";
    
    }

?>