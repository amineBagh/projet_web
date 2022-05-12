<?php

// include '../utils/connect.php';
include_once 'C:/xampp/htdocs/pharmaland/Controllers/UserController.php';
include_once 'C:/xampp/htdocs/pharmaland/Models/client.php';

class ClientController extends UserController
{


    public function afficherUtilisateur()
    {
        try {
            return Database::connect()->query("SELECT * FROM utilisateur");
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function ajouterUtilisateur($req)
    {
        try {
            $query = Database::connect()
                ->prepare("INSERT INTO `utilisateur`(`id`, `nom`, `prenom`, `email`, `date`, `numero`, `mdp`) 
                VALUES (NULL,?,?,?,?,?,?)");
            $query->execute([
                $req->getNom(),
                $req->getPrenom(),
                $req->getEmail(),
                $req->getDate(),
                $req->getNum(),
                $req->getMdp()
            ]);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function supprimerUtilisateur($id)
    {
        try {
            Database::connect()->prepare("DELETE FROM `utilisateur` where id=?")->execute([$id]);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function recupererUtilisateur($id)
    {
        try {
            return Database::connect()->query("SELECT * FROM `utilisateur` WHERE id='$id'")->fetch();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function modifierUtilisateur($id, $req)
    {
        try {
            $query = Database::connect()
                ->prepare("UPDATE `utilisateur` SET `nom`=?, `prenom`=?, `email`=?, `date`=?, `numero`=?, `mdp`=? WHERE id='$id' ");

            if ($query->execute([
                $req->getNom(),
                $req->getPrenom(),
                $req->getEmail(),
                $req->getDate(),
                $req->getNum(),
                $req->getMdp()
            ])) {
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function mergeJoin()
    {
        return Database::connect()->query("SELECT * FROM utilisateur LEFT JOIN administrateur ON utilisateur.id = administrateur.id UNION SELECT * FROM utilisateur RIGHT JOIN administrateur ON utilisateur.id = administrateur.id");
    }

    public function chercherUtilisateur($slug)
    {
        $text = "%" . $slug . "%";
        try {
            $req = Database::connect()->prepare("SELECT * FROM `utilisateur` WHERE `id` LIKE :slug OR `nom` LIKE :slug OR `prenom` LIKE :slug ");
            $req->bindParam(":slug", $text, PDO::PARAM_STR);
            $req->execute();
            if ($req->rowCount() == 0)
                return 0;
            else
                return $req->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function trierUtilisateur()
    {
        try {
            return Database::connect()->query("SELECT * FROM `utilisateur` ORDER BY date DESC")->fetchAll();
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}
