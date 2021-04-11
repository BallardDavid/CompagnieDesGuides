<?php
  echo '<h2>'.$titre.'</h2>';

  foreach ($sommets as $c){
    echo "Code : " . $c->code_Sommets. " Nom : " . $c->nom_Sommets." Altitude : " . $c->altitude_Sommets."<br>";
}

  echo form_open('sommets/creer'); 
?>

  <label for="nom">nom Sommets</label>
  <input type="text" name="nom_Sommets" />
  <label for="prenom">altitude Sommets</label>
  <input type="text" name="altitude_Sommets" />
  <span><?php echo $erreur;?></span>
  <input type="submit" name="submit" value="Créer !" />
</form>
