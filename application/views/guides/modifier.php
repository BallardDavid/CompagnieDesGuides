<?php
  echo "<h2 class='text-center'>".$titre."</h2>";
  foreach ($guides as $c){
    echo form_open('guides/modifier/'.$c->code_Guides);
?>
<div class="form-row container">

<input type="text" name="code_Guides" value="<?php echo $c->code_Guides ?>" hidden/>

<div class="col-md-6 mb-3">
    <label for="nom" class="col-form-label">Nom</label>
    <input type="text" name="nom" class="form-control" value="<?php echo $c->nom_Guides; ?>" />
    <div class="text-danger"><small><?php echo form_error('nom'); ?></small></div>
</div>
<div class="col-md-6 mb-3">
    <label for="prenom" class="col-form-label">Prenom</label>
    <input type="text" name="prenom" class="form-control" value="<?php echo $c->prenom_Guides; ?>" />
    <div class="text-danger"><small><?php echo form_error('prenom'); ?></small></div>
</div>

<div class="col-md-6 mb-3">
    <label for="email" class="col-form-label">Email</label>
    <input type="text" name="email" class="form-control" value="<?php echo $c->email_Guides; ?>"/>
    <div class="text-danger"><small><?php echo form_error('email'); ?></small></div>
</div>

<div class="col-md-6 mb-3">
    <label for="Mot de passe" class="col-form-label">Mot de passe</label>
    <input type="text" name="mdp" class="form-control" value="<?php echo $c->motdepasse_Guides; ?>"/>
    <div class="text-danger"><small><?php echo form_error('mdp'); ?></small></div>
</div>

 <?php   }
?>
    <div class="text-danger"><?php echo $erreur;?></div>
  <input type="submit" name="submit" class="btn btn-warning btn-lg btn-block" value="Modifier !" />
</div>
</form>