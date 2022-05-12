<?php

session_start();
include_once "C:/xampp/htdocs/pharmaland/Controllers/ClientController.php";
include_once "C:/xampp/htdocs/pharmaland/Models/client.php";
include_once "C:/xampp/htdocs/pharmaland/Views/front/mailclient.php";

$client = new ClientController();


if (isset($_SESSION['loggedInClient'])) {
  if ($_SESSION['loggedInClient'] == "true") {
    header("Location: index.php");
  }
} else {
  $_SESSION['loggedInClient'] = "false";
}


if (isset($_POST['register'])) {
  $client->ajouterUtilisateur(new Client(
    $_POST['nom'],
    $_POST['prenom'],
    $_POST['email'],
    $_POST['date'],
    $_POST['numero'],
    md5($_POST['password']),
  ));

  send($_POST['email']);
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>EShopper - Bootstrap Shop Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="Free HTML Templates" name="keywords" />
  <meta content="Free HTML Templates" name="description" />

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />

  <!-- Libraries Stylesheet -->
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/style.css" rel="stylesheet" />
</head>

<body>
  <!-- Topbar Start -->
  <div class="container-fluid">
    <div class="row bg-secondary py-2 px-xl-5">
      <div class="col-lg-6 d-none d-lg-block">
        <div class="d-inline-flex align-items-center">
          <a class="text-dark" href="">FAQs</a>
          <span class="text-muted px-2">|</span>
          <a class="text-dark" href="">Help</a>
          <span class="text-muted px-2">|</span>
          <a class="text-dark" href="">Support</a>
        </div>
      </div>
      <div class="col-lg-6 text-center text-lg-right">
        <div class="d-inline-flex align-items-center">
          <a class="text-dark px-2" href="">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a class="text-dark px-2" href="">
            <i class="fab fa-twitter"></i>
          </a>
          <a class="text-dark px-2" href="">
            <i class="fab fa-linkedin-in"></i>
          </a>
          <a class="text-dark px-2" href="">
            <i class="fab fa-instagram"></i>
          </a>
          <a class="text-dark pl-2" href="">
            <i class="fab fa-youtube"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="row align-items-center py-3 px-xl-5">
      <div class="col-lg-3 d-none d-lg-block">
        <a href="" class="text-decoration-none">
          <h1 class="m-0 display-5 font-weight-semi-bold">
            <span class="text-primary font-weight-bold border px-3 mr-1">E</span>FarmaLand
          </h1>
        </a>
      </div>
      <div class="col-lg-6 col-6 text-left">
        <form action="">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for products" />
            <div class="input-group-append">
              <span class="input-group-text bg-transparent text-primary">
                <i class="fa fa-search"></i>
              </span>
            </div>
          </div>
        </form>
      </div>
      <div class="col-lg-3 col-6 text-right">
        <a href="" class="btn border">
          <i class="fas fa-heart text-primary"></i>
          <span class="badge">0</span>
        </a>
        <a href="" class="btn border">
          <i class="fas fa-shopping-cart text-primary"></i>
          <span class="badge">0</span>
        </a>
      </div>
    </div>
  </div>
  <!-- Topbar End -->

  <!-- Navbar Start -->
  <div class="container-fluid">
    <div class="row border-top px-xl-5">
      <div class="col-lg-3 d-none d-lg-block">
        <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px">
          <h6 class="m-0">Categories</h6>
          <i class="fa fa-angle-down text-dark"></i>
        </a>
        <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 1">
          <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
            <div class="nav-item dropdown">
              <a href="#" class="nav-link" data-toggle="dropdown">Dresses <i class="fa fa-angle-down float-right mt-1"></i></a>
              <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                <a href="" class="dropdown-item">Men's Dresses</a>
                <a href="" class="dropdown-item">Women's Dresses</a>
                <a href="" class="dropdown-item">Baby's Dresses</a>
              </div>
            </div>
            <a href="" class="nav-item nav-link">Shirts</a>
            <a href="" class="nav-item nav-link">Jeans</a>
            <a href="" class="nav-item nav-link">Swimwear</a>
            <a href="" class="nav-item nav-link">Sleepwear</a>
            <a href="" class="nav-item nav-link">Sportswear</a>
            <a href="" class="nav-item nav-link">Jumpsuits</a>
            <a href="" class="nav-item nav-link">Blazers</a>
            <a href="" class="nav-item nav-link">Jackets</a>
            <a href="" class="nav-item nav-link">Shoes</a>
          </div>
        </nav>
      </div>
      <div class="col-lg-9">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
          <a href="" class="text-decoration-none d-block d-lg-none">
            <h1 class="m-0 display-5 font-weight-semi-bold">
              <span class="text-primary font-weight-bold border px-3 mr-1">E</span>FarmaLand
            </h1>
          </a>
          <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav mr-auto py-0">
              <a href="index.php" class="nav-item nav-link">Home</a>
              <a href="shop.html" class="nav-item nav-link">Shop</a>
              <a href="detail.html" class="nav-item nav-link">Shop Detail</a>
              <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                <div class="dropdown-menu rounded-0 m-0">
                  <a href="cart.html" class="dropdown-item">Shopping Cart</a>
                  <a href="checkout.html" class="dropdown-item">Checkout</a>
                </div>
              </div>
              <a href="contact.php" class="nav-item nav-link active">Contact</a>
            </div>
            <div class="navbar-nav ml-auto py-0">
              <a href="" class="nav-item nav-link">Login</a>
              <a href="register.php" class="nav-item nav-link">Register</a>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
  <!-- Navbar End -->

  <!-- Contact Start -->
  <div class="container-fluid pt-5">
    <div class="text-center mb-4">
      <h2 class="section-title px-5">
        <span class="px-2">Creer un compte</span>
      </h2>
    </div>

    <div class="row px-xl-5 flex-column align-items-center justify-content-center">
      <div class="col-lg-7 mb-5">
        <div class="contact-form">
          <div id="success"></div>
          <form method="POST" name="sentMessage" id="contactForm" novalidate="novalidate">
            <div class="control-group">
              <input name="nom" type="text" class="form-control" id="nom" placeholder="nom..." required="required" data-validation-required-message="Entrez votre nom" />
              <p class="help-block text-danger"></p>
            </div>
            <div class="control-group">
              <input name="prenom" type="text" class="form-control" id="prenom" placeholder="prenom..." required="required" data-validation-required-message="Entrez votre prenom" />
              <p class="help-block text-danger"></p>
            </div>
            <div class="control-group">
              <input name="email" type="email" class="form-control" id="email" placeholder="email..." required="required" data-validation-required-message="Entrez votre email" />
              <p class="help-block text-danger"></p>
            </div>
            <div class="control-group">
              <input name="date" type="date" class="form-control" required="required" data-validation-required-message="placer votre date de naissance" />
              <p class="help-block text-danger"></p>
            </div>
            <div class="control-group">
              <input name="numero" type="number" maxlength="8" minlength="8" class="form-control" id="phone" placeholder="numero..." required="required" data-validation-required-message="Entrez un numero de 8 chiffre au min et max" />
              <p class="help-block text-danger"></p>
            </div>
            <div class="control-group">
              <input name="password" type="password" class="form-control" id="subject" placeholder="mot de passe" required="required" data-validation-required-message="mot de passe doit long et puissant" />
              <p class="help-block text-danger"></p>
            </div>
            <div>
              <button name="register" class="btn btn-primary py-2 px-4 w-100" type="submit">
                Send Inscrire
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Contact End -->
  <!-- Back to Top -->
  <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Contact Javascript File -->
  <script src="mail/jqBootstrapValidation.min.js"></script>
  <script src="js/auth.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>
</body>

</html>