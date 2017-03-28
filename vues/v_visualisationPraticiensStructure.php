  <div id="contenu">
      <h2>Praticiens dans la même structure</h2>
    <!-- <h3>Praticiens : </h3> -->
  <form action="index.php?uc=visuVisiteur&action=vuePraticiensStructure" method="post">
      <div class="corpsForm">
      <p>
   
        <label for="lesStructuresPraticien" accesskey="n">Praticiens dans la même structure </label>
        <select id="lesStructuresPraticien" name="lesStructuresPraticien">
            <?php
      foreach ($lesStructuresPraticien as $uneStructure)
      {
        ?>
        <option value="<?=$uneStructure['id']?>"><?=$uneStructure['nom']?> <?=$uneStructure['prenom']?> </option>
        <?php 
      
      }
           
       ?>    
            
        </select>
      </p>
      </div>
  </form>
  
        
      