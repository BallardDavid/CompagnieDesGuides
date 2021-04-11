<?php
  echo '<h2>'.$titre.'</h2>';

  foreach ($guides as $c){
    echo "Code : " . $c->code_Guides. " Nom : " . $c->nom_Guides." Prenom : " . $c->prenom_Guides. " Email : " . $c->email_Guides." Mot de passe : ".$c->motdepasse_Guides."<br><br>";

  }

  echo form_open('guides/creer'); //Ouvre la balise form et crée la cible vers la route employes/creer
?>

  <label for="nom">Nom</label>
  <?php echo form_error('nom');?>
  <input type="text" name="nom" />
  <label for="prenom">Prenom</label>
  <?php echo form_error('prenom');?>
  <input type="text" name="prenom" />
  <label for="email">Email</label>
  <?php echo form_error('email');?>
  <input type="text" name="email" />
  <label for="mdp">Mdp</label>
  <?php echo form_error('mdp');?>
  <input type="text" name="mdp" />
  <span><?php echo $erreur;?></span>
  <input type="submit" name="submit" value="Créer !" />
</form>
