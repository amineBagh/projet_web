<?php

include_once "C:/xampp/htdocs/pharmaland/models/produit.php";
include_once "C:/xampp/htdocs/pharmaland/models/categorie.php";
include_once "C:/xampp/htdocs/pharmaland/controllers/categorieC.php";
include_once "C:/xampp/htdocs/pharmaland/controllers/produitC.php";

$produitC = new produitC();

$categories = $produitC->afficher_cat();
$categories2 = $produitC->afficher_cat();




///////////////////       PRODUIT        /////////////////////

$produitC = new produitC();
$listeProduit = $produitC->afficherProduit();


if (isset($_POST['ajout-produit'])) {

  $titre = $_POST['titre'];

  $image = $_POST['img'];
  $description = $_POST['descr'];

  $prix = $_POST['prix'];

  $categorie = $_POST['categorie'];
  $jaime = 0;



  $produit = new produit($titre, $image, $description, $prix, $jaime);
  $produitC = new produitC();
  $produitC->ajouterproduit($produit, $categorie);

  //mail($Mail,"Recrutement"," bonjour $Nom $Prenom Vous avez été recruté ");

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
              <img src="images/img.jpg" alt="..." class="img-circle profile_img">
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

                      </div>
                    </div>
                  </div>
                </div>


                <!--     Input Ajout Categorie   -->





                <!--                                   PRODUIT                                           -->
                <div class="card-box table-responsive">


                  <div class="card-body">
                    <h4 class="card-title">RECHERCHE produits</h4>
                    <p class="card-description">
                      tapez <code>le critere</code> souhaité pour filtrer vos evenements
                    </p>
                    <form class="form-inline" action="#" method="post">

                      <input type="text" class="form-control mb-2 mr-sm-2" placeholder="titre" name="titre">




                      <input type="text" class="form-control mb-2 mr-sm-2" placeholder="descr" name="descr">

                      <input type="text" class="form-control mb-2 mr-sm-2" placeholder="prix" name="prix">





                      <select class="form-control mb-2 mr-sm-2" placeholder="categorie" name="categorier">
                        <option value="">categorie</option>
                        <?php foreach ($categories2 as $row) { ?>
                          <option value="<?php echo $row['nom_cat'] ?>"><?php echo $row['nom_cat'] ?></option>
                        <?php } ?>
                      </select>

                      <div class="form-check mx-sm-2">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" name="tridater">
                          tri par titre
                        </label>
                      </div>

                      <button type="submit" class="btn btn-primary mb-2" style="margin-left: 790px" name="rechercher">rechercher</button>
                    </form>
                  </div>

                  <?php

                  if (isset($_POST['rechercher'])) {

                    $titre = $_POST['titre']; //est
                    $descr = $_POST['descr'];
                    $prix = $_POST['prix'];
                    $categorier = $_POST['categorier'];

                    $tridater = "";



                    if (isset($_POST['tridater'])) {
                      $tridater = $_POST['tridater'];
                    }




                    $listeProduit = $produitC->rechercherproduit($titre, $descr, $prix, $categorier, $tridater);
                  }
                  ?>


                  <!--     Input Ajout Produit   -->
                  <form class="form-container" method="POST">

                    <label for="titre">titre</label>
                    <input type="text" class="form-control" name="titre" placeholder="titre" id="titre" required="true">


                    <label for="img">image</label>
                    <input type="file" class="form-control" name="img" placeholder="img" id="img" required="true" accept="images/*">

                    <label for="descr">description</label>
                    <input type="text" class="form-control" name="descr" placeholder="descr" id="descr" required="true">


                    <label for="prix">prix</label>
                    <input type="text" class="form-control" name="prix" placeholder="prix" id="prix" required="true">


                    <label for="categorie">categorie</label>
                    <select name="categorie" id="categorie" class="form-control">
                      <?php foreach ($categories as $row) { ?>
                        <option value="<?php echo $row['id_cat'] ?>"><?php echo $row['nom_cat'] ?></option>
                      <?php } ?>
                    </select>

                    <br>
                    <button name="ajout-produit" type="submit" class="btn btn-info">ajouter produit</button>

                  </form>



                  <table id="datatable" class="table table-striped table-bordered" style="width:100%">

                    <thead>
                      <tr>
                        <th>id_produit</th>
                        <th>titre</th>
                        <th>description</th>
                        <th>image</th>
                        <th>prix</th>
                        <th>categorie</th>
                        <th>jaime</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php foreach ($listeProduit as $produit) : ?>
                        <tr>

                          <td> <?= $produit->id_produit; ?> </td>
                          <td> <?= $produit->titre; ?> </td>
                          <td> <?= $produit->descr; ?> </td>
                          <td><img src="images/<?= $produit->img; ?>" title="cliquez pour agrandir" style="width: 60px;height: 60px;cursor: pointer;" onclick="$('#image_div').toggle().attr('src',$(this).attr('src'));"> </td>
                          <td> <?= $produit->prix; ?> </td>
                          <?php
                          $categories1 = $produitC->affichercat($produit->categorie);


                          ?>
                          <td>
                            <?php foreach ($categories1 as $row) { ?>
                              <?php echo $row['nom_cat'] ?>
                            <?php } ?>

                          </td>

                          <td> <?= $produit->jaime; ?> </td>
                          <td><a onclick="return confirm('voulez-vous vraiment supprimer ce produit ?')" href="supprimerprod.php?id_produit=<?= $produit->id_produit ?>" class="btn btn-danger"> supprimer </a>
                            <a href="modifierproduit.php?id_produit=<?= $produit->id_produit ?>" class="btn btn-danger"> modifier </a>
                          </td>
                          </td>

                        </tr>


                      <?php endforeach; ?>
                    </tbody>
                </div>



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