<?php
include('connection/db.php');
include('include/header.php');
include('include/sidebar.php');

$id=$_GET['edit'];
$query=mysqli_query($con,"select * from admin_page where id = '$id'");
while($row=mysqli_fetch_array($query)){
    $admin_email=$row['admin_email'];
    $First_name=$row['First_name'];
    $Last_name=$row['Last_name'];
    $admin_pass=$row['admin_pass'];
    $admin_Username=$row['admin_Username'];
    $Admin_type=$row['Admin_type'];

}


?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="customer.php">Customer</a></li>
    <li class="breadcrumb-item"><a href="#">Update Customer</a></li>
  </ol>
</nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Update Customer</h1>

            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                
              </div>
            <!--  <a class="btn btn-primary" href="add_customer.php">Add Customer</a> --->
            </div>
          </div>
<div style="width: 60%; margin-left:20%; background-color:powderblue">

<form action="#" method="post" style="margin: 3%;padding: 3%" name="customer_form" id="customer_form">
<div id="msg"></div>

<div class="form-group">
    <label for="Customer Email">Email</label>
    <input type="email" name="email" id="email" value=" <?php echo $admin_email  ?>" class="form-control" placeholder="Enter Customer Email">
</div>
<div class="form-group">
    <label for="Customer Username">Username</label>
    <input type="text" name="Username" id="Username" value=" <?php echo $admin_Username  ?>" class="form-control" placeholder="Enter Customer Username">
</div>

<div class="form-group" >
    <label for="Password">Enter Password</label>
    <input type="pass" name="Password" id="Password" value=" <?php echo $admin_pass  ?>" class="form-control" placeholder="Enter Password">
</div>


<div class="form-group">
    <label for="First Name">First Name</label>
    <input type="text" name="First_name" id="First_name" value=" <?php echo $First_name  ?>" class="form-control"  placeholder="Enter First Name" autofill>
</div>
<div class="form-group">
    <label for="Last Name">Last Name</label>
    <input type="text" name="Last_name" id="Last_name" value=" <?php echo $Last_name  ?>" class="form-control"  placeholder="Enter Last Name">
</div>

<div class="form-group">
    <label for="Admin Type">Admin Type</label>
    <select name="admin_type" name="Admin_type"  value=" <?php echo $Admin_type  ?>" class="form-control" id="admin_type">
        <option value="1">Super Admin</option>
        <option value="2">Customer Admin</option>
    </select>
</div>

<input type="hidden" name="id" id="id" value=" <?php echo $_GET['edit'];  ?>">

<div class="form-group">
    
    <input type="submit" class="btn btn-block btn-success" placeholder="Update" name="submit" id="submit">
</div>

</form>
</div>

        <canvas class="my-4" id="myChart" width="900" height="380"></canvas>
        <div class="table-responsive">
            
          </div>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
 <!-- datatables plugins-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready(function () {
    $('#example').DataTable();
});
      </script>
     
  </body>
</html>


<?php

include('connection/db.php');
if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $email=$_POST['email'];
    $admin_Username=$_POST['Username'];
    $admin_pass=$_POST['Password'];
    $First_name=$_POST['First_name'];
    $Last_name=$_POST['Last_name'];
    $Admin_type=$_POST['admin_type'];
echo "<h1>".$First_name."</h1>";
    $query1=mysqli_query($con,"UPDATE `admin_page` SET `ID`='$id',`admin_email`='$email',`admin_pass`='$admin_pass',`admin_Username`='$admin_Username',`First_name`='$First_name',`Last_name`='$Last_name',`Admin_type`='$Admin_type' WHERE `ID`='$id';");
    if(isset($query)){
        echo"<script>alert('Record has  Updated $First_name !!!')</script>";
    }else{
        echo"<script>alert('Record has not Updated !!!')</script>";
    }
}


?>