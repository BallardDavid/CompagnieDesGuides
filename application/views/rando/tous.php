<?php
  echo "<h2 class='text-center'>Liste des randonnées</h2>";
?>
<table class="table table-striped table-responsive-lg">
    <thead>
        <tr>
            <th>Code</th>
            <th>Nombres de personnes</th>
            <th>Date de début de randonnées</th>
            <th>Date de la fin de la randonnées</th>
            <th>Code du Guide</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
<?php
  foreach ($rando as $c){
    echo "<tr>";
    echo "<th scope='row'>".$c->code_Randonnees."</th>";
    echo "<td>".$c->nbPersonnes_Randonnees."</td>";
    echo "<td>".$c->dateDebut_Randonnees."</td>";
    echo "<td>".$c->dateFin_Randonnees."</td>";
    echo "<td>".$c->code_Guides."</td>";
    echo "<td> <a <a class='btn btn-info btn-sm' href='http://".$_SERVER['SERVER_NAME']."/index.php/randonnees/".$c->code_Randonnees."'>Plus de détails</a></td>";
    echo "</tr>";
  }
?>
 </tbody>
</table>