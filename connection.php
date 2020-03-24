<?php
$hostname = "localhost"; //Enter HostName
$username = "root";  //Enter Current User
$password = "";  //Enter Password (For xampp the password is blank)
$database = "practice_task"; //Database Name

$connection = mysqli_connect($hostname, $username, $password,$database);
// Check connection is working or not
if (!$connection) {
 die("Connection error: " . mysqli_connect_error());
} 
?>
