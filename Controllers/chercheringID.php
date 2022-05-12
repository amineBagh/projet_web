
<html>
	<head>
	<link rel="style" href="style.css" >
	<link rel='stylesheet' type='text/css' media='screen' href='../style.css'>
	
	</head>

	<body>
	
	    <button><a href="form.php">retour a la liste des comm</a></button>
		
		
        <?php
	include_once 'C:\xampp\htdocs\souha\Controller\commentaireC.php';
    if(isset($_POST['chercher']) ){
        $commentaireC=new commentaireC();
	    $listeC=$listeC->cherchernom($_POST['ref']); 
    
echo'
		<table border="1" align="center">
			<tr>
				<th>nom du soin</th>
				<th>Prix</th>
				<th>discription</th>
				
				<th>Modifier</th>
				<th>Supprimer</th>
			</tr>';

			
				foreach($listesoin as $soin){
			echo'
			<tr>
				<td> '.$soin['nom'].'</td>
				<td> '.$soin['prix'].'</td>
				<td> '.$soin['discription'].'</td>
				
				<td>
					<form method="POST" action="modifiersoin.php">
						<input type="submit" name="Modifier" value="Modifier">
						<input type="hidden" value='.$soin['nom'] .'name="nom">
					</form>
				</td>
				<form name="f" method="GET">
				<td>
					<a href="supprimersoin.php?nom= '.$soin['nom'] .'">Supprimer</a>
				</td>
			</tr>
			</form>';
		
				}
			}
			?>
		</table>
			
	</body>
</html>
