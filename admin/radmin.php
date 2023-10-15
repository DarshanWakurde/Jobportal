<?php

session_start();
include('connection/db.php');
 if (isset($_POST['submit'])){
 $email=$_POST['email'];
 $pass=$_POST['pass'];
 $_SESSION['email']=$email;
$query=mysqli_query($con,"select * from admin_page where admin_email='$email' and admin_pass='$pass'");
 if(mysqli_num_rows($query)>0){
     
    header('location:Recruterdash.php');
 }else{
    echo "<script>alert('Email or password is incorrect')</script>";
 }
print_r($_SESSION);
 }
?>