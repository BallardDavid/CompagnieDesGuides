<?php
  echo '<h2>'.$titre.'</h2>';
  foreach ($guides as $c){
    echo "Code : " . $c->code_Guides. " Nom : " . $c->nom_Guides." Prenom : " . $c->prenom_Guides. " Email : " . $c->email_Guides." Mot de passe : ".$c->motdepasse_Guides."<br>";
    echo "<a href='guides/modifier/".$c->code_Guides."'>Modifier</a><a href='guides/effacer/".$c->code_Guides."'>Effacer</a><br><br>";
  }
?>
