<?php
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
    <title>Tool Inventory</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<section class="hero">
    <h1>Tool Inventory</h1>
    <a href="about.html">About</a>
    <a href="index1.php">Home</a>
</section>
<div class="container">
    <h2>Our Tools</h2>
    <div class="product-list">
        <?php foreach ($tools as $tool): ?>
            <div class="product">
                <h3><?php echo htmlspecialchars($tool['name']); ?></h3>
                <p>Price: $<?php echo number_format($tool['price'], 2); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<footer>
    <p>Tomblin Hardware &copy; 2024</p>
</footer>
</body>
</html>