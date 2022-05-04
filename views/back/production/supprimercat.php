<?php
require_once ("C:/xampp/htdocs/gentelella-master/model/categorie.php");
require_once ("C:/xampp/htdocs/gentelella-master/controller/categorieC.php");
$idcat=$_GET['id_cat'];

$ec= new categorieC();
$ec->Supprimmercategorie($idcat);
header('Location: tables_dynamic.php');  
?>