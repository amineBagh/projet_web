<?php

include_once "C:/xampp/htdocs/pharmaland/Controllers/UserController.php";
include_once "C:/xampp/htdocs/pharmaland/Controllers/AuthController.php";

session_start();
$_id = $_GET['_id'];
$edit_user = new UserController();

$logout = new Auth("", "");

if ($_SESSION['loggedIn'] == "false") {
    header("Location: login.php");
}

if (isset($_POST['logout'])) {
    $logout->seDeconnecter();
}

$resGet =  $edit_user->recupererAdmin($_id);

if (isset($_POST['annuler'])) {
    header("Location: ./user_affiche.php ");
} else {
    if (isset($_POST['modifier'])) {

        $password   = md5($_POST['password']); // on a ajouter un cryptage pour le mot de passe md5()
        $password2  = md5($_POST['password2']);

        if ($password == $password2) {
            $edit_user->modifierAdmin($_id, new User(
                $nom        = $_POST['firstName'],
                $prenom     = $_POST['lastName'],
                $email      = $_POST['email'],
                $date       = $_POST['date'],
                $password   = md5($_POST['password']) // on a ajouter un cryptage pour le mot de passe md5()
            ));
            header("Location: ./user_affiche.php ");
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Pharmaland | Ajouter </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet" />
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet" />

    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" />
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" />

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet" />
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0">
                        <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Pharmaland</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="images/img.jpg" alt="..." class="img-circle profile_img" />
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2><?php echo $edit_user->recupererAdmin($_SESSION['uuid'])['nom'] . " " . $edit_user->recupererAdmin($_SESSION['uuid'])['prenom']  ?></h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <!-- utilisateur -->
                                <li>
                                    <a><i class="fa fa-user"></i> Admin
                                        <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li>
                                            <a href="./user_affiche.php">Afficher Administrateur</a>
                                        </li>
                                        <li>
                                            <a href="./user_add.php">Ajouter Administrateur</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a><i class="fa fa-user"></i> Client
                                        <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li>
                                            <a href="./client_affiche.php">Afficher Client</a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- livraison -->
                                <li>
                                    <a><i class="fa fa-home"></i>livraison
                                        <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="ajouterlivreur.html">ajouter livreur</a></li>

                                        <li>
                                            <a href="afficherlivreur1.php">afficherlivreur</a>
                                        </li>

                                        <li>
                                            <a href="afficherlivraison.php">afficherlivraison</a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- produit -->
                                <li>
                                    <a><i class="fa fa-home"></i>Produits
                                        <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li>
                                            <a href="produits.php">Produit</a>
                                        </li>
                                        <li>
                                            <a href="categorie.php">categorie</a>
                                        </li>
                                        <li>
                                            <a href="offres.php">offres</a>
                                        </li>
                                        <li>
                                            <a href="cartes.php">cartes</a>
                                        </li>
                                        <li>
                                            <a href="form.php">form</a>
                                        </li>
                                    </ul>

                                </li>
                                        <!--form/commentaire-->
			  <li>
                  <a><i class="fa fa-home"></i>form
                    <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="affichagecommentaire.php">afficher commentaire</a></li>

                    <li>
                      <a href="ajoutermessage.php">ajouter message</a>
                    </li>

               
                    </li>
                  </ul>
                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="./login.php">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class="navbar-right">
                            <li class="nav-item dropdown open" style="padding-left: 15px">
                                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">

                                </a>
                                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="javascript:;"> Profile</a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <span class="badge bg-red pull-right">50%</span>
                                        <span>Settings</span>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">Help</a>
                                    <form action="" method="post">
                                        <button type="submit" name="logout" class="dropdown-item"><i class="fa fa-sign-out pull-right"></i> Log Out</button>
                                    </form>
                                </div>
                            </li>

                            <li role="presentation" class="nav-item dropdown open">
                                <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge bg-green">6</span>
                                </a>
                                <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                                    <li class="nav-item">
                                        <a class="dropdown-item">
                                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie
                                                makers. They were where...
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item">
                                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie
                                                makers. They were where...
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item">
                                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie
                                                makers. They were where...
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item">
                                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie
                                                makers. They were where...
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <div class="text-center">
                                            <a class="dropdown-item">
                                                <strong>See All Alerts</strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Modifier Utilisateur</h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">
                                <div class="x_content">
                                    <form class="" action="" method="post" novalidate>
                                        <span class="section">Information personelle</span>
                                        <!-- nom -->
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">nom<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="4" data-validate-words="1" name="lastName" placeholder="ex. f. Kennedy" required="required" value="<?php echo $resGet['prenom'] ?>" />
                                            </div>
                                        </div>
                                        <!-- prenom -->
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">prenom<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="4" data-validate-words="1" name="firstName" placeholder="ex. John" required="required" value="<?php echo $resGet['nom'] ?>" />
                                            </div>
                                        </div>
                                        <!-- courier electronique -->
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">email<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" name="email" class='email' required="required" type="email" value="<?php echo $resGet['email'] ?>" />
                                            </div>
                                        </div>
                                        <!-- date de naissance -->
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Date<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" class='date' type="date" name="date" required='required' value="<?php echo date("Y-m-d", strtotime($resGet['date'])) ?>">
                                            </div>
                                        </div>
                                        <!-- mot de passe -->
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Password<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" type="password" id="password1" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}" title="Minimum 8 Characters Including An Upper And Lower Case Letter, A Number And A Unique Character" required />

                                                <span style="position: absolute;right:15px;top:7px;" onclick="hideshow()">
                                                    <i id="slash" class="fa fa-eye-slash"></i>
                                                    <i id="eye" class="fa fa-eye"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- verfier mot de passe -->
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Repeat password<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" type="password" name="password2" data-validate-linked='password' required='required' />
                                            </div>
                                        </div>
                                </div>
                                <div class="ln_solid">
                                    <div class="form-group">
                                        <div class="col-md-6 offset-md-3">
                                            <button type='submit' name="modifier" class="btn btn-primary">Modifier</button>
                                            <button type='reset' name="annuler" class="btn btn-danger">Reset</button>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Pharmaland
                <a href="https://colorlib.com">Colorlib</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="../vendors/validator/multifield.js"></script>
    <script src="../vendors/validator/validator.js"></script>

    <!-- Javascript functions	-->
    <script>
        function hideshow() {
            var password = document.getElementById("password1");
            var slash = document.getElementById("slash");
            var eye = document.getElementById("eye");

            if (password.type === 'password') {
                password.type = "text";
                slash.style.display = "block";
                eye.style.display = "none";
            } else {
                password.type = "password";
                slash.style.display = "none";
                eye.style.display = "block";
            }

        }
    </script>

    <script>
        // initialize a validator instance from the "FormValidator" constructor.
        // A "<form>" element is optionally passed as an argument, but is not a must
        var validator = new FormValidator({
            "events": ['blur', 'input', 'change']
        }, document.forms[0]);
        // on form "submit" event
        document.forms[0].onsubmit = function(e) {
            var submit = true,
                validatorResult = validator.checkAll(this);
            console.log(validatorResult);
            return !!validatorResult.valid;
        };
        // on form "reset" event
        document.forms[0].onreset = function(e) {
            validator.reset();
        };
        // stuff related ONLY for this demo page:
        $('.toggleValidationTooltips').change(function() {
            validator.settings.alerts = !this.checked;
            if (this.checked)
                $('form .alert').remove();
        }).prop('checked', false);
    </script>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- validator -->
    <!-- <script src="../vendors/validator/validator.js"></script> -->

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
</body>

</html>