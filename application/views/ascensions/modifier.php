<?php
  foreach ($ascensions as $c){
    echo form_open('ascensions/modifier/'.$c->code_Sommets.'/'.$c->code_Abris); 
  }
?>
  <label for="code_Sommets">Sommets</label>
  <select name="code_Sommets" id="code_Sommets">
    <?php
      foreach ($sommets as $c){
        if($ascensions[0]->code_Sommets == $c->code_Sommets){
          echo '<option value="'.$c->code_Sommets.'" selected>'.$c->nom_Sommets.' '.$c->altitude_Sommets.'m</option>';
        } else {
          echo '<option value="'.$c->code_Sommets.'">'.$c->nom_Sommets.' '.$c->altitude_Sommets.'m</option>';
        }
      }
    ?>
  </select>
  <label for="code_Abris">Abris</label>
  <select name="code_Abris" id="code_Abris">
    <?php
      foreach ($abris as $c){
        if($ascensions[0]->code_Abris == $c->code_Abris){
          echo '<option value="'.$c->code_Abris.'" selected>'.$c->nom_Abris.' - '.$c->type_Abris.' - '.$c->altitude_Abris.'m - '.$c->places_Abris.' Places</option>';
        } else {
          echo '<option value="'.$c->code_Abris.'">'.$c->nom_Abris.' - '.$c->type_Abris.' - '.$c->altitude_Abris.'m - '.$c->places_Abris.' Places</option>';
        }
      }
    ?>
  </select>
  <?php

  ?>
  <label for="difficulte_Ascension">difficulte Ascension</label>
  <select name="difficulte_Ascension" id="difficulte_Ascension">
    <?php
      $tab=array("débutant","confirmé","expert");
      foreach($tab as $c){
        if($c == $ascensions[0]->difficulte_Ascension){
          echo "<option value='".$c."' selected>".$c."</option>";
        } else {
          echo "<option value='".$c."'>".$c."</option>";
        }
      }
    ?>
  </select>
  <label for="duree_Ascension">duree Ascension (min)</label>
  <input type="number" id="duree_Ascension" name="duree_Ascension" value="<?php echo $ascensions[0]->duree_Ascension;?>">
  <input type="submit" name="submit" value="Créer !" />
</form>
