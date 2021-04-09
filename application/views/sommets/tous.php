<?php
  echo '<h2>'.$titre.'</h2>';

  foreach ($sommets as $c){
    echo "Code : " . $c->code_Sommets. " Nom : " . $c->nom_Sommets." Altitude : " . $c->altitude_Sommets."<br>";
    echo "<a href='sommets/modifier/".$c->code_Sommets."'>Modifier</a><a href='sommets/effacer/".$c->code_Sommets."'>Effacer</a><br><br>";
  }
?>
