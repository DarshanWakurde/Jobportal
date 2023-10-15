<?php
include('connection/db.php');
if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $Category=$_POST['category'];
    $des=$_POST['des'];
    
    $Admin_type=$_POST['admin_type'];
echo "<h1>".$First_name."</h1>";
    $query1=mysqli_query($con,"UPDATE `job_category` SET `category`='$Category',`des`='$des' WHERE `id`='$id';");
    if(isset($query)){
        echo"<script>alert('Record has  Updated $First_name !!!')</script>";
    }else{
        echo"<script>alert('Record has not Updated !!!')</script>";
    }
}


?>