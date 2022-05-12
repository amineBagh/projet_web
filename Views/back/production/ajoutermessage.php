<?php 
include_once 'C:/xampp/htdocs/pharmaland/Models/message.php';
include_once 'C:/xampp/htdocs/pharmaland/Controllers/messageC.php';
$messageC = new messageC();
$listeC = $messageC->afficherMessage();


if (
    isset($_POST["idClientEm"]) &&
    isset($_POST["idClientDes"]) &&  
    isset($_POST["texte"])
) {
    if (
        !empty($_POST["idClientEm"]) && 
        !empty($_POST["idClientDes"]) && 
        !empty($_POST["texte"])
    ) {
        $message = new message(
            $_POST['idClientEm'],
            $_POST['idClientDes'],
            $_POST['texte']
        );
        $messageC->ajouterMessage($message);
        
        header('Location:ajoutermessage.php');
    }
    else
        $error = "Missing information";

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

	<title>Gentelella Alela! | </title>

	<!-- Bootstrap -->
	<link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- NProgress -->
	<link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
	<!-- iCheck -->
	<link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	<!-- bootstrap-wysiwyg -->
	<link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
	<!-- Select2 -->
	<link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
	<!-- Switchery -->
	<link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
	<!-- starrr -->
	<link href="../vendors/starrr/dist/starrr.css" rel="stylesheet">
	<!-- bootstrap-daterangepicker -->
	<link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

	<!-- Custom Theme Style -->
	<link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;">
						<a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
					</div>

					<div class="clearfix"></div>

					<!-- menu profile quick info -->
					<div class="profile clearfix">
					
						<div class="profile_info">
							<span>Welcome,</span>
							<h2>John Doe</h2>
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
									<img src="images/img.jpg" alt="">John Doe
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
 
			<style>
			.table {
  background-color: white;
}
		</style>
	
			<div class="row">
			
			
              <form method="POST"><label>Sort by</label>
			 <select name="tri" class="field" > 
              
                <option value="idProduit">idProduit</option>
                <option value="texte">Texte</option>
                
              </select><input type="submit"  value="trier"></form>
              
			 
				 <!-- Table -->
  <div class="table">
          
		  <table width="100%" border="3" cellspacing="0" cellpadding="0" >
	  
			<tr>
			 
			  <th>REF</th>
			  <th>idClientEm</th>
              <th>idClientDes</th>
			  <th>Texte</th>
			
			 
			</tr>

			

			


			<?php
  foreach($listeC as $m){
	  ?>


			<tr>
			<td><?php echo $m['ref']; ?></td>
			  <td><?php echo $m['idClientEm']; ?></td>
			  <td><?php echo $m['idClientDes']; ?></td>
              <td><?php echo $m['texte']; ?></td>
</td>
			 
			  <td><a href="supprimermessage.php?id=<?php echo $m['ref']; ?>" class="ico del">Delete</a> </td>
			  <td> <a href="modifiermessage.php?id=<?php echo $m['ref']; ?>" class="ico edit">Edit</a>
			 
			
			
			
			</td>
			</tr>
			<?php } ?>
			
			
			
			
			
			
		  
		 
		  </table>
		  <!-- End Pagging -->
		</div>
		<!-- Table -->
		
				<div class="col-md-12 col-sm-12 ">
					<div class="x_panel">
						<div class="x_title">
							<h2>Form Design <small>different form elements</small></h2>
							<ul class="nav navbar-right panel_toolbox">
								<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
									<ul class="dropdown-menu" role="menu">
										<li><a class="dropdown-item" href="#">Settings 1</a>
										</li>
										<li><a class="dropdown-item" href="#">Settings 2</a>
										</li>
									</ul>
								</li>
								<li><a class="close-link"><i class="fa fa-close"></i></a>
								</li>
							</ul>
							<div class="clearfix"></div>
						</div>
						<div class="x_content">
							<br />
							<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST">

								<div class="item form-group">
									<label class="col-form-label col-md-3 col-sm-3 label-align" for="idClientEm">idClientEm <span class="required">*</span>
									</label>
									<div class="col-md-6 col-sm-6 ">
										<input type="number" name="idClientEm" id="idClientEm" required="required" class="form-control ">
									</div>
								</div>
                                <div class="item form-group">
									<label class="col-form-label col-md-3 col-sm-3 label-align" for="idClientDes">idClientDes <span class="required">*</span>
									</label>
									<div class="col-md-6 col-sm-6 ">
										<input type="number" name="idClientDes" id="idClientDes" required="required" class="form-control">
									</div>
								</div>
								<div class="item form-group">
									<label class="col-form-label col-md-3 col-sm-3 label-align" for="texte">texte <span class="required">*</span>
									</label>
									<div class="col-md-6 col-sm-6 ">
										<input type="text" id="texte" name="texte" required="required" class="form-control">
									</div>
								</div>
								
								
								<div class="ln_solid"></div>
								<div class="item form-group">
									<div class="col-md-6 col-sm-6 offset-md-3">
										<input type="submit" class="btn btn-success" value="Submit">
									</div>
								</div>

							</form>
						</div>
					</div>
				</div>
			</div>

			<!-- footer content -->
			<footer>
				<div class="pull-right">
					Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
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
	<!-- bootstrap-progressbar -->
	<script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
	<!-- iCheck -->
	<script src="../vendors/iCheck/icheck.min.js"></script>
	<!-- bootstrap-daterangepicker -->
	<script src="../vendors/moment/min/moment.min.js"></script>
	<script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
	<!-- bootstrap-wysiwyg -->
	<script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
	<script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
	<script src="../vendors/google-code-prettify/src/prettify.js"></script>
	<!-- jQuery Tags Input -->
	<script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
	<!-- Switchery -->
	<script src="../vendors/switchery/dist/switchery.min.js"></script>
	<!-- Select2 -->
	<script src="../vendors/select2/dist/js/select2.full.min.js"></script>
	<!-- Parsley -->
	<script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
	<!-- Autosize -->
	<script src="../vendors/autosize/dist/autosize.min.js"></script>
	<!-- jQuery autocomplete -->
	<script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
	<!-- starrr -->
	<script src="../vendors/starrr/dist/starrr.js"></script>
	<!-- Custom Theme Scripts -->
	<script src="../build/js/custom.min.js"></script>

</body></html>
