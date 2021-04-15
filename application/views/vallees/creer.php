<?php
  echo "<h2 class='text-center'>".$titre."</h2>";
?>
 <table class="table table-striped table-responsive-lg">
    <thead>
        <tr>
            <th>Code</th>
            <th>Nom</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
<?php
  foreach ($vallees as $v){
    echo "<tr>";
    echo "<th scope='row'>".$v->code_Vallees."</th>";
    echo "<td>".$v->nom_Vallees."</td>";
    echo "<td><a class='btn btn-warning btn-sm' href='http://".$_SERVER['SERVER_NAME']."/index.php/vallees/modifier/".$v->code_Vallees."'>Modifier</a></td>";
    echo "<td><a class='btn btn-danger btn-sm' href='http://".$_SERVER['SERVER_NAME']."/index.php/vallees/effacer/".$v->code_Vallees."'>Effacer</a><br><br>";
    echo "</tr>";
  }
?>
</tbody>
</table>
<?php
  echo form_open('vallees/creer'); 
?>
<div class="form-row container">

<div class="col-md-12 mb-1">
  <label for="nom_Vallees" class="col-form-label">Nom</label>
  <input type="text" name="nom_Vallees" class="form-control" />
  <div class="text-danger"><small><?php echo form_error('nom_Vallees');?></small></div>
</div>

  <input type="submit" name="submit" class="btn btn-warning btn-lg btn-block" value="Créer !" />
</form>
