  <div id="contenu">
      <h2>Visualisation Praticiens</h2>
    <!-- <h3>Praticiens : </h3> -->
  <form action="index.php?uc=visuVisiteur&action=vuePraticiens" method="post">
      <div class="corpsForm">
         
      <p>
   
        <label for="lstPrati" accesskey="n">Praticiens En Charge: </label>
       
            <?php
      foreach ($lesPraticiens as $unPraticien)
      {
	  $idPraticiens = $unPraticien['idPraticiens'];
	  $nom = $unPraticien['nom'];
	  ?> 
	   <tr>
	    <td> <?php echo $nom ?></td>
						
	</tr>
       
     <?php 
      }
           
       ?>    
            
        </select>
      </p>
      </div>
  </form>


        
      