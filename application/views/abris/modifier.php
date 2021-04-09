<?php
  echo '<h2>'.$titre.'</h2>';
  foreach ($abris as $c){
    echo form_open('abris/modifier/'.$c->code_Abris); //Ouvre la balise form et crée la cible vers la route employes/creer
    ?>
<?php
    $this->load->helper('form');
    echo form_open('abris/creer'); //Ouvre la balise form et crée la cible vers la route employes/creer
?>

  <label for="Nom de l'abris">Nom de l'abris</label>
  <?php echo form_error('nom'); ?>
  <input type="text" name="nom" value="<?php echo $c->nom_Abris; ?>" />

  <label for="Type d'abris">Type</label>
  <?php echo form_error('type_abris'); ?>
  <select name="type_abris">
    <option value=""></option>
    <option value="refuge" <?php if ($c->type_Abris == "refuge"){echo "selected";}?>>Refuge</option>
    <option value="cabane" <?php if ($c->type_Abris == "cabane"){echo "selected";}?>>Cabane</option>
  </select>
  
  <label for="Altitude">Altitude</label>
  <?php echo form_error('altitude'); ?>
  <input type="number" name="altitude" value="<?php echo $c->altitude_Abris; ?>" />

  <label for="Nombre de places">Nombre de places</label>
  <?php echo form_error('nb_places'); ?>
  <input type="number" name="nb_places" value="<?php echo $c->places_Abris; ?>"/>

  
  <label for="Prix d'une nuit">Prix d'une nuit</label>
  <?php echo form_error('prix_nuit'); ?>
  <input type="text" name="prix_nuit" value="<?php echo $c->prixNuit_Abris; ?>"/>

  <label for="Prix d'un repas">Prix d'un repas</label>
  <?php echo form_error('prix_repas'); ?>
  <input type="text" name="prix_repas" value="<?php echo $c->prixRepas_Abris; ?>"/>

  <label for="Téléphone du gardien">Téléphone du gardien</label>
  <?php echo form_error('tel_gardien'); ?>
  <input type="number" name="tel_gardien" value="<?php echo $c->telGardien_Abris; ?>"/>

  <label for="Code la Vallée">Code de la Vallée</label>
  <?php echo form_error('code_vallee'); ?>
  <input type="number" name="code_vallee" value="<?php echo $c->code_Vallees; ?>"/>

  <input type="submit" name="submit" value="Modifier !" />
</form>
   <?php
    }
?>
  
