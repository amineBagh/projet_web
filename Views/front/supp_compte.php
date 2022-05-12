<?php

session_start();
include_once "C:/xampp/htdocs/pharmaland/Controllers/ClientController.php";

$delete = new ClientController();
$delete->supprimerUtilisateur($_SESSION['uuidClient']);
session_unset();
session_destroy();
header("Location: login.php");
