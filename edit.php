<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com/
*/
 
 require('db.php');
//include("auth.php");

$job_id=$_REQUEST['job_id'];
$query = "SELECT * from new_record where job_id='".$job_id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<title>Update Record</title>
	<link rel="stylesheet" href="css/style.css" />
	</head>
		<body>
		<div class="form">
		<p><a href="dashboard.php">Dashboard</a> | <a href="insert.php">Insert New Record</a> | <a href="logout.php">Logout</a></p>
		<h1>Update Record</h1>
			<?php
			$status = "";
			if(isset($_POST['new']) && $_POST['new']==1)
			{
			$job_id=$_REQUEST['job_id'];
			$dt2 = date("Y-m-d H:i:s");
			$institute_name =$_REQUEST['institute_name'];
			$h_type =$_REQUEST['h_type'];
			$location_id =$_REQUEST['location_id'];
			$equipment_name =$_REQUEST['equipment_name'];
			$equipment_make =$_REQUEST['equipment_make'];
			$equipment_model =$_REQUEST['equipment_model'];
			$oic =$_REQUEST['oic'];
			//$submittedby = $_SESSION["username"];
			$update="update new_record set dt2='".$dt2."', institute_name='".$institute_name."', h_type='".$h_type."', location_id='".$location_id."',equipment_name='".$equipment_name."',equipment_make='".$equipment_make."',equipment_model='".$equipment_model."',oic='".$oic."' WHERE job_id='".$job_id."'";
			mysqli_query($con, $update) or die(mysqli_error());
			$status = "Record Updated Successfully. </br></br><a href='view.php'>View Updated Record</a>";
			echo '<p style="color:#FF0000;">'.$status.'</p>';
			}else {
			?>
		 <div>
		<form name="form" method="post" action="">  
 		<input type="hidden" name="new" value="1" />
		
		<!--<input name="id" type="hidden" value="<?php echo $row['id'];?>" /> 
		<p><input type="text" name="name" placeholder="Enter Name" required value="<?php echo $row['name'];?>" /></p>
		<p><input type="text" name="age" placeholder="Enter Age" required value="<?php echo $row['age'];?>" /></p>-->
		
		<p><input name="submit" type="submit" value="Update" /></p> 
		</form>
		<?php } ?> 

		<br /><br /><br /><br />
		<a href="https://www.allphptricks.com/insert-view-edit-and-delete-record-from-database-using-php-and-mysqli/">Tutorial Link</a> <br /><br />
		For More Web Development Tutorials Visit: <a href="https://www.allphptricks.com/">AllPHPTricks.com</a>
		</div>
		</div>
		</body>
</html>
