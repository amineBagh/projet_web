<?php
 include_once '../../../Controller/commentaireC.php';
 $co = new commentaireC();
 if(isset($_GET['id'])){
     $co->supprimerCommentaire($_GET['id']);
 
    header('Location:form.php');
    }

 ?>