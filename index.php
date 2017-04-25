<SCRIPT type="text/javascript">
      function getXHR() // création d'un objet qui récupere une valeur
      {
              var xhr=null;
              
              if (window.XMLHttpRequest) { // selon le navigateur
                xhr = new XMLHttpRequest();
              }
              else if (window.ActiveXObject) {
                xhr = new ActiveXObject("Microsoft.XMLHTTP");
              }
              
              return xhr;
      }
      
      function loadPart(fileName, divId, id = null){
        var xhr = getXHR();
        xhr.open('POST',fileName,true); // true : asynchronisation
        xhr.onreadystatechange = function(){ //fonction executée qd le statut change
          if (xhr.readyState == 4){ //statut = 4 quand on a recu les donnees
            if (document.getElementById){
              document.getElementById(divId).innerHTML = xhr.responseText;
            }
          }
        }
        xhr.setRequestHeader('Content-type','application/x-www-form-urlencoded');
        var data = 'id='+id;
        xhr.send(data);
      }
    </SCRIPT>
<?php
require_once("include/fct.inc.php");
require_once ("include/class.pdogsb.inc.php");
include("vues/v_entete.php") ;
session_start();
$pdo = PdoGsb::getPdoGsb();
$estConnecte = estConnecte();
if(!isset($_REQUEST['uc']) || !$estConnecte){
     $_REQUEST['uc'] = 'connexion';
}	 
$uc = $_REQUEST['uc'];
switch($uc){
	case 'connexion':{
		include("controleurs/c_connexion.php");break;
	}
	case 'gererFrais' :{
		include("controleurs/c_gererFrais.php");break;
	}
	case 'etatFrais' :{
		include("controleurs/c_etatFrais.php");break; 
	}
	case 'visuVisiteur' :{
		include("controleurs/c_visuVisiteur.php");break; 
	}
	case 'visuDelegue':{
		include("controleurs/c_visuDelegue.php");break; 
	}
	case 'visuResponsable':{
		include("controleurs/c_visuresponsable.php");break; 
	}
	
}
include("vues/v_pied.php") ;
?>

