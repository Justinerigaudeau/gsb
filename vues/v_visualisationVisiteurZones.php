  <div id="contenu">
      <h2>Visiteurs dans la meme zones</h2>
    <!-- <h3>Praticiens : </h3> -->
  <form action="index.php?uc=visuVisiteur&action=vueZoneVisiteur" method="post">
      <div class="corpsForm">
      <p>
   
        <label for="lstZoneVisiteur" accesskey="n">Visiteur Dans la meme Zone: </label>
        <select id="lstZoneVisiteur" name="lstZoneVisiteur">
            <?php
      foreach ($lesZonesVisiteurs as $uneZone)
      {
        ?>
        <option value="<?=$uneZone['idVisiteur']?>"><?=$uneZone['nom']?> <?=$uneZone['prenom']?> - <?=$uneZone['ville']?></option>
        <?php 
      
      }
           
       ?>    
            
        </select>
      </p>
      </div>
  </form>
  
        
      