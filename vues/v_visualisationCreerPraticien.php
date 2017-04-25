  
  <div id="contenu">
 <h2> Ajout d'un Praticien</h2>
      <form action="index.php?uc=visuResponsable&action=creationPraticien" method="post">

      <div class="corpsForm">
          <fieldset>
            <legend>Nouveau Praticien
            </legend>
            <p>
              <label for="txtLibelleHF">Nom *</label>
              <input type="text" id="txtLibelleHF" name="nom" size="30" maxlength="256" value="" required />
            </p>
            <p>
              <label for="txtLibelleHF">Prenom *</label>
              <input type="text" id="txtLibelleHF" name="prenom" size="30" maxlength="256" value="" required />
            </p>
			<p>
			<label for="txtLibelleHF">Spécialité *</label>
            <select id="specialite" name="specialite" onChange="loadPart('vues/selectVisiteurs.php', 'visiteur', this.value)" required>
              
			  <option value=""> -- Specialite --</option>
              <?php
              $lesSpecialites=$pdo->getAllSpecialites();
              foreach($lesSpecialites as $lineSpecialite){
                echo $lineSpecialite['id'];
                ?>
                <option value="<?=$lineSpecialite['id']?>"><?=ucfirst($lineSpecialite['libelle'])?></option>"
                <?php
              }
              ?>
              </select>
			</p>
			<p>
			<label for="txtLibelleHF">Visiteur *</label>
            <div id="visiteur">
			
               <select name="visiteur" required>
                <option value=""> -- Visiteur --</option>
              </select>
            </div>
			</p>

			<div class="piedForm">
			<p>
				<p>* champs obligatoire</p>
				<input id="ajouter" type="submit" value="Ajouter" size="20" />
				<input id="effacer" type="reset" value="Effacer" size="20" />
			</p>
			</div>
			
          </fieldset>
      </div>
      </form>


  </div>
