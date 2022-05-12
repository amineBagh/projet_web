<?php

include_once "C:/xampp/htdocs/pharmaland/Models/produit.php";
include_once "C:/xampp/htdocs/pharmaland/Controllers/produitC.php";

$id_produit = $_GET['id_produit'];

$ec = new produitC();
$ec->Supprimmerprod($id_produit);
header('Location: produits.php');
