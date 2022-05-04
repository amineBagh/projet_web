<?php
require_once ("C:/xampp/htdocs/gentelella-master/model/produit.php");
require_once ("C:/xampp/htdocs/gentelella-master/controller/produitC.php");
$id_produit=$_GET['id_produit'];

$ec= new produitC();
$ec->Supprimmerprod($id_produit);
header('Location: produits.php');  
?>

