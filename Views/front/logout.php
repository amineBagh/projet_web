<?php
session_start();
include_once "C:/xampp/htdocs/pharmaland/Controllers/ClientAuthController.php";

$logout = new ClientAuthController("", "");
$logout->seDeconnecter();
