<?php
  echo "<h2 class='text-center'>".$titre."</h2>";
?>
<table class="table table-striped table-responsive-lg">
    <thead>
        <tr>
            <th>Code</th>
            <th>Nom</th>
            <th>Altitude</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
<?php
  foreach ($sommets as $s){
    echo "<tr>";
    echo "<th scope='row'>".$s->code_Sommets."</th>";
    echo "<td>".$s->nom_Sommets."</td>";
    echo "<td>".$s->altitude_Sommets."</td>";
    echo "<td><a class='btn btn-warning btn-sm' href='http://".$_SERVER['SERVER_NAME']."/index.php/sommets/modifier/".$s->code_Sommets."'>Modifier</a></td>";
    echo "<td><a class='btn btn-danger btn-sm' href='http://".$_SERVER['SERVER_NAME']."/index.php/sommets/effacer/".$s->code_Sommets."'>Effacer</a></td>";
  }
?>
</tbody>
</table>