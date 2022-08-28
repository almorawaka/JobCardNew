<?php
 
    // Connect to database
	// mysqli_connect("servername","username","password","database_name")
    $con = mysqli_connect("localhost","root","123","eldb");

    // Get all the locations from location table
    $sql = "SELECT * FROM `locations`";
    $all_locations = mysqli_query($con,$sql);
	
	// Get all the staff from staff table
    $sql = "SELECT * FROM `staff`";
    $all_staff = mysqli_query($con,$sql);

    // The following code checks if the submit button is clicked
    // and inserts the data in the database accordingly
    if(isset($_POST['submit']))
    {
		// Store the date in a "dt2" variable
		$dt2=date("Y-m-d H:i:s");
        // Store the institute name in a "name" variable
        $name = mysqli_real_escape_string($con,$_POST['institute_name']);
		// Store the equipment name in a "h_type" variable
        $type = mysqli_real_escape_string($con,$_POST['h_type']);
		// Store the equipment name in a "e_name" variable
        $e_name = mysqli_real_escape_string($con,$_POST['equipment_name']);
	    // Store the equipment model in a "e_make" variable
        $e_make = mysqli_real_escape_string($con,$_POST['equipment_make']);
		// Store the equipment model in a "e_model" variable
        $e_model = mysqli_real_escape_string($con,$_POST['equipment_model']);
        // Store the location ID in a "id" variable
        $id = mysqli_real_escape_string($con,$_POST['location_id']);
		// Store the location ID in a "id" variable
        $s_id = mysqli_real_escape_string($con,$_POST['staff']);
 
        // Creating an insert query using SQL syntax and
        // storing it in a variable.
        $sql_insert =
        "INSERT INTO `institutes`(`dt2`,`institute_name`,`h_type`, `location_id`,`equipment_name`,`equipment_make`,`equipment_model`,`oic_id`)
            VALUES ('$dt2','$name','$type','$id','$e_name','$e_make','$e_model','$s_id')";
           
          // The following code attempts to execute the SQL query
          // if the query executes with no errors
          // a javascript alert message is displayed
          // which says the data is inserted successfully
          if(mysqli_query($con,$sql_insert))
 
        {
            echo '<script>alert("JOB CARD added successfully")</script>';
        }
    }
?>



<!doctype html>
<html lang="en">
  
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title> Job Card</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0"> 

<style>

.btn {
  background: #b4c9d4;
  background-image: -webkit-linear-gradient(top, #b4c9d4, #769db3);
  background-image: -moz-linear-gradient(top, #b4c9d4, #769db3);
  background-image: -ms-linear-gradient(top, #b4c9d4, #769db3);
  background-image: -o-linear-gradient(top, #b4c9d4, #769db3);
  background-image: linear-gradient(to bottom, #b4c9d4, #769db3);
  -webkit-border-radius: 60;
  -moz-border-radius: 60;
  border-radius: 60px;
  -webkit-box-shadow: 0px 1px 5px #666666;
  -moz-box-shadow: 0px 1px 5px #666666;
  box-shadow: 0px 1px 5px #666666;
  font-family: Georgia;
  color: #030003;
  font-size: 12px;
  padding: 8px 10px 8px 10px;
  border: solid #5f8ba1 1px;
  text-decoration: none;
}

.btn:hover {
  background: #1f72a3;
  background-image: -webkit-linear-gradient(top, #1f72a3, #387aa3);
  background-image: -moz-linear-gradient(top, #1f72a3, #387aa3);
  background-image: -ms-linear-gradient(top, #1f72a3, #387aa3);
  background-image: -o-linear-gradient(top, #1f72a3, #387aa3);
  background-image: linear-gradient(to bottom, #1f72a3, #387aa3);
  text-decoration: none;
}


table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

table.a {
  table-layout: auto;
  width: 180px;  
}

table.b {
  table-layout: fixed;
  width: 180px;  
}

table.c {
  table-layout: auto;
  width: 100%;  
}

table.d {
  table-layout: fixed;
  width: 100%;  
}
</style>
  </head>


  <div class="card text-center">
  <div class="card-header">
  <div class="card-footer text-muted">
  <a class="btn btn-primary" target="blank" href="http://localhost/eldb/jobcardnew/fpdf/index.php" role="button">PRINT LAST JOB</a>
<a class="btn btn-primary" href="http://localhost/eldb/JobCardNew/spare_parts.php" role="button">ADD SPARE PARTS</a>
<a class="btn btn-primary" href="http://localhost/eldb/JobCardNew/table.php" role="button">VIEW ALL JOBS</a>
<a class="btn btn-primary" href="http://localhost/eldb/JobCardNew/elworkform.php" role="button">OPEN NEW JOB CARD</a>
  </div>
  <div class="card-body">
    <!-- <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->

        

  <body>
  <div id="main">
	<div id="header">
	  <div id="logo">
		<div id="logo_text">
		  <!-- class="logo_colour", allows you to change the colour of the text -->
		  <h1><a href="home.php"> <span class="logo_colour"> </span></a></h1>
		  <h2>Division of Biomedical Engineering Services&nbsp; &nbsp; &nbsp; JOB CARD </h2>
		<!-- <h3><div>DEPARTMENT OF HEALTH SERVICES &nbsp; &nbsp; &nbsp; &nbsp; <span class="a">Job Number</span> <span class="a"></span> . </div> </h3> -->
		    
		  <h4> &nbsp; &nbsp;DEPARTMENT OF HEALTH SERVICES &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  </h4>
		
        <div class="container overflow-hidden">
            <div class="row gx-5">
                <div class="col">
                <div class="p-3 border bg-light">
                <?php	  
                //$con = mysqli_connect("localhost","root","123","eldb");
                $result = mysqli_query($con, "SELECT job_id FROM institutes ORDER BY job_id DESC LIMIT 1 ");
                if ($result->num_rows > 0) {
			    // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "Job Number:   EL / " . (str_pad($row["job_id"],4,0,STR_PAD_LEFT)+1). " / 22 / W     ";
                }
                } else {
                    echo "0 results";
		                }	?>
                </div>
                </div>

                <div class="col">
                <div class="p-3 border bg-light">

                <?php
                $result = mysqli_query($con, "SELECT dt2 FROM institutes ORDER BY dt2 DESC LIMIT 1 ");
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo " &nbsp;&nbsp;Date  : " . $row["dt2"];
                    }
                } else {
                    echo "0 results";
                }	?>
                </div>
                </div>
            </div>
        </div>
          
 
	


   
<form method="POST" class="row g-3">
            <div class="col-md-6">
                <label class="form-label" >Name of institute:</label>
                <input type="text" name="institute_name" placeholder="Name of institute" class="form-control" required>
            </div>

            <div class="col-md-2">
                <label for="inputState" class="form-label">Type</label>    
                <select name="h_type" class="form-select">       
                    <option selected>Choose...</option>
                    <option> TH   </option>
                    <option> GH   </option>
                    <option> BH   </option>
                    <option> DGH   </option>
                </select>
            </div>

            <div class="col-md-2">  
     
                <label class="form-label" >Location</label>
                <input type="text" name="location_id" placeholder="Name location" class="form-control" required>
            </div>

            <div class="col-12">
            <!-- <input type="text" name="equipment_name" required></p> -->
                <label for="inputAddress" class="form-label"></label>
                <input type="text" class="form-control" name="equipment_name" placeholder="Equipment Name" required>
            </div>
            
            <div class="col-sm-7">
                <!-- <input type="text" class="form-control" placeholder="City" aria-label="City"> -->
                <input type="text" class="form-control" placeholder="Make" name="equipment_make" required>
            </div>
        
            <div class="col-sm">
                <!-- <input type="text" class="form-control" placeholder="Model" aria-label="State"> -->
                <input type="text" class="form-control" placeholder="Model" name="equipment_model" required></p>
            </div>

            <div class="col-sm">
                <!-- <input type="text" class="form-control" placeholder="Serial No" aria-label="Zip"> -->
            </div>
        
            <div class="col-md-8">
            </div>

            <div class="col-md-2">
                <!-- <label for="inputState" class="form-label"></label>
                <select id="inputState" class="form-select">
                <option selected>Massage recived by</option>
                <option> TH            </option>
                <option> GH           </option>
                </select> -->
            </div>
            <!-- code from https://codingstatus.com/display-data-based-on-dropdown-selection-in-php-mysql/ -->
            <div class="col-md-2">
            <label for="inputState" class="form-label"> </label>
                <select name="staff" class="form-select">
                    <option selected>staff</option>
                    <option> 882        </option>
                    <option> 902         </option>
                </select>
               <!-- connect to DB  -->
            
            
            </div>
        <!-- <div class="col-12">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                 submit 
            </label>
            </div>
        </div> -->
        <!-- <div class="col-md-12"> -->
            <input type="submit" value="ADD JOB CARD" name="submit"></button> 
        <!-- <input type="submit" value=" SUBMIT "  name=" SUBMIT " class="btn btn-primary" > </button> -->
        <!-- </div> -->
</form>
            </br>


   

    <!-- <a href="#" class="btn btn-primary"></a> -->



  </div>
  <div class="card-footer text-muted">
  <a class="btn btn-primary" target="blank" href="http://localhost/eldb/jobcardnew/fpdf/index.php" role="button">PRINT LAST JOB</a>
<a class="btn btn-primary" href="http://localhost/eldb/JobCardNew/spare_parts.php" role="button">ADD SPARE PARTS</a>
<a class="btn btn-primary" href="http://localhost/eldb/JobCardNew/table.php" role="button">VIEW ALL JOBS</a>
<a class="btn btn-primary" href="http://localhost/eldb/JobCardNew/elworkform.php" role="button">OPEN NEW JOB CARD</a>
  </div>
</div>






</html>