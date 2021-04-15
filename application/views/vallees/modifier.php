<?php
  echo "<h2 class='text-center'>".$titre."</h2>";
  foreach ($vallees as $c){
    echo form_open('Vallees/modifier/'.$c->code_Vallees);
  ?>
<div class="form-row container">


    <input type="text" name="code_Vallees" value="<?php echo $c->code_Vallees ?>" hidden/>
  <div class="col-md-12 mb-1">
    <label for="Nom" class="col-form-label">Nom</label>
    <input type="text" name="nom_Vallees" class="form-control" value="<?php echo $c->nom_Vallees ?>" />
    <div class="text-danger"><small><?php echo form_error('nom_Vallees') ?></small></div>
    </div>
<?php 
  }
?>
  <input type="submit" name="submit" class="btn btn-warning btn-lg btn-block" value="Modifier !" />
</div>
</form>
