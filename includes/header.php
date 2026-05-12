<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CISC3003 – Web App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<nav>
    <a href="index.php">Home</a> |
    <?php if (isset($_SESSION['user_id'])): ?>
        <a href="dashboard.php">Dashboard</a> |
        <a href="logout.php">Logout</a>
    <?php else: ?>
        <a href="register.php">Register</a> |
        <a href="login.php">Login</a> |
        <a href="contact.php">Contact</a>
    <?php endif; ?>
</nav>
<hr>