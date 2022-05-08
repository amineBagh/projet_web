<?php
include 'index.php';
include 'connexion/config.php';
$pdo = pdo_connect_mysql();
$msg = '';

           $stmt = $pdo->prepare('DELETE FROM commande WHERE id = ?');
           $stmt->execute([$_GET['id']]);
header('Location: read.php');
?>
