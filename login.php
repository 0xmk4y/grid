<?php
// Start session
session_start();

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

// Get username and password from login form
$uname = mysqli_real_escape_string($conn, $_POST['username']);
$pass = mysqli_real_escape_string($conn, $_POST['password']);

// Query database to check if username and password match
$query = "SELECT is_admin FROM users WHERE username = ? AND password = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $uname, $pass);
$stmt->execute();
$result = $stmt->get_result();

// Check if the query returned any rows
if (mysqli_num_rows($result) == 1) {
    $is_admin = $result->fetch_assoc()["is_admin"];
    if ($is_admin == 1) {
        // User is an admin
        $_SESSION['username'] = $uname;
        header('Location: ./admin/index.php');
    } else {
        // User is not an admin
        $_SESSION['username'] = $uname;
        header('Location: book.php');
    }
} else {
    // Authentication failed, show error message
    echo "Invalid username or password";
}

// Close database connection
mysqli_close($conn);
?>
