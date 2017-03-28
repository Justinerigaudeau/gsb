<?php
include("vues/v_sommaire.php");
$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['idVisiteur'];
switch($action){
	case 'vuePraticiens':{
		$lesPraticiens=$pdo->getLesPraticiensParVisiteur($idVisiteur);
		// Afin de sélectionner par défaut le dernier mois dans la zone de liste
		// on demande toutes les clés, et on prend la première,
		// les mois étant triés décroissants
		include("vues/v_visualisationVisiteurPraticiens.php");
		break;
	}

	case'vueZoneVisiteur':{
		$lesZonesVisiteurs=$pdo->getLesVisiteursDanslaMemeZone($idVisiteur);
		include("vues/v_visualisationVisiteurZones.php");
		break;

	}

	case'vuePraticiensStructure':{
		$lesStructuresPraticiens=$pdo->getLesPraticiensDansMemeStructure($idVisiteur);
		include("vues/v_visualisationPraticiensStructure.php");
		break;
	}

}
?>