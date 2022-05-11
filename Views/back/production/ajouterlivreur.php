<?php
    
       include 'C:/xampp/htdocs/temp - Copy/Controller/LivreurC.php';
	  $livreurC=new LivreurC();
 

    $error = "";

    // create adherent
    $livreur = null;
    $liste=$livreurC->afficherLivreur(); 
    if (
       
		isset($_POST["nom"]) &&		
        isset($_POST["prenom"]) &&
        isset($_POST["cin"]) &&
        isset($_POST["num_tel"]) 
       
		
    ) {
        if (
           
			!empty($_POST["nom"]) &&
            !empty($_POST["prenom"]) &&
            !empty($_POST["cin"]) &&
            !empty($_POST["num_tel"]) 
           
        ) {
            $livreur = new Livreur(

				$_POST['nom'],
                $_POST['prenom'], 
                $_POST['cin'],
                $_POST['num_tel'] 
			
            );
            $livreurC->ajouterLivreur($livreur);
            header('Location: afficherlivreur1.php');
           
       //  $livreurC->modifierLivreur($livreur,$_POST['id']);  //get->
 
           
        }
        else
            $error = "Missing information";
    }

    
?>

