<?php


include_once "C:/xampp/htdocs/pharmaland/Controllers/UserController.php";
include_once "C:/xampp/htdocs/pharmaland/Controllers/AuthController.php";

session_start();
$user = new UserController();
$logout = new Auth("", "");
$queries = $user->afficherAdmin()->fetchAll();

if ($_SESSION['loggedIn'] == "false") {
	header("Location: login.php");
}

if (isset($_POST['logout'])) {
	$logout->seDeconnecter();
}

if (isset($_POST['filtre'])) {
	$queries = $user->chercherAdmin($_POST['cherche']);
}

if (isset($_POST['trier'])) {
	$queries = $user->trierAdmin();
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

	<title>Pharmaland</title>

	<!-- Bootstrap -->
	<link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- NProgress -->
	<link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
	<!-- iCheck -->
	<link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

	<!-- Custom Theme Style -->
	<link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;">
						<a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Pharmaland</span></a>
					</div>

					<div class="clearfix"></div>

					<!-- menu profile quick info -->
					<div class="profile clearfix">
						<div class="profile_pic">
							<img src="images/img.jpg" alt="..." class="img-circle profile_img">
						</div>
						<div class="profile_info">
							<span>Welcome,</span>
							<h2><?php echo $user->recupererAdmin($_SESSION['uuid'])['nom'] . " " . $user->recupererAdmin($_SESSION['uuid'])['prenom']  ?></h2>
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

					<div class="clearfix"></div>

					<div class="col-md-12 col-sm-12  ">

						<div class="page-title">
							<div class="title_left">
								<h3></h3>
							</div>

							<div class="title_right">
								<div class="col-md-5 col-sm-5  form-group pull-right top_search">
									<form method="post">
										<div class="input-group">
											<input name="cherche" type="text" class="form-control" placeholder="Search for...">
											<span class="input-group-btn">
												<button name="filtre" class="btn btn-default" type="submit">Go!</button>
											</span>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="x_panel">
							<div class="x_title" style="display:flex; align-items: center; justify-content: space-between;">
								<h2>Tous les administrateurs</small></h2>
								<div class="clearfix"></div>
								<form method="post">
									<button class="btn btn-primary" name="trier" type="submit">trier</button>
								</form>
							</div>

							<div class="x_content">

								<div class="table-responsive">
									<table class="table table-striped jambo_table bulk_action">
										<thead>
											<tr class="headings">
												<th class="column-title"># </th>
												<th class="column-title">Nom </th>
												<th class="column-title">Prenom </th>
												<th class="column-title">Email </th>
												<th class="column-title">Date </th>
												<th class="column-title no-link last"><span class="nobr">Action</span>
												</th>
											</tr>
										</thead>

										<tbody>
											<?php
											foreach ($queries as $value) {
											?>
												<tr class="even pointer">
													<td class=" "><?php echo $value['id'] ?></td>
													<td class=" "><?php echo $value['nom'] ?></td>
													<td class=" "><?php echo $value['prenom'] ?></td>
													<td class=" "><?php echo $value['email'] ?></td>
													<td class=" "><?php echo date("F j, Y", strtotime($value['date'])) ?></td>
													<td class=" last">
														<a href="./user_edit.php?_id=<?php echo $value['id'] ?>">modifier</a>
														<?php
														if ($_SESSION["uuid"] != $value['id']) {
														?>
															<a href="./user_sup.php?_id=<?php echo $value['id'] ?>">supprimer</a>
														<?php } ?>
													</td>
												</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /page content -->

		<!-- footer content -->
		<footer>
			<div class="pull-right">
				Pharmaland<a href="https://colorlib.com">Colorlib</a>
			</div>
			<div class="clearfix"></div>
		</footer>
		<!-- /footer content -->
	</div>
	</div>

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

	<!-- Custom Theme Scripts -->
	<script src="../build/js/custom.min.js"></script>
</body>

</html>