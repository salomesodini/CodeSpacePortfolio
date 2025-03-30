<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
require 'config/connect_db.php'; // Include database connection file

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = strtolower($_POST['username']); // Convert to lowercase for case-insensitive comparison
    $pass = $_POST['password'];

    $stmt = $conn->prepare("SELECT password FROM users WHERE LOWER(username) = ?");
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("s", $user);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($hashed_password);

    if ($stmt->num_rows > 0) {
        $stmt->fetch();
        if (password_verify($pass, $hashed_password)) {
            $_SESSION['username'] = $user;
            header("Location: MrTimeWebsiteProductPage.php");
            exit();
        } else {
            error_log("Password verification failed.");
            echo "<script>alert('Invalid password.');</script>";
        }
    } else {
        error_log("No user found with username: $user");
        echo "<script>alert('No user found.');</script>";
    }

    $stmt->close();
}

$conn->close();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mk Time Watches</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="MrTimeWebsite.css">
  </head>
  <body class="d-flex flex-column min-vh-100">
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
      <br>
    <div class="container">
      <div class="row">
        <div class="col-md-6 mb-4">
          <div class="form">
            <h5>Welcome back!</h5>
            <br>
            <form method="POST" action="">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="username" id="floatingInput" placeholder="Username" required>
                <label for="floatingInput">Username</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
              </div>
              <br>
              <button id="loginButton" type="submit" class="btn btn-secondary btn-lg">Login</button>
            </form>
          </div>
          <br>
        </div>
        <div class="col-md-6 mb-4">
            <img src="images/orologio15 copy.jpg" class="img-fluid lighter-image" alt="Responsive image">
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
                <h6> 234 Street Name, City Name, Earth
                <br>
                 +123 456 7890
                <br>
                 mrtimeswatches@clock.com </h6>
    </div>
    <div class="col-md-4">
        <h5>Opening hours</h5>
        <br>
        <h6> Monday - Friday: 9am - 5pm
        <br>
         Saturday: 10am - 4pm
        <br>
         Sunday: Closed </h6>
    </div>
    <div class="col-md-4">
        <h5>Follow us</h5>
        <br>
        <h6> <a href="#">Facebook</a>
        <br>
         <a href="#">Instagram</a>
        <br>
         <a href="#">Twitter</a> </h6>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  </body>
</html>
