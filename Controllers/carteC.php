<?php

include_once "C:/xampp/htdocs/pharmaland/config.php";

class carteC
{
    function afficherCarte()
    {
        $sql = "select * from carte";
        $db = Database::connect();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }


    function ajoutercarte($carte, $utilisateur)
    {

        $sql = "INSERT INTO carte (client,nbpoint,offre) VALUES ($utilisateur,:nbpoint,:offre) ";

        $db = Database::connect();
        try {



            $req = $db->prepare($sql);

            $nbpoint = $carte->getnbpoint();
            $offre = null;

            //$id_catrec=$reclamation->get_id_catrec();
            $req->bindValue(':nbpoint', $nbpoint);
            $req->bindValue(':offre', $offre);
            $req->bindValue(':offre', NULL);


            //$req->bindValue(':id_catrec',$id_catrec);




            if ($req->execute()) {
                echo "data insrted successul";
                header("Location:cartes.php");
            }
        } catch (Exception $e) {

            echo 'Erreur: ' . $e->getMessage();
        }
    }



    function up($client)
    {
        $sql = "UPDATE carte SET nbpoint = nbpoint+20 where client=$client";
        $db = Database::connect();
        try {
            $req = $db->prepare($sql);
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }


    function afficher_user()
    {

        $sql = "SELECT * FROM `utilisateur`";
        $db = Database::connect();
        try {
            $utilisateur = $db->query($sql);
            return $utilisateur;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }



    function modifierCarte($id, $carte)
    {
        $sql = "UPDATE carte set client=:client, ref=:code where ref=" . $id . "";
        $db = Database::connect();
        try {
            $query = $db->prepare($sql);

            $query->execute([
                'idClient' => $carte->getIdClient(),
                'code' => $carte->getCode()
            ]);
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }

    public function afficherCarteDetail(int $rech1)
    {
        $sql = "select * from carte where ref=" . $rech1 . "";

        $db = Database::connect();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    public function supprimerCarte($id)
    {
        $sql = "DELETE FROM carte WHERE ref=" . $id . "";
        $db = Database::connect();
        $query = $db->prepare($sql);

        try {
            $query->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
}
