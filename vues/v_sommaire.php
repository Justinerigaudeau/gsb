    <!-- Division pour le sommaire -->
    <div id="menuGauche">
     <div id="infosUtil">
    
    <?php 
      $role = $pdo->getRole($_SESSION['idVisiteur']);
    ?>
    </div>  
        <ul id="menuList">
			<li >
			   Visiteur :<br>
				<?php echo $_SESSION['prenom']."  ".$_SESSION['nom']  ?>
			</li>

           <li class="smenu">
              <a href="index.php?uc=gererFrais&action=saisirFrais" title="Saisie fiche de frais ">Saisie fiche de frais</a>
           </li>

           <li class="smenu">
              <a href="index.php?uc=etatFrais&action=selectionnerMois" title="Consultation de mes fiches de frais">Mes fiches de frais</a>
           </li>

           <?php
           if($role== 1){
           ?>

            <li class="smenu">
              <a href="index.php?uc=visuVisiteur&action=vuePraticiens" title="Visualisation visiteur">Praticiens Confiés</a>
            </li>

            <li class="smenu">
              <a href="index.php?uc=visuVisiteur&action=vueZoneVisiteur" title="Visualisation visiteur">Visiteurs meme zone</a>
            </li>
  
            <li class="smenu">
              <a href="index.php?uc=visuVisiteur&action=vuePraticiensStructure" title="Visualisation visiteur">Praticiens dans la même structure</a>
            </li>
           <?php
            }

           
           if($role== 2){
           ?> 
            
            <li class="smenu">
              <a href="index.php?uc=visuDelegue&action=vueDelegue" title="Visualisation delegue">Délégue dans la même zone</a>
            </li>

           
            <li class="smenu">
              <a href="index.php?uc=visuDelegue&action=vueCreationVisiteur" title="Visualisation delegue">Création Visiteurs</a>
            </li>
           <?php } 

           
           if($role== 3){
           ?>
             
            <li class="smenu">
              <a href="index.php?uc=visuResponsable&action=creationPraticien" title="Création Praticien">Ajouter un Praticien</a>
            </li>

            
            <li class="smenu">
              <a href="index.php?uc=visuResponsable&action=vueZones" title="Visualisation responsable">Création Zone</a>
            </li>
          <?php } ?>

          <li class="smenu">
              <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
          </li>

        </ul> 
    </div>  