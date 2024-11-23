<?php
session_start();

// Initialize the cart if it doesn't exist
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Handle adding items to the cart
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_title = $_POST['product_title'];
    $product_description = $_POST['product_description'];
    $product_img = $_POST['product_img'];

    // Add product to cart
    $_SESSION['cart'][] = [
        'title' => $product_title,
        'description' => $product_description,
        'img' => $product_img
    ];

    // Redirect back to the shop page
    header('Location: shop.php');
    exit;
}

// Handle displaying the cart
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<section class="hero">
    <h1>Your Cart</h1>
    <a href="shop.php">Continue Shopping</a>
</section>
<div class="container">
    <h2>Cart Contents</h2>
    <?php if (!empty($_SESSION['cart'])): ?>
        <ul>
            <?php foreach ($_SESSION['cart'] as $item): ?>
                <li>
                    <img src="<?php echo htmlspecialchars($item['img']); ?>" alt="<?php echo htmlspecialchars($item['title']); ?>" style="width: 100px; height: auto;">
                    <strong><?php echo htmlspecialchars($item['title']); ?></strong><br>
                    <?php echo htmlspecialchars($item['description']); ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Your cart is empty.</p>
    <?php endif; ?>
</div>
<footer>
    <p>Tomblin Hardware &copy; 2024</p>
</footer>
</body>
</html>

