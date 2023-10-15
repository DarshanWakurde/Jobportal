<?php
include('connection/db.php');
include('include/header.php');
$email=$_SESSION['email'];

?>



<div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
             
            
              <li class="nav-item">
                <a class="nav-link" href="apply.php">
                  <span data-feather="users"></span>
                  Apply jobs
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="createjobRecrute.php">
                  <span data-feather="bar-chart-2"></span>
                  Job Creates
                </a>
              </li>
              
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Saved reports</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>


        </nav>


<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <nav aria-label="breadcrumb">
  
</nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          

            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                
              </div>
              
            </div>
          </div>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="">Send E-mail</a></li>
</ol>
</nav>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">Send E-mail</h1>
    
</div>
<form action="phpmailer.php" method="post">
  <div class="form-group">
    <label for="">To</label>
    <td><input type="email" value="<?php echo trim($_GET['id']); ?>" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com"></td>
  </div>
  <div class="form-group">
    <label for="">Subject</label>
    <td><input type="text" class="form-control" name='subject'  id="exampleFormControlInput1" placeholder="Enter your Subject Here"></td>
  </div>
  <div class="form-group">
    <label for="">BODY</label>
    <td><textarea name="body" id="body"  class="form-control" placeholder="body...."></textarea></td>
  </div>


  <button type="submit" class="btn btn-success btn-block" name="submit" id="submit" value="send">Submit</button>
  
  
</form>