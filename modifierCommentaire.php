<?php
 include_once '../../../Controller/commentaireC.php';
 
 $co = new commentaireC();
 if(isset($_GET['id'])){
   $commentaireC = new commentaireC();
   $listeC = $commentaireC->afficherCommentaireDetail($_GET['id']);
 
 foreach($listeC as $commentaire){
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
								<div class="item form-group">
									<div class="col-md-6 col-sm-6 offset-md-3">
										<input type="submit" class="btn btn-success" value="Submit">
									</div>
								</div>

							</form>
						</div>
					</div>
				</div>
                <?php
 // create event
 $commentaire = null;

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
         $commentaire = new commentaire(
             $_POST['idProduit'],
             $_POST['texte']
         );
        $commentaireC->modifierCommentaire($_GET['id'],$commentaire);
         
         header('Location:form.php');
     }
     else
         $error = "Missing information";
 }

 
 }
?>