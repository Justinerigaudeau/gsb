<?php

	require_once ("../include/class.pdogsb.inc.php");
	$pdo = PdoGsb::getPdoGsb();
	$lesVisiteurs = $pdo->getVisiteursParSpecialite($_REQUEST['id']);
?>
<select name="visiteur" required>
	<option value=""> -- Visiteur --</option>
	<?php
	foreach($lesVisiteurs as $lineVisiteur){
		?>
		<option value="<?=$lineVisiteur['id']?>"><?=ucfirst($lineVisiteur['nom'])?> <?=ucfirst($lineVisiteur['prenom'])?></option>
		<?php
	}
	?>
</select>