<?php
include("vues/v_sommaire.php");
$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['idVisiteur'];
switch($action){
	case 'vueDelegue':{
		$lesDelegues=$pdo->getLesMemeZoneDelegues($idVisiteur);
		// Afin de sélectionner par défaut le dernier mois dans la zone de liste
		// on demande toutes les clés, et on prend la première,
		// les mois étant triés décroissants
		include("vues/v_visualisationZonesDelegues.php");
		break;
	}

	case 'vueCreationVisiteur':{
		if(isset($_POST['login'])){
				$login = $_POST['login'];
				$leLogin = $pdo->loginExistant($login);
				if (!empty($leLogin)){
					echo "<script>alert(\"Login déja utilisé !\")</script>";
				}else{
					if(isset($_POST['id']) && isset($_POST['idRole']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['login']) && isset($_POST['mdp']) && isset($_POST['adresse']) && isset($_POST['cp']) && isset($_POST['ville']) && isset($_POST['dateEmbauche'])){
						$id = $_POST['id'];
						$idRole = $_POST['idRole'];
						$nom = $_POST['nom'];
						$prenom = $_POST['prenom'];
						$login = $_POST['login'];
						$mdp = $_POST['mdp'];
						$photo = 'NULL';
						$adresse = $_POST['adresse'];
						$cp = $_POST['cp'];
						$ville = $_POST['ville'];
						$dateEmbauche = $_POST['dateEmbauche'];
						$pdo->CreerVisiteur($id,$idRole,$nom,$prenom,$login,$mdp,$photo,$adresse,$cp,$ville,$dateEmbauche);
						echo "<script>alert(\"votre visiteur a bien été créée\")</script>";	
					}
				}
			}


			
			include("vues/v_visualisationCreerVisiteur.php");
			

			/*echo    $id;
			echo	$idRole;
			echo	$nom;
			echo	$prenom;
			echo	$login;
			echo	$mdp;
			echo	$photo;
			echo	$adresse;
			echo	$cp;
			echo	$ville;
			echo	$dateEmbauche;*/

			break;
		}

	

}
?>