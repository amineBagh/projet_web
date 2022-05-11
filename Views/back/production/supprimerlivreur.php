<?php
    include_once 'C:/xampp/htdocs/temp/Model/Livreur.php';
    include_once 'C:/xampp/htdocs/temp/Controller/LivreurC.php';


   
       $error = "";
   
       // create adherent
       $livreur = null;
   
       // create an instance of the controller
       $livreurC = new LivreurC();
      

	$livreurC->supprimerLivreur($_POST['id']);
	header('Location:afficherlivreur1.php');
?>