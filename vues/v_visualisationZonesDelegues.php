  <div id="contenu">
      <h2>Delegues la meme zones</h2>
    <!-- <h3>Praticiens : </h3> -->
  <form action="index.php?uc=visuDelegue&action=vueDelegue" method="post">
      <div class="corpsForm">
      <p>
   
        <label for="lstZoneVisiteur" accesskey="n">Delegues Dans la meme Zone: </label>
        <select id="lstZoneVisiteur" name="lstZoneVisiteur">
            <?php
      foreach ($lesDelegues as $unDelegue)
      {
        ?>
        <option value="<?=$unDelegue['idVisiteur']?>"><?=$unDelegue['nom']?> <?=$unDelegue['prenom']?></option>
        <?php 
      
      }
           
       ?>    
            
        </select>
      </p>
      </div>
  </form>
  