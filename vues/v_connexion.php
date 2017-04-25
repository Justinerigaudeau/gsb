<div id="contenu">
      <h2>Identification utilisateur</h2>


<form method="POST" action="index.php?uc=connexion&action=valideConnexion">
   
    <table style="border: 0">
        <tr>
          <td style="text-align: right; border: 0;">
            <label for="nom">Login*</label>
          </td>
          <td style="border: 0">
            <input id="login" type="text" name="login"  size="30" maxlength="45" required>
          </td>
        </tr>
        <tr>
          <td style="text-align: right; border: 0; padding-top: 10px;">
            <label for="mdp">Mot de passe*</label>
          </td>
          <td style="border: 0; padding-top: 10px;">
            <input id="mdp"  type="password"  name="mdp" size="30" maxlength="45" required>
          </td>
        </tr>
        <tr>
          <td style="border: 0">
          </td>
          <td style="text-align: center; border: 0; padding-top: 10px;">
            <input type="submit" value="Valider" name="valider"> <input type="reset" value="Annuler" name="annuler"> 
          </td>
        </tr>
      </table>
</form>

</div>