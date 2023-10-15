<?php
print_r($_POST);
$email=$_POST['email'];
$pass=$_POST['pass'];
$name=$_POST['name'];
$lname=$_POST['lname'];
$dob=$_POST['dob'];
$contact=$_POST['contact'];
$con=mysqli_connect("127.0.0.1:3325","root","","job_portal");

$query=mysqli_query($con,"INSERT INTO `jobseeker`( `email`, `pass`, `first`, `last`, `dob`, `mobile`) VALUES ('$email','$pass','$name','$lname','$dob','$contact')");
if(isset($query)){
    echo "Inserted success";
    header("Location:job-post.php");
}
else{
    echo "Not Inserted success";
}
?>