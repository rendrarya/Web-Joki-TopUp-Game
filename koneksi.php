<?php
$servername = "localhost";
$username = "root"; // sesuaikan dengan username db masing-masing
$password = ""; // sesuaikan dengan password db masing-masing
$dbname   = "db_joki";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
?>