<?php
// use to process signup
$uname = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$passwd = $_POST['password'];

// Setup database server
$servername = "localhost";
$username = "admin";
$password = "pass123";
$dbname = "library";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$is_admin = 0;
// Use prepared statement to insert user data
$stmt = $conn->prepare("INSERT INTO `users` (`username`, `email`, `phone`, `password`, `is_admin`) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("ssss", $uname, $email, $phone, $passwd, $is_admin);

if ($stmt->execute()) {
  echo "New record created successfully";
} else {
  echo "Error: " . $stmt->error;
}

$conn->close();
?>
