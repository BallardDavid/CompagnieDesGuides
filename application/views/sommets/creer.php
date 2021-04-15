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
<?php
  echo form_open('sommets/creer'); 
?>
<div class="form-row container">
<div class="col-md-12 mb-1">
  <label for="nom" class="col-form-label">Nom du sommet</label>
  <input type="text" name="nom_Sommets" class="form-control"/>
  <div class="text-danger"><small><?php echo form_error('nom_Sommets');?></small></div>
</div>
<div class="col-md-12 mb-1">
  <label for="prenom" class="col-form-label">Altitude du sommet</label>
  <input type="text" name="altitude_Sommets" class="form-control"/>
  <div class="text-danger"><small><?php echo form_error('altitude_Sommets');?></small></div>
</div>
  <div class="text-danger"><?php echo $erreur;?></div>
  <input type="submit" name="submit" class="btn btn-warning btn-lg btn-block" value="Créer !" />
</div>
</form>
