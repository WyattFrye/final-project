<?php
global $pdoTools;
require_once 'config.php'; // Include the database connection

// Fetch items from the Tools table in the ToolsSupplies database
$sql = "SELECT * FROM Tools";
$stmt = $pdoTools->prepare($sql);
$stmt->execute();
$tools = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tools Inventory</title>
    <link rel="stylesheet" href="styles.css">
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
    <h1>Tools Inventory</h1>
    <a href="about.html">About</a>
    <a href="index1.php">Home</a>
    <a href="view_cart.php">View Cart</a> <!-- Added View Cart button -->
</section>
<div class="container">
    <h2>Our Tools</h2>
    <div class="product-list">
        <?php foreach ($tools as $tool): ?>
            <div class="product">
                <h3><?php echo htmlspecialchars($tool['name']); ?></h3>
                <p>Price: $<?php echo number_format($tool['price'], 2); ?></p>
                <form method="post" action="cart.php">
                    <input type="hidden" name="product_name" value="<?php echo htmlspecialchars($tool['name']); ?>">
                    <input type="hidden" name="product_price" value="<?php echo $tool['price']; ?>">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="quantity" min="1" value="1" required>
                    <button type="submit">Add to Cart</button>
                </form>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<footer>
    <p>Tomblin Hardware &copy; 2024</p>
</footer>
</body>
</html>
