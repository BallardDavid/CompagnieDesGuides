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
<?php
  echo form_open('ascensions/creer'); 
?>
<div class="form-row container">

<div class="col-md-6 mb-1">
  <label for="code_Sommets" class="col-form-label">Sommet</label>
  <select name="code_Sommets" id="code_Sommets" class="form-control">
  <option value="" selected></option>
    <?php
      foreach ($sommets as $c){
        echo '<option value="'.$c->code_Sommets.'">'.$c->nom_Sommets.' '.$c->altitude_Sommets.'m</option>';
      }
    ?>
  </select>
  <div class="text-danger"><small><?php echo form_error('code_Sommets');?></small></div>
</div>

<div class="col-md-6 mb-1">
  <label for="code_Abris" class="col-form-label">Abris</label>
  <select name="code_Abris" id="code_Abris" class="form-control">
  <option value="" selected></option>
    <?php
      foreach ($abris as $c){
        echo '<option value="'.$c->code_Abris.'">'.$c->nom_Abris.' - '.$c->type_Abris.' - '.$c->altitude_Abris.'m - '.$c->places_Abris.' Places</option>';
      }
    ?>
  </select>
  <div class="text-danger"><small><?php echo form_error('code_Abris');?></small></div>
  </div>


<div class="col-md-6 mb-1">
  <label for="difficulte_Ascension" class="col-form-label">Difficulté de l'ascension</label>
  <select name="difficulte_Ascension" id="difficulte_Ascension" class="form-control">
    <option value="" selected></option>
    <option value="débutant">débutant</option>
    <option value="confirmé">confirmé</option>
    <option value="expert">expert</option>
  </select>
  <div class="text-danger"><small><?php echo form_error('difficulte_Ascension');?></small></div>
</div>

<div class="col-md-6 mb-1">
  <label for="duree_Ascension" class="col-form-label">Durée de l'ascension (en minutes)</label>
  <input type="number" id="duree_Ascension" name="duree_Ascension" class="form-control">
  <div class="text-danger"><small><?php echo form_error('duree_Ascension');?></small></div>
</div>
  <span><?php echo $erreur;?></span>
  <input type="submit" name="submit" class="btn btn-warning btn-lg btn-block" value="Créer !" />
      </div>
</form>
