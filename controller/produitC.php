<?php

    require_once "C:/xampp/htdocs/gentelella-master/config.php";

    class produitC{
        
        function afficherProduit()
        {
            $db = config::getConnexion();
            $sql="SELECT *FROM produit";
        try{
            $req=$db->prepare($sql);
            $req->execute();
            $produit= $req->fetchALL(PDO::FETCH_OBJ);
            return $produit;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }  
        }

        function affichercat($id_cat)
        {
                $sql="SELECT * FROM `categorie` where id_cat =$id_cat";
        $db = config::getConnexion();
        try{
        $categorie=$db->query($sql);
        return $categorie;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
        }

        function ajouterproduit($produit,$categorie)
{
		
    $sql="INSERT INTO produit (titre,img,descr,prix,categorie) VALUES (:titre,:img,:descr,:prix,$categorie) ";

  $db = config::getConnexion();
  try{



        $req=$db->prepare($sql);
   
        $titre=$produit->get_titre();
        $img=$produit->get_image();
        $descr=$produit->get_description();
        $prix=$produit->get_prix();
        
        
        
    
        //$id_catrec=$reclamation->get_id_catrec();

 var_dump($sql);
$req->bindValue(':titre',$titre);
$req->bindValue(':img',$img);
$req->bindValue(':descr',$descr);
$req->bindValue(':prix',$prix);
//$req->bindValue(':id_catrec',$id_catrec);




            if($req->execute())
            {
            echo "data insrted successul";
                     header("Location:produits.php");
                 
            }
        }
        catch (Exception $e){

            echo 'Erreur: '.$e->getMessage();
        }
}


             function Supprimmerprod($id_produit)
            {
                $sql="DELETE  from produit where id_produit=$id_produit";
                $db = config::getConnexion();
                try{
                $req=$db->prepare($sql);
                $req->execute();
                }
                catch (Exception $e){
                    die('Erreur: '.$e->getMessage());
                }
            }

            function afficher_cat(){

                $sql="SELECT * FROM `categorie`";
                $db = config::getConnexion();
                try{
                $categorie=$db->query($sql);
                return $categorie;
                }
                catch (Exception $e){
                    die('Erreur: '.$e->getMessage());
                }
            
            }

            function trier(){
                //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
                
               $db = config::getConnexion();
                    $sql="SElECT * From produit ORDER BY titre";
        
                try{
                $req=$db->prepare($sql);
                $req->execute();
                $produit= $req->fetchALL(PDO::FETCH_OBJ);
                return $produit;
                }
                catch (Exception $e){
                    die('Erreur: '.$e->getMessage());
                }    
        }

        function rechercherproduit($titre,$descr,$prix,$categorie)
    {
        $db = config::getConnexion();
        $sql="SELECT * FROM produit inner join categorie on produit.categorie=categorie.id_cat where 1=1 ";
        if(!empty($titre))
        {
            $sql="$sql and titre='$titre'";
        }

        if(!empty($descr))
        {
            $sql="$sql and desc='$desc'";
        }

        if(!empty($prix))
        {
            $sql="$sql and prix='$prix'";
        }

         if(!empty($categorie))
        {
            $sql="$sql and nom_cat='$categorie'";
        }

        try{
            $req=$db->prepare($sql);
            $req->execute();
            $produit=$req->fetchALL(PDO::FETCH_OBJ);
            return $produit;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }   
        
    }
            
    }
    

?>