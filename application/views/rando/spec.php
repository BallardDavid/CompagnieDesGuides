<?php
  echo "<h2 class='text-center'>Informations sur la Randonnées ".$rando[0]->code_Randonnees."</h2>";
?>
<table class="table table-striped table-responsive-lg">
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
echo "<th scope='row'>".$rando[0]->code_Randonnees."</th>";
echo "<td>".$rando[0]->nbPersonnes_Randonnees."</td>";
echo "<td>".$rando[0]->dateDebut_Randonnees."</td>";
echo "<td>".$rando[0]->dateFin_Randonnees."</td>";
echo "<td>".$rando[0]->code_Guides."</td>";
echo "<tr>";
?>
 </tbody>
</table>
<div class="container">
      
<table class="table table-striped table-responsive-lg">
    <thead>
      <tr>
            <th colspan="4" class="h3 bg-white">Informations sur les Sommets<th>
      </tr>
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
    echo "<th scope='row'>".$s->code_Sommets."</th>";
    echo "<td>".$s->date_Concerner."</td>";
    echo "<td></td>";
    echo "<td> <a class='btn btn-info btn-sm' href='http://".$_SERVER['SERVER_NAME']."/index.php/sommets/modifier/".$s->code_Sommets."'>Plus de détails sur le sommet</a></td>";
    echo "</tr>";
  }
?>
</tbody>
<thead>
      <tr>
            <th colspan="4" class="h3 bg-white">Informations sur les Abris<th>
      </tr>
      <tr>    
            <th>Abris</th>
            <th>Date de réservation</th>
            <th>Statut</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
<tbody>
<?php
  foreach ($rando as $a){
    echo "<tr>";
    echo "<th scope='row'>".$a->code_Abris."</th>";
    echo "<td>".$a->date_Reserver."</td>";
    echo "<td>".$a->statut_Reserver."</td>";
    echo "<td> <a class='btn btn-info btn-sm' href='http://".$_SERVER['SERVER_NAME']."/index.php/sommets/modifier/".$a->code_Abris."'>Plus de détails sur l'abri</a></td>";
    echo "</tr>";
  }
?>
 </tbody>
</table>
</div>