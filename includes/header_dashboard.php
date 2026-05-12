<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
<nav>
    <a href="index.php">Home</a> |
    <a href="dashboard.php">Dashboard</a> |
    <a href="logout.php">Logout</a>
</nav>
<hr>