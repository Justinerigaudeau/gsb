<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
  $( function() {
    $( "#datepicker" ).datepicker({dateFormat: 'yy-mm-dd'}).val();
    
  } );
</script>
 
 <div id="contenu">
 <h2> Ajout d'un visiteur</h2>
  <table class="listeLegere">                                           
    </table>
      <form action="index.php?uc=visuDelegue&action=vueCreationVisiteur" method="post">
      <div class="corpsForm">
          <fieldset>
            <legend>Nouveau visiteur
            </legend>
            <p>
              <label for="txtDateHF">Id *</label>
              <input type="text" id="txtDateHF" name="id" size="30" maxlength="4" value="" required />
            </p>
            <p>
              <label for="txtLibelleHF">Id du role *</label>
              <input type="int" id="txtLibelleHF" name="idRole" size="30" maxlength="256" value="" required />
            </p>
            <p>
              <label for="txtLibelleHF">Nom *</label>
              <input type="text" id="txtLibelleHF" name="nom" size="30" maxlength="256" value="" required />
            </p>
            <p>
              <label for="txtLibelleHF">Prenom *</label>
              <input type="text" id="txtLibelleHF" name="prenom" size="30" maxlength="256" value="" required />
            </p>
            <p>
              <label for="txtDateHF">Login *</label>
              <input type="text" id="txtDateHF" name="login" size="30" maxlength="256" value="" required />
            </p>
            <p>
              <label for="txtLibelleHF">Mdp *</label>
              <input type="password" id="txtLibelleHF" name="mdp" size="30" maxlength="256" value="" required />
            </p>
            <p>
              <label for="txtLibelleHF">Adresse *</label>
              <input type="text" id="txtLibelleHF" name="adresse" size="30" maxlength="256" value="" required />
            </p>
            <p>
              <label for="txtDateHF">Cp *</label>
              <input type="int" id="txtDateHF" name="cp" size="30" maxlength="5" value="" required />
            </p>
            <p>
              <label for="txtLibelleHF">Ville *</label>
              <input type="text" id="txtLibelleHF" name="ville" size="30" maxlength="256" value="" required />
            </p>
            <p>
              <label for="txtLibelleHF">  Date d'embauche (aaaa-mm-jj) * :  </label>
        <input type="text" id="datepicker" name="dateEmbauche" size="30" maxlength="256" value="" required/>
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
  