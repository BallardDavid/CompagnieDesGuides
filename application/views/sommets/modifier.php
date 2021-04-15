<?php
  echo "<h2 class='text-center'>".$titre."</h2>";
  foreach ($sommets as $s){
    echo form_open('Sommets/modifier/'.$s->code_Sommets);
?>
<div class="form-row container">
<input type="text" name="code_Sommets" value="<?php echo $s->code_Sommets ?>" hidden/>
  
<div class="col-md-12 mb-1">
  <label for="Nom du sommet" class="col-form-label">Nom du sommet</label>
  <input type="text" name="nom_Sommets" class="form-control" value="<?php echo $s->nom_Sommets; ?>" />
  <div class="text-danger"><small><?php echo form_error('nom_Sommets');?></small></div>
</div>

<div class="col-md-12 mb-1">
  <label for="Altitude du sommet" class="col-form-label">Altitude du sommet</label>
  <input type="text" name="altitude_Sommets" class="form-control" value="<?php echo $s->altitude_Sommets; ?>" />
  <div class="text-danger"><small><?php echo form_error('altitude_Sommets');?></small></div>
</div>
 <?php   }
?>
  <div class="text-danger"><?php echo $erreur;?></div>
  <input type="submit" class="btn btn-warning btn-lg btn-block" name="submit" value="Modifier !" />
</div>
</form> 