<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (!isset($_SESSION['username'])) {
    header("Location: MrTimeWebsiteForm.php");
    exit();
}

// Clear the cart
unset($_SESSION['cart'][$_SESSION['username']]);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="MrTimeWebsite.css">
<body>
<?php include 'navbar.php'; ?>

<div class="container mt-5 text-center">
    <h3>Thank you for your purchase!</h3>
    <h3>Your order has been placed successfully.</h3>
    <a href="MrTimeWebsiteProductPage.php" class="btn btn-primary mt-3">Continue Shopping</a>
</div>

</body>
</html>