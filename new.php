<?php
$con=mysqli_connect("127.0.0.1:3325","root","","job_portal");

  $keyword=$_POST['key'];
  $category=$_POST['category'];
  $sql1=mysqli_query($con,"SELECT * from `all_job` LEFT JOIN company ON all_job.customer_email=company.admin WHERE keyword LIKE '%$keyword%' OR category=$category;");

  while($row=mysqli_fetch_array($sql1)){
     echo $row['job_title'];
     echo $row['des'];
     echo $row['state'];
  }
  print_r($_POST);


?>