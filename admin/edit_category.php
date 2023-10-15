<?php
include('connection/db.php');
include('include/header.php');
include('include/sidebar.php');

$id=$_GET['edit'];
$query=mysqli_query($con,"select * from job_category where id = '$id'");
while($row=mysqli_fetch_array($query)){
    $Category=$row['category'];
    $des=$row['des'];
}


?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="category.php">Category</a></li>
    <li class="breadcrumb-item"><a href="#">Update Company</a></li>
  </ol>
</nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Update Company</h1>

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
    <label for="Customer Email">Enter category Name</label>
    <input type="Company" name="Category" id="Category" value=" <?php echo $Category  ?>" class="form-control" placeholder="Enter Company name">
</div>
<div class="form-group">
    <label for="Customer Username">Description</label>
    <textarea name="des" id="des" class="form-control" cols="30" rows="10">
        <?php
            echo $des;
        ?>

    </textarea>
</div>








<input type="hidden" name="company_id" id="company_id" value=" <?php echo $_GET['edit'];  ?>"
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
    $Category=$_POST['Category'];
    $des=$_POST['des'];
    
    $Admin_type=$_POST['admin_type'];
echo "<h1>".$First_name."</h1>";
    $query1=mysqli_query($con,"UPDATE `job_category` SET `id`='$id',`category`='$Category',`des`='$des' WHERE 'id'=$id;");
    if(isset($query)){
        echo"<script>alert('Record has  Updated $First_name !!!')</script>";
    }else{
        echo"<script>alert('Record has not Updated !!!')</script>";
    }
}


?>