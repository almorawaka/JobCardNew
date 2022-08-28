



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
		
          <?php
            $name = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed";
            }
        }
  
    

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;

}
?>
<!-- <form method="POST" class="row g-3"> -->

<div class="col-sm">
<label for="inputState" class="form-label">Please Conform Job Card Number to Print</label>   
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
<input type="text" class="form-control" placeholder=" Job card number" name="name" required value="<?php echo $name;?>">
  </div>     
         
  </br>
        <!-- <div class="col-md-12"> -->
        
            <!-- <input type="submit" value="PRINT JOB CARD" name="submit"></button>  -->
            <input type="submit" name="submit" value="CONFORM "> </button> 
      
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;

?>
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