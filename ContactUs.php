<?php
include 'config.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $first_name = $_POST['first_name'] ?? '';
    $last_name = $_POST['last_name'] ?? '';
    $email = $_POST['email'] ?? '';
    $comment = $_POST['comment'] ?? '';

    $stmt = $con->prepare("INSERT INTO ContactUs (first_name, last_name, email, comment) VALUES (?, ?, ?, ?)");

    if ($stmt === false) {
        die('Prepare failed: ' . htmlspecialchars($con->error));
    }

    $stmt->bind_param("ssss", $first_name, $last_name, $email, $comment);

    if ($stmt->execute()) {
       // echo "<script>alert('Thanks for your message! We will reply as soon as possible!'); window.location.href = 'ContactUs.php';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $con->close();
} else {
    // echo "Invalid request method.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="bootstrap.css">
    <script src="bootstrap.js"></script>
    <link rel="stylesheet" href="Betty'sBakery&Cafe.css">
    <script src="Betty'sBakery&Cafe.js"></script>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-warning" id="collapsibleNavbar" style="padding: 0.5rem 1rem; font-size: 14px; height: 120px;" >
        
    <div class="container">
        <img src="croissant-logo-vintage-bakery-iconretro-emblem-vector-13975875-removebg-preview (1).png" class="img-fluid" alt="Logo" width="150" height="150" >
          <a class="navbar-brand" href="index.php"><h3>Betty's<br>Bakery & Cafe</h3></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            
          </button>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="collapsibleNavbar">
            <div class="navbar-toggler-icon"></div>
          </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="index.php" class="nav-link"><h5>Home</h5></a></li>
          <li class="nav-item"><a href="menu.php" class="nav-link"><h5>Menu</h5></a></li>
          <li class="nav-item"><a href="rateus.php" class="nav-link"><h5>Rate Us</h5></a></li>
          <li class="nav-item "><a href="about.php" class="nav-link"><h5>About</h5></a></li>
          <li class="nav-item active"><a href="ContactUs.php" class="nav-link"><h5>Contact</h5></a></li>
        </ul>
      </div>
      </div>
  </nav>
<!-- END nav -->

<!--Contact us-->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8" style="background-image: url(contactus.png);">
            <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post" class="was-validated" onsubmit="alert('Thanks for your comment! We will reply as soon as possible!')">
                <div class="form-group">
                    <label for="fname">First name:</label>
                    <input type="text" class="form-control" name="first_name" id="fname" placeholder="Enter your first name" required style="width: 40%;">
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">Please provide your full name</div>

                    <label for="lname">Last name:</label>
                    <input type="text" class="form-control" name="last_name" id="lname" placeholder="Enter your last name" required style="width: 40%;">
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">Please provide your full name</div>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required style="width: 50%;">
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">Invalid email</div>
                </div>
                <div class="form-group">
                    <label for="comment">How can we help you?</label>
                    <textarea class="form-control form-control-lg" name="comment" id="comment" placeholder="Type your comments here" required></textarea>
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">Please fill out this section</div>
                </div>
                <div class="form-group form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="terms" required> I agree to all terms & conditions
                        <div class="valid-feedback">Thanks!</div>
                        <div class="invalid-feedback">Agree to all terms & conditions</div>
                    </label>
                </div>
                <button type="submit" class="btn btn-warning">Submit</button>
                <br><br>
            </form>
        </div>

        <div class="col-md-4" style="background-image: url(contactus.png);">
            <img src="contact(1).png" class="img-fluid" alt="Image">
        </div>
    </div>
</div>

   <!--Contact us-->


<!--footer-->
<div class="row ">
    <div class="col">
        <footer class="footer mt-auto py-3 bg-warning container-fluid ">
            <div class="container ">
                <div class="row">
                    <div class="col-md-3">
                        <h5>About</h5>
                        <ul class="list-unstyled ">
                            <li><a href="about.php">Our Story</a></li>
                            <li><a href="about.php">Mission & Vision</a></li>
                            <li><a href="#">Our goal is to serve pastry with love </a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h5>Contact Us</h5>
                        <ul class="list-unstyled">
                            <li>Email: bettysbakeryandcafe@gmail.com</li>
                            <li>Phone: +1234567890</li>
                            <li>Address: 187 Rue de Grenelle, 75007 Paris, France</li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h5>Opening Hours</h5>
                        <p>Mon-Wed: 7am - 6pm</p>
                        <p>Tue-Thu: 9am - 7pm</p>
                        <p>Sat-Sun: Closed</p>
                    </div>
                    <div class="col-md-3">
                        <h5>Follow Us</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Instagram</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <hr>
                        <p class="text-center">&copy; 2024 Betty's Bakery & Cafe. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

    
</body>
</html>