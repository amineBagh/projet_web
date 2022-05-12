<?php

include_once "C:/xampp/htdocs/pharmaland/config.php";

class produitC
{

    function afficherProduit()
    {
        $db = Database::connect();
        $sql = "SELECT *FROM produit";
        try {
            $req = $db->prepare($sql);
            $req->execute();
            $produit = $req->fetchALL(PDO::FETCH_OBJ);
            return $produit;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function affichercat($id_cat)
    {
        $sql = "SELECT * FROM `categorie` where id_cat =$id_cat";
        $db = Database::connect();
        try {
            $categorie = $db->query($sql);
            return $categorie;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function ajouterproduit($produit, $categorie)
    {

        $sql = "INSERT INTO produit (titre,img,descr,prix,categorie,jaime) VALUES (:titre,:img,:descr,:prix,$categorie, :jaime) ";

        $db = Database::connect();
        try {



            $req = $db->prepare($sql);

            $titre = $produit->get_titre();
            $img = $produit->get_image();
            $descr = $produit->get_description();
            $prix = $produit->get_prix();
            $jaime = 0;

            //$id_catrec=$reclamation->get_id_catrec();

            var_dump($sql);
            $req->bindValue(':titre', $titre);
            $req->bindValue(':img', $img);
            $req->bindValue(':descr', $descr);
            $req->bindValue(':prix', $prix);
            $req->bindValue(':jaime', $jaime);
            //$req->bindValue(':id_catrec',$id_catrec);




            if ($req->execute()) {
                echo "data insrted successul";
                header("Location:produits.php");
            }
        } catch (Exception $e) {

            echo 'Erreur: ' . $e->getMessage();
        }
    }


    function Supprimmerprod($id_produit)
    {
        $sql = "DELETE  from produit where id_produit=$id_produit";
        $db = Database::connect();
        try {
            $req = $db->prepare($sql);
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function afficher_cat()
    {

        $sql = "SELECT * FROM `categorie`";
        $db = Database::connect();
        try {
            $categorie = $db->query($sql);
            return $categorie;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function rechercherproduit($titre, $descr, $prix, $categorie, $tridate)
    {
        $db = Database::connect();
        $sql = "SELECT * FROM produit inner join categorie on produit.categorie=categorie.id_cat where 1=1 ";
        if (!empty($titre)) {
            $sql = "$sql and titre='$titre'";
        }

        if (!empty($descr)) {
            $sql = "$sql and desc='$descr'";
        }

        if (!empty($prix)) {
            $sql = "$sql and prix='$prix'";
        }

        if (!empty($categorie)) {
            $sql = "$sql and nom_cat='$categorie'";
        }

        if (!empty($tridate)) {
            $sql = "$sql order by titre";
        }

        try {
            $req = $db->prepare($sql);
            $req->execute();
            $produit = $req->fetchALL(PDO::FETCH_OBJ);
            return $produit;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }





    function modifierproduit($produit, $id)
    {
        $db = Database::connect();
        $sql = "UPDATE produit SET titre=:titre, img=:img, descr=:descr , prix=:prix where id_produit=$id";
        var_dump($sql);             // affiche info variable type + valeur //
        var_dump($sql);
        try {

            $req = $db->prepare($sql);

            $titre = $produit->get_titre();
            $img = $produit->get_image();
            $descr = $produit->get_description();
            $prix = $produit->get_prix();

            $req->bindValue(':titre', $titre);
            $req->bindValue(':img', $img);
            $req->bindValue(':descr', $descr);
            $req->bindValue(':prix', $prix);

            if ($req->execute()) {
                header('Location: produits.php');
            } else
                header('Location: produits.php');
        } catch (Exception $e) {

            echo 'Erreur: ' . $e->getMessage();
        }
    }
    function like($id_produit)
    {
        $sql = "UPDATE produit SET jaime = jaime+1 where id_produit=$id_produit";
        $db = Database::connect();
        try {
            $req = $db->prepare($sql);
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function dislike($id_produit)
    {
        $sql = "UPDATE produit SET jaime = jaime-1 where id_produit=$id_produit";
        $db = Database::connect();
        try {
            $req = $db->prepare($sql);
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function produit_details($id)
    {

        $sql = "SELECT *  FROM produit  where id_produit = $id";
        $db = Database::connect();
        try {
            $produit = $db->query($sql);
            return $produit;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
}
