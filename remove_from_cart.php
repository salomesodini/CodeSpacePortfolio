<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['item_id'])) {
    $item_id = intval($_POST['item_id']); // Get the item ID from the form

    // Remove the item from the cart
    if (isset($_SESSION['cart'][$_SESSION['username']][$item_id])) {
        unset($_SESSION['cart'][$_SESSION['username']][$item_id]);
    }

    // Redirect back to the cart page
    header("Location: cart.php");
    exit();
}
?>