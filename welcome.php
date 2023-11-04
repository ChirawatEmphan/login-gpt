<?php
session_start();

if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}

echo "Welcome, " . $_SESSION['username'] . "!";

?>
<!-- Place this in your protected page, like welcome.php -->
<form action="logout.php" method="post">
  <input type="submit" value="Logout">
</form>

