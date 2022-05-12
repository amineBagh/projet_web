<?php

include_once "C:/xampp/htdocs/pharmaland/models/categorie.php";
include_once "C:/xampp/htdocs/pharmaland/controllers/categorieC.php";


$idcat = $_GET['id_cat'];

$ec = new categorieC();
$ec->Supprimmercategorie($idcat);
header('Location: categorie.php');
