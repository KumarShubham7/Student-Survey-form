<?php
$servername = "localhost";
$username ="root";
$password="";
$dbname = "myDl";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE TABLE AM (
name VARCHAR(30),
age INT(5) NOT NULL,
gender VARCHAR(10),
myemail VARCHAR(50),
phone VARCHAR(10) NOT NULL,
address VARCHAR(50))";

if ($conn->query($sql) === TRUE) {
  echo "Table  created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>