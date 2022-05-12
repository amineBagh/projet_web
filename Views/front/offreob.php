<?php

session_start();

include_once "C:/xampp/htdocs/pharmaland/models/carte.php";
include_once "C:/xampp/htdocs/pharmaland/controllers/carteC.php";

$ref = $_GET['ref'];

$ec = new carteC();

$ec->up($_SESSION['uuid']);
header('Location: offres.php');
