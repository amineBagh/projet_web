<?php
 include_once 'C:/xampp/htdocs/pharmaland/Controllers/messageC.php';
 $co = new messageC();
 if(isset($_GET['id'])){
     $co->supprimerMessage($_GET['id']);
 
    header('Location:ajoutermessage.php');
    }

 ?>