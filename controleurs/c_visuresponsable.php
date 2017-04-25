<?php
include("vues/v_sommaire.php");
$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['idVisiteur'];
switch($action){
	case 'vueZones':
		if(!empty($_POST['libelle'])){ ;
		$libelle = $_REQUEST['libelle'];
		$pdo->creeNouvelleZones($libelle);	
		}
		//$pdo->creeNouvelleZones('zoneDeTest');
		
		include("vues/v_visualisationCreerZones.php");	
	
		break;

	case 'creationPraticien':
		if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['specialite']) && isset($_POST['visiteur']) ){
				$nom = $_POST['nom'];
				$prenom = $_POST['prenom'];
				$idSpecialite = $_POST['specialite'];
				$idVisiteur = $_POST['visiteur'];
				if($pdo->CreerPraticien($nom,$prenom,$idSpecialite,$idVisiteur))
					echo "<script>alert(\"Votre praticien a bien été créé!\")</script>";
				else
					echo "<script>alert(\"Votre praticien n'a pas pu être créé!\")</script>";
			}
		include("vues/v_visualisationCreerPraticien.php");	
	
		break;

	

}
?>