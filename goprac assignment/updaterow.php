<?php
include_once 'connection.php';
$id=$_POST["id"]; 
$st=$_POST["st"]; 

$sql = "UPDATE gen_numbers SET Gen_Number='$st' WHERE id=$id";

if ($con->query($sql) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $con->error;
  }
mysqli_close($con);
?>