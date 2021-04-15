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
<?php
  echo form_open('guides/creer'); //Ouvre la balise form et crée la cible vers la route employes/creer
?>
<div class="form-row container">

<div class="col-md-6 mb-1">
  <label for="nom" class="col-form-label">Nom</label>
  <input type="text" name="nom" class="form-control"/>
  <div class="text-danger"><small><?php echo form_error('nom');?></small></div>
</div>

<div class="col-md-6 mb-1">
  <label for="prenom" class="col-form-label">Prenom</label>
  <input type="text" name="prenom" class="form-control"/>
  <div class="text-danger"><small><?php echo form_error('prenom');?></small></div>
</div>
<div class="col-md-6 mb-1">
  <label for="email" class="col-form-label">Email</label>
  <input type="text" name="email" class="form-control"/>
  <div class="text-danger"><small><?php echo form_error('email');?></small></div>
</div>
<div class="col-md-6 mb-1">
  <label for="mdp" class="col-form-label">Mot de passe</label>
  <input type="text" name="mdp" class="form-control"/>
  <div class="text-danger"><small><?php echo form_error('mdp');?></small></div>
</div>

  <div class="text-danger"><?php if (isset($erreur)){echo $erreur;}?></div>

  <input type="submit" name="submit" class="btn btn-warning btn-lg btn-block" value="Créer !" />
</form>
