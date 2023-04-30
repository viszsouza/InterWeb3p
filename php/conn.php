<?php
$servername = "containers-us-west-63.railway.app";
$username = "root";
$password = "69RwM2UVzHxTh0wsrad5";
$database = "railway";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
// $sql = "CREATE DATABASE inter_teste";
// if ($conn->query($sql) === TRUE) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . $conn->error;
// }

// $conn->close();
?>