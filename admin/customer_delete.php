<?php
include('connection/db.php');
$del=$_GET['del'];

    $query=mysqli_query($con,"delete from admin_page where id = '$del'");
    if($query){
        echo"<script>alert('Record has deleted !!!')</script>";
        header('location:customer.php');
    }else{
        echo"<script>alert('Record has not deleted !!!')</script>";
    
    }

?>