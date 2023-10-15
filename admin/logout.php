<?php
// incude("/admin.php");
session_start();
$name=$_SESSION['email'];
echo $name;


session_unset();


$con=mysqli_connect("127.0.0.1:3325","root","","job_portal");
$que=mysqli_query($con,"SELECT * FROM admin_page WHERE admin_email='$name' and Admin_type='2'");
if(isset($que)){
    header('Location:http://localhost/job_portal/');
}
else{
    header("Location:http://localhost/job_portal/admin/admin_log.php");
}
session_destroy();
?> 