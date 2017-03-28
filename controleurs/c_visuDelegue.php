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

	

}
?>