<?php
session_start();
require_once 'config.php'; // Include the database connection

// Ensure user is logged in and user_id is stored in the session
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

$user_id = $_SESSION['user_id'];

// Fetch items in the user's cart
$sql = "SELECT * FROM CartItems WHERE user_id = :user_id";
$stmt = $pdoShopping->prepare($sql);
$stmt->execute([':user_id' => $user_id]);
$cartItems = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart</title>
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
    <script>
        function removeFromCart(cartItemId) {
            fetch('remove_from_cart.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: 'cart_item_id=' + cartItemId
            })
                .then(response => response.text())
                .then(data => {
                    document.getElementById('cart').innerHTML = data;
                })
                .catch(error => console.error('Error:', error));
        }
    </script>
</head>
<body>
<section class="hero">
    <h1>Your Cart</h1>
    <a href="shop.php">Continue Shopping</a>
</section>
<div class="container">
    <h2>Cart Contents</h2>
    <div id="cart">
        <?php if (!empty($cartItems)): ?>
            <ul>
                <?php foreach ($cartItems as $item): ?>
                    <li id="item-<?php echo $item['id']; ?>">
                        <strong><?php echo htmlspecialchars($item['product_name']); ?></strong><br>
                        Price: $<?php echo number_format($item['product_price'], 2); ?><br>
                        Quantity: <?php echo $item['quantity']; ?>
                        <button onclick="removeFromCart(<?php echo $item['id']; ?>)">Remove</button>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Your cart is empty.</p>
        <?php endif; ?>
    </div>
</div>
<footer>
    <p>Tomblin Hardware &copy; 2024</p>
</footer>
</body>
</html>
