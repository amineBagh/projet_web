<?php

include_once 'C:/xampp/htdocs/pharmaland/Controllers/carteC.php';

$co = new carteC();
if (isset($_GET['id'])) {
	$carteC = new carteC();
	$listeC = $carteC->afficherCarteDetail($_GET['id']);

	foreach ($listeC as $ca) {
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
							<label class="col-form-label col-md-3 col-sm-3 label-align" for="idClient">IdClient<span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 ">
								<input type="number" name="idClient" id="idClient" required="required" class="form-control " value="<?php echo $ca['client']; ?>">
							</div>
						</div>
						<div class="item form-group">
							<label class="col-form-label col-md-3 col-sm-3 label-align" for="code">Code <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 ">
								<input type="texte" name="code" id="code" required="required" class="form-control " value="<?php echo $ca['ref']; ?>">
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
	}
	// create event
	$carte = null;

	// create an instance of the controller

	$carteC = new carteC();
	if (
		isset($_POST["idClient"]) &&
		isset($_POST["code"])
	) {
		if (
			!empty($_POST["idClient"]) &&
			!empty($_POST["code"])
		) {
			$carte = new carte(
				$_POST['idClient'],
				$_POST['code']
			);
			$carteC->modifierCarte($_GET['id'], $carte);

			header('Location:formCarte.php');
		} else
			$error = "Missing information";
	}
}
?>