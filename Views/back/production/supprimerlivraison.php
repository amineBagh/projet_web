<?php
    include_once 'C:/xampp/htdocs/temp/Model/Livraison.php';
    include_once 'C:/xampp/htdocs/temp/Controller/LivraisonC.php';


   
       $error = "";
   
       // create adherent
       $livraison = null;
   
       // create an instance of the controller
       $livraisonC = new LivraisonC();
      

	$livraisonC->supprimerLivraison($_POST['id']);
	header('Location:afficherlivraison.php');
?>