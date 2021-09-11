<?php
$host = "localhost";
$dbUsername = "root";
$dbPassword = "Hacker22";
$dbname = "user";
$con = new mysqli($host, $dbUsername, $dbPassword, $dbname);
if (mysqli_connect_error()) {
    echo "connect error";
}
?>