<?php

session_start();
require_once 'auth.php';

// Check if user is logged in
if (!is_logged_in()) {
    header('Location: login.php');
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tomblin Hardware</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">
    <style>
        .hero {
    text-align: center;
            padding: 20px;
        }
        .hero a {
    margin: 0 10px;
            text-decoration: none;
            color: #000;
            background-color: #ccc;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .hero a:hover {
    background-color: #999;
        }
    </style>
</head>
<body>
<section class="hero">
    <h1>Tomblin Hardware</h1>
    <h4>11487 Appalachian Highway | Oceana, WV 24870 | (304) 682-4665</h4>
    <a href="about.html">About</a>
    <a href="shop.php">Shop</a>
</section>
<div class="container">
    <div class="container box">
        <div style="display: flex; align-items: center;">
            <p style="flex: 1;">
    Tomblin Hardware LLC is a locally owned hardware store located in Oceana, West Virginia. We offer a wide range of building materials, roofing supplies, flooring, plumbing supplies, and much more. We strive to provide quality products and services to meet the needs of our customers.
            </p>
            <img src="storefront_sign.jpg" alt="Tomblin Hardware Store" height="238">
        </div>
    </div>
</div>
<section>
    <table>
        <tr>
            <td>
                <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
            </td>
            <td style="padding: 20px; color: snow">
    "Tomblin Hardware LLC offers a wide range of building materials, roofing supplies, flooring, plumbing supplies, and more. Visit us at 11487 Appalachian Highway, Oceana, WV 24870, or call us at (304) 682-4665 for quality products and services."
                <nav><em>~ Tomblin Hardware Team</em></nav>
            </td>
        </tr>
    </table>
    <img src="redlogo.jpg" alt="Tomblin Hardware Products" style="width: 100%; height: auto;">
</section>
<h2>Our Products</h2>
<p>At Tomblin Hardware, we provide a diverse range of products to meet all your building and renovation needs:</p>
<ul>
    <li><strong>Building Materials</strong> – High-quality lumber, cement, and other construction materials.</li>
    <li><strong>Roofing Supplies</strong> – Durable and weather-resistant roofing options.</li>
    <li><strong>Flooring</strong> – A variety of flooring solutions including tiles, wood, and laminates.</li>
    <li><strong>Plumbing Supplies</strong> – Pipes, fittings, and other essential plumbing items.</li>
    <li><strong>Tools and Hardware</strong> – Everything from hand tools to power tools to get the job done.</li>
</ul>
<img src="tools-s.jpg" alt="Various Products" style="width: 75%">
<h2 style="color:white;">Our Commitment</h2>
<p style="color:white;">
    At Tomblin Hardware, we are committed to providing exceptional customer service and quality products. Our knowledgeable staff is here to help you with any project, big or small. Visit us today and let us help you get started on your next project!
</p>
<div class="content box">
    <ul>
        <li><strong>Customer Service</strong> – Friendly and knowledgeable staff ready to assist you.</li>
        <li><strong>Quality Products</strong> – Only the best materials and tools for your projects.</li>
        <li><strong>Local Business</strong> – Proudly serving the Oceana community and beyond.</li>
    </ul>
    <img src="storefront_sign.jpg" alt="Customer Service" height="50">
</div>
</body>
</html>

