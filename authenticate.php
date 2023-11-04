<?php
session_start();
require_once 'db.php'; // Include your database connection

$username = $_POST['username'];
$password = $_POST['password'];

// SQL injection prevention
$username = $conn->real_escape_string($username);
$password = hash('sha256', $password); // Hash the password

$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";

$result = $conn->query($query);

if ($result->num_rows > 0) {
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    header("Location: welcome.php"); // Redirect to a welcome page
    exit();
} else {
    echo "Invalid username or password.";
}

$conn->close();
?>
