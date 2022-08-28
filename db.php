<?php
/*
Author: Asanka
Website: https://www.beslakmalblogspot.com
*/


$con = mysqli_connect("localhost","root","123","eldb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>