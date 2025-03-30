<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to the login page if not logged in
    header("Location: MrTimeWebsiteForm.php");
    exit();
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mr Time Watches</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="MrTimeWebsite.css">
  </head>
  <body class="d-flex flex-column min-vh-100">
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
                <a class="nav-link active" aria-current="page" href="MrTimeWebsite.html">Home</a>
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
                <a class="nav-link" href="MrTimeWebsiteRegister.php">Register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="MrTimeWebsiteForm.php">Login</a>
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h4>Welcome to our shop, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h4>
                <a href="logout.php" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </div>
    <br>
    <br>
<h2> Men collection</h2>
    <br>
    <br>
    <div class="container text-center">
        <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
          <div class="col">
            <div class="card">
              <img src="images/orologio1 copy.jpg" class="card-img-top" alt="Orologio UNO">
              <div class="card-body">
                <p class="card-text">Text for image 1</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="images/orologio2.jpg" class="card-img-top" alt="Image 2">
              <div class="card-body">
                <p class="card-text">Text for image 2</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="images/orologio3.jpg" class="card-img-top" alt="Image 3">
              <div class="card-body">
                <p class="card-text">Text for image 3</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="images/orologio4 copy.jpg" class="card-img-top" alt="Image 4">
              <div class="card-body">
                <p class="card-text">Text for image 4</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="images/orologio5.jpg" class="card-img-top" alt="Image 5">
              <div class="card-body">
                <p class="card-text">Text for image 5</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="images/orologio6.jpg" class="card-img-top" alt="Image 6">
              <div class="card-body">
                <p class="card-text">Text for image 6</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="images/orologio7.jpg" class="card-img-top" alt="Image 7">
              <div class="card-body">
                <p class="card-text">Text for image 7</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="images/orologio8.jpg" class="card-img-top" alt="Image 8">
              <div class="card-body">
                <p class="card-text">Text for image 8</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="images/orologio9.jpg" class="card-img-top" alt="Image 9">
              <div class="card-body">
                <p class="card-text">Text for image 9</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="images/orologio10.jpg" class="card-img-top" alt="Image 10">
              <div class="card-body">
                <p class="card-text">Text for image 10</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="images/orologio11.jpeg" class="card-img-top" alt="Image 11">
              <div class="card-body">
                <p class="card-text">Text for image 11</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="images/orologio12.jpg" class="card-img-top" alt="Image 12">
              <div class="card-body">
                <p class="card-text">Text for image 12</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="images/orologio13copy.jpg" class="card-img-top" alt="Image 13">
              <div class="card-body">
                <p class="card-text">Text for image 13</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="images/orologio14 copy.jpg" class="card-img-top" alt="Image 14">
              <div class="card-body">
                <p class="card-text">Text for image 14</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="images/orologio15 copy.jpg" class="card-img-top" alt="Image 15">
              <div class="card-body">
                <p class="card-text">Text for image 15</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    <br>
    <br>
    <div class="footer">
        <div class="container">
            <div class="row">
            <div class="col-md-4">
                <h5>Contact details</h5>
                <br>
                <p> 234 Street Name, City Name, Earth
                <br>
                 +123 456 7890
                <br>
                 mrtimeswatches@clock.com </p>
    </div>
    <div class="col-md-4">
        <h5>Opening hours</h5>
        <br>
        <p> Monday - Friday: 9am - 5pm
        <br>
         Saturday: 10am - 4pm
        <br>
         Sunday: Closed </p>
    </div>
    <div class="col-md-4">
        <h5>Follow us</h5>
        <br>
        <p> <a href="#">Facebook</a>
        <br>
         <a href="#">Instagram</a>
        <br>
         <a href="#">Twitter</a> </p>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  </body>
</html>

// Initialize the basket in the session if it doesn't exist
if (!isset($_SESSION['basket'])) {
    $_SESSION['basket'] = [];
}

// Handle add/remove actions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $item_id = intval($_POST['item_id']);
    if (isset($_POST['action']) && $_POST['action'] === 'add') {
        // Add item to the basket
        if (!in_array($item_id, $_SESSION['basket'])) {
            $_SESSION['basket'][] = $item_id;
        }
    } elseif (isset($_POST['action']) && $_POST['action'] === 'remove') {
        // Remove item from the basket
        $_SESSION['basket'] = array_diff($_SESSION['basket'], [$item_id]);
    }
}

// Fetch products from the database
$query = "SELECT * FROM products";
$result = $conn->query($query);

if (!$result) {
    die("Query failed: " . $conn->error);
}