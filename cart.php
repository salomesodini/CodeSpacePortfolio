<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: MrTimeWebsiteForm.php");
    exit();
}

// Initialize the cart if it doesn't exist
if (!isset($_SESSION['cart'][$_SESSION['username']])) {
    $_SESSION['cart'][$_SESSION['username']] = [];
}

// Calculate the total price
$total = 0;
foreach ($_SESSION['cart'][$_SESSION['username']] as $item) {
    $total += $item['price'] * $item['quantity'];
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your Basket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="MrTimeWebsite.css">
</head>
<body>
<?php include 'navbar.php'; ?>

<div class="container mt-5">
    <h5>Your Basket</h5>

    <?php if (!empty($_SESSION['cart'][$_SESSION['username']])): ?>
        <ul class="list-group">
            <?php foreach ($_SESSION['cart'][$_SESSION['username']] as $item_id => $item): ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        <strong><?php echo htmlspecialchars($item['name']); ?></strong>
                        <span class="text-muted"> - Quantity: <?php echo $item['quantity']; ?></span>
                    </div>
                    <span class="badge bg-primary rounded-pill">£<?php echo number_format($item['price'] * $item['quantity'], 2); ?></span>
                    <form method="POST" action="remove_from_cart.php" class="d-inline">
                        <input type="hidden" name="item_id" value="<?php echo $item_id; ?>">
                        <button type="submit" class="btn btn-secondary">Remove</button>
                    </form>
                </li>
            <?php endforeach; ?>
        </ul>
        <h5 class="mt-4">Total: £<?php echo number_format($total, 2); ?></h5>
        <a href="checkout.php" class="btn btn-success mt-3">Proceed to Checkout</a>
    <?php else: ?>
        <p>Your basket is empty.</p>
    <?php endif; ?>
</div>

</body>
</html>