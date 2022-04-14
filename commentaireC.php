<?php
include_once("C:/xampp/htdocs/souha/config.php");
include_once("C:/xampp/htdocs/souha/Model/commentaire.php");

class commentaireC
{
    function afficherCommentaire(){
        $sql="select * from commentaire";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
    }
    catch(Exception $e){
        echo 'Erreur: '.$e->getMessage();
    }
}
function CommentaireProduit($idProduit){
    $sql="select * from commentaire where idProduit=$idProduit";
    $db = config::getConnexion();
    try{
        $liste = $db->query($sql);
        return $liste;
}
catch(Exception $e){
    echo 'Erreur: '.$e->getMessage();
}
}
public function ajouterCommentaire($commentaire){
    $sql="insert into commentaire(idProduit,texte) values(:idProduit,:texte)";
    $db = config::getConnexion();
    try{
        $query=$db->prepare($sql);
        $query->execute([
        'idProduit'=>$commentaire->getIdProduit(),
        'texte'=>$commentaire->getTexte()
        ]);
        
    }
        catch(Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
}

function modifierCommentaire($id,$commentaire) {
    $sql="UPDATE  commentaire set idProduit=:idProduit,texte=:texte where ref=".$id."";
    $db = config::getConnexion();
    try{
        $query = $db->prepare($sql);
    
        $query->execute([
            'idProduit' => $commentaire->getIdProduit(),
            'texte' => $commentaire->getTexte()
        ]);			
    }
    catch (Exception $e){
        echo 'Erreur: '.$e->getMessage();
    }		
  }
public function afficherCommentaireDetail(int $rech1)
    {
        $sql="select * from commentaire where ref=".$rech1."";
        
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function afficherCommentaireTrie(string $selon){
        $sql="select * from commentaire order by ".$selon."";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
    }
    
    catch(Exception $e){
        echo 'Erreur: '.$e->getMessage();
    }
    }
public function supprimerCommentaire($id)
{
    $sql = "DELETE FROM commentaire WHERE ref=".$id."";
    $db = config::getConnexion();
    $query =$db->prepare($sql);
    
    try {
        $query->execute();
    }
    catch(Exception $e){
        die('Erreur: '.$e->getMessage());

    }
}
}

?>