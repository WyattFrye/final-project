<?php
global $pdoFlooring;
require_once 'config.php'; // Include the database connection

// Fetch items from the Flooring table in the flooringmaterials database
$sql = "SELECT * FROM Flooring";
$stmt = $pdoFlooring->prepare($sql);
$stmt->execute();
$flooringMaterials = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flooring Materials Inventory</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<section class="hero">
    <h1>Flooring Materials Inventory</h1>
    <a href="about.html">About</a>
    <a href="index1.php">Home</a>
</section>
<div class="container">
    <h2>Our Flooring Materials</h2>
    <div class="product-list">
        <?php foreach ($flooringMaterials as $material): ?>
            <div class="product">
                <h3><?php echo htmlspecialchars($material['name']); ?></h3>
                <p>Price: $<?php echo number_format($material['price'], 2); ?></p>
                <form method="post" action="cart.php">
                    <input type="hidden" name="product_name" value="<?php echo htmlspecialchars($material['name']); ?>">
                    <input type="hidden" name="product_price" value="<?php echo $material['price']; ?>">
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
