<?php
include("vues/v_sommaire.php");
$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['idVisiteur'];
switch($action){
	case 'vueZones':{
		if(!empty($_POST['libelle'])){ ;
		$libelle = $_REQUEST['libelle'];
		$pdo->creeNouvelleZones($libelle);	
		}
		//$pdo->creeNouvelleZones('zoneDeTest');
		
		include("vues/v_visualisationCreerZones.php");	
	
		break;
	}

	

}
?>