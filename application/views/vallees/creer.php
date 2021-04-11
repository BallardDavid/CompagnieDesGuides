<?php
  echo '<h2>'.$titre.'</h2>';

  foreach ($vallees as $c){
    echo "Code : " . $c->code_Vallees. " Nom : " . $c->nom_Vallees."<br>";
}

  echo form_open('vallees/creer'); 
?>

  <label for="nom_Vallees">nom vallees</label>
  <?php echo form_error('nom_Vallees');?>
  <input type="text" name="nom_Vallees" />
  <input type="submit" name="submit" value="Créer !" />
</form>
