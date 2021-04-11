<?php
  echo '<h2>'.$titre.'</h2>';
  foreach ($sommets as $c){
    echo form_open('Sommets/modifier/'.$c->code_Sommets); //Ouvre la balise form et crée la cible vers la route employes/creer
    echo'<input type="text" name="code_Sommets" value="'.$c->code_Sommets.'" hidden/>';
    echo '<label for="nom">nom Sommets</label>';
    echo'<input type="text" name="nom_Sommets" value="'.$c->nom_Sommets.'" />';
    echo '<label for="prenom">altitude Sommets</label>';
    echo '<input type="text" name="altitude_Sommets" value="'.$c->altitude_Sommets.'" />';
    }
?>
  <span><?php echo $erreur;?></span>
  <input type="submit" name="submit" value="Modifier !" />
</form>
