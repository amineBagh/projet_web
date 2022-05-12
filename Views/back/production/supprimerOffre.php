<?php

include_once "C:/xampp/htdocs/pharmaland/Controllers/offreC.php";

$co = new offreC();
if (isset($_GET['id'])) {
    $co->supprimerOffre($_GET['id']);

    header('Location:offres.php');
}
