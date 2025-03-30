<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: MrTimeWebsiteForm.php");
    exit();
}

// Debugging: Display the logged-in username
echo "Welcome, " . htmlspecialchars($_SESSION['username']) . "!<br>";

require 'config/connect_db.php'; // Include database connection file

if (isset($_GET['added']) && $_GET['added'] === 'true') {
    echo "<script>alert('Item added to the basket successfully!');</script>";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action']) && $_POST['action'] === 'add') {
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

        echo "<script>alert('Item added to basket!');</script>";
    } elseif (isset($_POST['action']) && $_POST['action'] === 'remove') {
        $item_id = intval($_POST['item_id']); // Get the item ID from the form

        // Check if the item exists in the cart
        if (isset($_SESSION['cart'][$_SESSION['username']][$item_id])) {
            // Decrease the quantity by one
            if ($_SESSION['cart'][$_SESSION['username']][$item_id]['quantity'] > 1) {
                $_SESSION['cart'][$_SESSION['username']][$item_id]['quantity']--;
            } else {
                // Remove the item if the quantity is 1
                unset($_SESSION['cart'][$_SESSION['username']][$item_id]);
            }
        }
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MK TIME WATCHES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="MrTimeWebsite.css">
  </head>
  <body class="d-flex flex-column min-vh-100">
    <main class="flex-grow-1">
        <br> 
        <h1>MK TIME WATCHES</h1>
        <br> 
        <nav class="navbar navbar-expand-lg bg-light">
            <nav class="navbar" style="background-color: whitesmoke">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Our collections
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="MrTimeWebsiteProductPage.html">Men</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="MrTimeWebsiteUnderConstruction.html">Women</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="MrTimeWebsiteUnderConstruction.html">Children</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="MrTimeWebsiteUnderConstruction.html">Sales</a></li>
                    </ul>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Get in touch
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="MrTimeWebsiteUnderConstruction.html">Email us directly</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="MrTimeWebsiteUnderConstruction.html">Physical shops that sell our products</li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="MrTimeWebsiteRefund.html">Refund</a>
                  </li>
                  <li class="nav-item">
                   <a class="nav-link text-danger" href="logout.php">Logout</a> <!-- Added Logout -->
                  </li>
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
            </nav>
          </nav>
          <br>
          <br>
        <div class="container mt-5">
            <br>
            <h2>Your Basket</h2>
            <br>
            <?php if (!empty($_SESSION['cart'][$_SESSION['username']])): ?>
                <ul class="list-group">
                    <?php foreach ($_SESSION['cart'][$_SESSION['username']] as $item_id => $item): ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <strong><?php echo htmlspecialchars($item['name']); ?></strong>
                                <span class="text-muted"> - Quantity: <?php echo $item['quantity']; ?></span>
                            </div>
                            <span class="badge bg-primary rounded-pill">£<?php echo number_format($item['price'] * $item['quantity'], 2); ?></span>
                            <form method="POST" action="MrTimeWebsiteProductPage.php" class="d-inline">
                                <input type="hidden" name="item_id" value="<?php echo $item_id; ?>">
                                <button type="submit" name="action" value="remove" class="btn btn-secondary">Remove</button>
                            </form>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p>Your basket is empty.</p>
            <?php endif; ?>
            <br>
            <br>
            <a href="cart.php" class="btn btn-primary">Go to check out!</a>
        </div>
        <br>
        <h2>Men Collection</h2>
        <div class="container text-center mb-5">
            <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                <?php
                $query = "SELECT * FROM products";
                $result = $conn->query($query);

                if ($result && $result->num_rows > 0):
                    while ($row = $result->fetch_assoc()): ?>
                        <div class="col">
                            <div class="card h-100 d-flex flex-column">
                                <img src="images/<?php echo htmlspecialchars($row['item_img']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($row['item_name']); ?>">
                                <div class="card-body flex-grow-1">
                                    <h5 class="card-title"><?php echo htmlspecialchars($row['item_name']); ?></h5>
                                    <p class="card-text"><?php echo htmlspecialchars($row['item_desc']); ?></p>
                                    <p class="card-text">Price: £<?php echo number_format($row['item_price'], 2); ?></p>
                                </div>
                                <div class="card-footer">
                                    <form method="POST" action="added.php">
                                        <input type="hidden" name="item_id" value="<?php echo $row['item_id']; ?>">
                                        <button type="submit" name="action" value="add" class="btn btn-primary w-100">Add to Basket</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;
                else: ?>
                    <p>No products available.</p>
                <?php endif; ?>
            </div>
        </div>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>