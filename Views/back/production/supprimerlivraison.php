<?php
    include_once 'C:/xampp/htdocs/pharmaland/Models/Livraison.php';
    include_once 'C:/xampp/htdocs/pharmaland/Controllers/LivraisonC.php';


   
       $error = "";
   
       // create adherent
       $livraison = null;
   
       // create an instance of the controller
       $livraisonC = new LivraisonC();
      

	$livraisonC->supprimerLivraison($_POST['id']);
	header('Location:afficherlivraison.php');
