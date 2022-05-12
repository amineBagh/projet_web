<?php

include_once "C:/xampp/htdocs/pharmaland/config.php";

class offreC
{


    function afficherprod($produit)
    {
        $sql = "SELECT * FROM `produit` where id_produit =$produit";
        $db = Database::connect();
        try {
            $produit = $db->query($sql);
            return $produit;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function afficheroff()
    {
        $db = Database::connect();
        $sql = "SELECT *FROM offre";
        try {
            $req = $db->prepare($sql);
            $req->execute();
            $offre = $req->fetchALL(PDO::FETCH_OBJ);
            return $offre;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function afficherOffre()
    {
        $sql = "select * from offre";
        $db = Database::connect();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }
    function OffreProduit($idProduit)
    {
        $sql = "select * from offre where idProduit=$idProduit";
        $db = Database::connect();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }
    function ajouteroffre($offre, $produit)
    {

        $sql = "INSERT INTO offre (produit,description,taux_reduc,nv_prix) VALUES ($produit,:description,:taux_reduc,:nv_prix) ";

        $db = Database::connect();
        try {



            $req = $db->prepare($sql);

            $description = $offre->getDescription();
            $taux_reduc = $offre->getTaux_reduc();
            $nv_prix = $offre->getNv_prix();




            //$id_catrec=$reclamation->get_id_catrec();

            var_dump($sql);
            $req->bindValue(':description', $description);
            $req->bindValue(':taux_reduc', $taux_reduc);
            $req->bindValue(':nv_prix', $nv_prix);

            //$req->bindValue(':id_catrec',$id_catrec);




            if ($req->execute()) {
                echo "data insrted successul";
                header("Location:offres.php");
            }
        } catch (Exception $e) {

            echo 'Erreur: ' . $e->getMessage();
        }
    }

    function afficher_prod()
    {

        $sql = "SELECT * FROM `produit`";
        $db = Database::connect();
        try {
            $produit = $db->query($sql);
            return $produit;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }





    function modifieroff($offre, $ref)
    {
        $db = Database::connect();
        $sql = "UPDATE offre SET description=:description, taux_reduc=:taux_reduc, nv_prix=:nv_prix where ref=$ref";

        var_dump($sql);             // affiche info variable type + valeur //
        var_dump($sql);
        try {

            $req = $db->prepare($sql);

            $description = $offre->getDescription();
            $taux_reduc = $offre->getTaux_reduc();
            $nv_prix = $offre->getNv_prix();

            $req->bindValue(':description', $description);
            $req->bindValue(':taux_reduc', $taux_reduc);
            $req->bindValue(':nv_prix', $nv_prix);

            if ($req->execute()) {
                header('Location: offres.php');
            } else
                header('Location: offres.php');
        } catch (Exception $e) {

            echo 'Erreur: ' . $e->getMessage();
        }
    }

    function offre_details($ref)
    {

        $sql = "SELECT *  FROM offre  where ref = $ref";
        $db = Database::connect();
        try {
            $produit = $db->query($sql);
            return $produit;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    public function afficherOffreDetail(int $rech1)
    {
        $sql = "select * from offre where ref=" . $rech1 . "";

        $db = Database::connect();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function afficherOffreTrie(string $selon)
    {
        $sql = "select * from offre order by " . $selon . "";
        $db = Database::connect();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }
    public function supprimerOffre($id)
    {
        $sql = "DELETE FROM offre WHERE ref=" . $id . "";
        $db = Database::connect();
        $query = $db->prepare($sql);

        try {
            $query->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
}
