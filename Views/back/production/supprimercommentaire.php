<?php
 include_once 'C:/xampp/htdocs/pharmaland/Controllers/commentaireC.php';
 $co = new commentaireC();
 if(isset($_GET['id'])){
     $co->supprimerCommentaire($_GET['id']);
 
    header('Location:affichagecommentaire.php');
    }

 ?>