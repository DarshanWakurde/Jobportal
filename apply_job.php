<?php  

$con=mysqli_connect("127.0.0.1:3325","root","","job_portal");
if(isset($_POST['submit'])){
    $first=$_POST['first'];
    $last=$_POST['last'];
    $dob=$_POST['dob'];
    $file=$_FILES['resum']['name'];
$number=$_POST['mobile_number'];

    $temp=$_FILES['resum']['tmp_name'];
    $id_job=$_POST['id_job'];
    $job_seeker=$_POST['job_seeker'];

    $sql=mysqli_query($con,"SELECT * FROM `apply_job` WHERE `job_seeker`='$job_seeker' AND `id_job`=$id_job; ");
      if(mysqli_num_rows($sql)>0){
        header("location:");
      }
    
    
      move_uploaded_file($_FILES['resum']['tmp_name'],'./files/'.$file);
    $query=mysqli_query($con,"INSERT INTO `apply_job`(`first`, `last`, `dob`, `file`, `id_job`, `job_seeker`,`mobile_number`) VALUES ('$first','$last','$dob','$file','$id_job','$job_seeker',$number)");
    if(isset
    
    
    
    
    
    
    
    
    
    
    
    ($query)){
    
    }
    else{
        echo "Not";
    }
}
?>


<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
</head>
  <style>
    body {
      text-align: center;
      padding: 40px 0;
      background: #EBF0F5;
    }
      h1 {
        color: #88B04B;
        font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
        font-weight: 900;
        font-size: 40px;
        margin-bottom: 10px;
      }
      p {
        color: #404F5E;
        font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
        font-size:20px;
        margin: 0;
      }
    i {
      color: #9ABC66;
      font-size: 100px;
      line-height: 200px;
      margin-left:-15px;
    }
    .card {
      background: white;
      padding: 60px;
      border-radius: 4px;
      box-shadow: 0 2px 3px #C8D0D8;
      display: inline-block;
      margin: 0 auto;
    }
  </style>
  <body>
    <div class="card">
    <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
      <i class="checkmark">✓</i>
    </div>
      <h1>Success</h1> 
      <p>Your Resume Has been Sent Successfully;<br/> we'll be in touch shortly!</p>
      <button class="btn btn-success btn-block"><a href="index.php">Home Page</a></button>
    </div>
  </body>
</html>
