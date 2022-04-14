<?php

require_once "C:/xampp/htdocs/gentelella-master/config.php";


class categorieC{

   function afficherCategorie()
    {
        $db = config::getConnexion();
        $sql="SELECT *FROM categorie";
        try{
            $req=$db->prepare($sql);
            $req->execute();
            $categorie= $req->fetchALL(PDO::FETCH_OBJ);  // on stocke les donnees recuppere par req sous forme d'objet. PQ ?
            return $categorie;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }  
       
    }

    function modifiercategorie($categorie,$id)
    {
        $db = config::getConnexion();
        $sql="UPDATE categorie SET nom_cat=:nom_cat where id_cat=$id";
        var_dump($sql);             // affiche info variable type + valeur //
        var_dump($sql);
        try{

        $req=$db->prepare($sql);        
        
        $nom_cat=$categorie->get_nom_cat();

        
        $req->bindValue(':nom_cat',$nom_cat);
        

           if( $req->execute())
           {
            header('Location: tables_dynamic.php');  
           }
           else
           header('Location: tables_dynamic.php');
        }
        catch (Exception $e)
        {

            echo 'Erreur: '.$e->getMessage();
        }
    }

    function categorie_details($id){

        $sql="SELECT *  FROM categorie  where id_cat = $id";
        $db = config::getConnexion();
        try{
        $categorie=$db->query($sql);
        return $categorie;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    
    
    
    }

    function ajoutercategorie($categorie)
{

  $sql="INSERT INTO categorie (nom_cat) VALUES(:nom_cat)";
  $db = config::getConnexion();
  try{
        $req=$db->prepare($sql);
        
        $nom_cat=$categorie->get_nom_cat();
     
        $req->bindValue(':nom_cat',$nom_cat);

            if($req->execute())
            {
            echo "data inserted successfully";
                     header("Location:tables_dynamic.php");
                 
            }
        }
        catch (Exception $e){

            echo 'Erreur: '.$e->getMessage();
        }
    }

    function Supprimmercategorie($id_cat)
    {
        $sql="DELETE  from categorie where id_cat=$id_cat";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
        $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


}
?>