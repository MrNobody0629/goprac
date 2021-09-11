<?php
include_once 'connection.php';
$id=$_POST["id"]; 

$sql = "DELETE FROM gen_numbers WHERE id=$id";

if (mysqli_query($con, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($con);
}

mysqli_close($con);
?>