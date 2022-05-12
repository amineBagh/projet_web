<?php
include_once 'C:/xampp/htdocs/pharmaland/config.php';
include_once 'C:/xampp/htdocs/pharmaland/Models/Livraison.php';

class LivraisonC
{




	function afficherLivraison()
	{
		$sql = "SELECT * FROM livraison";
		$db = Database::connect();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur:' . $e->getMeesage());
		}
	}




	function ajouterLivraison($livraison)
	{

		$sql = "INSERT INTO livraison ( nom,prenom,adresse,tel,mail )
            VALUES (:nom,:prenom,:adresse,:tel,:mail)";
		$db = Database::connect();
		try {

			$query = $db->prepare($sql);

			$query->execute([
				'nom' => $livraison->getNom(),
				'prenom' => $livraison->getPrenom(),
				'adresse' => $livraison->getAdresse(),
				'tel' => $livraison->getTel(),
				'mail' => $livraison->getMail(),


			]);
			//header('Location: afficherquestion.php');

		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
	}

	function recupererLivraison($id)
	{

		$sql = "SELECT * from livraison where id=$id";
		$db = Database::connect();
		try {
			$query = $db->prepare($sql);
			$query->execute();

			$reponse = $query->fetch();
			return $reponse;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}



	function modifierLivraison($livraison, $id)
	{

		try {
			$db = Database::connect();


			$sql = "UPDATE livraison SET nom= :nom,prenom= :prenom,adresse=:adresse,tel= :tel,mail=:mail WHERE id= :id";
			$db = Database::connect();
			$req = $db->prepare($sql);

			$req->bindValue(':nom', $livraison->getNom());
			$req->bindValue(':id', $id);
			$req->bindValue(':prenom', $livraison->getPrenom());

			$req->bindValue(':adresse', $livraison->getAdresse());
			$req->bindValue(':tel', $livraison->getTel());
			$req->bindValue(':mail', $livraison->getMail());


			$req->execute();
			//	echo $query->rowCount() . " records UPDATED successfully <br>";
		} catch (PDOException $e) {
			$e->getMessage();
		}
	}



	function supprimerLivraison($id)
	{

		$sql = "DELETE FROM livraison WHERE id=:id";
		$db = Database::connect();
		$req = $db->prepare($sql);
		$req->bindValue(':id', $id);
		try {
			$req->execute();
		} catch (Exception $e) {
			die('Erreur:' . $e->getMeesage());
		}
	}
	function assignlivreur($livraison, $id, $livreurId)
	{

		try {
			$db = Database::connect();


			$sql = "UPDATE livraison SET  livreurId=:livreurId WHERE id= :id";
			$db = Database::connect();
			$req = $db->prepare($sql);

			$req->bindValue(':livreurId', $livraison->getLd());
			$req->bindValue(':id', $id);


			$req->execute();
			//	echo $query->rowCount() . " records UPDATED successfully <br>";
		} catch (PDOException $e) {
			$e->getMessage();
		}
	}
}
