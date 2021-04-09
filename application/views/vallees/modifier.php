<?php
  echo '<h2>'.$titre.'</h2>';
  foreach ($vallees as $c){
    echo form_open('Vallees/modifier/'.$c->code_Vallees);
    echo'<input type="text" name="code_Vallees" value="'.$c->code_Vallees.'" hidden/>';
    echo '<label for="nom">nom Sommets</label>';
    echo'<input type="text" name="nom_Vallees" value="'.$c->nom_Vallees.'" />';
    }
?>
  <input type="submit" name="submit" value="Modifier !" />
</form>
