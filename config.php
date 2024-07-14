<?php
$servername = "localhost";
$username = "hamsa";
$password = "admin123";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

<!-- <?php
//time zone
date_default_timezone_set('Asia/Kolkata');
//database connection
$con = mysqli_connect("localhost", "hamsa", "admin123", 'covidtmsdb');
if (mysqli_connect_errno()) {
  echo "Connection Fail" . mysqli_connect_error();
}

?> -->