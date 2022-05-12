<?php

include_once 'C:/xampp/htdocs/pharmaland/config.php';
include_once 'C:/xampp/htdocs/pharmaland/Models/Livreur.php';

class LivreurC
{




	function afficherLivreur()
	{
		$sql = "SELECT * FROM livreur";
		$db = Database::connect();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur:' . $e->getMeesage());
		}
	}


	function Livreur($nom)
	{
		$sql = "SELECT * FROM livreur where nom like '" . $nom . "'";
		$db = Database::connect();

		try {

			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur:' . $e->getMeesage());
		}
	}


	function rechercheLivreur($nom)
	{
		$sql = 'SELECT * FROM livreur WHERE nom=:nom';
		$db = Database::connect();
		try {


			$query = $db->prepare($sql);
			$query->bindValue(':nom', $nom);
			$query->execute();

			$user = $query->fetch();
			return $user;
		} catch (Exception $e) {
			echo 'Erreur' . $e->getMessage();
		}
	}




	function ajouterLivreur($livreur)
	{

		$sql = "INSERT INTO livreur ( nom,prenom,cin,num_tel) 
            VALUES (:nom,:prenom,:cin,:num_tel)";
		$db = Database::connect();
		try {

			$query = $db->prepare($sql);

			$query->execute([
				'nom' => $livreur->getNom(),
				'prenom' => $livreur->getPrenom(),
				'cin' => $livreur->getCin(),
				'num_tel' => $livreur->getNum()
			]);
			//header('Location: afficherquestion.php');

		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
	}

	function recupererLivreur($id)
	{
		$sql = 'SELECT * FROM livreur WHERE id=:id';
		$db = Database::connect();
		try {


			$query = $db->prepare($sql);
			$query->bindValue(':id', $id);
			$query->execute();

			$user = $query->fetch();
			return $user;
		} catch (Exception $e) {
			echo 'Erreur' . $e->getMessage();
		}
	}

	function ttLivreur($nom)
	{
		$sql = 'SELECT * FROM livreur WHERE nom=:nom';
		$db = Database::connect();
		try {


			$query = $db->prepare($sql);
			$query->bindValue(':nom', $nom);
			$query->execute();

			$user = $query->fetch();
			return $user;
		} catch (Exception $e) {
			echo 'Erreur' . $e->getMessage();
		}
	}




	function modifierLivreur($livreur, $id, $num)
	{

		try {
			$db = Database::connect();


			$sql = "UPDATE livreur SET nom= :nom,prenom= :prenom,cin= :cin,num_tel=:num_tel WHERE id= :id";
			$db = Database::connect();

			$req = $db->prepare($sql);
			$req->bindValue(':nom', $livreur->getNom());
			$req->bindValue(':id', $id);
			$req->bindValue(':prenom', $livreur->getPrenom());
			$req->bindValue(':num_tel', $num);
			$req->bindValue(':cin', $livreur->getCin());

			$req->execute();

			//	echo $query->rowCount() . " records UPDATED successfully <br>";
		} catch (PDOException $e) {
			$e->getMessage();
		}
	}


	function supprimerLivreur($id)
	{

		$sql = "DELETE FROM livreur WHERE id=:id";
		$db = Database::connect();
		$req = $db->prepare($sql);
		$req->bindValue(':id', $id);
		try {
			$req->execute();
		} catch (Exception $e) {
			die('Erreur:' . $e->getMeesage());
		}
	}

	function tri()
	{
		$sql = 'SELECT * FROM livreur ORDER BY nom ASC ';

		$db = Database::connect();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur:' . $e->getMeesage());
		}
	}
}
