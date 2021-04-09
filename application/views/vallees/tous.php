<?php
  echo '<h2>'.$titre.'</h2>';

  foreach ($vallees as $c){
    echo "Code : " . $c->code_Vallees. " Nom : " . $c->nom_Vallees."<br>";
    echo "<a href='vallees/modifier/".$c->code_Vallees."'>Modifier</a><a href='vallees/effacer/".$c->code_Vallees."'>Effacer</a><br><br>";
  }
?>
