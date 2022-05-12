<?php

include_once "C:/xampp/htdocs/pharmaland/Controllers/offreC.php";

$co = new offreC();
if (isset($_GET['id'])) {
	$offreC = new offreC();
	$listeC = $offreC->afficherOffreDetail($_GET['id']);

	foreach ($listeC as $of) {
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
								<input type="number" name="idProduit" id="idProduit" required="required" class="form-control " value="<?php echo $of['idProduit']; ?>">
							</div>
						</div>
						<div class="item form-group">
							<label class="col-form-label col-md-3 col-sm-3 label-align" for="texte">texte <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 ">
								<select name="type" id="type" class="form-control " value="<?php echo $of['type']; ?>">

									<option value="Journalier">Journalier</option>
									<option value="Mensuel">Mensuel</option>
									<option value="Annuel">Annuel</option>
								</select>
							</div><?php } ?>
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
	$offre = null;

	// create an instance of the controller

	$offreC = new offreC();
	if (
		isset($_POST["idProduit"]) &&
		isset($_POST["type"])
	) {
		if (
			!empty($_POST["idProduit"]) &&
			!empty($_POST["type"])
		) {
			$offre = new offre(
				$_POST['idProduit'],
				$_POST['type']
			);
			$offreC->modifierOffre($_GET['id'], $offre);

			header('Location:offres.php');
		} else
			$error = "Missing information";
	}
}
	?>