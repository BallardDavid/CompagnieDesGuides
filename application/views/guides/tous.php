<?php
  echo "<h2 class='text-center'>".$titre."</h2>";
?>
<table class="table table-striped table-responsive-lg">
    <thead>
        <tr>
            <th>Code</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Mot de passe</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
<?php
  foreach ($guides as $g){
    echo "<tr>";
    echo "<th scope='row'>".$g->code_Guides."</th>";
    echo "<td>".$g->nom_Guides."</td>";
    echo "<td>".$g->prenom_Guides."</td>";
    echo "<td>".$g->email_Guides."</td>";
    echo "<td>".$g->motdepasse_Guides."</td>";
    echo "<td><a class='btn btn-warning btn-sm' href='http://".$_SERVER['SERVER_NAME']."/index.php/guides/modifier/".$g->code_Guides."'>Modifier</a></td>";
    echo "<td><a class='btn btn-danger btn-sm' href='http://".$_SERVER['SERVER_NAME']."/index.php/guides/effacer/".$g->code_Guides."'>Effacer</a></td>";
    echo "</tr>";
  }
?>
</tbody>
</table>
