<?php
session_start();

// Proteksi halaman admin
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>
<body>
    <h1>Welcome, Admin <?= $_SESSION['username'] ?>!</h1>
    <p>This is the admin dashboard.</p>
    <a href="logout.php">Logout</a>
</body>
</html>