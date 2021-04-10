<?php
  echo "<h2 class='text-center'>Liste des abris</h2>";
?>
<table class="table table-striped table-responsive-lg">
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
    echo "<th scope='row'>".$c->code_Abris."</th>";
    echo "<td>".$c->nom_Abris."</td>";
    echo "<td>".$c->type_Abris."</td>";
    echo "<td>".$c->altitude_Abris."</td>";
    echo "<td>".$c->places_Abris."</td>";
    echo "<td>".$c->prixNuit_Abris."</td>";
    echo "<td>".$c->prixRepas_Abris."</td>";
    echo "<td>".$c->telGardien_Abris."</td>";
    echo "<td>".$c->code_Vallees."</td>";
    echo "<td> <a class='btn btn-warning btn-sm' href='http://".$_SERVER['SERVER_NAME']."/index.php/abris/modifier/".$c->code_Abris."'>Modifier</a></td>";
    echo "<td> <a class='btn btn-danger btn-sm' href='http://".$_SERVER['SERVER_NAME']."/index.php/abris/effacer/".$c->code_Abris."'>Effacer</a></td>";
    echo "</tr>";
  }
?>
 </tbody>
</table>