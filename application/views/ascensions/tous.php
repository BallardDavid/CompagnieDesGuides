<?php
  echo '<h2>'.$titre.'</h2>';

  foreach ($ascensions as $c){
    echo "Code Sommet : " . $c->code_Sommets. " Nom Sommet: " . $c->nom_Sommets." Code Abri : " . $c->code_Abris." Nom Abri : " . $c->nom_Abris." Difficulte Ascension : " . $c->difficulte_Ascension." Duree Ascension : " . $c->duree_Ascension." minutes<br>";
    echo "<a href='sommets/modifier/".$c->code_Sommets."'>Modifier</a><a href='sommets/effacer/".$c->code_Sommets."'>Effacer</a><br><br>";
  }
?>
