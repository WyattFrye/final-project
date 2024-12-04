<?php
session_start();
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cart_item_id = $_POST['cart_item_id'];

    $sql = "DELETE FROM CartItems WHERE id = :cart_item_id";
    $stmt = $pdoShopping->prepare($sql);
    $stmt->execute([':cart_item_id' => $cart_item_id]);

    // Fetch updated cart items for the current user
    $user_id = $_SESSION['user_id'];
    $sql = "SELECT * FROM CartItems WHERE user_id = :user_id";
    $stmt = $pdoShopping->prepare($sql);
    $stmt->execute([':user_id' => $user_id]);
    $cartItems = $stmt->fetchAll();

    // Return only the updated cart items
    if (!empty($cartItems)) {
        echo '<ul>';
        foreach ($cartItems as $item) {
            echo '<li id="item-' . $item['id'] . '">';
            echo '<strong>' . htmlspecialchars($item['product_name']) . '</strong><br>';
            echo 'Price: $' . number_format($item['product_price'], 2) . '<br>';
            echo 'Quantity: ' . $item['quantity'];
            echo '<button onclick="removeFromCart(' . $item['id'] . ')">Remove</button>';
            echo '</li>';
        }
        echo '</ul>';
    } else {
        echo '<p>Your cart is empty.</p>';
    }
}
