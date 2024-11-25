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
</section>
<div class="container">
    <h2>Shop Our Products</h2>
    <div class="product-list">
        <?php
        $products = [
            ["img" => "building_materials.jpg", "title" => "Building Materials", "description" => "High-quality lumber, cement, and other construction materials."],
            ["img" => "roofing_supplies.jpg", "title" => "Roofing Supplies", "description" => "Durable and weather-resistant roofing options."],
            ["img" => "flooring.jpg", "title" => "Flooring", "description" => "A variety of flooring solutions including tiles, wood, and laminates."],
            ["img" => "plumbing_supplies.jpg", "title" => "Plumbing Supplies", "description" => "Pipes, fittings, and other essential plumbing items."],
            ["img" => "tools.jpg", "title" => "Tools and Hardware", "description" => "Everything from hand tools to power tools to get the job done."]
        ];

        foreach ($products as $product) {
            echo "<div class='product'>";
            echo "<img src='" . $product["img"] . "' alt='" . $product["title"] . "'>";
            echo "<h3>" . $product["title"] . "</h3>";
            echo "<p>" . $product["description"] . "</p>";
            if ($product["title"] === "Tools and Hardware") {
                echo "<a href='display_tools.php'>View Details</a>";
            } else {
                echo "<form method='post' action='cart.php'>";
                echo "<input type='hidden' name='product_title' value='" . $product["title"] . "'>";
                echo "<input type='hidden' name='product_description' value='" . $product["description"] . "'>";
                echo "<input type='hidden' name='product_img' value='" . $product["img"] . "'>";
                echo "<button type='submit'>Add to Cart</button>";
                echo "</form>";
            }
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
