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
$name=$_REQUEST['name'];
$age=$_REQUEST['age'];
$gender=$_REQUEST['gender'];
$email=$_REQUEST['myemail'];
$phone=$_REQUEST['phone'];
$address=$_REQUEST['address'];
$role=$_REQUEST['role'];
$sql="insert into AM values('$name','$age','$gender','$email','$phone','$address','$role')";

if ($conn->query($sql) === TRUE) {
  echo "data inserted successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>