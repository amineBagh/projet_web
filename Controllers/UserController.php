<?php

include 'C:/xampp/htdocs/pharmaland/config.php';
include_once 'C:/xampp/htdocs/pharmaland/Models/user.php';

class UserController
{

    public function afficherAdmin()
    {
        try {
            return Database::connect()->query("SELECT * FROM administrateur");
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }


    public function ajouterAdmin($req)
    {
        try {
            $query = Database::connect()
                ->prepare("INSERT INTO `administrateur`(`id`, `nom`, `prenom`, `email`, `date`, `mdp`) 
                VALUES (NULL,?,?,?,?,?)");

            if ($query->execute([
                $req->getNom(),
                $req->getPrenom(),
                $req->getEmail(),
                $req->getDate(),
                $req->getMdp()
            ])) {
                header('Location: ./user_affiche.php');
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function supprimerAdmin($id)
    {
        try {
            Database::connect()->prepare("DELETE FROM `administrateur` where id=?")->execute([$id]);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }


    public function recupererAdmin($id)
    {
        try {
            return Database::connect()->query("SELECT * FROM `administrateur` WHERE id='$id'")->fetch();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function modifierAdmin($id, $req)
    {
        try {
            $query = Database::connect()
                ->prepare("UPDATE `administrateur` SET `nom`=?, `prenom`=?, `email`=?, `date`=?, `mdp`=? WHERE id='$id' ");

            if ($query->execute([
                $req->getNom(),
                $req->getPrenom(),
                $req->getEmail(),
                $req->getDate(),
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

    public function chercherAdmin($slug)
    {
        $text = "%" . $slug . "%";
        try {
            $req = Database::connect()->prepare("SELECT * FROM `administrateur` WHERE `id` LIKE :slug OR `nom` LIKE :slug OR `prenom` LIKE :slug ");
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

    public function trierAdmin()
    {
        try {
            return Database::connect()->query("SELECT * FROM `administrateur` ORDER BY date DESC")->fetchAll();
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}
