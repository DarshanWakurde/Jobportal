<?php
$con=mysqli_connect("127.0.0.1:3325","root","","job_portal");
session_start();
 if (isset($_POST['submit'])){
 $email=$_POST['email'];
 $pass=$_POST['pass'];
 $_SESSION['email']=$email;
$query=mysqli_query($con,"select * from admin_page where admin_email='$email' and admin_pass='$pass'");
 if(mysqli_num_rows($query)>0){
    header('location:index.php');
 }else{
    echo "<script>alert('Email or password is incorrect')</script>";
 }
 }
?>