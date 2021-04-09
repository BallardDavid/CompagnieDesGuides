<?php
  echo '<h2>'.$titre.'</h2>';
  foreach ($guides as $c){
    echo form_open('guides/modifier/'.$c->code_Guides); //Ouvre la balise form et crée la cible vers la route employes/creer
    echo'<input type="text" name="code_Guides" value="'.$c->code_Guides.'" hidden/>';
    echo '<label for="nom">Nom</label>';
    echo'<input type="text" name="nom" value="'.$c->nom_Guides.'" />';
    echo '<label for="prenom">Prenom</label>';
    echo '<input type="text" name="prenom" value="'.$c->prenom_Guides.'" />';
    echo '<label for="email">Email</label>';
    echo '<input type="text" name="email" value="'.$c->email_Guides.'"/>';
    echo '<label for="mdp">Mdp</label>';
    echo '<input type="text" name="mdp" value="'.$c->motdepasse_Guides.'"/>';
    }
?>
  <input type="submit" name="submit" value="Modifier !" />
</form>
