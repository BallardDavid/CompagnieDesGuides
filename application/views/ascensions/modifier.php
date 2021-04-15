<?php
   echo "<h2 class='text-center'>".$titre."</h2>";
  foreach ($ascensions as $c){
    echo form_open('ascensions/modifier/'.$c->code_Sommets.'/'.$c->code_Abris); 
  }
?>
<div class="form-row container">

<div class="col-md-6 mb-3">
  <label for="code_Sommets" class="col-form-label">Sommet</label>
  <select name="code_Sommets" class="form-control" id="code_Sommets">
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
  <div class="text-danger"><small><?php echo form_error('code_Sommets');?></small></div>
</div>

<div class="col-md-6 mb-3">
  <label for="code_Abris" class="col-form-label">Abris</label>
  <select name="code_Abris" id="code_Abris" class="form-control">
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
  <div class="text-danger"><small><?php echo form_error('code_Abris');?></small></div>
</div>
<div class="col-md-6 mb-3">
  <label for="Difficulté de l'Ascension" class="col-form-label">Difficulté de l'Ascension</label>
  <select name="difficulte_Ascension" id="difficulte_Ascension" class="form-control">
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
  <div class="text-danger"><small><?php echo form_error('difficulte_Ascension');?></small></div>
</div>
<div class="col-md-6 mb-3">
  <label for="duree_Ascension" class="col-form-label">duree Ascension (min)</label>
  <input type="number" id="duree_Ascension" name="duree_Ascension" class="form-control" value="<?php echo $ascensions[0]->duree_Ascension;?>">
  <div class="text-danger"><small><?php echo form_error('duree_Ascension');?></small></div>
</div>
  <span><?php echo $erreur;?></span>
  <input type="submit" name="submit" class="btn btn-warning btn-lg btn-block" value="Créer !" />
</div>
</form>
