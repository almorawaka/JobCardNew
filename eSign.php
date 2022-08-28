
<?php
 
 // Connect to database
 // mysqli_connect("servername","username","password","database_name")
 $con = mysqli_connect("localhost","root","123","eldb");


 // The following code checks if the submit button is clicked
 // and inserts the data in the database accordingly
 if(isset($_POST['submit']))
 {
     // Store the job_id in a "j_id" variable
     $j_id = mysqli_real_escape_string($con,$_POST['job_id']);
     $Desig = mysqli_real_escape_string($con,$_POST['Designation']);
     $init = mysqli_real_escape_string($con,$_POST['Initials']);
     $s_dis = mysqli_real_escape_string($con,$_POST['description']);
     $s_name = mysqli_real_escape_string($con,$_POST['s_name']);
 
 // Creating an insert query using SQL syntax and storing it in a variable.
     $sql_insert = "INSERT INTO `esign`(`job_id`,`Designation`,`Initials`,`description`,`s_name`)
         VALUES ('$j_id','$Desig','$init','$s_dis','$s_name')";
        
       // The following code attempts to execute the SQL query
       // if the query executes with no errors
       // a javascript alert message is displayed
       // which says the data is inserted successfully
       if(mysqli_query($con,$sql_insert))

     {
         echo '<script>alert("Spare Parts added successfully")</script>';
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

    <title> Spare Parts</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0"> 




          <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<title>jQuery UI Signature Basics</title>
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">
<link href="css/jquery.signature.css" rel="stylesheet">
<style>
.kbw-signature { width: 400px; height: 200px; }
</style>
<!--[if IE]>
<script src="excanvas.js"></script>
<![endif]-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="js/jquery.signature.js"></script>
<script>
$(function() {
	var sig = $('#sig').signature();
	$('#disable').click(function() {
		var disable = $(this).text() === 'Disable';
		$(this).text(disable ? 'Enable' : 'Disable');
		sig.signature(disable ? 'disable' : 'enable');
	});
	$('#clear').click(function() {
		sig.signature('clear');
	});
	$('#json').click(function() {
		alert(sig.signature('toJSON'));
	});
	$('#svg').click(function() {
		alert(sig.signature('toSVG'));
	});
});
</script>


</head>

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

</style>



  <div class="card text-center">
    <!-- hedder navigation buttons in card-headder  -->
    <div class="card-header">
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
		  <h2>Division of Biomedical Engineering Services</h2>
		<!-- <h3><div>DEPARTMENT OF HEALTH SERVICES &nbsp; &nbsp; &nbsp; &nbsp; <span class="a">Job Number</span> <span class="a"></span> . </div> </h3> -->
		    
		  <h4>DEPARTMENT OF HEALTH SERVICES   </h4>

      <!-- from start -->
           <form method="POST" class="row g-3">
              <div class="col-md-6">
              <label class="form-label" >Job Card No:</label> 
              <input type="text" name="job_id" placeholder="Job Card No" class="form-control" required>
            </div>
            <div class="col-md-6">
              <label class="form-label" >Designation</label>
              <label for="inputAddress" class="form-label"></label>
              <input type="text" class="form-control" name="Designation" placeholder=" Designation" required>
            </div>
            <div class="col-sm-12">
              <input type="text" class="form-control" placeholder="Description" name="description" required>
            </div>
            <div class="col-md-3">
             <input type="text" class="form-control" placeholder="Initial" name="Initials" required></p>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" placeholder="Surname  " name="s_name" required></p>
            </div>
            <!-- <div class="col-md-12"> -->
              <input type="submit" value="ADD DETAILS TO JOB CARD" name="submit"> 
            <!-- </div> -->
          </form>
        <!-- End of the from  -->
    </br>
    <h3>Signature</h3>

<div id="sig"></div>
<p style="clear: both;">
	<button id="disable">Disable</button> 
	<button id="clear">Clear</button> 
	<button id="json">To JSON</button>
	<button id="svg">To SVG</button>
</p>

    </body>

<!-- Card Footer -->
  </div>
      <div class="card-footer text-muted"> 
      <!-- add navigation buttons to footer -->
          <a class="btn btn-primary" target="blank" href="http://localhost/eldb/jobcardnew/fpdf/index.php" role="button">PRINT LAST JOB</a>
          <a class="btn btn-primary" href="http://localhost/eldb/JobCardNew/spare_parts.php" role="button">ADD SPARE PARTS</a>
          <a class="btn btn-primary" href="http://localhost/eldb/JobCardNew/table.php" role="button">VIEW ALL JOBS</a>
          <a class="btn btn-primary" href="http://localhost/eldb/JobCardNew/elworkform.php" role="button">OPEN NEW JOB CARD</a>
      </div>
  </div>

</html>


