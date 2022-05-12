<?php



include_once "C:/xampp/htdocs/pharmaland/models/produit.php";
include_once "C:/xampp/htdocs/pharmaland/controllers/produitC.php";

$id_ev = $_GET['id_produit'];

$ec = new produitC();

$ec->dislike($id_ev);
header('Location: shop.php');
