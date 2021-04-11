<?php
  echo '<h2>'.$titre.'</h2>';
  foreach ($ascensions as $c){
    echo "Code Sommet : " . $c->code_Sommets. " Nom Sommet: " . $c->nom_Sommets." Code Abri : " . $c->code_Abris." Nom Abri : " . $c->nom_Abris." Difficulte Ascension : " . $c->difficulte_Ascension." Duree Ascension : " . $c->duree_Ascension." minutes<br>";
  }
  echo form_open('ascensions/creer'); 
?>
  <label for="code_Sommets">Sommets</label>
  <select name="code_Sommets" id="code_Sommets">
    <?php
      foreach ($sommets as $c){
        echo '<option value="'.$c->code_Sommets.'">'.$c->nom_Sommets.' '.$c->altitude_Sommets.'m</option>';
      }
    ?>
  </select>
  <label for="code_Abris">Abris</label>
  <select name="code_Abris" id="code_Abris">
    <?php
      foreach ($abris as $c){
        echo '<option value="'.$c->code_Abris.'">'.$c->nom_Abris.' - '.$c->type_Abris.' - '.$c->altitude_Abris.'m - '.$c->places_Abris.' Places</option>';
      }
    ?>
  </select>
  <?php

  ?>
  <label for="difficulte_Ascension">difficulte Ascension</label>
  <select name="difficulte_Ascension" id="difficulte_Ascension">
    <option value="débutant">débutant</option>
    <option value="confirmé">confirmé</option>
    <option value="expert">expert</option>
  </select>
  <label for="duree_Ascension">duree Ascension (min)</label>
  <input type="number" id="duree_Ascension" name="duree_Ascension">
  <span><?php echo $erreur;?></span>
  <input type="submit" name="submit" value="Créer !" />
</form>
