<?php
session_start();
require_once 'config.php'; // Include the database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ensure user is logged in and user_id is stored in the session
    if (!isset($_SESSION['user_id'])) {
        header('Location: login.php');
        exit;
    }

    $user_id = $_SESSION['user_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $quantity = $_POST['quantity'];

    $sql = "INSERT INTO CartItems (user_id, product_name, product_price, quantity) VALUES (:user_id, :product_name, :product_price, :quantity)";
    $stmt = $pdoShopping->prepare($sql);
    $stmt->execute([
        ':user_id' => $user_id,
        ':product_name' => $product_name,
        ':product_price' => $product_price,
        ':quantity' => $quantity
    ]);

    // Redirect to a cart overview page (optional)
    header('Location: view_cart.php');
    exit;
}
?>
