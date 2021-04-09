<?php
  echo '<h2>'.$titre.'</h2>';

  foreach ($employes as $e){
    echo $e->matricule." ".$e->prenom." ".$e->nom."<br>";
  }
  echo '<br>';

  echo form_open('employes/creer'); //Ouvre la balise form et crée la cible vers la route employes/creer
?>
  <label for="nom">Nom</label>
  <input type="text" name="nom" />

  <label for="prenom">Prénom</label>
  <input type="text" name="prenom" />

  <input type="submit" name="submit" value="Créer !" /><br>
</form>
