<?php
include('include/header.php');
include('include/sidebar.php');
?>
<?php
include('connection/db.php');
$edit=$_GET['edit'];
$qery="SELECT * FROM `all_job` WHERE job_id='$edit'";
$qer=mysqli_query($con,$qery);
while($row=mysqli_fetch_array($qer)){
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="job_create.php">Add job List</a></li>
    <li class="breadcrumb-item"><a href="#">Add Job</a></li>
  </ol>
</nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Add Job</h1>

            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                
              </div>
            <!--  <a class="btn btn-primary" href="add_customer.php">Add Customer</a> --->
            </div>
          </div>
<div style="width: 60%; margin-left:20%; background-color:powderblue">

<form action="edit_job.php" method="post" style="margin: 3%;padding: 3%" name="job_form" id="job_form">
<div id="msg"></div>

<div class="form-group">
    <label for="Customer Email">Job Title </label>

    <input type="text" name="job_title" id="job_title" value="<?php echo $row['job_title'];  ?>"  class="form-control" placeholder="Enter Job Title">
</div>
<div class="form-group">
    <label for="Customer Username">Description</label>
    <textarea name="Des" id="Des"  class="form-control" cols="30" rows="10"><?php echo $row['des'];  ?></textarea>

</div>

<input type="hidden" name="id" id="is" value="<?php $edit; ?>">


<div class="form-group">
<label for="">Country</label>
<select id="countryId" value="<?php echo $row['country'];  ?>" name="countryId" onchange="populateStates()">
      <option value=""></option>
      <option value="india">India</option>
      <option value="china">China</option>
      <option value="us">United States</option>
    </select>
</div>

<div class="form-group">
<label for="">State</label>
<select id="stateId" name="stateId"  value="<?php echo $row['state'];  ?>" onchange="populateCities()">
      <option value=""><?php echo $row['state'];?></option>
    </select>
</div>

<div class="form-group">
<label for="">City</label>
<select id="cityId" value="<?php echo $row['city'];?>" name="cityId">
      <option value=""><?php echo $row['city'];?></option>
    </select>
</div>


<div class="form-group">
    
    <input type="submit" class="btn btn-block btn-success" placeholder="Save" name="submit" id="submit">
</div>

</form>
</div>

        <canvas class="my-4" id="myChart" width="900" height="380"></canvas>
        <div class="table-responsive">
            
          </div>
        </main>
      </div>
    </div>
    <?php

    }
?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   
    <script>
      $(document).ready(function () {
    $('#example').DataTable();
});
      </script>
      <script>
        $(document).ready(function(){
        $("#submit").click(function(){
          var Description=$("#Description").val();
          var job_title=$("#job_title").val();
          var countryId=$("#countryId").val();
          var stateId=$("#stateId").val();
          var cityId=$("#cityId").val();
            if(job_title==''){
                alert('Please Enter job_title!!');
                return false;
            }

            if(Description==''){
                alert('Please Enter Company Description !!');
                return false;
            }
            if(countryId==''){
                alert('Please Enter countryId!!');
                return false;
            }
            if(stateId==''){
                alert('Please Enter stateId!!');
                return false;
            }
            if(cityId==''){
                alert('Please Enter cityId!!');
                return false;
            }

          var data=$("#job_form").serialize();

           $.ajax({
                type:"POST",
                url:"add_new_job.php",
                 data:data,
                  success:function(data){
                  alert("Data inserted for ".$_SESSION['email']); 
                  }
           });
          
        });
        });last_name
      </script>

<script>
  var stateData = {
        india: [
          { state: "Delhi", cities: ["New Delhi", "Gurgaon", "Noida"] },
          { state: "Maharashtra", cities: ["Mumbai", "Pune", "Nagpur"] },
          { state: "Karnataka", cities: ["Bengaluru", "Mysore", "Hubli"] }
        ],
        china: [
          { state: "Beijing", cities: ["Beijing City", "Chaoyang", "Haidian"] },
          { state: "Shanghai", cities: ["Shanghai City", "Pudong", "Xuhui"] },
          { state: "Guangdong", cities: ["Guangzhou", "Shenzhen", "Dongguan"] }
        ],
        us: [
          { state: "California", cities: ["Los Angeles", "San Francisco", "San Diego"] },
          { state: "New York", cities: ["New York City", "Buffalo", "Rochester"] },
          { state: "Texas", cities: ["Houston", "Dallas", "Austin"] }
        ]
      };
      
      // Get the dropdown elements
      var countryDropdown = document.getElementById("countryId");
      var stateDropdown = document.getElementById("stateId");
      var cityDropdown = document.getElementById("cityId");
      
      // Function to populate the states dropdown
      function populateStates() {
        var selectedCountry = countryDropdown.value;
        stateDropdown.innerHTML = "<option value=''>Select a state</option>";
        
        if (selectedCountry && stateData.hasOwnProperty(selectedCountry)) {
          var states = stateData[selectedCountry];
          for (var i = 0; i < states.length; i++) {
            var option = document.createElement("option");
            option.value = states[i].state;
            option.text = states[i].state;
            stateDropdown.appendChild(option);
          }
        }
      }
      
      // Function to populate the cities dropdown
      function populateCities() {
        var selectedCountry = countryDropdown.value;
        var selectedState = stateDropdown.value;
        cityDropdown.innerHTML = "<option value=''>Select a city</option>";
        
        if (selectedCountry && selectedState && stateData.hasOwnProperty(selectedCountry)) {
          var states = stateData[selectedCountry];
          for (var i = 0; i < states.length; i++) {
            if (states[i].state === selectedState) {
              var cities = states[i].cities;
              for (var j = 0; j < cities.length; j++) {
                var option = document.createElement("option");
                option.value = cities[j];
                option.text = cities[j];
                cityDropdown.appendChild(option);
              }
              break;
            }
          }
        }
      }
      
    </script>


       <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script src="//geodata.solutions/includes/countrystatecity.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/cesiumjs/1.78/Build/Cesium/Cesium.js"></script>
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
 <!-- datatables plugins-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script src="//geodata.solutions/includes/countrystatecity.js"></script>
  </body>
</html>

