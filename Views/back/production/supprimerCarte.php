<?php

include_once "C:/xampp/htdocs/pharmaland/Controllers/carteC.php";

$co = new carteC();
if (isset($_GET['id'])) {
    $co->supprimerCarte($_GET['id']);

    header('Location:cartes.php');
}
