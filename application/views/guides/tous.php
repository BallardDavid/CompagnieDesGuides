<?php
  echo '<h2>'.$titre.'</h2>';

  foreach ($guides as $c){
    echo $c->code_Guides."<br>";
    echo $c->nom_Guides."<br>";
    echo $c->prenom_Guides."<br>";
    echo $c->email_Guides."<br>";
    echo $c->motdepasse_Guides."<br><br>";
  }
?>
