<?php
include_once "C:/xampp/htdocs/pharmaland/config.php" ;
include_once "C:/xampp/htdocs/pharmaland/Models/message.php" ;

class messageC
{
    function afficherMessage(){
        $sql="select * from message";
        $db = Database::connect();
        try{
            $liste = $db->query($sql);
            return $liste;
    }
    catch(Exception $e){
        echo 'Erreur: '.$e->getMessage();
    }
}
function messageClient($idClientEm,$idClientDes){
    $sql="select * from message where idClientEm=$idClientEm AND idClientDes=$idClientDes";
    $db = Database::connect();
    try{
        $liste = $db->query($sql);
        return $liste;
}
catch(Exception $e){
    echo 'Erreur: '.$e->getMessage();
}
}
public function ajouterMessage($message){
    $sql="insert into message(idClientEm,idClientDes,texte) values(:idClientEm,:idClientDes,:texte)";
    $db = Database::connect();
    try{
        $query=$db->prepare($sql);
        $query->execute([
        'idClientEm'=>$message->getIdClientEm(),
        'idClientDes'=>$message->getIdClientDes(),
        'texte'=>$message->getTexte()
        ]);
        
    }
        catch(Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
}

function modifierMessage($id,$message) {
    $sql="UPDATE  message set idClientEm=:idClientEm,texte=:texte,idClientDes=:idClientDes where ref=".$id."";
    $db = Database::connect();
    try{
        $query = $db->prepare($sql);
    
        $query->execute([
            'idClientEm'=>$message->getIdClientEm(),
            'idClientDes'=>$message->getIdClientDes(),
            'texte'=>$message->getTexte()
        ]);			
    }
    catch (Exception $e){
        echo 'Erreur: '.$e->getMessage();
    }		
  }
public function afficherMessageDetail(int $rech1)
    {
        $sql="select * from message where ref=".$rech1."";
        
        $db = Database::connect();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
   
public function supprimerMessage($id)
{
    $sql = "DELETE FROM message WHERE ref=".$id."";
    $db = Database::connect();
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