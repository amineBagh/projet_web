<?php
 include_once 'C:/xampp/htdocs/pharmaland/controllers/commentaireC.php';
 
 $co = new commentaireC();
 if(isset($_GET['id'])){
   $commentaireC = new commentaireC();
   $listeC = $commentaireC->afficherCommentaireDetail($_GET['id']);
 
 //foreach($listeC as $commentaire){
 ?>
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
          











<?php
foreach($listeC as $commentaire){

?>




	<link href="../build/css/custom.min.css" rel="stylesheet">
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
									<label class="col-form-label col-md-3 col-sm-3 label-align" for="idProduit">IdProduit <span class="required">*</span>
									</label>
									<div class="col-md-6 col-sm-6 ">
										<input type="number" name="idProduit" id="idProduit" required="required" class="form-control " value="<?php echo $commentaire['idProduit'];?>">
									</div>
								</div>
								<div class="item form-group">
									<label class="col-form-label col-md-3 col-sm-3 label-align" for="texte">texte <span class="required">*</span>
									</label>
									<div class="col-md-6 col-sm-6 ">
										<input type="text" id="texte" name="texte" required="required" class="form-control" value="<?php echo $commentaire['texte'];}?>">
									</div>
								</div>
								
								
							<div class="ln_solid"></div>
								<div class="item form-group"> -->
									<div class="col-md-6 col-sm-6 offset-md-3">
									<input type="submit" class="btn btn-success" value="Submit"  >
                                        <a href="affichagecommentaire.php" class="btn btn-success" > retour </a>
								</div> 
								</div>

							</form>
						</div>
					</div>
				</div>
                <?php
 // create event
 $commentaire1 = null;

 // create an instance of the controller

 $commentaireC = new commentaireC();
 if (
     isset($_POST["idProduit"]) && 
     isset($_POST["texte"])
 ) {
     if (
         !empty($_POST["idProduit"]) &&  
         !empty($_POST["texte"]) 
     ) {
         $commentaire1 = new commentaire(
             $_POST['idProduit'],
             $_POST['texte']
         );
       
        $commentaireC->modifierCommentaire($_GET['id'],$commentaire1);
      //  header('Location:affichagecommentaire.php');
        
     }
     else
         $error = "Missing information";
 }

 
 }
?>