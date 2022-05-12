<?PHP
include_once 'C:/xampp/htdocs/pharmaland/Controllers/LivreurC.php';
include_once 'C:/xampp/htdocs/pharmaland/Controllers/LivraisonC.php';
$livreurC = new LivreurC();


$nom = $_GET['nom'];
$listeLivreur = $livreurC->Livreur($nom);


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>DATABASE! | </title>

  <!-- Bootstrap -->
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- bootstrap-daterangepicker -->
  <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
  <!-- bootstrap-datetimepicker -->
  <link href="../vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
  <!-- Ion.RangeSlider -->
  <link href="../vendors/normalize-css/normalize.css" rel="stylesheet">
  <link href="../vendors/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
  <link href="../vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
  <!-- Bootstrap Colorpicker -->
  <link href="../vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">

  <link href="../vendors/cropper/dist/cropper.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
  <!--FORM-->











  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Pharmaland!</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
       
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>Rayene ben romdhane</h2>
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
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
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
            <ul class=" navbar-right">
              <li class="nav-item dropdown open" style="padding-left: 15px;">
                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                  <!--   <img src="images/img.jpg" alt=""> -->John Doe
                </a>
                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="javascript:;"> Profile</a>
                  <a class="dropdown-item" href="javascript:;">
                    <span class="badge bg-red pull-right">50%</span>
                    <span>Settings</span>
                  </a>
                  <a class="dropdown-item" href="javascript:;">Help</a>
                  <a class="dropdown-item" href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
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
                        Film festivals used to be do-or-die moments for movie makers. They were where...
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
                        Film festivals used to be do-or-die moments for movie makers. They were where...
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
                        Film festivals used to be do-or-die moments for movie makers. They were where...
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
                        Film festivals used to be do-or-die moments for movie makers. They were where...
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
              <h3>livreur</h3>
            </div>


          </div>

          <div class="clearfix"></div>

          <div class="row">
            <!-- form input -->
            <div class="col-md-6 col-sm-12  ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>afficher livreur</h2>

                  <div class="clearfix"></div>
                </div>
                <form action="" method="POST">
                  <input type="text" name="nom1">
                  <input type="submit" name="recherche" value="Recherche" />
                </form>

                <div class="x_title">
                  <a href="trilivreur.php" style="font-size: 20px;"> tri</a>
                </div>

                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                  <thead>
                    <tr style="color:purple;" style="font-size:70;">
                      <th style="color:purple;" style="font-size:70;">ID</th>
                      <th style="color:purple;" style="font-size:70;">Nom</th>
                      <th style="color:purple;" style="font-size:70;">Prenom</th>
                      <th style="color:purple;" style="font-size:70;">Cin</th>
                      <th style="color:purple;" style="font-size:70;">Numero de telephone</th>

                      <th style="color:purple;" style="font-size:70;">supprimer</th>
                      <th style="color:purple;" style="font-size:70;">modifier</th>
                    </tr>
                  </thead>

                  <?PHP
                  foreach ($listeLivreur as $livreur) {


                  ?>
                    <tr>
                      <td> <a href=" "> <?PHP echo $livreur['id'];  ?> </a></td>
                      <td><?PHP echo $livreur['nom']; ?></td>
                      <td><?PHP echo $livreur['prenom']; ?></td>
                      <td><?PHP echo $livreur['cin']; ?></td>
                      <td><?PHP echo $livreur['num_tel']; ?></td>

                      <td>
                        <form method="POST" action="supprimerlivreur.php">
                          <input type="submit" name="supprimer" value="supprimer">
                          <input type="hidden" value="<?PHP echo $livreur['id']; ?>" name="id">
                        </form>
                      </td>
                      <td><a href="modifierlivreur1.php?id=<?PHP echo $livreur['id']; ?>">
                          Modifier</a></td>
                    </tr>
                  <?PHP
                  }
                  ?>
                </table>



                </form>
              </div>
            </div>
          </div>
          <!-- /form input mask -->




        </div>

        <!-- jQuery -->
        <script src="../vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <!-- FastClick -->
        <script src="../vendors/fastclick/lib/fastclick.js"></script>
        <!-- NProgress -->
        <script src="../vendors/nprogress/nprogress.js"></script>
        <!-- bootstrap-daterangepicker -->
        <script src="../vendors/moment/min/moment.min.js"></script>
        <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
        <!-- bootstrap-datetimepicker -->
        <script src="../vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
        <!-- Ion.RangeSlider -->
        <script src="../vendors/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
        <!-- Bootstrap Colorpicker -->
        <script src="../vendors/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
        <!-- jquery.inputmask -->
        <script src="../vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
        <!-- jQuery Knob -->
        <script src="../vendors/jquery-knob/dist/jquery.knob.min.js"></script>
        <!-- Cropper -->
        <script src="../vendors/cropper/dist/cropper.min.js"></script>

        <!-- Custom Theme Scripts -->
        <script src="../build/js/custom.min.js"></script>

        <!-- Initialize datetimepicker -->
        <script type="text/javascript">
          $(function() {
            $('#myDatepicker').datetimepicker();
          });

          $('#myDatepicker2').datetimepicker({
            format: 'DD.MM.YYYY'
          });

          $('#myDatepicker3').datetimepicker({
            format: 'hh:mm A'
          });

          $('#myDatepicker4').datetimepicker({
            ignoreReadonly: true,
            allowInputToggle: true
          });

          $('#datetimepicker6').datetimepicker();

          $('#datetimepicker7').datetimepicker({
            useCurrent: false
          });

          $("#datetimepicker6").on("dp.change", function(e) {
            $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
          });

          $("#datetimepicker7").on("dp.change", function(e) {
            $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
          });
        </script>


</body>

</html>