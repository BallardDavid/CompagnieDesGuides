<?php
  echo '<h2>Détails de la randonnées'.$rando[0]->code_Randonnees.'</h2>';
?>
<table>
    <thead>
        <tr>
            <th>Code Randonnées</th>
            <th>Nombres de personnes</th>
            <th>Date de l'ascension</th>
            <th>Date de fin</th>
            <th>Code du guide</th>
        </tr>
    </thead>
<tbody>
<?php
echo "<tr>";
echo "<td>".$rando[0]->code_Randonnees."</td>";
echo "<td>".$rando[0]->nbPersonnes_Randonnees."</td>";
echo "<td>".$rando[0]->dateDebut_Randonnees."</td>";
echo "<td>".$rando[0]->dateFin_Randonnees."</td>";
echo "<td>".$rando[0]->code_Guides."</td>";
echo "<tr>";
?>
 </tbody>
</table>
<table>
    <thead>
        <tr>
            <th>Sommet</th>
            <th>Date de l'ascension</th>
            <th></th>
        </tr>
    </thead>
<tbody>
<?php
  foreach ($rando as $s){
    echo "<tr>";
    echo "<td>".$s->code_Sommets."</td>";
    echo "<td>".$s->date_Concerner."</td>";
    echo "<td> <a class='btn' href='http://".$_SERVER['SERVER_NAME']."/index.php/sommets/modifier/".$s->code_Sommets."'>Plus de détails sur le sommet</a></td>";
    echo "</tr>";
  }
?>
 </tbody>
</table>

<table>
    <thead>
        <tr>
            <th>Abris</th>
            <th>Date de réservation</th>
            <th>Statut</th>
            <th></th>
        </tr>
    </thead>
<tbody>
<?php
  foreach ($rando as $a){
    echo "<tr>";
    echo "<td>".$a->code_Abris."</td>";
    echo "<td>".$a->date_Reserver."</td>";
    echo "<td>".$a->statut_Reserver."</td>";
    echo "<td> <a class='btn' href='http://".$_SERVER['SERVER_NAME']."/index.php/sommets/modifier/".$a->code_Abris."'>Plus de détails sur l'abri</a></td>";
    echo "</tr>";
  }
?>
 </tbody>
</table>