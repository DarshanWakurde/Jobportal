<?php
include('connection/db.php');
 $email=$_POST['email'];
 $Username=$_POST['Username'];
 $Password=$_POST['Password'];
 $First_name=$_POST['First_name'];
 $Last_name=$_POST['Last_name'];
 $admin_type=$_POST['admin_type'];

$query=mysqli_query($con,"insert into admin_page(admin_email,admin_pass,admin_Username,First_name,
            Last_name,Admin_type)values('$email','$Password','$Username','$First_name','$Last_name','$admin_type')");
var_dump($query);

if (isset($query)){

    echo "<div class='alert-success'>data has been succefully inserted</div>";
}else{
    echo "<div class='alert-danger'>data has been not succefully inserted</div>";
}

?>