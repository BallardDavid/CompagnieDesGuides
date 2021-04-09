<?php
  echo '<h2>'.$titre.'</h2>';

  foreach ($employes as $e){
    echo $e->matricule." ".$e->prenom." ".$e->nom."<br>";
  }
?>
