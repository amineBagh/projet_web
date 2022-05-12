<?php
include_once "C:/xampp/htdocs/pharmaland/Controllers/AuthController.php";

session_start();
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == "true") {
  header("Location : user_affiche.php");
}

if (isset($_POST['seConnecter'])) {
  $email = $_POST['email'];
  $psswd = md5($_POST['password']);

  $login = new Auth($email, $psswd);
  $login->seConnecter();
  header("Location: ./user_affiche.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Pharmaland | Login </title>

  <!-- Bootstrap -->
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- Animate.css -->
  <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
  <div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
      <div class="animate form login_form">
        <section class="login_content">
          <form method="post">
            <h1>Login Form</h1>
            <div>
              <input name="email" type="text" class="form-control" placeholder="Email" required="" />
            </div>
            <div>
              <input name="password" type="password" class="form-control" placeholder="Password" required="" />
            </div>
            <div>
              <button name="seConnecter" class="btn btn-primary submit">Log in</button>
            </div>
            <div class="clearfix">
              <?php if (isset($message)) echo $message ?>
            </div>
      </div>
      </form>
      </section>
    </div>
  </div>
  </div>
</body>

</html>