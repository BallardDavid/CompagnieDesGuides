<?php
  echo '<h2>'.$titre.'</h2>';

  // foreach ($guides as $c){
  //   echo $c->codeC." ".$c->nomC."<br>";
  // }
  // echo '<br>';

  echo form_open('guides/creer'); //Ouvre la balise form et crée la cible vers la route employes/creer
?>

  <label for="nom">Nom</label>
  <input type="text" name="nom" />
  <label for="prenom">Prenom</label>
  <input type="text" name="prenom" />
  <label for="email">Email</label>
  <input type="text" name="email" />
  <label for="mdp">Mdp</label>
  <input type="text" name="mdp" />

  <input type="submit" name="submit" value="Créer !" />
</form>
