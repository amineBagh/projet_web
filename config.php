<?php
  class config {
    private static $pdo = NULL;

    public static function getConnexion() {
      if (!isset(self::$pdo)) {
        try{
          self::$pdo = new PDO('mysql:host=localhost;dbname=tunidesign', 'root', '',   // localhost signifie que notre site n'est pas heberge en ligne mais sur notre machine
          [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
          
        }catch(Exception $e){
          die('Erreur: '.$e->getMessage());
        }
      }
      return self::$pdo;
    }
  }
  
/* l8 -> on peut ajouter charset utf 8 ==> specifier l'encodage pour savoir le type de texte qu'on peut entrer dans la DB 
   l8 -> root => c'est le nom d'utilisateur et les guillemet suivante pour le mot de passe
   l10 -> permet d'envoyer une erreur si on arrive pas a ce connecter a la DB */ 




?>

