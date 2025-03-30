<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'config/connect_db.php'; // Include database connection file

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['item_id'])) {
    $item_id = intval($_POST['item_id']); // Get the item ID from the form

    // Initialize the cart for the logged-in user if it doesn't exist
    if (!isset($_SESSION['cart'][$_SESSION['username']])) {
        $_SESSION['cart'][$_SESSION['username']] = [];
    }

    // Add the item to the cart or increment its quantity
    if (isset($_SESSION['cart'][$_SESSION['username']][$item_id])) {
        $_SESSION['cart'][$_SESSION['username']][$item_id]['quantity']++;
    } else {
        // Fetch item details from the database
        $query = "SELECT * FROM products WHERE item_id = $item_id";
        $result = $conn->query($query);

        if ($result && $result->num_rows > 0) {
            $item = $result->fetch_assoc();
            $_SESSION['cart'][$_SESSION['username']][$item_id] = [
                'quantity' => 1,
                'price' => $item['item_price'],
                'name' => $item['item_name']
            ];
        }
    }

    // Redirect back to the product page
    header("Location: MrTimeWebsiteProductPage.php");
    exit();
}
?>