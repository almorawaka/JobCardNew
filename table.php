

<?php
    $hostName = "localhost";
    $userName = "root";
    $password = "123";
    $databaseName = "eldb";
 $conn = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

<?php
$db= $conn;
$tableName="institutes";
$columns= ['dt2','job_id', 'institute_name','location_id','equipment_name','equipment_make','oic_id'];
$fetchData = fetch_data($db, $tableName, $columns);
function fetch_data($db, $tableName, $columns){
 if(empty($db)){
  $msg= "Database connection error";
  }elseif (empty($columns) || !is_array($columns)) {
        $msg="columns Name must be defined in an indexed array";
        }elseif(empty($tableName)){
        $msg= "Table Name is empty";
              }else{
              $columnName = implode(", ", $columns);
              $query = "SELECT $columnName FROM $tableName  ORDER BY job_id DESC ";
              $result = $db->query($query);
if($result== true){ 
    if ($result->num_rows > 0) {
        $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
        $msg= $row;
        } else {
            $msg= "No Data Found"; 
        }
            }else{
              $msg= mysqli_error($db);
            }
            }
            return $msg;
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
  <div class="card-header">
<a class="btn btn-primary" target="blank" href="http://localhost/eldb/jobcardnew/fpdf/index.php" role="button">PRINT LAST JOB</a>
<a class="btn btn-primary" href="http://localhost/eldb/JobCardNew/spare_parts.php" role="button">ADD SPARE PARTS</a>
<a class="btn btn-primary" href="http://localhost/eldb/JobCardNew/table.php" role="button">VIEW ALL JOBS</a>
<a class="btn btn-primary" href="http://localhost/eldb/JobCardNew/elworkform.php" role="button">OPEN NEW JOB CARD</a>
  </div>
  <div class="card-body">
<body>
<div class="container">
 <div class="row">
   <!-- <div class="col-sm-8"> -->
    <?php echo $deleteMsg??''; ?>
    <div class="row justify-content-center">
    <div class="col-auto">
    <div class="table-responsive">
      <table class="table table-bordered ">
       <thead><tr>
         <th>Date</th>
         <th>Job ID</th>
         <th>Institute Name</th>
         <th>Location Name</th>
         <th>Equipment</th>
         <th>Make</th>
         <th>OIC</th>
         <th>End User</th>
         <th>Print</th>
        
       
    </thead>
    <tbody>
    <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $data['dt2']??''; ?></td>
      <td><?php echo $data['job_id']??''; ?></td>
      <td><?php echo $data['institute_name']??''; ?></td>
      <td><?php echo $data['location_id']??''; ?></td>
      <td><?php echo $data['equipment_name']??''; ?></td>
      <td><?php echo $data['equipment_make']??''; ?></td>
      <td><?php echo $data['oic_id']??''; ?></td>
      <td><?php echo '<a href="http://localhost/eldb/jobcardnew/eSign.php">Signature</a>'; ?></td>
      <!-- echo '<a href="www.website.com">PRINT</a>'; -->
      <td><?php  echo '<a href="http://localhost/eldb/jobcardnew/Fpdf/jobno.php">PRINT</a>';?></td>
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
      <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
</div>





  <div class="card-footer text-muted">
 
<a class="btn btn-primary" target="blank" href="http://localhost/eldb/jobcardnew/fpdf/index.php" role="button">PRINT LAST JOB</a>
<a class="btn btn-primary" href="http://localhost/eldb/JobCardNew/spare_parts.php" role="button">ADD SPARE PARTS</a>
<a class="btn btn-primary" href="http://localhost/eldb/JobCardNew/table.php" role="button">VIEW ALL JOBS</a>
<a class="btn btn-primary" href="http://localhost/eldb/JobCardNew/elworkform.php" role="button">OPEN NEW JOB CARD</a>
  
  </div>
</div>

</body>
</html>