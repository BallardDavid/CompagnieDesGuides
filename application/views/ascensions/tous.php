<?php
   echo "<h2 class='text-center'>".$titre."</h2>";
?>
<table class="table table-striped table-responsive-lg">
    <thead>
        <tr>
            <th>Code du sommet</th>
            <th>Nom du sommet</th>
            <th>Code de l'abri</th>
            <th>Nom de l'abri</th>
            <th>Difficulté</th>
            <th>Durée (en minutes)</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
<?php
  foreach ($ascensions as $a){
    echo "<tr>";
    echo "<th scope='row'>".$a->code_Sommets."</th>";
    echo "<td>".$a->nom_Sommets."</td>";
    echo "<th scope='row'>".$a->code_Abris."</th>";
    echo "<td>".$a->nom_Abris."</td>";
    echo "<td>".$a->difficulte_Ascension."</td>";
    echo "<td>".$a->duree_Ascension."</td>";
    echo "<td><a class='btn btn-warning btn-sm' href='http://".$_SERVER['SERVER_NAME']."/index.php/ascensions/modifier/".$a->code_Sommets."/".$a->code_Abris."'>Modifier</a></td>";
    echo "<td><a class='btn btn-danger btn-sm' href='http://".$_SERVER['SERVER_NAME']."/index.php/ascensions/effacer/".$a->code_Sommets."/".$a->code_Abris."'>Effacer</a></td>";
    echo "</tr>";
  }
?>
</tbody>
</table>
