<?php 
session_start();

// Get the data safely
$category = $_POST['category'] ?? '';
$name = htmlspecialchars($_POST['name'] ?? '');
$email = htmlspecialchars($_POST['email'] ?? '');
$phone = htmlspecialchars($_POST['phone'] ?? '');
$password = htmlspecialchars($_POST['password'] ?? '');
$service = $_POST['serevice'] ?? [];
$quantity = htmlspecialchars($_POST['quantity'] ?? '');
$pickup_date = $_POST['pickup_date'] ?? '';
$notes = htmlspecialchars($_POST['notes'] ?? '');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LAUNDRY</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
 <header>
    <div></div>
        <div>
        <h1>Laundry Management System</h1>
        <p>Quick and Clean Laundry Service in Campus!</p>
        </div>

 </header>

 <nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="pricing.php">Pricing</a></li>
        <li><a href="contact.php">Contact Us</a></li>
    </ul>
    </nav>

    