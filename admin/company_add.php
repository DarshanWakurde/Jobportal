<?php
include('connection/db.php');
 $company=$_POST['company'];
 $des=$_POST['Des'];
 $admin=$_POST['admin'];

$query=mysqli_query($con,"INSERT INTO `company`( `company`, `des`, `admin`) VALUES ('$company','$des','$admin')");
var_dump($query);
if (isset($query)){

    echo"<div class='alert-success'>data has been succefully inserted</div>";
    header("Location:add_company.php");
}else{
    echo"<div class='alert-danger'>data has been not succefully inserted</div>";
}

?>