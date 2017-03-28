  <div id="contenu">
      <h2>Visualisation Praticiens</h2>
    <!-- <h3>Praticiens : </h3> -->
  <form action="index.php?uc=visuVisiteur&action=vuePraticiens" method="post">
      <div class="corpsForm">
         
      <p>
   
        <label for="lstPrati" accesskey="n">Praticiens En Charge: </label>
        <select id="lstPrati" name="lstPrati">
            <?php
      foreach ($lesPraticiens as $unPraticien)
      {
        ?>
        <option value="<?=$unPraticien['id']?>"><?=$unPraticien['nom']?> <?=$unPraticien['prenom']?></option>
        <?php 
      
      }
           
       ?>    
            
        </select>
      </p>
      </div>
  </form>


  
        
      