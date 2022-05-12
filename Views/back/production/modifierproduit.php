<?php

include_once "C:/xampp/htdocs/pharmaland/Models/produit.php";
include_once "C:/xampp/htdocs/pharmaland/Models/categorie.php";
include_once "C:/xampp/htdocs/pharmaland/Controllers/categorieC.php";
include_once "C:/xampp/htdocs/pharmaland/Controllers/produitC.php";

$produitC = new produitC();

$categories = $produitC->afficher_cat();




///////////////////       PRODUIT        /////////////////////

$produitC = new produitC();
$listeProduit = $produitC->afficherProduit();



if (isset($_POST['modifier'])) {


  $id = $_POST['id_produit'];
  $titre = $_POST['titre'];
  $img = $_POST['img'];
  $descr = $_POST['descr'];
  $prix = $_POST['prix'];




  $produit = new produit($titre, $img, $descr, $prix, 0);
  $produitC->modifierproduit($produit, $_POST['id_produit']);
}

///////////////////       PRODUIT        /////////////////////



?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>DataTables | Gentelella</title>

  <!-- Bootstrap -->
  <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- iCheck -->
  <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  <!-- Datatables -->

  <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>amine projet !</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="images/photo_amine.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>Amine Baghouli</h2>
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
                  <img src="images/photo_amine.jpg" alt="">Amine Baghouli
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
                      <span class="image"><img src="images/photo_amine.jpg" alt="Profile Image" /></span>
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
                      <span class="image"><img src="images/photo_amine.jpg" alt="Profile Image" /></span>
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
                      <span class="image"><img src="images/photo_amine.jpg" alt="Profile Image" /></span>
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
                      <span class="image"><img src="images/photo_amine.jpg" alt="Profile Image" /></span>
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
              <h3>Users <small>Some examples to get you started</small></h3>
            </div>

            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-secondary" type="button">Go!</button>
                  </span>
                </div>
              </div>
            </div>
          </div>

          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Default Example <small>Users</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Settings 1</a>
                        <a class="dropdown-item" href="#">Settings 2</a>
                      </div>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="card-box table-responsive">
                        <p class="text-muted font-13 m-b-30">
                          DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>
                        </p>

                        <h4 class="card-title"> modification paiement </h4>

                        <?php
                        if (($_GET['id_produit'])) {
                          $result = $produitC->produit_details($_GET['id_produit']);
                          foreach ($result as $row) {

                        ?>

                            <form class="form-container" method="post">


                              <tr>

                                <th scope="col">id <br></th>
                                <th><input type="number" name="id_produit" value="<?php echo $row['id_produit'] ?>" readonly class="form-control"></th>

                                <br>


                              </tr>
                              <tr>

                                <th scope="col">titre <br></th>
                                <th><input type="text" name="titre" value="<?php echo $row['titre'] ?>"></th>

                                <br>


                              </tr>

                              <tr>

                                <th scope="col">img <br></th>
                                <th> <input type="file" class="form-control" name="img" placeholder="img" id="img" required="true" accept="images/*">
                                </th>

                                <br>


                              </tr>




                              <tr>

                                <th scope="col">descr <br></th>
                                <th><input type="text" name="descr" value="<?php echo $row['descr'] ?>"></th>

                                <br>


                              </tr>


                              <tr>

                                <th scope="col">prix <br></th>
                                <th><input type="text" name="prix" value="<?php echo $row['prix'] ?>"></th>

                                <br>


                              </tr>





                              <tr>
                                <br>

                                <th><input type="submit" class="btn btn-info" name="modifier" value="modifier">
                                  <input type="hidden" name="id_ini" value="<?php echo $row['id_produit'] ?>">
                                </th>
                                <a href="produits.php " class="btn btn-danger"> Retour </a>
                              </tr>

                            </form>
                        <?php
                          }
                        }
                        ?>

                      </div>
                    </div>
                  </div>
                </div>


                <!--     Input Ajout Categorie   -->





                <!--                                   PRODUIT                                           -->
                <div class="card-box table-responsive">







                  <center><img src="" height="300px" width="300px" style="display: none" onclick="$(this).hide() " id="image_div" class=" w3-animate-zoom"></center>
                  <!--     Input Ajout Produit   -->




                  <!--
              
                </div>
              </div>
            </div>
          </div>
        </div> -->
                  <!-- /page content -->

                  <!-- footer content -->
                  <!-- <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer> -->
                  <!-- /footer content -->
                  <!-- </div>
    </div> -->

                  <!-- jQuery -->
                  <script type="text/javascript">
                    function verif() {
                      if (f.categorie.value == "") {
                        alert("il faut au moins une categorie,s'il n'existe pas veuillez en ajoutez");
                        return false;
                      }
                      return true;

                    }
                  </script>

                  <script src="../vendors/jquery/dist/jquery.min.js"></script>
                  <!-- Bootstrap -->
                  <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
                  <!-- FastClick -->
                  <script src="../vendors/fastclick/lib/fastclick.js"></script>
                  <!-- NProgress -->
                  <script src="../vendors/nprogress/nprogress.js"></script>
                  <!-- iCheck -->
                  <script src="../vendors/iCheck/icheck.min.js"></script>
                  <!-- Datatables -->
                  <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
                  <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
                  <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
                  <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
                  <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
                  <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
                  <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
                  <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
                  <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
                  <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
                  <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
                  <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
                  <script src="../vendors/jszip/dist/jszip.min.js"></script>
                  <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
                  <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

                  <!-- Custom Theme Scripts -->
                  <script src="../build/js/custom.min.js"></script>

</body>

</html>