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
    <title>Tomblin Hardware - Shop</title>
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
        .product {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }
        .product img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .product h3 {
            margin: 10px 0;
        }
        .product p {
            margin-bottom: 10px;
        }
        .product button, .product a {
            background-color: #441112;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .product button:hover, .product a:hover {
            background-color: #3b0e0e;
        }
    </style>
</head>
<body>
<section class="hero">
    <h1>Tomblin Hardware</h1>
    <h4>11487 Appalachian Highway | Oceana, WV 24870 | (304) 682-4665</h4>
    <a href="about.html">About</a>
    <a href="index1.php">Home</a>
    <a href="view_cart.php">View Cart</a> <!-- Added View Cart button -->
</section>
<div class="container">
    <h2>Shop Our Products</h2>
    <div class="product-list">
        <?php
        $products = [
            ["img" => "building_materials.jpg", "title" => "Building Materials", "description" => "High-quality lumber, cement, and other construction materials.", "link" => "display_building.php"],
            ["img" => "roofing_supplies.jpg", "title" => "Roofing Supplies", "description" => "Durable and weather-resistant roofing options.", "link" => "display_roofing.php"],
            ["img" => "flooring.jpg", "title" => "Flooring", "description" => "A variety of flooring solutions including tiles, wood, and laminates.", "link" => "display_flooring.php"],
            ["img" => "plumbing_supplies.jpg", "title" => "Plumbing Supplies", "description" => "Pipes, fittings, and other essential plumbing items.", "link" => "display_plumbing.php"],
            ["img" => "tools.jpg", "title" => "Tools and Hardware", "description" => "Everything from hand tools to power tools to get the job done.", "link" => "display_tools.php"]
        ];

        foreach ($products as $product) {
            echo "<div class='product'>";
            echo "<img src='" . $product["img"] . "' alt='" . $product["title"] . "'>";
            echo "<h3>" . $product["title"] . "</h3>";
            echo "<p>" . $product["description"] . "</p>";
            echo "<a href='" . $product["link"] . "'>View Details</a>";
            echo "</div>";
        }
        ?>
    </div>
</div>
<footer>
    <p>Tomblin Hardware &copy; 2024</p>
</footer>
</body>
</html>
