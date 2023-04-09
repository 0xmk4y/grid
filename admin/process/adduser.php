<?php
// Set up database connection
$db_host = 'localhost';
$db_user = 'admin';
$db_pass = 'pass123';
$db_name = 'library';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get user input from form
$uname = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$passwd = $_POST['password'];
$is_admin = $_POST['is_admin'];
// $is_admin = 0; // set is_admin to 0 by default for new users

// Use prepared statement to insert user data
$stmt = $conn->prepare("INSERT INTO `users` (`username`, `email`, `phone`, `password`, `is_admin`) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("ssssi", $uname, $email, $phone, $passwd, $is_admin);

if ($stmt->execute()) {
  echo "New user created successfully";
} else {
  echo "Error: " . $stmt->error;
}

// Close database connection
mysqli_close($conn);
?>