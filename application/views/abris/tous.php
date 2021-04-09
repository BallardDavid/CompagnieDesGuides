<?php
  echo '<h2>Liste des abris</h2>';
?>
<table>
    <thead>
        <tr>
            <th>Code</th>
            <th>Nom</th>
            <th>Type</th>
            <th>Altitude</th>
            <th>Nombre de places</th>
            <th>Prix nuit</th>
            <th>Prix repas</th>
            <th>Téléphone du gardien</th>
            <th>Code Vallée</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
<?php
  foreach ($abris as $c){
    echo "<tr>";
    echo "<td>".$c->code_Abris."</td>";
    echo "<td>".$c->nom_Abris."</td>";
    echo "<td>".$c->type_Abris."</td>";
    echo "<td>".$c->altitude_Abris."</td>";
    echo "<td>".$c->places_Abris."</td>";
    echo "<td>".$c->prixNuit_Abris."</td>";
    echo "<td>".$c->prixRepas_Abris."</td>";
    echo "<td>".$c->telGardien_Abris."</td>";
    echo "<td>".$c->code_Vallees."</td>";
    echo "<td> <a class='btn' href='abris/modifier/".$c->code_Abris."'>Modifier</a></td>";
    echo "<td> <a class='btn' href='abris/effacer/".$c->code_Abris."'>Effacer</a></td>";
    echo "</tr>";
  }
?>
 </tbody>
</table>